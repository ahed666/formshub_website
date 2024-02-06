@component('mail::message')
# New Contact Form Submission

Dear Support Team,

You have received a new contact form submission with the following details:

<div style="display: grid; grid-template-columns: 100px 1fr; gap: 10px; font-weight: bold;">
    <div>Name:</div>
    <div>{{ $contactData['name'] }}</div>
    <div>Email:</div>
    <div>{{ $contactData['email'] }}</div>
    <div>Subject:</div>
    <div>{{ $contactData['subject'] }}</div>
    <div>Message:</div>
    <div>{{ $contactData['message'] }}</div>
</div>



Thank you for your attention.

@endcomponent
