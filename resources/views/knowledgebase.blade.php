@extends('layouts.app')
@section('title', 'KnowledgeBase - find your question here')

@section('meta_description', 'Explore our knowledge base to find answers to common questions, learn about features, and get the most out of FormsHub.')


  @section('content')

  <main id="main">


    @php
        $title= trans('main.kb_title') ;
        $text='' ;
    @endphp
  @section('schema_markup')
  {!! $schemaMarkup->toScript() !!}
  @endsection
     <x-header_section :title="$title" :text="$text" />

    <section class="section p-2">
        <div class="container">
        @foreach ( $categoriesWithQuestions as $category )
            <div id="cat-{{ $category->id }}" class="faq_cateogry">
                <h6 class="title">
                @if(App::getLocale()=="en")    {{ $category->name }}
                @else {{ $category->name_ar }}
                @endif
                </h6>
                @foreach ( $category->questions as $question)
                    <div class="mt-3">
                        <button id="question-{{ $question->id }}" onclick="ShowAnswer({{ $question->id }})"  class="question">
                            @if(App::getLocale()=="en")
                            <span class="accordion">{{ $question->question }}</span>
                            @else  <span class="accordion">{{ $question->question_ar }}</span>
                            @endif
                        </button>
                        <div id="answer-{{ $question->id }}" class="panel">
                        <p>

                            @if(App::getLocale()=="en")
                            @php
                                $text = str_replace('__CONTACT_ROUTE__',route('contact'), $question->answer);
                                $text = str_replace('__PRODUCTS_ROUTE__',route('contact'), $question->answer);
                                $text = str_replace('__PRICING_ROUTE__',route('contact'), $question->answer);
                                $text = str_replace('__KB_ROUTE__',route('contact'), $question->answer);
                                $text = str_replace('__TERMS_ROUTE__',route('contact'), $question->answer);
                                $text = str_replace('__PP_ROUTE__',route('contact'), $question->answer);

                            @endphp
                            {!! $text !!}
                            @else
                            @php
                                $text = str_replace('__CONTACT_ROUTE__',route('contact'), $question->answer_ar);
                                $text = str_replace('__PRODUCTS_ROUTE__',route('contact'), $question->answer_ar);
                                $text = str_replace('__PRICING_ROUTE__',route('contact'), $question->answer_ar);
                                $text = str_replace('__KB_ROUTE__',route('contact'), $question->answer_ar);
                                $text = str_replace('__TERMS_ROUTE__',route('contact'), $question->answer_ar);
                                $text = str_replace('__PP_ROUTE__',route('contact'), $question->answer_ar);
                            @endphp
                            {!! $text !!}
                            @endif
                        </p>

                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
        <div class="d-flex justify-content-center items-align-center">
            {{ __('main.helpquestion') }}     <a class="text-link" href="{{ route('contact') }}">formshub.net/contact</a>

        </div>
        </div>


    </section>



  </main><!-- End #main -->
  <script>
    var current_question = {!! json_encode($current_question, JSON_HEX_TAG) !!};
    if(current_question!=null)
    {
        var answer = document.getElementById(`answer-${current_question.id}`);
        var question = document.getElementById(`question-${current_question.id}`);
        question.classList.add("active_faq");
        if (answer.style.display=="block") {
            answer.style.display = "none";
            }
            else {
                answer.style.display = "block";
        }
        scrollToSection(current_question.faq_category_id);
    }

    // knowledge base
    // var acc = document.getElementsByClassName("accordion");
    // var allPanels = document.getElementsByClassName("panel");
    //     var i;
    //     console.log(acc);
    //     for (i = 0; i < acc.length; i++) {

    //     acc[i].addEventListener("click", function() {

    //         for (var j = 0; j < allPanels.length; j++) {
    //             allPanels[j].style.display = "none";
    //         }
    //         this.classList.toggle("active_faq");
    //         var panel = this.nextElementSibling;

    //         if (panel.style.display === "block") {
    //         panel.style.display = "none";
    //         } else {
    //         panel.style.display = "block";
    //         }
    //     });
    // }
    function ShowAnswer(id){
             var answers = document.getElementsByClassName("panel");
             var questions = document.getElementsByClassName("question");
            for (var j = 0; j < answers.length; j++) {
                if( answers[j].id!=`answer-${id}`)
                {answers[j].style.display = "none";
                questions[j].classList.remove("active_faq");}
            }

      question=document.getElementById(`question-${id}`);
      question.classList.toggle("active_faq");
      answer=document.getElementById(`answer-${id}`);

      if (answer.style.display == "block") {
        answer.style.display = "none";
            } else {
                answer.style.display = "block";
            }
    }
    function scrollToSection(sectionId) {
      var section = document.getElementById(`cat-${sectionId}`);

      if (section) {
        section.scrollIntoView({ behavior: 'smooth' });
      }
    }

  </script>

  @stop
