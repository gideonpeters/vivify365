<template>
  <div
    class="h-56 rounded border border-red-300 w-64"
    :class="{'border-purple-700 h-64': primary}"
  >1</div>
</template>

<script>
export default {
  props: {
    primary: {
      type: Boolean,
      default: false
    }
  }
};
</script>