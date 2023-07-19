<script setup>
import LoginForm from "./components/LoginForm.vue";
import Profile from "./components/Profile.vue";
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
      <Profile @logout="handleLogout"/>
    </template>
  </main>
</template>

<style scoped></style>

<script>
import $axios from "@/libs/axios";

export default {
  data() {
    return {
      isAuthenticated: false,
    };
  },
  methods: {
    handleSubmit(payload) {
      $axios.post("/api/oauth/token", {
        username: payload?.email,
        password: payload?.password,
        grant_type: "password",
        client_id: import.meta.env.VITE_CLIENT_ID,
        client_secret: import.meta.env.VITE_CLIENT_SECRET,
        scope: "",
      }).then((response) => {
        console.log(response);
      }).finally(() => {
        this.isAuthenticated = true;
        this.fetchProfile();
      })
    },
    handleLogout(payload) {
      this.isAuthenticated = false;
    },
    fetchProfile() {

    }
  },
};
</script>
