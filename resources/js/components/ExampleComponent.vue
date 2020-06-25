<template>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card my-2" v-for="(post,index) in posts_arr" :key="index">
                    <div class="card-header">
                        <h3>{{ post.title }}</h3>
                    </div>
                    <div class="card-body">
                        <p>{{ post.body }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props:['posts'],
        data(){
            return{
                posts_arr:[],
            }
        },
        mounted(){
            this.posts_arr = this.posts.data;
            console.log('mounted');
        }
    }
</script>
