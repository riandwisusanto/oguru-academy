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
                            <div class="about__thumb ml-100">
                                <img src="assets/img/about/about.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                        <div class="about__content pl-70 pr-60">
                            <div class="section__title-wrapper mb-25">
                                <h2 class="section__title">Platform Belajar <br><span class="yellow-bg-big">Seumur Hidup <img src="assets/img/shape/yellow-bg-2.png" alt=""></span>  Dengan Oguru </h2>
                                <p style="text-align: justify;">
                                    OGURU ACADEMY MERUPAKAN LEMBAGA PENDIDIKAN DAN PELATIHAN YANG MEMBERIKAN BERAGAM FASILITAS UNTUK MENUNJANG KOMPETENSI AKADEMIK DAN NON AKADEMIK BAIK CALON GURU, GURU, MAUPUN PELAKU PENDIDIKAN LAINNYA <br><br>
                                    Kami telah memiliki badan hukum dengan SK Menkumham No. AHU-0012324-AH.01.14     Tahun 2021 dan Kode Klasifikasi Baku Lapangan Usaha Indonesia yakni 85499 serta Nomor Proyek yakni 202102-1310-3151-4334-233. Dengan Akta Notaris Herman Soesilo, S.H. No. 155 Tanggal 9 Februari 2021
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-12 col-xl-12 col-lg-12">
                        <div class="about__content pl-70 pr-60">
                            <p style="text-align: justify;">
                                Kami memberikan solusi terpadu melalui platform edukasi berbasis teknologi yang menghubungkan Mahasiswa Oguru Academy kepada instruktur pilihan untuk memberikan berbagai kelas pendampingan, peningkatkan keterampilan agar mendapatkan kebutuhan keilmuan, pengetahuan, literasi (Bahkan) apa pun secara online. <br><br>
                                Kami menawarkan para instruktur dan pakar praktisi ilmu untuk memberikan informasi keilmuan dan pengetahuan secara langsung atau melalui kelas online kepada jutaan peserta di seluruh indonesia. <br><br>
                                Kami sangat ingin menyambut anda dari setiap disiplin dan budaya yang mencari pemahaman yang lebih dalam tentang keilmuan dan pengetahuan. Kami sangat percaya pada kekuatan keilmuan dan pengetahuan untuk mengubah sikap, kehidupan anda. Di Oguru Academy, kami membangun pelayanan one stop service dalam pengembangan diri (kompetensi) peserta/mahasiswa. <br><br>
                                Lahir di akhir 2019 yakni bertepat pada tanggal 12 Desember 2019 sebagai sebuah platform yang awalnya ingin menghubungkan orang tua dan murid dengan guru-guru, Oguru Academy kemudian berkembang menjadi lembaga yang memudahkan para pembelajar mendapatkan pelayanan, bimbingan, pendampingan yang sudah terintegrasi dalam satu pintu di www.oguru.id <br><br>
                                Misi kami adalah untuk menjadi lembaga bagi calon guru, guru, maupun pelaku pendidikan lainnya di indonesia dan menjadikan  belajar serta berbagi keilmuan dan pengetahuan sebagai gaya hidup yang menginspirasi dan tersedia bagi siapa saja. <br><br>
                            </p>
                            <h4>Izinkan kami untuk memperkenalkan Anda ke beberapa kategori kelas popular kami: </h4>
                            <div class="about__list mb-35">
                                <ul>
                                    <li class="d-flex align-items-center"> <i class="icon_check"></i> Kelas Sertifikasi Profesi</li>
                                    <li class="d-flex align-items-center"> <i class="icon_check"></i> Kelas Diklat</li>
                                    <li class="d-flex align-items-center"> <i class="icon_check"></i> Kelas Webinar</li>
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
