@extends('layouts.app')

@section('title', 'Courses')

@section('content')
<section class="page-header">
  <h1>Our Courses</h1>
</section>

<section class="course-grid">
  <div class="course-card">
    <h3>Web Development</h3>
    <p>Learn HTML, CSS, and JavaScript to build interactive sites.</p>
    <a href="#" class="btn">Enroll Now</a>
  </div>

  <div class="course-card">
    <h3>Python Programming</h3>
    <p>Master Python for data analysis, AI, and web apps.</p>
    <a href="#" class="btn">Enroll Now</a>
  </div>

  <div class="course-card">
    <h3>UI/UX Design</h3>
    <p>Understand the principles of design and user experience.</p>
    <a href="#" class="btn">Enroll Now</a>
  </div>
</section>
@endsection
