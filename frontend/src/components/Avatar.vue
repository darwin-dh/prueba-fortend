<script setup>
import AvatarIcon from "@/assets/image/icon/notification.png";
import router from "@/router";
const logout = () => {
  router.push({ name: "login" });
};
</script>
<template >
  <div class="flex items-center">
    <img
      src="@/assets/image/icon/notification.png"
      class="px-20"
      alt=""
      width=""
    />
    <div>
      <h1>DARWIN Administador</h1>
      <h5>Administador</h5>
    </div>
    <!--   <img src="@/assets/image/avatar.png" class="px-2 drop-active" alt="" />
    <div class="relative inline-block text-left  mt-20">
      <div
        class="
          absolute
          right-0
          z-10
          mt-2
          w-56
          origin-top-right
          rounded-md
          bg-white
          shadow-lg
          ring-1 ring-black ring-opacity-5
          focus:outline-none
        "
        role="menu"
        aria-orientation="vertical"
        aria-labelledby="menu-button"
        tabindex="-1"
      >
        <div class="py-1" role="none">
          <a
            href="#"
            class="text-gray-700 block px-4 py-2 text-sm"
            role="menuitem"
            tabindex="-1"
            id="menu-item-0"
            >Account settings</a
          >
          <a
            href="#"
            class="text-gray-700 block px-4 py-2 text-sm"
            role="menuitem"
            tabindex="-1"
            id="menu-item-1"
            >Support</a
          >
          <a
            href="#"
            class="text-gray-700 block px-4 py-2 text-sm"
            role="menuitem"
            tabindex="-1"
            id="menu-item-2"
            >License</a
          >
          <form method="POST" action="#" role="none">
            <button
              type="submit"
              class="text-gray-700 block w-full px-4 py-2 text-left text-sm"
              role="menuitem"
              tabindex="-1"
              id="menu-item-3"
            >
              Sign out
            </button>
          </form>
        </div>
      </div>
    
    </div> -->
    <ul class="nav">
      <li>
        <img src="@/assets/image/avatar.png" class="px-2 drop-active" alt="" />
        <ul>
          <li>
            <a href="" @click.prevent="logout">Salir</a>
          </li>
        </ul>
      </li>
    </ul>
  </div>
</template>
<style>
.nav li a {
  background-color: #005077;
  color: #fff;
  text-decoration: none;
  padding: 10px 12px;
  display: block;
  border-radius: 7px;
}

.nav li a:hover {
  background-color: #005077;
}

.nav li ul {
  display: none;
  position: absolute;
  min-width: 100px;
}

.nav li:hover > ul {
  display: block;
}
</style>