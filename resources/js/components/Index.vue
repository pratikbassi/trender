<template>
    <div >
        <a class='graph-link' v-bind:href="linkTo">Click here to go to your graph! ({{linkTo}})</a>
        <index-item v-on:checked="selected" v-for="item in list" :key="item.id" :data="item"></index-item>
    </div>
</template>

<script>
    import IndexItem from './IndexItem'
    export default {
        props: ['graph'],
        data() {
            return {
                list: null,
                checked: [],
                linkTo:'/home'
            }
        },
        mounted() {
            this.fillData();

        },
        methods: {
            fillData() {
                this.list = this.graph.map(element => {
                    return JSON.parse(element)
                });
            }, selected(args) {
                if(!args[0]){
                    let index = this.checked.indexOf(args[1])
                    this.checked.splice(index, 1);
                } else {
                    this.checked.push(args[1])

                }
                if(this.checked.length === 0){
                    this.linkTo = '/home'
                } else {
                    let local = `/graph/${this.checked.join('+')}`
                    this.linkTo = local;
                }

            }

        }
    };

</script>

<style>

</style>
