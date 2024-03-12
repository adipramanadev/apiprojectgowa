@extends('admin.master')

@section('title')
    <title>Data Item</title>
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
                            <h3>Data Item</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        {{-- swal success --}}
                        @if (Session::has('success'))
                            <script>
                                Swal.fire("Success", "{{ Session::get('success') }}", "success");
                            </script>
                        @endif
                        <div class="card-header">
                            <h4>Data Item</h4>
                            <div class="card-header-action">
                                <a href="{{ route('items.create') }}" class="btn btn-outline-primary">Tambah Item</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-md">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama Item</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($items as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->name }}</td>
                                                <td>
                                                    <a href="#" class="btn btn-outline-warning">Edit</a>
                                                    <form action="#" method="post" class="d-inline">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="btn btn-outline-danger" type="submit">Hapus</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="3" class="text-center">Tidak ada data</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
