<script >
import Layout from "@/layouts/main.vue";
import AddLately from "./Components/AddLately.vue";
import DataPeronal from "./Components/DataPeronal.vue";
import { mapState, mapActions } from "vuex";
export default {
  components: {
    Layout,
    AddLately,
    DataPeronal,
  },
  data() {
    return {
      text: "Aquí podrás configurar todos los detalles de tu cuenta.Cuando tengas todo listo no olvides hacer click en guardar para que todo quede actualizado",
      item: [],
    };
  },
  methods: {
    ...mapActions(["getPerson"]),

    getdata() {
      console.log(this.ListPerson);
    },
  },
  computed: {
    ...mapState(["ListPerson"]),
  },
  mounted() {
    this.getPerson();
  },
};
</script>
<template>
  <div>
    <Layout>
      <div class="grid grid-cols-3 gap-4 p-5">
        <div class="shadow-lg bg-gray-100 p-5 rounded-lg row-span-1 col-span-2">
          <h1 class="text-cyan-500 text-4xl mb-10">Hola darwin Quishpe</h1>
          <p class="text-xl" v-text="text"></p>
        </div>
        <div
          class="
            shadow-lg
            bg-gray-100
            text-green-500 text-lg
            font-bold
            text-center
            p-5
            rounded-lg
            row-span-5
          "
        >
          <AddLately :items="ListPerson" />
        </div>
        <h1 class="text-3xl">Datos Personales</h1>
        <div
          class="
            shadow-lg
            bg-gray-100
            text-green-500 text-lg
            font-bold
            text-center
            rounded-lg
            row-span-2
            col-span-2
          "
        >
          <DataPeronal :items="ListPerson" />
        </div>
      </div>
    </Layout>
  </div>
</template>