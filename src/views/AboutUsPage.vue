<template>
  <div>
  <h1 class="text-3xl flex justify-center">About us</h1>
  <headshot-comp />
  <faq-comp />
  </div>
</template>

<script>
import FaqComp from '../components/FaqComp.vue'
import HeadshotComp from '../components/HeadshotComp.vue'
  export default {
  components: { HeadshotComp, FaqComp },
    
  }
</script>