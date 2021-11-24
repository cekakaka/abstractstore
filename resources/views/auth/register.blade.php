@extends('layouts.auth')

@section('content')
{{-- Register Store --}}
<!-- page content -->
<div class="page-content page-auth" id="register">
    <div class="section-store-auth" data-aos="fade-up">
    <div class="container">
        <div
        class="row align-items-center justify-content-center row-login mt-5"
        >
        <div class="col-lg-4">
            <h2>Memulai untuk jual beli dengan cara terbaru <br /></h2>
             <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    <label>Full Name</label>
                    <!-- Vue Js
                    - v-MODEL-->
                    <input
                        id="name"
                        v-model="name"
                        type="text"
                        class="form-control @error('name') is-invalid @enderror"
                        name="name" value="{{ old('name') }}" required
                        autocomplete="name"
                        autofocus>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Email Address</label>
                    <input
                        id="email"
                        v-model="email"
                        type="email"
                        class="form-control @error('email') is-invalid @enderror"
                        name="email"
                        value="{{ old('email') }}" required
                        autocomplete="email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input id="password"
                    type="password"
                    class="form-control @error('password') is-invalid @enderror"
                    name="password" required
                    autocomplete="new-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Password Confirm</label>
                    <input id="password-confirm"
                    type="password"
                    class="form-control @error('password_confirmation') is-invalid @enderror"
                    name="password_confirmation" required
                    autocomplete="new-password">
                    @error('password_confirmation')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Store</label>
                    <p class="text-muted">Apakah anda juga ingin membuka toko?</p>
                    <div
                        class="custom-control custom-radio custom-control-inline"
                    >
                    <input
                        type="radio"
                        name="is_store_open"
                        id="openStoreTrue"
                        class="custom-control-input"
                        v-model="is_store_open"
                        :value="true"
                    />
                    <label for="openStoreTrue" class="custom-control-label"
                        >Iya, boleh</label
                    >
                    </div>
                    <div
                        class="custom-control custom-radio custom-control-inline"
                    >
                    <input
                        type="radio"
                        name="is_store_open"
                        id="openStoreFalse"
                        class="custom-control-input"
                        v-model="is_store_open"
                        :value="false"
                    />
                    <label for="openStoreFalse" class="custom-control-label"
                        >Enggak, makasih</label
                    >
                    </div>
                    <div class="form-group mt-3" v-if="is_store_open">
                        <label>Nama Toko</label>
                        <input type="text" v-model="store_name"
                            class="form-control @error('password-confirm') is-invalid @enderror"
                            name="store_name"
                            required
                            autocomplete
                            autofocus />
                            @error('store_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="form-group" v-if="is_store_open">
                        <label>Categories</label>
                        <select name="categories_id" class="form-control">
                            <option disabled>Select Category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <button
                    type="submit"
                    class="btn btn-success btn-block w-100 mt-2">
                    Sign Up Now
                </button>
                <a
                    href="{{ route('login') }}"
                    class="btn btn-signup btn-block w-100 mt-2"
                >
                    Back to Sign In
                </a>
            </form>
        </div>
        </div>
    </div>
    </div>
</div>
@endsection

@push('addon-script')
    <script src="/vendor/vue/vue.js"></script>
    <!-- vue toasted
        add notification -->
    <script src="https://unpkg.com/vue-toasted"></script>
    <script>
      Vue.use(Toasted);

      var register = new Vue({
        el: "#register",
        mounted() {
          AOS.init();
        //   this.$toasted.error(
        //     "Maaf, tampaknya email sudah terdaftar pada sistem kami.",
        //     {
        //       position: "top-center",
        //       className: "rounded",
        //       duration: 1000,
        //     }
        //   );
        },
        data: {
          name: "Dwi Candra Kirana",
          email: "dwicandra092@gmail.com",
          password: "",
          is_store_open: true,
          store_name: "",
        },
      });
    </script>
@endpush
