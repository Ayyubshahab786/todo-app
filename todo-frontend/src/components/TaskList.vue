<template>
  <Table :class="customClass" :headings="['Sr.', 'Task', 'Description', 'Actions']">
    <template v-for="(task, index) in paginatedTasks" :key="task.id">
      <tr class="hover:bg-gray-100">
        <td class="px-6 py-4 whitespace-nowrap">{{ ++index }}</td>
        <td class="px-6 py-4 whitespace-nowrap">{{ task.task }}</td>
        <td class="px-6 py-4 max-w-xs text-ellipsis">
          <p class="max-h-16 overflow-y-auto">
            {{ task.description }}
          </p>
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
          <ButtonApp @click="editTask(task)" color="blue">Edit</ButtonApp>
          <ButtonApp @click="deleteTask(task.id)" color="red" class="ml-2">Delete</ButtonApp>
        </td>
      </tr>
    </template>
  </Table>
  <div class="flex items-center justify-between mt-4">
    <button
      @click="prevPage"
      :disabled="currentPage === 1"
      class="px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-600 disabled:opacity-50"
    >
      Previous
    </button>
    <span class="text-lg">Page {{ currentPage }} of {{ totalPages }}</span>
    <button
      @click="nextPage"
      :disabled="currentPage >= totalPages"
      class="px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-600 disabled:opacity-50"
    >
      Next
    </button>
  </div>
</template>

<script setup>
import { ref, computed } from 'vue'
import { paginate } from '../helper/helper.js'
import ButtonApp from './ButtonApp.vue'
import Table from './TableApp.vue'

const props = defineProps({
  tasks: {
    type: Array,
    required: true,
  },
  customClass: {
    type: String,
    default: '',
  },
})

const emit = defineEmits(['edit', 'delete'])

const editTask = (task) => {
  emit('edit', task)
}

const deleteTask = (id) => {
  emit('delete', id)
}

const currentPage = ref(1)
const itemsPerPage = 20

const paginatedTasks = computed(() => {
  return paginate(props.tasks, currentPage.value, itemsPerPage)
})

const totalPages = computed(() => {
  return Math.ceil(props.tasks.length / itemsPerPage)
})

const nextPage = () => {
  if (currentPage.value < totalPages.value) {
    currentPage.value++
  }
}

const prevPage = () => {
  if (currentPage.value > 1) {
    currentPage.value--
  }
}
</script>
