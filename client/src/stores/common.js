import $axios from "@/libs/axios"
import {defineStore} from "pinia"
import LocalStorageService from "@/services/LocalStorageService"
import {notify} from "@kyvg/vue3-notification"

const localStorageService = LocalStorageService.getService()


export const useCommonStore = defineStore({
    id: "common",
    state: () => ({
        user: null,
        loading: false,
    }),
    getters: {},
    actions: {
        async login(payload) {
            const response = await $axios.post("/backend/oauth/token", {
                username: payload?.email,
                password: payload?.password,
                grant_type: "password",
                client_id: import.meta.env.VITE_CLIENT_ID,
                client_secret: import.meta.env.VITE_CLIENT_SECRET,
                scope: "",
            })

            if (response?.data) {
                localStorageService.setToken(response?.data)
                notify("Welcome, bro.")
            }
        },
        async logout() {
            localStorageService.clearToken()
            this.user = null
            notify("Bye bye, my friend!")
        },
        async fetchUser() {
            const response = await $axios.get("/backend/api/user")
            if (response?.data) {
                this.user = response?.data
                return true;
            }
            return false;
        },
    },
})
