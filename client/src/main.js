import {createApp} from 'vue'
import {createPinia} from 'pinia'
import Notifications from '@kyvg/vue3-notification'

import Router from '@/router'
import './assets/main.css'
import App from './App.vue'

const app = createApp(App)

app.use(createPinia())
app.use(Notifications)
app.use(Router)

app.mount('#app')



