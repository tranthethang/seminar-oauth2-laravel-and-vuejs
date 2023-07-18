<script setup></script>

<template>
  <form>
    <p>
      <label>
        <span>Email</span><br />
        <input type="text" v-model="email" />
      </label>
    </p>
    <p>
      <label>
        <span>Password</span><br />
        <input type="text" v-model="password" />
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
      email: "",
      password: "",
    };
  },
  methods: {
    submit() {
      debugger
      this.$emit("submit", {
        email: this.email,
        password: this.password,
      });
    },
  },
};
</script>
