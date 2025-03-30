@section('title') Contact Us @endsection


<style>
    .contact-container {
        max-width: 900px;
        margin: 50px auto;
        padding: 20px;
        background: #fff;
        border-radius: 10px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    }

    .contact-container h2 {
        text-align: center;
        margin-bottom: 20px;
        font-size: 32px;
    }

    .contact-info {
        display: flex;
        justify-content: space-between;
        margin-bottom: 30px;
    }

    .contact-info div {
        width: 48%;
        padding: 15px;
        background: #f9f9f9;
        border-radius: 8px;
        text-align: center;
    }

    .contact-form {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    .contact-form input,
    .contact-form textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
        font-size: 16px;
    }

    .contact-form button {
        padding: 12px;
        background: linear-gradient(to right, #1e3c72, #2a5298);
        border: none;
        color: white;
        font-size: 18px;
        cursor: pointer;
        border-radius: 5px;
        transition: background 0.5s ease-in-out;
    }
</style>

@extends('layout.generallayout')


@section('content')
<div class="contact-container">
    <h2>Contact Us</h2>

    <div class="contact-info">
        <div>
            <h3>Our Address</h3>
            <p>123 Street, City, Country</p>
        </div>
        <div>
            <h3>Email & Phone</h3>
            <p>Email: support@example.com</p>
            <p>Phone: +123 456 7890</p>
        </div>
    </div>

    <form class="contact-form" action="" method="">
        @csrf
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Your Email" required>
        <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
        <button type="">Send Message</button>
    </form>


</div>

@endsection