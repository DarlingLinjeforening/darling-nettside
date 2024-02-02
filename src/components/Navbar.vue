<template>
  <nav>
    <div
      class="flex justify-center relative text-white bg-darling-purple p-4 uppercase font-bold content-center max-h-14"
    >
      <div
        class="flex flex-row w-full max-w-7xl px-8 justify-between h-8 items-center"
      >
        <div>
          <a href="/">
            <span v-if="!menuOpen">
              <img
                class="h-8"
                src="/images/Darling-logo-white.png"
                alt="Darling Logo"
            /></span>
          </a>
        </div>

        <div class="flex flex-row">
          <div @click="openMenu" @keyup.enter="openMenu" class="p-2 z-20">
            <i
              tabindex="0"
              :class="
                menuOpen
                  ? 'pi pi-times lg:hidden text-3xl'
                  : 'pi pi-bars lg:hidden text-3xl'
              "
            ></i>
          </div>

          <ul class="lg:flex flex-row gap-12 lg:gap-16 mx-0 sm:mx-10 hidden">
            <li>
              <RouterLink class="navlink" to="/">Home</RouterLink>
            </li>

            <li>
              <RouterLink class="navlink" to="/events">Events</RouterLink>
            </li>

            <li>
              <RouterLink class="navlink" to="/about">About us</RouterLink>
            </li>

            <li>
              <RouterLink class="navlink" to="/job-offers"
                >Job offers</RouterLink
              >
            </li>

            <li>
              <RouterLink class="navlink" to="/contact">Contact</RouterLink>
            </li>
          </ul>
        </div>
      </div>

      <!-- Hamburger Menu -->
      <template v-if="menuOpen">
        <div class="bg-darling-purple absolute w-screen h-screen z-10">
          <img
            class="h-8 relative top-14 -rotate-90"
            src="/images/Darling-logo-white.png"
            alt="Darling Logo"
          />
          <div class="flex justify-center">
            <hr class="text-white w-1/2 border-b-[1px]" />
          </div>
          <ul
            class="flex flex-col items-end p-3 pr-6 text-3xl font-bold gap-5 text-white mt-4"
          >
            <li>
              <RouterLink
                @keyup.enter="menuOpen = false"
                @click="menuOpen = false"
                to="/"
                >Home</RouterLink
              >
            </li>

            <li>
              <RouterLink
                @keyup.enter="menuOpen = false"
                @click="menuOpen = false"
                to="/events"
                >Events</RouterLink
              >
            </li>

            <li>
              <RouterLink
                @keyup.enter="menuOpen = false"
                @click="menuOpen = false"
                to="/about"
                >About us</RouterLink
              >
            </li>

            <li>
              <RouterLink
                @keyup.enter="menuOpen = false"
                @click="menuOpen = false"
                to="/job-offers"
                >Job offers</RouterLink
              >
            </li>

            <li>
              <RouterLink
                @keyup.enter="menuOpen = false"
                @click="menuOpen = false"
                to="/contact"
                >Contact</RouterLink
              >
            </li>
          </ul>
          <!-- Social icons -->
          <div
            class="pt-32 pl-8 text-white font-bold text-3xl flex flex-col [&>a]:py-2"
          >
            <a :href="this.socials[1]">
              <i class="pi pi-instagram py-2 text-5xl"></i>
            </a>
            <a :href="this.socials[2]">
              <i class="pi pi-facebook py-2 text-5xl"></i>
            </a>
            <a :href="this.socials[0]">
              <i class="pi pi-linkedin py-2 text-5xl"></i>
            </a>
          </div>
        </div>
      </template>
    </div>
  </nav>
</template>

<script setup></script>

<script>
const tailwindScreenWidth = 1024;

export default {
  data() {
    return {
      menuOpen: false,
      socials: [],
    };
  },
  mounted() {
    this.$sanityClient.fetch('*[_type == "contact"]{socials}').then((data) => {
      this.socials = data[0].socials;
    });
    window.addEventListener("resize", this.handleResize);
    this.handleResize();
  },
  beforeDestroy() {
    window.removeEventListener("resize", this.handleResize);
  },
  methods: {
    openMenu() {
      if (window.innerWidth < tailwindScreenWidth) {
        // Make sure we are not in desktop mode
        this.menuOpen = !this.menuOpen;
      }
    },
    handleResize() {
      if (window.innerWidth > tailwindScreenWidth) {
        this.menuOpen = false;
      }
    },
  },
};
</script>
