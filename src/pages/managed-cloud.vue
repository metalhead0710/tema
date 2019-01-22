<template>
    <div>
        <section class="hero">
            <b-container>
                <b-row class="text-center">
                    <b-col>
                        <div class="hero__heading">
                            <h1>Managed Cloud</h1>
                        </div>
                    </b-col>
                </b-row>
            </b-container>
        </section>
        <section class="about">
            <b-container>
                <b-row class="justify-content-md-center text-center">
                    <b-col sm="12" md="8">
                        <h1 class="heading">Managed Services for Infrastructure, Cloud Networking, and Cloud Operations</h1>
                    </b-col>
                </b-row>
                <b-row class="justify-content-md-center">
                    <b-col sm="12" md="10">
                        <p>When running your own cloud, the complexities of compute, storage and (especially) networking can often be overwhelming.
We believe that “PlatOps” is an integral practice of continuous delivery and operations of cloud computing infrastructure, 24/7/365 with nonstop service, competitive performance and usability, scalability and security required for modern online services.
Our managed services team can handle around the clock operations of your dedicated infrastructure that has been sourced to meet current and forecasted workloads. We are agnostic but opinionated when it comes to hardware, software, data centre choices. Focus on your business, we will handle the operations.
</p>
                    </b-col>
                </b-row>
                <b-row class="justify-content-md-center text-center">
                    <b-col sm="12" md="8">
                        <h1 class="heading">Networking, Security and Data Protection are the hardest parts</h1>
                    </b-col>
                </b-row>
                <b-row class="justify-content-md-center">
                    <b-col sm="12" md="10">
                        <p>The amount of data we generate is increasing more rapidly that our ability to move it. With the fixed speed of light, our networks are bearing the burden.
We can help with our managed services include cloud-ready networking with Layer 7 application delivery and security solutions for of internal and external applications. Our 24/7 team will support, manage and monitor the Application Delivery Controller in your infrastructure. Innovative PlatOps Automation tool runs multiple checks to assure code is tested, reviewed and approved.
</p>
                        <ul class="main-services__text">
                            <li>Increate reliability, performance and security</li>
                            <li>Reduce risks and costs</li>
                            <li>Outsource maintenance and support to a team of experts</li>
                            <li>Onsite engineers’ deployment if needed</li>
                        </ul>
                    </b-col>
                </b-row>
                <!-- <b-row style="padding: 50px 0 0 0; display: flex; align-items: center" class="responsive-hidden">
                    <b-col style="display: flex; justify-content: center"><img width="200px" height="80px" src="@/assets/images/1.png"/></b-col>
                    <b-col style="display: flex; justify-content: center"><img width="200px" height="110px" src="@/assets/images/2.jpg"/></b-col>
                    <b-col style="display: flex; justify-content: center"><img width="200px" height="180px" src="@/assets/images/3.jpg"/></b-col>
                </b-row>
                <b-row style="padding: 0 0 100px 0; display: flex; align-items: center" class="responsive-hidden">
                    <b-col><img class="f-right" width="200px" height="110px" src="@/assets/images/4.jpg"/></b-col>
                    <b-col><img width="200px" class="f-left" height="140px" src="@/assets/images/5.png"/></b-col>
                </b-row> -->
            </b-container>
        </section>
        <section class="price-table">
            <b-container>
                <b-row class="justify-content-center">
                    <b-card-group deck>
                        <b-card border-variant="primary"
                                header="Silver"
                                header-bg-variant="primary"
                                header-text-variant="white"
                                align="center">
                            <b-list-group flush>
                                <b-list-group-item>Lowest-cost access to support services</b-list-group-item>
                            </b-list-group>
                            <b-card-body>
                                <p class="card-text">$150/mo</p>
                            </b-card-body>
                            <button onclick="window.open('https://cloud.platops.com/signup')" class="btn btn-bg-dark card-btn">Sign up</button>
                        </b-card>
                        <b-card border-variant="primary"
                                header="Gold"
                                header-bg-variant="primary"
                                header-text-variant="white"
                                align="center">
                            <b-list-group flush>
                                <b-list-group-item>For production services</b-list-group-item>
                            </b-list-group>
                            <b-card-body>
                                <p class="card-text">Starts at $400/mo</p>
                            </b-card-body>
                            <button onclick="window.open('https://cloud.platops.com/signup')" class="btn btn-bg-dark card-btn">Sign up</button>
                        </b-card>
                        <b-card border-variant="primary"
                                header="Platinum"
                                header-bg-variant="primary"
                                header-text-variant="white"
                                align="center">
                            <b-list-group flush>
                                <b-list-group-item>For high-volume production services</b-list-group-item>
                            </b-list-group>
                            <b-card-body>
                                <p class="card-text">Contact us for pricing</p>
                            </b-card-body>
                            <button onclick="window.open('https://cloud.platops.com/signup')" class="btn btn-bg-dark card-btn">Sign up</button>
                        </b-card>
                    </b-card-group>
                </b-row>
            </b-container>
        </section>
    </div>
</template>

<script>
export default {
    name: 'ManagedCloud'
}
</script>
