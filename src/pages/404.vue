<template>
    <div>
        <section class="main-hero">
            <b-container class="text-center">
                <b-row class="justify-content-center">
                    <b-col md="8" xl="6">
                        <img class="error" src="../assets/images/404.svg"/>
                        <div class="main-hero__heading">
                            <h1>Oops! Page not found...</h1>
                            <p>It looks like you're trying to access a page that either has been deleted or never even existed.</p>
                        </div>
                    </b-col>
                </b-row>
            </b-container>
        </section>
    </div>
</template>

<script>
export default {
    name: '404'
}
</script>

<style lang="scss" scoped>

.main-hero {
    .error {
        margin-bottom: 20px;
    }
}

@media screen and (max-width: 1024px) {
    .main-hero {
        background-color:  #4093ff;
        background-image: none;
    }
}
</style>
