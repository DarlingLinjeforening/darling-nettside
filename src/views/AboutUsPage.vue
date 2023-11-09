<template>
  <SpacingComp>
    <HeaderComp h="1" text="Our Board Members" width="17rem" left="5rem" />
    <HeadshotsComp />
    <faq-comp />
    <lounge-comp />
  </SpacingComp>
</template>

<script>
import EventsComp from "../components/Events/EventsComp.vue";
import FaqComp from "../components/Faq/FaqComp.vue";
import HeadshotComp from "../components/HeadshotComp.vue";
import LoungeComp from "../components/LoungeComp.vue";
import HeadshotsComp from "../components/HeadshotsComp.vue";
import HeaderComp from "../components/HeaderComp.vue";
import SpacingComp from "../components/SpacingComp.vue";

export default {
  components: {
    HeadshotComp,
    FaqComp,
    LoungeComp,
    EventsComp,
    HeadshotsComp,
    HeaderComp,
    SpacingComp,
  },
};
</script>
