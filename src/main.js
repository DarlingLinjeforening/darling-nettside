import "./assets/main.css";

import { createApp } from "vue";
import App from "./App.vue";
import router from "./router";
// Notifications
import Toast from 'vue-toast-notification'
import 'vue-toast-notification/dist/theme-default.css'



// connect to the headless cms - sanity
import { createClient } from "@sanity/client";
import imageUrlBuilder from "@sanity/image-url";

const client = createClient({
  projectId: '55ga7y25',
  dataset: 'production',
  apiVersion: '2021-10-21'
  useCdn: true, // Enable Content Delivery Network (CDN) for faster responses
});

const app = createApp(App);

// to easly get the img url from a sanity image
app.config.globalProperties.$sanityClient = client; // Set up the global property

export const builder = imageUrlBuilder(client);

function urlFor(source) {
  return builder.image(source);
}



app.use(Toast)
app.use(router);
app.mount("#app");
