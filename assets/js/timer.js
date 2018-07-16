!(function($) {
  'use strict';

  var Greeting = {
    options: {
      target: null
    },

    init: function(options, root) {

      this.root = $(root);
      this.options = $.extend({}, this.options, options);
      this.countDownDate = new Date(this.options.target);

      // Bind handlers
      this.bindHandlers();
    },

    bindHandlers: function() {
      this.runTimer(this.countDownDate);
    },
    runTimer: function(countDownDate) {

      setInterval(function() {
        var now = new Date().getTime();

        var distance = countDownDate - now;

        var days = Math.floor(distance / (1000 * 60 * 60 * 24)).toString();
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) /
            (1000 * 60 * 60)).toString();
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60)).
            toString();
        var seconds = Math.floor((distance % (1000 * 60)) / 1000).toString();
        if (hours.length < 2) {
          hours = '0' + hours;
        }
        if (minutes.length < 2) {
          minutes = '0' + minutes;
        }
        if (seconds.length < 2) {
          seconds = '0' + seconds;
        }
        var color = '#' + hours + minutes + seconds;
        document.getElementById('timer').innerHTML = days + ' днів ' + hours +
            'г ' + minutes + 'хв ' + seconds +"сек ";
        document.body.style.background = color;
      }, 1000);
    }

  };

  App.Page.Greeting = function(options, root) {
    root = root || $('body');

    root = $(root)[0];
    if (!$.data(root, '_Greeting')) {
      $.data(root, '_Greeting', Object.create(Greeting).init(options, root));
    }
    return $.data(root, '_Greeting');
  };
})(jQuery);