<template>
    <div class="font-[Vazir]">
        <Head :title="title" />


        <div class="flex flex-col md:flex-row min-h-screen bg-gray-100 w-full overflow-hidden  ">
      
            <Sidebar />

            <!-- Page Content -->
            <main class="flex-1">
                <div class="container mx-auto px-6">
                    <div class="py-4">
                        <slot name="header"></slot>
                    </div>
                     <slot></slot>
                </div>
            </main>
        </div>
    </div>
</template>

<script setup >
    import { defineComponent } from 'vue'
    import JetApplicationMark from '@/Jetstream/ApplicationMark.vue'
    import JetBanner from '@/Jetstream/Banner.vue'
    import JetDropdown from '@/Jetstream/Dropdown.vue'
    import JetDropdownLink from '@/Jetstream/DropdownLink.vue'
    import JetNavLink from '@/Jetstream/NavLink.vue'
    import JetResponsiveNavLink from '@/Jetstream/ResponsiveNavLink.vue'
    import Sidebar from '@/Components/Sidebar.vue'
    import { Head, Link } from '@inertiajs/inertia-vue3'
    import { ref , defineProps  } from 'vue'

    const props = defineProps({
        title: String,
    })
 
    const showingNavigationDropdown  = ref(false) ;
</script>
