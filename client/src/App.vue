<script setup>
import $axios from "./libs/axios";
import LoginForm from "./components/LoginForm.vue";
</script>

<template>
  <main>
    <LoginForm @submit="handleSubmit" />
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
        .post("/ffd/oauth/token", {
          ...payload,
          grant_type: "password",
          client_id: "3",
          client_secret: "s1Ez50vSalkUN2txtxWhCZ51xE7648E35Ai3Ha3S",
          scope: "",
        })
        .then((response) => {
          console.log(response);
        });
    },
  },
};
</script>
