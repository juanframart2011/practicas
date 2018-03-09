<template>
    <div class="container">
        <div class="row">
            <projects-client-pagination :projects="projects" />
        </div>
        <div class="row">
            <projects-server-pagination />
        </div>
    </div>
</template>

<script>
    import ProjectsServerPagination from "./ProjectsServerPagination";
    import ProjectsClientPagination from "./ProjectsClientPagination";

    export default {
        components: {
            ProjectsClientPagination,
            ProjectsServerPagination
        },
        props: {
            projects: {
                type: Array,
                required: true
            }
        },
        name: "projects"
    }
</script>

<style scoped>

</style>