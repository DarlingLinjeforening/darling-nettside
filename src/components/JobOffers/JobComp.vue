<template>
    <div class="m-4 py-4">
      <div class="flex flex-col md:flex-row">
        <img :src="imgSrc" :alt="companyName" class="w-40 h-20 max-w-[240px] max-h-[144px] md:w-60 md:h-36 px-4"/>
        <div class="max-w-prose">
          <p class="font-bold text-xl">{{ position }}</p>
          <p class="text-sm">{{ description }}</p>
        </div>
      </div>
      <div class="flex justify-evenly py-2 md:py-5">
        <div>
          <i class="pi pi-clock align-baseline p-2"></i>
          <span v-if="deadline">{{ deadline }}</span>
          <span v-else>As soon as possible</span>
        </div>
        <span>|</span>
        <div>
          <i class="pi pi-map-marker align-baseline"></i>
          {{ location }}
        </div>
        <span>|</span>
        <div>{{ jobType }}</div>
      </div>
    </div>
</template>


<script>
import { stringifyQuery } from 'vue-router';

export default {
props: {
    position: String,
    companyName: String,
    description: String,
    deadline: Date,
    location: String,
    jobType: String,
    imgSrc: String, 
}
}
</script>
