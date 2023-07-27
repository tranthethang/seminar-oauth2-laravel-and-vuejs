import axios from "axios"

import {notify} from "@kyvg/vue3-notification"
import LocalStorageService from "@/services/LocalStorageService"

const localStorageService = LocalStorageService.getService()

const $axios = axios.create({
    timeout: 3600,
    withCredentials: true,
})

$axios.interceptors.request.use(config => {
        const token = localStorageService.getAccessToken()
        if (token) {
            config.headers['Authorization'] = 'Bearer ' + token
        }
        return config
    },
    error => {
        Promise.reject(error)
    }
)

$axios.interceptors.response.use(
    response => response,
    error => {
        let msg = error?.response?.data?.error_description
        if(!msg) {
            msg = error?.message
        }
        notify({type: "warn", text: msg})
    }
)

export default $axios
