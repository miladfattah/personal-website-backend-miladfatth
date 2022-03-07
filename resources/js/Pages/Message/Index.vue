<template>
    <app-layout title="پیفام ها">
        <template #header>
            <h2 class="mt-6 mr-4 font-semibold text-xl text-gray-800 leading-tight">
                 پیفام ها
            </h2>
        </template>

        <div>
            <div class="w-full ">
                <Table>
                    <template #head>
                        <tr>
                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                فرستنده
                            </th>
                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                               ایمیل 
                            </th>
                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                تلفن
                            </th>
                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                پیغام
                            </th>
                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                تاریخ     
                            </th>
                        </tr>
                    </template>

                    <template #body>
                        <tr v-for="(message , index) in messages "  :key="index">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex justify-center">
                                    {{message.username}}
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex justify-center">
                                    {{message.email}}
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex justify-center">
                                    {{message.phone}}
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                    <Link 
                                        :href="route('messages.show' , message.id)"
                                        class="text-md"
                                        > مشاهده
                                    </Link>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                <div class="flex justify-center" dir="ltr">
                                      {{message.created_at}}
                                </div>
                            </td>
                         
                        </tr>
                    </template>
                </Table>
            </div>
        </div>

    </app-layout>
</template>

<script setup>
    import { defineComponent , defineProps } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'
    import JetSectionBorder from '@/Jetstream/SectionBorder.vue'
    import Table from '@/Components/Table.vue'
    import {Link} from '@inertiajs/inertia-vue3'
    
    const props = defineProps({
        messages : {
          
        }
    })
</script>
