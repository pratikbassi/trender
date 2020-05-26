
<template>
    <div class="graph-box container">
        Graph Goes Here!
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
    .container {
        display: grid;
        grid-template-areas:
        "graph";
        grid-template-rows: 40vh ;
        grid-template-columns: 100vw   ;
        justify-items: stretch;
    }
    .graph-box{
        background: #DAD2D8;
    }

</style>
