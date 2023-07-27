import {createApp} from 'vue'
import {createPinia} from 'pinia'
import Notifications from '@kyvg/vue3-notification'

import Router from '@/router'
import './assets/main.css'
import App from './App.vue'

import 'soft-ui-dashboard/assets/js/core/popper.min'
import 'soft-ui-dashboard/assets/js/core/bootstrap.bundle.min'
import 'soft-ui-dashboard/assets/js/plugins/perfect-scrollbar.min'
import 'soft-ui-dashboard/assets/js/plugins/smooth-scrollbar.min'
import 'soft-ui-dashboard/assets/js/soft-ui-dashboard'

const app = createApp(App)

app.use(createPinia())
app.use(Notifications)
app.use(Router)

app.mount('#app')



