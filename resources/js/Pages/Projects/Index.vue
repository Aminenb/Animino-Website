<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";
import { Inertia } from "@inertiajs/inertia";

export default {
  components: {
    AppLayout,
    Head,
    Link,
  },
  props: {
    projects: Object,
  },
  setup() {
    const destroy = (id) => {
      if (confirm("Are you sunre")) {
        Inertia.delete(route("projects.destroy", id));
      }
    };
    return { destroy };
  },
};
</script>

<template>
  <AppLayout title="Dashboard">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div v-if="$page.props.flash.message" class="shrink-0 flex items-center">
          {{ $page.props.flash.message }}
        </div>
        <br />
        <div>
          <Link
            :href="route('projects.create')"
            class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded"
          >
            Create</Link
          >
        </div>
        <br />

        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
          <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
              <thead
                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400"
              >
                <tr>
                  <th scope="col" class="py-3 px-6">Project name</th>
                  <th scope="col" class="py-3 px-6">Content</th>
                  <th scope="col" class="py-3 px-6">Url</th>

                  <th scope="col" class="py-3 px-6">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr
                  v-for="project in projects"
                  :key="project.id"
                  class="bg-white border-b dark:bg-gray-900 dark:border-gray-700"
                >
                  <td class="py-4 px-6">
                    {{ project.name }}
                  </td>
                  <td class="py-4 px-6">
                    {{ project.content }}
                  </td>
                  <td class="py-4 px-6">
                    {{ project.url }}
                  </td>

                  <td>
                    <Link
                      :href="route('projects.edit', project.id)"
                      class="font-medium editprojectbtn text-blue-600 dark:text-blue-500 hover:underline"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="w-6 h-6"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10"
                        />
                      </svg>
                    </Link>
                    <button
                                            @click="destroy(project.id)"
                                            type="button"
                                            class="font-medium deleteprojectbtn text-blue-600 dark:text-blue-500 hover:underline mr-2"
                                        >
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" style="color:red">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                          </svg>
                                        </button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </AppLayout>
</template>
<style scoped>
.deleteprojectbtn, .editprojectbtn{
    display:inline-block;
}
.deleteprojectbtn{
    margin-left: 14px;
}
.editprojectbtn{
    margin-left: 16px;
}
</style>
