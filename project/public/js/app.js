console.log('testing...');

var SlotFactory = (function(){
	

	var PlainSlot = function(options){
		var plain = {};
		plain.name = options.name || 'PlainSlot';
		return plain;
	};

	var CarPoolSlot = function(options){
		var carpool = {};
		carpool.name = options.name || 'CarPoolSlot';
		return carpool;
	};

	// Skeleton factory
	function Factory(){};
 
	// Our Factory method for creating new Slot instances
	Factory.prototype.createSlot = function ( options ) {
 
  		switch(options.slotType){
    		case "carpool":
      			this.slotClass = CarPoolSlot;
      			break;
      		case "plain":
      		default:
      			this.slotClass = PlainSlot;
      			break;
  		}
 
  		return new this.slotClass( options );
	};

	return Factory;

})();


// Create an instance of our factory that makes slots
var slotFactory = new SlotFactory();

// Plain type
var plain = slotFactory.createSlot({});
console.log(plain);

// carpool type
var carpool = slotFactory.createSlot({slotType: "carpool"});
console.log(carpool);

// Plain type
var anotherplain = slotFactory.createSlot({slotType: "plain"});
console.log(anotherplain);