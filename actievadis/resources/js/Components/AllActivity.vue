<template>
    <div>
        <h2 class="text-center">Activities List</h2>

        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Naam</th>
                <th>Locatie</th>
                <th>Beschrijving</th>
                <th>Datum</th>
                <th>Start Tijd</th>
                <th>Eind Tijd</th>
                <th>Kosten</th>
                <th>Eten</th>
                <th>Max. Personen</th>
                <th>Afb. URL</th>
                <th>Created at</th>
                <th>Updated at</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="activity in activities" :key="activity.id">
                <td>{{ activity.id }}</td>
                <td>{{ activity.name }}</td>
                <td>{{ activity.location }}</td>
                <td>{{ activity.description }}</td>
                <td>{{ activity.datum }}</td>
                <td>{{ activity.startTime }}</td>
                <td>{{ activity.endTime }}</td>
                <td>{{ activity.cost }}</td>
                <td>{{ activity.food }}</td>
                <td>{{ activity.maxPeople }}</td>
                <td>{{ activity.imageUrl }}</td>
                <td>{{ created_at }}</td>
                <td>{{ updated_at }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <router-link :to="{name: 'edit', params: { id: activity.id }}" class="btn btn-success">Edit</router-link>
                        <button class="btn btn-danger" @click="deleteActivity(activity.id)">Delete</button>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                activities: []
            }
        },
        created() {
            this.axios
                .get('http://localhost:8000/api/activities/')
                .then(response => {
                    this.activities = response.data;
                });
        },
        methods: {
            deleteActivity(id) {
                this.axios
                    .delete(`http://localhost:8000/api/activities/${id}`)
                    .then(response => {
                        let i = this.activities.map(data => data.id).indexOf(id);
                        this.activities.splice(i, 1)
                    });
            }
        }
    }
</script>
