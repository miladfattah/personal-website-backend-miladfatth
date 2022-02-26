<template>
    <app-layout title="رزومه ها">
        <template #header>
            <h2 class="mt-6 mr-4 font-semibold text-xl text-gray-800 leading-tight">
                 رزومه ها
            </h2>
        </template>

        <div>
            <div class="w-full ">
                <Table>
                    <template #head>
                        <tr>
                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                اسم رزومه
                            </th>
                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                عکس رزومه
                            </th>
                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                توضیحات 
                            </th>
                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                تاریخ
                            </th>
                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                اقدامات
                            </th>
                        </tr>
                    </template>

                    <template #body>
                        <tr v-for="(cv , index) in cvs.data "  :key="index">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex justify-center">
                                    {{cv.title}}
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex justify-center">
                                    <img class="h-10 w-10 rounded-full" :src="cv.image" alt="" />
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex justify-center" v-html="cv.small_description">
                                    
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                <div class="flex justify-center" dir="ltr">
                                    {{cv.created_at_for_human}}
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <div class="flex justify-around">
                                    <Link :href="route('cvs.edit' , cv.id )" class="text-indigo-600 hover:text-indigo-900">ویرایش</Link>
                                    <Link :href="route('cvs.destroy' , cv.id)" method="delete" as="button" type="button"  class="text-red-600 hover:text-red-900">حذف</Link>
                                </div>
                            </td>
                        </tr>
                    </template>
                </Table>
                <div class="w-full flex justify-end">
                    <Link 
                        :href="route('cvs.create')"
                        class="text-md px-4 py-2 mt-4 rounded bg-green-600 text-white"
                        >رزومه جدید
                    </Link>
                </div>
            </div>
        </div>

    </app-layout>
</template>

<script setup>
    import {  defineProps } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'
    import JetSectionBorder from '@/Jetstream/SectionBorder.vue'
    import Table from '@/Components/Table.vue'
    import {Link} from '@inertiajs/inertia-vue3'
    
    const props = defineProps({
        cvs : Object
    })
</script>
