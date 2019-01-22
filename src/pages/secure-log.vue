<template>
    <div>
        <section class="hero">
            <b-container>
                <b-row class="text-center">
                    <b-col>
                        <div class="hero__heading">
                            <h1>Secure Log Management</h1>
                        </div>
                    </b-col>
                </b-row>
            </b-container>
        </section>
        <section class="about">
            <b-container>
                <b-row class="justify-content-md-center">
                    <b-col sm="12" md="12">
                        <h1 class="heading" style="font-size:24px">Log Retention &amp; Compliance Reporting helps satisfy security posture and regulatory compliance requirements for log collection, storage, and reporting, and supports an expandable range of log sources.</h1>
                    </b-col>
                </b-row>
                <b-row class="justify-content-md-center">
                    <b-col sm="12" md="12">
                        <p>As the entry-level tier of service within the Security Log Monitoring offer, Foundational Monitoring provides existing PlatOps customers with up to 10GB per day of complimentary log monitoring. The service gathers raw logs, parses meta data into normalized events and retains it remotely for viewing in our portal or mobile application. You can easily upgrade your service bandwidth to accommodate additional log ingestion as your monitoring requirements grow. </p>
                        <p>The service can also be customized to your needs with our suite of optional service upgrades — including Threat Intelligence, SOC Monitoring, Cloud Security Monitoring and Advanced Monitoring Algorithms.</p>
                        <h5 style="margin-top: 50px;">Our monitoring service:</h5>
                    </b-col>
                </b-row>
                <b-row class="page__list">
                        <b-col md="6">
                        <b-media tag="li">
                            <img slot="aside" class="checked-icon" src="../assets/images/check-sign.svg" />
                            <p>Provides a comprehensive view of all network activity from multiple devices across the organization and correlates it into a single dashboard view for team members to see and review in detail.</p>
                        </b-media>
                        <b-media tag="li">
                            <img slot="aside" class="checked-icon" src="../assets/images/check-sign.svg" />
                            <p>Translates complex, near real-time and historical data into actionable insights, with a low operational impact on your organization.</p>
                        </b-media>
                        <b-media tag="li">
                            <img slot="aside" class="checked-icon" src="../assets/images/check-sign.svg" />
                            <p>Helps security teams prioritize events to reduce the noise from false positives and better focus on those that matter most.</p>
                        </b-media>
                        <b-media tag="li">
                            <img slot="aside" class="checked-icon" src="../assets/images/check-sign.svg" />
                            <p>Helps you pinpoint threat sources and follow attack vectors so you can shore up weak points more quickly and evolve to a proactive threat management approach.    </p>
                        </b-media>
                        <b-media tag="li">
                            <img slot="aside" class="checked-icon" src="../assets/images/check-sign.svg" />
                            <p>Enables security teams to make more accurate assumptions about the past that provide context to prevent future successful attacks.</p>
                        </b-media>
                        </b-col><b-col md="6">
                        <b-media tag="li">
                            <img slot="aside" class="checked-icon" src="../assets/images/check-sign.svg" />
                            <p>Helps you meet compliance standards with a comprehensive solution that can evolve with your business needs without changing platforms.</p>
                        </b-media>
                        <b-media tag="li">
                            <img slot="aside" class="checked-icon" src="../assets/images/check-sign.svg" />
                            <p>Enhances your security posture beyond compliance into a best practices solution for proactive and predictive threat management.</p>
                        </b-media>
                        <b-media tag="li">
                            <img slot="aside" class="checked-icon" src="../assets/images/check-sign.svg" />
                            <p>Gives security teams and senior leadership greater confidence that your organization is doing all it can to protect assets and eliminate threats before impact.</p>
                        </b-media>
                        <b-media tag="li">
                            <img slot="aside" class="checked-icon" src="../assets/images/check-sign.svg" />
                            <p>Saves your team hundreds of man-hours gathering critical data by hand.</p>
                        </b-media>
                    </b-col>
                </b-row>
            </b-container>
        </section>
        <section class="page">
            <b-container>
                <b-row>
                    <b-col sm="12" md class="page__card">
                        <img class="page__img" src="../assets/images/management.svg" />
                        <h5 class="page__title">Consolidate Management</h5>
                        <p class="page__text">Capture and store system logs from IT devices, systems, and other network assets</p>
                    </b-col>
                    <b-col sm="12" md class="page__card">
                        <img class="page__img" src="../assets/images/compliance.svg" />
                        <h5 class="page__title">Demonstrate Compliance</h5>
                        <p class="page__text">Automate log parsing and regulatory compliance reporting to help meet auditor requests</p>
                    </b-col>
                    <b-col sm="12" md class="page__card">
                        <img class="page__img" src="../assets/images/expertise-2.svg" />
                        <h5 class="page__title">Leverage Expertise</h5>
                        <p class="page__text">Rely on knowledgeable log management support for formats, parsing, and reporting</p>
                    </b-col>
                    <b-col sm="12" md class="page__card">
                        <img class="page__img" src="../assets/images/icon-chart.svg" />
                        <h5 class="page__title">Grow As You Go</h5>
                        <p class="page__text">Add terabytes of scalable storage at an effective price as your needs change</p>
                    </b-col>
                </b-row>
            </b-container>
        </section>
    </div>
</template>

<script>

export default {
    name: 'SecureLogManagement'
}
</script>

<style lang="scss" scoped>
    .page__list {
        li {
            padding: 10px 0;
        }
    }
</style>
