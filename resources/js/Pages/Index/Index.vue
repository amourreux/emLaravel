<template>
  <div>
    hello world
  </div>
  <Link href="/show">
    {{ message }}
  </Link>
</template>

<script setup>
import { Link } from '@inertiajs/inertia-vue3'

defineProps({
  message: String,
})
</script>


<script>

import MainLayout from '../../Layouts/MainLayout.vue'
export default {
  layout: MainLayout,
}

</script>