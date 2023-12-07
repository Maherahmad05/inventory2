@extends('layouts.app')

@section('content')

    <div class="container">
        <form action="{{route('uom.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="">Nama UOM</label>
                <input type="text" name="name" id="" class="form-control">
            </div>
            <div>
                <button type="submit" class="btn btn-success mt-3">Simpan</button>
                <a href="{{route('uom')}}" class="btn btn-primary mt-3">Cancel</a>
            </div>
        </form>
    </div>

@endsection