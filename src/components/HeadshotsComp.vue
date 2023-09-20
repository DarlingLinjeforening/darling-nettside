<template>
    <div>
        Komponent for Headshots (HeadshotComp)

        <!-- Her vil vi legge inn headshotComp og props -->
        <HeadshotComp
          v-for="headshot in headshots"
          :key="headshot._id"
          :name="headshot.name"
        />

        <div v-for="headshot in headshots" class="p-5">
            <div>
                Name: {{ headshot.name }}
            </div>
            <div>
                Role: {{ headshot.role }}
            </div>
            <div>
                <img :src="urlFor(headshot.imageUrl).width(100).url()" class="p-2" />
            </div>
        </div>
    </div>
</template>

<script>
    import { builder } from '@/main';
    import HeadshotComp from './HeadshotComp.vue'

    export default {
    components: {
      HeadshotComp
    },
    data() {
      return {
        headshots: [],
      };
    },
    mounted() {
      this.$sanityClient.fetch('*[_type == "members"]{name, role, phoneNumber, email, "imageUrl":image.asset._ref}').then((data) => {
        console.log(data)
        this.headshots = data;
      });
    },
    methods: {
        urlFor(source) {
        return builder.image(source);
        },
    }    
    }
</script>