<template>
    <v-parallax :src="src" :height="height">
        <v-layout column align-center justify-center class="white--text">
            <h1 v-if="title" class="white--text mb-2 display-1 text-xs-center">{{ title }}</h1>
            <div v-if="subtitle" class="subheading mb-3 text-xs-center">{{ subtitle }}</div>
        </v-layout>
    </v-parallax>
</template>

<script>
    export default {
        props: {
            src: {
                type: String
            },
            height: {
                type: Number,
                default: 600
            },
            title: {
                type: String,
                default: ''
            },
            subtitle: {
                type: String,
                default: ''
            }
        }
    }
</script>