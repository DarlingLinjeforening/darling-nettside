<template>
  <div class="py-4 max-w-fit">
    <div class="flex flex-col md:flex-row">
      <img
        :src="imgSrc"
        :alt="companyName"
        class="w-40 h-20 max-w-[240px] max-h-[144px] md:w-60 md:h-36 pr-4"
      />
      <div class="max-w-prose">
        <div>
          <p class="font-bold text-xl">{{ position }}</p>
          <p class="text-sm">{{ description }}</p>
        </div>
        <div class="flex justify-around py-2 md:py-5 flex-wrap">
          <div>
            <i class="pi pi-clock align-baseline px-2"></i>
            <span v-if="deadline" class="align-baseline">{{ deadline }}</span>
            <span v-else class="align-baseline">As soon as possible</span>
          </div>
          <span>|</span>
          <div>
            <i class="pi pi-map-marker align-baseline px-2"></i>
            <span>{{ location }}</span>
          </div>
          <span>|</span>
          <div>
            <div v-if="jobType === 'fullTime'" class="flex">
              <!-- <div class="px-2 py-0.5"></div> -->
              <span>Full time</span>
            </div>
            <div v-else-if="jobType === 'partTime'" class="flex">
              <!-- <div class="px-2 py-0.5"></div> -->
              <span>Part time</span>
            </div>
            <div v-else-if="jobType === 'summer'" class="flex">Summer</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { stringifyQuery } from "vue-router";

export default {
  props: {
    position: String,
    companyName: String,
    description: String,
    deadline: Date,
    location: String,
    jobType: String,
    imgSrc: String,
  },
};
</script>
