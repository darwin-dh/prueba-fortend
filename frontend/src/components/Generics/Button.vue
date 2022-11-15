<script setup>
defineProps({
  title: {
    type: String,
    default: "AGREGAR CONTACTO",
  },
});
</script>
<template>
  <button
    type="button"
    class="
      mb-2
      w-full
      inline-block
      px-6
      py-2.5
      bg-blue-500
      text-white
      font-medium
      text-2xl
      leading-normal
      uppercase
      rounded-full
      shadow-md
      hover:bg-blue-700 hover:shadow-lg
      focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
      active:bg-blue-800 active:shadow-lg
      transition
      duration-150
      ease-in-out
    "
  >
    {{ title }}
  </button>
</template>