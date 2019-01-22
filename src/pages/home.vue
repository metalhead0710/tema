<template>
    <div>
        <section class="main-hero">
            <b-container>
                <b-row>
                    <b-col sm="12" md="12" lg="12" xl="6">
                        <div class="main-hero__heading">
                            <h1>Managed Services for </h1>
                            <vue-typed-js :strings="['business owners.', 'companies.', 'individuals.']" :typeSpeed="60" :backSpeed="60" :loop="true">
                                <span class="typing"></span>
                            </vue-typed-js>
                            <p>Automating end-to-end delivery pipeline across cloud platforms for faster time to market,
                            increased efficiency and reduced cost.</p>
                            <button onclick="window.open('https://cloud.platops.com/signup')" class="btn btn-bg-light">Get Started Now</button>
                        </div>
                    </b-col>
                    <b-col class="main-hero__img">
                        <img src="../assets/images/mockup-hero.png"/>
                    </b-col>
                </b-row>
            </b-container>
        </section>
        <section class="main-services">
            <b-container>
                <b-row>
                    <b-col sm="12" md class="main-services__card">
                        <img class="main-services__img" src="../assets/images/icon-headphones.svg" />
                        <h5 class="main-services__title">Server Support Services</h5>
                        <p class="main-services__text">Never again face a server downtime. Our experts monitor your servers 24/7, quickly resolve issues, and keep your servers optimized, secured and updated.</p>
                        <a class="main-services__link" href="#">learn more</a>
                    </b-col>
                    <b-col sm class="main-services__card">
                        <img class="main-services__img" src="../assets/images/icon-cloud.svg" />
                        <h5 class="main-services__title">Advanced Security</h5>
                        <p class="main-services__text">There is no standard security solution in the World. Our engineers perform audits and make security solutions individually for every our customer.</p>
                        <a class="main-services__link" href="#">learn more</a>
                    </b-col>
                    <b-col sm class="main-services__card">
                        <img class="main-services__img" src="../assets/images/icon-chart.svg" />
                        <h5 class="main-services__title">Global Monitoring</h5>
                        <p class="main-services__text">Our monitoring system covers thousand metrics, including baseline checks, cloud integrated monitoring, application and security monitoring and more.</p>
                        <a class="main-services__link" href="#">learn more</a>
                    </b-col>
                </b-row>
            </b-container>
        </section>
        <section class="offer">
            <b-container>
                <b-row class="text-center">
                    <b-col>
                        <h5 class="subheading">what we offer</h5>
                        <h1 class="heading">A single platform for secured cloud controls</h1>
                    </b-col>
                </b-row>
                <b-row class="offer__body">
                    <b-col>
                        <img class="offer__img" src="../assets/images/mockup-laptop.png" fluid/>
                    </b-col>
                    <b-col sm="12" md="12" lg="12" xl="6">
                        <ul class="list-unstyled offer__list">
                            <b-media tag="li">
                                <img slot="aside" class="checked-icon" src="../assets/images/check-sign.svg" />
                                <h5 class="mt-0 mb-1">Security</h5>
                                <p>Encrypted communation, hourly security scans</p>
                            </b-media>
                            <b-media tag="li">
                                <img slot="aside" class="checked-icon" src="../assets/images/check-sign.svg" />
                                <h5 class="mt-0 mb-1">Global Monitoring</h5>
                                <p>We have more than 90 Worldwide monitoring locations to check your projects.</p>
                            </b-media>
                            <b-media tag="li">
                                <img slot="aside" class="checked-icon" src="../assets/images/check-sign.svg" />
                                <h5 class="mt-0 mb-1">Two-factor Authentication</h5>
                                <p>Two-factor authentication (2FA) is the best way to protect yourself online</p>
                            </b-media>
                            <b-media tag="li">
                                <img slot="aside" class="checked-icon" src="../assets/images/check-sign.svg" />
                                <h5 class="mt-0 mb-1">Encryption & Multi-layer Protection</h5>
                                <p>All data is encrypted with military grade standard. Our algorithms include a number of protection layers and keys</p>
                            </b-media>
                            <b-media tag="li">
                                <img slot="aside" class="checked-icon" src="../assets/images/check-sign.svg" />
                                <h5 class="mt-0 mb-1">Dashboards</h5>
                                <p>Full control on Metrics Dashboards</p>
                            </b-media>
                        </ul>
                    </b-col>
                </b-row>
            </b-container>
        </section>
        <section class="main-features">
            <b-container>
                <b-row class="text-center">
                    <b-col>
                        <h5 class="subheading">Discover the great features</h5>
                        <h1 class="heading">Number #1 Team Communication Application</h1>
                    </b-col>
                </b-row>
                <b-row class="main-features__body">
                    <b-col cols="12" md="6">
                        <h5 class="main-features__heading">DevOps Assessment</h5>
                        <p>Our DevOps consulting services assess your DevOps practices, audit your existing infrastructure, development pipeline, list down the redundant tasks and identify the right set of tools.
                            Furthermore, we develop an assessment report outlining action points for automation, provide DevOps Quotient Scorecard and Continuous Delivery Roadmap.
                        </p>
                        <button onclick="window.open('https://cloud.platops.com/signup')" class="btn btn-bg-dark">Get Started Now</button>
                    </b-col>
                    <b-col md="6">
                        <img class="main-features__img" src="../assets/images/img-1.png"/>
                    </b-col>
                </b-row>
                <b-row class="main-features__body">
                    <b-col md="6">
                        <img class="main-features__img responsive-img" src="../assets/images/img-2.png"/>
                    </b-col>
                    <b-col cols="12" md="6">
                        <h5 class="main-features__heading">DevOps Automation</h5>
                        <p>After auditing your existing setup and drawing the ideal workflows, we set-up & automate your continuous delivery pipeline. While automating the pipeline, we prevent risky deployment and increase productivity using our robust ecosystem of open source & licensed tools.</p>
                        <button onclick="window.open('https://cloud.platops.com/signup')" class="btn btn-bg-dark">Get Started Now</button>
                    </b-col>
                </b-row>
                <b-row class="main-features__body">
                    <b-col cols="12" md="6">
                        <h5 class="main-features__heading">DevOps Management</h5>
                        <p>Apart from automating your processes, we help you to manage the health of your continuous delivery pipeline. We take care of release management, continuous deployment, replica environment, new server setup, change management and performance optimization on an ongoing basis.</p>
                        <button onclick="window.open('https://cloud.platops.com/signup')" class="btn btn-bg-dark">Get Started Now</button>
                    </b-col>
                    <b-col md="6">
                        <img class="main-features__img" src="../assets/images/img-3.png"/>
                    </b-col>
                </b-row>
            </b-container>
        </section>
        <section class="action">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1366.03 109.55" class="curve-top"><g><g><path fill="#fff" d="M1366,3.22c0,2.63-1366-3-1366,0v86q81.38,6.57,166,11,32.73,1.69,65,3,56.63,2.46,115,4,57.83,1.52,114,2,75.75,1,156-1,49.39-1.26,97-3.61,45.65-2.14,93-5.39c20-1.38,52.56-3.63,94.67-7.56,33.53-3.13,84.87-8,150.33-17.44,30.31-4.38,51-7.92,85.68-13.84,79.27-13.54,143.2-26.35,183-34.59L1366,16.22C1366,6.89,1366.08-6.11,1366,3.22Z"/></g></g></svg>
            <b-container>
                <b-row class="justify-content-md-center">
                    <b-col sm="12" md="10">
                    <h1 class="action__heading">Get started for free — join the millions of developers already using GitHub to share their code, work together, and build amazing things.</h1>
                    <button onclick="window.open('https://cloud.platops.com/signup')" class=" btn btn-bg-light">Get Started Now</button>
                    </b-col>
                </b-row>
            </b-container>
        </section>
    </div>
</template>

<script>
export default {
    name: 'Home'
}
</script>
