From : {{$data['email']}}
<x-mail::message>
    <h1>Name : {{$data['name']}} </h1>
    <h1>Phone : {{$data['phone']}} </h1>
    @if($data['more_details'])
    <h2>More Details : {{$data['more_details']}} </h2>
    @endif
    <hr>
    <h2>Subject : {{$data['subject']}} </h2>
<h3>Message :</h3>
{{$data['message']}}
<br>
<br>

Thanks,
{{ config('app.name') }}
</x-mail::message>
