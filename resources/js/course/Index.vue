<template>
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <main>

        <!-- page title area start -->
        <section class="page__title-area page__title-height page__title-overlay d-flex align-items-center" data-background="assets/img/page-title/page-title.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="page__title-wrapper mt-110">
                            <h3 class="page__title">Courses</h3>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Courses</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- page title area end -->

        <!-- course area start -->
        <section class="course__area pt-120 pb-120">
            <div class="container">
                <div class="course__tab-inner grey-bg-2 mb-50">
                    <div class="row align-items-center">
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                            <div class="course__tab-wrapper d-flex align-items-center">
                                <div class="course__tab-btn">
                                    <ul class="nav nav-tabs" id="courseTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="grid-tab" data-bs-toggle="tab" data-bs-target="#grid" type="button" role="tab" aria-controls="grid" aria-selected="true">
                                                <svg class="grid" viewBox="0 0 24 24">
                                                    <rect x="3" y="3" class="st0" width="7" height="7"/>
                                                    <rect x="14" y="3" class="st0" width="7" height="7"/>
                                                    <rect x="14" y="14" class="st0" width="7" height="7"/>
                                                    <rect x="3" y="14" class="st0" width="7" height="7"/>
                                                </svg>
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link list" id="list-tab" data-bs-toggle="tab" data-bs-target="#list" type="button" role="tab" aria-controls="list" aria-selected="false">
                                                <svg class="list" viewBox="0 0 512 512">
                                                    <g id="Layer_2_1_">
                                                        <path class="st0" d="M448,69H192c-17.7,0-32,13.9-32,31s14.3,31,32,31h256c17.7,0,32-13.9,32-31S465.7,69,448,69z"/>
                                                        <circle class="st0" cx="64" cy="100" r="31"/>
                                                        <path class="st0" d="M448,225H192c-17.7,0-32,13.9-32,31s14.3,31,32,31h256c17.7,0,32-13.9,32-31S465.7,225,448,225z"/>
                                                        <circle class="st0" cx="64" cy="256" r="31"/>
                                                        <path class="st0" d="M448,381H192c-17.7,0-32,13.9-32,31s14.3,31,32,31h256c17.7,0,32-13.9,32-31S465.7,381,448,381z"/>
                                                        <circle class="st0" cx="64" cy="412" r="31"/>
                                                    </g>
                                                </svg>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="course__view">
                                    <h4>Showing 1 - 9 of 84</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                            <div class="course__sort d-flex justify-content-sm-end">
                                <div class="course__sort-inner">
                                    <select>
                                        <option>Default</option>
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                        <option>Option 4</option>
                                        <option>Option 5</option>
                                        <option>Option 6</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="course__tab-conent">
                            <div class="tab-content" id="courseTabContent">
                                <div class="tab-pane fade show active" id="grid" role="tabpanel" aria-labelledby="grid-tab">
                                    <div class="row">
                                        <div v-for="course in collections.course" class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 grid-item cat1 cat2 cat4">
                                            <div class="course__item white-bg mb-30 fix">
                                                <div class="course__thumb w-img p-relative fix">
                                                    <a href="course-details.html">
                                                        <img src="assets/img/course/course-1.jpg" alt="">
                                                    </a>
                                                    <div class="course__tag">
                                                        <a href="#">Art & Design</a>
                                                    </div>
                                                </div>
                                                <div class="course__content">
                                                    <div class="course__meta d-flex align-items-center justify-content-between">
                                                        <div class="course__lesson">
                                                            <span><i class="far fa-book-alt"></i>43 Lesson</span>
                                                        </div>
                                                        <div class="course__rating">
                                                            <span><i class="icon_star"></i>4.5 (44)</span>
                                                        </div>
                                                    </div>
                                                    <h3 class="course__title"><a href="course-details.html">{{ course.title  }}</a></h3>
                                                    <div class="course__teacher d-flex align-items-center">
                                                        <div class="course__teacher-thumb mr-15">
                                                            <img src="assets/img/course/teacher/teacher-1.jpg" alt="">
                                                        </div>
                                                        <h6><a href="instructor-details.html">Jim Séchen</a></h6>
                                                    </div>
                                                </div>
                                                <div class="course__more d-flex justify-content-between align-items-center">
                                                    <div class="course__status">
                                                        <span v-if="course.is_free == 1">Free</span>
                                                        <span v-else>Rp. {{ currency(course.price) }}</span>
                                                    </div>
                                                    <div class="course__btn">
                                                        <a href="course-details.html" class="link-btn">
                                                            Know Details
                                                            <i class="far fa-arrow-right"></i>
                                                            <i class="far fa-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="list" role="tabpanel" aria-labelledby="list-tab">
                                    <div class="row">
                                        <div v-for="course in collections.course" class="col-xxl-12">
                                            <div class="course__item white-bg mb-30 fix">
                                                <div class="row gx-0">
                                                    <div class="col-xxl-4 col-xl-4 col-lg-4">
                                                        <div class="course__thumb course__thumb-list w-img p-relative fix">
                                                            <a href="course-details.html">
                                                                <img src="assets/img/course/list/course-1.jpg" alt="">
                                                            </a>
                                                            <div class="course__tag">
                                                                <a href="#">Art & Design</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xxl-8 col-xl-8 col-lg-8">
                                                        <div class="course__right">
                                                            <div class="course__content course__content-3">
                                                                <div class="course__meta d-flex align-items-center">
                                                                    <div class="course__lesson mr-20">
                                                                        <span><i class="far fa-book-alt"></i>43 Lesson</span>
                                                                    </div>
                                                                    <div class="course__rating">
                                                                        <span><i class="icon_star"></i>4.5 (44)</span>
                                                                    </div>
                                                                </div>
                                                                <h3 class="course__title course__title-3">
                                                                    <a href="course-details.html">{{ course.title  }}</a>
                                                                </h3>
                                                                <div class="course__summary">
                                                                    <p v-html="course.desctiprions" style="max-height: 100px; overflow: hidden"></p>
                                                                </div>
                                                                <div class="course__teacher d-flex align-items-center">
                                                                    <div class="course__teacher-thumb mr-15">
                                                                        <img src="assets/img/course/teacher/teacher-1.jpg" alt="">
                                                                    </div>
                                                                    <h6><a href="instructor-details.html">Jim Séchen</a></h6>
                                                                </div>
                                                            </div>
                                                            <div class="course__more course__more-2 d-flex justify-content-between align-items-center">
                                                                <div class="course__status">
                                                                    <span v-if="course.is_free == 1">Free</span>
                                                                    <span v-else>Rp. {{ currency(course.price) }}</span>
                                                                </div>
                                                                <div class="course__btn">
                                                                    <a href="course-details.html" class="link-btn">
                                                                        Know Details
                                                                        <i class="far fa-arrow-right"></i>
                                                                        <i class="far fa-arrow-right"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="basic-pagination wow fadeInUp mt-30" data-wow-delay=".2s">
                            <ul class="d-flex align-items-center">
                                <li class="prev">
                                    <a href="course-grid.html" class="link-btn link-prev">
                                        Prev
                                        <i class="arrow_left"></i>
                                        <i class="arrow_left"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="course-grid.html">
                                        <span>1</span>
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="course-grid.html">
                                        <span>2</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="course-grid.html">
                                        <span>3</span>
                                    </a>
                                </li>
                                <li class="next">
                                    <a href="course-grid.html" class="link-btn">
                                        Next
                                        <i class="arrow_right"></i>
                                        <i class="arrow_right"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- course area end -->

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
    <footer>
        <div class="footer__area footer-bg">
            <div class="footer__top pt-190 pb-40">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                            <div class="footer__widget mb-50">
                                <div class="footer__widget-head mb-22">
                                    <div class="footer__logo">
                                        <a href="index.html">
                                            <img src="assets/img/logo/logo-2.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="footer__widget-body">
                                    <p>Great lesson ideas and lesson plans for ESL teachers! Educators can customize lesson plans to best.</p>

                                    <div class="footer__social">
                                        <ul>
                                            <li><a href="#"><i class="social_facebook"></i></a></li>
                                            <li><a href="#" class="tw"><i class="social_twitter"></i></a></li>
                                            <li><a href="#" class="pin"><i class="social_pinterest"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 offset-xxl-1 col-xl-2 offset-xl-1 col-lg-3 offset-lg-0 col-md-2 offset-md-1 col-sm-5 offset-sm-1">
                            <div class="footer__widget mb-50">
                                <div class="footer__widget-head mb-22">
                                    <h3 class="footer__widget-title">Company</h3>
                                </div>
                                <div class="footer__widget-body">
                                    <div class="footer__link">
                                        <ul>
                                            <li><a href="#">About</a></li>
                                            <li><a href="#">Courses</a></li>
                                            <li><a href="#">Events</a></li>
                                            <li><a href="#">Instructor</a></li>
                                            <li><a href="#">Career</a></li>
                                            <li><a href="#">Become a Teacher</a></li>
                                            <li><a href="#">Contact</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-xl-2 col-lg-2 offset-lg-0 col-md-3 offset-md-1 col-sm-6">
                            <div class="footer__widget mb-50">
                                <div class="footer__widget-head mb-22">
                                    <h3 class="footer__widget-title">Platform</h3>
                                </div>
                                <div class="footer__widget-body">
                                    <div class="footer__link">
                                        <ul>
                                            <li><a href="#">Browse Library</a></li>
                                            <li><a href="#">Library</a></li>
                                            <li><a href="#">Partners</a></li>
                                            <li><a href="#">News & Blogs</a></li>
                                            <li><a href="#">FAQs</a></li>
                                            <li><a href="#">Tutorials</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-5 col-sm-6">
                            <div class="footer__widget footer__pl-70 mb-50">
                                <div class="footer__widget-head mb-22">
                                    <h3 class="footer__widget-title">Subscribe</h3>
                                </div>
                                <div class="footer__widget-body">
                                    <div class="footer__subscribe">
                                        <form action="#">
                                            <div class="footer__subscribe-input mb-15">
                                                <input type="email" placeholder="Your email address">
                                                <button type="submit">
                                                    <i class="far fa-arrow-right"></i>
                                                    <i class="far fa-arrow-right"></i>
                                                </button>
                                            </div>
                                        </form>
                                        <p>Get the latest news and updates right at your inbox.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-12">
                            <div class="footer__copyright text-center">
                                <p>© 2022 Educal, All Rights Reserved. Design By <a href="index.html">Theme Pure</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
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
            let endpoint = `${BASEURL}/api/course`;
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
