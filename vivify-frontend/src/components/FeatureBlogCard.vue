<template>
  <div class="container mx-auto sm:mx-auto lg:mt-20">
    <div
      class="transform lg:scale-100 sm:scale-75 scale-50 flex items-center justify-center sm:items-end lg:items-end flex-col sm:flex-row lg:flex-row"
    >
      <div
        class="max-img-mini hidden sm:block lg:block lg:py-10 py-0 order-last sm:order-first lg:order-first z-10 shadow-md bg-center bg-cover bg-no-repeat bg-white"
      >
        <div class="border-l-4 border-orange-500 py-2">
          <div class="flex px-10 items-center">
            <div class="font-bold text-gray-600">Lifestyle</div>
            <div class="px-3 text-sm">5 MIN READ</div>
          </div>
        </div>
        <div class="flex px-10 pt-3">
          <div class="text-5xl sm:text-2xl text-left font-bold">
            HELP! I LIVE
            <br />WITH MY PARENTS
          </div>
        </div>
        <div class="flex justify-start text-sm px-10 mt-2 lg:mt-6">
          <div class="text-left">
            <i class="mdi mdi-account pr-1"></i> Daniel Babalola
          </div>
          <div class="px-4 text-left">
            <i class="mdi mdi-chat-processing pr-1"></i> 12 Comments
          </div>
          <div class="text-left">
            <i class="mdi mdi-calendar pr-1"></i> 12-08-2020
          </div>
        </div>
      </div>
      <div
        class="max-img z-0 shadow-md bg-center bg-cover bg-no-repeat bg-blue-400"
        :style="{backgroundImage: 'url('+'https://vivify365.org/blog/wp-content/uploads/2020/06/WhatsApp-Image-2020-06-23-at-21.37.53-738x423.jpeg'+')'}"
      ></div>
    </div>
  </div>
</template>

<style lang="scss" scoped >
.max-img {
  height: 400px;
  width: 550px;
  &-mini {
    width: 550px;
    height: 300px;
    margin-right: -10%;
  }
}
</style>