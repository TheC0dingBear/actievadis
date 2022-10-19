<template>
    <div class="overflow-x-auto relative">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        Activiteit
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Deelnemer
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="attribute in attributes" :key="attribute.id" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ attribute.activity_id }}
                    </th>
                    <td class="py-4 px-6">
                        {{ attribute.user_id }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    import axios from 'axios';
    export default {
        data() {
            return {
                attributes: [],
                activities: [],
                users: [],
            }
        },
        created() {
            // axios
            // .get('/api/users/')
            // .then(response => {
            //     this.users = response.data;
            // });
            // axios
            //     .get('/api/activities/')
            //     .then(response => {
            //         this.activities = response.data;
            // });
            axios
                .get('/api/registration/')
                .then(response => {
                    this.attributes = response.data;
            });
        },
    }
</script>
