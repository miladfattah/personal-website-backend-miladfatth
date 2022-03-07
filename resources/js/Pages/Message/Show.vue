<template>
    <app-layout :title="' پیغام '+ message.username">
        <template #header>
            <h2 class="mt-6 mr-4 font-semibold text-xl text-gray-800 leading-tight">
                {{' پیغام '+ message.username }}
            </h2>
        </template>

        <div>
            <div class="w-full  ">
                <div>
                    <div class="p-6">
                        <div class="mt-5 md:mt-0 ">
                            {{message.message}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout.vue'

    export default {
        props : {
            message :{}
        }, 
        components : {
            AppLayout,
        },
     
    }
   
</script>
