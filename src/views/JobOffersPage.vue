<template>
  <SpacingComp>
    <!-- <section class="md:max-w-[75%] md:my-0 md:mx-auto"> -->
    <HeaderComp text="Job Offers" h="1" width="10em" />
    <JobsComp />
    <!-- </section> -->
  </SpacingComp>
</template>

<script>
import JobsComp from "../components/JobOffers/JobsComp.vue";
import HeaderComp from "../components/HeaderComp.vue";
import SpacingComp from "../components/SpacingComp.vue";

export default {
  components: { JobsComp, HeaderComp, SpacingComp },
};
</script>
