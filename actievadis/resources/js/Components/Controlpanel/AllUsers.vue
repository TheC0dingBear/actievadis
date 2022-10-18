<template>
    <div class="overflow-x-auto relative">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        Naam
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Email
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Admin
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Created at
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Updated at
                    </th>
                    <th scope="col" class="py-3 px-6">
                    </th>
                    <th scope="col" class="py-3 px-8">
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="user in users" :key="user.id" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th data-toggle="tooltip" data-placement="bottom" v-bind:title="user.name.length >= 30 ? user.name : ''" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ user.name.length >= 30 ? user.name.substring(0, 30) + "..." : user.name }}
                    </th>
                    <td data-toggle="tooltip" data-placement="bottom" v-bind:title="user.email.length >= 30 ? user.email : ''" class="py-4 px-6">
                        {{ user.email.length >= 30 ? user.email.substring(0, 30) + "..." : user.email }}
                    </td>
                    <td class="py-4 px-6">
                        {{ user.admin == 1 ? 'true' : 'false' }}
                    </td>
                    <td class="py-4 px-6">
                        {{ format_date_time(user.created_at) }}
                    </td>
                    <td class="py-4 px-6">
                        {{ format_date_time(user.updated_at) }}
                    </td>
                    <td>
                        <div class="btn-group" role="group">
                            <router-link :to="{name: 'userEdit', params: { id: user.id }}" class="btn btn-success text-orange-400 hover:text-orange-300 hover:font-bold">Edit</router-link>
                        </div>
                    </td>
                    <td>
                        <div class="btn-group" role="group">
                            <button class="btn btn-danger text-red-600 hover:text-red-500 hover:font-bold" @click="deleteUser(user.id)">Delete</button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    import axios from 'axios';
    import moment from 'moment';
    export default {
        data() {
            return {
                users: []
            }
        },
        created() {
            axios
                .get('/api/users/')
                .then(response => {
                    this.users = response.data;
                });
        },
        methods: {
            format_date_time(value){
                if (value) {
                    return moment(String(value)).format('hh:mm DD-MM-YYYY')
                }
            },
            deleteUser(id) {
                Swal.fire({
                    title: 'Weet u het zeker?',
                    text: "U kunt dit niet terug zetten!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ja, verwijder!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        axios
                        .delete(`/api/users/${id}`)
                        .then(response => {
                            let i = this.users.map(data => data.id).indexOf(id);
                            this.users.splice(i, 1)
                        });
                        Swal.fire(
                            'Verwijderd!',
                            'De gebruiker is verwijderd!',
                            'success'
                        )
                    }
                })
            }
        }
    }
</script>
