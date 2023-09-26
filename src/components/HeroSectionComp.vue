<template>
    <div class="flex justify-center flex-col">
    <p class="p-5 flex justify-center">The student organization representing the design courses at NTNU Gjøvik. Whether you're a graphic designer, interaction designer, web developer, or simply just passionate about design, Darling is your gateway to success.</p>
    <hero-section-button-comp-vue></hero-section-button-comp-vue>
    </div>
</template>

<script>
import HeroSectionButtonCompVue from './HeroSectionButtonComp.vue'

    export default {
        components: { HeroSectionButtonCompVue}
    }
</script>