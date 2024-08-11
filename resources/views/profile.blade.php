{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">

        <div class="sticky-top bg-light" >

            <h1 class="text-start p-3" >User Profile</h1>

            <nav class="d-flex justify-content-end nav">
                <a class="nav-link active" href="{{ route('dashboard') }}">Dashboard</a>
                <a class="nav-link" href="{{ route('profile') }}">User Profile</a>
            </nav>

            <hr>
        </div>

        <div class="row g-0">
            <!-- Profile Picture Column -->
            <div class="col-sm-6 col-md-4 d-flex justify-content-center align-items-center">
                <img src="https://i.pinimg.com/564x/29/5b/8f/295b8f8e0306fee7196a83540e175442.jpg" alt="Profile Picture" class="rounded-circle img-fluid" style="width: 300px; height: 300px;">
            </div>

            <!-- User Details Column -->
            <div class="col-sm-6 col-md-8">

                <div class="card border-0">
                    <div class="card-body text-start">
                        <!-- User Details -->
                        <h5 class="card-title">Kiyoomi Sakusa</h5>
                        <p class="card-text text-muted">Pro-HeartShaker</p>

                        <div class="mb-3">
                            <p class="card-text"><i class="bi bi-envelope"></i> Email: OmiSakusa@example.com</p>
                            <p class="card-text"><i class="bi bi-geo-alt"></i> Address: 123 Aoba Johsai High Street, Fukurodani City, 54321 Japan</p>
                            <p class="card-text"><i class="bi bi-phone"></i> Phone: (123) 456-7890</p>
                        </div>

                        <!-- Bio Section -->
                        <div class="text-start">
                            <h6 class="text-primary">Bio</h6>
                            <p class="card-text">Hey there, I’m Kiyoomi Sakusa, the guy who makes hearts race just by walking into the room. On the court, I’m known for my killer spikes and cool demeanor—off the court, I’m basically a walking fashion statement who’s way too good at pretending I’m not impressed. My hobbies? Perfecting my “I-can’t-believe-I’m-here” look and making sure everyone knows I’m too classy for your average pep talk. If you think you’ve been shaken, you haven’t seen me in action. Trust me.</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>



    </div>

</body>
</html> --}}

@extends('layout')

@section('content')
<div class="row g-0">
    <!-- Profile Picture Column -->
    <div class="col-sm-6 col-md-4 d-flex justify-content-center align-items-center">
        <img src="https://i.pinimg.com/564x/29/5b/8f/295b8f8e0306fee7196a83540e175442.jpg" alt="Profile Picture" class="rounded-circle img-fluid" style="width: 300px; height: 300px;">
    </div>

    <!-- User Details Column -->
    <div class="col-sm-6 col-md-8">

        <div class="card border-0">
            <div class="card-body text-start">
                <!-- User Details -->
                <h5 class="card-title">{{$name}}</h5>
                <p class="card-text text-muted">Pro-HeartShaker</p>

                <div class="mb-3">
                    <p class="card-text"><i class="bi bi-envelope"></i>{{$email}}</p>
                    <p class="card-text"><i class="bi bi-geo-alt"></i> Address: 123 Aoba Johsai High Street, Fukurodani City, 54321 Japan</p>
                    <p class="card-text"><i class="bi bi-phone"></i> Phone: (123) 456-7890</p>
                </div>

                <!-- Bio Section -->
                <div class="text-start">
                    <h6 class="text-primary">Bio</h6>
                    <p class="card-text">Hey there, I’m Kiyoomi Sakusa, the guy who makes hearts race just by walking into the room. On the court, I’m known for my killer spikes and cool demeanor—off the court, I’m basically a walking fashion statement who’s way too good at pretending I’m not impressed. My hobbies? Perfecting my “I-can’t-believe-I’m-here” look and making sure everyone knows I’m too classy for your average pep talk. If you think you’ve been shaken, you haven’t seen me in action. Trust me.</p>
                </div>
            </div>
        </div>

    </div>

</div>



</div>
@endsection
