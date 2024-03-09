@extends('admin.master')

@section('title')
    <title>Category</title>
@endsection

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Halaman Kategori</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Data Kategori</h4>
                            <div class="card-header-action">
                                <a href="{{ route('category.create') }}" class="btn btn-outline-primary">Tambah Kategori</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-md">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama Kategori</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
