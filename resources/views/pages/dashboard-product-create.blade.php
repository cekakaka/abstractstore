@extends('layouts.dashboard')

@section('title')
Store Dashboard Product Details
@endsection

@section('content')
<!-- Section Contents  -->
<div
  class="section-content section-dashboard-home"
  data-aos="fade-up"
>
  <div class="container-fluid">
    <div class="dashboard-heading">
      <h2 class="dashboard-title">Create New Product</h2>
      <p class="dashboard-subtitle">Create your own product</p>
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
                      <label>Product Name</label>
                      <input
                        class="form-control"
                        type="text"
                        placeholder="Papel La Casa"
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Price</label>
                      <input class="form-control" type="number" />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="Category">Categories</label>
                      <select
                        name="Category"
                        id="Category"
                        class="form-control"
                      >
                        <option value="" disabled>
                          Select Category
                        </option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Description</label>
                      <textarea
                        name="Description"
                        id="Description"
                        cols="20"
                        rows="100"
                        class="form-control"
                      ></textarea>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="">Thumbnails</label>
                      <input type="file" class="form-control" />
                      <p class="text-muted">Select File</p>
                    </div>
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

@push('addon-script')
<script src="https://cdn.ckeditor.com/ckeditor5/29.1.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor.create(document.querySelector("#Description")).catch(
        (error) => {
            console.error(error);
    }
    );
</script>
@endpush
