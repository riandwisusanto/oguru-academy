<template>
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Add your site or application content here -->

    <main>

        <!-- page title area start -->
        <section class="page__title-area pt-120 pb-90">
            <div class="row col-12 p-lg-5 justify-content-center">
                <div class="card card-header">
                    <div class="row col-12 p-3">
                        <div class="col-10 mt-2">
                            <h4><i class="fad fa-arrow-left"></i> Belajar HTML Fundamental</h4>
                        </div>
                        <div class="col-2 text-end">
                            <button id="openbtn" class="btn btn-primary" @click.prevent="openNav()"><i class="fad fa-list"></i> </button>
                        </div>
                    </div>
                </div>
                <div id="content" class="col-9 col-12 p-5 border">

                    <div v-if="activetab === 1" class="tabcontent">
                        <h4>
                            Prasyarat Kemampuan 1
                        </h4>
                        <p>
                            Tidak ada persyaratan kemampuan untuk mengikuti materi ini. Yang terpenting adalah Anda harus bisa belajar mandiri, berkomitmen, benar-benar punya rasa ingin tahu, dan tertarik pada subjek materi, karena sebaik apa pun materi yang akan dipelajari, tidak akan berguna tanpa keseriusan Anda untuk belajar, berlatih, dan mencoba.
                        </p>
                    </div>
                    <div v-if="activetab === 2" class="tabcontent">
                        <h4>
                            Prasyarat Kemampuan 2
                        </h4>
                        <p>
                            Tidak ada persyaratan kemampuan untuk mengikuti materi ini. Yang terpenting adalah Anda harus bisa belajar mandiri, berkomitmen, benar-benar punya rasa ingin tahu, dan tertarik pada subjek materi, karena sebaik apa pun materi yang akan dipelajari, tidak akan berguna tanpa keseriusan Anda untuk belajar, berlatih, dan mencoba.
                            Tidak ada persyaratan kemampuan untuk mengikuti materi ini. Yang terpenting adalah Anda harus bisa belajar mandiri, berkomitmen, benar-benar punya rasa ingin tahu, dan tertarik pada subjek materi, karena sebaik apa pun materi yang akan dipelajari, tidak akan berguna tanpa keseriusan Anda untuk belajar, berlatih, dan mencoba.
                        </p>
                    </div>
                    <div v-if="activetab === 3" class="tabcontent">
                        <h4>
                            Prasyarat Kemampuan 3
                        </h4>
                        <p>
                            Tidak ada persyaratan kemampuan untuk mengikuti materi ini. Yang terpenting adalah Anda harus bisa belajar mandiri, berkomitmen, benar-benar punya rasa ingin tahu, dan tertarik pada subjek materi, karena sebaik apa pun materi yang akan dipelajari, tidak akan berguna tanpa keseriusan Anda untuk belajar, berlatih, dan mencoba.
                        </p>
                    </div>

                </div>
                <div id="mySidebar" class="col-3 p-3 text-end border d-none">
                    <div class="row col-12">
                        <div class="col-6 text-start">
                            <a class="btn btn-secondary" href="javascript:void(0)" @click.prevent="closeNav()"><i class="fad fa-arrow-right"></i></a>
                        </div>
                        <div class="col-6">
                            <h3>Daftar Modul</h3>
                        </div>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <button class="btn" v-on:click="activetab=1" v-bind:class="[ activetab === 1 ? 'active' : '' ]">Tab 1</button>
                        </li>
                        <li class="list-group-item">
                            <button class="btn" v-on:click="activetab=2" v-bind:class="[ activetab === 2 ? 'active' : '' ]">Tab 2</button>
                        </li>
                        <li class="list-group-item">
                            <button class="btn" v-on:click="activetab=3" v-bind:class="[ activetab === 3 ? 'active' : '' ]">Tab 3</button>
                        </li>
                    </ul>
                </div>


                <div class="card card-footer col-12 p-3 text-center border">
                   <div class="row">
                       <div class="col-2">
                           <button class="btn text-primary" v-on:click="activetab = activetab-1"> <i class="fad fa-arrow-left"></i></button>
                       </div>
                       <div class="col-8">
                           <h4>Persyaratan Kemampuan</h4>
                       </div>
                       <div class="col-2">
                          <button class="btn text-primary" v-on:click="activetab = activetab+1"> <i class="fad fa-arrow-right"></i></button>
                       </div>
                   </div>
                </div>
            </div>
        </section>
        <!-- page title area end -->


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
                                <a href="contact.html" class="e-btn e-btn-white">Get Started</a>
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
import Header from "@/component/Header.vue";

export default {
    name: 'Class',
    components : {
        Header
    },
    data(){
        return{
            course: [],
            id:'',
            outcomes:'',
            requirements:'',
            activetab: 1,
            screenWidth: 0,
        }
    },
    mounted(){
        this.updateScreenWidth();
        this.onScreenResize();
    },

    methods: {
        currency(value) {
            let val = (value/1).toFixed(2).replace('.', ',')
            return val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".")
        },

        async bootstrap() {
            await this.fetchCourse();
        },

        async fetchCourse(){
            let endpoint = `${BASEURL}/api/course/${this.id}`;
            let response = await axios.get(endpoint)
            this.course = response.data.data
            this.outcomes = JSON.parse(this.course.outcomes)
            this.requirements = JSON.parse(this.course.requirements)
        },

        openNav(){
            // Sidebar
            // document.getElementById("mySidebar").style.width = "100%";
            if (this.screenWidth > 500){
                document.getElementById("mySidebar").classList.add('col-3');
                document.getElementById("mySidebar").style.display = "block";
                document.getElementById("mySidebar").style.zIndex = "9999";
                document.getElementById("mySidebar").classList.remove('d-none');

                document.getElementById("openbtn").style.visibility = "hidden";
                document.getElementById("content").classList.remove('col-12');
            }
            else {
                document.getElementById("mySidebar").classList.remove('d-none');
                document.getElementById("mySidebar").classList.add('col-12');
                document.getElementById("mySidebar").style.display = "block";
                document.getElementById("mySidebar").style.zIndex = "9999";
                document.getElementById("openbtn").style.visibility = "hidden";
                document.getElementById("content").classList.add('d-none');
            }

        },

        closeNav(){
            // Sidebar
            if (this.screenWidth > 500) {
                document.getElementById("mySidebar").style.display = "none";
                document.getElementById("openbtn").style.visibility = "";
                document.getElementById("content").classList.add('col-12');
            }
            else {
                document.getElementById("mySidebar").style.display = "none";
                document.getElementById("mySidebar").style.zIndex = "-1";
                document.getElementById("openbtn").style.visibility = "";
                document.getElementById("mySidebar").classList.add('d-none');
                document.getElementById("content").classList.remove('d-none');
                document.getElementById("content").classList.add('col-12');
            }


            this.keywords = '';
        },

        onScreenResize() {
            window.addEventListener("resize", () => {
                this.updateScreenWidth();
            });
        },
        updateScreenWidth() {
            this.screenWidth = window.innerWidth;
        },
    }
}


</script>

<style scoped>

</style>
