<template>
  <div
    class="inset-0 -z-30 bg-gradient-to-tr from-darling-secondary-purple to-white via-darling-purple-light lg:min-h-[700px] lg:h-[95vh] lg:bg-gradient-to-br lg:from-white-alt lg:via-darling-purple-light lg:to-darling-secondary-purple"
  >
    <HeroSectionComp />
  </div>
  <SpacingComp>
    <div class="pt-2 pb-8 pl-6">
      <HeaderComp h="2" text="Our study programs" width="17rem" />
    </div>
    <StudyProgramsComp />
  </SpacingComp>
</template>

<script>
import HeroSectionComp from "../components/HeroSectionComp.vue";
import HeaderComp from "../components/HeaderComp.vue";
import StudyProgramsComp from "../components/StudyPrograms/StudyProgramsComp.vue";
import SpacingComp from "../components/SpacingComp.vue";
export default {
  components: { StudyProgramsComp, HeroSectionComp, HeaderComp, SpacingComp },
};
</script>
