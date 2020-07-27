<template>
  <div id="app" :class="{'overflow-hidden h-screen w-screen': showMiniNav}">
    <div
      :class="{'hidden': !showMiniNav }"
      class="h-screen p-10 fixed flex flex-col bg-purple-700 absolute top-0 w-screen z-20"
    >
      <div class="self-end">
        <i @click="showMiniNav = false" class="mdi mdi-close text-white mdi-48px"></i>
      </div>
      <ul class="grid grid-cols-1 gap-10 mt-5">
        <router-link
          tag="li"
          v-for="(route, ix) in routes"
          :key="ix"
          exact
          active-class="text-underline font-bold text-white"
          class="cursor-pointer text-white text-3xl"
          :to="{name: route.routeName}"
        >
          <div class="px-2">{{route.name}}</div>
        </router-link>
      </ul>
    </div>
    <navbar @openMiniNav="showMiniNav = true" />
    <main class="mb-32">
      <router-view />
    </main>
    <main-footer />
    <!-- <img alt="Vue logo" src="./assets/logo.png" />
    <HelloWorld msg="Welcome to Your Vue.js App" />-->
  </div>
</template>

<script>
// import HelloWorld from "./components/HelloWorld.vue";
import Navbar from "@/components/Navbar.vue";
import MainFooter from "@/components/MainFooter.vue";

export default {
  name: "App",
  components: {
    Navbar,
    MainFooter
    // HelloWorld
  },
  data() {
    return {
      showMiniNav: false,
      routes: [
        { name: "Home", routeName: "main.home" },
        { name: "Blog", routeName: "main.blog" },
        { name: "Devotional", routeName: "main.devotional" },
        { name: "Sermons", routeName: "main.sermons" },
        { name: "Podcasts", routeName: "main.podcasts" },
        { name: "Speak Up", routeName: "main.speakup" },
        { name: "Contact", routeName: "main.contact" }
      ]
    };
  },
  methods: {
    goToPage(name) {
      this.showMiniNav = false;
      this.$router.push({ name: name });
    }
  }
};
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  overflow-y: scroll;

  /* margin-top: 60px; */
}
li {
  transition: all 5s ease 0.5s;
}
</style>
