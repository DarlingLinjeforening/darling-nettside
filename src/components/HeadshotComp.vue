<template>
  <div class="basis-1/4">
    <img
      :src="image"
      alt="Profile Image"
      class="object-cover w-52 h-52 border-2 border-darling-purple min-w-max"
    />
    <div>
      <p class="font-bold text-xl">{{ name }}</p>
      <p class="font-bold text-base">{{ role }}</p>
      <p v-if="phone">Tel: {{ phone }}</p>
      <p class="text-sm" v-if="mail">Email: {{ mail }}</p>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    image: String,
    name: String,
    role: String,
    phone: Number,
    mail: String,
  },
};
</script>
