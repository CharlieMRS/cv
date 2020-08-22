<template>
    <div class="projects">
        <h4><a class="toggle" data-toggle="collapse" :href="`#${projectsBlock}`"
               role="button" aria-expanded="false" :aria-controls="projectsBlock">
            Projects
            <i class="fa" :class="{ active: isActive, 'text-danger': hasError }"></i>
        </a></h4>
        <div class="collapse show" :id="projectsBlock">
            <div class="card card-body">
                <div class="bd-example">
                    <div data-interval="false" id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="" class="d-block w-100" alt="">
                                <div class="carousel-caption d-none d-md-block mx-auto w-75">
                                    <div>
                                        <h5>CL Ambassador Registration + Call Scheduler</h5>
                                        <div class="techStack">
                                            <h6>Tech Used</h6>
                                            <ul>
                                                <li>ElasticSearch</li>
                                                <li>GraphQL</li>
                                                <li>Google API</li>
                                                <li>PHP</li>
                                                <li>Foundation</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <ul class="atts">
                                        <li>Call available time slots from Google Calendar API</li>
                                        <li>Build appointment picker grid in modal form</li>
                                        <li>Post user appointment as calendar event & send notification emails</li>
                                        <li>Handle contributor sign-ups in GraphQL mutations</li>
                                        <li>Update data model, build search form & rosters</li>
                                        <li>Wrote migrations to sync MySQL/DynamoDB records</li>
                                        <li>Aggregate author metrics & expose in API</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="" class="d-block w-100" alt="">
                                <div class="carousel-caption d-none d-md-block mx-auto w-75">
                                    <h5>Second slide label</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="" class="d-block w-100" alt="">
                                <div class="carousel-caption d-none d-md-block mx-auto w-75">
                                    <h5>Third slide label</h5>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button"
                           data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button"
                           data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        props: [
            'job'
        ],
        computed: {
            projectsBlock: function () {
                return 'projects' + this.job.id;
            }
        }
    }
</script>
