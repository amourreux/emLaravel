<template>
  <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4">
    <Box v-for="listing in listings" :key="listing.id">
      <Link :href="route('listing.show', listing.id)">
        <ListingAddress :listing="listing" />>
      </Link>
      <Link :href="route('listing.edit', listing.id)">Edit</Link>
      <Link :href="route('listing.destroy', listing.id)" method="DELETE" as="button">Delete</Link>
    </Box>
  </div>
</template>
  
<script setup>
import { Link } from '@inertiajs/inertia-vue3'
import ListingAddress from '@/Components/ListingAddress.vue'
import Box from '@/Layouts/UI/Box.vue'

defineProps({
  listings: Array,
})
</script>