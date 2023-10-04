<template>
  <div class="lg:flex lg:flex-row lg:justify-between lg:h-[90vh] ">
    <div class="flex justify-center flex-col lg:max-w-[40%] lg:h-[20%]">
      <p class="pl-5 pr-5 pb-3 flex justify-center xl:text-xl xl:max-w-[60ch]">
        The student organization representing the design courses at NTNU Gjøvik.
        Whether you're a graphic designer, interaction designer, web developer,
        or simply just passionate about design, Darling is your gateway to
        success.
      </p>
      <hero-section-button-comp-vue></hero-section-button-comp-vue>
    </div>
    <div
      class="hidden lg:w-full lg:flex lg:justify-center lg:items-center lg:right-0 flex-col gap-5 p-5 relative lg:h-[100%]"
    >
      <img
        class=" hidden lg:flex lg:absolute lg:top-0 lg:w-80 lg:ml-10 lg:z-10 lg:mt-[150px] lg:border-2 lg:border-darling-purple xl:min-w-[250px] xl:mt-[180px] 2xl:mt-[280px] 2xl:min-w-[500px]"
        src="/images/hell.jpg"
        alt="hellstrøm"
      />
      <img
        class=" hidden lg:flex lg:absolute lg:top-0 z-0 lg:w-80 lg:border-2 lg:border-darling-purple xl:min-w-[300px] 2xl:min-w-[500px]"
        src="/images/petter.jpg"
        alt="petter"
      />
      <img
        class="hidden lg:flex lg:absolute lg:top-0 lg:ml-[300px] lg:z-10 lg:w-72 lg:mt-[100px] lg:border-2 lg:border-darling-purple xl:min-w-[120px] xl:ml-[450px] xl:mt-[100px] 2xl:min-w-[400px] 2xl:ml-[620px]"
        src="/images/e40.png"
        alt="e40"
      />
    </div>
  </div>
</template>

<script>
import HeroSectionButtonCompVue from "./HeroSectionButtonComp.vue";

export default {
  components: { HeroSectionButtonCompVue },
};
</script>