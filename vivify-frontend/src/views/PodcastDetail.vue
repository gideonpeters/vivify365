<template>
  <div class>
    <div class="bg-purple-200 p-16">
      <div
        class="lg:text-5xl sm:text-3xl text-2xl font-bold text-purple-700 break-words"
      >{{podcast.title}}</div>
      <div class="flex flex-col items-center w-full justify-center mt-5">
        <div
          class="blog-image xl:w-3/5 lg:w-4/5 w-full z-0 shadow-md bg-center bg-cover bg-no-repeat bg-blue-400"
          :style="{backgroundImage: 'url('+uri + podcast.image_link+')'}"
        >
          <div class="text-white lg:-ml-8 -ml-5 mt-5">
            <ShareNetwork
              network="facebook"
              :url="window.location.href"
              :title="podcast.title ? podcast.title : 'Vivify blog'"
              :description="podcast.body"
              :quote="podcast.body"
              hashtags="vivify365,vivifyblog"
            >
              <div
                class="cursor-pointer flex justify-center items-center rounded-full lg:w-16 w-10 lg:h-16 h-10 bg-purple-800"
              >
                <i class="mdi mdi-facebook lg:mdi-36px mdi-24px"></i>
              </div>
            </ShareNetwork>
            <div
              class="cursor-pointer flex justify-center items-center rounded-full lg:w-16 w-10 lg:h-16 h-10 bg-purple-800 my-5"
            >
              <i class="mdi mdi-twitter lg:mdi-36px mdi-24px"></i>
            </div>
            <div
              class="cursor-pointer flex justify-center items-center rounded-full lg:w-16 w-10 lg:h-16 h-10 bg-purple-800"
            >
              <i class="mdi mdi-instagram lg:mdi-36px mdi-24px"></i>
            </div>
          </div>
        </div>
        <div class="xl:w-3/5 lg:w-4/5 w-full">
          <vue-plyr>
            <audio controls>
              <source :src="audioLink" type="audio/mp3" />
              <!-- <source
                src="https://www.soundhelix.com/examples/mp3/SoundHelix-Song-1.mp3"
                type="audio/ogg"
              />-->
            </audio>
          </vue-plyr>
        </div>
      </div>
      <div class="mt-4 flex justify-center">
        <custom-button text="Download" sm :onClick="downloadAudio" />
      </div>
    </div>
    <div class="flex justify-start text-justify container mx-auto px-10 py-10 bg-white">
      <div v-html="podcast.body" class="leading-loose text-2xl"></div>
    </div>

    <!-- <div class="container lg:mx-auto mx-auto my-8">
      <div class="text-left text-2xl font-bold px-5">COMMENTS</div>
      <div class="grid lg:grid-cols-2 px-5 grid-cols-1 gap-10 mt-8">
        <comment-card v-for="comment in podcast.comments" :key="comment.id" :comment="comment" />
      </div>
      <div class="text-left px-5" v-if="podcast.comments && podcast.comments.length == 0">No comments yet</div>
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
          <input
            class="border border-gray-500 w-full py-4 px-3"
            type="text"
            v-model="name"
            placeholder="Full Name"
          />
         
          <input
            v-model="email"
            class="border border-gray-500 w-full py-4 px-3"
            type="text"
            placeholder="Email"
          />
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
    </div>-->
  </div>
</template>

<script>
// import BlogDetailCard from "@/components/BlogDetailCard.vue";
// import CommentCard from "@/components/CommentCard.vue";
import CustomButton from "@/components/CustomButton.vue";

export default {
  components: {
    // BlogDetailCard,
    // CommentCard,
    CustomButton
  },
  data() {
    return {
      podcast: {},
      uri: process.env.VUE_APP_BACKEND_IMAGE_URI,
      recentlyPublished: [],
      prevPost: {},
      nextPost: {},
      name: "",
      email: "",
      body: "",
      // recentPosts: [
      //   {
      //     id: 1,
      //     title: "GROWTH IS CONSISTENCY",
      //     imageUrl: "https://vivify365.org/images/blog/grow-up.jpg",
      //     body:
      //       "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
      //   },
      //   {
      //     id: 2,
      //     title: "GROWTH IS CONSISTENCY",
      //     imageUrl: "https://vivify365.org/images/blog/grow-up.jpg",
      //     body:
      //       "lorem ipsum dolor sit amet conseterus sacodif sisddifdos]dnsdisoiiodsisfhfdfo"
      //   }
      // ],
      blogText: `this is the podcast description`
    };
  },
  computed: {
    pageId() {
      return this.$route.params.id;
    },
    audioLink() {
      return this.uri + this.podcast.audio_link;
    }
  },
  methods: {
    downloadAudio() {
      window.location.href = this.audioLink;
    },
    goToBlog() {
      //   this.$router.replace({
      //     name: "main.blog.detail",
      //     params: { id: id }
      //   });
    },
    async getPodcast() {
      let id = this.$route.params.id;
      await this.$store.dispatch("getPodcastById", id).then(res => {
        this.podcast = res.data;

        // console.log(data);
      });
    },
    async comment() {
      //   let id = this.$route.params.id;
      //   let body = {
      //     blog_id: id,
      //     name: this.name,
      //     email: this.email,
      //     body: this.body
      //   };
      //   await this.$store.dispatch("commentOnPost", body).then(() => {
      //     this.getPodcast();
      //     this.email = "";
      //     this.name = "";
      //     this.body = "";
      //     // console.log(data);
      //   });
    }
  },
  watch: {
    pageId() {
      //   this.getPodcast();
    },
    audioLink() {
      // console.log(v);
      this.$refs.player.load();
    }
  },
  async mounted() {
    await this.getPodcast();
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