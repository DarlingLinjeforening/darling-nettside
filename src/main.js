import './assets/main.css'

import { createApp } from 'vue'
import App from './App.vue'
import router from './router'



// connect to the headless cms - sanity
import { createClient } from '@sanity/client'
import imageUrlBuilder from '@sanity/image-url'

const client = createClient({
  projectId: '55ga7y25',
  dataset: 'production',
  useCdn: true, // Enable Content Delivery Network (CDN) for faster responses
});

const app = createApp(App)

// to easly get the img url from a sanity image
app.config.globalProperties.$sanityClient = client; // Set up the global property

export const builder = imageUrlBuilder(client);

function urlFor(source) {
  return builder.image(source)
}

app.use(router)

app.mount('#app')

// Notifications
import Toast from 'vue-toast-notification'
import 'vue-toast-notification/dist/theme-default.css'

app.use(Toast)