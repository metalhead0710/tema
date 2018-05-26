!(function($) {
  'use strict';

  var Main = {

    options: {
      url: null,
      required: null
    },

    init: function(options, root) {

      this.root = $(root);
      this.options = $.extend({}, this.options, options);
      this.contactForm = $('#contact-form');
      this.sendEmail = $('.send-email');

      // Bind handlers
      this.bindHandlers();
    },

    bindHandlers: function() {
      var self = this;

      this.sendEmail.on('click', function(e) {
        self.contactForm.validate({
          email: {
            message: {required: 'wth'}
          },
          submitHandler: function() {
            self.send();
          }
        });
      });
    },
    send: function() {
      var msg   = this.contactForm.serialize();
      $.ajax({
        type: 'POST',
        url: this.options.url,
        data: msg,
        success: function(data) {
          $('.results').html(data);
          this.setTimeout();
          this.contactForm[0].reset();
        },
        error:  function(xhr, str){
          console.log('Error: ' + xhr.responseCode);
        }
      });
    },
    setTimeout: function(){
      $('.alert').fadeOut(4000)
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