@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <h1 class="pull-left">Create New Expense</h1>
        </div>
    </div>

{{--    @include('core-templates::common.errors')--}}
    @include('errors.errors')
    <div class="row">
        {!! Form::open(['route' => 'expenses.store']) !!}

            @include('expenses.fields')

        {!! Form::close() !!}
    </div>
@endsection
