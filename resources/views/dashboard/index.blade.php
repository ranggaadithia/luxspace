@extends('template.index')

@section('container')

<div class="container mt-5 px-5">
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Product</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
          <div class="mb-3">
            <label for="product" class="form-label">Nama Produk</label>
            <input type="text" class="form-control" id="product" placeholder="Masukan product" name="name" autocomplete="off">
          </div>
          <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <select class="form-select" name="category_id">
              <option selected>Pilih Category</option>
              @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
              @endforeach
            </select>
          </div>
          <div class="mb-3">
            <label for="description">Description</label>
            <textarea class="form-control" name="description" id="description" placeholder="Masukan description" rows="4"></textarea>
          </div>
          <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" id="price" name="price" placeholder="Masukan harga" autocomplete="off">
          </div>
          <div class="mb-3">
            <label for="stock" class="form-label">Stock</label>
            <input type="number" class="form-control" id="stock" name="stock" placeholder="Masukan stock" autocomplete="off">
          </div>
          <div class="mb-3">
            <label for="cover" class="form-label">Cover</label>
            <input class="form-control" name="cover" type="file" id="formFile">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>
  <div class="d-flex justify-content-between mb-3">
    <h3>{{ $title }}</h3>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
      Tambah Data
    </button>
  </div>
  @if (session()->has('success')) 
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Success!</strong> {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif

  <div class="">
    <form action="{{ route('product.search') }}" method="POST">
      @csrf
      <div class="mb-3 d-flex">
        <input type="search" class="form-control" id="search" placeholder="search..." name="search" autocomplete="off">
        <button type="submit" class="ms-5 btn btn-primary">Search</button>
      </div>
    </form>
  </div>

  <table class="table display mt-3">
    <thead>
        <tr>
            <th width="20">#</th>
            <th>Name</th>
            <th>Category</th>
            <th>Description</th>
            <th>Price</th>
            <th>Stock</th>
            <th width="50">action</th>
        </tr>
    </thead>
    <tbody>
      @foreach ($products as $product)  
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->category->name }}</td>
            <td>{{ $product->truncated_description }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->stock }}</td>
            <td>
              <div class="d-flex">
                {{-- <button type="button" class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#detailModal{{ $product->id }}">
                  Detail
                </button> --}}
                <button type="button" class="btn btn-warning me-2" data-bs-toggle="modal" data-bs-target="#updateModal{{ $product->id }}">
                  Edit
                </button>
                <form action="{{ route('product.destroy', $product->id) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
              </div>
              {{-- <div class="modal fade" id="detailModal{{ $product->id }}" tabindex="-1" aria-labelledby="detailModal{{ $product->id }}Label" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="detailModal{{ $product->id }}Label">Detail product</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <div class="mb-3">
                      <label class="fs-5 fw-semibold">Nama Product</label>
                      <p>{{ $product->name  }}</p>
                    </div>
                    <div class="mb-3">
                      <label class="fs-5 fw-semibold">Category Product</label>
                      <p>{{ $product->category->name  }}</p>
                    </div>
                    <div class="mb-3">
                      <label class="fs-5 fw-semibold">Description Product</label>
                      <p >{{ $product->description }}</p>
                    </div>
                    <div class="mb-3">
                      <label class="fs-5 fw-semibold">Price Product</label>
                      <p>{{ $product->price }}</p>
                    </div>
                    <div class="mb-3">
                      <label class="fs-5 fw-semibold">Stock Product</label>
                      <p>{{ $product->stock }}</p>
                    </div>
                    <div class="mb-3">
                      <label class="fs-5 fw-semibold">Cover Product</label>
                      <br>
                      <img src="{{ asset('storage/' . $product->cover) }}" alt="" width="200" class="rounded">
                    </div>
                </div>
              </div> --}}
              <div class="modal fade" id="updateModal{{ $product->id }}" tabindex="-1" aria-labelledby="updateModal{{ $product->id }}Label" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="updateModal{{ $product->id }}Label">Edit product</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form action="{{ route('product.update', $product->id) }}" method="POST">
                      @csrf
                      @method('PUT')
                      <div class="mb-3">
                        <label for="product" class="form-label">Nama Produk</label>
                        <input type="text" class="form-control" id="product" placeholder="Masukan product" name="name" autocomplete="off" value="{{ $product->name }}">
                      </div>
                      <div class="mb-3">
                        <label for="category" class="form-label">Category</label>
                        <select class="form-select" name="category_id">
                          <option selected>Pilih Category</option>
                          @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="mb-3">
                        <label for="description">Description</label>
                        <textarea class="form-control" name="description" id="description" placeholder="Masukan description" rows="4">{{ $product->description }}</textarea>
                      </div>
                      <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" class="form-control" id="price" name="price" placeholder="Masukan harga" autocomplete="off" value="{{ $product->price }}">
                      </div>
                      <div class="mb-3">
                        <label for="stock" class="form-label">Stock</label>
                        <input type="number" class="form-control" id="stock" name="stock" placeholder="Masukan stock" autocomplete="off" value="{{ $product->stock }}">
                      </div>
                      <div class="mb-3">
                        <label for="cover" class="form-label">Cover</label>
                        <br>
                        <img src="{{ asset('storage/' . $product->cover) }}" alt="" width="200" class="rounded">
                        <input class="form-control" name="cover" type="file" id="formFile">
                      </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </td>
        </tr>
      @endforeach
    </tbody>
  </table>
  {{ $products->links()  }}
</div>
@endsection