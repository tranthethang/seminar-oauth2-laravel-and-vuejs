import $axios from "@/libs/axios";
import { defineStore } from "pinia";

export const useCommonStore = defineStore({
  id: "common",
  state: () => ({
    user: null,
    loading: false,
  }),
  getters: {
    getProfile: (state) => {
      return state?.user;
    },
  },
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

      this.setProfile(response?.data);
    },
    async logout() {
      $axios.get("/backend/api/user").then((response) => {
        this.setProfile(response?.data);
      });
    },
    async setProfile(payload) {
      this.user = payload;
    },
  },
});
