<template>
  <button
    :type="props.type"
    :class="`text-white bg-${props.color}-700 hover:bg-${props.color}-800 focus:ring-4 focus:outline-none focus:ring-${props.color}-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-${props.color}-600 dark:hover:bg-${props.color}-700 dark:focus:ring-${props.color}-800`"
  >
    <slot></slot>
  </button>
</template>

<script setup>

const props = defineProps({
  type: {
    type: String,
    default: 'button',
  },
  color: {
    type: String,
    default: 'blue', 
  },
});
</script>
