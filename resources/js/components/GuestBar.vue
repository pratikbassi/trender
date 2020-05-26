<template>
    <div class="app-nav-auth">
        <div class="nav-home">
            <a class="home-link" href="/">Home</a>
        </div>
        <div class="nav-dash">
            <a class='link' href="/about"> About </a>
        </div>
        <div class="nav-new">
            <a class='link' href="/register"> Register </a>
        </div>
        <div class="nav-logout">
            <a class='link' href="/login"> Login </a>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log("Component mounted.");
        }
    };

</script>

