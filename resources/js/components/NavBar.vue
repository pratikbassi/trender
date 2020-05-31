<template>
    <div class="app-nav-auth">
        <div class="nav-home">
            <a class="home-link" href="/">Home</a>
        </div>
        <div class="nav-dash">
            <a class="link" href="/home">Dashboard</a>
        </div>
        <div class="nav-new">
            <a class="link" href="/new">New Graph</a>
        </div>
        <div class="nav-logout">
            <form @submit="formSubmit">
                <button class="btn btn-success" >Logout</button>
            </form>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data() {
            return {
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),

            };
        },
        methods: {
            formSubmit(e) {
                e.preventDefault();
                let currentObj = this;
                axios.post('/logout', {
                    })
                    .then(()=> {
                        window.location.href = '/login';
                    })
                    .catch(function (error) {
                        currentObj.output = error;
                    });
            }
        }
    }

</script>
<style>

</style>
