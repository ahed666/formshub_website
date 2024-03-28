@extends('layouts.app')
@section('title', 'Products - you can order online')
@section('meta_description', 'Discover our range of interactive kiosks designed to enhance customer engagement. Our kiosks are user-friendly, customizable, and perfect for various industries.')

@section('content')

@php
$title=trans('main.products_title');
$text='';

@endphp
@section('schema_markup')
{!! $schemaMarkup->toScript() !!}
@endsection
<x-header_section :title="$title" :text="$text" />

    <section class="section">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-4 ms-auto order-2">
              <h2 class="mb-4">{{ __('main.kioskinfo_title') }}</h2>
              <p class="mb-4">{{ __('main.kioskinfo_text') }}</p>
            </div>
            <div class="col-md-6" data-aos="fade-right">
              <img src="{{ asset('assets/img/kiosk.jpg') }}" alt="Image" class="img-fluid">
            </div>
          </div>
        </div>
    </section>
      {{-- order products --}}

    <section class="section">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-5 aos-init aos-animate" data-aos="fade-up">
              <h2 class="section-heading">{{ __('main.ordernow') }}</h2>
            </div>
          </div>
        <div class="container">
          <div class=" order-form">

                <form id="orderForm"  method="POST" action="{{ route('neworder') }}">
                    @csrf
                    <div class="my-2 fs-3 text-black d-flex justify-content-start align-items-start">
                       {{ __('Customer Info') }}
                    </div>
                    <div class="row align-items-center">
                        <div class="col-md-4 col-12 ms-auto  d-flex justify-content-center">
                            <img src="{{ asset('assets/img/order2.avif') }}" alt="Image" class="img-formorder">
                        </div>
                        <div class="col-md-8 col-12  " >
                            {{-- name  --}}
                            <div class="form-row my-2">
                                <div class="row">

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="fname">{{ __('main.firstname') }}</label>
                                            <input type="text" class="form-control" id="fname" name="fname" placeholder="" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="lname">{{ __('main.lastname') }}</label>
                                            <input type="text" class="form-control" id="lname" name="lname" placeholder="" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- email and mobile number --}}
                            <div class="form-row my-2">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="email">{{ __('main.email') }}</label>
                                            <input type="email" class="form-control" id="email" name="email" placeholder="" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="mobilenumber">{{ __('main.mobilenumber') }}</label>
                                            <input pattern="^(05|5)\d{8}$" title="Please enter a valid UAE mobile phone number with either '05xxxxxxxx' or '5xxxxxxxx' " type="text" maxlength="10"  class="form-control" id="mobilenumber" name="mobilenumber" placeholder="" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <input type="hidden" name="total" value="" id="total">
                    {{-- adress section --}}
                    <div class="form-row my-2">
                        <div class="row">

                            <div class="col-md-4 col-12">
                                <div class="form-group">
                                    <label for="address">{{ __('main.city') }}</label>
                                    <select class="form-select form-control" aria-label="Default select example" name="cityname" id="cityname">


                                        @foreach ($cities as $city )
                                            <option value="{{ $city->city_name }}">{{ $city->city_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-8 col-12">
                                <div class="form-group">
                                    <label for="city">{{ __('main.address') }}</label>
                                    <input type="text" class="form-control" id="address" name="address" placeholder="">
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- order info section --}}
                    <div class="my-2 fs-3 text-black  d-flex justify-content-start align-items-start">
                       {{ __('main.orderinfo') }}
                    </div>
                    {{-- devices --}}
                    <div class="container">
                    <div class="  row   mb-3 ">
                        @foreach ($devicesModels as $device )
                          {{-- with stand  --}}

                            {{-- with stand --}}
                            <div class="col-lg-2 col-sm-12 col-md-12  align-items-center mx-2 my-1 my-sm-auto">
                                <input type="checkbox" class="btn-check" name="items[]" onchange="toggleBorder(this,{{ $device->id }},{{ $device->price }},'{{ $device->name }}')" value="{{ $device->id }}" id="item_{{ $device->id }}" autocomplete="off" >
                                <label class="btn border border-1 border-dark d-flex justify-content-center items-center" for="item_{{ $device->id }}">
                                    <img width="100" height="100" class="orderkiosk_image" src="{{ asset($device->image) }}" alt="">
                                </label>
                                <div data-bs-toggle="tooltip"  data-bs-html="true" title="{{$device->device_model}} {{$device->name }}" class="custom-element
                                    d-flex justify-content-center align-items-center product_name_div   ">
                                    <span class="fs-5 product_name ">{{$device->device_model  }} {{ $device->name }}</span>
                                </div>
                                {{-- price --}}
                                <div class="d-flex justify-content-center mt-2 align-items-center">
                                    <span class="fs-6">{{ $device->price }}{{ __(' AED') }} <span class="vat">{{ __('+VAT') }}</span></span>
                                </div>
                                {{-- quantity --}}
                                <div id="quantityDiv_{{ $device->id }}" class="d-flex justify-content-center my-2 align-items-center hidden ">
                                    <label class="fs-6"  for="quantity_with_stand_{{ $device->id }}">{{ __('QTY: ') }}</label>

                                    <div class=" inline-group">
                                        <div class="input-group-prepend">
                                          <button type="button" onclick="upQuantity({{ $device->id }})" class="btn-minus">
                                            +
                                          </button>
                                        </div>
                                        <input  class="product_qty quantity w-50 mx-2 border border-1   px-3 " type="number" name="quantity_{{ $device->id }}" id="quantity_{{ $device->id }}" value="1" min="1" max="20" onchange="changeQuantity(this,{{ $device->id }})">

                                        <div class="input-group-append">
                                          <button type="button" onclick="downQuantity({{ $device->id }})" class="btn-plus">
                                            -
                                          </button>
                                        </div>
                                      </div>
                                </div>

                            </div>





                       @endforeach
                    </div>
                    </div>
                    <div class="d-grid justify-content-start align-items-center  border border-1  rounded my-3 p-2  " style="height: auto" >
                        <div id="invoice_description" class="hidden border-bottom border-1 border-dark">

                        </div>

                      <div class="d-flex justify-content-start align-items-center">
                        <span class="mx-2">{{ __('main.totalprice') }}</span>
                        <span id="total_price">0</span><span class="mx-2">{{ __(' AED ') }} <span class="vat">{{ __('+VAT') }}</span></span>
                      </div>
                    </div>

                    <div class="d-flex justify-content-center align-items-center" >
                    <button type="submit" class="btn btn-primary">{{ __('main.sendorder') }}</button>
                    </div>
                </form>

          </div>
        </div>
    </section>




  <!-- ======= Footer ======= -->
  <script src="{{ asset('https://cdn.jsdelivr.net/npm/sweetalert2@11') }}"></script>
  <script src="{{ asset('https://code.jquery.com/jquery-3.6.4.min.js') }}"></script>
    @if ($errors->any())
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: @json($errors->all()),
        });
    </script>
    @endif
    <script>

        var selectedItems=[];

        $(document).ready(function () {
            $('#contactForm').submit(function () {
                $('#submitButton').prop('disabled', true);
                $('#submitButton').prop('value',"Sending..");
            });
        });
        // errors

    // change quantity
    function changeQuantity(input,id){
        console.log(id);
        selectedItems[id].count=input.value;
        updateInvoice();

    }
    function upQuantity(id){
        inputNumber=document.getElementById(`quantity_${id}`);
        var value = parseInt(inputNumber.value, 10); // Convert value to integer
        if (value <20) {
            inputNumber.value = value + 1; // Decrement value
        } else {
            return;
        }
    }
    function downQuantity(id){
        var inputNumber = document.getElementById(`quantity_${id}`);
        var value = parseInt(inputNumber.value, 10); // Convert value to integer
        if (value > 0) {
            inputNumber.value = value - 1; // Decrement value
        } else {
            return;
        }

    }

    // select un select item
    function toggleBorder(checkbox,id,price,name) {
        const label = checkbox.nextElementSibling;
        quantityDiv=document.getElementById('quantityDiv_'+id);
        quantityInput=document.getElementById('quantity_'+id);
        if (checkbox.checked) {
            label.classList.remove('border-dark');
            label.classList.add('border-primary');
            quantityDiv.classList.remove('hidden');
            quantityInput.value=1;

            selectedItems[id]={price:price,name:name,count:document.getElementById('quantity_'+id).value};

            updateInvoice();

        } else {
            label.classList.remove('border-primary');
            label.classList.add('border-dark');
            quantityDiv.classList.add('hidden');
            delete selectedItems[id];

            updateInvoice();

        }
}

   function updateInvoice(){
    total_price=0;
    desc=document.getElementById('invoice_description');
    desc.classList.remove('hidden');
    desc.innerHTML=``;
    index=0;
    selectedItems.forEach(function(element,i) {
            elementprice=element.price*element.count;
        total_price+=elementprice;
        desc.innerHTML+=`<div>${index+1}) ${element.name}: ${element.count} * ${element.price}=${elementprice}</div>`;
        index+=1;
     });
     document.getElementById('total').value=total_price;
     document.getElementById('total_price').innerText=total_price;
   }
    </script>

  <script>

  </script>
  @if(session()->has('success'))
    <script>
        console.log('success');
        Swal.fire({
            icon: 'success',
            title: '{{ session('success_title') }}',
            text: '{{ session('success') }}',
            confirmButtonColor:'#1277D1',

        });
    </script>
@endif

@if($errors->has('message'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: '{{ $errors->first('message') }}',
        });


    </script>
@endif
@stop
