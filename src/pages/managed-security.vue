<template>
    <div>
        <section class="hero">
            <b-container>
                <b-row class="text-center">
                    <b-col>
                        <div class="hero__heading">
                            <h1>Managed Security</h1>
                        </div>
                    </b-col>
                </b-row>
            </b-container>
        </section>
        <section class="about">
            <b-container>
                <b-row class="justify-content-center text-center">
                    <b-col sm="12" md="8">
                        <h1 class="heading">PlatOps Managed Security Services: Proactive Threat Detection and Rapid Remediation</h1>
                    </b-col>
                </b-row>
                <b-row class="justify-content-center">
                    <b-col sm="12" md="10">
                        <p>Now’s the time to adjust your security strategy — before your perimeter defenses are no longer effective against cyberattacks. Beyond prevention, you need swift breach detection and remediation to minimize the time criminals spend in your environment and the harm they can cause.</p>
                        <p>As a leading Managed Security Services Provider (MSSP), PlatOps not only offers monitoring and detection services but around-the-clock rapid response and remediation services.</p>
                    </b-col>
                </b-row>
                <b-row class="page__list justify-content-center">
                    <b-col sm="12" md="10" style="margin-top: 30px;">
                        <b-media tag="li">
                            <img slot="aside" class="checked-icon" src="../assets/images/check-sign.svg" />
                            <h5 class="mt-0 mb-1">Breach Detection</h5>
                            <p>Actively searching for threats is important for keeping your business safe. To find threats, you need a team that monitors and manages your environment 24x7x365, using advanced technology and analytics.</p>
                        </b-media>
                        <b-media tag="li">
                            <img slot="aside" class="checked-icon" src="../assets/images/check-sign.svg" />
                            <h5 class="mt-0 mb-1">Minimizing Breach Window</h5>
                            <p>The most precious resource for a threat is time. So your security strategy must include an approach to closing the breach window as quickly as possible — to get the bad guys out before they can cause harm.</p>
                        </b-media>
                        <b-media tag="li">
                            <img slot="aside" class="checked-icon" src="../assets/images/check-sign.svg" />
                            <h5 class="mt-0 mb-1">Threat Remediation</h5>
                            <p>Traditional managed service providers simply notify you of a breach, leaving it up to you to respond. But we act on anomalous events immediately, on your behalf, based on pre-approved actions.</p>
                        </b-media>
                        <b-media tag="li">
                            <img slot="aside" class="checked-icon" src="../assets/images/check-sign.svg" />
                            <h5 class="mt-0 mb-1">Reducing TCO</h5>
                            <p>Maintaining a fully staffed, around-the-clock security team can be expensive. But by turning to a MSSP with the resources and experience to detect and respond to security events on your behalf, you can help ensure your environment’s security while reducing your TCO.</p>
                        </b-media>
                    </b-col>
                </b-row>
                <b-row class="justify-content-center text-center">
                    <b-col sm="12" md="8">
                        <h1 class="heading">Upgrade Your Security Strategy</h1>
                    </b-col>
                </b-row>
                <b-row class="justify-content-center">
                    <b-col sm="12" md="10">
                        <p>When you need help securing your PlatOps-supported cloud — across AWS, VMware®, Microsoft Azure®, Microsoft HyperV® and traditional dedicated environments — turn to our Managed Security Services.</p>
                    </b-col>
                </b-row>
            </b-container>
        </section>
        <section class="page">
            <b-container>
                <b-row class="justify-content-center text-center">
                    <b-col sm="12" md class="page__card">
                        <img class="page__img" src="../assets/images/people.svg" />
                        <h5 class="page__title">People</h5>
                        <p class="page__text">Our Customer Security Operations Center (CSOC) is staffed 24x7x365 by best-in-breed, GCIA- and GCIH-certified security analysts whose credentials meet or surpass industry standards.</p>
                    </b-col>
                    <b-col sm="12" md class="page__card">
                        <img class="page__img" src="../assets/images/process.svg" />
                        <h5 class="page__title">Process</h5>
                        <p class="page__text">Unlike many other managed security service providers, we not only detect but also rapidly respond to threats — performing appropriate remediation based on pre-approved actions.</p>
                    </b-col>
                    <b-col sm="12" md class="page__card">
                        <img class="page__img" src="../assets/images/management.svg" />
                        <h5 class="page__title">Technology</h5>
                        <p class="page__text">We actively counteract threats using industry-leading host and network protection, threat intelligence and security analytics, log management and vulnerability scanning technologies.</p>
                    </b-col>
                </b-row>
            </b-container>
        </section>
    </div>
</template>

<script>

export default {
    name: 'ManagedSecurity'
}
</script>

<style lang="scss" scoped>
    .page__list {
        li {
            padding: 10px 0;
        }
    }
</style>
