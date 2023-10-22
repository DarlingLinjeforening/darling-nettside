<template>
  <SpacingComp>
    <HeaderComp text="Upcoming Events" h="1" width="18em" />
    <EventsComp />
  </SpacingComp>
</template>

<script>
import EventsComp from "../components/Events/EventsComp.vue";
import HeaderComp from "../components/HeaderComp.vue";
import SpacingComp from "../components/spacingcomp.vue";
export default {
  components: {
    EventsComp,
    HeaderComp,
    SpacingComp,
  },
};
</script>
