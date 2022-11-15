<script setup>
import FormData from "@/components/Generics/FormData.vue";
import Button from "@/components/Generics/Button.vue";
defineProps({
  items: {
    type: Array,
    default: [],
  },
});
const activeBnt = "edit";
</script>
<template>
  <div
    class="
      grid grid-cols-12
      mt-5
      p-10
      bg-gray-100
      container
      m-auto
      max-w-screen-lg
      gap-5
      rounded-2xl
    "
  >
    <div class="col-start-3 col-span-3 flex flex-col items-center ">
      <img
        class="w-24 h-24 rounded-full mr-4 p-1"
        src="@/assets/image/avatar.png"
        alt="Avatar of Jonathan Reinink"
      />
      <button class="bg-blue-200 px-12 my-1 rounded-3xl">Subir Foto</button>
    </div>
    <div class="col-span-3 p-5">
      <h1 class="text-cyan-400 font-bold text-3xl">{{ items.name }}</h1>
      <div class="font-bold">
        <h2>Años:{{ items.age }}</h2>
        <h2>Email: {{ items.email }}</h2>
        <h2>Nacionalidad: {{ items.nationality }}</h2>
      </div>
    </div>
    <div class="col-span-3 mt-5">
      <div class="font-bold">
        <h2>Telefono: {{ items.telephone }}</h2>
        <h2>Cedula: {{ items.dni }}</h2>
        <h2>Residencia: {{ items.residence }}</h2>
      </div>
    </div>
  </div>

  <div
    class="
      container
      m-auto
      max-w-screen-lg
      shadow-lg
      bg-gray-100
      text-lg
      font-bold
      text-center
      rounded-lg
      row-span-2
      col-span-2
    "
  >
    <!--  <FormData :items="items" :activeBnt="activeBnt" />
    <Button @click="save(activeBnt, items)" :title="activeBnt" /> -->
  </div>
</template>
