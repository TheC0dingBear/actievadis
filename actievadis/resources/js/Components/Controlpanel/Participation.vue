<template>
    <div class="overflow-x-auto relative">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        Naam
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Locatie
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
                <tr v-for="activity in activities" :key="activity.id" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th data-toggle="tooltip" data-placement="bottom" v-bind:title="activity.name.length >= 20 ? activity.name : ''" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ activity.name.length >= 20 ? activity.name.substring(0, 20) + "..." : activity.name }}
                    </th>
                    <td data-toggle="tooltip" data-placement="bottom" v-bind:title="activity.location.length >= 20 ? activity.location : ''" class="py-4 px-6">
                        {{ activity.location.length >= 20 ? activity.location.substring(0, 20) + "..." : activity.location }}
                    </td>
                    <td data-toggle="tooltip" data-placement="bottom" v-bind:title="activity.description.length >= 20 ? activity.description : ''" class="py-4 px-6">
                        {{ activity.description.length >= 20 ? activity.description.substring(0, 20) + "..." : activity.description }}
                    </td>
                    <td class="py-4 px-6">
                        {{ format_date(activity.datum) }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    import axios from 'axios';
    import moment from 'moment'
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
        },
        methods: {
            format_date_time(value){
                if (value) {
                    return moment(String(value)).format('hh:mm DD-MM-YYYY')
                }
            },
            format_date(value){
                if (value) {
                    return moment(String(value)).format('DD-MM-YYYY')
                }
            },
            deleteActivity(id) {
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
                        .delete(`/api/activities/${id}`)
                        .then(response => {
                            let i = this.activities.map(data => data.id).indexOf(id);
                            this.activities.splice(i, 1)
                        });
                        Swal.fire(
                            'Verwijderd!',
                            'Uw activiteit is verwijderd!',
                            'success'
                        )
                    }
                })
            }
        }
    }
</script>
