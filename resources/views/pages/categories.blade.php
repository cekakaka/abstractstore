@extends('layouts.app')

@section('title')
    Store Category
@endsection

@section('content')

    <!-- page content -->
    <div class="page-content page-home">

      <!-- Page Categories -->
      <section class="store-trend-categories">
        <div class="container">
          <div class="row">
            <div class="col-12" data-aos="fade-up">
              <h5>All Categories</h5>
            </div>
          </div>
          <div class="row">
            <!-- Responsive
              col-6 = ukuran paling kecil
              col-3 = sedang
              col-2 = gede -->
            <div
              class="col-6 col-md-3 col-lg-2"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <a href="#" class="component-categories d-block">
                <div class="categories-image">
                  <img
                    src="images/categories-gadgets.svg"
                    alt="categories-gadgets"
                    class="w-100"
                  />
                  <p class="categories-text">Gadget</p>
                </div>
              </a>
            </div>
            <div
              class="col-6 col-md-3 col-lg-2"
              data-aos="fade-up"
              data-aos-delay="300"
            >
              <a href="#" class="component-categories d-block">
                <div class="categories-image">
                  <img
                    src="images/categories-furniture.svg"
                    alt="categories-furnitures"
                    class="w-100"
                  />
                  <p class="categories-text">Furniture</p>
                </div>
              </a>
            </div>
            <div
              class="col-6 col-md-3 col-lg-2"
              data-aos="fade-up"
              data-aos-delay="400"
            >
              <a href="#" class="component-categories d-block">
                <div class="categories-image">
                  <img
                    src="images/categories-makeup.svg"
                    alt="categories-make-up"
                    class="w-100"
                  />
                  <p class="categories-text">Make Up</p>
                </div>
              </a>
            </div>
            <div
              class="col-6 col-md-3 col-lg-2"
              data-aos="fade-up"
              data-aos-delay="400"
            >
              <a href="#" class="component-categories d-block">
                <div class="categories-image">
                  <img
                    src="images/categories-sneaker.svg"
                    alt="categories-sneaker"
                    class="w-100"
                  />
                  <p class="categories-text">Sneakers</p>
                </div>
              </a>
            </div>
            <div
              class="col-6 col-md-3 col-lg-2"
              data-aos="fade-up"
              data-aos-delay="600"
            >
              <a href="#" class="component-categories d-block">
                <div class="categories-image">
                  <img
                    src="images/categories-tools.svg"
                    alt="categories-tools"
                    class="w-100"
                  />
                  <p class="categories-text">Tools</p>
                </div>
              </a>
            </div>
            <div
              class="col-6 col-md-3 col-lg-2"
              data-aos="fade-up"
              data-aos-delay="700"
            >
              <a href="#" class="component-categories d-block">
                <div class="categories-image">
                  <img
                    src="images/categories-baby.svg"
                    alt="categories-baby"
                    class="w-100"
                  />
                  <p class="categories-text">Baby</p>
                </div>
              </a>
            </div>
          </div>
        </div>
      </section>

      <!-- Page New Product -->
      <section class="store-new-product">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h5>All Product</h5>
            </div>
          </div>
          <div class="row">
            <div
              class="col-6 col-mb-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <a href="/details.html" class="component-products d-block">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="
                      background-image: url('images/products-apple-watch.jpg');
                    "
                  ></div>
                </div>
                <div class="products-text">Apple Watch 4</div>
                <div class="products-price">Rp.4.999.999</div>
              </a>
            </div>
            <div
              class="col-6 col-mb-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <a href="/details.html" class="component-products d-block">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="
                      background-image: url('images/products-black-edition-nike.jpg');
                    "
                  ></div>
                </div>
                <div class="products-text">Nike Black Edition</div>
                <div class="products-price">Rp.2.399.999</div>
              </a>
            </div>
            <div
              class="col-6 col-mb-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <a href="/details.html" class="component-products d-block">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="
                      background-image: url('images/products-bubuk-maketti.jpg');
                    "
                  ></div>
                </div>
                <div class="products-text">Bubuk Maketti</div>
                <div class="products-price">Rp.1.249.999</div>
              </a>
            </div>
            <div
              class="col-6 col-mb-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <a href="/details.html" class="component-products d-block">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="
                      background-image: url('images/products-mavic-kawe.jpg');
                    "
                  ></div>
                </div>
                <div class="products-text">Mavic Kawwe</div>
                <div class="products-price">Rp.999.999</div>
              </a>
            </div>
            <div
              class="col-6 col-mb-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <a href="/details.html" class="component-products d-block">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="
                      background-image: url('images/products-monkey-toys.jpg');
                    "
                  ></div>
                </div>
                <div class="products-text">Monkey Boots</div>
                <div class="products-price">Rp.1.999.999</div>
              </a>
            </div>
            <div
              class="col-6 col-mb-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <a href="/details.html" class="component-products d-block">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="
                      background-image: url('images/products-orange-bogotta.jpg');
                    "
                  ></div>
                </div>
                <div class="products-text">Bogotta Orange</div>
                <div class="products-price">Rp.888.888</div>
              </a>
            </div>
            <div
              class="col-6 col-mb-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <a href="/details.html" class="component-products d-block">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="
                      background-image: url('images/products-sofa-ternyaman.jpg');
                    "
                  ></div>
                </div>
                <div class="products-text">Sofa Maurice 2</div>
                <div class="products-price">Rp.9.999.999</div>
              </a>
            </div>
            <div
              class="col-6 col-mb-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <a href="/details.html" class="component-products d-block">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="
                      background-image: url('images/products-tatakan-gelas.jpg');
                    "
                  ></div>
                </div>
                <div class="products-text">Coffee Holder</div>
                <div class="products-price">Rp.500.000</div>
              </a>
            </div>
          </div>
        </div>
      </section>
    </div>

@endsection
