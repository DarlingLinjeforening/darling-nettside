<template>
  <section class="flex flex-col my-5">
    <details
      class="border-darling-purple border-2 bg-whit shadow max-w-lg"
      @toggle="updateIcon"
    >
      <summary
        class="list-none flex flex-row items-center cursor-pointer py-5 px-2"
      >
        <span class="text-3xl font-bold pr-10 text-darling-purple">{{
          icon
        }}</span>
        <p :class="{ 'font-bold': isOpen, '': !isOpen }">
          {{ props.question }}
        </p>
      </summary>
      <div
        class="p-3 border-t-2 border-t-darling-purple"
        v-if="props.answer.length > 0"
      >
        <PortableText :value="props.answer" />
      </div>
    </details>
  </section>
</template>

<script setup>
import { PortableText } from "@portabletext/vue";
const props = defineProps(["question", "answer"]);
</script>

<script>
export default {
  data() {
    return {
      isOpen: false,
      icon: "+",
    };
  },
  methods: {
    updateIcon(event) {
      this.isOpen = event.target.open;
      this.icon = this.isOpen ? "-" : "+";
    },
  },
};
</script>
