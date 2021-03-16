
	const squares = document.querySelectorAll('.grid div')
	const scoreDisplay = document.querySelector('span')
	let score = 0
	let intervalTime = 0
	let interval = 0
	const song_list = [[1,0],[0,0],[1,0],[0,0],[0,0],[0,1],[0,1],[0,0],[0,0],[0,0]
	,[0,0],[0,0],[0,0],[0,0],[0,0],[0,0]]

	class nodes{
		constructor() {
			clearInterval(interval)
			this.screen_list = [[0,0],[0,0],[0,0],[0,0],[0,0],[0,0],[0,0],[0,0]];
			score = 0
			this.current_time = 0
			scoreDisplay.innerText = score
		}
		next_frame(){
			this.screen_list.unshift(song_list[this.current_time])
			this.current_time += 1;
			this.i = 0;
			this.j = 0;
			for (this.i = 0; this.i < 2; this.i++){
				for(this.j = 0; this.j < 8; this.j++){
					if(this.screen_list[this.j][this.i] == 1){
						console.log(this.i+this.j*2)
						squares[this.i+this.j*2].classList.add('indicatior')
					}
					else{
						squares[this.i+this.j*2].classList.remove('indicatior')
					}
				}
			}

			if(this.current_time >= song_list.length){
				console.log("fuck you");
				this.game_over()
			}
		}
		game_over(){
			clearInterval(interval);
		}
	};

	const bottom1 = document.querySelector('.bottom1')
	const bottom2 = document.querySelector('.bottom2')


	function click_1(){
		if(bottom1.classList.contains('indicatior')){
			score += 100
			scoreDisplay.innerText = score
			bottom1.classList.remove('indicatior')
		}
		else{
			score -= 20
			scoreDisplay.innerText = score
		}
	}

	function click_2(){
		if(bottom2.classList.contains('indicatior')){
			score += 100
			scoreDisplay.innerText = score
			bottom2.classList.remove('indicatior')
		}
		else{
			score -= 20
			scoreDisplay.innerText = score
		}
	}

	function start_game(){
		new_game = new nodes
		intervalTime = 600
		bottom1.addEventListener('click', click_1)
		bottom2.addEventListener('click', click_2)
		interval = setInterval(function(){
			new_game.next_frame()
		}
			, intervalTime)
	}

