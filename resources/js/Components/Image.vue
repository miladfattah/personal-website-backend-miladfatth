<template>
    <div class="w-full">

            <input type="file"
                class="hidden"
                ref="photo"
                @change="updatePhotoPreview">

            <jet-label for="photo"
                    :value="label" />

            <!-- Current Profile Photo -->
            <div  :class="{'flex flex-row items-center' : row}">
                <div class="mt-2"
                    v-show="! photoPreview">
                <img :src="imageUrl"
                    :class="imageClass" >
                </div>

                <!-- New Profile Photo Preview -->
                <div class="mt-2"
                    v-show="photoPreview">
                    <div :class="imageClass"
                            :style="'background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(\'' + photoPreview + '\');'">
                    </div>
                </div>

                <jet-secondary-button class="mt-2 mr-2 sm:text-sm"
                                    type="button"
                                    @click.prevent="selectNewPhoto">
                    اضافه کردن عکس
                </jet-secondary-button>

            </div>
            <!-- <jet-input-error :message="errorMessage"
                            class="mt-2" /> -->
    </div>
</template>

<script>
import JetLabel from '@/Jetstream/Label.vue'
import JetSecondaryButton from '@/Jetstream/SecondaryButton.vue'

export default {
    components :  {
        JetLabel,
        JetSecondaryButton
    },
    data(){
        return {
            photoPreview : null 
        }
    },
    props : {
        imageUrl : {} , 
        label : {} , 
        errorMessage : {} ,
        imageClass :{},
        row : Boolean 
    },
    methods : {
        selectNewPhoto() {
            this.$refs.photo.click();
        },
        updatePhotoPreview() {
            const photo = this.$refs.photo.files[0];

            if (! photo) return;

            const reader = new FileReader();

            reader.onload = (e) => {
                this.photoPreview = e.target.result;
            };
            console.log('photo' , photo);
            reader.readAsDataURL(photo);
            this.$emit('image' ,photo);
        
        }
    }
}
</script>