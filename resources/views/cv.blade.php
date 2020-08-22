<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" type="text/css" href="css/app.css">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    </head>
    <body>
    <div class="row placard">
        <div class="col-md-4">
            <h1>CHARLIE MEERS</h1>
            <h2 class="subtitle">WEB DEVELOPER</h2>
        </div>
    </div>
    </div>
        <div id ="app" class="container">
        <div class="row cv"
            v-on:click="applyDimension(2)"
            :class="{ threeD: isThreeD, twoD: isTwoD }"
        >
            <button type="button" class="close" aria-label="Close"
                v-on:submit.prevent
                v-on:click="applyDimension(3)"
                v-on:click.stop
            >
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="col-md-4">
                <h1>CHARLIE MEERS <span>WEB DEVELOPER</span></h1>
                <ul class="icons">
                    <li><i class="fa fa-map-marker"></i> San Diego, CA</li>
                    <li><i class="fa fa-mobile"></i> 816-813-0859</li>
                    <li><i class="fa fa-paper-plane"></i> charliemeers@gmail.com</li>
                    <li><i class="fa fa-link"></i> charliemeers.com</li>
                </ul>
                <blockquote>
                    Fullstack developer with expertise in fast, user-centric web apps, clean maintainable code,
                    intuitive user interfaces & automating business goals online
                </blockquote>
                <h2>ATTRIBUTES</h2>
                <ul class="atts callout">
                    <li>5 years fullstack web development experience</li>
                    <li>Proven skills in PHP, HTML, CSS, JavaScript, GraphQL, Vue.js, Laravel, Node.js, Git, &
                        SQL
                    </li>
                    <li>Firm grasp of User Experience best practices & conversion- oriented website layouts</li>
                    <li>Proficient in Adobe Creative Cloud core applications</li>
                    <li>Concepts and implements online solutions from design phase through development &
                        deployment
                    </li>
                    <li>Ability to multitask in fast-paced, dynamic environments with consistent, high-quality
                        work
                    </li>
                </ul>
                <h2>EDUCATION</h2>
                <p>
                    The Evergreen State College Olympia, WA
                    Bachelor of Arts
                    Graduated May 2011
                </p>
            </div>
            <div class="col-md-8 jobs">
                <h2>EXPERIENCE</h2>
                <h3>WEB DEVELOPER @ LIFESTYLE PUBLICATIONS</h3>
                <p>Kansas City, MO     04/2019 – Current</p>
                <ul class="atts">
                    <li>Implement fullstack features for internal MVC SPA Symfony/Doctrine/Handlebars web app</li>
                    <li>Build queries for MySQL, GraphQL, and dynamoDB</li>
                    <li>Process data for custom report dashboards</li>
                    <li>Build responsive UIs using Foundation/Handlebars/jQuery/AJAX</li>
                    <li>Code API services (RESTful &amp; GraphQL) for citylifestyle.com</li>
                    <li>Integrate API data from public APIs, translate between API/internal schemas, validate data</li>
                    <li>Build ElasticSearch indices &amp; search algorithms</li>
                </ul>
                <project v-bind:job="{'id': 1}"></project>
                <h3>DIRECTOR OF WEB DEVELOPMENT @ TALLGRASS STUDIOS</h3>
                <p>Lawrence, KS     10/2017 – 04/2019</p>
                <ul class="atts">
                    <li>Designed &amp; maintained 30+ client &amp; internal websites</li>
                    <li>Designed layouts/database/site navigation</li>
                    <li>Ensured appropriate browser/device compatibility</li>
                    <li>Scheduled software updates, backups &amp; managed server resources for 20+ clients</li>
                    <li>Facilitated domain registration, transfers &amp; maintained DNS records</li>
                    <li>Coded cross platform email templates &amp; managed 10+ campaigns &amp; email lists</li>
                    <li>Ran SEO Audits &amp; implement SEO plans</li>
                </ul>
                <project v-bind:projects=this.jobs.TS.projects v-bind:id=this.jobs.TS.id></project>
                <h3>Web Developer @ Turn the Page Online Marketing</h3>
                <p>Lee’s Summit, MO     04/2015 – 07/2016</p>
                <ul class="atts">
                    <li>Designed Wordpress websites &amp; created mockups &amp; wireframes</li>
                    <li>Pitched successful website designs &amp; site achitecture to clients in response to RFPs</li>
                    <li>Coded Wordpress plugins</li>
                    <li>Engaged with personnel from 40+ companies to clarify project creative briefs</li>
                    <li>Integrated 3rd party APIs</li>
                    <li>Closed 25+ support tickets/week
                    <li>Integrated 3rd party APIs</li>
                </ul>
                <h3>WEB/GRAPHIC Designer @ Whitney Design</h3>
                <p>Olympia, WA     05/2014 – 03/2015</p>
                <ul class="atts">
                    <li>Designed Wordpress websites</li>
                    <li>Coded Wordpress child themes &amp; plugins</li>
                    <li>Built web assets with Adobe Creative Cloud</li>
                    <li>Concepted &amp; designed web ads for 60+ local companies</li>
                    <li>Redesigned harlequinproductions.org with responsive templates, custom blog &amp; season archives
                        sub-site
                    </li>
                </ul>
            </div>
        </div>
    </div>

    </body>
    <footer><script src='js/app.js'></script></footer>
</html>
