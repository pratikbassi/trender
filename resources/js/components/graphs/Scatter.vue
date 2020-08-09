<template>
    <line-chart  :chart-data="chartData" :options="optionsObj"></line-chart>
</template>

<script>
    import LineChart from '../../line.js'

    export default {
        components: {
            LineChart
        },
        data() {
            return {
                chartData: {},
                optionsObj: {}
            }
        },
        mounted() {

            this.fillData()
        },
        methods: {
            fillData() {
                this.chartData = this.$attrs.data
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
