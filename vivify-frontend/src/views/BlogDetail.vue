<template>
  <div class>
    <div class="bg-purple-200 p-16">
      <div
        class="lg:text-5xl sm:text-3xl text-2xl font-bold text-purple-700 break-words"
      >{{post.title}}</div>
      <div class="flex justify-center mt-5">
        <div
          class="blog-image xl:w-3/5 lg:w-4/5 w-full z-0 shadow-md bg-center bg-cover bg-no-repeat bg-blue-400"
          :style="{backgroundImage: 'url('+uri  +post.image_link+')'}"
        >
          <div class="text-white lg:-ml-8 -ml-5 mt-5">
            <ShareNetwork
              network="facebook"
              :url="'vivify365.org'"
              :title="post.title ? post.title : 'Vivify blog'"
              description="This week, I’d like to introduce you to 'Vite', which means 'Fast'. It’s a brand new development setup created by Evan You."
              quote="Vivify, awakening the hearts of men to the finished work of Christ"
              hashtags="vivify365,vivifyblog"
            >
              <div
                class="cursor-pointer flex justify-center items-center rounded-full lg:w-16 w-10 lg:h-16 h-10 bg-purple-800"
              >
                <i class="mdi mdi-facebook lg:mdi-36px mdi-24px"></i>
              </div>
            </ShareNetwork>
            <div
              class="cursor-pointer flex justify-center items-center rounded-full lg:w-16 w-10 lg:h-16 h-10 bg-purple-800 my-5"
            >
              <i class="mdi mdi-twitter lg:mdi-36px mdi-24px"></i>
            </div>
            <div
              class="cursor-pointer flex justify-center items-center rounded-full lg:w-16 w-10 lg:h-16 h-10 bg-purple-800"
            >
              <i class="mdi mdi-instagram lg:mdi-36px mdi-24px"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="flex justify-start text-justify container mx-auto px-10 py-10 bg-white">
      <div v-html="post.body" class="leading-loose text-2xl"></div>
    </div>
    <div class="flex container mx-auto justify-between w-screen">
      <div class="w-1/2 text-gray-600 text-1xl cursor-pointer text-left">
        <div v-if="prevPost" @click="goToBlog(prevPost.id)">
          <i class="mdi mdi-arrow-left"></i>
          {{prevPost.title}}
        </div>
      </div>
      <div class="w-1/2 text-gray-600 text-1xl cursor-pointer text-right">
        <div v-if="nextPost" @click="goToBlog(nextPost.id)">
          {{nextPost.title}}
          <i class="mdi mdi-arrow-right"></i>
        </div>
      </div>
    </div>

    <div class="container lg:mx-auto mx-auto my-8">
      <div class="text-left text-2xl font-bold px-5">RECENTLY PUBLISHED</div>
      <div class="grid lg:grid-cols-2 grid-cols-1 gap-10 mt-8">
        <blog-detail-card v-for="post in post.recently_published" :key="post.id" :post="post" />
        <!-- <blog-detail-card /> -->
      </div>
      <div
        class="text-left px-5"
        v-if="post.recently_published && post.recently_published.length == 0"
      >No recent posts available</div>
    </div>

    <div class="container lg:mx-auto mx-auto my-8">
      <div class="text-left text-2xl font-bold px-5">RELATED POSTS</div>
      <div class="grid lg:grid-cols-2 grid-cols-1 gap-10 mt-8">
        <blog-detail-card v-for="post in post.related_posts" :key="post.id" :post="post" />
        <!-- <blog-detail-card /> -->
      </div>
      <div
        class="text-left px-5"
        v-if="post.related_posts && post.related_posts.length == 0"
      >No related posts available</div>
    </div>

    <div class="container lg:mx-auto mx-auto my-8">
      <div class="text-left text-2xl font-bold px-5">COMMENTS</div>
      <div class="grid lg:grid-cols-2 px-5 grid-cols-1 gap-10 mt-8">
        <comment-card v-for="comment in post.comments" :key="comment.id" :comment="comment" />
        <!-- <blog-detail-card /> -->
      </div>
      <div class="text-left px-5" v-if="post.comments && post.comments.length == 0">No comments yet</div>
    </div>

    <div class="container lg:mx-auto mx-auto my-8">
      <div class="text-left text-2xl font-bold px-5">LEAVE A COMMENT</div>
      <div class="grid lg:grid-cols-1 px-5 grid-cols-1 gap-10 mt-8">
        <div class="flex">
          <textarea
            v-model="body"
            class="border border-gray-500 w-full py-4 px-3"
            name="comment"
            id="comment-section"
            cols="30"
            rows="10"
          ></textarea>
        </div>
        <div class="grid lg:grid-cols-2 grid-cols-1 gap-10">
          <!-- <div> -->
          <input
            class="border border-gray-500 w-full py-4 px-3"
            type="text"
            v-model="name"
            placeholder="Full Name"
          />
          <!-- </div> -->
          <!-- <div> -->
          <input
            v-model="email"
            class="border border-gray-500 w-full py-4 px-3"
            type="text"
            placeholder="Email"
          />
          <!-- </div> -->
        </div>
      </div>
      <div class="mt-5 mb-32">
        <custom-button
          v-if="name && email && body"
          text="POST COMMENT"
          :onClick="()=>comment()"
          sm
          rounded
        />
      </div>
    </div>
  </div>
</template>

<script>
import BlogDetailCard from "@/components/BlogDetailCard.vue";
import CommentCard from "@/components/CommentCard.vue";
import CustomButton from "@/components/CustomButton.vue";

export default {
  components: {
    BlogDetailCard,
    CommentCard,
    CustomButton
  },
  data() {
    return {
      post: {},
      uri: process.env.VUE_APP_BACKEND_IMAGE_URI,
      recentlyPublished: [],
      prevPost: {},
      nextPost: {},
      name: "",
      email: "",
      body: "",
      recentPosts: [
        {
          id: 1,
          title: "GROWTH IS CONSISTENCY",
          imageUrl: "https://vivify365.org/images/blog/grow-up.jpg",
          body:
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
        },
        {
          id: 2,
          title: "GROWTH IS CONSISTENCY",
          imageUrl: "https://vivify365.org/images/blog/grow-up.jpg",
          body:
            "lorem ipsum dolor sit amet conseterus sacodif sisddifdos]dnsdisoiiodsisfhfdfo"
        }
      ],
      blogText: `<div><p>The first word here probably describes how you’re feeling right now: Help! You’re stuck at home, and again you’re reminded of how difficult your parents could be sometimes. </p><p>Whether it’s their “intrusion” on your productivity, the constant assertion of authority over your spiritual life and decisions, friendships, life choices etc., and so on. You’re simply fed up. </p><p>Fortunately, you’re far from alone (especially if your parents are African lol). The point is, life as a young adult could be challenging sometimes and living with your parents in this phase usually brings with it, its own set of problems. </p><p>If you can relate to all I’ve said, then the rest of this article is for you. Let’s see how we can improve the relationship we have with our parents. Here goes:</p><h4>|| <strong>Your Parents genuinely love you</strong></h4><p>While many of us know this for the most part, it could many times be difficult to recall when the situation demands it. The truth is our parents do love us and so <strong>try their best </strong>to raise us the way <strong>they know how to. </strong></p><p class="has-text-align-center"><em>Hebrews 12:10 &#8211; For they indeed for a few days chastened us <strong>as seemed best to them</strong>, but He for our profit, that we may be partakers of His holiness.</em></p>
      
      <p>Emphasis on <strong>try their best</strong> because our parents, just like everyone else, are human. And so, aren’t perfect. Just like everyone, they could sometimes make wrong decisions, act out of an emotional outburst, or even sometimes act selfishly. Does that mean they love you any less? Of course not. </p>



<p>Realizing all this, more so as a believer, should help you the next time you feel like your parents have “done it again”. They are not perfect, and neither are you. Forgiveness should therefore come easy. </p>



<p class="has-text-align-center"><strong><em>Matthew 7:3 &#8211; And why do you look at the speck in your brother&#8217;s eye, but do not consider the plank in your own eye?</em></strong></p>



<p>More so, emphasis on <strong>the way they know how to, </strong>because our parents belong to a different generation, were raised by parents who also belonged to a different generation than they and so on. Hence, they grew up with vastly different perceptions of the world than the one you probably had growing up. </p>



<p>This definitely influences the way they raise the children they have. And while it doesn’t completely excuse bad parenting habits seeing that time and effort should always be put into being better parent,  it does mean however that there are certain decisions and actions our parents may take that while seeming perfectly normal to them, seem off to us.</p>



<p>At this point, I realize that there may be those who might be going through genuine forms of domestic abuse. That is a different issue altogether and if you are experiencing such, my heart reaches out to you. you should look to get help as soon as possible. </p>



<p>But in general, I believe the best place to start is to realize that our parents are humans who generally want the best for us. It puts you in a better position to bear with their flaws.</p>



<h4>||<strong>Be honest with yourself</strong></h4>



<p>This is where many of us have trouble applying. Just like we read in Matthew above, it’s always very easy to point out the flaws in everyone else but ourselves. Before we go further, it would be very important for you note that. </p>



<p>Truth be told, the problem may not always be with our parents. A child who only wants to stay in his/her bedroom all day, eat and not contribute to taking care of the house fully deserves to be scolded by his mum, with little regard for what he/she may be doing in that room. Admit this to yourself! </p>



<p>And even in the more subtle things, you would still need to be honest in evaluating how responsible you’ve been before complaining that your parents refused to let you go out at night. Truth be told, if you were in their shoes, you might have done “worse”.</p>



<p>And while this may not always be the case, like I’ve discussed in the point above, it doesn’t change the fact that before pointing out all the parental flaws your dad or mum may exhibit, it would do you good to check for any of your own. </p>



<p>Be honest with yourself, are they actually overreacting or are you the one not living up to standards? Do you truly deserve the privileges you’re demanding and are you as mature as you think you are? If you were in their shoes, would you truly give in to your own request or are you simply offended because you’re only seeing things from your perspective? Think about this the next time you’re tempted to lash out at your parents’ actions or decisions. </p>



<h4>|| <strong>Like every relationship, work on building communication.</strong></h4>



<p>Just like with every relationship, communication is the most integral part to keeping it healthy. One of the reasons many face parental issues is the same reason people face friendship issues, relationship issues, workplace issues and so on: You’re interacting with someone other than yourself and so miscommunication arises. </p>



<p>My advice then is to consciously work on building or restoring communication with your parents. Even if only one party(you) is willing to start the work, there could be tremendous progress in no time. </p>



<p>Start by consciously becoming more involved in their lives, pray for and with them if possible, consciously share more of your life with them and the list goes on. The truth is, as a young adult, you can indeed be friends with your parents. But just like every good relationship, it takes work. </p>



<p>As communication improves, boundaries and differences can be resolved more amicably. This would save everyone a lot of stress and hurt. </p>



<h4>|| <strong>Earn their respect. </strong></h4>



<p>This is one advice I can personally relate to. Growing up, I was no stranger to flogging or parental discipline. For one reason or the other, I would always do something that would lead to my parents (mum to be precise) punishing, flogging or getting offended at me. However, not long after I entered the university, all this stopped. </p>



<p>Looking back, I see why: that was the same time I got serious with my walk with God. After that point, everything completely changed. From what it meant to honor and respect my parents, to what it meant to represent Christ to my siblings, to walking in self-control (a fruit of the spirt) and so becoming more responsible with my time and resources. The point is, my faith walk invaded every area of my life and my parents could tell. Their perception of me changed dramatically and it improved our relationship like you would not believe. </p>



<p>The point is simple, as a believer, choosing to represent who Jesus is to the world would influence everything you do. That spells maturity and once your parents discern that, you basically earn their trust. </p>



<p>And so, commit to being an example from the word, don’t spend your day on frivolous activities, it’s not Christlike, don’t be wasteful, it’s not Christlike, learn honor and respect, in your devotion and ministry, let them see your passion for God and His work, let your life bear fruit, and men would see it. Your parents are not excluded from this. </p>



<p class="has-text-align-center"><strong><em>1Ti 4:12 &#8211; Let no one despise your youth, but be an example to the believers in word, in conduct, in love, in spirit, in faith, in purity.</em></strong></p>



<h4>|| <strong>Take good notes</strong></h4>



<p>Studies have shown that ultimately, many people, no matter how much they have complained, end up turning out to be just like their parents. It would be pointless to have lived through the mistakes of your parents only for you to continue the tradition. </p>



<p>So, take notes and consciously work on becoming a better parent than yours were. Whether it is outbursts of anger, neglect, poor communication etc., learn from the mistakes your parents possibly made and decide not to repeat them when your turn comes. </p>



<h4>|| <strong>When all else fails, prayerfully endure with patience.</strong></h4>



<p>Now, you may have read all that I’ve said up to this point and be thinking to yourself, “I’ve done all you’ve asked me to do, my parents are simply a lost cause.”. And for some of you, that may be the truth. Here is my final advice to you: endure.</p><p>At the end of the day, you won’t be a child living with your parents forever. You’d still go back to school once this pandemic lightens, you’d soon start working, you’d move out of the house eventually. Let this comfort you. </p><p>Keep praying for your parents, continue to honour them, believe the best of them, love them and radiate Christ in your home.</p><p>More often than not, time and love would transform even the hardest of hearts and even if they don’t change, you won’t be there forever. More so, you’d have learnt more than words could ever teach, what it means to walk in love. You still win. </p><h3>Conclusion:</h3><p>At the end of the day, despite all the disputes and “fights” that may have happened growing up, almost everyone, saved or not, still looks back with love and adoration for their parents (especially when they start having kids and realize it wasn’t as easy as they thought). Few, if any, celebrate when they’re gone. So, think long term and make the most of the parental relationship you’ve received. <br>God bless you.  </p></div>`
    };
  },
  computed: {
    pageId() {
      return this.$route.params.id;
    }
  },
  methods: {
    goToBlog(id) {
      this.$router.replace({
        name: "main.blog.detail",
        params: { id: id }
      });
    },
    async getBlogPost() {
      let id = this.$route.params.id;
      await this.$store.dispatch("getBlogPostById", id).then(res => {
        this.post = res.data;
        this.prevPost = res.prev_blog;
        this.nextPost = res.next_blog;
        // console.log(data);
      });
    },
    async comment() {
      let id = this.$route.params.id;
      let body = {
        blog_id: id,
        name: this.name,
        email: this.email,
        body: this.body
      };
      await this.$store.dispatch("commentOnPost", body).then(() => {
        this.getBlogPost();
        this.email = "";
        this.name = "";
        this.body = "";
        // console.log(data);
      });
    }
  },
  watch: {
    pageId() {
      this.getBlogPost();
    }
  },
  async mounted() {
    this.getBlogPost();
  }
};
</script>

<style lang="scss" scoped>
// @media (min-width: 640px) {
.blog-image {
  height: 300px;
}
// }
@media (min-width: 640px) {
  .blog-image {
    height: 400px;
  }
}
@media (min-width: 1024px) {
  .blog-image {
    height: 500px;
  }
}

@media (min-width: 1280px) {
  .blog-image {
    height: 500px;
  }
}
//   height: 500px;
</style>