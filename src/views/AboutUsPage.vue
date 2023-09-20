<template>
  <section>
    <div class="ml-3 mt-3">
      <HeaderComp h="1" text="About Us" width="10rem"/>
    </div>
    <LoungeComp />
    <FaqComp />
  </section>
</template>

<script>
import EventsComp from "../components/EventsComp.vue";
import FaqComp from "../components/Faq/FaqComp.vue";
import HeadshotComp from "../components/HeadshotComp.vue";
import LoungeComp from "../components/LoungeComp.vue";
import HeaderComp from "../components/HeaderComp.vue";
export default {
  components: { HeadshotComp, FaqComp, LoungeComp, EventsComp, HeaderComp },
};
</script>
