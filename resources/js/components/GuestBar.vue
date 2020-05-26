<template>
    <div class="app-nav-auth">
        <div class="nav-home">
            <a class='home-link' href="/"> Home </a>
        </div>
        <div class="nav-about">
            <a class='link' href="/about"> About </a>
        </div>
        <div class="nav-register">
            <a class='link' href="/register"> Register </a>
        </div>
        <div class="nav-login">
            <a class='link' href="/login"> Login </a>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

<style>
    .app-nav-auth{
        background: #8D6B94;
        display: grid;
        grid-template-areas:
        "home space about register login";
        grid-template-rows: 10vh ;
        grid-template-columns: 20vw 50vw auto auto auto   ;
        justify-items: stretch;
    }
    .nav-home {
        grid-area: home;
        place-self: center;
    }
    .nav-about {
        grid-area: about;
        place-self: center;
    }
    .nav-register {
        grid-area: register;
        place-self: center;
    }
    .nav-login {
        grid-area: login;
        place-self: center;
    }
    .home-link {
        place-self: center;
        color: #FCFFF7;
    }
    .link{
        place-self: center;
        color: #FCFFF7;
    }
</style>
