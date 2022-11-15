<script setup>
defineProps({
    ver:{
        type:Boolean
    }
})
</script>

<template>
  <div class="bg-red-500 w-40">
    <h1 v-show="ver">asdasdAAAAas</h1>
    {{ver}}
  </div>
</template>