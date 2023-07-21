import $axios from "@/libs/axios";
import {defineStore} from "pinia";
import LocalStorageService from "@/services/LocalStorageService"

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
            });

            localStorageService.setToken(response?.data)
        },
        async logout() {
            localStorageService.clearToken()
            this.user = null
        },
        async fetchUser() {
            const {data} = await $axios.get("/backend/api/user")
            this.user = data
        },
    },
});
