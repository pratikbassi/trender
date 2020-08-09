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
        },
        methods: {
            fillData() {
                this.chartData = this.$attrs.data
                for(let item in this.chartData['datasets']){
                    this.chartData['datasets'][item].fill = true;
                    this.chartData['datasets'][item].backgroundColor= this.chartData['datasets'][item].borderColor
                }
                this.optionsObj = {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        xAxes: [{
                            //type: 'time',
                        }]
                    }
               }
            },
        }

    }

</script>

