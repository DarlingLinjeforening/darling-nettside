<template>
  <div class="flex justify-center relative">
    <div class="flex flex-row w-[90%] max-w-7xl py-14 md:py-20 md:px-8">
      <div>
        <slot />
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "ContactSpacingComp",
};
</script>
