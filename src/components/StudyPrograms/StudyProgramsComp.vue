<template>
  <section>
    <HeaderComp h="2" text="Study Programs"/>

    <div class="flex flex-wrap gap-10">
      <StudyProgramComp v-for="studyProgram in studyPrograms"
      :studyProgram="studyProgram.name"
      :description="studyProgram.description"
      :studyProgramLink="studyProgram.studyProgramLink"
      />
    </div>
  </section>
</template>

<script>
  import StudyProgramComp from './StudyProgramComp.vue';
  import HeaderComp from '../HeaderComp.vue';


  export default {
    components: {
      StudyProgramComp, 
      HeaderComp

    },
    data() {
      return {
        studyPrograms: [],
      };
    },
    mounted() {
      this.$sanityClient.fetch('*[_type == "studyPrograms"]{name, description, studyProgramLink}').then((data) => {
        console.log(data)
        this.studyPrograms = data;
      });
    },  
    }
</script>
