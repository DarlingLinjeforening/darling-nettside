<template>
  <div>
  <h1 class="text-3xl flex justify-center p-7 ">About us</h1>
  <div class="flex justify-center items-center">
    <div  class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-4 gap-10">
    <!-- <div  class="flex justify-around flex-row flex-wrap"> -->
    <HeadshotComp image = ../public/images/aaaa.jpg name="Andreas Christiansen" role="Leder av Web Komiteen" phone=96969696 mail="A@b.c"/>
    <HeadshotComp image = ../public/images/mo.jpg name="Christopher Ngo" role="Leder av Bæsj Komiteen" phone=1234567 mail="n@g.o"/>
    <HeadshotComp image = ../public/images/aaaa.jpg name="Andreas Christiansen" role="Leder av Web Komiteen" phone=96969696 mail="A@b.c"/>
    </div>
  </div>
  </div>
  
  <section>
    <div class="ml-3 mt-3">
      <HeaderComp h="1" text="About Us" width="10rem"/>
    </div>
  
  <faq-comp />
  <lounge-comp />
  <headshots-comp />
  </section>
</template>

<script>
import EventsComp from '../components/EventsComp.vue'
import FaqComp from '../components/Faq/FaqComp.vue'
import HeadshotComp from '../components/HeadshotComp.vue'
import LoungeComp from '../components/LoungeComp.vue'
import HeadshotsComp from '../components/HeadshotsComp.vue'

export default {
  components: { HeadshotComp, FaqComp, LoungeComp, EventsComp, HeadshotsComp },
    
}
</script>
