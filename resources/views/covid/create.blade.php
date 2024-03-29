@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Add New Covid-19 Record</h2>

    <form method="POST" action="{{ route('covid.store') }}">
        @csrf

        <div class="mb-3">
            <label for="SPOL" class="form-label">SPOL</label>
            <input type="text" class="form-control" id="SPOL" name="SPOL" required value="{{ old('SPOL') }}">
        </div>

        <div class="mb-3">
            <label for="LE_WBC" class="form-label">LE WBC</label>
            <input type="text" class="form-control" id="LE_WBC" name="LE_WBC" required value="{{ old('LE_WBC') }}">
        </div>

        <div class="mb-3">
            <label for="Limf" class="form-label">Limf%</label>
            <input type="text" class="form-control" id="Limf" name="Limf" required value="{{ old('Limf') }}">
        </div>

        <div class="mb-3">
            <label for="Mid" class="form-label">Mid%</label>
            <input type="text" class="form-control" id="Mid" name="Mid" required value="{{ old('Mid') }}">
        </div>

        <div class="mb-3">
            <label for="Gran" class="form-label">Gran%</label>
            <input type="text" class="form-control" id="Gran" name="Gran" required value="{{ old('Gran') }}">
        </div>

        <div class="mb-3">
            <label for="HGB" class="form-label">HGB</label>
            <input type="text" class="form-control" id="HGB" name="HGB" required value="{{ old('HGB') }}">
        </div>

        <button type="submit" class="btn btn-primary">Add Record</button>
    </form>
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