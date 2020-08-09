<template>
    <bar-chart  :chart-data="chartData" :options="optionsObj"></bar-chart>
</template>

<script>
    import BarChart from '../../bar.js'

    export default {
        components: {
            BarChart
        },
        data() {
            return {
                chartData: {},
                optionsObj: {}
            }
        },
        mounted() {

            this.fillData()
            console.log(this.$attrs)
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

