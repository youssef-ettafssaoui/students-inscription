<template>
    <div>
        <form @submit="formSubmit">
            <button
                v-if="show"
                type="submit"
                class="btn btn-warning font-weight-bold"
                style="width: 100%"
            >
                <i class="fa fa-hand-pointer-o"></i> DEMANDER LA FORMATION
            </button>

            <div
                v-else
                class="alert alert-success font-weight-bold text-center"
                style="font-size: 20px"
            >
                VOTRE DEMANDE A ÉTÉ ENVOYÉ AVEC SUCCÈS !
            </div>
        </form>
    </div>
</template>

<script>
export default {
    props: ["formationid"],
    mounted() {
        console.log("Component mounted.");
    },
    data() {
        return {
            show: true,
        };
    },
    methods: {
        formSubmit(e) {
            e.preventDefault();
            axios
                .post("/applications/" + this.formationid, {})
                .then((response) => {
                    this.show = false;
                })
                .catch((error) => {
                    alert("error");
                });
        },
    },
};
</script>
