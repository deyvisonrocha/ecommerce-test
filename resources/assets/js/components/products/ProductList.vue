<template>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Category</th>
                <th>Price</th>
            </tr>
        </thead>

        <tbody>
            <tr v-for="(product, index) in list">
                <td>{{ product.name }}</td>
                <td>{{ product.category.name }}</td>
                <td>{{ product.price }}</td>
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
            product: {
                id: '',
                name: '',
                price: '',
            }
        };
    },

    created() {
        this.fetchProductList();
    },

    methods: {
        fetchProductList() {
            axios.get('api/products').then((res) => {
                this.list = res.data;
            });
        }
    }
}
</script>
