@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="box">
            <div class="box-header">
                <a href="{{ url('categories/create') }}" class="btn btn-primary">
                    <i class="fa fa-plus"></i>
                    Add
                </a>
                <div class="clearfix">&nbsp;</div>
                <uiv-input type="text" name="name"></uiv-input>
            </div>
            <div class="box-body">
                <category-list></category-list>
            </div>
        </div>
    </div>
</div>
@endsection
