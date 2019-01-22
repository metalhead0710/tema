<template>
    <section class="my-contact-form">
        <div class="results"></div>
        <b-container>
            <b-row>
                <b-col sm="6">
                    <b-form @submit="onSubmit" @reset="onReset" v-if="show">
                        <b-form-group id="name"
                            label="First Name"
                            label-for="name">
                            <b-form-input id="name"
                                name="name"
                                type="text"
                                v-model="form.name"
                                >
                            </b-form-input>
                        </b-form-group>
                        <b-form-group id="surname"
                            label="Last Name"
                            label-for="surname">
                            <b-form-input id="surname"
                                type="text"
                                name="surname"
                                v-model="form.surname"
                                >
                            </b-form-input>
                        </b-form-group>
                        <b-form-group id="company"
                            label="Company"
                            label-for="company">
                            <b-form-input id="company"
                                type="text"
                                name="company"
                                v-model="form.company"
                                >
                            </b-form-input>
                        </b-form-group>
                        <b-form-group id="email"
                            label="Email address"
                            label-for="email">
                            <b-form-input id="email"
                                type="email"
                                name="email"
                                v-model="form.email"
                                >
                            </b-form-input>
                        </b-form-group>
                        <b-form-group id="tel"
                            label="Phone number"
                            label-for="tel">
                            <b-form-input id="tel"
                                type="tel"
                                name="tel"
                                v-model="form.tel"
                                >
                            </b-form-input>
                        </b-form-group>
                        <b-form-group id="message"
                            label="How can we assist you?"
                            label-for="message">
                            <b-form-textarea id="message"
                                name="message"
                                v-model="form.text"
                                :rows="3"
                                :max-rows="6"
                                >
                            </b-form-textarea>
                        </b-form-group>
                        <b-button type="submit" class="send-msg" variant="primary">Submit</b-button>
                        <b-button type="reset" variant="danger">Reset</b-button>
                    </b-form>
                </b-col>
            </b-row>
        </b-container>
    </section>    
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
            name: 'required',
            surname: 'required',
            company: 'required',
            email: {
              required: true,
              email: true
            },
            tel: 'required',
            message: 'required'
          },
          messages: {
            name: {
              required: "Please, enter name"
            },
            surname: {
              required: "Please, enter surname"
            },
            company: {
              required: "Please, enter company"
            },
            email: {
              required: "This field is required",
              email: "Email is fucking invalid"
            },
            tel: "I need your phone, motherfucker",
            message: "Write me something, please, I'm so lonely"
          },
          submitHandler: () => {
            this.sendMessage();
          }
        });
      });
    },
    methods: {
        onSubmit (evt) {
          evt.preventDefault();
        },
        onReset (evt) {
            evt.preventDefault();
            /* Reset our form values */
            this.form.name = '';
            this.form.surname = '';
            this.form.email = '';
            this.form.company = '';
            this.form.tel = '';
            this.form.email = '';
            this.form.text = ''
            /* Trick to reset/clear native browser form validation state */
            this.show = false;
            this.$nextTick(() => { this.show = true });
        },
        sendMessage() {
          let msg   = $('form').serialize();
          $.ajax({
            type: 'POST',
            url: 'email-us',
            data: msg,
            success: (data) => {
              $('.results').html(data);
              setTimeout(this.removeNotification, 4000);
              $('form')[0].reset();
            },
            error:  function(xhr, str){
              console.log('Error: ' + xhr.responseCode);
            }
          });
        },
        removeNotification(){
          $('.alert').fadeOut(2000);
        }
    }
}
</script>

<style lang="scss" scoped>

.my-contact-form {
    padding: 100px 0;
}

</style>
