<template>
  <div class="md:min-h-screen">
    <!-- <LightBackgroundCompVue /> -->
  <div class="w-full lg:text-xl">
    <h1 class="text-3xl font-bold flex justify-center md:justify-start md:p-5">
      Contact us
    </h1>
    <p class="flex justify-center p-5 md:justify-start md:w-1/2">
      You can contact us by visiting us, calling us, or sending an email with
      the form below
    </p>
  </div>
    <div class="">
      <aside class="md:bg-darling-purple-light md:w-25 md:absolute md:right-0 md:top-0 mt-16 md:min-h-screen">
  </aside>
    </div>
  <div
    class="flex items-center flex-col p-5 w-full md:flex-row-reverse md:justify-between md:items-start relative"
  >
    <ContactInfoComp />
    <ContactFormComp />
  </div>
  </div>
</template>

<script>
import ContactFormComp from "../components/ContactFormComp.vue";
import ContactInfoComp from "../components/ContactInfoComp.vue";
import LightBackgroundCompVue from "../components/LightBackgroundComp.vue";

export default {
  components: { ContactFormComp, ContactInfoComp, LightBackgroundCompVue },
};
</script>
