<template>
  <section class="prose mb-20">
    <div v-if="text.length > 0">
      <PortableText :value="text" :components="components" />
    </div>
  </section>
</template>

<script setup>
import { PortableText } from "@portabletext/vue";
import { ref, h } from "vue";

const components = {
  marks: {
    link: ({ value }, { slots }) => {
      const target = (value?.href || "").startsWith("http")
        ? "_blank"
        : undefined;
      return h(
        "a",
        {
          href: value?.href,
          target,
          rel: target === "_blank" && "noindex nofollow",
        },
        slots.default?.()
      );
    },
  },
};
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
        text.value = data.content;
      });
  },
  methods: {
    urlFor(source) {
      return builder.image(source);
    },
  },
};
</script>
