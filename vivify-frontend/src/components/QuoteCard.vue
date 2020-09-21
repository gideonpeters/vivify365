<template>
  <div
    data-aos="flip-up"
    data-aos-offset="0"
    data-aos-duration="1000"
    data-aos-easing="ease-in"
    data-aos-once="false"
    data-aos-mirror="true"
    data-aos-anchor-placement="top-center"
  >
    <div
      class="flex justify-around mx-5 p-2 hd-75 flex-col rounded border border-orange-500"
      :class="{'border-purple-700 hd-100': primary}"
    >
      <div>
        <div class="font-bold">TODAY'S QUOTE</div>
      </div>
      <div class="py-1">
        <div
          class="text-sm"
        >Lorem ipsum dolor sit amet consectetur adipisicing elit. Arecusandae esse pariatur rem illo repellendus, voluptas est unde, optio voluptatum a eveniet reiciendis incidunt sunt quisquam at corrupti?</div>
      </div>
      <div class="pt-1">
        <div>By: Pastor Kenneth Olusanya</div>
      </div>
      <div class="pt-1 flex items-center justify-center">
        <div class="text-purple-700 pr-2">Share:</div>
        <!-- <div class="flex"> -->
        <div>
          <i class="mdi mdi-whatsapp text-green-700 mdi-18px"></i>
        </div>
        <div class="px-5">
          <i class="mdi mdi-twitter text-blue-500 mdi-18px"></i>
        </div>
        <div>
          <i class="mdi mdi-instagram mdi-18px"></i>
        </div>
        <!-- </div> -->
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