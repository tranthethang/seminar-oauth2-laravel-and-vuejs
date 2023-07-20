<script setup>
</script>

<template>
  <form>
    <div>
      <label>Email</label>
      <input type="email" v-model="email" :placeholder="email" maxlength="32"/>
    </div>
    <div>
      <label>Password</label>
      <input type="password" v-model="password" :placeholder="password" maxlength="32"/>
    </div>
    <div>
      <button type="submit" @click="submit">Login</button>
    </div>
  </form>
</template>

<script>
export default {
  data() {
    return {
      email: "admin@example.com",
      password: "password",
    };
  },
  methods: {
    submit(e) {
      e.preventDefault();

      this.$emit("submit", {
        email: this.email,
        password: this.password,
      });
    },
  },
};
</script>
