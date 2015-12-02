var Slots = {
    slots: [],
    listeners: {},
    add: function(party) {
        this.slots.push({party: party});
        this.dispatch("parking-slot-taken");
    },
    on: function(eventName, listener) {
        if(!this.listeners[eventName]) this.listeners[eventName] = [];
        this.listeners[eventName].push(listener);
    },
    dispatch: function(eventName) {
        if(this.listeners[eventName]) {
            for(var i=0; i<this.listeners[eventName].length; i++) {
                this.listeners[eventName][i](this);
            }
        }
    },
    numOfSlotsTaken: function() {
        return this.slots.length;
    },
    displayList: function() {
        var rtnStr = "";
        for (var i=0; i<this.slots.length; i++) {
            rtnStr += this.slots[i].party + ", "
        }
        return rtnStr;
    }
};

Slots.on("parking-slot-taken", function() {
    console.log("Count: [" + Slots.numOfSlotsTaken()+"]");
    console.log("- Current slots: [" + Slots.displayList()+"]");
});

Slots.add("Yuber");
Slots.add("Cho cho cho le paro el taxi");