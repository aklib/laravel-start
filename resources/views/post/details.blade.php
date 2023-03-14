<?php
/**
 * File details.blade.php
 *
 * since: 09.03.2023
 * author: alexej@kisselev.de
 */
?>
@extends('layout.layout')
@section('title', 'Post details')

{{--end of layout vars--}}

@section('content')
    <h1>{{$title}}</h1>
    <p>{{$content}}</p>
@endsection

