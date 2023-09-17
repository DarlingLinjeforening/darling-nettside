<template>
  <div class="mt-12">
    <form class="flex content-center flex-col w-60 md:w-72 lg:w-96 lg:text-xl">
      <label for="name">Name:</label>
      <input
        class="shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
        v-model="text"
      />
      <label class="mt-5 md:mt-10" for="email">Email:</label>
      <input
        class="shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
        v-model="text"
      />
      <label class="mt-5 md:mt-10" for="message">Message:</label>
      <textarea
        class="shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline max-h-32 md:max-h-44 lg:h-44"
        v-model="textarea"
      >
      </textarea>
      <input
        class="mt-5 text-white bg-darling-purple hover:bg-darling-purple-light hover:text-darling-purple cursor-pointer font-bold py-2 px-4 rounded md:mt-10"
        type="submit" value="Submit"
      > 
    </form>
    </div>
</template>

<script>
export default {};
</script>
