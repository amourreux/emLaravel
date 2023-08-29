<template>
  <span>{{ formattedPrice }}</span>
</template>
  
<script setup>
import {computed} from 'vue'
const props = defineProps({
  price: [Number, String],
})
const formattedPrice = computed(
  () => Number(props.price).toLocaleString('tr-TR', {
    style: 'currency',
    currency: 'try',
    maximumFractionDigits: 0,
  }),
)
</script>