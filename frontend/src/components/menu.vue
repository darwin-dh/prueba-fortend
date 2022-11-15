<script setup>
import router from '@/router';
const logout=()=>{router.push('/login')}
</script>
<template>
  <div
    class="
      rounded-perBorder
      bg-perBlue
      container-height
      m-4
      flex flex-col
      items-center
      col-span-1
    "
  >
    <div class="bg-white rounded-full bg-center p-5 mt-6 mb-5">
      <router-link to="/List">
        <img src="@/assets/image/logo-vertical.png" alt="" />
      </router-link>
    </div>
    <div class="flex flex-col justify-between container-img mt-10">
      <router-link to="editar/9" class="mt-5">
        <img src="@/assets/image/icon/edit.png" alt="" class="p-7" />
      </router-link>

      <router-link to="/agregar">
        <img src="@/assets/image/icon/add.png" alt="" class="p-7" />
      </router-link>

      <router-link to="/agregar">
        <img src="@/assets/image/icon/config.png" alt="" class="p-7" />
      </router-link>
    </div>
    <div class="justify-self-end mt-32 p-7">
      <img src="@/assets/image/icon/logout.png" alt="" class="p-7" @click="logout"/>
    </div>
  </div>
</template>
<style  scoped>

img:hover{
  background: rgba(255, 255, 255, 0.623);
  cursor: pointer;
  border-radius: 15px;
/*   border-bottom-left-radius: 50px;
  border-top-left-radius: 50px; */

}
</style>
