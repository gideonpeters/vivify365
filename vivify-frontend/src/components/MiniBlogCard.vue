<template>
  <div class="h-56 d-flex bg-gray-700 w-64 my-2" :class="double ? ' d-height ' : ''">
    <h1>1</h1>
  </div>
</template>

<script>
export default {
  props: {
    double: {
      type: Boolean,
      default: false
    }
  }
};
</script>

<style lang="scss" scoped>
.d-height {
  height: 480px;
}
</style>