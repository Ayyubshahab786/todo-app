<template>
  <form @submit.prevent="submitForm" class="space-y-4">
    <Input v-model="localTask.task" placeholder="Task" bgColor="gray-50"
    inputId="task" label="Task Title" show-label="true" customClassMainDiv="my-4" />
    <Textarea v-model="localTask.description" placeholder="Description" bgColor="gray-50" inputId="Description" label="Description" show-label="true" customClassMainDiv="my-4" />
    <Button type="submit" color="blue" :disabled="loading">
      <span v-if="loading">Loading...</span>
      <span v-else>{{ isEditing ? 'Update' : 'Save' }}</span>
    </Button>
  </form>
</template>

<script setup>
import { ref, watch } from 'vue';

import Input from './InputApp.vue';
import Textarea from './TextareaApp.vue';
import Button from './ButtonApp.vue';

const props = defineProps({
  task: {
    type: Object,
    default: () => ({ task: '', description: '' }),
  },
  isEditing: {
    type: Boolean,
    default: false,
  },
});

const emit = defineEmits(['submit']);
const localTask = ref({ task: '', description: '' });
const loading = ref(false);


watch(() => props.task, (newTask) => {
  localTask.value = { ...newTask };
}, { immediate: true });

const submitForm = async () => {
  loading.value = true;
  try {
    await emit('submit', localTask.value);
  } catch (error) {
    console.log(error)
  } finally {
    loading.value = false;
    localTask.value = { task: '', description: '' };
  }
};
</script>
