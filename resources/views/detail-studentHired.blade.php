@extends('layouts.customer')

@section('content')

<style>
    #info_student .nav-tabs .nav-link:not(:hover):not(.active) {
        color: var(--bs-warning);
    }

    #info_student .nav-tabs .nav-link.active,
    #info_student .nav-tabs .nav-link:hover {
        background-color: var(--bs-warning);
        color: white;
    }

    #info_student .nav-tabs .nav-link:not(:hover):not(.active) {
        color: var(--bs-warning);
    }

    #info_student .nav-tabs .nav-link.active,
    #info_student .nav-tabs .nav-link:hover {
        background-color: var(--bs-warning);
        color: white;
    }

    #statistik .nav-tabs .nav-link:not(:hover):not(.active) {
        color: var(--bs-warning);
    }

    #statistik .nav-tabs .nav-link.active,
    #statistik .nav-tabs .nav-link:hover {
        background-color: var(--bs-warning);
        color: white;
    }

    #statistik .nav-tabs .nav-link:not(:hover):not(.active) {
        color: var(--bs-warning);
    }

    #statistik .nav-tabs .nav-link.active,
    #statistik .nav-tabs .nav-link:hover {
        background-color: var(--bs-warning);
        color: white;
    }

</style>

    <div style="padding: 50px" class="mt-5">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="">{{ __('Student Information') }}</h1>
            <a href="{{ route('hiredStudent.index') }}" class="wprt-button">{{ __('Back') }}</a>
        </div>
        <div class="row">
            <div class="col-md-3 d-flex flex-column gap-2">
                <div class="card">
                    <img src="{{ $student->photo }}" class="student-photo mx-auto d-block card-img-top"
                        style="object-fit: cover;width: 320px;height: 320px; object-position: top" alt="Student Photo">
                </div>
                <div class="d-flex flex-column gap-3 mt-3">
                    <div class="badge bg-warning p-3 text-uppercase" style="font-size: 15px">
                        {{ $student->role }}
                    </div>
                    <button onclick="handleHire('{{ $student->id }}')"
                        class="wprt-button outline btn-hire-{{ $student->id }} w-100">Hire</button>
                    <button onclick="handleUnHire('{{ $student->id }}')"
                        class="btn btn-danger outline py-3 btn-unhire-{{ $student->id }} d-none w-100">UnHire</button>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body row">
                        <div id="info_student" class="col-md-6 p-2">

                            <ul class="nav nav-tabs" id="nav-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="Biodata-tab" data-bs-toggle="tab"
                                        data-bs-target="#Biodata" type="button" role="tab" aria-controls="Biodata"
                                        aria-selected="true">{{__('Detail Information')}}</button>
                                </li>
                                {{-- <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="Academic-tab" data-bs-toggle="tab"
                                        data-bs-target="#Academic" type="button" role="tab" aria-controls="Academic"
                                        aria-selected="false">{{__('Academic Information')}}</button>
                                </li> --}}
                            </ul>
                            <div class="tab-content" id="nav-tabContent">
                                <div id="Biodata" role="tabpanel" class="tab-pane fade show in active">
                                    <table class="table table-bordered fs-5">
                                        <tbody>
                                            <tr>
                                                <th scope="row">{{ __('Name') }}:</th>
                                                <td>{{ $student->name }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">{{ __('Place and Date of Birth') }}:</th>
                                                <td>{{ $student->place_birth }},
                                                    {{ \Carbon\Carbon::createFromFormat('d/m/Y', $student->date_birth)->isoFormat('D MMMM Y') }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">NIS:</th>
                                                <td>{{ $student->nis }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">{{ __('Major') }}:</th>
                                                <td>{{ $student->major }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">{{ __('Former School') }}:</th>
                                                <td>{{ $student->school_origin }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">{{ __('UTS Branch') }}:</th>
                                                <td>{{ $student->branch->city }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">{{ __('Height') }}:</th>
                                                <td>{{ $student->height ?? 170 }} cm</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">{{ __('Weight') }}:</th>
                                                <td>{{ $student->weight ?? 50 }} Kg</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"> BMI:</th>
                                                @php
                                                    $bmi = $student->weight && $student->height ? $student->weight * 1000 / ($student->height * $student->height) : null;
                                                @endphp
                                                <td>{{ $student->bmi ?? '-' }}</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <div id="Academic" role="tabpanel" class="tab-pane fade in">
                                    <table class="table table-bordered fs-5">
                                        <tbody>
                                            <tr>
                                                <th scope="row">{{ __('Avarage theory score') }}:</th>
                                                <td>{{ $student->score->avg_theory??"-" }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">{{ __('Average practice score') }}:</th>
                                                <td>{{ $student->score->avg_practice??"-" }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">PS Presentation Title:</th>
                                                <td>{{ $student->presentation_score->presentation_title_ps?? "-" }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">PS Presentation Score:</th>
                                                <td>{{ $student->presentation_score->ps_score?? "-" }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">TS Presentation Title:</th>
                                                <td>{{ $student->presentation_score->presentation_title_ts?? "-" }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">TS Presentation Score:</th>
                                                <td>{{ $student->presentation_score->ts_score?? "-" }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="d-flex flex-column mt-3">
                                <h5 class="fw-bold">{{ __('Unit Spesialization') }}:</h5>

                                <div class="d-flex flex-row gap-2">
                                @forelse ($student->bestSpecialization as $item)
                                        <span class="badge bg-warning"
                                            style="font-size: 1.25em">{{ $item->name }}</span>


                                @empty
                                <p>Belum memiliki spesialisasi</p>
                                @endforelse
                                </div>
                            </div>
                            <div class="mt-4">
                                <h5 class="fw-bold">{{ __('Experience') }}</h5>
                                {{ __('Based on the training experience of this student, the conclusion is') }}:
                                <ul>
                                    <li>{{ __('Preventive Maintenance') }}: <span
                                            class="badge bg-warning fs-5">{{ $exp["pm"] }}
                                            {{__("Times")}}</span></li>
                                    <li>{{ __('Remove & Install') }}: <span
                                            class="badge bg-warning fs-5">{{ $exp["ri"] }}
                                            {{__("Times")}}</span></li>
                                    <li>{{ __('Machine Troubleshooting') }}: <span
                                            class="badge bg-warning fs-5">{{ $exp["mt"] }}
                                            {{__("Times")}}</span> </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-12" id="statistik">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="behavior-tab" data-bs-toggle="tab" data-bs-target="#behavior" type="button" role="tab" aria-controls="behavior" aria-selected="false">Behavior</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="OJT-tab" data-bs-toggle="tab" data-bs-target="#OJT" type="button" role="tab" aria-controls="OJT" aria-selected="true">OJT Experience</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="OJT2-tab" data-bs-toggle="tab" data-bs-target="#OJT2" type="button" role="tab" aria-controls="OJT2" aria-selected="true">OJT Experience 2</button>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade in" id="OJT" role="tabpanel" aria-labelledby="OJT-tab">
                                            <canvas id="myChart"></canvas>
                                        </div>
                                        <div class="tab-pane fade in" id="OJT2" role="tabpanel" aria-labelledby="OJT-tab">
                                            <canvas id="myChart2"></canvas>
                                        </div>
                                        <div class="tab-pane fade in show active" id="behavior" role="tabpanel" aria-labelledby="behavior-tab">
                                            <canvas id="behaviorChart"></canvas>
                                            <h5 class="fw-bold">Behavior</h5>
                                            <ul>
                                                @if($behavior["integritas"] == __('Sangat Baik'))
                                                    <li>Integritas: <span class="badge bg-success fs-5"> {{ $behavior["integritas"] }} </span></li>
                                                @elseif($behavior["integritas"] == __('Cukup'))
                                                    <li>Integritas: <span class="badge bg-warning fs-5"> {{ $behavior["integritas"] }} </span></li>
                                                @else
                                                    <li>Integritas: <span class="badge bg-danger fs-5"> {{ $behavior["integritas"] }} </span></li>
                                                @endif

                                                @if($behavior["santun"] == __('Sangat Baik'))
                                                    <li>Santun: <span class="badge bg-success fs-5"> {{ $behavior["santun"] }} </span></li>
                                                @elseif($behavior["santun"] == __('Cukup'))
                                                    <li>Santun: <span class="badge bg-warning fs-5"> {{ $behavior["santun"] }} </span></li>
                                                @else
                                                    <li>Santun: <span class="badge bg-danger fs-5"> {{ $behavior["santun"] }} </span></li>
                                                @endif

                                                @if($behavior["ahli"] == __('Sangat Baik'))
                                                    <li>Ahli: <span class="badge bg-success fs-5"> {{ $behavior["ahli"] }} </span></li>
                                                @elseif($behavior["ahli"] == __('Cukup'))
                                                    <li>Ahli: <span class="badge bg-warning fs-5"> {{ $behavior["ahli"] }} </span></li>
                                                @else
                                                    <li>Ahli: <span class="badge bg-danger fs-5"> {{ $behavior["ahli"] }} </span></li>
                                                @endif

                                                @if($behavior["berani"] == __('Sangat Baik'))
                                                    <li>Berani: <span class="badge bg-success fs-5"> {{ $behavior["berani"] }} </span></li>
                                                @elseif($behavior["berani"] == __('Cukup'))
                                                    <li>Berani: <span class="badge bg-warning fs-5"> {{ $behavior["berani"] }} </span></li>
                                                @else
                                                    <li>Berani: <span class="badge bg-danger fs-5"> {{ $behavior["berani"] }} </span></li>
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
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
        const points = @json($pointExperience)
        // eslint-disable-next-line no-console
        console.log(points)
        let dataset = [];
        const colors = ['rgba(234, 67, 53, 0.6)', 'rgba(255, 152, 0, 0.6)', 'rgba(75, 192, 192, 0.6)', 'rgba(63, 81, 181, 0.6)'];
        $.each(points, function(key, value) {
            dataset.push({
                label: value.name,
                fill: true,
                backgroundColor: colors[key%colors.length],
                borderColor: colors[key%colors.length],
                pointBackgroundColor: colors[key%colors.length],
                pointBorderColor: '#fff',
                pointHoverBackgroundColor: '#fff',
                pointHoverBorderColor: colors[key%colors.length],
                data: [value.pm, value.ri, value.mt],
            });
        });

        dataset.push({
                label: "Min",
                fill: false,
                backgroundColor: 'rgba(0, 0, 0, 0.0)',
                borderColor: 'rgba(0, 0, 0, 0.0)',
                pointBackgroundColor: 'rgba(0, 0, 0, 0.0)',
                pointBorderColor: 'rgba(0, 0, 0, 0.0)',
                pointHoverBackgroundColor: 'rgba(0, 0, 0, 0.0)',
                pointHoverBorderColor: 'rgba(0, 0, 0, 0.0)',
                data: [0,0,0],
            });

        // eslint-disable-next-line no-console
        // console.log(dataset)

        const datasetBehavior = @json($behaviorScore);

        const dataBehavior = {
            labels: [
                "Integritas",
                "Santun",
                "Ahli",
                "Berani"
            ],
            datasets: datasetBehavior
        }
        console.log(dataBehavior);


        const data = {
            labels: [
                "{{ __('Preventive Maintenance') }}",
                "{{ __('Remove & Install') }}",
                "{{ __('Machine Troubleshooting') }}"
            ],
            datasets: dataset
        };
        const config = {
            type: 'bar',
            data: data,
            options: {
                elements: {
                    line: {
                        borderWidth: 3
                    }
                }
            },

        };
        const config2 = {
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
        const configBehavior = {
            type: 'radar',
            data: {
                labels: ["Integritas","Santun","Ahli","Berani"],
                datasets: [{
                    label: 'INSANI',
                    data: datasetBehavior,
                    backgroundColor: ['rgba(255, 99, 132, 0.2)', 'rgba(54, 162, 235, 0.2)', 'rgba(255, 206, 86, 0.2)', 'rgba(75, 192, 192, 0.2)'],
                    borderColor: ['rgba(255, 99, 132, 1)', 'rgba(54, 162, 235, 1)', 'rgba(255, 206, 86, 1)', 'rgba(75, 192, 192, 1)'],
                    borderWidth: 1
                },{
                    label: 'Max',
                    data: [3,3,3,3],
                    fill: false,
                    backgroundColor: 'rgba(0,0,0,0)'
                },{
                    label: 'Min',
                    data: [0,0,0,0],
                    fill: false,
                    backgroundColor: 'rgba(0,0,0,0)'
            }]
        },
            options: {
                elements: {
                    line: {
                        borderWidth: 3
                    }
                }
            },
        }
        const canvas1 = $("#myChart");
        const canvas12 = $("#myChart2");
        const canvas2 = $("#behaviorChart");
        new Chart(canvas1, config);
        new Chart(canvas12, config2);
        new Chart(canvas2, configBehavior)
    </script>
@endsection
