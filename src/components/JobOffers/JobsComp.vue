<template>
  <div>
    <JobComp 
      v-for="job in jobs"
      :key="job._id"
      :position="job.position"
      :companyName="job.companyName"
      :description="job.description"
      :deadline="job.deadline"
      :location="job.location"
      :jobType="job.jobType"
      :imgSrc="urlFor(job.imgSrc).url()"
    />
  </div>
</template>

<script>
  import { builder } from '@/main'
  import JobComp from './JobComp.vue'

  export default {
  components: {
    JobComp
  },
  data() {
    return {
      jobs: [],
    };
  },
  mounted() {
    this.$sanityClient.fetch('*[_type == "jobOffers"]{position, companyName, description, deadline, location, "jobType":jobType[0], "imgSrc":image.asset._ref}').then((data) => {
      console.log(data)
      this.jobs = data;
    });
  },
  methods: {
      urlFor(source) {
      return builder.image(source);
      },
  }    
  }
</script>