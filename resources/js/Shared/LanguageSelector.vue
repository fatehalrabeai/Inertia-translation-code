<template>
    <div class="ml-4">
        <inertia-link :href="route('language', [selectable_locale])">
            <icon class="w-5 h-5" :name="selectable_locale" />
        </inertia-link>
    </div>
</template>

<script>
import Icon from '@/Shared/Icon'
export default {
    name: "LanguageSelector",
    components: {
        Icon,
    },

    computed: {
        selectable_locale() {
            if(this.$page.locale == 'ar') {
                return 'en';
            }
            return 'ar'
        }
    },
}
</script>

<style scoped>

</style>
