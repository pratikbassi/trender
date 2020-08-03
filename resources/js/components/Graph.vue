<template>
    <line-chart  :chart-data="chartData" :options="optionsObj"></line-chart>
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
                chartData: null,
                optionsObj: null
            }
        },
        mounted() {
            console.dir(this.graphData)

            this.fillData()
        },
        methods: {
            fillData() {
                this.chartData = this.graphData
                this.optionsObj = {
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
