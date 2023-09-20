<template>
  <nav>
    <div
      class="flex flex-row text-white justify-between bg-darling-purple p-4 items-center uppercase font-bold content-center max-h-14"
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
        <div @click="menuOpen = !menuOpen" class="p-2">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="fill-white sm:hidden"
            viewBox="0 0 50 50"
            width="40px"
          >
            <path
              d="M 0 7.5 L 0 12.5 L 50 12.5 L 50 7.5 L 0 7.5 z M 0 22.5 L 0 27.5 L 50 27.5 L 50 22.5 L 0 22.5 z M 0 37.5 L 0 42.5 L 50 42.5 L 50 37.5 L 0 37.5 z"
            />
          </svg>
        </div>

        <ul class="sm:flex flex-row gap-16 mx-0 md:mx-10 hidden">
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
            <RouterLink class="navlink" to="/job-offers">Job offers</RouterLink>
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
          class="h-8 -rotate-90"
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
            <RouterLink @click="menuOpen = false" to="/">Home</RouterLink>
          </li>

          <li>
            <RouterLink @click="menuOpen = false" to="/events">Events</RouterLink>
          </li>

          <li>
            <RouterLink @click="menuOpen = false" to="/about">About us</RouterLink>
          </li>

          <li>
            <RouterLink @click="menuOpen = false" to="/job-offers">Job offers</RouterLink>
          </li>

          <li>
            <RouterLink @click="menuOpen = false" to="/contact">Contact</RouterLink>
          </li>
        </ul>
        <!-- Social icons -->
        <div class="pt-32 pl-8 text-white font-bold text-3xl flex flex-col">
          <span>P</span>
          <span>X</span>
        </div>
      </div>
    </template>
  </nav>
</template>

<script setup>
import { ref } from "vue";

const menuOpen = ref(false);
</script>

<script></script>
