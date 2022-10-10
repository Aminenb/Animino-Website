<script >
   import AppLayout from '@/Layouts/AppLayout.vue';
   import {Head,Link,useForm} from "@inertiajs/inertia-vue3";

   export default {
      components:{
         AppLayout, Head, Link
      },
      props: {
        errors:Object
      },
      setup(){
          const form = useForm({
      name: '',
      content: '',
      url: ''
    })
    return {form}
      }
   }
    


</script>
<template>
   <AppLayout title="Dashboard">
      <template #header>
         <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashboard
         </h2>
      </template>
      <div class="py-12">
         <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
           
            <div class="flex flex-col">
               
                 <div class="mt-5 md:mt-0 md:col-span-2">
                <form @submit.prevent="form.post(route('projects.store'))">
                    <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">
                   
                            <label for="name" class="block font-medium text-sm text-gray-700">name</label>
                            <input type="text" name="name" id="name"  class="form-input rounded-md shadow-sm mt-1 block w-full" v-model="form.name" />
                             <div v-if="errors.name" class="text-red-600">
           {{errors.name}}
       </div>
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="content" class="block font-medium text-sm text-gray-700">content</label>
                            <input type="text" name="content" id="content" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   v-model="form.content"/>
                              <div v-if="errors.content" class="text-red-600">
           {{errors.content}}
       </div>
                            
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="url" class="block font-medium text-sm text-gray-700">Url</label>
                            <input type="text" name="url" id="url"  class="form-input rounded-md shadow-sm mt-1 block w-full"
                                  v-model="form.url" />
                            <div v-if="errors.url" class="text-red-600">
           {{errors.url}}
       </div>
                        </div>
                       

                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            
                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                Submit
                            </button>
                              <div>
                    <Link :href="route('projects.index')" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded"> cancel</Link>
                </div>

                        </div>
                    </div>
                </form>
            </div>
            </div>
         </div>
      </div>
   </AppLayout>
</template>