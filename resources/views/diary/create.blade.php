@extends('diary.layout')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Joan Diaries</h2>

        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('diary.index') }}"> Back</a>
        </div>
    </div>
</div>
<br>


@if ($errors->any())
     <div class="alert alert-danger">
        <strong> Whoops!</strong>There were problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
     </div>
@endif

<form action="{{ route('diary.store') }}" method="POST">
    @csrf

       <div class="row">
           <div class="col-xs-12 col-sm-12 col-md-12">
               <div class="form-group">
                   <strong>Title:</strong>
                   <input type="text" name="name" class="form-control" placeholder=""> <br>
               </div>
           </div>
           <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Body:</strong>
                    <textarea class="form-control" style="height:150px" name="detail" placeholder=""></textarea>
                </div>
           </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-5">
            <div class="form-group">
                <input type="file" name="file" id="file">
            </div>
        </div>
        </div>

           <div class="col-xs-12 col-sm-12 col-md-12 text-center"> <br>
                <button type="submit" class="btn btn-primary">Submit</button>
           </div>
       </div>
</form>
 


@endsection

