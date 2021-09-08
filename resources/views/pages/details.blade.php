@extends('layouts.app')

@section('title')
    Store Product Details
@endsection

@section('content')
<!-- Page Content -->
    <div class="page-content page-detail">
      <section
        class="store-breadcrumbs"
        data-aos="fade-down"
        data-aos-delay="100"
      >
        <div class="container">
          <div class="row">
            <div class="col-12">
              <nav>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="/index.html">Home</a>
                  </li>
                  <li class="breadcrumb-item active">Product Details</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </section>

      <section class="store-gallery" id="gallery">
        <div class="container">
          <div class="row">
            <div class="col-lg-8" data-aos="zoom-in">
              <!-- vuejs
                  data binding -->
              <transition name="slide-fade" mode="out-in">
                <!-- mengambil img dari photos menggunakan array activePhotoss  -->
                <img
                  :src="photos[activePhotos].url"
                  :key="photos[activePhotos].id"
                  class="w-100 main-image"
                  alt=""
                />
              </transition>
            </div>
            <div class="col-lg-2">
              <div class="row">
                <div
                  class="col-3 col-lg-12 mt-12 mt-lg-0"
                  v-for="(photo, index) in photos"
                  :key="photo.id"
                  data-aos="zoom-in"
                  data-aos-delay="100"
                >
                  <a href="#" @click="changeActive(index)">
                    <img
                      :src="photo.url"
                      class="w-100 thumbnail-image"
                      :class="{active: index == activePhotos}"
                      alt=""
                    />
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <div class="store-details-container" data-aos="fade-up">
        <section class="store-heading">
          <div class="container">
            <div class="row">
              <div class="col-lg-8">
                <h1>Sofa Maurice 2</h1>
                <div class="owner">by Candra Kirana</div>
                <div class="price">Rp.9.999.999</div>
              </div>
              <div class="col-lg-2" data-aos="zoom-in">
                <a
                  href="/cart.html"
                  class="btn btn-success px-4 text-white btn-block md-3"
                  >Add To Cart</a
                >
              </div>
            </div>
          </div>
        </section>
        <section class="store-description">
          <div class="container">
            <div class="row">
              <div class="col-12 col-lg-8">
                <p>
                  The Nike Air Max 720 SE goes bigger than ever before with
                  Nike's tallest Air unit yet for unimaginable, all-day comfort.
                  There's super breathable fabrics on the upper, while colours
                  add a modern edge.
                </p>
                <p>
                  Bring the past into the future with the Nike Air Max 2090, a
                  bold look inspired by the DNA of the iconic Air Max 90.
                  Brand-new Nike Air cushioning underfoot adds unparalleled
                  comfort while transparent mesh and vibrantly coloured details
                  on the upper are blended with timeless OG features for an
                  edgy, modernised look.
                </p>
              </div>
            </div>
          </div>
        </section>
        <section class="store-review">
          <div class="container">
            <div class="row">
              <div class="col-12 col-lg-8 mt-3 mb-3">
                <h5>Customer Review (3)</h5>
              </div>
            </div>
            <div class="row">
              <div class="col-12 col-lg-8">
                <ul class="list-unstyled">
                  <li class="media">
                    <img
                      src="/images/icons-testimonial-1.png"
                      class="mr-3 rounded-circle"
                      alt=""
                    />
                    <div class="media-body">
                      <h5 class="mt-2 mb-1">Hazza Rizky</h5>
                      <p>
                        I thought it was not good for living room. I really
                        happy to decided buy this product last week now feels
                        like homey.
                      </p>
                    </div>
                  </li>
                  <li class="media">
                    <img
                      src="/images/icons-testimonial-2.png"
                      class="mr-3 rounded-circle"
                      alt=""
                    />
                    <div class="media-body">
                      <h5 class="mt-2 mb-1">Anna Sukkirata</h5>
                      <p>
                        I thought it was not good for living room. I really
                        happy to decided buy this product last week now feels
                        like homey.
                      </p>
                    </div>
                  </li>
                  <li class="media">
                    <img
                      src="/images/icons-testimonial-3.png"
                      class="mr-3 rounded-circle"
                      alt=""
                    />
                    <div class="media-body">
                      <h5 class="mt-2 mb-1">Roses Anelstra</h5>
                      <p>
                        I thought it was not good for living room. I really
                        happy to decided buy this product last week now feels
                        like homey.
                      </p>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
@endsection

@push('addon-script')
    <script src="/vendor/vue/vue.js"></script>
    <script>
      var gallery = new Vue({
        // mengambil id
        el: "#gallery",
        // mounted is a script Vue yang akan dijalankan saat muncul
        // menambahkan animasi dari AOS, supaya animasinya muncul
        mounted() {
          AOS.init();
        },
        data: {
          activePhotos: 3,
          photos: [
            {
              id: 1,
              url: "/images/product-details-1.jpg",
            },
            {
              id: 2,
              url: "/images/product-details-2.jpg",
            },
            {
              id: 3,
              url: "/images/product-details-3.jpg",
            },
            {
              id: 4,
              url: "/images/product-details-4.jpg",
            },
          ],
        },
        methods: {
          changeActive(id) {
            this.activePhotos = id;
          },
        },
      });
    </script>
@endpush
