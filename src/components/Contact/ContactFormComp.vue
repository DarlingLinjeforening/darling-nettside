<template>
  <div class="mt-12 md:mt-5">
    <form
      class="flex content-center p-2 flex-col sm:max-w-[50vw] w-[80vw] md:w-72 lg:w-96 lg:text-xl"
      @submit.prevent="submitForm"
    >
      <label for="name">{{ i18n.contactForm.nameLabel }}</label>
      <input
        required
        class="shadow appearance-none border py-2 px-3 md:mt-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
        v-model="name"
      />
      <label class="mt-5 md:mt-8" for="email">{{
        i18n.contactForm.emailLabel
      }}</label>
      <input
        required
        class="shadow appearance-none border py-2 px-3 md:mt-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
        v-model="email"
      />
      <label class="mt-5 md:mt-8" for="subject">{{
        i18n.contactForm.subjectLabel
      }}</label>
      <input
        required
        class="shadow appearance-none border py-2 px-3 md:mt-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
        v-model="subject"
      />
      <label class="mt-5 md:mt-8" for="message">{{
        i18n.contactForm.messageLabel
      }}</label>
      <textarea
        required
        class="shadow appearance-none border py-2 px-3 md:mt-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline max-h-32 md:max-h-44 lg:h-44"
        v-model="message"
      >
      </textarea>
      <div
        class="g-recaptcha mt-5 md:mt-8 recaptcha-resize"
        id="g-recaptcha"
      ></div>
      <input
        class="mt-5 text-white bg-darling-purple hover:bg-darling-purple-light hover:text-darling-purple cursor-pointer font-bold py-2 px-4 md:mt-8"
        type="submit"
        value="Submit"
        name="Submit"
      />
    </form>
  </div>
</template>

<script>
import axios from "axios";
import { i18n } from "../../i18n";

export default {
  data() {
    return {
      i18n,
      name: "",
      email: "",
      subject: "",
      message: "",
    };
  },
  methods: {
    async loadRecaptcha() {
      // Load reCAPTCHA with your site key
      await new Promise((resolve) => {
        grecaptcha.ready(resolve);
      });

      // Render the reCAPTCHA widget in the specified div
      grecaptcha.render("g-recaptcha", {
        sitekey: "6LdXwkUoAAAAAC8lcMYiO5LwzdOHxTWeHEz1jQvU",
      });
    },
    submitForm() {
      const formData = new FormData();
      formData.append("name", this.name);
      formData.append("email", this.email);
      formData.append("subject", this.subject);
      formData.append("message", this.message);

      console.log(this.name);
      console.log(this.email);
      console.log(this.subject);
      console.log(this.message);

      this.name = "";
      this.email = "";
      this.subject = "";
      this.message = "";
      grecaptcha.reset();

      axios
        .post("http://e1.darlinglinjeforening.org/contact.php", formData)
        .then((response) => {
          if (response.data.includes("Error")) {
            this.$toast.open({
              message: response.data,
              type: "error",
              pauseOnHover: true,
              duration: 3000,
              position: "top-right",
            });
            console.error(response.data);
          } else {
            this.$toast.open({
              message: response.data,
              type: "success",
              pauseOnHover: true,
              duration: 5000,
              position: "top-right",
            });
            console.log(response.data);
          }
        })
        .catch((error) => {
          this.$toast.open({
            message: response.data,
            type: "error",
            pauseOnHover: true,
            duration: 3000,
            position: "top-right",
          });
          console.error(error);
        });
    },
  },
  mounted() {
    // Load and render reCAPTCHA when the component is mounted
    this.loadRecaptcha();
  },
};
</script>
