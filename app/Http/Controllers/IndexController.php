<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Spatie\SchemaOrg\Schema;
use App\Models\Fact;
use Carbon\Carbon;

use Illuminate\Support\Facades\Redirect;

class IndexController extends Controller
{


    public function index(Request $request){
        if (substr($request->url(), -1) === '/') {
            // Redirect to the URL without the trailing slash
            return Redirect::to(rtrim($request->url(), '/'), 301);
        }
        $firstVideo = Schema::videoObject()
        ->name("Questions form Video")
        ->description("Proccess of make responses on question form using FormsHub.")
        ->uploadDate(Carbon::parse('2024-05-18T08:00:00+08:00'))
        ->duration("PT1M33S")
        ->contentUrl("https://formshub.net/videos/questionsform.mp4")
        ->interactionCount(1234)
        ->publication(Schema::broadcastEvent()
            ->isLiveBroadcast(false)
            ->startDate(Carbon::parse('2024-05-18T08:00:00+08:00'))
            ->endDate(Carbon::parse('2024-05-18T09:00:00+08:00'))
        );

    $secondVideo = Schema::videoObject()
        ->name("Signature Video ")
        ->description("A comprehensive guide on how to use digital signatures for secure document signing.")
        ->uploadDate(Carbon::parse('2024-05-19T08:00:00+08:00'))
        ->duration("PT2M45S")
        ->contentUrl("https://formshub.net/videos/signature.mp4")
        ->interactionCount(5678)
        ->publication(Schema::broadcastEvent()
            ->isLiveBroadcast(false)
            ->startDate(Carbon::parse('2024-05-19T08:00:00+08:00'))
            ->endDate(Carbon::parse('2024-05-19T09:00:00+08:00'))
        );
        $schemaMarkupWeb=Schema::webPage()
        ->name('Home')
        ->description('Welcome to our website. Explore our products and services.')
        ->url(url()->current());
        $schemaMarkup = Schema::collection([$firstVideo, $secondVideo,$schemaMarkupWeb]);


        $facts=Fact::first();

        $features = [
            [
                'feature_text_english' => 'At Forms Hub, we firmly believe that simplicity is the essence of intelligence. Our primary objective is to maintain the simplicity and user-friendliness of our platform without compromising on features or quality. With just four easy steps, you can seamlessly start utilizing Forms Hub to its fullest potential.',

                'feature_text_arabic' => 'في فورمز هب، نعتقد بقوة أن البساطة هي جوهر الذكاء. هدفنا الرئيسي هو الحفاظ على بساطة وسهولة استخدام منصتنا دون التنازل عن الميزات أو الجودة. من خلال أربع خطوات سهلة فقط، يمكنك بسهولة البدء في استخدام فورمز هب بكامل إمكانياته.',
                'title'=> 'Simple & Easy ',
                'title_ar'=> 'بسيطة وسهلة',
                'blog_id'=>'',
                'svg' => ''
            ],

            [
                'feature_text_english' => 'We\'ve dedicated extensive time and effort to sourcing the most cost-effective materials and resources to create this budget-friendly product, all while maintaining uncompromised quality. Balancing affordability with quality isn\'t simple, but we\'re proud to say we\'ve achieved it.',
                'feature_text_arabic' => 'لقد كرسنا الكثير من الوقت والجهد في توفير أكثر المواد والموارد كفاءة من حيث التكلفة لإنشاء هذا المنتج الاقتصادي، وذلك دون التنازل عن الجودة. تحقيق التوازن بين التكلفة والجودة ليس بالأمر البسيط، ولكننا نفخر بأن نقول أننا قد حققنا ذلك.',
                'title'=>'Budget-friendly',
                'title_ar'=>'اقتصادي',
                'blog_id'=>'',
                'svg' => ''
            ],
            [
                'feature_text_english' => 'Access real-time statistics and responses effortlessly, without limitations. Monitor audience feedback, complaints, reviews, and analytics from a single interface. Export reports and statistics anytime with just one click, ensuring seamless data management.',
                'feature_text_arabic' => 'قم بالوصول إلى الإحصائيات والردود الفورية بدون عناء أو قيود. راقب تعليقات الجمهور والشكاوى والمراجعات والتحليلات من واجهة واحدة. قم بتصدير التقارير والإحصائيات في أي وقت بنقرة واحدة فقط، مما يضمن إدارة سلسة للبيانات.',
                'title'=>'Real-Time Statistics',
                'title_ar'=>'الإحصائيات الفورية',
                'blog_id'=>'',
                'svg' => ''
            ],[
                'feature_text_english' => 'We offer complimentary delivery and installation services across the UAE, and we\'re actively working towards extending this service worldwide.',
                'feature_text_arabic' => 'نقدم خدمة التوصيل والتركيب مجاناً في جميع أنحاء الإمارات، ونعمل بنشاط على توسيع هذه الخدمة إلى جميع أنحاء العالم.',
                'title'=>'Free Delivery & Installation',
                'title_ar'=>'توصيل وتركيب مجاني',
                'blog_id'=>'',
                'svg' => ''
            ]

        ];

        return view('index',compact('schemaMarkup','facts','features'));
    }
}
