<script >
import router from "@/router";
import { mapState, mapActions } from "vuex";
export default {
  props: {
    items: {
      type: Object,
      default: [],
    },
  },
  methods: {
    ...mapActions(["getPerson"]),
    edit(items) {
      console.log(items);
      router.push({
        name: "Editar",
        params: { id: items.id },
      });
    },
    async detel(items) {
      const result = await axios.post("api/delete-person", {
        id: items.id,
      });
      const data = result.data.data;
      if (data === "YES") {
        console.log("vale");
        this.getPerson();
        Swal.fire({
          position: "top-bot",
          icon: "success",
          title: "Your work has been saved",
          showConfirmButton: false,
          timer: 1500,
        });
      }
    },
  },
};
</script>
<template>
  <div>
    <div
      class="
        flex
        items-center
        bg-white
        my-5
        p-4
        margin
        rounded-full
        justify-around
      "
      v-for="(item, index) in items"
      :key="index"
    >
      <img
        class="w-10 h-10 rounded-full mr-4"
        src="@/assets/image/avatar.png"
        alt="Avatar of Jonathan Reinink"
      />
      <h2>{{ item.name }}-{{ item.lastname }}</h2>
      <h2 v-text="item.email"></h2>
      <h2 v-text="item.telephone"></h2>
      <h2 v-text="item.age"></h2>
      <h2 v-text="item.dni"></h2>
      <h2 v-text="item.sexo"></h2>
      <button
        class="bg-blue-400 px-10 py-1 rounded-full text-white"
        @click="edit(item)"
      >
        Editar
      </button>
      <button
        class="bg-red-600 px-10 py-1 rounded-full text-white"
        @click="detel(item)"
      >
        Borrar
      </button>
    </div>
  </div>
</template>
