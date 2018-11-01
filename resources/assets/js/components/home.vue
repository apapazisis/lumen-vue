<template>
    <div>
        <section>
            <parallax src="images/laravel.jpg" title="Apostolos Papazisis" subtitle="Laravel, Lumen & Vue.Js Entwickler"></parallax>
        </section>
        <section>
            <about></about>
        </section>
        <section>
            <parallax src="images/skills.jpg" :height="200"></parallax>
        </section>
        <section>
            <skills></skills>
        </section>
        <section>
            <parallax src="images/portfolio.jpg" :height="200"></parallax>
        </section>
        <section>
            <portfolio></portfolio>
        </section>
    </div>
</template>

<script>
    import Parallax from './parallax.vue';
    import About from './about.vue';
    import Skills from './skills.vue';
    import Portfolio from './portfolio.vue';

    export default {
        components: {
            parallax: Parallax,
            about: About,
            skills: Skills,
            portfolio: Portfolio
        }
    }
</script>