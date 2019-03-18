<script>
    export default {
        data() {
            return {
                table: {
                    rows: []
                }
            }
        },
        mounted() {

        },
        methods: {
            onLoad() {
                axios
                    .get('/ajax/clients')
                    .then((res) => {
                        this.table.rows = res.data.data;
                    }).catch((err) => {
                    console.log(err)
                });
            },
            onReset() {
                this.table.rows = [];
            },
            onRandom() {
                this.table.rows[this.randomInteger(0, this.table.rows.length)].name = 'Леха ты не прав';
            },
            randomInteger(min, max) {
                var rand = min - 0.5 + Math.random() * (max - min + 1)
                rand = Math.round(rand);
                return rand;
            }
        }
    }
</script>

<style scoped>
    table {
        font-size: 18px;
    }
</style>

<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        <a href="#" @click.prevent="onLoad">Заполнить</a>
                        <a href="#" @click.prevent="onReset">Очистить</a>
                        <a href="#" @click.prevent="onRandom">Случайно</a>

                        <table class="table table-bordered">
                            <thead>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            </thead>
                            <tbody>
                            <tr v-for="(value, key) in table.rows">
                                <td>{{ value.id }}</td>
                                <td>{{ value.name }}</td>
                                <td>{{ value.patronymic }}</td>
                                <td>{{ value.surname }}</td>
                            </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
