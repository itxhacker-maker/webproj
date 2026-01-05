@extends('layouts.app')

@section('title', 'Learn Anything')

@section('content')
<section class="hero">
  <div class="hero-content">
    <h1>Learn Anything, Anytime, Anywhere</h1>
    <p>Explore a wide variety of online courses to enhance your skills.</p>
    <a href="{{ route('courses') }}" class="btn">Explore Courses</a>
  </div>
</section>

<p class="myDiv">Learn from industry professionals with real-world experience.</p>

<section class="highlights">
  <div class="highlight">
    <h3> Expert Instructors</h3>
    <p>Learn from industry professionals with real-world experience.</p>
  </div>
  <div class="highlight">
    <h3> Flexible Learning</h3>
    <p>Access your courses anytime, anywhere at your own pace.</p>
  </div>
  <div class="highlight">
    <h3> Certifications</h3>
    <p>Earn certificates to showcase your achievements.</p>
  </div>
</section>

<section class="courses-preview">
  <h2>Featured Courses</h2>
  <div class="course-grid">
    <div class="course-card">
      <img src="{{ asset('images/course1.jpg') }}" alt="">
      <h3>HTML & CSS for Beginners</h3>
      <p>Learn how to build beautiful websites from scratch.</p>
    </div>
    <div class="course-card">
      <img src="{{ asset('images/course2.jpg') }}" alt="">
      <h3>JavaScript Essentials</h3>
      <p>Understand the basics of programming with JavaScript.</p>
    </div>
  </div>
</section>
@endsection
