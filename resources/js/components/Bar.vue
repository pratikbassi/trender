<template>
    <bar  :chart-data="datacollection" :options="optionscollection"></bar>

</template>

<script>
    import Bar from '../bar.js'

    export default {
        props: ['graphData'],
        components: {
            Bar
        },
        // data() {
        //     return {
        //         datacollection: {},
        //         optionscollection: {}
        //     }
        // },
        mounted() {
            //console.dir(this.graphData)

            this.fillData()
        },
        methods: {
            fillData() {
                // this.datacollection = this.graphData
                // this.optionscollection = {
                //     responsive: true,
                //     maintainAspectRatio: false,
                    // scales: {
                    //     xAxes: [{
                    //         type: 'time',
                    //         distribution: 'series'
                    //     }]
                    // }
               // }
            },
        }

    }

</script>

<style>

</style>
