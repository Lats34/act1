<body>
    <div class="container">
        <h1>User Profile</h1>
        @if ($user)
            <p><strong>Name:</strong> {{ $user->name }}</p>
            <p><strong>Email:</strong> {{ $user->email }}</p>
            <p><strong>Created At:</strong> {{ $user->created_at->format('F j, Y') }}</p>

            @if ($user->profile)
                <h2>Profile Details</h2>
                <p><strong>Bio:</strong> {{ $user->profile->bio }}</p>
                <p><strong>Address:</strong> {{ $user->profile->address }}</p>
            @else
                <p>No profile details available.</p>
            @endif
        @else
            <p>User not found.</p>
        @endif
        <a href="{{ url('/') }}">Back to Home</a>
    </div>
</body>