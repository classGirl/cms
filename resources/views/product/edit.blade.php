@extends('backend/tblTemplate')
@section('body')
    @include('messages/flash_message')
    <h1>Update Products</h1>
    {!! Form::model($product,['method' => 'PATCH','route'=>['backend.articles.update',$product->product_id],'files'=> true]) !!}
    @include('product/form_edit')
    {!! Form::close() !!}
    @include('errors/error_layout')
@stop