<template>
  <div>
    <img
      :src="image"
      alt="Profile Image"
      class="object-cover w-52 h-52 border-2 border-darling-purple"
    />
    <div>
      <p class="pt-2 font-bold text-xl">{{ name }}</p>
      <p class="font-bold text-base">{{ role }}</p>
      <p v-if="phone">Tel: {{ phone }}</p>
      <div class="flex flex-row text-base">
        <p class="text mr-1">Email:</p>
        <a class="underline" :href="'mailto:' + mail" v-if="mail">{{ mail }}</a>
      </div>
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
