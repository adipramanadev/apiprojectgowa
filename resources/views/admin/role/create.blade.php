@extends('admin.master')

@section('title')
    <title>Role User</title>
@endsection

@section('script')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('stisla/js/page/modules-sweetalert.js') }}"></script>
@endsection

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
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
                    <div class="card">
                        <div class="card-header">
                            <h3>Halaman Tambah Role User</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Tambah Role User</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <form action="{{ route('role.store') }}" method="post">
                                    @csrf
                                    @method('POST')
                                    <div class="form-group">
                                        <label>Nama Role</label>
                                        <input type="text" name="name" class="form-control" required>
                                    </div>
                                    <div class="form-group text-right">
                                        <button class="btn btn-outline-primary" type="submit">Simpan</button>
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

@section('script-bottom')
    {{-- {{sweet alert }} --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
@endsection
