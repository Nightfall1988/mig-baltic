@extends('layouts.layout')
@section('content')
@include('components.header')
<div class="wrapper">
{{ Form::open(array('url' => '/')) }}

    @csrf
<div class="form-wrapper">
    {{ Form::label('EAN13', 'EAN-13', array('class' => 'ean13')) }}
    {{ Form::text('EAN13', null, $attributes = $errors->has('EAN13') ? array('class'=>'error-message') : array()) }}
    @if ($errors->has('EAN13'))
        <div class="error-displayed">{{ $errors->first('EAN13', "- EAN13 ievadīts nepareizi un nevar būt tukšs") }}</div>
    @endif

    {{ Form::label('Nosaukums', 'Nosaukums', array('class' => 'nosaukums')) }}
    {{ Form::text('Nosaukums', null, $attributes = $errors->has('Nosaukums') ? array('class'=>'error-message') : array()) }}
    @if ($errors->has('Nosaukums'))
        <div class="error-displayed">{{ $errors->first('Nosaukums', "- Nosaukums ievadīts nepareizi un nevar būt tukšs") }}</div>
    @endif

    {{ Form::label('Atlikums', 'Atlikums', array('class' => 'atlikums')) }}
    {{ Form::text('Atlikums', null, $attributes = $errors->has('Atlikums') ? array('class'=>'error-message') : array()) }}
    @if ($errors->has('Atlikums'))
        <div class="error-displayed">{{ $errors->first('Atlikums', "- Atlikumam jābūt ievadītam tikai ciparu formāta un nevar būt tukšs") }}</div>
    @endif

    {{ Form::label('Pašizmaksa', 'Pašizmaksa', array('class' => 'Pašizmaksa')) }}
    {{ Form::text('Pašizmaksa', null, $attributes = $errors->has('Pašizmaksa') ? array('class'=>'error-message') : array()) }}
    @if ($errors->has('Pašizmaksa'))
        <div class="error-displayed">{{ $errors->first('Pašizmaksa', "- Pašizmaksai jābūt ievadītai tikai ciparu formāta un nevar būt tukša") }}</div>
    @endif

    {{ Form::label('Cena', 'Cena', array('class' => 'Cena')) }}
        {{ Form::text('Cena', null, $attributes = $errors->has('Cena') ? array('class'=>'error-message') : array()) }}
    @if ($errors->has('Cena'))
        <div class="error-displayed">{{ $errors->first('Cena', "- Cenai jābūt ievadītai tikai ciparu formāta un nevar būt tukša") }}</div>
    @endif
    {{Form::submit('Saglabāt', ['class' => 'submit-bttn'])}}
</div>
{{ Form::close() }}

<div class="list">
    <table class="product-list">
    <tr>
        <th>@sortablelink('EAN13')</th>
        <th>@sortablelink('Nosaukums')</th>
        <th>@sortablelink('Atlikums')</th>
        <th>@sortablelink('Pašizmaksa')</th>
        <th>@sortablelink('Cena')</th>
    </tr>
    @if(!$productList->isEmpty())

    @foreach ($productList as $product)
    <tr>
        <td>{{ $product->EAN13}}</td>
        <td>{{ $product->Nosaukums}}</td>
        <td>{{ $product->Atlikums}}</td>
        <td>{{ $product->Pašizmaksa}}</td>
        <td>{{ $product->Cena}}</td>
    </tr>
    @endforeach

    @else
    <td colspan=5 style="text-align: center;">Nav neviena produkta sarakstā</td>
    @endif
    </table>
</div>
    <div class="pagination">
    <br>
        {!! $productList->appends(\Request::except('page'), ['id' => 'houseForm'])->render() !!}
    </div>
</div>