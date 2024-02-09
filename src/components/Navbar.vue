<template>
  <nav>
    <div
      class="flex justify-center lg:items-center relative text-white bg-darling-purple p-4 uppercase font-bold content-center max-h-14"
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
        <!-- <div class="flex"> -->
        <div
          class="fixed inset-y-0 left-0 w-full max-w-xs bg-darling-purple z-10 overflow-y-auto"
        >
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
            class="pl-8 text-white font-bold text-3xl flex flex-col [&>a]:py-2"
          >
            <a :href="this.socials[1]" target="_blank">
              <i class="pi pi-instagram py-1 text-5xl"></i>
            </a>
            <a :href="this.socials[2]" target="_blank">
              <i class="pi pi-facebook py-1 text-5xl"></i>
            </a>
            <a :href="this.socials[0]" target="_blank">
              <i class="pi pi-linkedin py-1 text-5xl"></i>
            </a>
          </div>
        </div>
        <!-- </div> -->
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
