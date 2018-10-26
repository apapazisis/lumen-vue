<template>
    <div>
        <section>
            <parallax src="images/laravue.png"></parallax>
        </section>
        <section>
            <v-layout column wrap class="my-5" align-center>
                <v-flex xs12 sm4 class="my-3">
                    <div class="text-xs-center">
                        <h2 class="headline">AKTUELLER BLOG</h2>
                        <span class="subheading">LESEN</span>
                    </div>
                </v-flex>
                <v-flex xs12>
                    <v-container grid-list-xl>
                        <v-layout row wrap align-center>
                            <v-flex xs12 md4 v-for="post in posts" :key="post.id">
                                <v-card class="elevation-0 transparent">
                                    <v-card-text class="text-xs-center">
                                        <v-icon x-large class="blue--text text--lighten-2">color_lens</v-icon>
                                    </v-card-text>
                                    <v-card-title primary-title class="layout justify-center">
                                        <div class="headline text-xs-center">{{ post.title }}</div>
                                    </v-card-title>
                                    <v-card-text>
                                        {{ limitCharacters(post.text) }}
                                    </v-card-text>
                                </v-card>
                            </v-flex>
                        </v-layout>
                    </v-container>
                </v-flex>
            </v-layout>
        </section>
    </div>
</template>

<script>
    import Parallax from './parallax.vue';

    export default {
        data() {
            return {
                posts: []
            }
        },
        components: {
            parallax: Parallax
        },
        data: function () {
            return {
                posts: []
            }
        },
        mounted() {
            this.$http.get('api/v1/posts').then(response => this.posts = response.data);
        },
        methods: {
            limitCharacters(text) {
                return text.substring(0, 280);
            }
        }
    }
</script>