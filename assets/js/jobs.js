$(function () {
  
  var filterList = {
    
    init: function() {

      $('#jobs-list').mixItUp({
        selectors: {
          target: '.job',
          filter: '.filter'
        },
        load: {
          filter: '.all'
        }
      });
    }
  };

  filterList.init();
})