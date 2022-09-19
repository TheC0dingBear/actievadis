<template>
    <div>
        <h3 class="text-center">Create Product</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="addActivity">
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
                    <button type="submit" class="btn btn-primary">Create</button>
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
        methods: {
            addActivities() {
                this.axios
                    .post('http://localhost:8000/api/activities', this.activity)
                    .then(response => (
                        this.$router.push({ name: 'home' })
                    ))
                    .catch(err => console.log(err))
                    .finally(() => this.loading = false)
            }
        }
    }
</script>
