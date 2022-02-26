<template>
    <jet-form-section @submitted="updateHomePage">

        <template #form>
         
            <!-- title -->
            <div class="col-span-6 ">
                <jet-label for="title" value="title" />
                <jet-input id="title" type="text" class="mt-1 block w-full" v-model="form.title" autocomplete="title" />
                <jet-input-error :message="form.errors.title" class="mt-2" />
            </div>
            <!-- sub_title -->
            <div class="col-span-6 ">
                <jet-label for="sub_title" value="sub_title" />
                <jet-input id="sub_title" type="text" class="mt-1 block w-full" v-model="form.sub_title" autocomplete="sub_title" />
                <jet-input-error :message="form.errors.sub_title" class="mt-2" />
            </div>
            <!-- description -->
            <div class="col-span-6 ">
                <jet-label for="description" value="description" />
                <jet-input id="description" type="text" class="mt-1 block w-full" v-model="form.description" autocomplete="description" />
                <jet-input-error :message="form.errors.description" class="mt-2" />
            </div>
            <!-- instagram_id -->
            <div class="col-span-6 ">
                <jet-label for="instagram_id" value="instagram_id" />
                <jet-input id="instagram_id" type="text" class="mt-1 block w-full" v-model="form.instagram_id" autocomplete="instagram_id" />
                <jet-input-error :message="form.errors.instagram_id" class="mt-2" />
            </div>
            <!-- twitter_id -->
            <div class="col-span-6 ">
                <jet-label for="twitter_id" value="twitter_id" />
                <jet-input id="twitter_id" type="text" class="mt-1 block w-full" v-model="form.twitter_id" autocomplete="twitter_id" />
                <jet-input-error :message="form.errors.twitter_id" class="mt-2" />
            </div>
            <!-- github_id -->
            <div class="col-span-6 ">
                <jet-label for="github_id" value="github_id" />
                <jet-input id="github_id" type="text" class="mt-1 block w-full" v-model="form.github_id" autocomplete="github_id" />
                <jet-input-error :message="form.errors.github_id" class="mt-2" />
            </div>
        </template>

        <template #actions>
            <jet-action-message :on="form.recentlySuccessful" class="mr-3">
                Saved.
            </jet-action-message>

            <jet-button :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                Save
            </jet-button>
        </template>
    </jet-form-section>
</template>

<script>
    import JetButton from '@/Jetstream/Button.vue'
    import JetFormSection from '@/Jetstream/FormSection.vue'
    import JetInput from '@/Jetstream/Input.vue'
    import JetInputError from '@/Jetstream/InputError.vue'
    import JetLabel from '@/Jetstream/Label.vue'
    import JetActionMessage from '@/Jetstream/ActionMessage.vue'
    import JetSecondaryButton from '@/Jetstream/SecondaryButton.vue'

    export default {
        components: {
            JetActionMessage,
            JetButton,
            JetFormSection,
            JetInput,
            JetInputError,
            JetLabel,
            JetSecondaryButton,
        },

        props: ['settings'],

        data() {
            return {
                form: this.$inertia.form({
                    title : this.settings.data.title,
                    sub_title : this.settings.data.sub_title,
                    description : this.settings.data.description,
                    instagram_id : this.settings.data.instagram_id,
                    twitter_id : this.settings.data.twitter_id,
                    github_id : this.settings.data.github_id,
                }),
            }
        },

        methods: {
            updateHomePage(){
                this.form.post(route('settings.save-home')  , {
                    preserveScroll : true 
                })
            }
        },
    }
</script>
