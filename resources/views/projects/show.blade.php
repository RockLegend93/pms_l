@extends('layouts.app')

@section('content')
    @include('projects.show_fields')

    <div class="form-group">
           <a href="{!! route('projects.index') !!}" class="btn btn-default">Back</a>
    </div>
@endsection