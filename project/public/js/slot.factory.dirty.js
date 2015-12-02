var availableSpaces = 4;
var carpoolSpaces = 1;

// Placeholder for an ajax call to know if we have an available space
function checkSpaces(type){
	return type == "carpool" ? carpoolSpaces : availableSpaces;
}

var PlainSlot = function(options){
	if(checkSpaces(options.name) < 1) throw new Error('No spaces left');
	this.name = options.name || 'PlainSlot';
	availableSpaces--;
};

var CarPoolSlot = function(options){
	if(checkSpaces(options.name) < 1) throw new Error('No spaces left');
	this.name = options.name || 'CarPoolSlot';
	availableSpaces--;
	carpoolSpaces--;
};


// Plain type
var plain = new PlainSlot({name: "plain"});
console.log(plain);

// carpool type
var carpool = new CarPoolSlot({name: "carpool"});
console.log(carpool);

// Plain type
var anotherplain = new PlainSlot({name: "anotherPlain"});
console.log(anotherplain);