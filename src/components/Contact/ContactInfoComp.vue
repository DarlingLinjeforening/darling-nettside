<template>
  <!-- Old styles for outer div, can be removed if no longer needed -->
  <!-- class="h-56 w-80 bg-darling-purple flex justify-center text-white rounded-xl md:h-96 md:w-80 lg:w-2/6 lg:h-31 lg:rounded-xl xl:mr-20" -->
  <div
    class="bg-darling-purple md:max-w-[90%] text-white [&>*]:px-1 min-[320px]:[&>*]:px-10 md:[&>*]:px-10 [&>*]:py-16 rounded-xl h-min"
  >
    <div
      class="flex flex-col gap-3 justify-center md:gap-10 lg:gap-12 lg:text-lg"
    >
      <div class="flex flex-row">
        <p class="flex flex-row text-sm min-[320px]:text-base md:text-lg">
          <i class="pi pi-envelope" style="margin-right: 8px"></i
          >{{ contact.email }}
        </p>
      </div>
      <div>
        <p class="flex flex-row text-sm min-[320px]:text-base md:text-lg">
          <i class="pi pi-envelope" style="margin-right: 8px"></i
          >{{ contact.companyEmail }}
        </p>
      </div>
      <div>
        <p class="flex flex-row text-sm min-[320px]:text-base md:text-lg">
          <i class="pi pi-map-marker" style="margin-right: 8px"></i
          >{{ contact.address }}
        </p>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      contact: [],
    };
  },
  mounted() {
    this.$sanityClient
      .fetch('*[_type == "contact"]{email, companyEmail, address}')
      .then((data) => {
        console.log(data);
        this.contact = data[0];
      });
  },
};
</script>
