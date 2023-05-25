@extends('layout.layout')

@section('content')
    <section id="home" class="container">
        <div class="continer-fluid">
            <div class="row">
                <div class="col-sm mt-5">
                    <h1 class="mb-3 " style="font-weight:900;">Streamline your workflow and conquer your to-do list</h1>
                    <hr>
                    <P class="mt-5">Our task management platform simplifies your workflow by providing intuitive tools and
                        features, allowing you to efficiently organize, prioritize, and delegate tasks.</P>
                </div>
                <div class="col-sm">
                    <img src="{{ asset('images/hero-img.svg') }}" alt="Hero Image">
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="container">
        <div class="row">
            <h2>Services</h2>
        </div>
        <br>
        <div class="container-fluid mb-5">
            <div class="row">
                <div class="col-lg-4">
                    <div class="service-item text-center">
                        <i class="fas fa-check-circle"></i>
                        <h3>Task Organization</h3>
                        <p>Effortlessly organize your tasks and create a structured workflow to stay on top of your
                            projects.</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="service-item text-center">
                        <i class="fas fa-calendar-alt"></i>
                        <h3>Manage Deadline</h3>
                        <p>Efficiently manage deadlines and track progress to ensure timely completion of tasks and
                            projects.</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="service-item text-center">
                        <i class="fas fa-users"></i>
                        <h3>Collaboration</h3>
                        <p>Seamlessly collaborate with team members, assign tasks, and track progress for effective
                            teamwork.</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="service-item text-center">
                        <i class="fas fa-chart-line"></i>
                        <h3>Analytics</h3>
                        <p>Gain valuable insights with performance analytics to identify trends, optimize productivity.</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="service-item text-center">
                        <i class="fas fa-clock"></i>
                        <h3>Time Tracking</h3>
                        <p>Effortlessly track time spent on tasks, analyze productivity, and manage your work hours
                            effectively.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-item text-center">
                        <i class="fas fa-check-square"></i>
                        <h3>Task Prioritization</h3>
                        <p>Easily prioritize your tasks based on urgency and importance, ensuring you focus on what matters
                            most.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
