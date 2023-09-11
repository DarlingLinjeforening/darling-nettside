<script setup>
import HeaderComp from './components/HeaderComp.vue'
import { RouterLink, RouterView } from 'vue-router'
import FooterComp from './components/FooterComp.vue'
</script>

<template>

  <HeaderComp />

  <RouterView />

  <FooterComp />
</template>
