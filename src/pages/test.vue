<template>
    <div>
        <section class="hero">
            <b-container>
                <b-row class="text-center">
                    <b-col>
                        <div class="hero__heading">
                            <h1>Contact forms</h1>
                        </div>
                    </b-col>
                </b-row>
            </b-container>
        </section>
        <contact-form></contact-form>
    </div>
</template>


<script>
import ContactForm from '@/components/contact-form'

export default {
    name: 'Test',
    components: {
        ContactForm
    }
}
</script>