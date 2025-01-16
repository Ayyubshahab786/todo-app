import { defineStore } from 'pinia';
import axios from 'axios';
import { BASE_URL } from '../helper/helper';
import { useToast } from 'vue-toast-notification';

export const useTaskStore = defineStore('task', {
  state: () => ({
    tasks: [],
  }),
  actions: {
    async fetchTasks() {
      const toast = useToast();
      try {
        const response = await axios.get(`${BASE_URL}/tasks`);
        this.tasks = response.data;
        toast.success(response?.data?.message || 'Tasks fetched successfully!')
      } catch (error) {
        toast.error(error?.response?.data?.message || 'Failed to fetch tasks.')
      }
    },
    async addTask(task) {
      const toast = useToast();
      try {
        const response = await axios.post(`${BASE_URL}/tasks`, task);
        this.tasks.push(response.data);
        toast.success(response?.data?.message ||'Task added successfully!');
      } catch (error) {

        toast.error(error?.response?.data?.message || 'Failed to add task');
      }
    },
    async updateTask(updatedTask) {
      const toast = useToast();
      try {
        const response = await axios.put(`${BASE_URL}/tasks/${updatedTask.id}`, updatedTask);
        const index = this.tasks.findIndex(task => task.id === updatedTask.id);
        this.tasks.splice(index, 1, response.data);
        toast.success(response?.data?.message || 'Task updated successfully!')
      } catch (error) {
        toast.error(error?.response?.data?.message || 'Failed to update task.')
      }
    },
    async deleteTask(id) {
      const toast = useToast();
      try {
        const response = await axios.delete(`${BASE_URL}/tasks/${id}`);
        this.tasks = this.tasks.filter(task => task.id !== id);
        toast.success(response?.data?.message || 'Task deleted successfully!')
      } catch (error) {
        toast.error(error?.response?.data?.message || 'Failed to delete task.')
      }
    },
  },
});
