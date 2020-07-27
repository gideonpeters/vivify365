<template>
  <div>
    <button
      @click="handleClick"
      class="bg-orange-500 hover:bg-orange-600 text-white text-center px-10"
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
    onClick: {
      type: Function
    },
    text: {
      type: String
    }
  },
  methods: {
    handleClick() {
      this.onClick();
    }
  }
};
</script>