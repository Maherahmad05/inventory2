@extends('layouts.app')

@section('content')

<div class="container">
    <a href="{{route('category.create')}}" class="btn btn-primary bm-3">Add new category</a>
    <table class="table table-striped">
    

        <thead>
            <tr>
                <th>Name</th>
                <th>Options</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            @foreach ($categorys as $category )
                <tr>
                    <td>{{$category->name}}</td>
                    <td>
                    <form action="{{route('category.delete', $category->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <a href="{{route('category.edit', $category->id)}}" class="btn btn-warning btn-sm">Edit</a>
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