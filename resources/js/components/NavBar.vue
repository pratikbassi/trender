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

<style>


    .app-nav-auth {
        background: #8d6b94;
        display: grid;
        grid-template-areas: "home space dash new logout";
        grid-template-rows: 10vh;
        grid-template-columns: 15vw 35vw 15vw 15vw 15vw;
        justify-items: stretch;
    }

    .nav-home {
        grid-area: home;
        place-self: center;
    }

    .nav-dash {
        grid-area: dash;
        place-self: center;
    }

    .nav-new {
        grid-area: new;
        place-self: center;
    }

    .nav-logout {
        grid-area: logout;
        place-self: center;
    }

    .home-link {
        place-self: center;
        color: #fcfff7;
    }

    .link {
        place-self: center;
        color: #fcfff7;
    }

</style>
