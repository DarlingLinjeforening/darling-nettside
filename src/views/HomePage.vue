

<template>
<div class="bg-gradient-to-tr from-darling-secondary-purple to-white via-darling-purple-light min-h-screen">
<div class="p-5">
<HeaderComp h="1" text="This is Darling" width="10rem" />
</div>
<HeroSectionComp/>
<StudyProgramsComp/>
<div>
<h1>halla</h1>
<p>deubhebyfyebfuewbufbuebufbe</p>
</div>
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