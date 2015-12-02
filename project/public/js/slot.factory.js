var SlotFactory = (function(){
	var PLAIN = "plain";
	var CARPOOL = "carpool";
	var availableSpaces = 4;
	var carpoolSpaces = 1;
	
	var PlainSlot = function(options){
		this.name = options.name || 'PlainSlot';
		availableSpaces--;
	};

	var CarPoolSlot = function(options){
		this.name = options.name || 'CarPoolSlot';
		availableSpaces--;
		carpoolSpaces--;
	};

	// Skeleton factory
	function Factory(){};
 
	// Our Factory method for creating new Slot instances
	Factory.prototype.createSlot = function ( options ) {
		options = options || {};
		switch(options.slotType){
			case CARPOOL:
				this.slotClass = CarPoolSlot;
				break;
			case PLAIN:
			default:
				this.slotClass = PlainSlot;
				break;
		}

		if(this.checkSpaces(options.slotType) < 1) throw new Error('No spaces left');

		return new this.slotClass( options );
	};

	// Placeholder for an ajax call to know if we have an available space
	Factory.prototype.checkSpaces = function ( type ) {

		return type == CARPOOL ? carpoolSpaces : availableSpaces;
	};

	return Factory;

})();


// Create an instance of our factory that makes slots
var slotFactory = new SlotFactory();

// Plain type
var plain = slotFactory.createSlot({slotType: "plain"});
console.log(plain);

// carpool type
var carpool = slotFactory.createSlot({slotType: "carpool"});
console.log(carpool);

// Plain type
var anotherPlain = slotFactory.createSlot();
console.log(anotherPlain);