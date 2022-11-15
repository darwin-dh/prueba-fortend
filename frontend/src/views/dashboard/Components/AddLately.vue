<script setup>
defineProps({
  items:{
    type:Object,
    default:[]
  }
})
</script>
<template>
<div>
      <h1 class="text-center mt-5 text-cyan-500">Agregados Recientemente</h1>
    <div class="flex items-center m-5 bg-white p-5 rounded-2xl" v-for="(item ,index) in items" :key="index">
      <img
        class="w-10 h-10 rounded-full mr-4"
        src="@/assets/image/avatar.png"
        alt="Avatar of Jonathan Reinink"
      />
      <div class="text-sm">
        <p class="text-gray-900 leading-none">{{item.name}}-{{item.apellido}}</p>
        <p class="text-gray-600">{{item.age}} - {{item.telephone}}</p>
      </div>
    </div>
</div>

</template>