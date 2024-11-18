<body>
    <h1>USER PROFILES</h1>
    @foreach ($profiles as $profile)
        <div>Name: {{$profile->user->name}}</div>
        <div>Email: {{$profile->user->email}}</div>
        <div>Bio: {{$profile->bio}}</div>
        <div>School: {{$profile->school}}</div>
    @endforeach
    </body>