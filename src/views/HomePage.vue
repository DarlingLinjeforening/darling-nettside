

<template>
<h1 class="text-3xl flex justify-center">Homepage</h1>
<HeroSectionComp/>
<StudyProgramsComp/>

</template>
<script>

import HeroSectionComp from '../components/HeroSectionComp.vue';
   
import StudyProgramsComp from '../components/StudyProgramsComp.vue';
    export default {
        components: {StudyProgramsComp, HeroSectionComp}
    }
</script>