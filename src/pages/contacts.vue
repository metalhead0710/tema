<template>
    <div>
        <section class="hero">
            <b-container>
                <b-row class="text-center">
                    <b-col>
                        <div class="hero__heading">
                            <h1>Contacts</h1>
                        </div>
                    </b-col>
                </b-row>
            </b-container>
        </section>
        <section class="contacts">
            <b-container fluid>
                <b-row class="justify-content-md-center">
                    <b-col md="8" lg="8" xl="8" class="contacts__body">
                        <b-row>
                            <b-col class="contacts__info">
                                <h5>USA</h5>
                                <ul class="list-unstyled contacts__list">
                                <b-media tag="li">
                                    <img slot="aside" class="address-icon" src="@/assets/images/placeholder.svg" />
                                    <p>223 S West St.Raleigh, NC 27603, USA</p>
                                </b-media>
                                <b-media tag="li">
                                    <img slot="aside" class="address-icon" src="@/assets/images/phone.svg" />
                                    <p><strong>+1 (408) 585-5403</strong></p>
                                </b-media>
                                <b-media tag="li">
                                    <img slot="aside" class="address-icon" src="@/assets/images/message.svg" />
                                    <p>office@platops.com</p>
                                    <p>info@example.com</p>
                                </b-media>
                                </ul>
                            </b-col>
                            <b-col class="contacts__info right-side">
                                <h5>Poland</h5>
                                <ul class="list-unstyled contacts__list">
                                <b-media tag="li">
                                    <img slot="aside" class="address-icon" src="@/assets/images/placeholder.svg" />
                                    <p>pl. Jana Kilińskiego 2, Rzeszów, Podkarpackie, Poland, 35-005</p>
                                </b-media>
                                <b-media tag="li">
                                    <img slot="aside" class="address-icon" src="@/assets/images/message.svg" />
                                    <p>poland@platops.com</p>
                                    <p>info@platops.com</p>
                                </b-media>
                                </ul>
                            </b-col>
                        </b-row>
                    </b-col>
                </b-row>
                <b-row>
                    <b-col cols="12" class="contacts__map" id="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3236.912731516213!2d-78.64790448518659!3d35.7775199801719!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89ac5f7aa85223d9%3A0x646fe22e1559ef49!2zMjIzIFMgV2VzdCBTdCwgUmFsZWlnaCwgTkMgMjc2MDMsINCh0L_QvtC70YPRh9C10L3RliDQqNGC0LDRgtC4INCQ0LzQtdGA0LjQutC4!5e0!3m2!1suk!2sua!4v1547777926796" width="100%" height="100%" style="border:none;" frameborder="0" allowfullscreen></iframe>
                        <!--<iframe src="https://goo.gl/maps/gynLSS3VQFU2" width="100%" height="100%" style="border:none;"></iframe>-->
                    </b-col>
                </b-row>
            </b-container>
        </section>
    </div>
</template>
<script>
// https://snazzymaps.com/embed/115751
function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
        disableDefaultUI: boolean,
        scrollwheel: boolean
    });
}
export default {
    name: 'Contacts'
}
</script>
