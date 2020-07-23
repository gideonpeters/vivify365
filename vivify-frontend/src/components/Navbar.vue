<template>
  <div class="bg-white py-3">
    <div
      class="container lg:px-0 px-10 mx-auto flex flex-row justify-between lg:justify-around items-center align-middle"
    >
      <router-link
        tag="div"
        active-class="text-purple-700 font-bold text-1xl"
        class="cursor-pointer lg:block xs:hidden sm:hidden hidden"
        :to="{name: 'main.home'}"
      >
        <div class="px-2">Home</div>
      </router-link>
      <router-link
        active-class="text-purple-700 font-bold text-1xl"
        tag="div"
        class="cursor-pointer lg:block xs:hidden sm:hidden hidden"
        :to="{name: 'main.blog'}"
      >
        <div class="px-2">Blog</div>
      </router-link>
      <router-link
        active-class="text-purple-700 font-bold text-1xl"
        tag="div"
        class="cursor-pointer lg:block xs:hidden sm:hidden hidden"
        :to="{name: 'main.devotional'}"
      >
        <div class="px-2">Devotional</div>
      </router-link>
      <div>
        <img
          class="logo cursor-pointer"
          src="https://vivify365.org/images/logo.png"
          alt="vivify logo"
        />
      </div>
      <router-link
        active-class="text-purple-700 font-bold text-1xl"
        tag="div"
        class="cursor-pointer lg:block xs:hidden sm:hidden hidden"
        :to="{name: 'main.resources'}"
      >
        <div class="px-2">Resources</div>
      </router-link>
      <router-link
        active-class="text-purple-700 font-bold text-1xl"
        tag="div"
        class="cursor-pointer lg:block xs:hidden sm:hidden hidden"
        :to="{name: 'main.speakup'}"
      >
        <div class="px-2">Speak Up</div>
      </router-link>
      <router-link
        active-class="text-purple-700 font-bold text-1xl"
        tag="div"
        class="cursor-pointer lg:block xs:hidden sm:hidden hidden"
        :to="{name: 'main.contact'}"
      >
        <div class="px-2">Contact</div>
      </router-link>
      <button class="lg:hidden xs:block sm:block block">
        <i class="mdi mdi-menu mdi-36px"></i>
      </button>
    </div>
  </div>
</template>

<style lang="scss" scoped>
.logo {
  height: 80px;
}
</style>