var whiteMana = [0, 0, 0, 0];  //symbols, turn, needed, have
var blueMana = [0, 0, 0, 0];

var sixtyMath = [
	[],
	[14,13,12,11,10,9,9],			//one symbol
	["Impossible!",20,19,18,16,15,14], 		//two
	["Impossible!","Impossible!",22,22,21,20,19]		//three
];





function refreshNeeded(){	

	$('#white-needed').html(sixtyMath[whiteMana[0]][whiteMana[1]]);
	$('#blue-needed').html(sixtyMath[blueMana[0]][blueMana[1]]);
};

function updateSymbols(value, color){
	if (color=="white") {
		var symbols = Number(value);
		whiteMana[0] = symbols;
	};
	if (color=="blue") {
		var symbols = Number(value);
		blueMana[0] = symbols;

	};

	refreshNeeded();
	
};

function updateTurns(value, color){
	if (color=="white") {
		var turn = Number(value);
		whiteMana[1] = turn;
	};
	if (color=="blue") {
		var turn = Number(value);
		blueMana[1] = turn;
	};

	refreshNeeded();
};




$(function(){
	console.log(sixtyMath);

	$( ".js-select-symbols" ).change(function() {
		
		var color = $(this).data('color');
		
	  	updateSymbols(this.value, color); 
	});

	$( ".js-select-turn" ).change(function() {
		
		var color = $(this).data('color');
		
	  	updateTurns(this.value, color); 
	});

	







	$('.ui.dropdown')
  		.dropdown()
		;

});