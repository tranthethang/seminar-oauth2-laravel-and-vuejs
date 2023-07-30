<template>
  <div class="card card-plain mt-8">
    <div class="card-header pb-0 text-left bg-transparent">
      <h3 class="font-weight-bolder text-info text-gradient">Welcome back</h3>
      <p class="mb-0">Enter your email and password to sign in</p>
    </div>
    <div class="card-body">
      <form role="form">
        <label>Email</label>
        <div class="mb-3">
          <input type="email"
                 class="form-control"
                 aria-label="Email"
                 aria-describedby="email-addon"
                 v-model="email"
                 placeholder="Email"
                 maxlength="32">
        </div>
        <label>Password</label>
        <div class="mb-3">
          <input type="email"
                 class="form-control"
                 aria-label="Password"
                 aria-describedby="password-addon"
                 v-model="password"
                 placeholder="Password"
                 maxlength="32">
        </div>
        <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" id="rememberMe" checked="">
          <label class="form-check-label" for="rememberMe">Remember me</label>
        </div>
        <div class="text-center">
          <button type="submit" @click="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Sign in</button>
        </div>
      </form>
    </div>
    <div class="card-footer text-center pt-0 px-lg-2 px-1">
      <p class="mb-4 text-sm mx-auto">
        Don't have an account?
        <a href="javascript:;" class="text-info text-gradient font-weight-bold">Sign up</a>
      </p>
    </div>
  </div>
</template>
<script setup>
</script>
<script>
import {useAuthStore} from "@/stores/auth"
import {mapActions, mapState} from "pinia";

export default {
  data() {
    return {
      email: "admin@example.com",
      password: "password",
    };
  },
  computed: {
    ...mapState(useAuthStore, ["user"]),
  },
  methods: {
    ...mapActions(useAuthStore, ["login", "fetchUser"]),
    async submit(e) {
      e.preventDefault();

      await this.login({
        email: this.email,
        password: this.password,
      })

      await this.fetchUser()

      this.$router.push({ name: 'profile' })
    },
  },
};
</script>