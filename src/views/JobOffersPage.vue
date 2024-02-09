<template>
  <div class="min-h-screen">
    <SpacingComp>
      <HeaderComp text="Job Offers" h="1" width="10em" />
      <JobsComp />
    </SpacingComp>
  </div>
</template>

<script>
import JobsComp from "../components/JobOffers/JobsComp.vue";
import HeaderComp from "../components/HeaderComp.vue";
import SpacingComp from "../components/SpacingComp.vue";

export default {
  components: { JobsComp, HeaderComp, SpacingComp },
};
</script>
