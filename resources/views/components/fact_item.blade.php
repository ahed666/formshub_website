<div
data-aos-duration="1500" class="factitem col-12 col-lg-3 col-md-3 col-sm-6 ">
    <div class="fact_div" >
       <div class="fact-icon">
        {!! $svg !!}
       </div>
    </div>
    <div class="countdiv">
        <p data-purecounter-start="0" data-purecounter-end="{{$count  }}" data-purecounter-once="false" class="purecounter counter-data timer count-title count-number number stat-count" c>{{ $count }}</p>
    </div>
    <div class="stats-line-black"></div>

    <p>{{ $title }}</p>
</div>
