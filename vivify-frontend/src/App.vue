<template>
  <div id="app">
    <navbar />
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
</style>
