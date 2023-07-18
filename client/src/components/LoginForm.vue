<script setup>
</script>

<template>
  <form>
    <p>
      <label>
        <span>Email</span><br />
        <input type="email" v-model="email" maxlength="32"/>
      </label>
    </p>
    <p>
      <label>
        <span>Password</span><br />
        <input type="text" v-model="password" maxlength="32"/>
      </label>
    </p>
    <p>
      <button type="submit" @click="submit">Login</button>
    </p>
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
