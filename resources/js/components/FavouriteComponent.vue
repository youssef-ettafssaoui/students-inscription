<template>
    <div>
        <button
            v-if="show"
            @click.prevent="unsave()"
            class="btn btn-danger font-weight-bold"
            style="width: 100%"
        >
            <i class="fa fa-ban"></i> ANNULER LE SAUVEGARDE
        </button>

        <button
            v-else
            @click.prevent="save()"
            class="btn font-weight-bold"
            style="width: 100%; background-color: darkblue; color: white"
        >
            <i class="fa fa-save"></i> SAUVEGARDER
        </button>
    </div>
</template>

<script>
export default {
    props: ["formationid", "favorited"],

    data() {
        return {
            show: true,
        };
    },

    mounted() {
        this.show = this.jobFavorited ? true : false;
    },

    computed: {
        jobFavorited() {
            return this.favorited;
        },
    },

    methods: {
        save() {
            axios
                .post("/save/" + this.formationid)
                .then((response) => (this.show = true))
                .catch((error) => alert("error"));
        },
        unsave() {
            axios
                .post("/unsave/" + this.formationid)
                .then((response) => (this.show = false))
                .catch((error) => alert("error"));
        },
    },
};
</script>
