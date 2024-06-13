@extends('layouts.customer')

@section('content')

    <div style="padding: 50px" class="mt-5">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="">Student Information</h1>
            <a href="{{ route('hiredStudent.index') }}" class="wprt-button small">Back</a>
        </div>
        <div class="row">
            <div class="col-md-3 d-flex flex-column gap-2 justify-content-between">
                <div class="card h-100">
                    <img src="{{ $student->photo }}" class="student-photo mx-auto d-block card-img-top"
                        style="object-fit: cover;width: 320px;height: 320px; object-position: top" alt="Student Photo">
                </div>
                <div class="badge bg-warning p-3 text-uppercase" style="font-size: 15px">
                    {{ $student->role }}
                </div>
                <button onclick="handleHire('{{ $student->id }}')"
                    class="wprt-button outline btn-hire-{{ $student->id }} w-100">Hire</button>
                <button onclick="handleUnHire('{{ $student->id }}')"
                    class="btn btn-danger outline py-3 btn-unhire-{{ $student->id }} d-none w-100">UnHire</button>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body row">
                        <div class="col-md-6">
                            <h5 class="card-title fw-bold">Student Information</h5>
                            <ul class="list-group list-group-flush" style="font-size: 11px">
                                <li class="list-group-item"><strong>Name:</strong> {{ $student->name }}</li>
                                <li class="list-group-item"><strong>Place and Date of Birth:</strong>
                                    {{ $student->place_birth }},
                                    {{ \Carbon\Carbon::createFromFormat('d/m/Y', $student->date_birth)->isoFormat('D MMMM Y') }}
                                </li>
                                <li class="list-group-item"><strong>NIS:</strong> {{ $student->nis }}</li>
                                <li class="list-group-item"><strong>Major:</strong> {{ $student->major }}</li>
                                <li class="list-group-item"><strong>Former School:</strong> {{ $student->school_origin }}
                                </li>
                                <li class="list-group-item"><strong>UTS Branch:</strong> {{ $student->branch->city }}</li>
                                <li class="list-group-item"><strong>Height:</strong> {{ $student->height ?? 170 }} cm
                                </li>
                                <li class="list-group-item"><strong>Weight:</strong> {{ $student->weight ?? 50 }} Kg
                                </li>
                                @if ($student->score->avg_theory != null)
                                    <li class="list-group-item">
                                        <strong>Avarage theory score </strong> {{ $student->score->avg_theory }}
                                    </li>
                                @endif
                                @if ($student->score->avg_theory != null)
                                    <li class="list-group-item">
                                        <strong>Average practice score</strong> {{ $student->score->avg_practice }}
                                    </li>
                                @endif

                                <li class="list-group-item"><strong>OJT location:</strong>
                                    {{ $student->specialization->ojt_location }}</li>
                            </ul>
                            <div class="d-flex flex-column mt-3">
                                <h5 class="fw-bold">Unit Spesialization:</h5>
                                @php
                                    $hasSpecialization =
                                        $student->specialization->rank_1 == '-' &&
                                        $student->specialization->rank_2 == '-' &&
                                        $student->specialization->rank_3 == '-' &&
                                        $student->specialization->rank_4 == '-';
                                @endphp
                                @if (!$hasSpecialization)
                                    <div>
                                        @if ($student->specialization->rank_1 != '-')
                                            <span class="badge bg-warning"
                                                style="font-size: 1.25em">{{ $student->specialization->rank_1 }}</span>
                                        @endif
                                        @if ($student->specialization->rank_2 != '-')
                                            <span class="badge bg-warning"
                                                style="font-size: 1.25em">{{ $student->specialization->rank_2 }}</span>
                                        @endif
                                        @if ($student->specialization->rank_3 != '-')
                                            <span class="badge bg-warning"
                                                style="font-size: 1.25em">{{ $student->specialization->rank_3 }}</span>
                                        @endif
                                        @if ($student->specialization->rank_4 != '-')
                                            <span class="badge bg-warning"
                                                style="font-size: 1.25em">{{ $student->specialization->rank_4 }}</span>
                                        @endif
                                    </div>
                                @else
                                    <p>Belum memiliki spesialisasi</p>
                                @endif
                            </div>
                            <div class="mt-4">
                                <h5 class="fw-bold">Experience</h5>
                                Based on the training experience of this student, the conclusion is:
                                <ul>
                                    <li>Preventive Maintenance: <span
                                            class="badge bg-warning fs-5">{{ $student->ojt->preventive_maintenance }}
                                            point</span></li>
                                    <li>Remove and Install: <span
                                            class="badge bg-warning fs-5">{{ $student->ojt->remove_and_install }}
                                            point</span></li>
                                    <li>Machine Troubleshooting: <span
                                            class="badge bg-warning fs-5">{{ $student->ojt->machine_troubleshooting }}
                                            point</span> </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-12">
                                    <canvas id="myChart"></canvas>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        handleCheckHire()
        const point = @json($pointExperience)

        const data = {
            labels: [
                "PERIODIC SERVICE",
                "REMOVE & INSTALL",
                "TROUBLESHOOTING"
            ],
            datasets: [{
                label: 'OJT EXPERIENCE',
                data: point,
                fill: true,
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgb(255, 99, 132)',
                pointBackgroundColor: 'rgb(255, 99, 132)',
                pointBorderColor: '#fff',
                pointHoverBackgroundColor: '#fff',
                pointHoverBorderColor: 'rgb(255, 99, 132)'
            }]
        };
        const config = {
            type: 'radar',
            data: data,
            options: {
                elements: {
                    line: {
                        borderWidth: 3
                    }
                }
            },
        };
        const canvas1 = $("#myChart");
        new Chart(canvas1, config);
    </script>
@endsection
