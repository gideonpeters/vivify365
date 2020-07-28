<template>
  <div class="bg-white py-3">
    <div
      class="container lg:px-0 px-10 mx-auto flex flex-row justify-between lg:justify-around items-center align-middle"
    >
      <router-link
        exact
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
          @click="goToPage('main.home')"
          class="logo cursor-pointer"
          src="https://vivify365.org/images/logo.png"
          alt="vivify logo"
        />
      </div>

      <t-dropdown
        class="lg:block xs:hidden sm:hidden hidden"
        :button-props="{ baseClass: 'focus:outline-none hover:bg-white flex items-center rounded border border-none' }"
        text="Resources"
      >
        <ul>
          <router-link
            exact
            active-class="text-purple-700 font-bold text-1xl"
            tag="li"
            class="cursor-pointer block no-underline px-4 py-2 hover:bg-purple-200 hover:text-white"
            :to="{name: 'main.podcasts'}"
          >Podcasts</router-link>
          <router-link
            exact
            active-class="text-purple-700 font-bold text-1xl"
            tag="li"
            class="cursor-pointer lg:block xs:hidden sm:hidden hidden block no-underline px-4 py-2 hover:bg-purple-200 hover:text-white"
            :to="{name: 'main.sermons'}"
          >Sermons</router-link>
          <!-- <router-link
            exact
            active-class="text-purple-700 font-bold text-1xl"
            tag="li"
            class="cursor-pointer lg:block xs:hidden sm:hidden hidden block no-underline px-4 py-2 hover:bg-purple-200 hover:text-white"
            :to="{name: 'main.podcasts'}"
          >Comics</router-link>-->
        </ul>
      </t-dropdown>
      <!-- </router-link> -->
      <router-link
        exact
        active-class="text-purple-700 font-bold text-1xl"
        tag="div"
        class="cursor-pointer lg:block xs:hidden sm:hidden hidden"
        :to="{name: 'main.speakup'}"
      >
        <div class="px-2">Speak Up</div>
      </router-link>
      <router-link
        exact
        active-class="text-purple-700 font-bold text-1xl"
        tag="div"
        class="cursor-pointer lg:block xs:hidden sm:hidden hidden"
        :to="{name: 'main.home', hash: '#contact'}"
      >
        <div class="px-2">Contact</div>
      </router-link>
      <button @click="openNav" class="lg:hidden xs:block sm:block block">
        <i class="mdi mdi-menu mdi-36px"></i>
      </button>
    </div>
  </div>
</template>

<script>
export default {
  methods: {
    openNav() {
      this.$emit("openMiniNav");
    },
    goToPage(name) {
      this.$router.push({ name: name });
    }
  }
};
</script>

<style lang="scss" scoped>
.logo {
  height: 80px;
}
</style>