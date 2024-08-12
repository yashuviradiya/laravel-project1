<x-mail::message>
# Introduction

The body of your message.

<p><strong>Name:</strong> {{ $contactFormData['name'] }}</p>

<p><strong>Email:</strong> {{ $contactFormData['email'] }}</p>

<p><strong>Message:</strong> {{ $contactFormData['message'] }}</p>


Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
