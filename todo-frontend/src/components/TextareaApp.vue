<template>
  <div :class="`${props.customClassMainDiv}`">
    <Label
      v-if="props.showLabel"
      :label="props.label"
      :showLabel="props.showLabel"
      :labelFor="props.inputId"
    />
    <textarea
      :value="props.modelValue"
      rows="4"
      :id="props.inputId"
      @input="$emit('update:modelValue', $event.target.value)"
      :placeholder="placeholder"
      :class="`block p-2.5 w-full text-sm text-gray-900 bg-${props.bgColor} rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500`"
    ></textarea>
  </div>
</template>

<script setup>
import Label from './labelApp.vue'
const props = defineProps({
  modelValue: String,
  placeholder: String,
  inputId: String,
  customClassMainDiv: String,
  bgColor: {
    type: String,
    default: 'gray-50',
  },
  label: String,
  showLabel: {
    type: Boolean,
    default: false,
  },
})

defineEmits(['update:modelValue'])
</script>
