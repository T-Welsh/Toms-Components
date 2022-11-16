//Add jQuery Support fo dialog elements
jQuery.fn.extend({showModal: function() {
    return this.each(function() {
       if(this.tagName=== "DIALOG"){
            this.showModal();
        }
    });
}});
jQuery.fn.extend({close: function() {
    return this.each(function() {
       if(this.tagName=== "DIALOG"){
            this.close();
        }
    });
}});