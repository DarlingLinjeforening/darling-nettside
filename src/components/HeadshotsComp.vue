<template>
  <div>
    <!-- Komponent for Headshots (HeadshotComp) -->

    <!-- Her vil vi legge inn headshotComp og props -->
    <div class="flex justify-center items-center">
      <div
        class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-4 gap-12 mb-12"
      >
        <HeadshotComp
          v-for="headshot in headshots"
          :key="headshot._id"
          :image="imgURL(headshot.imgSrc)"
          :alttext="headshot.image_alttext"
          :name="headshot.name"
          :role="headshot.role"
          :phone="headshot.phoneNumber"
          :mail="headshot.email"
        />
      </div>
    </div>
    <!-- <div v-for="headshot in headshots" class="p-5">
            <div>
                Name: {{ headshot.name }}
            </div>
            <div>
                Role: {{ headshot.role }}
            </div>
            <div>
                <img :src="urlFor(headshot.imgSrc).width(100).url()" class="p-2" />
            </div>
        </div> -->
  </div>
</template>

<script>
import { builder } from "@/main";
import HeadshotComp from "./HeadshotComp.vue";

export default {
  components: {
    HeadshotComp,
  },
  data() {
    return {
      headshots: [],
    };
  },
  mounted() {
    this.$sanityClient
      .fetch(
        '*[_type == "members"]{name, role, phoneNumber, email, image_alttext, "imgSrc":image.asset._ref}| order(rank asc)'
      )
      .then((data) => {
        this.headshots = data;
      });
  },
  methods: {
    imgURL(source) {
      if (source) {
        return builder.image(source).url();
      }

      return "";
    },
  },
};
</script>
