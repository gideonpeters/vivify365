<template>
  <div class="bg-purple-700 text-center px-10 py-12">
    <div class="text-1xl sm:text-1xl lg:text-5xl text-white">{{ text }}</div>
  </div>
</template>

<script>
export default {
  props: {
    text: {
      type: String
    }
  }
};
</script>