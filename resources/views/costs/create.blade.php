@extends('layouts.app')

@section('content')

<div class="panel-body">

    {{ Form::open(['url' => route('costs.store'), 'method'=> 'post', 'class' => 'col-md-6 col-md-offset-3']) }}
    {{ csrf_field() }}
    {!! Form::formDropDown('category_id', selectableCostCategory()) !!}
    {!! Form::formInput('pay_date', 'Data Cheltuiala', null, ['class' => 'datetimepicker']) !!}
    {!! Form::formInput('suma', 'Suma') !!}
    {!! Form::formTextArea('detalii', 'Detalii') !!}
    {!! Form::submit('Adauga',['class'=>'btn btn-primary'])!!}
    {{ Form::close() }}

</div>
@endsection\

@push('scripts')
<script>
    $('.datetimepicker').datetimepicker({
        minView: 2,
        format: 'dd/mm/yyyy',
        autoclose: true
    });
</script>
@endpush