<template>
    <div class="item" >
        <label class="switch">
            <input type="checkbox" id="checkbox" v-on:change="$emit('checked', [$event.target.checked, id])">
            <span class="slider"></span>
        </label>
        <div class='keyword'> Search Term: {{keyword}} </div>
        <div class='nodes'> Nodes: {{nodes}} </div>
        <button v-on:click="$emit('deleted', id)" type='button' class="btn btn-danger btn-sm delete"> Delete </button>
    </div>
</template>

<script>
    export default {
        props: ['data'],
        data() {
            return {
                keyword: null,
                nodes: null,
                id: null,
            }
        },
        mounted() {
            console.dir(this.data)
            this.fillData();
        },
        methods: {
            fillData() {
                this.keyword = this.data.keyword
                this.nodes = this.data.nodes
                this.id = this.data.id
            }
        }
    };

</script>

<style>

</style>
