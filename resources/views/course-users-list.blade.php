<body>
    @foreach ($courses as $course)
        <h1>COURSE:{{$course->course_name}}</h1>
        <h1>USERS:</h1>
        @foreach ($course->users as $user)
            <div>{{$user->name}}</div>
        @endforeach
        <hr>
    @endforeach
</body>