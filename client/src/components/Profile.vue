<script setup>
</script>

<template>
  <p>
    <button type="submit" @click="logout">Logout</button>
  </p>
</template>

<script>
export default {
  data() {
    return {};
  },
  methods: {
    logout(e) {
      e.preventDefault();
      this.$emit("logout", {});
    },
  },
};
</script>
