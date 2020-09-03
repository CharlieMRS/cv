<template>
    <div class="projects">
        <h4><a class="toggle" data-toggle="collapse" :href="`#projectsBlock${this.id}`"
               role="button" aria-expanded="false" :aria-controls="projectsBlock">
            Projects
            <i class="fa"></i>
        </a></h4>
        <div class="collapse" :class=" {show: this.id === 1}" :id="`projectsBlock${this.id}`">
            <div class="card card-body" >
                <div class="bd-example">
                    <div data-interval="false" :id="`carousel${this.id}`" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li
                                v-for="(project, index) in this.projects"
                                :data-target="`#carousel${id}`"
                                :data-slide-to=index
                            >
                            </li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item"
                                 v-for="(project, index) in this.projects"
                                 :class="{ active: index === 0 }"
                            >
                                <div class="carousel-caption d-md-block mx-auto w-75">
                                    <div>
                                        <h5>{{project.title}}</h5>
                                        <div class="techStack">
                                            <h6 class="d-none">Tech Used</h6>
                                            <ul>
                                                <li v-for="item in project.tech">{{item}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <ul class="atts">
                                        <li v-for="item in project.workDone">{{item}}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--<a class="carousel-control-prev" :href="`#carousel${this.id}`" role="button"
                           data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" :href="`#carousel${this.id}`" role="button"
                           data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        props: [
            'id',
            'projects'
        ],
        computed: {
            projectsBlock: function () {
                return '';
            }
        }
    }
</script>
