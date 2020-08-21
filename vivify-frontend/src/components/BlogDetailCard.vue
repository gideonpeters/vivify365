<template>
  <div @click="goToPage('main.blog.detail', post.id)">
    <div class="flex h-64 justify-center w-full px-5">
      <div
        class="post-image bg-no-repeat bg-cover bg-center bg-blue-800"
        :style="{backgroundImage: 'url('+uri  +post.image_link+')'}"
      ></div>
      <div class="text-left post-body ml-5 multiline leading-9 break-words h-64">
        <div class="font-bold uppercase text-2xl break-words">{{ post.title }}</div>
        <div v-html="post.body"></div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    post: {
      type: Object
    }
  },
  data() {
    return {
      uri: process.env.VUE_APP_BACKEND_IMAGE_URI
    };
  },
  methods: {
    goToPage(name, id) {
      this.$router.push({ name: name, params: { id: id } });
    }
  }
};
</script>

<style lang="scss" scoped>
// .multiline {
//   display: -webkit-box;
//   -webkit-line-clamp: 5;
//   -webkit-box-orient: vertical;
//   overflow: hidden;
//   text-overflow: ellipsis;
// }

.multiline {
  position: relative;
  // height: 3.6em; /* exactly three lines */
  overflow: hidden;
}
.multiline:after {
  content: "";
  text-align: right;
  position: absolute;
  bottom: 0;
  right: 0;
  width: 70%;
  height: 1.2em;
  background: linear-gradient(
    to right,
    rgba(255, 255, 255, 0),
    rgba(255, 255, 255, 1) 50%
  );
}
.post-image {
  width: 200px;
  height: 250px;
}
.post-body {
  width: calc(100vw - 200px);
  height: 250px;
}
@media (min-width: 640px) {
}
@media (min-width: 1024px) {
  .post-image {
    width: 600px;
    height: 250px;
  }
  .post-body {
    width: calc(100vw - 600px);
    height: 250px;
  }
}

@media (min-width: 1280px) {
}
</style>