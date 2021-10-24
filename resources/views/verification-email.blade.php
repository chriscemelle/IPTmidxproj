<h1>IPT Midterm</h1>

<p>
    Hi! Welcome {{$user->name}}!
</p>

<p>
    You've received this email as a result of your registration to our web site.
    Please click on the verification link to verify your account.
</p>

<p>
    <a href="{{url('/verification/' . $user->id . "/" . $user->remember_token)}}">
        Click here to verify
    </a>
</p>