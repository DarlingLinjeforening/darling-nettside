<template>
        <div class="p-6 basis-1/4 ">
        <img :src="image" alt="Profile Image" class="object-cover w-52 h-52 border-2 border-darling-purple min-w-max"/>
        <p class="font-bold text-xl">{{ name }}</p>
        <p class="font-bold text-base">{{ role }}</p>
        <p v-if="phone">Tel: {{ phone }}</p>
        <p v-if="mail">Email: {{ mail }}</p>
      </div>
  </template>
  
  
  <script>
  export default {
    props: {
      image: String, 
      name: String,
      role: String,
      phone: Number,
      mail: String
    }
  }
  </script>
  