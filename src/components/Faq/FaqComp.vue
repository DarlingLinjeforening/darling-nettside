<template>
  <section class="m-10 ml-6">
    <HeaderComp h="2" text="Frequently Asked Questions" />

    <div>
      <FaqQuestion
        v-for="item in items"
        :question="item.question"
        :answer="item.answer"
      />
    </div>
  </section>
</template>

<script setup>
const items = [
  { question: "What's so special about the movie Netriks?", answer: "It starts to make you think." },
  { question: "What was your emotional reaction after watching Netriks?", answer: "I almost lost it while I watched it!" },
  { question: "Can you describe the plot of Netriks in one sentence?", answer: "Netriks takes you on a mind-bending journey through the intricacies of a virtual world where reality and illusion collide." },
];
</script>

<script>
import FaqQuestion from "./FaqQuestion.vue";
import HeaderComp from "../HeaderComp.vue";
export default {
  components: { FaqQuestion, HeaderComp },
};
</script>
