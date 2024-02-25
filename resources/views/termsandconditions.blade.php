@extends('layouts.app')
@section('title', 'Terms & Conditions')


  <!-- ======= Header ======= -->

  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <!-- End Hero -->
  @section('content')
  @php
  $title="Terms & Conditions";
  $text="text";
@endphp
<x-header_section :title="$title" :text="$text" />

  @stop

