<template>
    <div>
        <nav class="navbar navbar-expand-sm navbar-light bg-light">
            <a href="/" class="post_nav_brand font-weight-bold">M-Post</a>
            <ul class="navbar-nav ml-auto">
                <li v-bind:class="[{disabled:!this.url}]" class="nav-item"><a href="/" class="post_nav_link">Home</a></li>
                <li class="nav-item"><a href="/posts" class="post_nav_link">Posts</a></li>
                <li class="nav-item"><a href="#" class="post_nav_link">About</a></li>
            </ul>
        </nav>
    </div>
</template>
<script>
export default {
    props:['url'],
    data(){
        return{
        }
    },
    mounted()
    {
        console.log(this.url);
    }
}
</script>
<style scoped>
    .active{
        border-bottom: 2px solid aqua;
}
</style>
