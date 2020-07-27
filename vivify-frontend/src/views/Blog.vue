<template>
  <div>
    <page-banner text="WELCOME TO OUR BLOG" />
    <div>
      <div class="flex justify-center my-5">
        <subheader title="FEATURED POST" />
      </div>
      <feature-blog-card />
    </div>
    <div
      class="flex lg:flex-row flex-col justify-between container items-center lg:mx-auto my-0 px-5 lg:my-16"
    >
      <div class="flex lg:w-1/2 w-full lg:justify-start justify-center items-center">
        <input
          type="text"
          placeholder="Search blog posts"
          class="border border-1 rounded-l border-purple-700 w-full py-4 px-4"
        />
        <div class="bg-purple-700 py-3 px-4 rounded-r">
          <i class="mdi mdi-magnify mdi-24px text-white"></i>
        </div>
      </div>
      <div class="lg:mt-0 mt-5 w-64">
        <t-dropdown text="Blog Categories">
          <ul>
            <li>
              <a
                href="#"
                class="block no-underline px-4 py-2 hover:bg-blue-500 hover:text-white"
              >Recent</a>
            </li>
            <li>
              <a
                href="#"
                class="block no-underline px-4 py-2 hover:bg-blue-500 hover:text-white"
              >Popular</a>
            </li>
            <li class="border-b"></li>
            <li>
              <a
                href="#"
                class="block no-underline px-4 py-2 hover:bg-blue-500 hover:text-white"
              >Faith</a>
            </li>
          </ul>
        </t-dropdown>
      </div>
    </div>
    <!-- <div class=" flex justify-around"> -->
    <div class="container lg:mx-auto mt-8 px-5 grid lg:grid-cols-3 grid-cols-1 gap-6">
      <blog-card v-for="post in posts" :key="post.id" :post="post" />
      <!-- <blog-card />
      <blog-card />-->
    </div>
    <!-- </div> -->
    <div class="container w-4/5 mx-auto flex justify-center mt-8">
      <t-pagination
        :total-items="totalRows"
        :per-page="perPage"
        :limit="limit"
        :disabled="disabled"
        v-model="currentPage"
      />
    </div>
  </div>
</template>

<script>
import Subheader from "@/components/Subheader.vue";
import FeatureBlogCard from "@/components/FeatureBlogCard.vue";
import BlogCard from "@/components/BlogCard.vue";
import PageBanner from "@/components/PageBanner.vue";
export default {
  components: {
    Subheader,
    FeatureBlogCard,
    BlogCard,
    PageBanner
  },
  data() {
    return {
      totalRows: 100,
      perPage: 6,
      limit: 5,
      disabled: false,
      currentPage: 1,
      posts: []
    };
  },
  // computed: {
  //   posts() {
  //     return this.$store.state.blogs;
  //   }
  // },
  methods: {
    async getBlogPosts(pageNumber) {
      // try {
      await this.$store
        .dispatch("getBlogPosts", pageNumber)
        .then(({ data }) => {
          // this.currentPage = data.current_page;
          this.perPage = data.per_page;
          this.totalRows = data.total;
          // console.log(data);
          this.posts = data.data;
        });
      // } catch (error) {
      //   throw error;
      // }
    }
  },
  watch: {
    currentPage(v) {
      this.getBlogPosts(v);
    }
  },
  async mounted() {
    // try {
    await this.getBlogPosts();
    // } catch (error) {
    //   throw error;
    // }
  }
};
</script>

