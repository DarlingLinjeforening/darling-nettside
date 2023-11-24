<template>
  <section>
    <!-- <h2>
      We represent students in these study programs at NTNU Gjøvik:
    </h2> -->
    <div class="flex justify-center flex-wrap gap-8">
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

  export default {
    components: {
      StudyProgramComp
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
