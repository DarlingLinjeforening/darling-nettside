<template>
  <div class="mt-12 md:mt-5">
    <form class="flex content-center flex-col w-60 md:w-72 lg:w-96 lg:text-xl" @submit.prevent="submitForm" >
      <label for="name">Name:</label>
      <input required
        class="shadow appearance-none border rounded py-2 px-3 md:mt-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
        v-model="name"
      />
      <label class="mt-5 md:mt-8" for="email">Email:</label>
      <input required
        class="shadow appearance-none border rounded py-2 px-3 md:mt-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
        v-model="email"
      />
      <label class="mt-5 md:mt-8" for="subject">Subject:</label>
      <input required
        class="shadow appearance-none border rounded py-2 px-3 md:mt-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
        v-model="subject"
      />
      <label class="mt-5 md:mt-8" for="message">Message:</label>
      <textarea required
        class="shadow appearance-none border rounded py-2 px-3 md:mt-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline max-h-32 md:max-h-44 lg:h-44"
        v-model="message"
      >
      </textarea>
      <input
        class="mt-5 text-white bg-darling-purple hover:bg-darling-purple-light hover:text-darling-purple cursor-pointer font-bold py-2 px-4 rounded md:mt-8"
        type="submit"
        value="Submit"
      />
    </form>
  </div>
</template>


<script>
import axios from 'axios';

export default {
  data() {
    return {
      name: '',
      email: '',
      subject: '',
      message: '',
    };
  },
  methods: {
    submitForm() {
      const formData = new FormData();
      formData.append('name', this.name);
      formData.append('email', this.email);
      formData.append('subject', this.subject);
      formData.append('message', this.message);

      console.log(this.name);
      console.log(this.email);
      console.log(this.subject);
      console.log(this.message);
      
axios.post('https://folk.ntnu.no/haavaala/FormHandling.php', formData)
  .then(response => {
    this.$toast.open({
      message: "Email sent successfully!",
      type: 'success',
      pauseOnHover: true,
      duration: 3000,
      position: "top-right"
      })
    console.log(response.data); 
  })
  .catch(error => {
        this.$toast.open({
      message: "Could not send email!",
      type: 'error',
      pauseOnHover: true,
      duration: 3000,
      position: "top-right"
      })
    console.error(error);
  });
    },
  },
};
</script>


