@component('mail::message')

<div class="card card-primary my-5">
   <div class="card-header">
       <h2 class="card-title text-success">hello from amsimmo.com</h2>
   </div>
   <div class="card-body">
      <p class="card-text">Name : {{$data['name']}}</p>
      <p class="card-text">Email : {{$data['email']}}</p>
      <p class="card-text">Mobile : {{$data['tel']}}</p>
      <p class="card-text">Subject : {{$data['subject']}}</p>
      <p class="card-text">Message : {{$data['message']}}</p>
   </div>
</div>



@component('mail::button', ['url' => 'mail.amsimmo.com'])
Replay to : {{$data['name']}}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
