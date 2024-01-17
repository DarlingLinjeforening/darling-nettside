<template>
  <SpacingComp>
    <HeaderComp h="1" text="Page not found!" />
    <h2 class="text-2xl font-bold">WOOPS!</h2>
    <p>Return <RouterLink class="underline" to="/">home</RouterLink>?</p>
  </SpacingComp>
</template>

<script>
import SpacingComp from "../components/SpacingComp.vue";
import HeaderComp from "../components/HeaderComp.vue";

export default {
  components: {
    SpacingComp,
    HeaderComp
  },
};
</script>
