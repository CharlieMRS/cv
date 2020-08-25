/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('job', require('./components/Job.vue').default);
Vue.component('project', require('./components/Project.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    mounted: function(){
        console.log('mounted');
        //setTimeout(() => this.applyDimension(2), 1000)
    },
    methods:{
        applyDimension: function(d){
            this.isTwoD = d === 2;
            this.isThreeD = d === 3;
        }
    },
    data: {
        isTwoD: false,
        isThreeD: true,
        jobs: {
            LP: {
                id: 1,
                projects: [
                    {
                        title: 'CityLifestyle Ambassador Registration + Call Scheduler',
                        tech: [
                            'ElasticSearch',
                            'GraphQL',
                            'Google APIs',
                            'PHP',
                            'Foundation'
                        ],
                        workDone: [
                            'Call available time slots from Google Calendar API',
                            'Build appointment picker grid in modal form',
                            'Post user appointment as calendar event & send notification emails',
                            'Handle contributor sign-ups in GraphQL mutations',
                            'Update data model, build search form & rosters',
                            'Wrote migrations to sync MySQL/DynamoDB records',
                            'Aggregate author metrics (views, likes, etc.) & expose in API'
                        ]
                    },
                    {
                        title: 'OccasionGenius Event Importer',
                        tech: [
                            'OccasionGenius API',
                            'ElasticSearch',
                            'Symfony',
                            'Cron',
                            'PHP',
                            'jQuery'
                        ],
                        workDone: [
                            'Setup cron job with Symfony command',
                            'Fetch, validate & process event data',
                            'Translate events to internal schema',
                            'Serve data in moderation queues',
                            'Upsert published events to ElasticSearch'
                        ]
                    },
                    {
                        title: 'Corporate Analytics',
                        tech: [
                            'ElasticSearch',
                            'GraphQL',
                            'DynamoDB',
                            'Google APIs',
                            'PHP',
                            'Redis',
                            'jQuery'
                        ],
                        workDone: [
                            'Pull data from Google Analytics API & merge with internal API data',
                            'Provide real-time author/user metrics for citylifestyle.com',
                            'Run queries & aggregations against ElasticSearch indices',
                            'Write client- & server-side GraphQL queries to pull user data',
                            'Populate search filters on breakdown listings on click-thrus from reports'
                        ]
                    },
                    {
                        title: 'Autocomplete Tagging Widget',
                        tech: [
                            'jQuery UI'
                        ],
                        workDone: [
                            'Built dynamic tag input UI',
                            'Optimized autocomplete functionality',
                            'Optimized UI for quick, relevant tagging',
                            'Modularized code for reuse with multiple data models',
                        ]
                    }
                ]
            },
            TS: {
                id: 2,
                projects: [
                    {
                        title: 'Compassus Online Fulfillment Web App Revamp',
                        tech: [
                            'Laravel',
                            'JQuery',
                            'UI Kit',
                            'mailtrap',
                            'Mailgun',
                            'PHP',
                            'Redis'
                        ],
                        workDone: [
                            'Developed & launched Laravel/jQuery web app for national healthcare company with 70+ locations',
                            'Coded custom product taxonomy with custom search engine',
                            'Built AJAX forms, shopping cart, custom billing/shipping system',
                            'Debugged SQL queries to optimize site speed',
                            'Built internal approval & wish list system, transactional emails & custom admin dashboard',
                            'Coded client print stationery proofing system',
                            'Coded custom frontend form validation library',
                            'Implemented graphic assets production workflow for 1300+ products'
                        ]
                    },
                    {
                        title: 'Donation Portal for Success By 6 Coalition dcsb6.org',
                        tech: [
                            'PayPal',
                            'Wordpress',
                            'WooCommerce',
                            'Braintree',
                            'PHP',
                            'jQuery'
                        ],
                        workDone: [
                            'Built single page donation flow for the end user w/ on-page transactions',
                            'Hooked into WooCommerce for extended functionality like Name Your Price',
                            'Implemented PayPal Braintree payment gateway for PayPal transactions',
                            'Built custom UI elements for donation tier selection, including recurring donation options'
                        ]
                    }
                ]
            }
        }
    }
});
