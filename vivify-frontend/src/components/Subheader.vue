<template>
  <div>
    <div class="flex flex-row items-center mt-4">
      <div class="w-16 bg-black h-1 rounded-full"></div>
      <div class="px-3 text-purple-700 font-semibold">{{ title }}</div>
      <div class="w-16 bg-black h-1 rounded-full"></div>
    </div>
    <div class="my-3" v-if="subTitle">
      <div class="text-gray-600">{{subTitle}}</div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    title: {
      type: String
    },
    subTitle: {
      type: String
    }
  }
};
</script>