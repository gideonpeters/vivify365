<template>
  <div>
    <page-banner text="WELCOME TO OUR DEVOTIONALS" />
    <div>
      <div class="flex justify-center my-5">
        <subheader title="FEATURED" />
      </div>
      <featured-devotion-card />
    </div>
    <div
      class="flex lg:flex-row flex-col justify-between container items-center lg:mx-auto mx-auto my-10 px-5 lg:my-16"
    >
      <div class="flex lg:w-1/2 w-full lg:justify-start justify-center items-center">
        <input
          type="text"
          placeholder="Search Devotionals"
          class="border border-1 rounded-l border-purple-700 w-full py-4 px-4"
        />
        <div class="bg-purple-700 py-3 px-4 rounded-r">
          <i class="mdi mdi-magnify mdi-24px text-white"></i>
        </div>
      </div>
      <div class="lg:mt-0 mt-5">
        <t-dropdown class="w-full" text="Devotional Categories">
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
    <!-- <div class="container lg:mx-auto mx-auto px-5 mt-8 flex justify-around"> -->
    <div class="container mx-auto grid lg:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-6 mt-8 px-5">
      <blog-card />
      <blog-card />
      <blog-card />
    </div>
    <!-- </div> -->
    <div class="container lg:mx-auto mx-auto px-5 w-4/5 mx-auto flex justify-center mt-8">
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
import FeaturedDevotionCard from "@/components/FeaturedDevotionCard.vue";
import BlogCard from "@/components/BlogCard.vue";
import PageBanner from "@/components/PageBanner.vue";
export default {
  components: {
    Subheader,
    FeaturedDevotionCard,
    BlogCard,
    PageBanner
  },
  data() {
    return {
      totalRows: 100,
      perPage: 6,
      limit: 5,
      disabled: false,
      currentPage: 1
    };
  }
};
</script>

