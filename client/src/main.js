import {createApp} from 'vue'
import {createPinia} from 'pinia'
import Notifications from '@kyvg/vue3-notification'

import Router from '@/router'
import './assets/main.css'
import App from './App.vue'

import piniaPluginPersistedState from 'pinia-plugin-persistedstate'

import 'soft-ui-dashboard/assets/js/core/popper.min'
import 'soft-ui-dashboard/assets/js/core/bootstrap.bundle.min'
import 'soft-ui-dashboard/assets/js/plugins/perfect-scrollbar.min'
import 'soft-ui-dashboard/assets/js/plugins/smooth-scrollbar.min'
import 'soft-ui-dashboard/assets/js/soft-ui-dashboard'

const app = createApp(App)

const Pinia = createPinia();
Pinia.use(piniaPluginPersistedState)

app.use(Pinia)
app.use(Notifications)
app.use(Router)

app.mount('#app')



