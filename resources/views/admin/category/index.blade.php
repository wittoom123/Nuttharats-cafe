@extends('layouts.admin.admin')
@section('body')
<div class="table-responsive">
    <h2>Create Category</h2>
    <form action="{{route('create')}}" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="name">ชื่อประเภท</label>
            <input type="text" class="form-control" id="name" name="name"  placeholder="Category Name">
        </div>
        <button type="submit" name="submit" class="btn btn-success">Submit</button>
    </form>

    <div class="container-fluid">
    <div class="row mt-4">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">id</th>
                <th scope="col">ประเภท</th>
                <th scope="col">created_at</th>
                <th scope="col">updated_at</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($category as $categories)
            <tr>
                <th scope="row">{{$categories->category_id }}</th>
                <td>{{$categories->name}}</td>
                <td>{{$categories->created_at}}</td>
                <td>{{$categories->updated_at}}</td>
                <td>
                    <a href="{{url('/admin/category/edit/'.$categories->category_id)}}" class="btn btn-success">Edit</a>
                    <a href="" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach


        </tbody>
    </table>
    </div>
</div>
</div>
@endsection
