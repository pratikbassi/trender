<template>
    <div>
        <a class='graph-link' v-bind:href="linkTo">Click here to go to your graph! ({{linkTo}})</a>
        <index-item v-on:checked="selected" v-on:deleted="deleted" v-for="(item, index) in list" :key="forRender"
            :pos="index" :data="item" v-bind:render="forRender">
        </index-item>
    </div>
</template>

<script>
    import IndexItem from './IndexItem'
    import Vue from 'vue'
    export default {
        props: ['graph'],
        data() {
            return {
                list: null,
                checked: [],
                linkTo: '/home',
                forRender: 0
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
            },
            selected(args) {
                if (!args[0]) {
                    let index = this.checked.indexOf(args[1])
                    this.checked.splice(index, 1);
                } else {
                    this.checked.push(args[1])

                }
                if (this.checked.length === 0) {
                    this.linkTo = '/home'
                } else {
                    let local = `/graph/${this.checked.sort().join('+')}`
                    this.linkTo = local;
                }

            },
            deleted(args) {
                this.$delete(this.list, args[0])
                console.dir(args[1])
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                axios.get('/destroy/' + args[1]).then(response => console.dir(response)).catch(
                    error => console.dir(error)
                )
                this.forRender += 1;
            }

        }
    };

</script>
