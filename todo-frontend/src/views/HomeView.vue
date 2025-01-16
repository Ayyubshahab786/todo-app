<template>
  <div class="p-8 ">
    <div class="md:w-3/4 sm:w-full mx-auto">
    <h1 class="text-2xl font-bold mb-4 text-center">Todo App</h1>

      <TaskForm @submit="handleSubmit" :task="selectedTask" :isEditing="isEditing" />
    </div>
    <TaskList :tasks="tasks" @edit="handleEdit" @delete="handleDelete" customClass="my-8" />  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import { useTaskStore } from '../stores/taskStore';
import TaskForm from '../components/TaskForm.vue';
import TaskList from '../components/TaskList.vue';


const taskStore = useTaskStore();
const tasks = ref([]);
const selectedTask = ref({ task: '', description: '' });
const isEditing = ref(false);

onMounted(async () => {
  await taskStore.fetchTasks();
  tasks.value = taskStore.tasks;
});

const handleSubmit = async (task) => {
  if (isEditing.value) {
    await taskStore.updateTask({ ...task, id: selectedTask.value.id });
    isEditing.value = false;
  } else {
    await taskStore.addTask(task);
  }
  tasks.value = taskStore.tasks;
};

const handleEdit = (task) => {
  selectedTask.value = task;
  isEditing.value = true;
};

const handleDelete = async (id) => {
  await taskStore.deleteTask(id);
  tasks.value = taskStore.tasks;
};
</script>
