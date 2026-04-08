@extends('layouts.master')

@section('content')
    <div class="section-header">
        <h1>Inventory</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Inventory</a></div>
            <div class="breadcrumb-item"><a href="#">Table</a></div>
            <div class="breadcrumb-item">Tambah</div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h4>Tambah Inventory</h4>
        </div>

        <div class="card-body p-0">

            <form action="{{ route('inventory.store') }}" method="POST">
                @csrf

                <div class="card-body">

                    {{-- NAME --}}
                    <div class="form-group">
                        <label>Nama Inventory</label>
                        <input type="text" name="name" value="{{ old('name') }}"
                            class="form-control @error('name') is-invalid @enderror" placeholder="Masukkan nama inventory">

                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- QUANTITY --}}
                    <div class="form-group">
                        <label>Quantity</label>
                        <input type="number" name="quantity" value="{{ old('quantity') }}"
                            class="form-control @error('quantity') is-invalid @enderror" placeholder="Masukkan jumlah">

                        @error('quantity')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- PRICE --}}
                    <div class="form-group">
                        <label>Price</label>
                        <input type="number" step="0.01" name="price" value="{{ old('price') }}"
                            class="form-control @error('price') is-invalid @enderror" placeholder="Masukkan harga">

                        @error('price')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- DESCRIPTION --}}
                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="description" class="form-control @error('description') is-invalid @enderror"
                            placeholder="Masukkan deskripsi (optional)">{{ old('description') }}</textarea>

                        @error('description')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                </div>

                <div class="card-footer text-right">
                    <a href="{{ route('inventory.index') }}" class="btn btn-secondary mx-2">
                        Kembali
                    </a>
                    <button type="submit" class="btn btn-primary">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
