@extends('layouts.app')
@section('title', 'Terms & Conditions | All Terms')



  @section('content')
  @php
  $title="Terms & Conditions";
  $text="text";
@endphp
<x-header_section :title="$title" :text="$text" />

  @stop

