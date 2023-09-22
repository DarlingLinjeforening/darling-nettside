<template>
  <section>
    <div class="m-10 ml-6">
      <HeaderComp h="1" text="Our members" width="10rem" />
    </div>
    <HeadshotsComp />
    <faq-comp />
    <lounge-comp />
  </section>
</template>

<script>
import EventsComp from '../components/Events/EventsComp.vue'
import FaqComp from "../components/Faq/FaqComp.vue";
import HeadshotComp from "../components/HeadshotComp.vue";
import LoungeComp from "../components/LoungeComp.vue";
import HeadshotsComp from "../components/HeadshotsComp.vue";
import HeaderComp from "../components/HeaderComp.vue";

export default {
  components: {
    HeadshotComp,
    FaqComp,
    LoungeComp,
    EventsComp,
    HeadshotsComp,
    HeaderComp,
  },
};
</script>
