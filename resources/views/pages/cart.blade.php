@extends('layouts.app')

@section('title')
    Store Cart Page
@endsection

@section('content')

    <!-- Page Content -->
    <div class="page-content page-cart">
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
                  <li class="breadcrumb-item active">Cart</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </section>

      <section class="store-cart">
        <div class="container">
          <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="container">
              <div class="row" data-aos="fade-up" data-aos-delay="150">
                <div class="col-12 table-responsive">
                  <table class="table table-borderless table-cart">
                    <thead>
                      <tr>
                        <td>Image</td>
                        <td>Name &amp; Seller</td>
                        <td>Price</td>
                        <td>Menu</td>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td style="width: 25%">
                          <img
                            src="images/product-details-1.jpg"
                            alt=""
                            class="cart-image w-100"
                          />
                        </td>
                        <td style="width: 35%">
                          <div class="product-title">Sofa Maurice 2</div>
                          <div class="product-substitle">By Candra Kirana</div>
                        </td>
                        <td style="width: 35%">
                          <div class="product-title">Rp.9.999.999</div>
                          <div class="product-substitle">Rupiah</div>
                        </td>
                        <td style="width: 20%">
                          <a href="#" class="btn btn-danger btn-remove-cart"
                            >Remove</a
                          >
                        </td>
                      </tr>
                      <tr>
                        <td style="width: 20%">
                          <img
                            src="images/product-cart-3.jpg"
                            alt=""
                            class="cart-image w-100"
                          />
                        </td>
                        <td style="width: 35%">
                          <div class="product-title">Coffee Holder</div>
                          <div class="product-substitle">By Abaddon</div>
                        </td>
                        <td style="width: 35%">
                          <div class="product-title">Rp.500.000</div>
                          <div class="product-substitle">Rupiah</div>
                        </td>
                        <td style="width: 20%">
                          <a href="#" class="btn btn-danger btn-remove-cart"
                            >Remove</a
                          >
                        </td>
                      </tr>
                      <tr>
                        <td style="width: 25%">
                          <img
                            src="images/product-cart-2.jpg"
                            alt=""
                            class="cart-image w-100"
                          />
                        </td>
                        <td style="width: 35%">
                          <div class="product-title">Monkey Boots</div>
                          <div class="product-substitle">By Monkey King</div>
                        </td>
                        <td style="width: 35%">
                          <div class="product-title">Rp.1.999.999</div>
                          <div class="product-substitle">Rupiah</div>
                        </td>
                        <td style="width: 20%">
                          <a href="#" class="btn btn-danger btn-remove-cart"
                            >Remove</a
                          >
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="row" data-aos="fade-down" data-aos-delay="150">
            <div class="col-12">
              <hr />
            </div>
            <div class="col-12">
              <h2 class="mb-2">Shipping Details</h2>
            </div>
          </div>
          <div class="row mb-2" data-aos="fade-up" data-aos-delay="200">
            <div class="col-md-6">
              <div class="form-group">
                <label for="addressOne">Address 1</label>
                <input
                  type="text"
                  class="form-control"
                  id="addressOne"
                  name="addressOne"
                  value="Setra Duta Cemara"
                />
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="addressTwo">Address 2</label>
                <input
                  type="text"
                  class="form-control"
                  name="addressTwo"
                  id="addressTwo"
                  value="Blok B2 No. 34"
                />
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="Provice">Provice</label>
                <select name="Provice" class="form-control" id="Provice">
                  <option value="Provice">Central Java</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="City">City</label>
                <select name="City" class="form-control" id="City">
                  <option value="City">Kudus</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="PostalCode">Postal Code</label>
                <input
                  type="text"
                  class="form-control"
                  name="postalCode"
                  id="postalCode"
                  value=""
                />
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="country">Country</label>
                <input
                  type="text"
                  class="form-control"
                  id="country"
                  name="country"
                  value="Indonesia"
                />
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="mobile">Mobile</label>
                <input
                  type="text"
                  class="form-control"
                  name="mobile"
                  id="mobile"
                  value="+628 2020 11111"
                />
              </div>
            </div>
          </div>
          <div class="row" data-aos="fade-down" data-aos-delay="250">
            <div class="col-12">
              <hr />
            </div>
            <div class="col-12">
              <h2 class="mb-2">Payment Information</h2>
            </div>
          </div>
          <div class="row" data-aos="fade-up" data-aos-delay="150">
            <div class="col-4 col-md-2">
              <div class="product-title">Rp.15.000</div>
              <div class="product-substitle">Country Tax</div>
            </div>
            <div class="col-4 col-md-3">
              <div class="product-title">Rp.20.000</div>
              <div class="product-substitle">Product Insurance</div>
            </div>
            <div class="col-4 col-md-2">
              <div class="product-title">Rp.50.000</div>
              <div class="product-substitle">Ship to Jakarta</div>
            </div>
            <div class="col-4 col-md-2">
              <div class="product-title text-success">Rp.12.464.999</div>
              <div class="product-substitle">Total</div>
            </div>
            <div class="col-8 col-md-3">
              <a href="/success.html" class="btn btn-success mt-3 btn-block"
                >Checkout Now</a
              >
            </div>
          </div>
        </div>
      </section>
    </div>

@endsection
