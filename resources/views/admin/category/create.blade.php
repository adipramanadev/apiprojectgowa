@extends('admin.master')

@section('title')
    <title>Tambah Kategori</title>
@endsection

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        {{-- pesan error  --}}
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="card-header">
                            <h3>Tambah Kategori</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Form Tambah Kategori</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <form action="" method="post">
                                    @csrf
                                    @method('POST')
                                    <div class="form-group">
                                        <label for="namacategory">Nama Kategori</label>
                                        <input type="text" name="name" class="form-control" id="namacategory"
                                            placeholder="Masukkan Nama Kategori..">
                                    </div>
                                    <div class="form-group text-right">
                                        <button type="submit" class="btn btn-outline-primary">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
