<template>
    <app-layout title="مقالات">
        <template #header>
            <h2 class="mt-6 mr-4 font-semibold text-xl text-gray-800 leading-tight">
                 مقالات
            </h2>
        </template>

        <div>
            <div class="w-full ">
                <Table>
                    <template #head>
                        <tr>
                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                اسم مقاله
                            </th>
                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                عکس مقاله
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
                        <tr v-for="(article , index) in articles.data "  :key="index">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex justify-center">
                                    {{article.title}}
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex justify-center">
                                    <img class="h-10 w-10 rounded-full" :src="article.image" alt="" />
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex justify-center" v-html="article.small_description">
                                    
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                <div class="flex justify-center" dir="ltr">
                                    {{article.created_at_for_human}}
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <div class="flex justify-around">
                                    <Link :href="route('articles.edit' , article.id )" class="text-indigo-600 hover:text-indigo-900">ویرایش</Link>
                                    <Link :href="route('articles.destroy' , article.id)" method="delete" as="button" type="button"  class="text-red-600 hover:text-red-900">حذف</Link>
                                </div>
                            </td>
                        </tr>
                    </template>
                </Table>
                <div class="w-full flex justify-end">
                    <Link 
                        :href="route('articles.create')"
                        class="text-md px-4 py-2 rounded bg-green-600 text-white"
                        >مقاله جدید
                    </Link>
                </div>
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
        articles : {
            type : Object , 
        }
    })
</script>
