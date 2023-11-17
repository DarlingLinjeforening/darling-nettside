<template>
  <div class="flex justify-center relative">
    <div class="flex flex-row w-full max-w-7xl py-20 px-8">
      <div>
        <slot />
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "SpacingComp",
};
</script>
