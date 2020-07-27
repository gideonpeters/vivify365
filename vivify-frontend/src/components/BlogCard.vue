<template>
  <div @click="goToPage('main.blog.detail', post.id)" class="relative">
    <!-- <div class> -->
    <div
      class="lg:h-64 h-64 lg:w-full w-full z-0 shadow-md bg-center bg-cover bg-no-repeat bg-blue-400"
      :style="{backgroundImage: 'url('+'https://vivify365.org/blog/wp-content/uploads/2020/06/WhatsApp-Image-2020-06-23-at-21.37.53-738x423.jpeg'+')'}"
    ></div>
    <div class="h-56 lg:w-11/12 py-4 -mt-72 w-11/12 z-10 shadow-md bg-white">
      <div class="border-l-4 border-orange-500 py-2">
        <div class="flex px-10 items-center">
          <div class="font-bold text-gray-600 text-sm">{{post.tag ? post.tag : 'FAITH'}}</div>
          <div class="px-3 text-sm">5 MIN READ</div>
        </div>
      </div>
      <div class="flex px-10 pt-3">
        <div class="text-1xl multiline sm:text-2xl text-left font-bold">{{post.title}}</div>
      </div>
      <div
        class="grid lg:grid-cols-3 grid-cols-1 lg:gap-6 gap-2 mt-2 lg:text-sm text-xs px-10 lg:mt-6"
      >
        <div class="flex text-center">
          <div>
            <i class="mdi mdi-account pr-1"></i>
          </div>
          <div class="multiline">{{post.author}}</div>
        </div>
        <div class="flex text-center">
          <div>
            <i class="mdi mdi-chat-processing pr-1"></i>
          </div>
          <div>{{post.comments_count}} Comments</div>
        </div>
        <div class="flex text-center">
          <div>
            <i class="mdi mdi-calendar pr-1"></i>
          </div>
          <div>12-08-2020</div>
        </div>
      </div>
    </div>
  </div>
  <!-- </div> -->
</template>

<script>
export default {
  props: {
    post: {
      type: Object
    }
  },
  methods: {
    goToPage(name, id) {
      this.$router.push({ name: name, params: { id: id } });
    }
  }
};
</script>

<style lang="scss" scoped>
.multiline {
  display: -webkit-box;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
  overflow: hidden;
}
</style>