<template>
    <app-layout :title=" edit ? 'ویرایش رزومه' : 'ایجاد رزومه' ">
        <template #header>
            <h2 class="mt-6 mr-4 font-semibold text-xl text-gray-800 leading-tight">
                 ایجاد رزومه
            </h2>
        </template>

        <div>
            <div class="w-full ">
                <div>
                    <div class="p-6">
                        <div class="mt-5 md:mt-0 ">
                            <form @submit.prevent="saveCv">
                                <div class="shadow sm:rounded-md sm:overflow-hidden">
                                    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                        <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
                                            <div>
                                                <label for="title" class="block text-sm font-medium text-gray-700">
                                                    عنوان
                                                </label>
                                                <div class="mt-1 flex rounded-md shadow-sm">
                                                    <input v-model="form.title" type="text" name="title" id="title" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded sm:text-sm border-gray-300" placeholder="عنوان مقاله" />
                                                </div>
                                            </div>

                                            <div>
                                                <label for="slug" class="block text-sm font-medium text-gray-700">
                                                    اسلاگ
                                                </label>
                                                <div class="mt-1 flex rounded-md shadow-sm">
                                                    <input v-model="form.slug" type="text" name="slug" id="slug" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded sm:text-sm border-gray-300" placeholder="اسلاگ" />
                                                </div>
                                            </div>

                                            <div>
                                                <label for="url" class="block text-sm font-medium text-gray-700">
                                                    آدرس سایت
                                                </label>
                                                <div class="mt-1 flex rounded-md shadow-sm">
                                                    <input v-model="form.url" type="text" name="url" id="url" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded sm:text-sm border-gray-300" placeholder="آدرس سایت رزومه" />
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <label for="about" class="block text-sm font-medium text-gray-700">
                                            متن رزومه
                                            </label>
                                            <div class="mt-1 flex rounded-md shadow-sm">
                                                <textarea v-model="form.description" name="description" id="about" rows="3" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded sm:text-sm border-gray-300" ></textarea>
                                            </div>
                                        </div>

                                        <Image 
                                            :image-url="imageUrl" 
                                            label="عکس رزومه"  
                                            @image="form.image = $event" 
                                            imageClass="h-[200px] w-[400px] object-cover"
                                            :row="false"
                                        />
                                    </div>
                                    <div class=" w-full flex justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                                            <jet-action-message v-if="edit" :on="form.recentlySuccessful" class="mr-3">
                                                تغییر یافت
                                            </jet-action-message>
                                            <jet-action-message v-else :on="form.recentlySuccessful" class="mr-3">
                                                ذخیره شد . 
                                            </jet-action-message>

                                            <jet-button v-if="edit" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                                                تغییر
                                            </jet-button>
                                            <jet-button v-else :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                                                ذخیره
                                            </jet-button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout.vue'
    import JetSectionBorder from '@/Jetstream/SectionBorder.vue'
    import Table from '@/Components/Table.vue'
    import {Link} from '@inertiajs/inertia-vue3'
    import ClassicEditor from '@ckeditor/ckeditor5-build-classic'
    import Image from '@/Components/Image.vue'
    import JetButton from "@/Jetstream/Button"
    import JetActionMessage from '@/Jetstream/ActionMessage.vue'
    import { StrSlug } from '@/Helper'
    export default {
        props : {
            edit : Boolean ,
            cvs : Object 
        }, 
        components : {
            AppLayout,
            JetSectionBorder,
            JetButton ,
            JetActionMessage,
            Table,
            Link,
            ClassicEditor,
            Image
        },
        data(){
            return {
                imageUrl : "" , 
                form : this.$inertia.form({
                    "_method": this.edit ? 'PUT' : "",
                    title : '' , 
                    slug : '' , 
                    url : '' , 
                    description : this.edit ? this.cvs.data.description : "", 
                    image: null ,
                })
            }
        },
        watch : {
            "form.title"(title){
                if(this.edit) return ; 
                this.form.slug = StrSlug(title) ;
            }
        } ,
        methods : {
            saveCv(){
                this.edit 
                ? this.form.put(route('cvs.update' , { id : this.cvs.data.id }))
                : this.form.post(route('cvs.store'))
            }
        },  
        mounted(){

            if(this.edit){
                this.form.title = this.cvs.data.title ; 
                this.form.slug = this.cvs.data.slug ; 
                this.form.url = this.cvs.data.url ; 
            }

            this.imageUrl = this.cvs.data.image ; 
  
        },
        updated(){
            
        }
    }
   
</script>
