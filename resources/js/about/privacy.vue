<template>
    <main>

        <!-- page title area start -->
        <section class="page__title-area page__title-height page__title-overlay d-flex align-items-center" style="background: url('assets/img/page-title/page-title-2.jpg')" data-background="assets/img/page-title/page-title-2.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="page__title-wrapper mt-110">
                            <h3 class="page__title">Privacy</h3>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Privacy & Policy</li>
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
                    <div class="col-xxl-12 col-xl-12 col-lg-12">
                        <div class="about__content pl-70 pr-60 pt-25">
                            <h3>KEBIJAKAN PRIVASI</h3>
                            <p style="text-align: justify;">
                                Pengaturan mengenai Kebijakan Privasi berikut ini <b>(“Kebijakan Privasi”)</b> menggambarkan bagaimana Oguru Academy <b>(“Kami”)</b> menghargai serta melindungi data pribadi yang dimiliki oleh setiap pengguna atau pengunjung <b>(“Anda”)</b> yang mengakses situs Kami <b>(www.oguru.id)</b> maupun layanan digital lain yang disediakan dan dikelola oleh Kami <b>(“Platform/lembaga”)</b>.
                                <br><br>Dengan mengakses dan/atau menggunakan Platform, Anda (dan/atau calon guru/guru-guru/pelaku pendidikan/peserta lainnya apabila mengetahui dan memahami) dianggap telah mengetahui serta menyetujui Kebijakan Privasi yang merupakan bagian tidak terpisahkan dari Syarat dan Ketentuan Penggunaan Platform <b>(“Ketentuan Penggunaan”)</b>. Anda dengan ini memastikan dan menjamin bahwa setiap data yang diberikan adalah sah dan benar, dan Anda merupakan pihak yang memiliki hak atas pemberian data. Apabila dibutuhkan dengan alasan yang wajar, Anda setuju untuk memberikan bukti terkait keabsahan dan kebenaran data tersebut. Anda diwajibkan untuk mengajukan pembaruan data kepada Kami bila terjadi perubahan terhadap data yang Anda berikan sebelumnya. Anda juga memberikan persetujuan kepada Kami untuk memperoleh, menggunakan, menampilkan, mengumumkan, membuka, memproses, membuka akses, menyimpan, mengirim, memberikan, mengalihkan, mengelola, memusnahkan, serta melindungi <b>(“Penggunaan”)</b> data tersebut untuk keperluan tertentu sebagaimana diatur dalam Kebijakan Privasi dan Syarat Ketentuan Platform.
                                <br><br>Dengan memberikan persetujuan, Anda dianggap melepaskan hak atas klaim, kerugian, tuntutan, maupun gugatan yang mungkin terjadi atas Penggunaan data Anda dalam sistem Kami.
                                <br><b><u>A. DATA PRIBADI ANDA</u></b><br>
                                <i>Berdasarkan cara pengumpulannya, data Anda terbagi menjadi:</i>
                                <div class="about__list">
                                    <ul>
                                        <li class="d-flex align-items-center"> 
                                           <p>
                                                <b>1)	Data yang diserahkan oleh Anda</b>
                                                <br>Merupakan data yang diberikan oleh Anda saat mengisi formulir elektronik maupun berkorespondensi dengan Kami, yang termasuk namun tidak terbatas pada data yang diserahkan saat Anda:
                                                <br>a.	Membuat akun di Platform;
                                                <br>b.	Berlangganan layanan pada Platform;
                                                <br>c.	Menghubungi Kami, baik melalui telepon, email, situs, dan kontak lainnya yang tercantum pada Kebijakan Privasi ini;
                                                <br>d.	Mengisi survey maupun penilaian terkait layanan Platform, termasuk mengenai pelaksanaan Kelas;
                                                <br>e.	Mengikuti promosi maupun kompetisi yang terdapat pada Platform maupun media sosial lainnya yang dimiliki dan dikelola oleh Kami; dan
                                                <br>f.	Mempergunakan layanan pada Platform, seperti aktivitas pencarian dan pembelian Kelas, atau aktivitas lainnya yang membutuhkan akses pada data Anda.
                                                <br>Data yang diserahkan oleh Anda dalam aktivitas tersebut dapat meliputi nama pengguna (username), email, kata sandi (password), nomor telepon, alamat, deskripsi pribadi, foto, informasi finansial dan/atau perbankan, detil transaksi, serta data-data lainnya yang terkait dengan aktivitas di atas.

                                                <br><br>
                                                <b>2)	Data yang terekam</b>
                                                <br>Merupakan data yang dapat dikumpulkan oleh Kami saat Anda mengakses Platform, yang termasuk namun tidak terbatas pada :
                                                <br> a.	Informasi teknis, meliputi alamat protokol internet (IP Address), informasi log in, jenis dan versi browser yang digunakan, pengaturan zona waktu dan geo location secara real-time;
                                                <br> b.	Informasi kunjungan, meliputi waktu dari setiap aktivitas Anda di Platform, daftar lengkap URL yang dikunjungi, data catatan/log, produk yang anda lihat atau cari pada Platform, data transaksi, serta nomor telepon maupun alamat email yang digunakan untuk menghubungi tim Kami.

                                                <br><br>
                                                <b>3)	Data yang diterima dari sumber lain/pihak ketiga</b>
                                                <br>Merupakan data yang diperoleh dari pihak ketiga, seperti mitra Kami yang membantu Kami dalam mengembangkan layanan bagi Anda, para Instruktur/Pengajar Kelas yang tercantum dalam Platform Digital, penyedia layanan finansial, serta sumber data lainnya yang tersedia secara umum.
                                           </p>
                                        </li>
                                    </ul>
                                </div>
                                <b><u>A. PENGGUNAAN DATA</u></b><br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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
