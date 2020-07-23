<template>
  <div>
    <button
      class="bg-orange-500 text-white text-center px-10"
      :class="{ 'py-1 ':sm, 'py-3 ' : !sm, 'rounded': rounded }"
    >{{text}}</button>
  </div>
</template>

<script>
export default {
  props: {
    primary: {
      type: Boolean,
      default: false
    },
    sm: {
      type: Boolean,
      default: false
    },
    rounded: {
      type: Boolean,
      default: false
    },
    click: {
      type: Function
    },
    text: {
      type: String
    }
  }
};
</script>