<body>
    <h1>User Name: {{$User->name}}</h1>

    <h1>COURSES</h1>
    @foreach ($user->courses as $course)
        <div>{{$course->course_name}}</div>
    @endforeach
</body>