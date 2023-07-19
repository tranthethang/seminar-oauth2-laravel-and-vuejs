<script setup>
import $axios from "./libs/axios";
import LoginForm from "./components/LoginForm.vue";
</script>

<template>
  <main>
    <LoginForm @submit="handleSubmit"/>
  </main>
</template>

<style scoped></style>

<script>
export default {
  data() {
    return {};
  },
  methods: {
    handleSubmit(payload) {
      $axios
          .post("/api/oauth/token", {
            username: payload?.email,
            password: payload?.password,
            grant_type: "password",
            client_id: "3",
            client_secret: "CZtBOoYbmWVIHC46LgwdEeyDruHCQSsiCTomCHIP",
            scope: "",
          })
          .then((response) => {
            console.log(response);
          });
    },
  },
};
</script>
