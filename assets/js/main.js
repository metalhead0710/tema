!(function($) {
  'use strict';

  var Main = {

    options: {
      url: null,
      redirectUrl: null,
      required: null,
      notValidEmail: null
    },

    init: function(options, root) {

      this.root = $(root);
      this.options = $.extend({}, this.options, options);
      this.contactForm = $('#contact-form');
      this.sendEmail = $('.send-email');
      this.wow = new WOW({
        animateClass: 'animated',
        offset: 0
      });
      // Bind handlers
      this.bindHandlers();
    },

    bindHandlers: function() {
      var self = this;

      this.wow.init();

      $(".navbar-collapse a").on('click', function() {
        $(".navbar-collapse.collapse").removeClass('in');
      });

      // Navigation scrolls
      $('.navbar-nav li a, .overlay-detail a').bind('click', function(e) {
        var $anchor = $(this);
        var nav = $($anchor.attr('href'));
        if (nav.length) {
          $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - 68
          }, 900, 'easeInOutExpo');

          e.preventDefault();
        }
      });

      //jQuery to collapse the navbar on scroll
      $(window).scroll(function() {
        if ($(".navbar-default").offset().top > 50) {
          $(".navbar-fixed-top").addClass("top-nav-collapse");
        } else {
          $(".navbar-fixed-top").removeClass("top-nav-collapse");
        }
      });

      this.sendEmail.on('click', function() {
        self.contactForm.validate({
          messages: {
            name: self.options.required,
            email: {
              required: self.options.required,
              email: self.options.notValidEmail
            },
            phone: self.options.required
          },
          submitHandler: function() {
            self.send();
          }
        });
      });
    },
    send: function() {
      var self = this,
          msg   = self.contactForm.serialize();
      $.ajax({
        type: 'POST',
        url: this.options.url,
        data: msg,
        success: function(data) {
          if (self.isJson(data)) {
            $(location).attr('href', self.options.redirectUrl);
          } else {
            $('.results').html(data);
            setTimeout(self.removeNotification, 4000);
            self.contactForm[0].reset();
          }
        },
        error:  function(xhr, str){
          console.log('Error: ' + xhr.responseCode);
        }
      });
    },
    removeNotification: function() {
      $('.alert').fadeOut(2000);
    },
    isJson: function(str) {
      try {
        JSON.parse(str);
      }
      catch (e) {
        return false;
      }
      return true;
    }
  };

  App.Page.Main = function(options, root) {
    root = root || $('body');

    root = $(root)[0];
    if (!$.data(root, '_Main')) {
      $.data(root, '_Main', Object.create(Main).init(options, root));
    }
    return $.data(root, '_Main');
  };
})(jQuery);