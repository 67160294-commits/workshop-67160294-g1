@extends('layouts.app')

@section('content')
<div class="container">
    <h1>แก้ไขข้อมูล {{ $pokedex->name }}</h1>

    <form action="{{ route('pokedexs.update', $pokedex->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="name" class="form-label">ชื่อ</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $pokedex->name }}" required>
            </div>

            <div class="col-md-6 mb-3">
                <label for="type" class="form-label">ประเภท</label>
                <input type="text" class="form-control" id="type" name="type" value="{{ $pokedex->type }}" required>
            </div>

            <div class="col-md-6 mb-3">
                <label for="species" class="form-label">สายพันธุ์</label>
                <input type="text" class="form-control" id="species" name="species" value="{{ $pokedex->species }}" required>
            </div>

            <div class="col-md-6 mb-3">
                <label for="height" class="form-label">ความสูง (ซม.)</label>
                <input type="number" class="form-control" id="height" name="height" value="{{ $pokedex->height }}" required>
            </div>

            <div class="col-md-6 mb-3">
                <label for="weight" class="form-label">น้ำหนัก (กก.)</label>
                <input type="number" class="form-control" id="weight" name="weight" value="{{ $pokedex->weight }}" required>
            </div>

            <div class="col-md-6 mb-3">
                <label for="hp" class="form-label">HP</label>
                <input type="number" step="0.1" class="form-control" id="hp" name="hp" value="{{ $pokedex->hp }}" required>
            </div>

            <div class="col-md-6 mb-3">
                <label for="attack" class="form-label">Attack</label>
                <input type="number" step="0.1" class="form-control" id="attack" name="attack" value="{{ $pokedex->attack }}" required>
            </div>

            <div class="col-md-6 mb-3">
                <label for="defense" class="form-label">Defense</label>
                <input type="number" step="0.1" class="form-control" id="defense" name="defense" value="{{ $pokedex->defense }}" required>
            </div>

            <div class="col-12 mb-3">
                <label for="image_url" class="form-label">URL รูปภาพ</label>
                <input type="url" class="form-control" id="image_url" name="image_url" value="{{ $pokedex->image_url }}" required>
            </div>
        </div>

        <div class="d-flex gap-2">
            <button type="submit" class="btn btn-primary">อัพเดท</button>
            <a href="{{ route('pokedexs.index') }}" class="btn btn-secondary">ยกเลิก</a>
        </div>
    </form>
</div>
@endsection
