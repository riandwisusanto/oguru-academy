<template>
    <main>

        <!-- page title area start -->
        <section class="page__title-area page__title-height page__title-overlay d-flex align-items-center" data-background="assets/img/page-title/page-title-2.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="page__title-wrapper mt-110">
                            <h3 class="page__title">Registration</h3>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Registration</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- page title area end -->

        <!-- coupon-area start -->
        <section class="coupon-area pt-100 pb-30">

        </section>
        <!-- coupon-area end -->

        <!-- checkout-area start -->
        <section class="checkout-area pb-70">
            <div class="container">
                <form action="#">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="checkbox-form">
                                <h3>Registration</h3>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Nama Lengkap <span class="required">*</span></label>
                                            <input type="text" placeholder="" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Nomor HP / WA <span class="required">*</span></label>
                                            <input type="text" placeholder="" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Email Address <span class="required">*</span></label>
                                            <input type="email" placeholder="" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Instansi <span class="required">*</span></label>
                                            <input type="text" placeholder="" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Kota Asal <span class="required">*</span></label>
                                            <input type="text" placeholder="" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="country-select">
                                            <label>Tipe Diklat <span class="required">*</span></label>
                                            <select>
                                                <option value="1">Batch 1 (Tips Percaya Diri Menguasai Grogi Berbicara dan Personal Branding)</option>
                                                <option value="2">Batch 2 (Tips Praktik MC dan Pemandu Acara)</option>
                                                <option value="3">Utama (Batch 1 & Batch 2)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Harga</label>
                                            <input type="text" placeholder="" disabled/>
                                        </div>
                                    </div> 
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Bukti Sreenshoot Grup Whatsapp <span class="required">*</span></label>
                                            <input type="file" class="form-control"/>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Bukti Sreenshoot Pembayaran <span class="required">*</span></label>
                                            <input type="file" class="form-control"/>
                                        </div>
                                    </div>
                                    <div class="order-notes">
                                        <div class="checkout-form-list">
                                            <label>Notes (Opsional)</label>
                                            <textarea id="checkout-mess" cols="30" rows="10"
                                                      placeholder=""></textarea>
                                        </div>
                                    </div>
                                    <div class="order-button-payment mt-20">
                                        <button type="submit" class="e-btn e-btn-border">Submit <i class="far fa-check"></i> </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <!-- checkout-area end -->


    </main>
</template>

<script>
export default {
    name: "Index"
}
</script>

<style scoped>

</style>
