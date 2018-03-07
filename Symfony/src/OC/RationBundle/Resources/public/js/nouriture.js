window.addEventListener("load", ()=> {
	var mod = document.getElementById("modifier");
	var save = document.getElementById("sauver");
	var table = document.getElementsByTagName("table");
	var print = document.getElementById("imprimer");

	mod.addEventListener("click", (ev)=> {
		mod.style.display="none";
		mod.style.display="block";
		for (var i = 1; i < table[0].rows.length; i++) {
			var row = table[0].rows[i];
			for (var j = 0; j < row.cells.length ; j++) {
				var target_data = row.cells[j].innerHTML;
				row.cells[j].innerHTML="<input type='text' value='"+target_data+"'>";
			}
			
		}
		for (var i = 1; i < table[1].rows.length; i++) {
			var row = table[1].rows[i];
			for (var j = 0; j < row.cells.length ; j++) {
				var target_data = row.cells[j].innerHTML;
				row.cells[j].innerHTML="<input type='text' value='"+target_data+"'>";
			}
			
		}
	});


	imprimer.addEventListener("click", ()=> {
		newWin= window.open("");
		newWin.document.write(table[0].outerHTML);
		newWin.document.write(table[1].outerHTML);
		newWin.print();
		newWin.close();
	});

	save.addEventListener("click", (ev)=> {
		save.style.display="none";
		save.style.display="block";
		for (var i = 1; i < table[0].rows.length; i++) {
			var row = table[0].rows[i];
			for (var j = 0; j < row.cells.length ; j++) {
				var input = row.cells[j].getElementsByTagName("input");
				var data = input[0].value
				row.cells[j].innerHTML= data;
			}
			
		}
		for (var i = 1; i < table[1].rows.length; i++) {
			var row = table[1].rows[i];
			for (var j = 0; j < row.cells.length ; j++) {
				var input = row.cells[j].getElementsByTagName("input");
				var data = input[0].value
				row.cells[j].innerHTML= data;
			}
			
		}
	});
});