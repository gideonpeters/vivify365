<template>
  <div>
    <div class="flex flex-col items-start">
      <div class="font-bold">{{comment.name}}</div>
      <div class="text-left">{{ comment.body }}</div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    comment: {
      type: Object
    }
  }
};
</script>