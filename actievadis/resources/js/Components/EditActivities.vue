<template>
    <div>
        <h3 class="text-center">Edit Activities</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="updateActivity">
                    <div class="form-group">
                        <label>Naam</label>
                        <input type="text" class="form-control" v-model="activity.name">
                    </div>
                    <div class="form-group">
                        <label>Locatie</label>
                        <input type="text" class="form-control" v-model="activity.location">
                    </div>
                    <div>
                        <label>Beschrijving</label>
                        <input type="text" class="form-control" v-model="activity.description">
                    </div>
                    <div>
                        <label>Datum</label>
                        <input type="text" class="form-control" v-model="activity.datum">
                    </div>
                    <div>
                        <label>Start Tijd</label>
                        <input type="text" class="form-control" v-model="activity.startTime">
                    </div>
                    <div>
                        <label>Eind Tijd</label>
                        <input type="text" class="form-control" v-model="activity.endTime">
                    </div>
                    <div>
                        <label>Kosten</label>
                        <input type="text" class="form-control" v-model="activity.cost">
                    </div>
                    <div>
                        <label>Eten</label>
                        <input type="text" class="form-control" v-model="activity.food">
                    </div>
                    <div>
                        <label>Max. Personen</label>
                        <input type="text" class="form-control" v-model="activity.maxPeople">
                    </div>
                    <div>
                        <label>Afb. URL</label>
                        <input type="text" class="form-control" v-model="activity.imageUrl">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                activity: {}
            }
        },
        created() {
            this.axios
                .get(`http://localhost:8000/api/activities/${this.$route.params.id}`)
                .then((res) => {
                    this.activity = res.data;
                });
        },
        methods: {
            updateActivity() {
                this.axios
                    .patch(`http://localhost:8000/api/activities/${this.$route.params.id}`, this.activity)
                    .then((res) => {
                        this.$router.push({ name: 'home' });
                    });
            }
        }
    }
</script>
