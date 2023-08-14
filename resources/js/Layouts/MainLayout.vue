<template>
    <Link href="/">Main Page</Link>
    <Link href="/show">Show Page</Link>
    <div>
        the page with time {{ timer.value }}
    </div>

    <slot>Default</slot>
</template>

<script setup>
import {Link} from '@inertiajs/inertia-vue3';
import {ref} from 'vue';

const timer = ref({value: 0});
setInterval( () => timer.value.value++, 1000 )
</script>