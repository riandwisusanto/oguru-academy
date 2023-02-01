<template>
<!--        &lt;!&ndash;[if lte IE 9]>-->
<!--        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>-->
<!--        <![endif]&ndash;&gt;-->

    <!-- Add your site or application content here -->

<!--<Header/>-->

    <main>

        <!-- hero area start -->
        <section class="hero__area hero__height d-flex align-items-center grey-bg-2 p-relative">
            <div class="hero__shape">
                <img class="hero-1-circle" src="assets/img/shape/hero/hero-1-circle.png" alt="">
                <img class="hero-1-circle-2" src="assets/img/shape/hero/hero-1-circle-2.png" alt="">
                <img class="hero-1-dot-2" src="assets/img/shape/hero/hero-1-dot-2.png" alt="">
            </div>
            <div class="container">
                <div class="hero__content-wrapper mt-90">
                    <div class="row align-items-center">
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                            <div class="hero__content p-relative z-index-1">
                                <h3 class="hero__title">
                                    <span>Oguru</span>
                                    <span class="yellow-shape">Learn <img src="assets/img/shape/yellow-bg.png" alt="yellow-shape"> </span>
                                    on your schedule</h3>
                                <p>Study any topic, anytime. Explore thousands of courses for the lowest price ever!</p>
                                <a href="/course" class="e-btn">view all course</a>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                            <div class="hero__thumb d-flex p-relative">
                                <div class="hero__thumb-shape">
                                    <img class="hero-1-dot" src="assets/img/shape/hero/hero-1-dot.png" alt="">
                                    <img class="hero-1-circle-3" src="assets/img/shape/hero/hero-1-circle-3.png" alt="">
                                    <img class="hero-1-circle-4" src="assets/img/shape/hero/hero-1-circle-4.png" alt="">
                                </div>
                                <div class="hero__thumb-big mr-30">
                                    <img src="assets/img/hero/hero-1.jpg" alt="">
                                    <div class="hero__quote hero__quote-animation">
                                        <span>Tempat Belajar Terbaik</span>
                                        <h4>Belajar Bersama Guru Bangsa</h4>
                                    </div>
                                </div>
                                <div class="hero__thumb-sm mt-50 d-none d-lg-block">
                                    <img src="assets/img/hero/hero-sm-1.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- hero area end -->

        <!-- category area start -->
        <section class="category__area pt-120 pb-70">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-8">
                        <div class="section__title-wrapper mb-45">
                            <h2 class="section__title">Explore <br>Our <span class="yellow-bg">Popular <img src="assets/img/shape/yellow-bg-2.png" alt="">  </span>Courses
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div v-for="(category, index) in collections.category" :key="index" class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="category__item mb-30 transition-3 d-flex align-items-center">
                            <div class="category__icon mr-30">
                                <span :class="category.icon"></span>
                            </div>
                            <div class="category__content">
                                <h4 class="category__title"><a href="#">{{ category.name }}</a></h4>
                                <!-- <p>Data is Everything</p> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- category area end -->

        <!-- course area start -->
        <section class="course__area pt-115 pb-120 grey-bg">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-xxl-5 col-xl-6 col-lg-6">
                        <div class="section__title-wrapper mb-60">
                            <h2 class="section__title">Find the Right<br>Online <span class="yellow-bg yellow-bg-big">Course<img src="assets/img/shape/yellow-bg.png" alt=""></span> for you</h2>
                            <p>You don't have to struggle alone, you've got our assistance and help.</p>
                        </div>
                    </div>
                </div>
                <div class="row grid">
                    <div v-for="(course, index) in collections.course" :key="index"  class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 grid-item cat1 cat2 cat4">
                        <div class="course__item white-bg mb-30 fix">
                            <div class="course__thumb w-img p-relative fix">
                                <a href="#">
                                    <router-link :to="'/course/' + course.id">
                                        <img :src="'storage/courses/'+ course.id + '.jpg'" alt="">
                                    </router-link>
                                </a>
                                <div class="course__tag">
                                    <a href="#">
                                        <router-link :to="'/course/' + course.id">
                                            {{ course.category.name }}
                                        </router-link>
                                    </a>
                                </div>
                            </div>
                            <div class="course__content">
                                <div class="course__meta d-flex align-items-center justify-content-between">
                                    <div class="course__lesson">
                                        <span><i class="far fa-book-alt"></i>{{ course.lessons.length }} Lesson</span>
                                    </div>
                                    <div class="course__rating">
                                        <span><i class="icon_star"></i>0 (0)</span>
                                    </div>
                                </div>
                                <h3 class="course__title"><a href="#">{{ course.title  }}</a></h3>
                                <div class="course__teacher d-flex align-items-center">
                                    <div class="course__teacher-thumb mr-15">
                                        <img :src="'storage/users/'+ course.user.id + '.jpg'" alt="">
                                    </div>
                                    <h6><a href="instructor-details.html">{{ course.user.name }}</a></h6>
                                </div>
                            </div>
                            <div class="course__more d-flex justify-content-between align-items-center">
                                <div class="course__status">
                                    <span v-if="course.is_free == 1">Free</span>
                                    <span v-else>Rp. {{ currency(course.price) }}</span>
                                </div>
                                <div class="course__btn">
                                    <a href="" class="link-btn">
                                        <router-link :to="'/course/' + course.id">
                                            Know Details
                                        </router-link>
                                        <i class="far fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- course area end -->

        <!-- pricing area start -->
        <section class="price__area pt-60 pb-130">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-4 offset-xxl-4">
                        <div class="section__title-wrapper mb-60 text-center">
                            <h2 class="section__title">Our  <span class="yellow-bg yellow-bg-big">Partners<img src="assets/img/shape/yellow-bg.png" alt=""></span></h2>
                            <p>No contracts. No surprise fees.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-10 offset-xxl-1 col-xl-10 offset-xl-1 col-lg-10 offset-lg-1">
                        <div class="price__tab-content">
                            <a v-for="(partner, index) in collections.partner" :key="index" :href="partner.source" target="_blank"><img class="m-4" style="max-height: 100px" :src="'storage/mitras/'+partner.id+'.jpg'"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- pricing area end -->

        <!-- cta area start -->
        <section class="cta__area mb--120">
            <div class="container">
                <div class="cta__inner blue-bg fix">
                    <div class="cta__shape">
                        <img src="assets/img/cta/cta-shape.png" alt="">
                    </div>
                    <div class="row align-items-center">
                        <div class="col-xxl-7 col-xl-7 col-lg-8 col-md-8">
                            <div class="cta__content">
                                <h3 class="cta__title">You can be your own Guiding star with our help</h3>
                            </div>
                        </div>
                        <div class="col-xxl-5 col-xl-5 col-lg-4 col-md-4">
                            <div class="cta__more d-md-flex justify-content-end p-relative z-index-1">
                                <a href="#" class="e-btn e-btn-white">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- cta area end -->

    </main>

    <!-- footer area start -->
</template>

<script>
window.BASEURL=''
import Header from '../component/Header.vue'
export default {
    name: 'Home',
    components : {
        Header
    },
    data(){
      return{
          collections: {
              course: [],
              partner: [],
              category: [],
          },
      }
    },
    async mounted(){
      await this.bootstrap();
    },

    methods: {
        currency(value) {
            let val = (value/1).toFixed(2).replace('.', ',')
            return val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".")
        },

        async bootstrap() {
            await this.fetchCourse();
            await this.fetchCategory();
            await this.fetchPartner();
        },

        async fetchCourse(){
            let endpoint = `${BASEURL}/api/course/latest`;
            let response = await axios.get(endpoint)
            this.collections.course = response.data.data
        },
        async fetchCategory(){
            let endpoint = `${BASEURL}/api/category`;
            let response = await axios.get(endpoint)
            this.collections.category = response.data.data
        },
        async fetchPartner(){
            let endpoint = `${BASEURL}/api/mitra`;
            let response = await axios.get(endpoint)
            this.collections.partner = response.data.data
        },
    }
}
</script>
<style scoped>

</style>
