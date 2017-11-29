<template>
    <div v-bind:class="defineCor">
        <div class="panel-heading">{{ title }}</div>

        <div class="panel-body">
            <slot></slot>
        </div>
    </div>
</template>

<script>
export default {
    props: [
        'title',
        'cor'
    ],
    mounted() {
        console.log("Panel montado");
    },
    computed: {
        defineCor: function () {
            return "panel " + (this.cor || "panel-default");
        }
    }
}
</script>
