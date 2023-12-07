@extends('layouts.app')

@section('content')

    <div class="container">
    <form action="{{route('uom.update', $uom->id)}}" method="post">
            @csrf  
            @method('PATCH')
            <div class="form-group">
                <label for="">Nama Brand</label>
                <input type="text" name="name" id="" value="{{$uom->name}}" class="form-control">
            </div>
            <div>
                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="{{route('uom')}}" class="btn btn-primary">Cancel</a>
            </div>
        </form>
    </div>

@endsection