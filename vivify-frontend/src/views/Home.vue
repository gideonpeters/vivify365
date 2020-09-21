<template>
  <div class>
    <div class="bg-image flex bg-no-repeat bg-cover bg-center">
      <div class="grid lg:grid-cols-2 grid-cols-1 lg:py-0 py-12 gap-10 container px-10 mx-auto">
        <div class="flex text-white flex-col items-start justify-center align-middle text-left">
          <div
            class="text-6xl"
            data-aos="fade-up"
            data-aos-offset="200"
            data-aos-delay="50"
            data-aos-duration="1000"
            data-aos-easing="ease-in-out"
            data-aos-mirror="false"
            data-aos-once="false"
            data-aos-anchor-placement="top-center"
          >
            Welcome
            <br />You Are Home!
          </div>
          <div class="text-2xl my-4">
            <div>We share truths with powerful simplicity, Our joy is to help you grow to know the Lord in the simplest and deepest ways possible.</div>
          </div>
          <div>
            <custom-button rounded primary text="GET STARTED" />
          </div>
        </div>
        <div
          class="flex text-white flex-col lg:items-center items-end justify-center align-middle text-left"
        >
          <CoolLightBox :items="items" :index="index" @close="index = null"></CoolLightBox>
          <div
            @click="index =0 "
            class="bg-orange-500 p-5 h-16 w-16 rounded-full flex justify-center items-center cursor-pointer"
          >
            <i class="mdi mdi-play mdi-36px"></i>
          </div>
        </div>
      </div>
    </div>
    <div
      class="container mx-auto xl:w-full w-full lg:w-4/5 flex flex-col items-center justify-center"
    >
      <div
        class="bg-purple-700 p-10 sm:py-24 py-10 lg:my-4 mb-4 lg:text-left text-center text-white"
      >
        <div class="grid lg:grid-cols-2 grid-cols-1">
          <div>
            <div
              class="text-3xl lg:mb-0 mb-5"
              data-aos="fade-up"
              data-aos-offset="10"
              data-aos-delay="50"
              data-aos-duration="1000"
              data-aos-easing="ease-in-out"
              data-aos-mirror="false"
              data-aos-once="false"
              data-aos-anchor-placement="top-center"
            >WE'RE PASSIONATE ABOUT YOUR GROWTH</div>
          </div>
          <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores necessitatibus repellat temporibus? Atque, eligendi accusantium quisquam optio perferendis tempore possimus minima laudantium. Natus inventore doloribus libero dolorum quisquam officiis placeat!</div>
        </div>
      </div>
      <subheader title="LATEST BLOG POSTS" subTitle="Here are some of our recent blog posts" />
      <div
        class="grid xl:grid-cols-4 lg:grid-cols-2 sm:grid-cols-2 grid-cols-1 gap-8 flex sm:items-start lg:items-center items-center mt-12"
      >
        <gallery-card :item="getBlog(0)" :imageLink="getBlog(0).image_link" />
        <gallery-card :item="getBlog(1)" :imageLink="getBlog(1).image_link" double />
        <gallery-card
          :item="getBlog(2)"
          :imageLink="getBlog(2).image_link"
          class="lg:hidden block"
        />
        <div class="flex flex-col">
          <gallery-card :item="getBlog(3)" :imageLink="getBlog(3).image_link" />
          <gallery-card
            :item="getBlog(4)"
            :imageLink="getBlog(4).image_link"
            class="lg:block hidden"
          />
        </div>
        <gallery-card
          :item="getBlog(5)"
          :imageLink="getBlog(5).image_link"
          class="lg:block sm:hidden hidden"
        />
      </div>
      <div class="mt-5 mb-32">
        <custom-button text="VIEW ALL" :onClick="()=>goToPage('main.blog')" sm rounded />
      </div>
      <subheader title="VIVIFY DEVOTIONALS" subTitle="Anchored By Abundant Grace" />
      <div
        class="grid lg:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-8 flex lg:items-center sm:items-center items-center justify-center mt-12"
      >
        <devotion-card class="lg:block hidden" />
        <devotion-card primary />
        <devotion-card primary class="lg:hidden xs:hidden block" />
        <devotion-card class="lg:block hidden" />
      </div>
      <div class="mt-5 mb-32">
        <custom-button text="VIEW ALL" sm rounded />
      </div>
      <subheader title="VIVIFY'S QUOTE OF THE DAY" />
      <div
        class="grid lg:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-8 flex lg:items-center sm:items-center items-center justify-center mt-12"
      >
        <quote-card class="lg:block hidden" />
        <quote-card primary />
        <quote-card primary class="lg:hidden xs:hidden block" />
        <quote-card class="lg:block hidden" />
      </div>
      <div class="mt-5 mb-32">
        <!-- <custom-button text="VIEW ALL" sm rounded /> -->
      </div>
      <subheader title="GALLERY" subTitle="Pictorial Depiction of our family" class />
      <div class="flex flex-col items-center">
        <div class="flex lg:flex-row flex-col justify-between">
          <CoolLightBox :items="galleryItems" :index="galleryIndex" @close="galleryIndex = null"></CoolLightBox>

          <div class="mr-0 lg:mr-3">
            <gallery-card @click="galleryIndex = 0" :item="galleryItems[0]" double />
          </div>

          <div class="grid lg:grid-cols-2 sm:grid-cols-2 grid-cols-1 gap-6">
            <gallery-card @click="galleryIndex = 0" :item="galleryItems[0]" />
            <gallery-card @click="galleryIndex = 0" :item="galleryItems[0]" />
            <gallery-card @click="galleryIndex = 0" :item="galleryItems[0]" />
            <gallery-card @click="galleryIndex = 0" :item="galleryItems[0]" />
          </div>
        </div>
        <div class="grid lg:grid-cols-3 grid-cols-1 gap-6">
          <gallery-card @click="galleryIndex = 0" :item="galleryItems[0]" />
          <gallery-card @click="galleryIndex = 0" :item="galleryItems[0]" />
          <gallery-card @click="galleryIndex = 0" :item="galleryItems[0]" />
        </div>
      </div>
      <div class="mt-5 mb-32">
        <!-- <custom-button text="VIEW ALL" sm rounded /> -->
      </div>
      <subheader title="MEET OUR LEAD PASTOR" />
      <div
        class="flex flex-col sm:flex-row lg:flex-row mt-12 justify-between text-left items-center"
      >
        <div class="flex-1 flex lg:justify-end justify-center">
          <div
            class="w-64 border border-purple-700 h-64 bg-cover bg-no-repeat bg-center lead-image"
          />
        </div>
        <div
          class="flex-1 lg:text-left sm:text-left text-center text-purple-700 lg:mt-0 mt-5 lg:pl-10 sm:pl-5 pl-0"
        >
          <div class="text-2xl">Hello,</div>
          <div class="w-64">
            You're in the right place. This is a platform to be enlightened and edified daily with the Word of God and have all your burning questions answered. We envision all people awakened to the finished work of Christ.
            We're here to keep you pumped for the Gospel.
          </div>
        </div>
      </div>

      <subheader title="CONTACT US" class="mt-32" id="contact" />
      <div class="flex flex-col sm:flex-row lg:flex-row mt-12 justify-between text-left">
        <div class="flex flex-col lg:justify-start justify-center lg:items-start items-center">
          <div class="text-2xl lg:text-left text-center font-bold text-purple-700">
            WE ARE JUST
            <br />A MESSAGE AWAY
          </div>
          <div>
            <div class="text-purple-700">Our Social Media</div>
            <div class="flex">
              <div>
                <i class="mdi mdi-whatsapp text-green-700 mdi-18px"></i>
              </div>
              <div class="px-5">
                <i class="mdi mdi-twitter text-blue-500 mdi-18px"></i>
              </div>
              <div>
                <i class="mdi mdi-instagram mdi-18px"></i>
              </div>
            </div>
          </div>
          <div class="py-5">
            <div class="text-purple-700 mb-2">Our Email Address</div>
            <div>info@vivify.365.org</div>
          </div>
          <div>
            <div class="text-purple-700 mb-2">Our Phone Number</div>
            <div>+234 708 932 4817</div>
          </div>
        </div>
        <div class="lg:text-left text-center text-purple-700 lg:mt-0 mt-5 px-10">
          <div>
            <input
              type="text"
              placeholder="Your Full Name"
              class="border border-purple-700 py-3 px-2 w-64"
            />
          </div>
          <div class="my-5">
            <input
              type="text"
              placeholder="Your Email Address"
              class="border border-purple-700 py-3 px-2 w-64"
            />
          </div>
          <div>
            <textarea
              type="text"
              placeholder="Your Message"
              rows="10"
              class="border border-purple-700 py-3 px-2 w-64"
            />
          </div>
          <div class="mt-5">
            <custom-button text="SEND" sm rounded />
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import Subheader from "@/components/Subheader.vue";
import CustomButton from "@/components/CustomButton.vue";
// import MiniBlogCard from "@/components/MiniBlogCard.vue";
import GalleryCard from "@/components/GalleryCard.vue";
import QuoteCard from "@/components/QuoteCard.vue";
import DevotionCard from "@/components/DevotionCard.vue";
export default {
  components: {
    Subheader,
    CustomButton,
    // MiniBlogCard,
    QuoteCard,
    DevotionCard,
    GalleryCard
  },
  data() {
    return {
      blogs: [],
      fetchedGalleryItems: [],
      items: [
        {
          title: "The Vivify Family",
          description:
            "We are a family of love, spreading the love of God wherever we are and aren't",
          thumb: "thumb.jpg",
          src: "https://www.youtube.com/watch?v=Z7SXwvhxxoY"
        }
      ],
      index: null,
      galleryIndex: null
    };
  },
  computed: {
    galleryItems() {
      return this.fetchedGalleryItems.map(item => {
        return {
          title: item.title,
          description: item.description,
          src: item.image_link,
          ...item
        };
      });
    }
  },
  methods: {
    getBlog(ix) {
      return this.blogs[ix] ? this.blogs[ix] : {};
    },
    goToPage(name, id) {
      this.$router.push({ name: name, params: { id: id } });
    },
    async getBlogPosts() {
      // try {
      await this.$store.dispatch("getBlogPosts").then(({ data }) => {
        // this.currentPage = data.current_page;
        // this.perPage = data.per_page;
        // this.totalRows = data.total;
        // console.log(data);
        this.blogs = data;
      });
      // } catch (error) {
      //   throw error;
      // }
    },
    async getGallery() {
      // try {
      await this.$store.dispatch("getGallery").then(({ data }) => {
        // this.currentPage = data.current_page;
        // this.perPage = data.per_page;
        // this.totalRows = data.total;
        console.log(data);
        this.fetchedGalleryItems = data.data;
      });
      // } catch (error) {
      //   throw error;
      // }
    }
  },
  async mounted() {
    await this.getBlogPosts();
    await this.getGallery();
  }
};
</script>
<style lang="scss" scoped>
.bg-image {
  //   background-image: url("");
  min-height: 70vh;
  background-image: linear-gradient(
      to bottom,
      rgba(73, 73, 73, 0.3),
      rgba(0, 0, 0, 0.3)
    ),
    url(https://images.unsplash.com/photo-1503803548695-c2a7b4a5b875?ixlib=rb-1.2.1&w=1000&q=80);
}

.lead-image {
  background-image: url("https://vivify365.org/images/pioneer.jpg");
}
</style>