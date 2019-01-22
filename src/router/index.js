/* eslint-disable indent */
import Vue from 'vue'
import Router from 'vue-router'
import Home from '@/pages/home'
import Contacts from '@/pages/contacts'
import ApplicationServices from '@/pages/application-services'
import InfrastructureServices from '@/pages/infrastructure-services'
import MonitoringAndMetrics from '@/pages/monitoring-and-metrics'
import ManagedDatabase from '@/pages/managed-database'
import ManagedCloud from '@/pages/managed-cloud'
import CloudTransformation from '@/pages/cloud-transformation'
import SecureLogManagement from '@/pages/secure-log'
import PrivateCloud from '@/pages/private-cloud'
import ManagedSecurity from '@/pages/managed-security'
import ComplianceAssistance from '@/pages/compliance-assistance'
import PrivacyAndDataProtection from '@/pages/privacy'
import TermsAndConditions from '@/pages/terms-and-conditions'
import PrivacyPolicy from '@/pages/policy'
import NotFound from '@/pages/404'
import Test from '@/pages/test'

Vue.use(Router)

export default new Router({
    mode: 'history',
    routes: [
        {
            path: '/test',
            name: 'Test',
            component: Test
        },
        {
            path: '/',
            name: 'Home',
            component: Home
        },
        {
            path: '/contacts',
            name: 'Contacts',
            component: Contacts
        },
        {
            path: '/application-services',
            name: 'ApplicationServices',
            component: ApplicationServices
        },
        {
            path: '/infrastructure-services',
            name: 'InfrastructureServices',
            component: InfrastructureServices
        },
        {
            path: '/monitoring-and-metrics',
            name: 'MonitoringAndMetrics',
            component: MonitoringAndMetrics
        },
        {
            path: '/managed-database',
            name: 'ManagedDatabase',
            component: ManagedDatabase
        },
        {
            path: '/managed-cloud',
            name: 'ManagedCloud',
            component: ManagedCloud
        },
        {
            path: '/cloud-transformation',
            name: 'CloudTransformation',
            component: CloudTransformation
        },
        {
            path: '/secure-log-management',
            name: 'SecureLogManagement',
            component: SecureLogManagement
        },
        {
            path: '/private-cloud',
            name: 'PrivateCloud',
            component: PrivateCloud
        },
        {
            path: '/managed-security',
            name: 'ManagedSecurity',
            component: ManagedSecurity
        },
        {
            path: '/privacy-and-data-protection',
            name: 'PrivacyAndDataProtection',
            component: PrivacyAndDataProtection
        },
        {
            path: '/compliance-assistance',
            name: 'ComplianceAssistance',
            component: ComplianceAssistance
        },
        {
            path: '/terms-and-conditions',
            name: 'TermsAndConditions',
            component: TermsAndConditions
        },
        {
            path: '/privacy-policy',
            name: 'PrivacyPolicy',
            component: PrivacyPolicy
        },
        {
            path: '/404',
            name: '404',
            component: NotFound
        },
        {
            path: '*',
            redirect: '/404'
        }
    ]
})
