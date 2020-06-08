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
        <div id ="app" class="container">
        <div class="row">
            <div class="col-md-4">
                <h1>CHARLIE MEERS</h1>
                <h2>WEB DEVELOPER</h2>
                <ul>
                    <li><i class="fa fa-mobile"></i> 816-813-0859</li>
                    <li><i class="fa fa-paper-plane"></i> charliemeers@gmail.com</li>
                    <li><i class="fa fa-link"></i> charliemeers.com</li>
                    <li><i class="fa fa-map-marker"></i> Lawrence, Kansas</li>
                </ul>
                <blockquote>
                    Fullstack developer with expertise in fast, user-centric web apps, clean maintainable code,
                    intuitive user interfaces & automating business goals online
                </blockquote>
                <h3>ATTRIBUTES</h3>
                <ul>
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
                <h3>EDUCATION</h3>
                <p>
                    The Evergreen State College Olympia, WA
                    Bachelor of Arts
                    Graduated May 2011
                </p>
            </div>
            <div class="col-md-8">
                EXPERIENCE
                @foreach($jobs as $job)
                    <job v-bind:details='@json($job)'></job>
                @endforeach
            </div>
        </div>
    </div>

    </body>
    <footer><script src='js/app.js'></script></footer>
</html>
