<script setup>
import LoginForm from "./components/LoginForm.vue"
import Profile from "./components/Profile.vue"
</script>

<template>
  <main>
    <template v-if="!user">
      <h3>Login</h3>
      <hr/>
      <LoginForm @submit="handleSubmit"/>
    </template>

    <template v-if="user">
      <h3>Profile</h3>
      <hr/>
      <p v-for="(val, key) in user"><code>{{ key }}</code>{{ val }}</p>
      <hr/>
      <Profile @logout="handleLogout"/>
    </template>
  </main>
</template>

<style scoped></style>

<script>
import LocalStorageService from "@/services/LocalStorageService"
import $axios from "@/libs/axios"
import {mapActions, mapState} from "pinia";
import {useCommonStore} from "@/stores/common";

const localStorageService = LocalStorageService.getService()

export default {
  data() {
    return {}
  },
  computed: {
    ...mapState(useCommonStore, ["user"]),
  },
  methods: {
    ...mapActions(useCommonStore, ["setProfile"]),
    handleSubmit(payload) {
      $axios.post("/backend/oauth/token", {
        username: payload?.email,
        password: payload?.password,
        grant_type: "password",
        client_id: import.meta.env.VITE_CLIENT_ID,
        client_secret: import.meta.env.VITE_CLIENT_SECRET,
        scope: "",
      }).then((response) => {
        localStorageService.setToken(response?.data)
      }).finally(() => {
        this.fetchProfile()
      })
    },
    handleLogout() {
      localStorageService.clearToken()
      this.setProfile(null)
    },
    fetchProfile() {
      $axios.get("/backend/api/user").then((response) => {
        this.setProfile(response?.data)
      })
    }
  },
}
</script>
