<script >
   import AppLayout from '@/Layouts/AppLayout.vue';
   import { Inertia } from '@inertiajs/inertia';
   import {Head,Link,useForm} from "@inertiajs/inertia-vue3";

   export default{
      components: {
         AppLayout, Head, Link
      },
      props:{
         project: Object,
         errors: Object
      },
      setup(props) {
         const form = useForm(props.project)
      return {form}

      }
   }
</script>
<template>
   <AppLayout title="Dashboard">
      <template #header>
         <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit
         </h2>
      </template>
      <div class="py-12">
         <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="block mb-8">
              
               <!-- a href="{{ route('projects.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Add Project</!-->
            </div>
            <div class="flex flex-col">
               
                 <div class="mt-5 md:mt-0 md:col-span-2">
                <form @submit.prevent="form.put(route('projects.update',form.id))">
                    <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">
                   
                            <label for="name" class="block font-medium text-sm text-gray-700">name</label>
                            <input v-model="form.name" type="text" name="name" id="name"  class="form-input rounded-md shadow-sm mt-1 block w-full" 
                             />
                             <div v-if="errors.name" class="text-red-600">
           {{errors.name}}
       </div>
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="content" class="block font-medium text-sm text-gray-700">content</label>
                            <input v-model="form.content" type="text" name="content" id="content" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   />
                                   <div v-if="errors.content" class="text-red-600">
           {{errors.content}}
       </div>
                            
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="url" class="block font-medium text-sm text-gray-700">Url</label>
                            <input  v-model="form.url" type="text" name="url" id="url"  class="form-input rounded-md shadow-sm mt-1 block w-full"
                                  />
                                  <div v-if="errors.url" class="text-red-600">
           {{errors.url}}
       </div>
                        </div>
                       

                       <button type="submit" :disabled="form.processing" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    <div>
                    <Link :href="route('projects.index')" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded"> cancel</Link>
                </div>
                    </div>
                </form>
            </div>
            </div>
         </div>
      </div>
   </AppLayout>
</template>