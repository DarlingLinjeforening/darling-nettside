

<template>
<div class="bg-gradient-to-tr from-darling-secondary-purple to-white via-darling-purple-light h-screen">
<!-- <div class="m-10"> -->
<HeaderComp h="1" text="This is Darling" width="10rem" />
<!-- </div> -->
<HeroSectionComp/>
<StudyProgramsComp/>
</div>
</template>
<script>

import HeroSectionComp from '../components/HeroSectionComp.vue';
   import HeaderComp from "../components/HeaderComp.vue";
import StudyProgramsComp from '../components/StudyProgramsComp.vue';
    export default {
        components: {StudyProgramsComp, HeroSectionComp, HeaderComp}
    }
</script>