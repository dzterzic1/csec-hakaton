@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Covid-19 Record</h2>

    <form method="POST" action="{{ route('covid.update', $covidData->id) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="SPOL" class="form-label">SPOL</label>
            <input type="text" class="form-control" id="SPOL" name="SPOL" value="{{ old('SPOL', $covidData->SPOL)}}" required>
        </div>

        <div class="mb-3">
            <label for="LE_WBC" class="form-label">LE WBC</label>
            <input type="text" class="form-control" id="LE_WBC" name="LE_WBC" value="{{ old('LE_WBC', $covidData->LE_WBC) }}" required>
        </div>

        <div class="mb-3">
            <label for="Limf" class="form-label">Limf%</label>
            <input type="text" class="form-control" id="Limf" name="Limf" value="{{ old('Limf', $covidData->Limf) }}" required>
        </div>

        <div class="mb-3">
            <label for="Mid" class="form-label">Mid%</label>
            <input type="text" class="form-control" id="Mid" name="Mid" value="{{ old('Mid', $covidData->Mid) }}" required>
        </div>

        <div class="mb-3">
            <label for="Gran" class="form-label">Gran%</label>
            <input type="text" class="form-control" id="Gran" name="Gran" value="{{ old('Gran', $covidData->Gran) }}" required>
        </div>

        <div class="mb-3">
            <label for="HGB" class="form-label">HGB</label>
            <input type="text" class="form-control" id="HGB" name="HGB" value="{{ old('HGB', $covidData->HGB) }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Record</button>
    </form>
</div>
@endsection



@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif