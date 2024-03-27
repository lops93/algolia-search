<template>
  <nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8"></div>
    <div class="flex h-16 items-center justify-between">
      <div class="flex items-center">
        <div class="flex-shrink-0"></div>
      </div>
    </div>
  </nav>
  <header class="bg-white shadow">
    <div class="p-2 px-8 flex flex-wrap items-center">
      <h1 class="text-3xl font-bold tracking-tight text-gray-900">Dashboard</h1>
    </div>
  </header>
  <main>
    <div class="p-1 justify-center sm:px-6 lg:px-8">
      <collaborator-card />
    </div>
  </main>
</template>

<script>
import CollaboratorCard from "../collaborator/CollaboratorCard.vue";
export default {
  components: { CollaboratorCard },
};
</script>

<style lang="scss" scoped>
</style>