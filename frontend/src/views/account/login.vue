<script setup>
import Logo from "./components/logo.vue";
import RightImg from "./components/RightImg.vue";
import BtnRegister from "./components/BtnRegister.vue";
import FormLogin from "./components/FormLogin.vue";
const valueWidth = "180";
const valueHeight = "180";
//data
const title = "Hola, amigo";
const text = "Ingresa tus datos y empieza   este viajes con nosotros";
</script>
<template>
  <section>
    <section class="grid grid-cols-1 sm:grid-cols-12">
      <section class="col-span-9">
        <Logo
          :valueWidth="valueWidth"
          :valueHeight="valueHeight"
          class="mt-10 ml-10"
        />
        <FormLogin/>
      </section>
      <section
        class="
          col-span-3
          text-register text-cyan-50
          flex flex-col
          items-center
          justify-center
          text-center
          px-24
        "
      >
        <article>
          <h2 v-text="title" class="text-5xl mb-1 font-semibold" />
          <p
            v-text="text"
            class="text-center leading-relaxed text-lg text-gray-100"
          />
          <BtnRegister class="text-center" />
        </article>
      </section>
    </section>
  </section>
</template>
<style>
.text-register {
  background: url("@/assets/image/right-login.png");
  background-position: center;
  background-size: cover;
  height: 100vh;
}
</style>