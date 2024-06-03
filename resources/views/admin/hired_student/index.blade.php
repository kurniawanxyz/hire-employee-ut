@extends('layouts.nav-admin')

@section('title', 'Hired Stutends')
<link rel="stylesheet" href="{{ asset('assets/css/sweetalert2.min.css') }}">
@section('content')
    <div class="page-wrapper">

        <div class="content container-fluid">
            <div class="page-header mb-3">
                <div class="card px-3 py-3 mb-4 flex-md-row justify-content-between align-items-center">
                    <div>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-dot mb-0">
                                <li class="breadcrumb-item active" aria-current="page">{{ __('Hired Students data') }}</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="d-flex flex-column flex-md-row align-items-md-center">
                        <div class="col-md-6 col-12 me-3 col-lg-4 pk-0">
                            <select name="selectRole" class="form-select" id="selectRole" paramName='role'>
                                <option selected>--Role--</option>
                                <option value="mechanic" {{ request('role') == 'mechanic' ? 'selected' : '' }}>Mechanic</option>
                                <option value="operator" {{ request('role') == 'operator' ? 'selected' : '' }}>Operator</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-12 me-3 col-lg-4 pk-0">
                            <select name="selectHired" class="form-select" id="selectHired" paramName='hired'>
                                <option selected>--Hired--</option>
                                <option value="false" {{ request('hired') == 'true' ? 'selected' : '' }}>Not hired yet</option>
                                <option value="true" {{ request('hired') == 'false' ? 'selected' : '' }}>Already hired</option>
                            </select>
                        </div>
                        <div class="d-flex justify-content-center">
                            <form method="get" class="form-inline d-flex flex-row gap-1 m-0">
                                <input class="form-control mr-sm-2 py-0" type="search" name="query" placeholder="Search"
                                    aria-label="Search" value="{{ request('query') }}">
                                <button class="btn btn-outline-primary py-0 my-sm-0" type="submit"><i
                                        class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="text-end">
                        <a href="{{ route('admin.hired-students.create') }}" class="btn btn-outline-primary">Add Hired Student</a>
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
                                        <td>{{ $student->name }}</td>
                                        <td>{{ $student->branch->city }}</td>
                                        <td>{{ $student->age }}</td>
                                        <td>{{ $student->role }}</td>
                                        <td>
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                                        class="material-icons">more_vert</i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item"
                                                        href="{{ route('admin.hired-students.edit', $student->id) }}"><i
                                                            class="fa-solid fa-pencil m-r-5"></i>
                                                        Edit</a>
                                                    <form nameData="{{ $student->name }}"
                                                        action="{{ route('admin.hired-students.destroy', $student->id) }}"
                                                        method="POST" class="student">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn dropdown-item"><i
                                                                class="fa-regular fa-trash-can m-r-5"></i> Delete</button>
                                                    </form>
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
    <script src="{{ asset('assets/js/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/handle-searching.js') }}"></script>
    <script>
        showConfirmDeleteModal('.student');
        searchDropdown('selectRole');
        searchDropdown('selectHired');
    </script>
@endsection
