<template>
  <div
    class="relative"
    data-aos="fade-up"
    data-aos-offset="0"
    data-aos-duration="1000"
    data-aos-easing="ease-in"
    data-aos-once="true"
    data-aos-anchor-placement="top-center"
  >
    <div
      :style="{backgroundImage: 'url('+item.image_link +')'}"
      class="h-56 bg-cover z-0 bg-center bg-no-repeat d-flex bg-gray-700 w-64 my-2"
      :class="double ? ' d-height ' : ''"
    ></div>
  </div>
</template>

<script>
export default {
  components: {
    // CustomButton
  },
  props: {
    double: {
      type: Boolean,
      default: false
    },
    imageLink: {
      type: String
    },
    item: {
      type: Object
    }
  },
  data() {
    return {
      uri: process.env.VUE_APP_BACKEND_IMAGE_URI
    };
  },
  methods: {
    goToPage() {
      this.$router.push({
        name: "main.blog.detail",
        params: { id: this.item.id }
      });
    }
  }
};
</script>

<style lang="scss" scoped>
.d-height {
  height: 480px;
}
</style>