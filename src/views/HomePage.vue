<template>
  <div
    class="bg-gradient-to-tr from-darling-secondary-purple to-white via-darling-purple-light h-screen lg:min-h-screen lg:bg-gradient-to-tl lg:from-darling-secondary-purple lg:to-white-alt lg:via-darling-purple-light"
  >
    <div class="p-5">
      <HeaderComp h="1" text="This is Darling" width="10rem" />
    </div>
    <HeroSectionComp />
  </div>
  <!-- <SpacingComp> -->
    <div class="pt-2 pl-6">
      <HeaderComp h="2" text="Our study programs" width="17rem" />
    </div>
    <StudyProgramsComp />
  <!-- </SpacingComp> -->
</template>

<script>
import HeroSectionComp from "../components/HeroSectionComp.vue";
import HeaderComp from "../components/HeaderComp.vue";
import StudyProgramsComp from "../components/StudyPrograms/StudyProgramsComp.vue";
// import SpacingComp from "../components/SpacingComp.vue";
export default {
  components: { StudyProgramsComp, HeroSectionComp, HeaderComp },
};
</script>
