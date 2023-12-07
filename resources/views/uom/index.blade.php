@extends('layouts.app')

@section('content')

<div class="container">
    <table class="table table-striped">
    <a href="{{route('uom.create')}}" class="btn btn-primary bm-3">Add new uom</a>
        <thead>
            <tr>
                <th>Name</th>
                <th>Options</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            @foreach ($uoms as $uom )
                <tr>
                    <td>{{$uom->name}}</td>
                    <td>
                    <form action="{{route('uom.delete', $uom->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <a href="{{route('uom.edit', $uom->id)}}" class="btn btn-warning btn-sm">Edit</a>
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
               
               
            @endforeach
            </tr>
        </tbody>
    </table>
</div>

@endsection