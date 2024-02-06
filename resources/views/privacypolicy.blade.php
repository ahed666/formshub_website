@extends('layouts.app')


  <!-- ======= Header ======= -->

  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <!-- End Hero -->
  @section('content')
  @php
  $title="Privacy Policy";
  $text="text";
@endphp
<x-header_section :title="$title" :text="$text" />

  @stop
