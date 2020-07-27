<template>
  <div>
    <page-banner text="WELCOME TO OUR PODCAST" />
    <div class="container xl:mx-auto lg:px-10 px-5 mt-16">
      <div
        class="flex flex-col lg:flex-row xl:flex-row justify-between xl:items-center items-center lg:items-start lg:mb-10 mb-32"
      >
        <div class="xl:w-1/2 lg:w-full w-full text-left lg:mr-10 mr-0">
          <div
            class="font-bold text-purple-700 lg:text-6xl text-4xl break-words"
          >WE KEEP YOU INSPIRED ON THE GO</div>
          <div
            class="leading-9 text-1xl"
          >Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit aut voluptatibus corporis laudantium minima omnis deserunt velit nulla unde, laboriosam assumenda odit quos nemo culpa similique perspiciatis sit, voluptas labore?</div>
          <div class="mt-5">
            <custom-button sm text="EXPLORE" />
          </div>
        </div>
        <div class="podcast-image relative xl:w-1/2 lg:w-5/6 w-full lg:mt-10 xl:mt-0 mt-10 mb-10">
          <div
            class="h-full z-0 relative shadow-md bg-center bg-cover bg-no-repeat bg-blue-400"
            :style="{backgroundImage: 'url('+'https://cdn-images-1.listennotes.com/podcasts/the-vivify-podcast/are-you-ready-for-season-2-4A6TJQlSavk-wp8nZEIrcDB.1400x1400.jpg'+')'}"
          ></div>
          <div
            class="lg:w-5/6 w-11/12 h-3/4 p-5 absolute shadow-md -bottom-72 z-10 bg-center bg-cover bg-no-repeat bg-white"
          >
            <div class="flex">
              <div
                class="text-2xl sm:text-2xl text-left font-bold text-purple-700"
              >CHRIST IS MY SAVIOUR</div>
            </div>
            <div
              class="text-left multiline"
            >Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius dolorem laboriosam, placeat odio quas expedita porro voluptatibus laborum quasi harum minima illo, obcaecati aperiam exercitationem commodi mollitia recusandae ab blanditiis!</div>
            <div class="flex lg:pt-5 pt-2 items-center">
              <div class="lg:w-16 w-10 h-10 lg:h-16 rounded-full border border-gray-500"></div>
              <div class="text-left pl-5">
                <div class="font-bold text-md">Bethel Ofuyatan</div>
                <div class="text-sm">25 mins</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="flex xl:flex-row lg:flex-row flex-col justify-between items-center my-0 lg:my-32">
        <div class="w-full">
          <div class="flex w-full lg:justify-start justify-center items-center">
            <input
              type="text"
              placeholder="Search Vivify podcasts"
              class="border border-1 rounded-l border-purple-700 w-full py-4 px-4"
            />
            <div class="bg-purple-700 py-3 px-4 rounded-r">
              <i class="mdi mdi-magnify mdi-24px text-white"></i>
            </div>
          </div>
        </div>
        <div class="lg:mt-0 mt-5 flex w-full justify-center lg:justify-end">
          <t-dropdown text="Podcast Categories">
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
      <div class="grid lg:grid-cols-3 sm:grid-cols-2 grid-cols-1 mt-10 gap-10">
        <podcast-card />
        <podcast-card />
        <podcast-card />
      </div>
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
  </div>
</template>

<script>
import PageBanner from "@/components/PageBanner.vue";
import CustomButton from "@/components/CustomButton.vue";
import PodcastCard from "@/components/PodcastCard.vue";
export default {
  components: {
    PageBanner,
    CustomButton,
    PodcastCard
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

<style lang="scss" scoped>
.podcast-image {
  height: 350px;
}

.multiline {
  display: -webkit-box;
  -webkit-line-clamp: 3;
  -webkit-box-orient: vertical;
  overflow: hidden;
}

@media (min-width: 640px) {
  .podcast-image {
    height: 400px;
  }
}
@media (min-width: 1024px) {
  .podcast-image {
    height: 600px;
  }
}

@media (min-width: 1280px) {
  .podcast-image {
    height: 700px;
  }
}
</style>