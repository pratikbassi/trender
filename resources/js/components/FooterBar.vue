<template>
    <div class="footer-links">
        <div class="link-list">
            <div class="footer-home">
                <a class='link' href="/"> Home </a>
            </div >
            <div class="footer-github">
                <a class='link' href="https://github.com/pratikbassi"> GitHub </a>
            </div>
            <div class="footer-linked">
                <a class='link' href="https://www.linkedin.com/in/pratik-bassi-81a490173/"> LinkedIn </a>
            </div>

        </div>

    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    };

</script>

<style>
    .footer-links {
        background: #8D6B94;
        display: grid;
        grid-template-areas:
            "home"
            "github"
            "linkedin";
        grid-template-columns: 100vw;
        grid-template-rows: 5vh 5vh 5vh;
        justify-items: left;
        align-items: center;
    }

    .link-list {
        padding-top: 10vh;
        padding-left: 5vw;
    }

    .link {
        place-self: center;
        color: #FCFFF7;
    }

    .footer-home {
        grid-area: home;

    }
    .footer-github {
        grid-area: github;

    }
    .footer-linked {
        grid-area: linkedin;

    }
</style>
