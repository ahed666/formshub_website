<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeaturesController extends Controller
{
    public function index()
    {
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
                'feature_text_english' => 'Empowerment lies in centralisation. With the Forms Hub web application, relinquish concerns about control. From a single device, accessible anywhere globally, effortlessly manage kiosks, update forms, toggle their status, enable/disable, lock, and much more, all with unparalleled ease.',

                'feature_text_arabic' => 'القوة تكمن في التمركز. مع تطبيق الويب فورمز هب، تخلص من القلق بشأن التحكم. من جهاز واحد، قابل للوصول في أي مكان في العالم، يمكنك بسهولة إدارة الأجهزة، تحديث النماذج، تبديل حالتها، تمكين/تعطيل، قفل، والمزيد، كل ذلك بسهولة لا مثيل لها.',
                'title'=>'Cloud Base',
                'title_ar'=>'قاعدة سحابية',
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
                'feature_text_english' => 'We\'ve got you covered! Count on us to be there when you need assistance. Easily submit and track your support ticket online, and rest assured that our technical team typically responds within an average of 24 hours.',
                'feature_text_arabic' => 'نحن هنا لمساعدتك! اعتمد علينا لنكون هناك عندما تحتاج إلى مساعدة. قم بتقديم تذكرة الدعم الخاصة بك عبر الإنترنت بسهولة وتتبعها، واطمئن بأن فريقنا الفني يستجيب عادة في متوسط 24 ساعة.',
                'title'=>'Online Support',
                'title_ar'=>'الدعم عبر الإنترنت',
                'blog_id'=>'',
                'svg' => ''
            ],
            [
                'feature_text_english' => 'We offer a comprehensive one-year warranty for all our devices.',
                'feature_text_arabic' => 'نقدم ضماناً شاملاً لمدة عام واحد لجميع أجهزتنا.',
                'title'=>'Device Warranty',
                'title_ar'=>'ضمان الجهاز',
                'blog_id'=>'',
                'svg' => ''
            ],
            [
                'feature_text_english' => 'We offer complimentary delivery and installation services across the UAE, and we\'re actively working towards extending this service worldwide.',
                'feature_text_arabic' => 'نقدم خدمة التوصيل والتركيب مجاناً في جميع أنحاء الإمارات، ونعمل بنشاط على توسيع هذه الخدمة إلى جميع أنحاء العالم.',
                'title'=>'Free Delivery & Installation',
                'title_ar'=>'توصيل وتركيب مجاني',
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
            ],

            [
                'feature_text_english' => 'Keen on tracking audience feedback, complaints, and reviews? Look no further! Our (To-Do) feature has you covered. With just one click, assign tasks for every response received, streamline task delegation to your team, and effortlessly manage status updates on the go.',
                'feature_text_arabic' => 'هل ترغب في تتبع تعليقات الجمهور والشكاوى والمراجعات؟ لا داعي للبحث أكثر! ميزتنا (المهام) لديها ما تحتاج إليه. بنقرة واحدة فقط، قم بتعيين مهام لكل استجابة تلقتها، وبسهولة حدد تفويض المهام لفريقك، وأدر تحديثات الحالة بسهولة أثناء التنقل.',
                'title'=>'Task Management',
                'title_ar'=>'إدارة المهام',
                'blog_id'=>'',
                'svg' => ''
            ],

            [
                'feature_text_english' => 'Embark on a collaborative journey with your team by inviting them to your Forms Hub account. Easily manage team members and their privileges on the go, ensuring seamless teamwork and efficient collaboration.',
                'feature_text_arabic' => 'انطلق في رحلة تعاونية مع فريقك من خلال دعوتهم إلى حسابك في فورمز هب. قم بإدارة أعضاء الفريق وامتيازاتهم بسهولة أثناء التنقل، مما يضمن التعاون السلس والتعاون الفعال.',
                'title'=>'Team Invitation',
                'title_ar'=>'دعوة الفريق',
                'blog_id'=>'',
                'svg' => ''
            ],
            [
            'feature_text_english' => 'Our sleek interactive kiosk, weighing less than 10 kilograms, is ingeniously crafted for effortless installation and relocation, epitomizing modern design and adding a touch of elegance to your reception area.',
            'feature_text_arabic' => 'جهازنا التفاعلي الأنيق ، الذي يزن أقل من 10 كيلوغرامات ، مصمم ببراعة لتركيب ونقل سهلين ، يجسد التصميم الحديث ويضيف لمسة من الأناقة إلى منطقة الاستقبال الخاصة بك.',
            'title'=>'Slim Kiosk',
            'title_ar'=>'جهاز ذو حجم مناسب',
            'blog_id'=>'',
            'svg' => ''
            ],
            [
            'feature_text_english' => 'Craft a tailored feedback form encompassing diverse question types that align with your expectations, ensuring precise feedback acquisition for optimal insights.',
            'feature_text_arabic' => 'صمم نموذج استطلاع رأي مخصص  يشمل أنواعًا عديدة من الأسئلة تتماشى مع توقعاتك ، مما يضمن الحصول على ردود فعل دقيقة للحصول على رؤى مثلى.',
            'title'=>'Various Question Types',
            'title_ar'=>'أنواع عديدة من الأسئلة',
            'blog_id'=>'',
            'svg' => ''
            ],

            [
                'feature_text_english' => 'Integrating the Forms Hub physical kiosk into your site will elevate your clients\' experience, amplifying convenience and prompting higher customer satisfaction. With the ease of on-the-go access, utilizing physical kiosks significantly boosts response rates compared to SMS or email surveys.',
                'feature_text_arabic' => 'تواجد جهاز فورمز هب الفعلي في موقعك سيرفع تجربة عملائك ، ويعزز الراحة ويعزز رضا العملاء بشكل أكبر. من خلال سهولة الوصول في موقعك ، يعزز استخدام الأجهزة الفعلية معدلات الاستجابة بشكل كبير مقارنة باستطلاعات الرأي عبر الرسائل القصيرة أو البريد الإلكتروني.',
                'title'=>'Physical Kiosk',
                'title_ar'=>'جهاز فعلي',
                'blog_id'=>'',
                'svg' => ''
                ]



        ];

        // $jsonFeatures = json_encode(['features' => $features]);

        return view('whyformshub')->with('features', $features);
    }

}
