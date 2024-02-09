<template>
  <div
    class="flex flex-col justify-between max-w-sm p-6 bg-white shadow-2xl dark:bg-gray-800 dark:border-gray-700"
  >
    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
      {{ studyProgram }}
    </h5>
    <p class="text-gray-700 dark:text-gray-400 mb-5">
      {{ description }}
    </p>
    <a
      target="_blank"
      :href="studyProgramLink"
      class="text-white bg-darling-purple hover:bg-darling-purple-light hover:text-darling-purple border-2 border-darling-purple cursor-pointer font-bold py-2 px-4 mt-5 md:mt-8 w-fit text-center"
    >
      Read More
    </a>
  </div>
</template>
<script>
export default {
  props: {
    studyProgram: String,
    description: String,
    studyProgramLink: String,
  },
};
</script>
