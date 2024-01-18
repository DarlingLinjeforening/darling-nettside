<template>
    <!-- Event section-->
    <section>
      <div
        :class="
          altbackground
            ? 'bg-white h-28 flex flex-row justify-between px-10'
            : 'bg-white-alt h-28 flex flex-row justify-between px-10'
        "
      >
        <!-- Information (left side)-->
        <div class="flex flex-row items-center">
          <!-- Lemon Icon -->
          <div><EventLemon :date="props.dateformat" /></div>
          <!-- Right Info -->
          <div class="flex flex-col mx-10">
            <div>
              <h3 class="text-lg">{{ props.title }}</h3>
            </div>
            <div class="flex flex-row items-center py-2">
                <img :src="props.icon" :alt="props.type" class="align-baselien w-4 h-4 mr-1" />
                {{ props.type }}
            </div>
            <div class="flex flex-row">
              <div clas="align-baseline">
                <i class="pi pi-clock align-baseline"></i> {{ props.time }}
              </div>
              <div class="px-3">|</div>
              <div>
                <i class="pi pi-map-marker align-baseline"></i>
                {{ props.location }}
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</template>

<script setup>
import EventLemon from "./EventLemon.vue";
const props = defineProps([
  "title",
  "date",
  "time",
  "location",
  "type",
  "icon",
  "dateformat",
  "altbackground",
]);
</script>

<script>
export default {};
</script>
