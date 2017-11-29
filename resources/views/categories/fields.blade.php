<div class="row">
    <!-- Name Field -->
    <div class="form-group col-md-4">
        {!! Form::label('name', 'Name') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Building Field -->
    <div class="form-group col-md-4">
        {!! Form::label('category_id', 'Category') !!}
        {!! Form::select('category_id', $buildings, null, ['class' => 'form-control select2']) !!}
    </div>

    <!-- Image Field -->
    <div class="form-group col-md-4 {!! $errors->has('image') ? 'has-error' : '' !!}">
        {!! Form::label('image', trans('modules.buildings.image')) !!}
        {!! Form::file('image') !!}
    </div>
</div>

<div class="row">
    <!-- Gravata Field -->
    <div class="form-group col-md-4">
        {!! Form::label('gravata', trans('modules.apartments.gravata')) !!}
        {!! Form::text('gravata', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Price Field -->
    <div class="form-group col-md-4">
        {!! Form::label('price', trans('modules.apartments.price')) !!}
        {!! Form::text('price', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Billing Type Field -->
    <div class="form-group col-md-4">
        {!! Form::label('billing_type', trans('modules.apartments.billing_types')) !!}
        {!! Form::select('billing_type', $billingTypes, null, ['class' => 'form-control select2']) !!}
    </div>
</div>

<div class="row">
    <!-- Published Field -->
    <div class="form-group col-md-4">
        {!! Form::label('published', trans('modules.apartments.published')) !!}
        <div class="from-group">
            {!! Form::hidden('published', 1, null) !!}
            {!! Form::checkbox('published', 1, null) !!}
        </div>
    </div>
</div>

<div class="row">
    <!-- About Field -->
    <div class="form-group col-md-6">
        {!! Form::label('about', trans('modules.apartments.about')) !!}
        {!! Form::textarea('about', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="row">
    <!-- Features Field -->
    <div class="form-group col-md-6">
        {!! Form::label('features', trans('modules.features.features')) !!}
        {!! Form::select('features[]', $features, null, ['class' => 'form-control features', 'id' => 'apartmentFeatures', 'multiple' => 'multiple']) !!}
    </div>
</div>

@section('js')
    <script src="{{ asset('js/admin/apartments/ApartmentForm.js') }}"></script>
@endsection
