@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>รายการ Pokémon</h1>
        <a href="{{ route('pokedexs.create') }}" class="btn btn-success">เพิ่ม Pokémon ใหม่</a>
    </div>

    @if($pokedexs->isEmpty())
        <div class="alert alert-info">ยังไม่มีข้อมูล Pokémon</div>
    @else
        <div class="row">
            @foreach($pokedexs as $pokemon)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ $pokemon->image_url }}" class="card-img-top" alt="{{ $pokemon->name }}" style="height: 250px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $pokemon->name }}</h5>
                        <p class="card-text">
                            <strong>ประเภท:</strong> {{ $pokemon->type }}<br>
                            <strong>สายพันธุ์:</strong> {{ $pokemon->species }}<br>
                            <strong>ความสูง:</strong> {{ $pokemon->height }} ซม.<br>
                            <strong>น้ำหนัก:</strong> {{ $pokemon->weight }} กก.<br>
                            <strong>HP:</strong> {{ $pokemon->hp }}<br>
                            <strong>Attack:</strong> {{ $pokemon->attack }}<br>
                            <strong>Defense:</strong> {{ $pokemon->defense }}
                        </p>
                        <div class="d-flex gap-2">
                            <a href="{{ route('pokedexs.show', $pokemon->id) }}" class="btn btn-info btn-sm">ดูรายละเอียด</a>
                            <a href="{{ route('pokedexs.edit', $pokemon->id) }}" class="btn btn-warning btn-sm">แก้ไข</a>
                            <form action="{{ route('pokedexs.destroy', $pokemon->id) }}" method="POST" onsubmit="return confirm('คุณต้องการลบ {{ $pokemon->name }} ใช่หรือไม่?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">ลบ</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
