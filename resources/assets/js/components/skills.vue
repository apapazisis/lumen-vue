<template>
    <v-layout column wrap class="my-5" align-center>
        <v-flex xs12 sm4 class="my-3">
            <div class="text-xs-center">
                <h2 class="headline">WAS ICH MACHE?</h2>
                <span class="subheading">HIER SIND EINIGE MEINER FACHKENNTNISSE</span>
            </div>
        </v-flex>
        <v-flex xs12>
            <v-container grid-list-xl>
                <v-layout row wrap align-center>
                    <v-flex xs12 md4>
                        <v-card class="elevation-0 transparent">
                            <v-card-text class="text-xs-center">
                                <v-icon size="80" class="icon-laravel"></v-icon>
                            </v-card-text>
                            <v-card-title primary-title class="layout justify-center">
                                <div class="headline text-xs-center">Laravel & Lumen</div>
                            </v-card-title>
                            <v-card-text>
                                Laravel ist ein freies PHP-Webframework, das dem MVC-Muster folgt. Es wurde 2011 von Taylor Otwell initiiert.
                                Lumen is a micro web framework written in PHP, created by Laravel.
                            </v-card-text>
                        </v-card>
                    </v-flex>
                    <v-flex xs12 md4>
                        <v-card class="elevation-0 transparent">
                            <v-card-text class="text-xs-center">
                                <v-icon size="80" class="icon-vue-dot-js"></v-icon>
                            </v-card-text>
                            <v-card-title primary-title class="layout justify-center">
                                <div class="headline">Vue.Js</div>
                            </v-card-title>
                            <v-card-text>
                                Vue.js ist ein clientseitiges JavaScript-Webframework zum Erstellen von Single-Page-Webanwendungen nach dem MVVM-Muster, es kann allerdings auch in Multipage Webseiten für einzelne Abschnitte verwendet werden. Ab Version 2.0 unterstützt es auch serverseitiges Rendern.
                            </v-card-text>
                        </v-card>
                    </v-flex>
                    <v-flex xs12 md4>
                        <v-card class="elevation-0 transparent">
                            <v-card-text class="text-xs-center">
                                <v-icon size="80" class="icon-php"></v-icon>
                            </v-card-text>
                            <v-card-title primary-title class="layout justify-center">
                                <div class="headline text-xs-center">PHP Design Patterns</div>
                            </v-card-title>
                            <v-card-text>
                                In software engineering, a software design pattern is a general, reusable solution to a commonly occurring problem within a given context in software design.
                            </v-card-text>
                        </v-card>
                    </v-flex>
                    <v-flex xs12 md4>
                        <v-card class="elevation-0 transparent">
                            <v-card-text class="text-xs-center">
                                <v-icon size="80" class="icon-npm"></v-icon>
                            </v-card-text>
                            <v-card-title primary-title class="layout justify-center">
                                <div class="headline text-xs-center">Node Package Manager (NPM)</div>
                            </v-card-title>
                            <v-card-text>
                                npm is a package manager for the JavaScript programming language. It is the default package manager for the JavaScript runtime environment Node.js. It consists of a command line client, also called npm, and an online database of public and paid-for private packages, called the npm registry.
                            </v-card-text>
                        </v-card>
                    </v-flex>
                    <v-flex xs12 md4>
                        <v-card class="elevation-0 transparent">
                            <v-card-text class="text-xs-center">
                                <v-icon size="80" class="icon-webpack"></v-icon>
                            </v-card-text>
                            <v-card-title primary-title class="layout justify-center">
                                <div class="headline text-xs-center">Webpack</div>
                            </v-card-title>
                            <v-card-text>
                                Webpack is an open-source JavaScript module bundler. Its main purpose is to bundle JavaScript files for usage in a browser, yet it is also capable of transforming, bundling, or packaging just about any resource or asset. Webpack takes modules with dependencies and generates static assets representing those modules. It’s a module bundler primarily for JavaScript, but it can transform front-end assets like HTML, CSS, even images if the corresponding plugins are included.
                            </v-card-text>
                        </v-card>
                    </v-flex>
                    <v-flex xs12 md4>
                        <v-card class="elevation-0 transparent">
                            <v-card-text class="text-xs-center">
                                <v-icon size="80" class="icon-javascript"></v-icon>
                            </v-card-text>
                            <v-card-title primary-title class="layout justify-center">
                                <div class="headline text-xs-center">Javascript</div>
                            </v-card-title>
                            <v-card-text>
                                JavaScript, often abbreviated as JS, is a high-level, interpreted programming language. It is a language which is also characterized as dynamic, weakly typed, prototype-based and multi-paradigm.
                            </v-card-text>
                        </v-card>
                    </v-flex>
                    <v-flex xs12 md4>
                        <v-card class="elevation-0 transparent">
                            <v-card-text class="text-xs-center">
                                <v-icon size="80" class="icon-mysql"></v-icon>
                            </v-card-text>
                            <v-card-title primary-title class="layout justify-center">
                                <div class="headline text-xs-center">MySQL</div>
                            </v-card-title>
                            <v-card-text>
                                MySQL is an open-source relational database management system (RDBMS).
                            </v-card-text>
                        </v-card>
                    </v-flex>
                    <v-flex xs12 md4>
                        <v-card class="elevation-0 transparent">
                            <v-card-text class="text-xs-center">
                                <v-icon size="80" class="icon-redis"></v-icon>
                            </v-card-text>
                            <v-card-title primary-title class="layout justify-center">
                                <div class="headline text-xs-center">Redis</div>
                            </v-card-title>
                            <v-card-text>
                                Redis (Remote Dictionary Server), is an open-source in-memory data structure project implementing a distributed, in-memory key-value database with optional durability. Redis supports different kinds of abstract data structures, such as strings, lists, maps, sets, sorted sets, hyperloglogs, bitmaps, streams and spatial indexes.
                            </v-card-text>
                        </v-card>
                    </v-flex>
                    <v-flex xs12 md4>
                        <v-card class="elevation-0 transparent">
                            <v-card-text class="text-xs-center">
                                <v-icon size="80" class="icon-atlassian"></v-icon>
                            </v-card-text>
                            <v-card-title primary-title class="layout justify-center">
                                <div class="headline text-xs-center">JIRA</div>
                            </v-card-title>
                            <v-card-text>
                                Jira is a proprietary issue tracking product developed by Atlassian which allows bug tracking and agile project management.
                            </v-card-text>
                        </v-card>
                    </v-flex>
                </v-layout>
            </v-container>
        </v-flex>
    </v-layout>
</template>

<script>

</script>