@extends('layouts.nav-admin')

@section('title', 'Hired Stutends')
<script src="{{ asset('assets/admin/js/delete-modal.js') }}"></script>
@section('content')
    <div class="page-wrapper">

        <div class="content container-fluid">
            <div class="page-header mb-3">
                <div class="card px-3 mb-4 flex-md-row justify-content-between align-items-center py-3 py-md-0">
                    <div>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-dot mb-0">
                                <li class="breadcrumb-item active" aria-current="page">{{ __('Hired Students data') }}</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="d-flex flex-column flex-md-row align-items-md-center">
                        <div class="col-md-6 col-12 me-3 col-lg-4 pk-0">
                            <select name="jurusan" class="form-select" id="jurusan">
                                <option selected>{{ __('All') }}</option>
                                <option>Mechanic</option>
                                <option>Operator</option>
                            </select>
                        </div>
                        <div class="d-flex justify-content-center my-3">
                            <form method="get" class="form-inline d-flex flex-row gap-1">
                                <input class="form-control mr-sm-2 py-0" type="search" name="query" placeholder="Search"
                                    aria-label="Search" value="{{ request('query') }}">
                                <button class="btn btn-outline-primary py-0 my-sm-0" type="submit"><i
                                        class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="text-end">
                        <a href="{{ route('admin.hired-students.create') }}" class="btn btn-outline-primary">Tambah
                            Siswa</a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped custom-table datatable" style="table-layout: fixed;">
                            <thead>
                                <tr>
                                    <th>Photo</th>
                                    <th>Name</th>
                                    <th>Region</th>
                                    <th>Age</th>
                                    <th>Role</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($students as $student)
                                    <tr>
                                        <td>
                                            <p><img src="{{ $student->photo }}" alt="Student Photo" width="50"></p>
                                        </td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile.html">{{ $student->name }}</a>
                                            </h2>
                                        </td>
                                        <td>{{ $student->branch->city }}</td>
                                        <td>{{ $student->age }}</td>
                                        <td>{{ $student->role }}</td>
                                        <td>
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                                        class="material-icons">more_vert</i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="{{ route('admin.hired-students.edit', $student->id) }}"><i
                                                            class="fa-solid fa-pencil m-r-5"></i>
                                                        Edit</a>
                                                    <button class="btn dropdown-item"><i
                                                            class="fa-regular fa-trash-can m-r-5"></i> Delete</button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6">
                                            <p class="mt-3 mb-3 text-center fw-bold">Tidak ada data...</p>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <div class="mt-3 align-items-center">
                            {{ $students->links('pagination.bootstrap-5') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
