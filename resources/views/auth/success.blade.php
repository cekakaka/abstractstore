@extends('layouts.success')

@section('title')
    Store Success Page
@endsection

@section('content')

    <div class="page-content page-success" data-aos="zoom-in" data-aos-delay="150">
      <div class="section success">
        <div class="container">
          <div class="row align-items-center row-login justify-content-center">
            <div class="col-lg-6 text-center">
              <img src="/images/success.svg" alt="bag-success" />
              <h2>Welcome to Store</h2>
              <p>
                Kamu sudah berhasil terdaftar <br>
                bersama kami. Let’s grow up now.
              </p>
              <div>
                <a href="/dashboard.html" class="btn btn-success mt-4"
                  >My Dashboard</a
                >
              </div>
              <div>
                <a href="/index.html" class="btn btn-signup w-50 mt-2"
                  >Go To Shopping</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection
