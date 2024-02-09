<template>
  <router-link to="/events">
    <button
      class="bg-darling-purple text-white hover:bg-darling-purple-light hover:text-darling-purple border-2 border-darling-purple font-bold py-2 px-4 my-5 w-44"
    >
      {{ i18n.eventComp.exploreEvents }} <i class="pi pi-calendar"></i>
    </button>
  </router-link>
</template>

<script>
import { i18n } from "../i18n";

export default {
  data() {
    return {
      i18n,
    };
  },
};
</script>
