<template>
  <div class="z-1" v-html="returnHeading()"></div>
  <div
    :style="{ width: width, height: height, bottom: bottom, left: left }"
    class="relative bg-darling-purple-light -z-10 bg-opacity-50 max-w-screen-sm"
  ></div>
</template>

<script setup>
const props = defineProps(["h", "text", "width", "height", "left", "bottom"]);

let width;
props.width ? (width = props.width) : (width = "24rem");

let height;
props.height ? (height = props.height) : (height = "2rem");

let bottom;
props.bottom ? (bottom = props.bottom) : (bottom = "1.75rem");

let left;
props.left ? (left = props.left) : (left = "1.75rem");

function returnHeading() {
  switch (props.h) {
    case "1":
      return "<h1 class='font-bold text-4xl max-w-sm'>" + props.text + "</h1>";

    case "2":
      return "<h2 class='font-bold text-3xl max-w-sm'>" + props.text + "</h2>";

    case "3":
      return "<h2 class='font-bold text-2xl max-w-sm'>" + props.text + "</h2>";

    case "4":
      return "<h2 class='font-bold text-xl max-w-sm'>" + props.text + "</h2>";

    default:
      return "<h2 class='font-bold text-3xl max-w-sm'>" + props.text + "</h2>";
  }
}
</script>

<script>
export default {
  name: "HeaderComp",
};
</script>
