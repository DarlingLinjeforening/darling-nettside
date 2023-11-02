<template>
  <div class="min-h-screen">
  <div class="w-full lg:text-xl ">
    <aside class="md:bg-darling-purple-light md:w-25 md:min-h-full md:right-0 md:absolute z-0"></aside>
    <div class="p-5">
      <HeaderComp h="1" text="This is Darling" width="10rem" />
    </div>
    <p class="flex justify-center p-5 md:justify-start md:w-1/2">
      You can contact us by visiting us, calling us, or sending an email with
      the form below
    </p>
  </div>
  <div
    class="flex items-center flex-col pr-5 pl-5 mt-5 mb-5 w-full md:flex-row-reverse md:justify-between md:items-start md:min-h-fit md:z-10 md:relative"
  >
      <aside class="md:bg-darling-purple-light md:w-25 md:min-h-full md:right-0 md:absolute -z-10 "></aside>
      <ContactInfoComp />
    
    <ContactFormComp />
  </div>
  </div>
</template>

<script>
import ContactFormComp from "../components/Contact/ContactFormComp.vue";
import ContactInfoComp from "../components/Contact/ContactInfoComp.vue";
import HeaderComp from '../components/HeaderComp.vue';
import LightBackgroundCompVue from "../components/LightBackgroundComp.vue";
export default {
  components: { ContactFormComp, ContactInfoComp, LightBackgroundCompVue, HeaderComp },
};
</script>
