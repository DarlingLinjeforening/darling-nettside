<template>
  <div class="flex flex-col justify-center items-center text-center cursor-default scale-[0.7] md:scale-[1]" style="background-color: #904FC3; -webkit-mask-image: url('/svg/lemon.svg'); mask-image: url('/svg/lemon.svg'); width:86px; height:84px;">
    <p class="text-white text-3xl p-0 m-0">{{ dateTop }}</p>
    <p class="text-white lowercase p-0 m-0">{{ dateBottom }}</p>
  </div>
</template>

<script setup>
// Define props for component
const props = defineProps(["date","color"]);

// Cut date to get the first two numbers (for day number on top)
let dateTop = props.date;
dateTop = dateTop.substring(0,2);

// Cut date to get the three first letters in the month (for month under)
let dateBottom = props.date;
dateBottom = dateBottom.substring(3,6);
</script>
