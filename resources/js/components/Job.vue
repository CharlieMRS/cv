<template>
    <div>
        <h3>{{details.title}} @ {{details.company}}</h3>
        <h4>{{details.start}} - {{details.end || 'present'}}</h4>
        <div class="projects">
            <a class="toggle" data-toggle="collapse" :href="`#${projectsBlock}`"
                role="button" aria-expanded="false" :aria-controls="projectsBlock">
                Projects <i class="fa"></i>
            </a>
            <div class="collapse" :id="projectsBlock">
                <div class="card card-body">
                    <projects />
                </div>
            </div>
        </div>

        <ul class="duties">
            <li v-for="(duties, dutyCategory) in details.dutiesByCategory"><span>{{dutyCategory}}</span>
                <ul class="running">
                    <li v-for="duty in duties">{{duty.description}}</li>
                </ul>
            </li>
        </ul>
    </div>
</template>

<script>
    import Project from "./Project.vue";
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        props: [
            'details'
        ],
        computed: {
            projectsBlock: function () {
                return 'projects' + this.details.id;
            }
        },
        components: {
            Project
        }
    }
</script>
