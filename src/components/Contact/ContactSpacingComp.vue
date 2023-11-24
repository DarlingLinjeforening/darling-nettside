<template>
    <div class="flex justify-center relative">
      <div class="flex flex-row w-full max-w-7xl p-3 md:py-20 md:px-8">
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
  