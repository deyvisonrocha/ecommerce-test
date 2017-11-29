<template>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            <tr v-for="(category, index) in list">
                <td>{{ category.name }}</td>
                <td>Edit | Delete</td>
            </tr>
            <tr v-if="list.length === 0">
                <td colspan="4">Não foi(ram) encontrado(s) nenhum registro(s).</td>
            </tr>
        </tbody>
    </table>
</template>

<script>
export default {
    data() {
        return {
            list: [],
            category: {
                id: '',
                name: '',
            }
        };
    },

    created() {
        this.fetchList();
    },

    methods: {
        fetchList() {
            axios.get('api/categories').then((res) => {
                this.list = res.data;
            });
        }
    }
}
</script>
