@extends('layouts.app')
@section('title', 'KnowledgeBase - find your question here')



  @section('content')

  <main id="main">


    @php
        $title= trans('main.kb_title') ;
        $text= trans('main.kb_text') ;
    @endphp
     <x-header_section :title="$title" :text="$text" />

    <section class="section p-2">

        @foreach ( $categoriesWithQuestions as $category )
            <div id="cat-{{ $category->id }}" class="faq_cateogry">
                <h6 class="title">
                @if(App::getLocale()=="en")    {{ $category->name }}
                @else {{ $category->name_ar }}
                @endif
                </h6>
                @foreach ( $category->questions as $question)
                    <div>
                        <button id="question-{{ $question->id }}" onclick="ShowAnswer({{ $question->id }})"  class="accordion">
                            @if(App::getLocale()=="en")    {{ $question->question }}
                            @else {{  $question->question_ar }}
                            @endif
                        </button>
                        <div id="answer-{{ $question->id }}" class="panel">
                        <p>
                            @if(App::getLocale()=="en"){!! $question->answer !!}
                            @else {{  $question->answer_ar }}
                            @endif
                        </p>

                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach



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
             var questions = document.getElementsByClassName("accordion");
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
