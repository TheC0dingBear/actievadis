<template>
    <div class="overflow-x-auto relative">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        ID
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Naam
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Locatie
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Beschrijving
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Datum
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Start Tijd
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Eind Tijd
                    </th>
                    <!-- <th scope="col" class="py-3 px-6">
                        Kosten
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Eten
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Max. Pers.
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Afv. URL
                    </th> -->
                    <th scope="col" class="py-3 px-6">
                    </th>
                    <th scope="col" class="py-3 px-8">
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="activity in activities" :key="activity.id" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ activity.id }}
                    </th>
                    <td data-toggle="tooltip" data-placement="bottom" v-bind:title="activity.name.length >= 20 ? activity.name : ''" class="py-4 px-6">
                        {{ activity.name.length >= 20 ? activity.name.substring(0, 20) + "..." : activity.name }}
                    </td>
                    <td data-toggle="tooltip" data-placement="bottom" v-bind:title="activity.location.length >= 20 ? activity.location : ''" class="py-4 px-6">
                        {{ activity.location.length >= 20 ? activity.location.substring(0, 20) + "..." : activity.location }}
                    </td>
                    <td data-toggle="tooltip" data-placement="bottom" v-bind:title="activity.description.length >= 20 ? activity.description : ''" class="py-4 px-6">
                        {{ activity.description.length >= 20 ? activity.description.substring(0, 20) + "..." : activity.description }}
                    </td>
                    <td class="py-4 px-6">
                        {{ activity.datum }}
                    </td>
                    <td class="py-4 px-6">
                        {{ activity.startTime }}
                    </td>
                    <td class="py-4 px-6">
                        {{ activity.endTime }}
                    </td>
                    <!-- <td class="py-4 px-6">
                        {{ activity.cost }}
                    </td>
                    <td class="py-4 px-6">
                        {{ activity.food == 1 ? 'Ja' : 'Nee' }}
                    </td>
                    <td class="py-4 px-6">
                        {{ activity.maxPeople }}
                    </td>
                    <td class="py-4 px-6">
                        {{ activity.imageUrl.substring(0, 10) + "..." }}
                    </td> -->
                    <td>
                        <div class="btn-group" role="group">
                            <router-link :to="{name: 'edit', params: { id: activity.id }}" class="btn btn-success text-orange-400 hover:text-orange-300 hover:font-bold">Edit</router-link>
                        </div>
                    </td>
                    <td>
                        <div class="btn-group" role="group">
                            <button class="btn btn-danger text-red-600 hover:text-red-500 hover:font-bold" @click="deleteActivity(activity.id)">Delete</button>
                        </div>
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
                .get('http://localhost:8000/api/activities/')
                .then(response => {
                    this.activities = response.data;
                });
        },
        methods: {
            deleteActivity(id) {
                axios
                    .delete(`http://localhost:8000/api/activities/${id}`)
                    .then(response => {
                        let i = this.activities.map(data => data.id).indexOf(id);
                        this.activities.splice(i, 1)
                    });
            }
        }
    }
</script>
