<template>
  <div class="min-h-screen">
    <aside
      class="md:bg-darling-purple-light md:w-25 md:min-h-[110vh] md:right-0 md:absolute -z-10"
    ></aside>
    <ContactSpacingComp>
      <div class="w-[90%] lg:text-xl max-w-[100%]">
        <HeaderComp h="1" text="Contact us" width="12rem" left="2rem" />
        <p class="flex justify-center md:justify-start md:w-1/2">
          You can contact us by visiting us or sending an email
          with the form below.
        </p>
      </div>
        <aside
          class="md:bg-darling-purple-light md:w-25 md:min-h-full md:right-0 md:absolute -z-10"
        ></aside>
      <div
        class="flex items-center flex-col my-5 w-full md:flex-row-reverse lg:justify-between lg:items-start md:min-h-fit md:gap-[5vw] lg:gap-[10vw] md:z-10 md:relative xl:gap-[25vw]"
      >
        <ContactInfoComp />

        <ContactFormComp />
      </div>
    </ContactSpacingComp>

  </div>
</template>

<script>
import ContactFormComp from "../components/Contact/ContactFormComp.vue";
import ContactInfoComp from "../components/Contact/ContactInfoComp.vue";
import HeaderComp from '../components/HeaderComp.vue';
import LightBackgroundCompVue from "../components/LightBackgroundComp.vue";
import ContactSpacingComp from "../components/Contact/ContactSpacingComp.vue";

export default {
  components: {
    ContactFormComp,
    ContactInfoComp,
    LightBackgroundCompVue,
    ContactSpacingComp,
    HeaderComp,
  },

};
</script>