import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import store from './store/store'
import css from './assets/css/app.css'
import '@/libs/axios'

createApp(App).use(store).use(css).use(router).mount('#app')
