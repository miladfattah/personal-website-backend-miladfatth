<template>
    <app-layout :title=" edit ? 'ویرایش مقاله' : 'ایجاد مقاله' ">
        <template #header>
            <h2 class="mt-6 mr-4 font-semibold text-xl text-gray-800 leading-tight">
                 مقالات
            </h2>
        </template>

        <div>
            <div class="w-full  ">
                <div>
                    <div class="p-6">
                        <div class="mt-5 md:mt-0 ">
                            <form @submit.prevent="saveArticle">
                                <div class="shadow sm:rounded-md sm:overflow-hidden">
                                    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                        <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                                            <div class="">
                                                <label for="title" class="block text-sm font-medium text-gray-700">
                                                    عنوان
                                                </label>
                                                <div class="mt-1 flex rounded-md shadow-sm">
                                                    <input v-model="form.title" type="text" name="title" id="title" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded sm:text-sm border-gray-300" placeholder="عنوان مقاله" />
                                                </div>
                                            </div>

                                            <div class="">
                                                <label for="slug" class="block text-sm font-medium text-gray-700">
                                                    اسلاگ
                                                </label>
                                                <div class="mt-1 flex rounded-md shadow-sm">
                                                    <input v-model="form.slug" type="text" name="slug" id="slug" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded sm:text-sm border-gray-300" placeholder="اسلاگ" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-1 gap-6 md:grid-cols-4">
                                            <div>
                                                <label for="user_name" class="block text-sm font-medium text-gray-700">
                                                    اسم نویسنده
                                                </label>
                                                <div class="mt-1 flex rounded-md shadow-sm">
                                                    <input v-model="form.user_name" type="text" name="user_name" id="user_name" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded sm:text-sm border-gray-300" placeholder="نام نویسنده " />
                                                </div>
                                            </div>

                                            <div>
                                                <label for="rank" class="block text-sm font-medium text-gray-700">
                                                    جایگاه نویسنده
                                                </label>
                                                <div class="mt-1 flex rounded-md shadow-sm">
                                                    <input v-model="form.rank" type="text" name="rank" id="rank" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded sm:text-sm border-gray-300" placeholder="جایگاه" />
                                                </div>
                                            </div>

                                            <div>
                                                <label for="read_time" class="block text-sm font-medium text-gray-700">
                                                    زمان خواندن
                                                </label>
                                                <div class="mt-1 flex rounded-md shadow-sm">
                                                    <input v-model="form.read_time" type="text" name="read_time" id="read_time" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded sm:text-sm border-gray-300" placeholder="زمان خواندن مقاله" />
                                                </div>
                                            </div>

                                            <div>
                                                <Image 
                                                    :image-url="avatarUrl" 
                                                    label="عکس نویسنده"  
                                                    imageClass="h-[30px] w-[30px] object-cover rounded-full"
                                                    @image="form.user_avatar = $event" 
                                                    :row="true"
                                                />
                                            </div>
                                        </div>
                                        <div>
                                            <label for="about" class="block text-sm font-medium text-gray-700">
                                            متن مقاله
                                            </label>
                                            <ckeditor :editor="editor" v-model="form.description" :config="editorConfig" ContentsLangDirection="Rtl"></ckeditor>
                                        </div>



                                        <Image 
                                            :image-url="imageUrl" 
                                            label="عکس مقاله"  
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
            articles : Object 
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
                avatarUrl : "" , 
                editor: ClassicEditor,
                editorData: '',
                editorConfig: {
                       language: {
                            // The UI will be English.
                            ui: 'ar',

                            // But the content will be edited in Arabic.
                            content: 'ar'
                        },
                        fontFamily: {
                            options: [
                                'default',
                                'Vazir, Arial, sans-serif',
                                'Ubuntu Mono, Courier New, Courier, monospace'
                            ]
                        },
                        fontSize: {
                            options: [
                                'tiny',
                                'default',
                                'big'
                            ]
                        },
                     
                },
                form : this.$inertia.form({
                    "_method": this.edit ? 'PUT' : "",
                    title : '' , 
                    slug : '' , 
                    user_name : '' , 
                    rank : '' , 
                    read_time : '' , 
                    description : this.edit ? this.articles.data.description : "", 
                    image:  null ,
                    user_avatar :  null ,
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
            saveArticle(){
               console.log('udpated' , this.form.image)
                this.edit 
                ? this.form.put(route('articles.update' , { id : this.articles.data.id }))
                : this.form.post(route('articles.store'))
            }
        },  
        mounted(){

            if(this.edit){
                this.form.title = this.articles.data.title ; 
                this.form.slug = this.articles.data.slug ; 
                this.form.user_name = this.articles.data.user_name ; 
                this.form.rank = this.articles.data.rank ; 
                this.form.read_time = this.articles.data.read_time ;  
              
            }

            this.imageUrl = this.articles.data.image ; 
            this.avatarUrl = this.articles.data.user_avatar ; 
  
        },
        updated(){
            
        }
    }
   
</script>
