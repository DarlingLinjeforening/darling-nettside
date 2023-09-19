<template>
  <div>
  <h1 class="text-3xl flex justify-center p-7 ">About us</h1>
  <div  class="flex justify-around flex-row flex-wrap">
  <HeadshotComp image = ../public/images/aaaa.jpg name="Andreas Christiansen" role="Leder av Web Komiteen" phone=96969696 mail="A@b.c"/>
  <HeadshotComp image = ../public/images/mo.jpg name="Christopher Ngo" role="Leder av Bæsj Komiteen" phone=1234567 mail="n@g.o"/>
  <HeadshotComp image = ../public/images/aaaa.jpg name="Andreas Christiansen" role="Leder av Web Komiteen" phone=96969696 mail="A@b.c"/>
  <HeadshotComp image = ../public/images/mo.jpg name="Christopher Ngo" role="Leder av Bæsj Komiteen" phone=1234567 mail="n@g.o"/>
  <HeadshotComp image = ../public/images/mo.jpg name="Christopher Ngo" role="Leder av Bæsj Komiteen" phone=1234567 mail="n@g.o"/>
  <HeadshotComp image = ../public/images/mo.jpg name="Christopher Ngo" role="Leder av Bæsj Komiteen" phone=1234567 mail="n@g.o"/>
  <HeadshotComp image = ../public/images/mo.jpg name="Christopher Ngo" role="Leder av Bæsj Komiteen" phone=1234567 mail="n@g.o"/>
  <HeadshotComp image = ../public/images/mo.jpg name="Christopher Ngo" role="Leder av Bæsj Komiteen" phone=1234567 mail="n@g.o"/>
 
  </div>
  
  <faq-comp />
  <lounge-comp />
  </div>
</template>

<script>
import EventsComp from '../components/EventsComp.vue'
import FaqComp from '../components/FaqComp.vue';
import HeadshotComp from '../components/HeadshotComp.vue';
import LoungeComp from '../components/LoungeComp.vue';
  export default {
  components: { HeadshotComp, FaqComp, LoungeComp, EventsComp },
    
  }
</script>