@extends('layouts.admin.side')

@section('content')

<div class="col-sm-9 ">
<script>
function ConfirmDelete(){
return confirm('Are you sure?');
}
</script>

<div class="card uper" style="margin-bottom:50px;">
  <div class="card-header" >
  You are creating a new Document type</button></a>

  </div>
  <div class="card-body">

        @if (Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif


        {!! Form::open(['url'=>'admin/documenttypes','method'=>'post']) !!}

        <div class="form-group">
             {!! Form::label('name','Document Type',['class'=>'control-label']) !!}
             {!! Form::text('name',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
             {!! Form::label('description','Description',['class'=>'control-label']) !!}
             {!! Form::text('description',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
             {!! Form::label('name','Quick Note',['class'=>'control-label']) !!}
             {!! Form::text('note',null,['class'=>'form-control']) !!}
        </div>
        {!!  Form::submit('Create Document type',['class'=>'btn btn-secondary']) !!}
        <input type="reset" style="float:right;">
        {!!  Form::close() !!}


    </div>
</div>
</div>

@endsection