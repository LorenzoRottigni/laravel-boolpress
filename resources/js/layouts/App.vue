<template>
    <div class="app-container">
        <header class="py-5 px-3">
            <nav class="d-flex justify-content-between">
                <img src="https://fontmeme.com/permalink/220117/5ba96e9b8ce780ed5447fcd83b0ae998.png" alt="battlefield-2042-font" border="0">
                <div class="d-flex align-items-center">
                    <ul class="list-unstyled mb-0 d-flex justify-content-center text-dark">
                        <router-link :to="{ name: 'home' }" class="mx-3">Home Page</router-link>
                        <router-link :to="{ name: 'about' }" class="mx-3">About</router-link>
                        <router-link :to="{ name: 'contacts' }" class="mx-3">Contacts</router-link>
                        <router-link :to="{ name: 'posts.index' }" class="mx-3">Posts</router-link>
                        <li class="mx-3">join us</li>
                    </ul>
                    <form action="/login" method="get" class="m-0 p-0">
                        <button class="btn bg-pink">
                            Login
                        </button>
                    </form>
                </div>
            </nav>
        </header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="title-container-pink rounded mb-5">
                        <h1 class="mb-0">
                            <button class="btn btn-lg btn-light mb-0">
                            <a href="/login">Login</a>
                        </button>
                        <button class="btn btn-lg btn-light mb-0">
                            <a href="/register">Register</a>
                        </button>
                        <span class="mx-5 mb-0">Start your own business with Boolpress !</span>
                        </h1>
                    </div>
                </div>
                <div class="col-4">
                    <div class="svg-background-container">

                    </div>
                </div>
                <div class="col-8 text-right">
                    <h1 class="section-title rounded p-3">This is an awesome blog !</h1>
                    <!--<ul class="list-unstyled mb-0 posts-container">
                        <li class="p-3 border-bottom"
                        :key="'post-'+index" v-for="(post, index) in posts">
                            <h2>{{post.id}} | {{post.title}}</h2>
                            <p>{{post.content}}</p>
                            <h4 class="my-3">
                                <span v-for="(tag, index) in post.tag" :key="'tag-'+index"
                                class="badge text-white" :style="'background-color : ' + tag.color"
                                >
                                    {{tag.name}}
                                </span>
                            </h4>
                            <div class="post-footer d-flex justify-content-between">
                                <span >About {{post.topic.name}}</span>
                                <span>Created by {{post.user.name}}</span>
                                <span>At {{post.created_at}}</span>
                            </div>
                        </li>
                    </ul>-->
                    <router-view/>
                </div>
            </div>
        </div>

    </div>

</template>

<script>
import axios from "axios"

export default {
    name: "App"
}
</script>

<style lang="sass" scoped>
.svg-background-container
    width: 100%
    height: 100%
    background-color: #FFFFFF
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100' viewBox='0 0 200 200'%3E%3Cdefs%3E%3ClinearGradient id='a' gradientUnits='userSpaceOnUse' x1='100' y1='33' x2='100' y2='-3'%3E%3Cstop offset='0' stop-color='%23000' stop-opacity='0'/%3E%3Cstop offset='1' stop-color='%23000' stop-opacity='1'/%3E%3C/linearGradient%3E%3ClinearGradient id='b' gradientUnits='userSpaceOnUse' x1='100' y1='135' x2='100' y2='97'%3E%3Cstop offset='0' stop-color='%23000' stop-opacity='0'/%3E%3Cstop offset='1' stop-color='%23000' stop-opacity='1'/%3E%3C/linearGradient%3E%3C/defs%3E%3Cg fill='%23d4d4d4' fill-opacity='0.6'%3E%3Crect x='100' width='100' height='100'/%3E%3Crect y='100' width='100' height='100'/%3E%3C/g%3E%3Cg fill-opacity='0.5'%3E%3Cpolygon fill='url(%23a)' points='100 30 0 0 200 0'/%3E%3Cpolygon fill='url(%23b)' points='100 100 0 130 0 100 200 100 200 130'/%3E%3C/g%3E%3C/svg%3E")
</style>
