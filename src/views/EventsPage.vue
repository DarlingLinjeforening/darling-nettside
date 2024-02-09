<template>
  <!-- <SpacingComp> -->
    <div class="py-20 md:px-8">
    <HeaderComp text="Upcoming Events" h="1" width="18em" />
    <EventsComp />
  </div>
  <!-- </SpacingComp> -->
</template>

<script>
import EventsComp from "../components/Events/EventsComp.vue";
import HeaderComp from "../components/HeaderComp.vue";
// import SpacingComp from "../components/SpacingComp.vue";
export default {
  components: {
    EventsComp,
    HeaderComp,
    // SpacingComp,
  },
};
</script>
