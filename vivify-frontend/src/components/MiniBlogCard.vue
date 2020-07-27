<template>
  <div class="relative">
    <div
      :style="{backgroundImage: 'url('+ imageLink +')'}"
      class="h-56 bg-cover z-0 bg-center bg-no-repeat d-flex bg-gray-700 w-64 my-2"
      :class="double ? ' d-height ' : ''"
    ></div>
    <div
      :class="double ? ' d-height ' : ''"
      class="top-0 bottom-0 hover:opacity-100 opacity-0 bg-opacity-75 bg-gray-700 z-10 h-56 d-flex w-64 my-2 absolute"
    >
      <div class="text-2xl">hi</div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    double: {
      type: Boolean,
      default: false
    },
    imageLink: {
      type: String
    }
  }
};
</script>

<style lang="scss" scoped>
.d-height {
  height: 480px;
}
</style>