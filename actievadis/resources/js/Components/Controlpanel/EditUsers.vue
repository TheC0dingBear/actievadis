<template>
   <div>
        <form @submit.prevent="updateUser">
            <div class="relative z-0 mb-6 w-full group">
                <input v-model="user.name" type="text" name="floating_name" id="floating_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required="">
                <label for="floating_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Naam</label>
            </div>
            <div class="relative z-0 mb-6 w-full group">
                <input v-model="user.email" type="email" name="floating_location" id="floating_location" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required="">
                <label for="floating_location" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email</label>
            </div>
            <div class="relative z-0 mb-6 w-full group">
                <input v-model="user.password" type="password" name="floating_cost" id="floating_cost" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required="">
                <label for="floating_cost" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Wachtwoord</label>
            </div>
            <div class="relative z-0 mb-6 w-full group">
                <label for="default-toggle" class="inline-flex relative items-center mb-4 cursor-pointer">
                    <input v-model="user.admin" type="checkbox" value="" id="default-toggle" class="sr-only peer" v-bind:checked="user.admin == '1' ? true : false">
                    <div class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                    <span class="ml-3 text-sm font-medium text-gray-500 dark:text-gray-400">Admin</span>
                </label>
            </div>
            <button type="submit" class="mb-32 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Bevestigen</button>
        </form>
    </div>
</template>

<script>
    import axios from 'axios';
    export default {
        data() {
            return {
                user: {}
            }
        },
        created() {
            axios
                .get(`/api/users/${this.$route.params.id}`)
                .then((res) => {
                    this.user = res.data;
                });
        },
        methods: {
            updateUser() {
                Swal.fire({
                    title: 'Weet u het zeker?',
                    text: "U kunt dit niet terug zetten!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ja, update!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        axios
                        .patch(`/api/users/${this.$route.params.id}`, this.user)
                        .then((res) => {
                            this.$router.push({ name: 'userList' });
                        });
                        Swal.fire(
                            'Updated!',
                            'De gebruiker is geupdate!',
                            'success'
                        )
                    }
                })
            }
        }
    }
</script>
