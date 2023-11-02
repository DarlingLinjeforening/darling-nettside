<template>
<div class="h-56 w-80 p-5 bg-darling-purple flex justify-center text-white rounded-xl md:h-96 md:w-80 lg:w-2/6 lg:h-31 lg:rounded-xl xl:mr-20">
    <div class="flex flex-col gap-3 justify-center md:gap-10 lg:gap-12 lg:text-lg">
        <p><i class="pi pi-envelope" style="margin-right: 8px;"></i>{{contact.email}}</p>
        <p><i class="pi pi-envelope" style="margin-right: 8px;"></i>{{contact.companyEmail}}</p>
        <p><i class="pi pi-map-marker" style="margin-right: 8px;"></i>{{contact.address}}</p>
        <!-- <p><i class="pi pi-clock" style="margin-right: 8px;"></i>{{contact.hours}}</p> -->
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
      this.$sanityClient.fetch('*[_type == "contact"]{email, companyEmail, address}').then((data) => {
        console.log(data)
        this.contact = data[0];
      });
    },    
    }
</script>
