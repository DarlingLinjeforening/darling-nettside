<template>
  <div
    class="lg:flex lg:flex-row lg:justify-between lg:h-[90vh] lg:min-h-[700px] py-20 px-10 lg:py-0 gap-x-20 items-center"
  >
    <div class="flex justify-center h-full flex-col lg:max-w-[60%]">
      <div class="pl-5 pr-5 pb-3 flex flex-col lg:h-[60%]">
        <HeaderComp h="1" text="This is Darling" width="18em" />
        <p class="xl:text-xl max-w-[60ch] pb-3 pt-2">
          {{ i18n.hero.aboutText }}
        </p>
        <hero-section-button-comp-vue></hero-section-button-comp-vue>
      </div>
    </div>

    <div
      class="hidden lg:block lg:w-[70%] lg:justify-center lg:relative lg:p-10"
    >
      <img
        class="lg:absolute lg:aspect-[4/3] lg:w-[50%] lg:border-4 lg:border-darling-purple-light bottom-0 left-0"
        :src="urlFor(heroImages.image1)"
        alt="image1"
      />
      <img
        class="lg:absolute lg:z-10 lg:aspect-[4/3] lg:w-[50%] lg:border-4 lg:border-darling-purple-light right-[30px] bottom-[-70px]"
        :src="urlFor(heroImages.image2)"
        alt="image2"
      />
      <img
        class="lg:absolute lg:z-5 lg:aspect-[4/3] lg:w-[50%] lg:border-4 lg:border-darling-purple-light top-[0px] left-[50px]"
        :src="urlFor(heroImages.image3)"
        alt="image3"
      />
    </div>
  </div>
</template>

<script>
import HeroSectionButtonCompVue from "./HeroSectionButtonComp.vue";
import { builder } from "@/main";
import HeaderComp from "../components/HeaderComp.vue";
import { i18n } from "../i18n";

export default {
  components: { HeroSectionButtonCompVue, HeaderComp },
  data() {
    return {
      i18n,
      heroImages: {
        image1: null,
        image2: null,
        image3: null,
      },
    };
  },
  mounted() {
    this.$sanityClient
      .fetch(
        '*[_type == "heroImages"][0]{"image1": image1.asset._ref, "image2": image2.asset._ref, "image3": image3.asset._ref}'
      )
      .then((data) => {
        console.log(data);
        if (data) {
          this.heroImages.image1 = data.image1;
          this.heroImages.image2 = data.image2;
          this.heroImages.image3 = data.image3;
        }
      });
  },
  methods: {
    urlFor(source) {
      if (source) {
        return builder.image(source);
      }
      return null;
    },
  },
};
</script>
