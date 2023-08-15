<template>
  <Link href="/">Main Page</Link>
  <Link href="/show">Show Page</Link>
  <Link href="/listing">Listings Page</Link>
  <Link href="/listing/create">Create a Listing</Link>
  <div>
    the page with time {{ timer }}
  </div>
  <div v-if="flashSuccess" class="success">
    {{ flashSuccess }}
  </div>
  <slot>Default</slot>
</template>

<script setup>
import {Link, usePage} from '@inertiajs/inertia-vue3'
import {ref, computed} from 'vue'

const page = usePage()

const timer = ref(0)
setInterval( () => timer.value++, 1000 )

const flashSuccess = computed( 
  () => page.props.value.flash.success,
)
</script>

<style scoped>
.success{
  background-color: green;
  color: white;
}
</style>