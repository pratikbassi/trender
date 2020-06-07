<template>
    <line-chart  :chart-data="datacollection" :options="optionscollection"></line-chart>
</template>

<script>
    import LineChart from '../line.js'

    export default {
        props: ['graphData'],
        components: {
            LineChart
        },
        data() {
            return {
                datacollection: null,
                optionscollection: null
            }
        },
        mounted() {
            console.dir(this.graphData)

            this.fillData()
        },
        methods: {
            fillData() {
                this.datacollection = this.graphData
                this.optionscollection = {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        xAxes: [{
                            type: 'time',
                            distribution: 'series'
                        }]
                    }
                }
            },
        }

    }

</script>

<style>

</style>
