<template>

<div class="overflow-x-auto relative">
    <table class="text-sm text-left text-gray-500 dark:text-gray-400 w-[1024px]">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    Activiteiten
                </th>
                <th scope="col" class="py-3 px-6"></th>
                <th scope="col" class="py-3 px-6"></th>
                <th scope="col" class="py-3 px-6"></th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="activity in activities" :key="activity.id" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th data-toggle="tooltip" v-bind:title="activity.name.length >= 30 ? activity.name : ''" scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ activity.name.length >= 30 ? activity.name.substring(0, 30) + "..." : activity.name }}
                </th>
                <td data-toggle="tooltip" v-bind:title="activity.location.length >= 30 ? activity.location : ''" class="py-8 px-8">
                    {{ activity.location.length >= 30 ? activity.location.substring(0, 30) + "..." : activity.location }}
                </td>
                <td data-toggle="tooltip" class="py-8 px-8">
                    {{ activity.datum }}
                </td>
                <td class="flex justify-center pt-8">
                    <a :href="'infoActiviteit/id=' + activity.id" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"> Meer informatie -></a>
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
            activities: []
        }
    },
    created() {
        axios
            .get('/api/activities/')
            .then(response => {
                this.activities = response.data;
            });
    }
}
</script>
