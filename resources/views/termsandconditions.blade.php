@extends('layouts.app')
@section('title',  trans('main.terms_tab'))

@section('meta_description', 'Read our terms and conditions to understand the rules and guidelines for using our service. Learn about user responsibilities, data usage policies, and more.')


@section('content')
@php
$title=trans('main.termsandconditions_title') ;
$text='';
@endphp
@php
        $schemaMarkup = \Spatie\SchemaOrg\Schema::webPage()
            ->name('Terms and Conditions')
            ->description('Read our terms and conditions to understand the rules and guidelines for using our website.')
            ->url(url()->current());


    @endphp
@section('schema_markup')
{!! $schemaMarkup->toScript() !!}
@endsection
<x-header_section :title="$title" :text="$text" />


<section class="section">

    <div class="container terms">
        <div>
            These are the Terms and Conditions governing the use of this Service/Platform and the agreement that operates between You and the Company. These Terms and Conditions set out the rights and obligations of all users regarding the use of the Service/Platform.
            Your access to and use of the Service/Platform is conditioned on Your acceptance of and compliance with these Terms and Conditions. These Terms and Conditions apply to all visitors, users, and others who access or use the Service/Platform.
            By accessing or using the Service/Platform You agree to be bound by these Terms and Conditions. If You disagree with any part of these Terms and Conditions, you may not access the Service/Platform.

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

        <x-title :title="'Acceptable Use '" />
        <x-description :desc="'This AUP (as modified from time to time by the Company in its sole discretion) is a legal agreement between You (“User”, “You”, “Your”) and the entity listed on your Ordering Document and deﬁnes the terms and conditions under which You are allowed to use the Service/Platform (as defined below). This AUP forms a part of the Agreement and takes effect as soon as You begin using the Services. '"/>
         <div>
            <span class="hint">You may use our Service/Platform only for lawful purposes. You may not use our Service/Platform:</span>
         </div>
         <ol class="list">
            <x-listitem :desc="'In any way that breaches any applicable local, national, or international law or regulation.'" />
            <x-listitem :desc="'In any way that is unlawful or fraudulent, or has any unlawful or fraudulent purpose or effect.'" />
            <x-listitem :desc="'For the purpose of harming or attempting to harm minors in any way.'" />
            <x-listitem :desc="'To send, knowingly receive, upload, download, use, or re-use any material that does not comply with our content standards.'" />
            <x-listitem :desc="'To transmit, or procure the sending of, any unsolicited or unauthorized advertising or promotional material or any other form of similar solicitation (spam).'" />
            <x-listitem :desc="'To knowingly transmit any data, send or upload any material that contains viruses, Trojan horses, worms, time-bombs, keystroke loggers, spyware, adware, or any other harmful programs or similar computer code designed to adversely affect the operation of any computer software or hardware.'" />
        </ol>
        <div>
            <span class="hint">You also agree:</span>
         </div>
         <ol>
            <x-listitem :desc="'User will not use the System in any manner that could damage, disable, overburden, or impair the System or interfere with any other party\'s use and enjoyment of them. Users will not attempt to gain unauthorized access to any reports, data, service, account, computer systems, or networks associated with the System. Users shall not use the System to violate any legal law, rule, or regulation. Users must comply with all User policies and procedures regarding data access, privacy, and security and shall not transmit false or misleading information.'" />
            <x-listitem :desc="'Not to reproduce, duplicate, copy, or re-sell any part of our Service/Platform in contravention of the provisions of our terms of Service/Platform use.'" />
            <x-listitem :desc="'Not to access without authority, interfere with, damage, or disrupt:'"/>
                <ul>
                    <li>Any part of our Service/Platform.</li>
                    <li>Any equipment or network on which our platform is stored.</li>
                    <li>Any software used in the provision of our platform.</li>
                    <li>Any equipment, network, or software owned or used by any third party.</li>
                </ul>

        </ol>

        <x-title :title="'Limitation Of Liability '" />
        <x-description :desc="'In no event shall the Company or its suppliers be liable for any incidental, indirect, special, punitive, exemplary, or consequential damages arising out of your use of or inability to use the Service/Platform or Application (including without limitation loss of data or other information, loss of privacy arising out of or in any way related to the use of or inability to use the Service, computer failure or malfunction, or any other damages).'"/>

        <x-title :title="'"AS IS" And "AS AVAILABLE" Disclaimer'" />
        <x-description :desc="'The Service is provided to You "AS IS" and "AS AVAILABLE" and with all faults and defects without warranty of any kind. To the maximum extent permitted under applicable law, the Company, on its behalf and on behalf of its Affiliates and their respective licensors and Service providers, expressly disclaims all warranties, whether express, implied, statutory or otherwise, concerning the Service, including all implied warranties of merchantability, fitness for a particular purpose, title and non-infringement, and warranties that may arise out of the course of dealing, course of performance, usage or trade practice. Without limitation to the foregoing, the Company provides no warranty or undertaking, and makes no representation of any kind that the Service will meet Your requirements, achieve any intended results, be compatible or work with any other software, applications, systems, or Services, operate without interruption, meet any performance or reliability standards or be error-free or that any errors or defects can or will be corrected.'"/>
        <x-description :desc="'Without limiting the foregoing, neither the Company nor any of the Company’s providers make any representation or warranty of any kind, express or implied: (1) as to the operation or availability of the Service or the information, and content included thereon; (2) that the Service will be uninterrupted or error-free; (3) as to the accuracy, reliability, or currency of any information or content provided through the Service/Platform; or (4) that the Service, its servers, the content, or e-mails sent from or on behalf of the Company are free of viruses, scripts, trojan horses, worms, malware, timebombs or other harmful components.'"/>





    <x-title :title="'Severability And Waiver'" />

    <x-subtitle :title="'Severability'" />
    <x-description :desc="'If any provision of these Terms is held to be unenforceable or invalid, such provision will be changed and interpreted to accomplish the objectives of such provision to the greatest extent possible under applicable law and the remaining provisions will continue in full force and effect.
    '"/>
    <x-subtitle :title="'Waiver'" />
    <x-description :desc="'Except as provided herein, the failure to exercise a right or to require the performance of an obligation under these Terms shall not affect a party\'s ability to exercise such right or require such performance at any time thereafter nor shall the waiver of a breach constitute a waiver of any subsequent breach.'"/>


    <x-title :title="'Termination'" />
    <x-description :desc="'We may terminate or suspend Your access immediately, without prior notice or liability, for any reason whatsoever, including without limitation if You breach these Terms and Conditions.'"/>
    <x-description :desc="'Upon termination, Users who have a paid subscription are not eligible for a payment refund whatsoever.'"/>
    <x-description :desc="'Upon termination, your right to use the Service will cease immediately.'"/>
    <x-description :desc="'Also, at its sole discretion, the Company reserves the right to end or stop the services for all Users without prior notice or liability.    '"/>

    <x-title :title="'Data Loss And Backup'" />
    <x-description :desc="'It is always the user’s responsibility to back up all existing data, software, and programs. The company is not responsible for loss, recovery, or compromise of data or loss of use of equipment arising out of or in connection with the Services we provide.'"/>

    <x-title :title="'Translation Interpretation'" />
    <x-description :desc="'    These Terms and Conditions may have been translated if We have made them available to You on our Service/Platform. You agree that the original English text shall prevail in the case of a dispute.'"/>

    <x-title :title="'Copyright'" />
    <x-description :desc="'All material contained on the Platform, Website, or Application (including all software, HTML code, Java applets, Active X controls, and other code) is protected. Except as otherwise expressly provided in these terms and conditions, you may not copy, distribute, transmit, display, perform, reproduce, publish, license, modify, rewrite, create derivative works from, transfer, or sell any material contained on the Platform, Website, or Application without the prior consent of the copyright owner'"/>
    <x-description :desc="'None of the material contained on the Platform, Website, or Application may be reverse-engineered, disassembled, decompiled, transcribed, stored in a retrieval system, translated into any language or computer language, retransmitted in any form or by any means (electronic, mechanical, photo reproduction, recordation or otherwise), resold or redistributed without the prior written consent of the Company. Violation of this provision may result in severe civil and criminal penalties.'"/>

    <x-title :title="'Indemnification'" />
    <x-description :desc="'You agree to indemnify and hold the Company and its parents, subsidiaries, affiliates, officers, employees, agents, partners, and licensors (if any) harmless from any claim or demand, including reasonable attorneys\' fees, due to or arising out of your: (a) use of the Application; (b) violation of this Agreement or any law or regulation; or (c) violation of any right of a third party.'"/>

    <x-title :title="'Payment Terms'" />
    <x-description :desc="'    You will be charged in advance using the payment method you agree upon and authorize the Company to automatically charge your credit card for all payments owed by you. You agree that the information you supply is correct and will notify the Company when billing or payment information changes.
    '"/>
    <x-description :desc="'You agree to indemnify and hold the Company and its parents, subsidiaries, affiliates, officers, employees, agents, partners, and licensors (if any) harmless from any claim or demand, including reasonable attorneys\' fees, due to or arising out of your: (a) use of the Application; (b) violation of this Agreement or any law or regulation; or (c) violation of any right of a third party.'"/>




    <x-title :title="'Pricing And Subscriptions'" />
    <x-description :desc="'At its sole discretion, the Company reserves the right to modify or change the price of products, services, or subscriptions provided without prior notice or liability. The Company reserves the right to cancel free products, services, or subscriptions at any time without prior notice or liability.'"/>

    <x-title :title="'Changes To This Agreement'" />
    <x-description :desc="'At its sole discretion, the Company reserves the right to modify or replace this Agreement at any time. If a revision is material, we will revise the updated date at the top of this page, and we may send you an email to notify you if possible. We may also provide notice to you in other ways at our discretion, such as through the contact information you have provided, but it is always the responsibility of the Users to periodically check the Agreement and search for any changes.'"/>
    <x-description :desc="'By continuing to access or use the Application after any revisions become effective, You agree to be bound by the revised terms. If You do not agree to the new terms, You are no longer authorized to use the Application/Platform/Service.'"/>


    <x-title :title="'Contacting Us'" />
    <x-description :desc="'Any questions about these Terms & Conditions should be addressed to us via the contact form on our website.'"/>
    <a class="text-link" href="{{ route('contact') }}">formshub.net/contact</a>


  </div>
  <div class=" conclusion">
    <span >
        End of Terms & Conditions
    </span>
  </div>

</section>

@stop
