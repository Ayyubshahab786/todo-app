<template>
  <div :class="`${props.customClassMainDiv}`">
    <Label
      v-if="props.showLabel"
      :label="props.label"
      :showLabel="props.showLabel"
      :labelFor="props.inputId"
    />

    <input
      :value="props.modelValue"
      @input="$emit('update:modelValue', $event.target.value)"
      :placeholder="props.placeholder"
      :id="props.inputId"
      :autocomplete="props.autoComplete"
      :class="`bg-${props.bgColor} border border-${props.bgColor}-300 text-${props.bgColor}-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 `"
    />
  </div>
</template>

<script setup>
import Label from './labelApp.vue'

const props = defineProps({
  modelValue: String,
  customClassMainDiv: String,
  placeholder: String,
  inputId: String,
  autoComplete: {
    type: String,
    default: 'off',
  },
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
