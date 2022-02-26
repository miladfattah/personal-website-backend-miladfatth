<template>
        <li class="text-white h-[42px] py-2 px-1 transition-all duration-300 rounded-md hover:bg-white hover:text-sidebar  ">
            <Link   :href="route(routeName)"
                    class="flex flex-row items-center w-full h-full "
            >
                <span>
                    <slot></slot>
                </span>
                <span class="font-bold text-lg mr-4 transition-all duration-300 whitespace-nowrap" :class="{'opacity-0' : !toggleSidebar}">{{name}}</span>
            </Link>
        </li>
</template>

<script setup>
    import {Link} from '@inertiajs/inertia-vue3'
    import {ref ,  defineProps } from 'vue' 


    console.log('route' , props.route);

    const props = defineProps({
        name : String , 
        routeName : String ,
        toggleSidebar : Boolean
    })
</script>