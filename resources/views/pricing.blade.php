@extends('layouts.app')
@section('title', 'Pricing - plans and subscriptions')
@section('meta_description', 'View our pricing plans and choose the right one for your needs. FormsHub offers flexible pricing options for businesses of all sizes.')

@section('content')


    <!-- ======= FeatPricingures Section ======= -->
    @php
        $title=trans('main.pricing_title');
        $text='' ;
    @endphp
     <x-header_section :title="$title" :text="$text" />
     @section('schema_markup')
     {!! $schemaMarkup->toScript() !!}
     @endsection
    <section class="section">
      <div class="container">

        <div class="row justify-content-center text-center">
          <div class="col-md-7 mb-5">
            <h2 class="section-heading">{{ __('main.chooseplan_title') }}</h2>
            <p>{{ __('main.chooseplan_text') }}</p>
          </div>
        </div>
        <div class="row justify-content-center align-items-stretch">
            @foreach ($types as $type )

                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="pricing h-100 text-center">
                    <span>&nbsp;</span>
                    <h3>{{ $type->subscription_type }}</h3>
                    <ul class="list-unstyled">
                        {{--  num of forms --}}
                        <li class="subscription_feature ">
                            <x-subscriptionfeature_svg :colorid="0" />
                            <span class="subscription_text" >{{ __('main.createuptodoforms',['num'=>$type->num_forms]) }}</span>
                        </li>
                        {{--  num of kiosks --}}
                        <li class="subscription_feature ">
                            <x-subscriptionfeature_svg :colorid="0" />
                            <span class="subscription_text" >{{ __('main.connectuptokiosks',['num'=>$type->num_kiosks]) }}</span>
                        </li>
                        {{--  num of responses --}}
                        @if($type->subscription_type=="Free")
                            <li class="subscription_feature  ">

                                <x-subscriptionfeature_svg :colorid="0" />
                                <span class="subscription_text" >{{ __('main.getupresponses',['num'=>env('NUM_OF_RESPONSES_FREE',500)]) }}</span>

                            </li>
                        @else
                            <li class="subscription_feature   ">

                                <x-subscriptionfeature_svg :colorid="0" />
                                <span class="subscription_text" >{{ __('main.getflexableresponses',['num'=>env('NUM_OF_RESPONSES_PREMIUM',30000),'max'=>$type->num_responses]) }}</span>
                            </li>
                        @endif
                        {{--  num of questions --}}
                        <li class="subscription_feature ">
                            <x-subscriptionfeature_svg :colorid="0" />
                            <span class="subscription_text" >{{ __('main.addquestionsperform',['num'=>$type->num_questions]) }}</span>
                        </li>
                        {{-- Multi-languages form --}}
                        @if($type->multi_languages)

                            <li class="subscription_feature ">
                                <x-subscriptionfeature_svg :colorid="0" />
                               <span class="subscription_text" >{{ __('main.multilangaugeform') }}</span>
                            </li>
                        @endif
                        {{--Professional dashboard & statistics --}}
                        @if($type->professional_dashboard_statistics)

                            <li class="subscription_feature ">
                                <x-subscriptionfeature_svg :colorid="0" />
                                <span class="subscription_text" >{{ __('main.professionaldash') }}</span>
                            </li>
                        @endif
                        {{-- Use pro question types --}}
                        @if($type->pro_questions)

                            <li class="subscription_feature">
                                <x-subscriptionfeature_svg :colorid="0" />
                                <span class="subscription_text" >{{ __('main.useproquestions') }}</span>
                            </li>
                        @endif
                        {{-- Custom form logo --}}
                        @if($type->custom_form)

                            <li class="subscription_feature">
                                <x-subscriptionfeature_svg :colorid="1" />
                                <span class="subscription_text" >{{ __('main.customformlogo') }}</span>
                            </li>
                        @endif
                        {{--Add form terms agreement --}}
                        @if($type->form_terms)

                            <li class="subscription_feature">
                                <x-subscriptionfeature_svg :colorid="1" />

                                <span class="subscription_text" >{{ __('main.addtermsagreement') }}</span>
                            </li>
                        @endif
                         {{--Add  account members --}}
                        @if($type->team_members)
                            <li class="subscription_feature">
                                <x-subscriptionfeature_svg :colorid="1" />

                                <span class="subscription_text" >{{ __('main.addupaccountmembers',['num'=>5]) }}</span>
                            </li>
                        @endif
                        {{-- Access to To-Do manager --}}
                        @if($type->todo)

                            <li class="subscription_feature">
                                <x-subscriptionfeature_svg :colorid="1" />

                                <span class="subscription_text" >{{ __('main.accesstodomanager') }}</span>
                            </li>
                        @endif
                          {{-- Export statistics & responses reports--}}
                        @if($type->export)

                            <li class="subscription_feature ">
                                <x-subscriptionfeature_svg :colorid="1" />

                                <span class="subscription_text" >{{ __('main.signpdf') }}</span>
                            </li>
                        @endif
                    </ul>
                    <div class="price-cta">
                        <strong class="price">{{ $type->price }}{{ __(' AED') }}</strong>

                        @if($type->subscription_type=="Free")
                        <p><a href="{{ config('app.sub_domain_name') }}" class="btn btn-white" target="_blank">{{ __('main.start') }}</a></p>
                        @else
                        <p><a href="{{ config('app.sub_domain_subscriptions_name') }}" class="btn btn-white" target="_blank">{{ __('main.getpremium') }}</a></p>

                        @endif
                    </div>
                    </div>
                </div>

            @endforeach
          {{-- <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="pricing h-100 text-center popular">
              <span class="popularity">Most Popular</span>
              <h3>Professional</h3>
              <ul class="list-unstyled">
                <li>Create up to 20 forms</li>
                <li>Generate 2500 monthly reports</li>
                <li>Manage a team of up to 5 people</li>
              </ul>
              <div class="price-cta">
                <strong class="price">$9.95/month</strong>
                <p><a href="#" class="btn btn-white">Choose Plan</a></p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="pricing h-100 text-center">
              <span class="popularity">Best Value</span>
              <h3>Ultimate</h3>
              <ul class="list-unstyled">
                <li>Create up to 20 forms</li>
                <li>Generate 2500 monthly reports</li>
                <li>Manage a team of up to 5 people</li>
              </ul>
              <div class="price-cta">
                <strong class="price">$199.95/month</strong>
                <p><a href="#" class="btn btn-white">Choose Plan</a></p>
              </div>
            </div>
          </div> --}}
        </div>
      </div>
    </section>





    @stop

