<script>
import Layout from "@/layouts/main.vue";
import CardData from "./components/CardData.vue";
import Dropdown from "@/components/Generics/dropdown.vue";
import { mapState, mapActions } from "vuex";
export default {
  components: {
    Layout,
    CardData,
    //Dropdown
  },
  data() {
    return {
      items: [],
      ver:false,
      Filters: [
        { id: 1, name: "Fecha" },
        { id: 1, name: "Sexo" },
        { id: 1, name: "Nacionalidad" },
        { id: 1, name: "Perozonalizar" },
      ],
      Filter: [
        { id: 1, name: "Todos" },
        { id: 1, name: "Nuevos" },
        { id: 1, name: "Antiguos" },
      ],
      Options: [
        { id: 1, name: "agregar", label: "Agregar Nuevo" },
        { id: 2, name: "Editar Vista", label: "Editar Vista" },
        { id: 3, name: "Descargar", label: "Descargar" },
      ],
      Fildes: [
        { id: 0, name: "" },
        { id: 1, name: "Nombre" },
        { id: 2, name: "Correo" },
        { id: 3, name: "Teléfono" },
        { id: 4, name: "Edad" },
        { id: 5, name: "No. Documento" },
        { id: 6, name: "Sexo" },
      ],
      cambio: false,
    };
  },
  computed: {
    ...mapState(["ListPerson"]),
  },
  methods: {
    ...mapActions(["getPerson", "filterDate"]),
    dateFilter() {
      const data = (this.cambio = !this.cambio);
      this.filterDate('desc');
    },
  },
  mounted() {
    this.getPerson("asc");
  },
};
</script>
<template>
  <Layout>
    <div class="grid mt-2 gap-5">
      <div
        class="
          bg-perBlue
          flex flex-row
          rounded-3xl
          justify-between
          p-5
          shadow-lg
        "
      >
        <div>
          <button class="ml-10 text-white text-lg" @click="dateFilter()">
            Fecha
          </button>
          <button class="ml-10 text-white text-lg" @click="b">Sexo</button>
          <button class="ml-10 text-white text-lg" @click="c">
            Nacionalidad
          </button>
          <button class="ml-10 text-white text-lg" @click="d">
            Perozonalizar
          </button>
        </div>
        <div>
          <input type="text" class="border-x-0 p-1" placeholder="Seach" />
        </div>
      </div>
      <Dropdown :ver="ver"/>
      <div>
        <div class="flex flex-row rounded-3xl p-5 justify-between">
          <div
            class="
              items-center
              justify-center
              inline-flex
              hover:shadow-lg
              focus:shadow-lg
            "
          >
            <button
              v-for="(items, index) in Filter"
              :key="index"
              class="
                shadow-lg
                hover:bg-perBlue
                text-gray-300
                font-bold
                btnG
                py-2
                px-10
                rounded-l-full
                active:bg-blue-800
              "
            >
              {{ items.name }}
            </button>
          </div>
          <div class="inline-flex">
            <button
              v-for="(items, index) in Options"
              :key="index"
              class="
                shadow-lg
                hover:bg-perBlue
                text-gray-300
                font-bold
                mr-4
                py-2
                px-10
                rounded-2xl
              "
            >
              <router-link :to="items.name">
                {{ items.label }}
              </router-link>
            </button>
          </div>
        </div>
      </div>
      <div class="flex justify-between mr-60 items-center">
        <a
          href=""
          class="ml-10 text-black font-bold text-lg"
          v-for="(items, index) in Fildes"
          :key="index"
        >
          {{ items.name }}</a
        >
        <button class="text-gray-300 font-bold">Agregar Campo</button>
      </div>
      <div class="bg-gray-100 rounded-2xl px-5 py-2">
        <CardData :items="ListPerson" />
      </div>
    </div>
  </Layout>
</template>
<style>
.btnG {
  margin-left: 5px;
}
</style>