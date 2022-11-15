<script >
import { mapActions } from "vuex";
export default {
  data() {
    return {
      email: "pruebas@amobasoftware.com",
      password: "134679",
      submitted: false,
      authError: null,
      tryingToLogIn: false,
      isAuthError: false,
    };
  },

  methods: {
    ...mapActions(["loginUser"]),
    login() {
      this.loginUser({
        email: this.email,
        contrasena: this.password,
      });
    },
  },
};
</script>
<template>
  <div class="text-center px-96 mt-10">
    <h1 class="text-5xl text-indigo-900 font-semibold">Inicia sesión en DRV</h1>
    <LogosReds class="" />
    <span class="mt-5 text-gray-500 leading-10"
      >o usa tu correo electronico</span
    >

    <div class="relative mb-6">
      <div
        class="
          flex
          absolute
          inset-y-0
          left-0
          items-center
          pl-3
          pointer-events-none
        "
      >
        <img src="@/assets/image/icon/icon-email.png" alt="" class="w-6" />
      </div>
      <input
        type="text"
        class="text-gray-900 text-sm block w-full pl-10 p-2.5 bg-sky-100"
        placeholder="Email"
        v-model="email"
      />
    </div>
    <div class="relative mb-6">
      <div
        class="
          flex
          absolute
          inset-y-0
          left-0
          items-center
          pl-3
          pointer-events-none
        "
      >
        <img src="@/assets/image/icon/icon-password.png" alt="" class="w-6" />
      </div>
      <input
        type="text"
        class="text-gray-900 text-sm block w-full pl-10 p-2.5 bg-sky-100"
        placeholder="Password"
        v-model="password"
      />
    </div>
    <span
      ><a href="" class="hover:text-blue-600"
        >¿Olvidaste tu contreseña?</a
      ></span
    >
    <br />
    <button
      class="
        bg-blue-500
        hover:bg-blue-400
        text-white
        font-medium
        mt-5
        py-3
        px-16
        rounded-full
      "
      @click="login"
    >
      INICIAR SESION
    </button>
  </div>
</template>
<style scoped>
input {
  height: 50px;
}
</style>>

