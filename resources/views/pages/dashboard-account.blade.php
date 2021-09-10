@extends('layouts.dashboard')

@section('title')
    Store Dashboard Account
@endsection

@section('content')
<!-- Section Contents  -->
<div
  class="section-content section-dashboard-home"
  data-aos="fade-up"
>
  <div class="container-fluid">
    <div class="dashboard-heading">
      <h2 class="dashboard-title">My Account</h2>
      <p class="dashboard-subtitle">Update your current profile</p>
    </div>
    <div class="dashboard-content">
      <div class="row">
        <div class="col-12">
          <form action="">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="name">Your Name</label>
                      <input
                        class="form-control"
                        type="text"
                        name="name"
                        id="name"
                        value="Dwi Candra Kirana"
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="email">Your Email</label>
                      <input
                        class="form-control"
                        type="text"
                        name="email"
                        id="email"
                        placeholder="dwicandra092@gmail.com"
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="addressOne">Address 1</label>
                      <input
                        class="form-control"
                        type="text"
                        id="addressOne"
                        name="addressOne"
                        value="Kabupaten Kudus"
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="addressTwo">Address 2</label>
                      <input
                        class="form-control"
                        type="text"
                        name="addressTwo"
                        id="addressTwo"
                        value="Blok B2 No. 34"
                      />
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="">Province</label>
                      <select
                        name="Province"
                        id="Province"
                        class="form-control"
                      >
                        <option value="">Central Java</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="City">City</label>
                      <select
                        name="City"
                        id="City"
                        class="form-control"
                      >
                        <option value="Kudus">Kudus</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="">Postal Code</label>
                      <input
                        class="form-control"
                        type="text"
                        placeholder="59584"
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="country">Country</label>
                      <input
                        type="text"
                        class="form-control"
                        name="country"
                        id="country"
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
                        value="+6281329329662"
                      />
                    </div>
                  </div>
                  <div class="col-"></div>
                </div>
                <div class="row">
                  <div class="col text-right mt-3">
                    <button
                      type="submit"
                      class="btn btn-success px-5"
                    >
                      Save Now
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
