<template>
  <section class="ml-6 prose">
    <h2>About</h2>
    <div v-if="text.length > 0">
      <PortableText :value="text" />
    </div>
  </section>
</template>

<script setup>
import { PortableText } from "@portabletext/vue";
import { ref } from "vue";
</script>

<script>
import HeaderComp from "./HeaderComp.vue";

let text = ref([]);

export default {
  components: {
    HeaderComp,
  },
  data() {},
  mounted() {
    this.$sanityClient
      .fetch("*[_type == 'pages' && title=='Homepage'][0]")
      .then((data) => {
        text = data.content;
      });
  },
  methods: {
    urlFor(source) {
      return builder.image(source);
    },
  },
};
</script>
