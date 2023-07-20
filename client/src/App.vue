<script setup>
import LoginForm from "./components/LoginForm.vue"
import Profile from "./components/Profile.vue"
</script>

<template>
  <main>
    <template v-if="!isAuthenticated">
      <h3>Login</h3>
      <hr/>
      <LoginForm @submit="handleSubmit"/>
    </template>

    <template v-if="isAuthenticated">
      <h3>Profile</h3>
      <hr/>
      <p v-for="(val, key) in commonStore.user"><code>{{ key }}</code>{{ val }}</p>
      <hr/>
      <Profile @logout="handleLogout"/>
    </template>
  </main>
</template>

<style scoped></style>

<script>
import LocalStorageService from "@/services/LocalStorageService"
import $axios from "@/libs/axios"
import {mapStores} from "pinia";
import {useCommonStore} from "@/stores/common";

const localStorageService = LocalStorageService.getService()

export default {
  data() {
    return {
      isAuthenticated: false,
    }
  },
  computed: {
    ...mapStores(useCommonStore)
  },
  methods: {
    handleSubmit(payload) {
      $axios.post("/backend/oauth/token", {
        username: payload?.email,
        password: payload?.password,
        grant_type: "password",
        client_id: import.meta.env.VITE_CLIENT_ID,
        client_secret: import.meta.env.VITE_CLIENT_SECRET,
        scope: "",
      }).then((response) => {
        console.log(response)
        localStorageService.setToken(response?.data)
      }).finally(() => {
        this.isAuthenticated = true
        this.fetchProfile()
      })
    },
    handleLogout(payload) {
      this.isAuthenticated = false
      localStorageService.clearToken()
    },
    fetchProfile() {
      $axios.get("/backend/api/user").then((response) => {
        console.log(response)
        this.commonStore.setProfile(response?.data)
      })
    }
  },
}
</script>
