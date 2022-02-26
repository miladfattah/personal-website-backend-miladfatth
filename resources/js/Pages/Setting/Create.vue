<template>
    <app-layout title="تنظیمات">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                تنظیمات
            </h2>
        </template>

        <div>
            <div class="w-full flex flex-col space-y-3 md:flex-row md:space-y-1 justify-around py-10">
                    <UpdateHome :settings="settings"/>
                    <UpdateContactData :settings="settings"/>
            </div>
        </div>

    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'
    import JetSectionBorder from '@/Jetstream/SectionBorder.vue'
    import UpdateHome from  '@/pages/setting/UpdateHome.vue' 
    import UpdateContactData from  '@/pages/setting/UpdateContactData.vue' 
    export default defineComponent({
        props: ['settings'],

        components: {
            AppLayout,
            JetSectionBorder,
            UpdateHome,
            UpdateContactData
        },
    })
</script>
