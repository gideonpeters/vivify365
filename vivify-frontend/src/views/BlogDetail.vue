<template>
  <div class>
    <div class="bg-purple-200 p-16">
      <div
        class="lg:text-5xl sm:text-3xl text-2xl font-bold text-purple-700 break-words"
      >{{post.title}}</div>
      <div class="flex justify-center mt-5">
        <div
          class="blog-image xl:w-3/5 lg:w-4/5 w-full z-0 shadow-md bg-center bg-cover bg-no-repeat bg-blue-400"
          :style="{backgroundImage: 'url('+post.image_link+')'}"
        >
          <div class="text-white lg:-ml-8 -ml-5 mt-5">
            <ShareNetwork
              network="facebook"
              :url="'vivify365.org'"
              :title="post.title ? post.title : 'Vivify blog'"
              :description="post.title"
              :quote="`${post.title}`"
              hashtags="vivify365, vivifyblog"
            >
              <div
                class="cursor-pointer flex justify-center items-center rounded-full lg:w-16 w-10 lg:h-16 h-10 bg-purple-800"
              >
                <i class="mdi mdi-facebook lg:mdi-36px mdi-24px"></i>
              </div>
            </ShareNetwork>
            <ShareNetwork
              network="twitter"
              url="https://vivify365.org"
              :title="post.title"
              :description="post.title"
              :quote="post.body"
              hashtags="vivify365,gospel"
            >
              <div
                class="cursor-pointer flex justify-center items-center rounded-full lg:w-16 w-10 lg:h-16 h-10 bg-purple-800 my-5"
              >
                <i class="mdi mdi-twitter lg:mdi-36px mdi-24px"></i>
              </div>
            </ShareNetwork>
            <ShareNetwork
              network="whatsapp"
              url="https://vivify365.org"
              :title="post.title"
              :description="post.title"
              :quote="post.body"
              hashtags="vivify365,gospel"
            >
              <div
                class="cursor-pointer flex justify-center items-center rounded-full lg:w-16 w-10 lg:h-16 h-10 bg-purple-800"
              >
                <i class="mdi mdi-whatsapp lg:mdi-36px mdi-24px"></i>
              </div>
            </ShareNetwork>
          </div>
        </div>
      </div>
    </div>
    <div class="flex justify-start text-justify container mx-auto px-10 py-10 bg-white">
      <div v-html="post.body" class="leading-loose text-2xl vcVerseLink"></div>
    </div>
    <div class="flex container mx-auto justify-between w-screen">
      <div
        class="w-1/2 text-gray-600 text-1xl cursor-pointer text-left relative"
        @mouseleave="showPrev = !showPrev"
        @mouseenter="showPrev = !showPrev"
      >
        <div
          class="absolute"
          style="top: 50px; z-index: 999; opacity: 0.8; width: 70%"
          v-if="showPrev"
          data-aos="fade-up"
          data-aos-offset="0"
          data-aos-duration="1000"
          data-aos-easing="ease-in-out"
          data-aos-once="false"
          data-aos-mirror="true"
          data-aos-anchor-placement="top-center"
        >
          <div class="grid lg:grid-cols-1 grid-cols-1">
            <blog-detail-card :post="prevPost" />
          </div>
        </div>
        <div v-if="prevPost" @click="goToBlog(prevPost.id)">
          <i class="mdi mdi-arrow-left"></i>
          {{prevPost.title}}
        </div>
      </div>
      <div
        class="w-1/2 text-gray-600 text-1xl cursor-pointer text-right relative"
        @mouseleave="showNext = !showNext"
        @mouseenter="showNext = !showNext"
      >
        <div
          class="absolute"
          style="top: 50px; right: -50px; z-index: 999; opacity: 0.8; width: 70%"
          v-if="showNext"
          data-aos="fade-up"
          data-aos-offset="0"
          data-aos-duration="1000"
          data-aos-easing="ease-in-out"
          data-aos-once="false"
          data-aos-mirror="true"
          data-aos-anchor-placement="top-center"
        >
          <div class="grid lg:grid-cols-1 grid-cols-1">
            <blog-detail-card :post="nextPost" />
          </div>
        </div>
        <div v-if="nextPost" @click="goToBlog(nextPost.id)">
          {{nextPost.title}}
          <i class="mdi mdi-arrow-right"></i>
        </div>
      </div>
    </div>

    <div class="container lg:mx-auto mx-auto my-8">
      <div class="text-left text-2xl font-bold px-5">RECENTLY PUBLISHED</div>
      <div class="grid lg:grid-cols-2 grid-cols-1 gap-10 mt-8">
        <blog-detail-card v-for="post in post.recently_published" :key="post.id" :post="post" />
        <!-- <blog-detail-card /> -->
      </div>
      <div
        class="text-left px-5"
        v-if="post.recently_published && post.recently_published.length == 0"
      >No recent posts available</div>
    </div>

    <div class="container lg:mx-auto mx-auto my-8">
      <div class="text-left text-2xl font-bold px-5">RELATED POSTS</div>
      <div class="grid lg:grid-cols-2 grid-cols-1 gap-10 mt-8">
        <blog-detail-card v-for="post in post.related_posts" :key="post.id" :post="post" />
        <!-- <blog-detail-card /> -->
      </div>
      <div
        class="text-left px-5"
        v-if="post.related_posts && post.related_posts.length == 0"
      >No related posts available</div>
    </div>

    <div class="container lg:mx-auto mx-auto my-8">
      <div class="text-left text-2xl font-bold px-5">COMMENTS</div>
      <div class="grid lg:grid-cols-2 px-5 grid-cols-1 gap-10 mt-8">
        <comment-card v-for="comment in post.comments" :key="comment.id" :comment="comment" />
        <!-- <blog-detail-card /> -->
      </div>
      <div class="text-left px-5" v-if="post.comments && post.comments.length == 0">No comments yet</div>
    </div>

    <div class="container lg:mx-auto mx-auto my-8">
      <div class="text-left text-2xl font-bold px-5">LEAVE A COMMENT</div>
      <div class="grid lg:grid-cols-1 px-5 grid-cols-1 gap-10 mt-8">
        <div class="flex">
          <textarea
            v-model="body"
            class="border border-gray-500 w-full py-4 px-3"
            name="comment"
            id="comment-section"
            cols="30"
            rows="10"
          ></textarea>
        </div>
        <div class="grid lg:grid-cols-2 grid-cols-1 gap-10">
          <!-- <div> -->
          <input
            class="border border-gray-500 w-full py-4 px-3"
            type="text"
            v-model="name"
            placeholder="Full Name"
          />
          <!-- </div> -->
          <!-- <div> -->
          <input
            v-model="email"
            class="border border-gray-500 w-full py-4 px-3"
            type="text"
            placeholder="Email"
          />
          <!-- </div> -->
        </div>
      </div>
      <div class="mt-5 mb-32">
        <custom-button
          v-if="name && email && body"
          text="POST COMMENT"
          :onClick="()=>comment()"
          sm
          rounded
        />
      </div>
    </div>
  </div>
</template>

<script>
import BlogDetailCard from "@/components/BlogDetailCard.vue";
import CommentCard from "@/components/CommentCard.vue";
import CustomButton from "@/components/CustomButton.vue";

export default {
  components: {
    BlogDetailCard,
    CommentCard,
    CustomButton
  },
  data() {
    return {
      post: {},
      uri: process.env.VUE_APP_BACKEND_IMAGE_URI,
      recentlyPublished: [],
      prevPost: {},
      nextPost: {},
      showNext: false,
      showPrev: false,
      name: "",
      email: "",
      body: "",
      recentPosts: [
        {
          id: 1,
          title: "GROWTH IS CONSISTENCY",
          imageUrl: "https://vivify365.org/images/blog/grow-up.jpg",
          body:
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
        },
        {
          id: 2,
          title: "GROWTH IS CONSISTENCY",
          imageUrl: "https://vivify365.org/images/blog/grow-up.jpg",
          body:
            "lorem ipsum dolor sit amet conseterus sacodif sisddifdos]dnsdisoiiodsisfhfdfo"
        }
      ],
      blogText: ""
    };
  },
  computed: {
    pageId() {
      return this.$route.params.id;
    }
  },
  methods: {
    goToBlog(id) {
      this.$router.replace({
        name: "main.blog.detail",
        params: { id: id }
      });
    },
    async getBlogPost() {
      let id = this.$route.params.id;
      await this.$store.dispatch("getBlogPostById", id).then(res => {
        this.post = res.data;
        this.prevPost = res.prev_blog;
        this.nextPost = res.next_blog;
        // console.log(data);
      });
    },
    async comment() {
      let id = this.$route.params.id;
      let body = {
        blog_id: id,
        name: this.name,
        email: this.email,
        body: this.body
      };
      this.email = "";
      this.name = "";
      this.body = "";
      await this.$store.dispatch("commentOnPost", body).then(() => {
        this.getBlogPost();

        // console.log(data);
      });
    }
  },
  watch: {
    pageId() {
      this.getBlogPost();
    }
  },
  async mounted() {
    this.getBlogPost();
  }
};
</script>

<style lang="scss" scoped>
// @media (min-width: 640px) {
.blog-image {
  height: 300px;
}
// }
@media (min-width: 640px) {
  .blog-image {
    height: 400px;
  }
}
@media (min-width: 1024px) {
  .blog-image {
    height: 500px;
  }
}

@media (min-width: 1280px) {
  .blog-image {
    height: 500px;
  }
}
//   height: 500px;
</style>