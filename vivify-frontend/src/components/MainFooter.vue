<template>
  <div class>
    <div class="bg-purple-700 py-12">
      <div
        class="flex lg:flex-row md:flex-col sm:flex-row flex-col lg:justify-around justify-center container mx-auto"
      >
        <div class="text-white">
          Subscribe to our monthly newsletter and
          <br />stay up to date with all news and events.
        </div>
        <div class="flex lg:flex-row flex-col items-center">
          <div class="lg:mt-0 mt-3 lg:mr-3 mr-0">
            <input
              type="email"
              placeholder="Your Email Address"
              class="w-64 px-3 py-3 border border-purple-700"
            />
          </div>
          <div class="lg:mt-0 mt-3">
            <custom-button sm rounded text="SUBSCRIBE" />
          </div>
        </div>
      </div>
    </div>
    <div class="container mx-auto grid lg:grid-cols-4 grid-cols-1 py-12">
      <div class="lg:text-left text-purple-700 font-bold text-center mx-auto">
        YOU ARE NOW
        <br />VIVIFIED
      </div>
      <div class="mt-5 lg:mt-0">
        <div class="flex flex-col lg:text-left text-center lg:items-start items-center">
          <div>
            <div class="border-b border-purple-700 pb-2 mb-2 pr-0 lg:pr-10">MENU</div>
          </div>
          <div>Home</div>
          <div>Blog</div>
          <div>Devotional</div>
          <div>Speak Up</div>
          <div>Contact</div>
        </div>
      </div>
      <div class="my-5 lg:my-0">
        <div class="flex flex-col lg:text-left text-center lg:items-start items-center">
          <div>
            <div class="border-b border-purple-700 pb-2 mb-2 pr-0 lg:pr-10">FOLLOW US</div>
          </div>
          <div>Facebook</div>
          <div class="py-2">Twitter</div>
          <div>Instagram</div>
        </div>
      </div>
      <div class="lg:text-right text-purple-700 font-bold text-center">
        SEE YOU SOON
        <br />REMAIN VIVIFIED
      </div>
    </div>
  </div>
</template>

<script>
import CustomButton from "@/components/CustomButton.vue";

export default {
  components: {
    CustomButton
  }
};
</script>