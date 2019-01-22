<template>
    <div>
        <section class="hero">
            <b-container>
                <b-row class="text-center">
                    <b-col>
                        <div class="hero__heading">
                            <h1>Compliance Assistance</h1>
                        </div>
                    </b-col>
                </b-row>
            </b-container>
        </section>
        <section class="about">
            <b-container>
                <b-row class="justify-content-center text-center">
                    <b-col sm="12" md="8">
                        <h1 class="heading">PlatOps Compliance Assistance: Address Your Governance, Risk and Compliance (GRC) Goals</h1>
                    </b-col>
                </b-row>
                <b-row class="justify-content-center">
                    <b-col sm="12" md="10">
                        <p>If your business processes credit cards, stores healthcare data or manages personally identifiable information, then there’s a good chance that you’re required to abide by regulatory mandates and standards, such as PCI-DSS. But thoroughly addressing your compliance requirements does more than just “check the box,” it helps make your business more secure and less hospitable to attackers.</p>
                    </b-col>
                </b-row>
                <b-row class="page__list justify-content-center">
                    <b-col sm="12" md="10" style="margin-top: 30px;">
                        <b-media tag="li">
                            <img slot="aside" class="checked-icon" src="../assets/images/check-sign.svg" />
                            <h5 class="mt-0 mb-1">PCI-DSS Compliance</h5>
                            <p>We provide the configuration hardening and monitoring, patching and user monitoring, and file integrity management and reporting necessary to help you meet your PCI related compliance goals.</p>
                        </b-media>
                        <b-media tag="li">
                            <img slot="aside" class="checked-icon" src="../assets/images/check-sign.svg" />
                            <h5 class="mt-0 mb-1">Security Experts</h5>
                            <p>We offer over 10 years of combined security and IT experience, with more than 15 unique industry certifications. So add PlatOps expertise, led by a technical account manager, to support your existing IT and GRC teams and resources.</p>
                        </b-media>
                        <b-media tag="li">
                            <img slot="aside" class="checked-icon" src="../assets/images/check-sign.svg" />
                            <h5 class="mt-0 mb-1">Best Practices</h5>
                            <p>We leverage leading technology and our best-in-breed security professionals to support compliance-related monitoring and management.</p>
                        </b-media>
                        <b-media tag="li">
                            <img slot="aside" class="checked-icon" src="../assets/images/check-sign.svg" />
                            <h5 class="mt-0 mb-1">Lower TCO</h5>
                            <p>PlatOps Compliance Assistance can provide a significantly lower Total Cost of Ownership (TCO) over internally-developed and hosted solutions and support.</p>
                        </b-media>
                    </b-col>
                </b-row>
                <b-row class="justify-content-center text-center">
                    <b-col sm="12" md="8">
                        <h1 class="heading">Compliance Across Platforms</h1>
                    </b-col>
                </b-row>
                <b-row class="justify-content-center">
                    <b-col sm="12" md="10">
                        <p>Let our team help you achieve compliance for your PlatOps-supported cloud — across AWS, VMware®, Microsoft Azure®, Microsoft HyperV® and traditional dedicated environments.</p>
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
    name: 'ComplianceAssistance'
}
</script>

<style lang="scss" scoped>
    .page__list {
        li {
            padding: 10px 0;
        }
    }
</style>
