<template>
  <div class="text-white">
    <div
      class="bg-purple-700 flex items-center justify-around mx-5 p-5 hd-75 flex-col rounded"
      :class="{' hd-100': primary}"
    >
      <div class="bg-white w-full h-32 rounded mb-2"></div>
      <div class>
        <div class="font-bold">TODAY'S QUOTE</div>
      </div>
      <div class="py-1">
        <div
          class="text-sm"
        >Lorem ipsum dolor sit amet consectetur adipisicing elit. Arecusandae esse pariatur rem illo repellendus, voluptas est unde, optio voluptatum a eveniet reiciendis incidunt sunt quisquam at corrupti?</div>
      </div>
      <div>
        <div class="text-sm cursor-pointer">READ MORE</div>
      </div>
    </div>
  </div>
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

<style lang="scss" scoped>
.hd-100 {
  min-height: 350px;
  height: 350px;
}

.hd-75 {
  //   min-height: 250px;
  height: 300px;
}
</style>