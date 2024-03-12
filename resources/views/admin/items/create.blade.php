@extends('admin.master')

@section('title')
    <title>Tambah Item</title>
@endsection

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Tambah Item</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Form Tambah Item</h4>

                        </div>
                        <div class="card-body">
                            <form action="" method="post">
                                @csrf
                                @method('POST')
                                <div class="form-group">
                                    <label for="name">Nama Item</label>
                                    <input type="text" name="name" class="form-control"
                                        placeholder="Masukkan Nama Item..." id="name" required>
                                </div>
                                <div class="form-group">
                                    <label for="categori_id">Nama Kategori</label>
                                    <select name="categori_id" class="form-control" id="categori_id">
                                        <option value="">Pilih Kategori</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="user_id">Nama User</label>
                                    <select name="user_id" class="form-control" id="user_id">
                                        <option value="">Pilih User</option>
                                        @foreach ($users as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="weight">Weight</label>
                                    <input type="number" name="weight" class="form-control"
                                        placeholder="Masukkan Berat Item..." id="weight" required>
                                </div>
                                <div class="form-group">
                                    <label for="points">Points</label>
                                    <input type="number" name="points" class="form-control"
                                        placeholder="Masukkan Points Item..." id="points" required>
                                </div>
                                <div class="form-group text-right">
                                    <button class="btn btn-outline-primary ">Simpan Data</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
