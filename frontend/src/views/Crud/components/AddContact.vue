<script setup>
import Layout from "@/layouts/main.vue";
import CardData from "@/components/Generics/CardData.vue";
import Button from "@/components/Generics/Button.vue";
import FormData from "@/components/Generics/FormData.vue";
defineProps({});
const title = "Agregar Contacto";
</script>
<template>
  <Layout>
    <CardData class="mb-5" />
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
      <FormData class="mt-10" :title="title" />
    </div>
  </Layout>
</template>