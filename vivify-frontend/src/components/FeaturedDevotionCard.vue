<template>
  <div class="container mx-auto sm:px-5 lg:mt-20">
    <div
      class="flex items-center justify-center sm:items-end lg:items-end flex-col sm:flex-row lg:flex-row"
    >
      <div
        class="max-img-mini py-2 order-last sm:order-first lg:order-first z-10 shadow-md bg-center bg-cover bg-no-repeat bg-white"
      >
        <div class="border-l-4 border-orange-500 py-2">
          <div class="flex px-10 items-center">
            <div class="font-bold text-gray-600">THE NEW YOU</div>
            <div class="px-3 text-sm">5 MIN READ</div>
          </div>
        </div>
        <div class="flex px-10 lg:pt-3 pt-1">
          <div class="break-words lg:text-3xl text-1xl sm:text-2xl text-left font-bold">
            HELP! I LIVE
            WITH MY PARENTS
          </div>
        </div>
        <div class="text-left px-10">
          <div
            class="multiline lg:text-sm text-sm leading-6"
          >Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor porro natus, facere ullam neque dolorum cumque, voluptate eligendi error suscipit saepe necessitatibus temporibus voluptatum mollitia modi nostrum commodi iusto quae?</div>
        </div>
        <div class="flex justify-start text-sm px-10 mt-2 lg:mt-6">
          <div class="text-left">
            <i class="mdi mdi-tag pr-1"></i> Faith, Lifestyle
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
  height: 200px;
  width: 350px;
  &-mini {
    width: 350px;
    min-height: 200px;
    margin-right: 0%;
  }
}

@media (min-width: 640px) {
  .max-img {
    height: 400px;
    width: 550px;
    &-mini {
      width: 550px;
      height: 300px;
      margin-right: -10%;
    }
  }
}
@media (min-width: 1024px) {
  .max-img {
    height: 400px;
    width: 550px;
    &-mini {
      width: 550px;
      height: 300px;
      margin-right: -10%;
    }
  }
}

@media (min-width: 1280px) {
  .max-img {
    height: 400px;
    width: 550px;
    &-mini {
      width: 550px;
      height: 300px;
      margin-right: -10%;
    }
  }
}

.multiline {
  display: -webkit-box;
  -webkit-line-clamp: 3;
  -webkit-box-orient: vertical;
  overflow: hidden;
}
</style>