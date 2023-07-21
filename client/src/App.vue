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
  <notifications position="top left" width="480" max="5"/>
</template>

<style scoped></style>

<script>
import {mapActions, mapState} from "pinia";
import {useCommonStore} from "@/stores/common";

export default {
  data() {
    return {}
  },
  computed: {
    ...mapState(useCommonStore, ["user"]),
  },
  methods: {
    ...mapActions(useCommonStore, ["login", "logout", "fetchUser"]),
    async handleSubmit(payload) {
      await this.login(payload)
      await this.fetchUser()
    },
    async handleLogout() {
      await this.logout()
    },
  },
}
</script>
