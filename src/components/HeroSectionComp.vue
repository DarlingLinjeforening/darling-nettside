<template>
    <div class="lg:flex lg:flex-row lg:justify-between lg:h-[90vh]">
    <div class="flex justify-center flex-col lg:max-w-[40%] lg:h-[30%]">
    <p class="pl-5 pr-5 pb-3 flex justify-center">The student organization representing the design courses at NTNU Gjøvik. Whether you're a graphic designer, interaction designer, web developer, or simply just passionate about design, Darling is your gateway to success.</p>
    <hero-section-button-comp-vue></hero-section-button-comp-vue>
    </div>
<div class="w-full flex justify-center items-center flex-col gap-5 p-5 relative lg:h-[100%]">
    
  <img class="lg:absolute lg:top-0 lg:w-80 lg:ml-10 lg:z-10 lg:mt-[150px] lg:border xl:min-w-[250px] xl:mt-[180px]" src="/images/hell.jpg" alt="hellstrøm">
  <img class="lg:absolute lg:top-0 z-0 lg:w-80 lg:border xl:min-w-[300px]" src="/images/petter.jpg" alt="petter">
  <img class="lg:absolute lg:top-0 lg:ml-80 lg:z-10 lg:w-72 lg:mt-32 lg:border xl:min-w-[120px] xl:ml-[450px] xl:mt-[100px]" src="/images/e40.png" alt="e40">
</div>


    </div>
</template>

<script>
import HeroSectionButtonCompVue from './HeroSectionButtonComp.vue'

    export default {
        components: { HeroSectionButtonCompVue}
    }
</script>