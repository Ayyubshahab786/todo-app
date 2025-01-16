<template>
    <label v-if="props.showLabel" :for="props.labelFor" class="text-sm font-medium text-gray-700">
      {{ label }}
    </label>
  </template>

  <script setup>
  const props = defineProps({
    label: String,
    showLabel: {
      type: Boolean,
      default: false,
    },
    labelFor: String,
  });
  </script>
