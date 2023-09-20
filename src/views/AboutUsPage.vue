<template>
  <div>
  <h1 class="text-3xl flex justify-center">About us</h1>
  <headshot-comp />
  <faq-comp />
  <lounge-comp />
  <headshots-comp />
  </div>
</template>

<script>
import EventsComp from '../components/EventsComp.vue'
import FaqComp from '../components/FaqComp.vue'
import HeadshotComp from '../components/HeadshotComp.vue'
import LoungeComp from '../components/LoungeComp.vue'
import HeadshotsComp from '../components/HeadshotsComp.vue'

export default {
  components: { HeadshotComp, FaqComp, LoungeComp, EventsComp, HeadshotsComp },
    
}
</script>