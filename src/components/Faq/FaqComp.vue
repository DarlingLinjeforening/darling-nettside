<template>
  <HeaderComp h="2" text="Frequently Asked Questions" />

  <div>
    <FaqQuestion
      v-for="item in faq"
      :question="item.questions"
      :answer="item.answers"
    />
  </div>
</template>

<script>
import { builder } from "@/main";
import FaqQuestion from "./FaqQuestion.vue";
import HeaderComp from "../HeaderComp.vue";

export default {
  components: {
    FaqQuestion,
    HeaderComp,
  },
  data() {
    return {
      faq: [],
    };
  },
  mounted() {
    this.$sanityClient
      .fetch('*[_type == "faq"]{questions, answers}')
      .then((data) => {
        console.log(data);
        this.faq = data;
      });
  },
  methods: {
    urlFor(source) {
      return builder.image(source);
    },
  },
};
</script>
