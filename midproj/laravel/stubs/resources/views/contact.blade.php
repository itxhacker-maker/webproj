@extends('layouts.app')

@section('title', 'Contact')

@section('content')
<section class="contact-section">
  <h1>Contact Us</h1>
  <form class="contact-form" method="POST" action="#">
    @csrf
    <input type="text" name="name" placeholder="Your Name" required>
    <input type="email" name="email" placeholder="Your Email" required>
    <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
    <button type="submit" class="btn">Send Message</button>
  </form>
</section>
@endsection
