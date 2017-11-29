@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                {!! Form::model($apartment, ['route' => ['admin.apartments.update', $apartment->id], 'method' => 'patch', 'files' => true]) !!}
                    <div class="box-body">
                        {!! Form::hidden('id', $apartment->id) !!}
                        @include('admin.apartments.fields')
                    </div>

                    <div class="box-footer">
                        <!-- Submit Field -->
                        <div class="col-lg-offset-3 col-lg-6">
                            <a href="{!! route('admin.apartments.index') !!}" class="btn btn-default">{{ trans('messages.form.cancel') }}</a>
                            <div class="pull-right">
                                {!! Form::submit(trans('messages.form.save'), ['class' => 'btn btn-primary']) !!}
                            </div>
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection


