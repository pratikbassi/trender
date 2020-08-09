<template>
    <v-card>
        <v-tabs
            fixed-tabs
        >
            <v-tab>Scatter</v-tab>
            <v-tab>IPR: Bar</v-tab>
            <v-tab>TODO: Stacked Line</v-tab>
            <v-tab-item>
                <div class="chart-size">
                    <Scatter :data="childData"></Scatter>
                </div>
            </v-tab-item>
            <v-tab-item>
                <div class="chart-size">
                    <Bar :data="childData"></Bar>
                </div>
            </v-tab-item>
            <v-tab-item>
                <div class="chart-size">
                    STACKED LINE
                </div>
            </v-tab-item>
        </v-tabs>

    </v-card>


</template>

<script>

    import Bar from "./Bar";
    import Scatter from "./Scatter";

    export default {
        components: {Scatter, Bar},
        data() {
            return {
                childData: {},
            }
        },
        mounted() {
            console.log("Dash mounted.");
            this.fillData();
        },

        methods: {
            fillData() {
                this.childData = this.$attrs.data
                console.log(this.$attrs.data)
            },
        }
    };

</script>

