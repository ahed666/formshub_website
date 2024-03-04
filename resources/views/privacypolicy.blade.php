@extends('layouts.app')
@section('title', 'Privacy Policy of our website')
@section('meta_description', 'Read our Privacy Policy to understand how we collect, use, and protect your personal information. FormsHub is committed to protecting your privacy.')

  @section('content')
  @php
  $title=trans('main.privacypolicy_title');
  $text=trans('main.privacypolicy_text') ;
@endphp
@php
        $schemaMarkup = \Spatie\SchemaOrg\Schema::webPage()
            ->name('Privacy Policy')
            ->description('Read our privacy policy to understand how we collect, use, and protect your personal information.')
            ->url(url()->current());

    @endphp
@section('schema_markup')
{!! $schemaMarkup->toScript() !!}
@endsection
<x-header_section :title="$title" :text="$text" />
<section class="section">

    <div class="container terms">
        <div>
            By accessing or using the Service/Platform You agree to be bound by these Privacy Policies. If You disagree with any part of these Privacy Policies, you may not access the Service/Platform.
            Your access to and use of the Service/Platform is also conditioned on Your acceptance of and compliance with the Company`s Privacy Policy. Our Privacy Policy describes Our policies and procedures on the collection, use, and disclosure of Your personal information when You use the Service/Platform, Application, or Website and tells You about Your privacy rights and how the law protects You. Please read Our Privacy Policy carefully before using Our Service/Platform.

        </div>
        <x-title :title="'Interpretation And Definitions'" />
        <x-subtitle :title="'Interpretation'" />
        <x-description :desc="'The words of which the initial letter is capitalized have meanings defined under the following conditions. The following definitions shall have the same meaning regardless of whether they appear in the singular or the plural.'"/>

        <x-subtitle :title="'Definitions'" />
         <div class="definitionlist">
            <x-description :desc="'For the purposes of these Terms and Conditions:'"/>
            <x-definition :word="'Application'" :definition="'refers to any software, application, or Service that belongs to the company.'"/>
            <x-definition :word="'Service'" :definition="'refers to the Application the Website or both'"/>
            <x-definition :word="'Platform'" :definition="'refers to any software, application, or Service that belongs to the company.'"/>
            <x-definition :word="'Website'" :definition="'refers to any web page or application accessible from formshub.net, or any subdomain belonging to it, or any web page/website that belongs to the company.'"/>
            <x-definition :word="'Affiliate'" :definition="'means an entity that controls, is controlled by or is under common control with a party, where "control" means ownership of 50% or more of the shares, equity interest, or other securities entitled to vote for the election of directors or other managing authority.'"/>
            <x-definition :word="'Company'" :definition="'(referred to as either "the Company", "We", "Us" or "Our" in this Agreement) refers to Netcore IT Solutions - Sole Proprietorship L.L.C.'"/>
            <x-definition :word="'Device'" :definition="'means any device that can access the Service such as a computer, a cellphone, or a digital tablet.'"/>
            <x-definition :word="'Terms and Conditions'" :definition="'(also referred to as "Terms") means these Terms and Conditions that form the entire agreement between You and the Company regarding the use of the Service.'"/>
            <x-definition :word="'Privacy Policy'" :definition="'(also referred to as "Privacy Policies") means these Privacy Policies that form the entire agreement between You and the Company regarding your data privacy.'"/>
            <x-definition :word="'User'" :definition="'means the individual accessing or using the Service, or the company, or other legal entity on behalf of which such individual is accessing or using the Service, as applicable.'"/>
            <x-definition :word="'You'" :definition="'refers to the User.'"/>

         </div>


         <x-title :title="'Translation Interpretation'" />
         <x-description :desc="'These Privacy Policies may have been translated if We have made them available to You on our Service/Platform. You agree that the original English text shall prevail in the case of a dispute.'"/>


         <x-title :title="'Cookies '" />
         <x-description :desc="'“Cookies” are pieces of information that a website transfers to an individual’s hard drive for record-keeping purposes. cookies allow the Website to remember important information that will make your use of the site more convenient. the goal of collecting such information is to improve the online experience. We may use cookies so that we remember you when you return to the site.'"/>
         <x-description :desc="'Use the option in your web browser if you do not wish to receive cookies or if you wish to set your browser to notify you when you receive a cookie.'"/>


         <x-title :title="'Information we may collect from you '" />
         <div>
            <span class="hint">We may collect and process the following data about you: </span>
         </div>
         <ul class="list">
            <x-listitem :desc="'Information that you provide by filling in forms on our site www.formshub.net (“our site“). This includes information provided at the time of registering to use our site, subscribing to our service, posting material or requesting further services. We may also ask you for information when you report a problem with our site.'" />
            <x-listitem :desc="'If you contact us, we may keep a record of that correspondence.'" />
            <x-listitem :desc="'We may also ask you to complete surveys that we use for research purposes, although you do not have to respond to them.'" />
            <x-listitem :desc="'Details of transactions you carry out through our site and of the fulfilment of your orders.'" />
            <x-listitem :desc="'Details of your visits to our site including, but not limited to, traffic data, location data, weblogs and other communication data, whether this is required for our own billing purposes or otherwise and the resources that you access.'" />
        </ul>


        <x-title :title="'Uses made of the information  '" />
        <div>
           <span class="hint">We use information held about you in the following ways: </span>
        </div>
        <ul class="list">
            <x-listitem :desc="'To ensure that content from our site is presented most effectively for you and your computer.'" />
            <x-listitem :desc="'To provide you with information, products or services that you request from us or which we feel may interest you, where you have consented to be contacted for such purposes.'" />
            <x-listitem :desc="'To carry out our obligations arising from any contracts entered into between you and us.'" />
            <x-listitem :desc="'To allow you to participate in interactive features of our service when you choose to do so.'" />
            <x-listitem :desc="'To notify you about changes to our service.'" />
            <x-listitem :desc="'If you are an existing customer, we will only contact you by telephone or electronic means (e-mail or SMS) with information about goods and services.'" />
        </ul>



        <x-title :title="'Changing Your Personal Information'" />
        <x-description :desc="'We offer you the ability to correct or change the information collected at any time and as often as necessary, except for certain data fields which are restricted data fields and shall be marked as such on your account – for example, your mobile phone.'"/>

        <x-title :title="'Communicate With You'" />
        <x-description :desc="'We use the information we collect, like your email address, to interact with you directly. For example, we may send you a notification if we detect suspicious activity, like an attempt to sign in to your Account from an unusual location. Or we may let you know about upcoming changes or improvements to our services.'"/>

        <x-title :title="'Data Retention'" />
        <x-description :desc="'If we collect Data Subjects’ personal data, the length of time we hold Data Subjects’ personal data depends on several factors, such as the nature of the information we hold; the purpose for which this is processed; compliance with our legal obligations (such as crime detection and prevention, accounting, social security, and tax reporting laws); industry practices and/or accepted standards; whether Data Subjects and we are in a legal or some other type of dispute with third parties or each other. We do not retain sensitive information in an identifiable format for longer than is necessary. Where possible and on a case-by-case basis, we minimize, pseudonymize, anonymize, and/or destroy personal data, when the purpose/s for which it has been collated has been fulfilled/ duly satisfied'"/>

        <x-title :title="'Protecting Your Personal Information'" />
        <x-description :desc="'The security of your personal information is important to us. We recognize industry standards and practice appropriate administrative, technical, and physical security safeguards to protect the personal information you provide on this Website against accidental, unlawful, or unauthorized destruction, loss, alteration, access, unauthorized disclosure or use, and other unlawful forms of processing. In order to protect your personal information, we use several security techniques including secure servers'"/>

        <x-title :title="'Disclosure Of Your Information'" />
        <x-description :desc="'We may disclose your personal information to any member of our group, which means our subsidiaries, our ultimate holding company and its subsidiaries.'"/>
        <div>
            <span class="hint">We may disclose your personal information to third parties: </span>
         </div>
         <ul class="list">
            <x-listitem :desc="'In the event that we sell or buy any business or assets, in which case we may disclose your personal data to the prospective seller or buyer of such business or assets.'" />
            <x-listitem :desc="'If the Company or substantially all of its assets are acquired by a third party, in which case personal data held by it about its customers will be one of the transferred assets.'" />
            <x-listitem :desc="'If we are under a duty to disclose or share your personal data in order to comply with any legal obligation, or to enforce or apply our terms of use or terms and conditions of supply and other agreements; or to protect the rights, property, or safety of the Company, our customers, or others. This includes exchanging information with other companies and organizations for fraud protection and credit risk reduction.'" />
        </ul>
        <x-description :desc="'You have the right to ask us not to process your personal data for marketing purposes. We may inform you (before collecting your data) if we intend to use your data for such purposes. You can exercise your right to prevent such processing by checking certain boxes on your profile settings.'"/>
        <x-description :desc="'Our site may, from time to time, contain links to and from the websites of our partner networks and affiliates. If you follow a link to any of these websites, please note that these websites have their own privacy policies and that we do not accept any responsibility or liability for these policies. Please check these policies before you submit any personal data to these websites.'"/>


        <x-title :title="'Changes To This Privacy Policy'" />
        <x-description :desc="'At its sole discretion, the Company reserves the right to modify or replace these Privacy Policies at any time. If a revision is material, we will revise the updated date at the top of this page, and we may send you an email to notify you if possible. We may also provide notice to you in other ways at our discretion, such as through the contact information you have provided, but it is always the responsibility of the Users to periodically check the Agreement and search for any changes.'"/>
        <x-description :desc="'By continuing to access or use the Application after any revisions become effective, You agree to be bound by the revised Privacy Policies. If You do not agree to the new Privacy Policies, You are no longer authorized to use the Application/Platform/Service.'"/>

        <x-title :title="'Contacting Us'" />
        <x-description :desc="'Any questions about these Privacy Policies should be addressed to us via the contact form on our website.'"/>
        <a class="text-link" href="{{ route('contact') }}">formshub.net/contact</a>







    </div>
    <div class=" conclusion">
        <span >
            End of Privacy Policies
        </span>
      </div>
  </section>
  @stop
