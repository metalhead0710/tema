<template>
    <div>
        <section class="hero">
            <b-container>
                <b-row class="text-center">
                    <b-col>
                        <div class="hero__heading">
                            <h1>PlatOps Application Services</h1>
                        </div>
                    </b-col>
                </b-row>
            </b-container>
        </section>
        <section class="about">
            <b-container>
                <b-row class="justify-content-center text-center">
                    <b-col sm="12" lg="8">
                        <h1 class="heading">Building Digital-Ready Application Environments Through IT as a Service</h1>
                    </b-col>
                </b-row>
                <b-row class="about__body">
                    <b-col cols="6">
                        <div class="about__img">
                            <img src="@/assets/images/mockup-secondary-1.png" />
                        </div>
                    </b-col>
                    <b-col sm="12" lg="6">
                        <p>To drive fundamental business change, you need to employ and integrate new technologies quickly. But antiquated IT, siloed proprietary applications, outdated processes and resource-intensive operations can slow your pace of change.</p>
                        <p>Build a digital-ready application environment with professional and managed services designed to help you incorporate leading technologies easily. With PlatOps Application Services, you’ll get unbiased, outcome-focused application services built on unrivaled cloud expertise.</p>
                        <p>PlatOps Managed Infrastructure helps organizations focus on what’s most important - clients and reducing the cost associated with managing underlying applications, operating systems and infrastructure. Fully backed by a leading application-level SLA that fits unique business needs.</p>
                    </b-col>
                </b-row>
                <b-row class="justify-content-md-center text-center">
                    <b-col>
                        <button href="#" class="btn btn-bg-dark">Request FREE Quote</button>
                    </b-col>
                </b-row>
            </b-container>
        </section>
        <section class="features">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1366.03 109.55" class="curve-top"><g><g><path fill="#fff" d="M1366,3.22c0,2.63-1366-3-1366,0v86q81.38,6.57,166,11,32.73,1.69,65,3,56.63,2.46,115,4,57.83,1.52,114,2,75.75,1,156-1,49.39-1.26,97-3.61,45.65-2.14,93-5.39c20-1.38,52.56-3.63,94.67-7.56,33.53-3.13,84.87-8,150.33-17.44,30.31-4.38,51-7.92,85.68-13.84,79.27-13.54,143.2-26.35,183-34.59L1366,16.22C1366,6.89,1366.08-6.11,1366,3.22Z"/></g></g></svg>
            <svg  class="curve-bottom" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1366 109"><path fill="#fff" d="M1204.05,32c-36.23,6.7-64.74,12-102.6,18-21.64,3.45-88.24,13.82-177,23-17.52,1.81-95.7,9.76-203.19,15C700.43,89,620.6,92.75,504,93c-88.17.19-202-1.61-336-9L0,73v36H1366V0C1326.52,8.31,1271.07,19.61,1204.05,32Z"/><g></g></svg>
            <b-container>
                <b-row class="justify-content-md-center text-center">
                    <b-col>
                        <h5 class="subheading">Delivering IT as a Service across the leading digital technologies</h5>
                        <h1 class="heading">A comprehensive application services solutions</h1>
                    </b-col>
                </b-row>
                <b-row class="features__body">
                    <b-col sm="12" md="6">
                        <ul class="list-unstyled">
                            <b-media tag="li">
                                <img slot="aside" class="features__icon" src="@/assets/images/like.svg" />
                                <h5 class="mt-0 mb-1">Unbiased Expertise</h5>
                                <p>We simplify and guide your modernization journey, focusing on capabilities that deliver immediate value.</p>
                            </b-media>
                            <b-media tag="li">
                                <img slot="aside" class="features__icon" src="@/assets/images/plane.svg" />
                                <h5 class="mt-0 mb-1">Unrivaled Portfolio</h5>
                                <p>We apply extensive cloud experience to help you choose and deploy the right technology on the right cloud.</p>
                            </b-media>
                        </ul>
                    </b-col>
                    <b-col sm="12" md="6">
                        <ul class="list-unstyled">
                            <b-media tag="li">
                                <img slot="aside" class="features__icon" src="@/assets/images/heart-icon.svg" />
                                <h5 class="mt-0 mb-1">Awesome Experience</h5>
                                <p>We combine a process first, technology second approach, with dedicated technical support for comprehensive solutions.</p>
                            </b-media>
                            <b-media tag="li">
                                <img slot="aside" class="features__icon" src="@/assets/images/graph.svg" />
                                <h5 class="mt-0 mb-1">Agile Delivery</h5>
                                <p>We meet you where you are on your transformation journey, aligning our success with yours.</p>
                            </b-media>
                        </ul>
                    </b-col>
                </b-row>
            </b-container>
        </section>
        <section class="services">
            <b-container>
                <b-row>
                    <b-col class="services__box" sm="12" md="">
                        <h5>Professional Services for Applications</h5>
                        <p>Application modernization is more than just technology. It requires a comprehensive approach that aligns to business outcomes, examines the current IT environment, assesses the gaps and develops a customized, process-led plan.</p>
                        <p>Let our Professional Services team guide you, wherever you are on your transformation journey.</p>
                    </b-col>
                    <b-col class="services__box" sm="12" md="">
                        <h5>Application Management Services</h5>
                        <p>Your business success is tied to the applications you rely on — from servicing customers, to managing supply chains, to getting new products to market. </p>
                        <p>With an optimized environment built on leading technologies, you can deliver on your service level agreements, free up resources and reduce costs.</p>
                    </b-col>
                </b-row>
            </b-container>
        </section>
    </div>
</template>

<script>

export default {
    name: 'ApplicationServices'
}
</script>
