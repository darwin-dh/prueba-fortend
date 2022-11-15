<script setup>
import Search from "@/components/search.vue";
import Avatar from "@/components/Avatar.vue";
import Menu from "@/components/menu.vue";
</script>
<template>
  <!--   <div class="grid grid-rows-6 grid-col-12 gap-4">
    <div class=" row-span-6 col-span-2">
      <Menu class="w-64"/>
    </div>
    <div class="bg-orange-500 col-span-2">
      <Search /> <Avatar class="float-right m-4" />
    </div>
    <div class="row-span-2 col-span-2"><slot /></div>
  </div> -->
  <div class="m-8 grid grid-cols-12 gap-2 justify-between">
    <div class="rounded-lg h-12 col-span-1 col-start-1">
      <Menu class="w-64" />
    </div>
    <div class="rounded-lg h-12 col-start-3 col-span-5 mt-4">
      <Search />
    </div>
    <div class="rounded-lg h-12 col-span-5">
      <Avatar class="float-right" />
    </div>
    <div class="col-span-12 mt-2 col-start-3">
      <slot />
    </div>
    
  </div>
</template>
<style>
.container-img > img {
  margin-bottom: 40px;
}
.container-img > img:hover {
  background: white;
  cursor: pointer;
  border-top-left-radius: 40px;
  border-bottom-left-radius: 40px;
}
</style>