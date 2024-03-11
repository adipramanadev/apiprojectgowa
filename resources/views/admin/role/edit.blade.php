@extends('admin.master')

@section('title')
    <title>Edit Role User</title>
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
                    <div class="card">
                        <div class="card-header">
                            <h3>Edit Role User</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Role User</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <form action="#" method="post">
                                    @csrf
                                    @method('PUT')
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
