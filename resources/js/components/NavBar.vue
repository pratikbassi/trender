<template>
    <div class="app-nav-auth">
        <div class="nav-home">
            <a class="home-link" href="/">Home</a>
        </div>
        <div class="nav-dash">
            <a class="link" href="/dashboard">Dashboard</a>
        </div>
        <div class="nav-new">
            <a class="link" href="/new">New Graph</a>
        </div>
        <div class="nav-logout">
            <a class="link" href="/new">Logout</a>
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

