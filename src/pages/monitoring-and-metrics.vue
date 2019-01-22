<template>
    <div>
        <section class="hero">
            <b-container>
                <b-row class="text-center">
                    <b-col>
                        <div class="hero__heading">
                            <h1>Managed Monitoring Services</h1>
                        </div>
                    </b-col>
                </b-row>
            </b-container>
        </section>
        <section class="about">
            <b-container>
                <b-row class="justify-content-md-center text-center">
                    <b-col sm="12" lg="8">
                        <h1 class="heading">Gain additional resources on your IT team, with our Monitoring as a Service</h1>
                    </b-col>
                </b-row>
                <b-row class="about__body">
                    <b-col sm="12" md="12" lg="6">
                        <p>It can be challenging to allocate IT manpower resources to monitor and manage critical components of your virtual environments. PlatOps Monitoring Managed Service is a supplemental proactive monitoring service for Public, Private, and Hybrid solutions that will serve as additional support to your IT team to monitor and resolve all of your critical alerts for you 24x7x365.</p>
                        <p>Our NOC will carefully monitor all critical components in your environment, as well as designing a custom escalation strategy should issues arise. Customers are able to subscribe to this service at a per VM level, providing flexibility and cost efficiency for critical servers that require this level of high touch service.</p>
                        <p>Monitoring as a Service (MaaS) lets you implement a monitoring application online. We host the monitoring software for you, which means you won’t have to install it on the computers in your network. Another advantage: you no longer have to bother with maintenance and updates.</p>
                    </b-col>
                    <b-col sm="12" md="12" lg="6">
                        <div role="tablist" class="accordion">
                            <div class="mb-1">
                                <b-card-header role="tab">
                                    <b-btn block href="#" v-b-toggle.accordion1 class="collapsed" variant="info">Cloud Monitoring
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 492.004 492.004" style="enable-background:new 0 0 492.004 492.004;" xml:space="preserve" width="512px" height="512px">
                                    <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12    c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028    c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265    c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z" fill="#d4d4d4"/>
                                    </svg>
                                    </b-btn>
                                </b-card-header>
                                <b-collapse id="accordion1" accordion="my-accordion" role="tabpanel">
                                    <b-card-body class="accordion__body">
                                        <p class="card-text">Our Cloud monitoring service which covers application servers, databases, servers, VMware, web transactions, etc. This along with cloud monitoring capabilities, allow organizations to proactively monitor the health and performance of their critical cloud infrastructure as well as the applications hosted on the cloud.</p>
                                        <ul class="card-text">
                                            <li>AWS, Google, Azure clouds support</li>
                                            <li>Docker, Kubernetes and Serverless support</li>
                                            <li>Monitoring as a Service</li>
                                            <li>Alerts, SLA & Reports Management</li>
                                        </ul>
                                    </b-card-body>
                                </b-collapse>
                            </div>
                            <div class="mb-1">
                                <b-card-header role="tab">
                                    <b-btn block href="#" v-b-toggle.accordion2 class="collapsed" variant="info">Network Monitoring
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 492.004 492.004" style="enable-background:new 0 0 492.004 492.004;" xml:space="preserve" width="512px" height="512px">
                                    <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12    c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028    c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265    c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z" fill="#d4d4d4"/>
                                    </svg>
                                    </b-btn>
                                </b-card-header>
                                <b-collapse id="accordion2" accordion="my-accordion" role="tabpanel">
                                    <b-card-body class="accordion__body">
                                        <p class="card-text">Our cloud-based network management service, we can configure and remotely monitor all of your important network systems (e-mail, servers, routers, available disk space, backup applications, critical virus detection, and more). We can ensure your network is always reliable and available – even during off hours or when you’re engineers and IT staff are not on site.</p>
                                        <ul class="card-text">
                                            <li>Router and Switches Monitoring</li>
                                            <li>Firewall and ACLs Monitoring</li>
                                            <li>Load Balancer and UPS Monitoring </li>
                                            <li>Network mapping</li>
                                        </ul>
                                    </b-card-body>
                                </b-collapse>
                            </div>
                            <div class="mb-1">
                                <b-card-header role="tab">
                                    <b-btn block href="#" v-b-toggle.accordion3 class="collapsed" variant="info">Custom Monitoring
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 492.004 492.004" style="enable-background:new 0 0 492.004 492.004;" xml:space="preserve" width="512px" height="512px">
                                    <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12    c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028    c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265    c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z" fill="#d4d4d4"/>
                                    </svg>
                                    </b-btn>
                                </b-card-header>
                                <b-collapse id="accordion3" accordion="my-accordion" role="tabpanel">
                                    <b-card-body class="accordion__body">
                                        <p class="card-text">Our monitoring engineers can help you with custom monitoring architecture and development. Also you get virtually limitless opportunities to monitor any kind of system and business metrics with our easy-to-use API, with full documentation.</p>
                                        <ul class="card-text">
                                            <li>SNMP Trap processing</li>
                                            <li>Auto-discovery</li>
                                            <li>Run your own monitoring scripts</li>
                                            <li>RESTful API</li>
                                        </ul>
                                    </b-card-body>
                                </b-collapse>
                            </div>
                            <div class="mb-1">
                                <b-card-header role="tab">
                                    <b-btn block href="#" v-b-toggle.accordion4 class="collapsed" variant="info">Server
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 492.004 492.004" style="enable-background:new 0 0 492.004 492.004;" xml:space="preserve" width="512px" height="512px">
                                    <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12    c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028    c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265    c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z" fill="#d4d4d4"/>
                                    </svg>
                                    </b-btn>
                                </b-card-header>
                                <b-collapse id="accordion4" accordion="my-accordion" role="tabpanel">
                                    <b-card-body class="accordion__body">
                                        <p class="card-text">We offers comprehensive server and virtual machine monitoring for all popular Linux distributions and Windows versions, whether onsite, in private or public clouds, or in IaaS environments.</p>
                                        <ul class="card-text">
                                            <li>Baseline monitoring</li>
                                            <li>Auto-discovery for Linux, Windows, FreeBSD</li>
                                            <li>PlatOps Metrics Collector software support</li>
                                            <li>PlatOps monitoring agent</li>
                                        </ul>
                                    </b-card-body>
                                </b-collapse>
                            </div>
                            <div class="mb-1">
                                <b-card-header class="last-header" role="tab">
                                    <b-btn block href="#" v-b-toggle.accordion5 class="collapsed" variant="info">Application Monitoring
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 492.004 492.004" style="enable-background:new 0 0 492.004 492.004;" xml:space="preserve" width="512px" height="512px">
                                    <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12    c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028    c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265    c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z" fill="#d4d4d4"/>
                                    </svg>
                                    </b-btn>
                                </b-card-header>
                                <b-collapse id="accordion5" accordion="my-accordion" role="tabpanel">
                                    <b-card-body class="last">
                                        <p class="card-text">Application Monitoring Service provides development and operations teams with the information that they need to find and fix application issues fast. All your end-user and application performance information (with associated application logs) are brought together into unified big data platform.</p>
                                        <ul class="card-text">
                                            <li>Java Performance Monitoring</li>
                                            <li>Monitor your entire .NET stack</li>
                                            <li>Ruby Application Monitoring</li>
                                            <li>Log Management for Developers</li>
                                        </ul>
                                    </b-card-body>
                                </b-collapse>
                            </div>
                        </div>
                    </b-col>
                </b-row>
            </b-container>
        </section>
        <section class="features">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1366.03 109.55" class="curve-top"><g><g><path fill="#fff" d="M1366,3.22c0,2.63-1366-3-1366,0v86q81.38,6.57,166,11,32.73,1.69,65,3,56.63,2.46,115,4,57.83,1.52,114,2,75.75,1,156-1,49.39-1.26,97-3.61,45.65-2.14,93-5.39c20-1.38,52.56-3.63,94.67-7.56,33.53-3.13,84.87-8,150.33-17.44,30.31-4.38,51-7.92,85.68-13.84,79.27-13.54,143.2-26.35,183-34.59L1366,16.22C1366,6.89,1366.08-6.11,1366,3.22Z"/></g></g></svg>
            <b-container>
                <b-row>
                    <b-col sm="12" md="4">
                        <ul class="list-unstyled features__list">
                            <b-media tag="li">
                                <img slot="aside" class="features__icon" src="@/assets/images/like.svg" />
                                <h5 class="mt-0 mb-1">Centralized monitoring</h5>
                                <p>Monitor multiple data centers in different locations from a single dashboard.</p>
                            </b-media>
                        </ul>
                    </b-col>
                    <b-col sm="12" md="4">
                        <ul class="list-unstyled">
                            <b-media tag="li">
                                <img slot="aside" class="features__icon" src="@/assets/images/heart-icon.svg" />
                                <h5 class="mt-0 mb-1">Scalability</h5>
                                <p>Easily add as many infrastructures and components as you require.</p>
                            </b-media>
                        </ul>
                    </b-col>
                    <b-col sm="12" md="4">
                        <ul class="list-unstyled">
                            <b-media tag="li">
                                <img slot="aside" class="features__icon" src="@/assets/images/graph.svg" />
                                <h5 class="mt-0 mb-1">Proactive notifications</h5>
                                <p>Stay in control from anywhere 24x7, PlatOps offers customizable smart alerts.</p>
                            </b-media>
                        </ul>
                    </b-col>
                </b-row>
                <b-row>
                    <b-col sm="12" md="4">
                        <ul class="list-unstyled">
                            <b-media tag="li">
                                <img slot="aside" class="features__icon" src="@/assets/images/cloud.svg" />
                                <h5 class="mt-0 mb-1">Easy-to-setup</h5>
                                <p>Get up and running in just 5 minutes.</p>
                            </b-media>
                        </ul>
                    </b-col>
                    <b-col sm="12" md="4">
                        <ul class="list-unstyled">
                            <b-media tag="li">
                                <img slot="aside" class="features__icon" src="@/assets/images/lock.svg" />
                                <h5 class="mt-0 mb-1">Agent-based and Agent-less</h5>
                                <p>Configuring monitoring takes only a matter of minutes.</p>
                            </b-media>
                        </ul>
                    </b-col>
                    <b-col sm="12" md="4">
                        <ul class="list-unstyled">
                            <b-media tag="li">
                                <img slot="aside" class="features__icon" src="@/assets/images/earth.svg" />
                                <h5 class="mt-0 mb-1">World-class support</h5>
                                <p>Reach us via Live Chat, phone, or an email.</p>
                            </b-media>
                        </ul>
                    </b-col>
                </b-row>
            </b-container>
        </section>
    </div>
</template>

<script>
export default {
    name: 'MonitoringAndMetrics'
}
</script>
