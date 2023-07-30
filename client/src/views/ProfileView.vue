<script setup>
</script>

<template>
  <div class="card card-plain mt-8">
    <div class="card-header pb-0 text-left bg-transparent">
      <h3 class="font-weight-bolder text-info text-gradient">Profile</h3>
      <p class="mb-0"></p>
    </div>
    <div class="card-body">
      <p v-for="(val, key) in user"><code>{{ key }}</code>{{ val }}</p>

      <div class="text-center">
        <button type="submit" @click="handleLogout" class="btn bg-gradient-info w-100 mt-4 mb-0">Sign out</button>
      </div>
    </div>
  </div>
</template>

<script>
import {mapActions, mapState} from "pinia"
import {useAuthStore} from "@/stores/auth"

export default {
  data() {
    return {}
  },
  computed: {
    ...mapState(useAuthStore, ["user"]),
  },
  methods: {
    ...mapActions(useAuthStore, ["logout"]),
    async handleLogout() {
      await this.logout();
      this.$router.push({ name: 'home' })
    }
  },
}
</script>
