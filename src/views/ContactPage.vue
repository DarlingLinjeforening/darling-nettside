∑<template>
  <div class="min-h-screen">
    <aside
      class="md:bg-darling-purple-light md:w-25 md:min-h-[110vh] md:right-0 md:absolute -z-10"
    ></aside>
    <SpacingComp>
      <div class="w-full lg:text-xl">
        <HeaderComp h="1" text="Contact us" width="12rem" left="2rem" />
        <p class="flex justify-center md:justify-start md:w-1/2">
          You can contact us by visiting us, calling us, or sending an email
          with the form below
        </p>
      </div>
      <div
        class="flex items-center flex-col my-5 w-full md:flex-row-reverse md:justify-between md:items-start md:min-h-fit md:gap-[20vw] md:z-10 md:relative"
      >
        <!-- <aside
          class="md:bg-darling-purple-light md:w-25 md:min-h-full md:right-0 md:absolute -z-10"
        ></aside> -->
        <ContactInfoComp />

        <ContactFormComp />
      </div>
    </SpacingComp>

  </div>
</template>

<script>
import ContactFormComp from "../components/Contact/ContactFormComp.vue";
import ContactInfoComp from "../components/Contact/ContactInfoComp.vue";
import HeaderComp from '../components/HeaderComp.vue';
import LightBackgroundCompVue from "../components/LightBackgroundComp.vue";
import SpacingComp from "../components/SpacingComp.vue";

export default {
  components: {
    ContactFormComp,
    ContactInfoComp,
    LightBackgroundCompVue,
    SpacingComp,
    HeaderComp,
  },

};
</script>
