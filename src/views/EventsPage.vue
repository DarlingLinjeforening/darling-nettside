<template>
    <section>
      <div class="m-3">
        <HeaderComp text="Upcoming Events" h="1" width="18em"/>
      </div>
        <EventsComp />
    </section>
</template>

<script>
import EventsComp from "../components/Events/EventsComp.vue";
import HeaderComp from "../components/HeaderComp.vue";
export default {
  components: {
    EventsComp,
    HeaderComp,
  },
};
</script>
