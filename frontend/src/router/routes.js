export default [
  {
    path: "/login",
    name: "login",
    component: () => import("@/views/account/login.vue"),
    /*       meta: {
            title: "Login",
            beforeResolve(routeTo, routeFrom, next) {
              // If the user is already logged in
              if (store.getters["auth/loggedIn"]) {
                // Redirect to the home page instead
                next({ name: "default" });
              } else {
                // Continue to the login page
                next();
              }
            },
          }, */
  },
  {
    path: "/register",
    name: "Register",
    component: () => import("@/views/account/register.vue"),
    meta: {
      title: "Register",
      beforeResolve(routeTo, routeFrom, next) {
        // If the user is already logged in
        if (store.getters["auth/loggedIn"]) {
          // Redirect to the home page instead
          next({ name: "default" });
        } else {
          // Continue to the login page
          next();
        }
      },
    },
  },
  {
    path: "/forgot-password",
    name: "Forgot password",
    component: () => import("@/views/account/forgot-password.vue"),
    meta: {
      title: "Forgot Password",
      beforeResolve(routeTo, routeFrom, next) {
        // If the user is already logged in
        if (store.getters["auth/loggedIn"]) {
          // Redirect to the home page instead
          next({ name: "default" });
        } else {
          // Continue to the login page
          next();
        }
      },
    },
  },

  {
    path: "/",
    name: "default",
    meta: {
      title: "Dashboard",
      authRequired: false,
    },
    component: () => import("@/views/dashboard/index.vue"),
  },
  //crud
  {
    path: "/list",
    name: "List",
    meta: {
      title: "Dashboard",
      authRequired: false,
    },
    component: () => import("@/views/Crud/index.vue"),
  },
  {
    path: "/agregar",
    name: "agregar",
    meta: {
      title: "Agregar Contacto",
      authRequired: false,
    },
    component: () => import("@/views/Crud/components/AddContact.vue"),
  },
  {
    path: "/editar/:id",
    name: "Editar",
    meta: {
      title: "Agregar Contacto",
      authRequired: false,
    },
    component: () => import("@/views/Crud/components/EditContact.vue"),
  },

];