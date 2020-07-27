<template>
  <div>
    <div class="podcast-image relative">
      <div
        class="h-64 z-0 relative bg-center bg-cover bg-no-repeat bg-blue-400"
        :style="{backgroundImage: 'url('+'https://cdn-images-1.listennotes.com/podcasts/the-vivify-podcast/are-you-ready-for-season-2-4A6TJQlSavk-wp8nZEIrcDB.1400x1400.jpg'+')'}"
      >
        <div
          class="cursor-pointer w-20 h-20 flex justify-center items-center absolute bottom-0 bg-white"
        >
          <div class="h-16 w-16 flex justify-center items-center bg-orange-500 rounded-full">
            <i class="mdi mdi-play text-white mdi-36px"></i>
          </div>
        </div>
      </div>
      <div
        class="w-full h-3/4 p-5 z-10 border-t border-gray-500 bg-center bg-cover bg-no-repeat bg-white"
      >
        <div class="flex">
          <div class="text-2xl sm:text-2xl text-left font-bold text-purple-700">CHRIST IS MY SAVIOUR</div>
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
</template>

<style lang="scss" scoped>
.multiline {
  display: -webkit-box;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
  overflow: hidden;
}
</style>