<template>
    <div class="overflow-x-auto">
      <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
          <tr>
            <th v-for="heading in headings" :key="heading" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
              {{ heading }}
            </th>
          </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
          <slot></slot>
        </tbody>
      </table>
    </div>
</template>

<script setup>
defineProps({
    headings: {
        type: Array,
        required: true,
    },
});
</script>