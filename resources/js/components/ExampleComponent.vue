<script setup lang="ts">
import { onMounted } from 'vue';

onMounted(() => {
    console.log("on mount")
})

</script>

<template>
<section class="wrapper">
    <div class="container">
        <div class="content">
            <h1 class="heading">BookMaker!!</h1>
            <p>テキストテキストテキストテキストテキストテキストテキストテキスト<br>テキストテキストテキストテキストテキストテキストテキストテキスト</p>
            <button class="btn btn--orange btn--radius">
                ログイン
            </button>
        </div>
    </div>
</section>
</template>

<style scoped>
/* container */
.wrapper{
    width:100%;
    /* background-color: black; */
}
.wrapper .container{
    max-width:1000px;
    margin:0px auto;
    padding:320px 0px;
    opacity: 0.7;
    background-image: url("../../../storage/app/public/top.jpg");
    background-position: center center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
}
/* content */
.wrapper .content {
    padding:50px;
    text-align:center;
}
.wrapper .content .heading{
    color: #fff;
    margin:0px 0px 30px 0px;
    font-size: 70px;
    font-weight: bold;
    text-align: center;
}
.content p {
    color: #fff;
}
.btn {
    font-size: 16px;
    font-weight: bold;
    width: 160px;
    height: 40px;
}
.btn--orange,
.btn--orange {
    color: #fff;
    background-color: #ff6a00;
}
.btn--orange:hover,
.btn--orange:hover {
    color: #fff;
    background: #ff5804;
}
.btn--radius {
    border-radius: 100vh;
}
</style>
