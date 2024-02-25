@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">


            <h2>Covid-19 Project Data</h2>

            @if(auth()->user()->role_id == 2)
            <a href="{{ route('covid.create') }}" class="btn btn-primary mb-3">Add New</a>
            @endif

            <table class="table">
                <thead>
                    <tr>
                        <th>SPOL</th>
                        <th>LE WBC</th>
                        <th>Limf%</th>
                        <th>Mid%</th>
                        <th>Gran%</th>
                        <th>HGB</th>
                        <th>Final Result</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($covidData as $data)
                    <tr>
                        <td>{{ $data->SPOL }}</td>
                        <td>{{ $data->LE_WBC }}</td>
                        <td>{{ $data->Limf }}</td>
                        <td>{{ $data->Mid }}</td>
                        <td>{{ $data->Gran }}</td>
                        <td>{{ $data->HGB }}</td>
                        <td>{{ $data->FinalResult }}</td>
                        <td>
                            @if(auth()->user()->role_id == 2)
                            <a href="{{ route('covid.edit', ['id' => $data->id]) }}" class="btn btn-sm btn-primary">Edit</a>
                            @elseif(auth()->user()->role_id == 1)
                            <button class="btn btn-sm btn-success add-final-result">Add Final Result</button>

                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif