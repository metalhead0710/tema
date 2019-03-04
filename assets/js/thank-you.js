!(function($) {
  'use strict';

  var Thank = {

    options: {
      url: null,
    },

    init: function(options, root) {

      this.root = $(root);
      this.options = $.extend({}, this.options, options);
      // Bind handlers
      this.bindHandlers();
    },


    bindHandlers: function() {
      var self = this;
      self.runTimer(4, self.options.url);
    },
    runTimer: function(seconds, url) {
      setInterval(function() {
        document.getElementById('timer').innerHTML = seconds;
        seconds -= 1;
        if (seconds === 0) {
          $(location).attr('href', url);
        }
      }, 1000);
    }
  };

  App.Page.Thank = function(options, root) {
    root = root || $('body');

    root = $(root)[0];
    if (!$.data(root, '_Thank')) {
      $.data(root, '_Thank', Object.create(Thank).init(options, root));
    }
    return $.data(root, '_Thank');
  };
})(jQuery);