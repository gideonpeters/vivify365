<template>
  <div class="relative">
    <div
      :style="{backgroundImage: 'url('+ uri+ imageLink +')'}"
      class="h-56 bg-cover z-0 bg-center bg-no-repeat d-flex bg-gray-700 w-64 my-2"
      :class="double ? ' d-height ' : ''"
    ></div>
    <div
      :class="double ? ' d-height ' : ''"
      class="flex flex-col justify-between p-3 bottom-0 hover:opacity-100 opacity-0 bg-opacity-75 bg-gray-700 z-10 h-56 d-flex w-64 my-2 absolute"
    >
      <div class="text-3xl text-white">{{item.title}}</div>
      <custom-button text="View" sm :onClick="goToPage" />
    </div>
  </div>
</template>

<script>
import CustomButton from "@/components/CustomButton.vue";

export default {
  components: {
    CustomButton
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