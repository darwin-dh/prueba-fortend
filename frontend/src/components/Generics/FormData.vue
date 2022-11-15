<script setup>
import { ref } from "vue";
import router from "@/router";
import Button from "./Button.vue";
defineProps({
  items: {
    type: Object,
    default: [],
  },
  activeBnt: {
    type: String,
    default: "",
  },
  title: {
    type: String,
    default: "",
  },
});

const ListData = ref([]);
const save = async (item, items) => {
  if (item === "Editar Contacto") {
    const res = await axios.post("/api/update-person/", {
      id: items.id,
      name: items.name,
      lastname: items.lastname,
      direccion: items.direccion,
      telephone: items.telephone,
      email: items.email,
      age: items.age,
      dni: items.dni,
      sexo: items.sexo,
      marital_status: items.marital_status,
      nationality: items.nationality,
      residence: items.residence,
      educational_level: items.educational_level,
      actual_charge: items.actual_charge,
    });
    const msm = res.data.mesage;
    if (msm === "YES") {
      router.push({ name: "List" });
    }
  } else {
    console.log("entro", items.name);
    const res = await axios.post("/api/add-person", {
      id: items.id,
      name: items.name,
      lastname: items.lastname,
      direccion: items.direccion,
      telephone: items.telephone,
      email: items.email,
      age: items.age,
      dni: items.dni,
      sexo: items.sexo,
      marital_status: items.marital_status,
      nationality: items.nationality,
      residence: items.residence,
      educational_level: items.educational_level,
      actual_charge: items.actual_charge,
    });
    const msm = res.data.mesage;
    if (msm === "YES") {
      items.name = "";
      items.lastname = "";
      items.direccion = "";
      items.telephone = "";
      items.email = "";
      items.age = "";
      items.dni = "";
      items.sexo = "";
      items.marital_status = "";
      items.nationality = "";
      items.residence = "";
      items.educational_level = "";
      items.actual_charge = "";
      router.push({ name: "List" });
    }
  }
};
</script>
<template>
  <div
    class="
      my-5
      container
      m-auto
      max-w-screen-lg
      shadow-lg
      bg-gray-100
      grid grid-cols-2
      p-5
      gap-3
      rounded-2xl
    "
  >
    <div class="">
      <input
        v-model="items.name"
        type="text"
        class="
          mt-1
          px-3
          py-4
          bg-white
          border
          shadow-sm
          border-slate-300
          placeholder-slate-400
          focus:outline-none focus:border-sky-500 focus:ring-sky-500
          block
          w-full
          rounded-full
          sm:text-sm
          focus:ring-1
        "
        placeholder="Nombre"
      />
      <input
        v-model="items.lastname"
        type="text"
        class="
          mt-1
          px-3
          py-4
          bg-white
          border
          shadow-sm
          border-slate-300
          placeholder-slate-400
          focus:outline-none focus:border-sky-500 focus:ring-sky-500
          block
          w-full
          rounded-full
          sm:text-sm
          focus:ring-1
        "
        placeholder="Apellido"
      />
      <input
        v-model="items.email"
        type="email"
        class="
          mt-1
          px-3
          py-4
          bg-white
          border
          shadow-sm
          border-slate-300
          placeholder-slate-400
          focus:outline-none focus:border-sky-500 focus:ring-sky-500
          block
          w-full
          rounded-full
          sm:text-sm
          focus:ring-1
        "
        placeholder="Correo"
      />
      <input
        v-model="items.telephone"
        type="text"
        class="
          mt-1
          px-3
          py-4
          bg-white
          border
          shadow-sm
          border-slate-300
          placeholder-slate-400
          focus:outline-none focus:border-sky-500 focus:ring-sky-500
          block
          w-full
          rounded-full
          sm:text-sm
          focus:ring-1
        "
        placeholder="Teléfono"
      />
      <input
        v-model="items.age"
        type="text"
        class="
          mt-1
          px-3
          py-4
          bg-white
          border
          shadow-sm
          border-slate-300
          placeholder-slate-400
          focus:outline-none focus:border-sky-500 focus:ring-sky-500
          block
          w-full
          rounded-full
          sm:text-sm
          focus:ring-1
        "
        placeholder="Edad"
      />
      <input
        v-model="items.dni"
        type="text"
        class="
          mt-1
          px-3
          py-4
          bg-white
          border
          shadow-sm
          border-slate-300
          placeholder-slate-400
          focus:outline-none focus:border-sky-500 focus:ring-sky-500
          block
          w-full
          rounded-full
          sm:text-sm
          focus:ring-1
        "
        placeholder="Cédula"
      />
    </div>
    <div class="mb-1">
      <input
        v-model="items.sexo"
        type="text"
        class="
          mt-1
          px-3
          py-4
          bg-white
          border
          shadow-sm
          border-slate-300
          placeholder-slate-400
          focus:outline-none focus:border-sky-500 focus:ring-sky-500
          block
          w-full
          rounded-full
          sm:text-sm
          focus:ring-1
        "
        placeholder="Sexo"
      />
      <input
        v-model="items.marital_status"
        type="text"
        class="
          mt-1
          px-3
          py-4
          bg-white
          border
          shadow-sm
          border-slate-300
          placeholder-slate-400
          focus:outline-none focus:border-sky-500 focus:ring-sky-500
          block
          w-full
          rounded-full
          sm:text-sm
          focus:ring-1
        "
        placeholder="Estado Civil"
      />
      <input
        v-model="items.nationality"
        type="text"
        class="
          mt-1
          px-3
          py-4
          bg-white
          border
          shadow-sm
          border-slate-300
          placeholder-slate-400
          focus:outline-none focus:border-sky-500 focus:ring-sky-500
          block
          w-full
          rounded-full
          sm:text-sm
          focus:ring-1
        "
        placeholder="Nacionalidad"
      />
      <input
        v-model="items.residence"
        type="text"
        class="
          mt-1
          px-3
          py-4
          bg-white
          border
          shadow-sm
          border-slate-300
          placeholder-slate-400
          focus:outline-none focus:border-sky-500 focus:ring-sky-500
          block
          w-full
          rounded-full
          sm:text-sm
          focus:ring-1
        "
        placeholder="Lugar de Naciomiento"
      />
      <input
        v-model="items.educational_level"
        type="text"
        class="
          mt-1
          px-3
          py-4
          bg-white
          border
          shadow-sm
          border-slate-300
          placeholder-slate-400
          focus:outline-none focus:border-sky-500 focus:ring-sky-500
          block
          w-full
          rounded-full
          sm:text-sm
          focus:ring-1
        "
        placeholder="Nivel de Estudios"
      />
      <input
        v-model="items.actual_charge"
        type="text"
        class="
          mt-1
          px-3
          py-4
          bg-white
          border
          shadow-sm
          border-slate-300
          placeholder-slate-400
          focus:outline-none focus:border-sky-500 focus:ring-sky-500
          block
          w-full
          rounded-full
          sm:text-sm
          focus:ring-1
        "
        placeholder="Cargo Actual"
      />
    </div>
  
  </div>
  <Button :title="title" @click="save(title, items)"  />
</template>
<style>
input {
  margin-bottom: 1.5rem;
}
</style>