@extends('diary.layout')

@section('content')

<div class="row">
    <div class="col-lg-12 mt-5">
        <div class="pull-left">
            <h1 class="fw-semibold display-6">Diary</h1>
        </div>
        <div class="pull-right"> <br>
            <a class="btn btn-success" href="{{ route('diary.create') }}"> Login</a> 
            <a class="btn btn-success" href="{{ route('diary.create') }}"> Sign Up</a> 
        </div>
        <br>
    </div>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>    
@endif

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>DETAILS</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($diary as $diary)
    <tr>
        <td>{{ $diary->id }}</td>
        <td>{{ $diary->name }}</td>
        <td>{{ $diary->detail }}</td>
        <td>

           <form action="{{ route('products.destroy',$diary->id) }}" method="POST">
            <a class="btn btn-info" href="{{ route('diaries.show' ,$diaries->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('products.edit' ,$product->id) }}">Edit</a>
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
           </form>
        </td>
    </tr>    
    @endforeach
</table>

@endsection
{{ $products->links() }}
