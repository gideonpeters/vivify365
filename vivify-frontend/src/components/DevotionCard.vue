<template>
  <div
    class="text-white"
    data-aos="slide-up"
    data-aos-offset="0"
    data-aos-duration="1000"
    data-aos-easing="ease-in"
    data-aos-once="true"
    data-aos-anchor-placement="top-center"
  >
    <div
      class="bg-purple-700 flex items-start justify-start mx-5 hd-75 flex-col rounded"
      :class="{'hd-100': primary}"
    >
      <div
        class="bg-black w-full h-64 mb-2 bg-cover z-0 bg-center bg-no-repeat"
        :style="{backgroundImage: 'url('+devotion.image_link +')'}"
      ></div>
      <div class="px-5 pb-5">
        <div class>
          <div class="font-bold">{{devotion.title}}</div>
        </div>
        <div class="py-1">
          <div class="text-sm">{{devotion.description}}</div>
        </div>
        <div>
          <div class="text-sm cursor-pointer">READ</div>
        </div>
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
    },
    devotion: {
      type: Object
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