<template>
    <div class="contact-form">
        <b-form id="contact-form" v-if="show">
            <b-form-group id="name"
                          label="First Name *"
                          label-for="name">
                <b-form-input id="name"
                              name="name"
                              type="text"
                              v-model="form.name">
                </b-form-input>
            </b-form-group>
            <b-form-group id="surname"
                          label="Last Name *"
                          label-for="surname">
                <b-form-input id="surname"
                              type="text"
                              name="surname"
                              v-model="form.surname">
                </b-form-input>
            </b-form-group>
            <b-form-group id="company"
                          label="Company"
                          label-for="company">
                <b-form-input id="company"
                              type="text"
                              name="company"
                              v-model="form.company">
                </b-form-input>
            </b-form-group>
            <b-form-group id="email"
                          label="Email address *"
                          label-for="email">
                <b-form-input id="email"
                              type="email"
                              name="email"
                              v-model="form.email">
                </b-form-input>
            </b-form-group>
            <b-form-group id="tel"
                          label="Phone number"
                          label-for="tel">
                <b-form-input id="tel"
                              type="tel"
                              name="tel"
                              v-model="form.tel">
                </b-form-input>
            </b-form-group>
            <b-form-group id="message"
                          label="How can we assist you?"
                          label-for="message">
                <b-form-textarea id="message"
                                 name="message"
                                 v-model="form.text"
                                 :rows="3"
                                 :max-rows="6">
                </b-form-textarea>
            </b-form-group>
            <div class="form-buttons">
                <b-button type="submit" class="send-msg" variant="primary">Submit</b-button>
            </div>
        </b-form>
        <div class="results"></div>
    </div>
</template>

<script>
  require("jquery-validation")($);
  export default {
    name: 'ContactForm',
    data () {
      return {
        form: {
          name: '',
          surname: '',
          company: '',
          email: '',
          tel: '',
          text: ''
        },
        show: true
      }
    },
    mounted() {
      $('.send-msg').click( () => {
        $('form').validate({
          rules: {
            name: {
              required: true,
              minlength: 2
            },
            surname: {
              required: true,
              minlength: 2
            },
            email: {
              required: true,
              email: true
            },
            tel: {
              digits: true
            },
            message: 'required'
          },
          messages: {
            name: {
              required: "Please, enter your name.",
              minlength: "Please, enter at least 2 characters."
            },
            surname: {
              minlength: "Please, enter at least 2 characters."
            },
            email: {
              required: "Please, enter your email address.",
              email: "Please, enter a valid email address."
            },
            tel: {
              digits: "Please, enter only digits."
            },
            message: "Please, write your message."
          },
          submitHandler: () => {
            this.sendMessage();
          }
        });
      });
    },
    methods: {
      sendMessage() {
        let msg   = $('form').serialize();
        $.ajax({
          type: 'POST',
          url: '/api/email-us',
          data: msg,
          success: (data) => {
            $('.results').html(data);
            setTimeout(this.removeNotification, 4000);
            this.resetForm();
          },
          error:  function(xhr, str){
            console.log('Error: ' + xhr.responseCode);
          }
        });
      },
      resetForm() {
        $('input, textarea').each(function(){
          $(this).val('');
        });
      },
      removeNotification(){
        $('.alert').fadeOut(2000);
      }
    }
  }
</script>