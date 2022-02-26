<template>
    <jet-form-section @submitted="updateContactPage">

        <template #form>
            <!-- address -->
            <div class="col-span-6 ">
                <jet-label for="address" value="address" />
                <jet-input id="address" type="text" class="mt-1 block w-full" v-model="form.address" autocomplete="address" />
                <jet-input-error :message="form.errors.address" class="mt-2" />
            </div>
            <!-- phone -->
            <div class="col-span-6 ">
                <jet-label for="phone" value="phone" />
                <jet-input id="phone" type="text" class="mt-1 block w-full" v-model="form.phone" autocomplete="phone" />
                <jet-input-error :message="form.errors.phone" class="mt-2" />
            </div>
            <!-- email -->
            <div class="col-span-6 ">
                <jet-label for="email" value="email" />
                <jet-input id="email" type="text" class="mt-1 block w-full" v-model="form.email" autocomplete="email" />
                <jet-input-error :message="form.errors.email" class="mt-2" />
            </div>
            <!-- google_map_url -->
            <div class="col-span-6 ">
                <jet-label for="google_map_url" value="google_map_url" />
                <jet-input id="google_map_url" type="text" class="mt-1 block w-full" v-model="form.google_map_url" autocomplete="google_map_url" />
                <jet-input-error :message="form.errors.google_map_url" class="mt-2" />
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
                    address : this.settings.data.address,
                    phone : this.settings.data.phone,
                    email : this.settings.data.email,
                    google_map_url : this.settings.data.google_map_url,
                }),
            }
        },

        methods: {
            updateContactPage(){
                this.form.post(route('settings.save-contact')  , {
                    preserveScroll : true 
                })
            }
        },
}
</script>
