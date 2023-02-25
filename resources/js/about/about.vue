<template>
    <main>

        <!-- page title area start -->
        <section class="page__title-area page__title-height page__title-overlay d-flex align-items-center" style="background: url('assets/img/page-title/page-title-2.jpg')" data-background="assets/img/page-title/page-title-2.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="page__title-wrapper mt-110">
                            <h3 class="page__title">About</h3>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">About</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- page title area end -->

        <!-- about area start -->
        <section class="about__area pt-120 pb-150">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-5 offset-xxl-1 col-xl-6 col-lg-6">
                        <div class="about__thumb-wrapper">

                            <!-- <div class="about__review">
                                <h5> <span>8,200+</span> five ster reviews</h5>
                            </div> -->
                            <div class="about__thumb ml-100">
                                <img src="assets/img/about/about.jpg" alt="">
                            </div>
                            <!-- <div class="about__banner mt--210">
                                <img src="assets/img/about/about-banner.jpg" alt="">
                            </div> -->
                            <!-- <div class="about__student ml-270 mt--80">
                                <a href="#">
                                    <img src="assets/img/about/student-4.jpg" alt="">
                                    <img src="assets/img/about/student-3.jpg" alt="">
                                    <img src="assets/img/about/student-2.jpg" alt="">
                                    <img src="assets/img/about/student-1.jpg" alt="">
                                </a>
                                <p>Join over <span>4,000+</span> students</p>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                        <div class="about__content pl-70 pr-60 pt-25">
                            <div class="section__title-wrapper mb-25">
                                <h2 class="section__title">Platform Belajar <br><span class="yellow-bg-big">Seumur Hidup <img src="assets/img/shape/yellow-bg-2.png" alt=""></span>  Dengan Oguru </h2>
                                <p>Oguru Indonesia adalah platform edukasi berbasis teknologi yang menghubungkan instruktur guru kepada guru untuk memberikan berbagai kelas
                                    pendampingan, peningkatan keterampilan bagi guru agar bisa mendapatkan kebutuhan  keilmuan, pengetahuan, literasi (Bahkan) apa pun secara online.</p>
                                <p>Lahir di akhir tahun 2019 sebagai sebuah platform yang awalnya ingin menghubungkan guru dan instruktur guru, Oguru Indonesia kemudian berkembang
                                    menjadi platform yang tidak hanya memberikan kelas-kelas pendidikan dan pelatihan tapi juga layanan toko agar bisa mendapatkan kebutuhan literasi
                                    (Bahkan) apa pun secara mudah dan cepat.</p>
                                <b>Misi kami adalah untuk menjadi platform bagi guru-guru indonesia dan menjadikan belajar serta berbagi
                                    pengetahuan sebagai gaya hidup yang menginspirasi dan tersedia bagi siapa saja.</b>
                            </div>
                            <!-- <a href="contact.html" class="e-btn e-btn-border">apply now</a> -->
                        </div>
                    </div>
                    <div class="col-xxl-12 col-xl-12 col-lg-12">
                        <div class="about__content pl-70 pr-60 pt-25">
                            <h3>Izinkan kami untuk memperkenalkan Anda ke beberapa kategori layanan popular kami:</h3>
                            <h4>Layanan Oclass</h4>
                            <div class="about__list mb-35">
                                <ul>
                                    <li class="d-flex align-items-center"> <i class="icon_check"></i> Bahasa</li>
                                    <li class="d-flex align-items-center"> <i class="icon_check"></i> Foto dan Vidiografi</li>
                                    <li class="d-flex align-items-center"> <i class="icon_check"></i> Psikologi</li>
                                    <li class="d-flex align-items-center"> <i class="icon_check"></i> Teknologi</li>
                                    <li class="d-flex align-items-center"> <i class="icon_check"></i> Manajemen dan Bisnis</li>
                                    <li class="d-flex align-items-center"> <i class="icon_check"></i> Pengembangan Diri</li>
                                </ul>
                            </div>

                            <h4>Layanan Ovidi</h4>
                            <div class="about__list mb-35">
                                <ul>
                                    <li class="d-flex align-items-center"> <i class="icon_check"></i> Bahasa</li>
                                    <li class="d-flex align-items-center"> <i class="icon_check"></i> Foto dan Vidiografi</li>
                                    <li class="d-flex align-items-center"> <i class="icon_check"></i> Psikologi</li>
                                    <li class="d-flex align-items-center"> <i class="icon_check"></i> Teknologi</li>
                                    <li class="d-flex align-items-center"> <i class="icon_check"></i> Manajemen dan Bisnis</li>
                                    <li class="d-flex align-items-center"> <i class="icon_check"></i> Pengembangan Diri</li>
                                </ul>
                            </div>

                            <h4>Layanan Ostore</h4>
                            <div class="about__list mb-35">
                                <ul>
                                    <li class="d-flex align-items-center"> <i class="icon_check"></i> Tas</li>
                                    <li class="d-flex align-items-center"> <i class="icon_check"></i> Pakaian</li>
                                    <li class="d-flex align-items-center"> <i class="icon_check"></i> Sepatu</li>
                                    <li class="d-flex align-items-center"> <i class="icon_check"></i> Kaos Kaki</li>
                                    <li class="d-flex align-items-center"> <i class="icon_check"></i> Aksesoris</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about area end -->
    </main>
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
