@extends("layouts.customer")

@section("content")
<div style="padding: 50px" class="mt-5">
    <h1 class="t">Hire Student</h1>
    <form method="get" class="">
        <div class="row mt-3">
            <div class="col-md-4 d-flex flex-column mb-0">
                <label class="form-label" for="search">Name/NIS</label>
                <div class="d-flex">
                   <input value="{{request()->search}}" placeholder="Student Name or NIS" style="height: 32px; border: 1px solid #4445" class="form-control mb-0 rounded-2" type="text" name="search" id="search">
                    {{-- <button class="wprt-button small">Search</button> --}}
                </div>
            </div>
            <div class="col-md-4 d-flex flex-column">
                <label class="form-label" for="role">Role</label>
                <div class="d-flex">
                    <select class="form-control" name="role" id="role">
                        <option disabled selected>Select Role</option>
                        <option @selected($role == 'mechanic') value="mechanic">Mechanic</option>
                        {{-- <option @selected($role == 'operator') value="operator">Operator</option> --}}
                    </select>
                    {{-- <button class="wprt-button small">Search</button> --}}
                </div>
            </div>
            <div class="col-md-4 d-flex flex-column">
                <label class="form-label" for="branch">Branch/Site</label>
                <div class="d-flex">
                    <select class="form-control" name="branch" id="branch">
                        <option disabled selected>Select Branch/Site</option>
                        @forelse ($branchs as $i => $item)
                            <option @selected($branch == $item->id) value="{{ $item->id }}">{{ $item->city }} ({{count($item->hired_students)}} Students)
                            </option>
                            @empty
                        @endforelse
                    </select>
                    <button class="wprt-button small">Search</button>
                </div>
            </div>
        </div>
    </form>
</div>
<div class="row px-5 justify-content-start mb-5">

    @forelse ($students as $item)
        <div class="col-md-6 col-lg-3 mt-5">
            <div class="card mx-5">
                <div class="card-img d-flex w-full mt-3">
                <img class="m-auto d-block object-fit-cover" style="border-radius: 100%; object-fit: cover; object-position: top;width: 200px; height: 200px;"
                src="{{$item->photo}}" alt="Foto {{ $item->name }}">
                </div>
                <span class="text-center fw-bold mt-3" style="font-size: 15px">{{$item->name}}</span>
                <span class="text-center" style="font-size: 15px">from <span class="badge bg-warning">{{$item->branch->city}}</span></span>
                <div class="card-body">
                    <div class="mt-3 d-flex justify-content-end gap-2 px-5">
                        <div class="col-6">
                            <button onclick="window.location.href = '{{ route('hiredStudent.show', $item->id) }}'" class="wprt-button small outline w-100 text-center">Detail</button>
                        </div>
                        <div class="col-6">
                            <button onclick="handleHire('{{ $item->id }}')"
                                class="wprt-button small btn-hire-{{ $item->id }} w-100">Hire</button>
                            <button onclick="handleUnHire('{{ $item->id }}')"
                                class="btn btn-danger small btn-unhire-{{ $item->id }} d-none w-100">UnHire</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @empty
        <p>Siswa not found</p>
    @endforelse
    <div>
        {{ $students->links("pagination::bootstrap-5") }}
    </div>

</div>
<div class="px-5 d-flex flex-row py-3 justify-content-end align-items-center gap-4 border-t">
    <span>Confirm to admin: </span>
    <div class="d-flex align-items-center gap-2">
        <button onclick="handleSendWhatsapp()" class="wprt-button small outline">Whatsapp</button>
        <button onclick="handleSendEmail()" class="wprt-button small">Email</button>
    </div>
    <div class="d-flex">
        <button onclick="handleReset()" class="btn btn-danger">Reset</button>
    </div>
</div>

@endsection

@section("script")
    <script>
        handleCheckHire()
    </script>
@endsection
