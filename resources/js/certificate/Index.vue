<template>
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Add your site or application content here -->

    <main>

        <!-- page title area start -->
        <section class="page__title-area pt-120 pb-90">
            <div class="row col-12 justify-content-center" style="height: 70vh !important;">

                <div class="col-6 p-0" style="height: 70vh !important; padding: 0px !important; margin: 0px !important; position: absolute;" id="capture">
                    <img class="w-100" style="width: 50vw !important; position: absolute" src="assets/img/Sertifikat.jpg">
                    <h1 style="font-size: 2vw !important; position: absolute; top: 28vh; left: 51vh; transform: translate(-50%, -50%);">Amin Ma'ruf</h1>
                </div>

            </div>
            <div class="col-12 text-center mt-4">
                <button class="btn btn-success" v-on:click.prevent="mpdf()"><i class="fad fa-download"></i> Download</button>
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
// import pdfMake from "pdfmake/build/pdfmake";
import html2PDF from 'jspdf-html2canvas';
// import pdfFonts from "pdfmake/build/vfs_fonts";
import html2canvas from "html2canvas";
// pdfMake.vfs = pdfFonts.pdfMake.vfs;
export default {
    components: {
    },
    name: "Index",
    data(){
        return{
            certif:'',
        }
    },
    mounted() {
        this.mpdf();
    },

    methods: {
        async mpdf(){
            let endpoint = `${BASEURL}/api/certificate`;
            let response = await axios.get(endpoint)
            this.certif = response.data.data
            console.log('test')
        },

        gen(){
            // html2canvas(data).then((canvas) => {
            //     let imgWidth = 208;
            //     let pageHeight = 295;
            //     let imgHeight = canvas.height * imgWidth / canvas.width;
            //     let heightLeft = imgHeight;
            // });
            let page = document.getElementById('capture');
            html2PDF(page, {
                html2canvas: {
                    scale: 2,
                    dpi: 300,
                    letterRendering: true,
                    width: 960,
                    height: 678.5
                },
                jsPDF: {
                    unit: 'px',
                    format: 'a4',
                    orientation: 'landscape',
                    width: 960,
                    height: 678.5
                },
                imageType: 'image/jpeg',
                output: './pdf/generate.pdf'
            });
        }
    }
}
</script>

<style scoped>

</style>
