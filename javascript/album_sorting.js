
	class table_array{
		constructor() {
			this.i = 0
			this.j = 0
			
			this.album = [
			  ["In Praise of Guiding Party", 2012, "In_Praise_of_the_Guiding_Party.png"],
			  ["Nuclear Fallout", 2014, "Nuclear_Fallout_EP.png"],
			  ["CeleFive", 2013, "CeleFive.jpg"],
			  ["Fan Tribute", 2019, "fan_tribute.jpg"],
			  ["Secertive Album", 2015, "secertive_album.jpg"]
			];
		}
		year_sort(){
			this.album.sort(function(a, b){return a[1] - b[1]});
		}
		name_sort(){
			this.album.sort(function(a, b){
  			  var x = a[0].toLowerCase();
 			  var y = b[0].toLowerCase();
 			  if (x < y) {return -1;}
 			  if (x > y) {return 1;}
 			  return 0;
 			 });
		}
	};
	new_table = new table_array();
	table_rebuild()

	function table_clean(){
		table = document.getElementById("album_table");
		rows = table.rows;
		len = Number(rows.length);
		for (i = 1; i < (len); i++) {
			table.deleteRow(1);
		}
	};

	function table_rebuild(){
		album_len = Number(new_table.album.length);
		for (i = 0; i < album_len; i++) {
			add_line(i);console.log(album_len);
		}
	};

	function button_year_sort(){
		table_clean();
		new_table.year_sort();
		table_rebuild();
	};

	function add_line(index) {
	  var table = document.getElementById("album_table");
	  rows = table.rows;
	  len = rows.length;
 	  var row = table.insertRow(len);
	  var cell1 = row.insertCell(0);
	  var cell2 = row.insertCell(1);
	  var cell3 = row.insertCell(2);
	  cell1.innerHTML = new_table.album[index][0];
	  cell2.innerHTML = new_table.album[index][1];
	  cell3.innerHTML="<img src='../images/"+new_table.album[index][2]+"' alt='hello' width='128' height='128'/>";
	};

	function button_name_sort(){
		table_clean();
		new_table.name_sort();
		table_rebuild();
	};
