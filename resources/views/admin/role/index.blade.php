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
                    <div class="card">
                        <div class="card-header">
                            <h3>Role User</h3>
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
                            <h4>Pengaturan Role</h4>
                            <div class="card-header-action">
                                <a href="{{ route('role.create') }}" class="btn btn-outline-primary">Tambah Role</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-md">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama Role</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($roles as $role)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $role->name }}</td>
                                                <td>
                                                    <a href="{{ route('role.edit', $role->id) }}"
                                                        class="btn btn-outline-warning">Edit</a>
                                                    <form action="{{ route('role.destroy', $role->id) }}" method="post"
                                                        class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-outline-danger"
                                                            onclick="return confirmDelete(event);"
                                                            data-confirm-delete="true">Hapus</button>
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

@section('script-bottom')
    <script>
        function confirmDelete(event) {
            event.preventDefault();
            var form = event.target.parentElement;
            var url = form.action;

            Swal.fire({
                title: 'Anda Yakin Delete Data Ini?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        }
    </script>
@endsection
