<template>
<div>
    <ul class="list-unstyled mb-0 posts-container">
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
    </ul>
    <div class="d-flex justify-content-center py-3">
        <button class="btn btn-secondary mx-2" @click="decrementCurrentPage">
            <i class="fas fa-chevron-left fa-2x"></i>
        </button>
        <button class="btn btn-secondary mx-2" @click="incrementCurrentPage">
                <i class="fas fa-chevron-right fa-2x"></i>
        </button>
    </div>

    <router-link
        class="text-center"
        :to="{ name: 'home' }"
    >
        HOME
    </router-link>
</div>

</template>


<script>
export default {
    name: 'Index',
    components:{

    },
    data(){
        return {
            posts : undefined,
            currentPage : 0
        }
    },
    methods : {
        incrementCurrentPage(){
            this.currentPage++
            this.getData()
        },
        decrementCurrentPage(){
            if(this.currentPage>0){
                this.currentPage--
                this.getData()
            }
        },
        getData(){
            axios.get(`/api/posts?page=${this.currentPage}`)
                .then((response)=>{
                    this.posts = response.data.data
                    console.log(this.posts);
                })
                .catch((err)=>{
                    console.log(err)
                })
        }
    },
    mounted(){
        this.getData();
    }
}
</script>

<style lang="sass" scoped>

</style>
