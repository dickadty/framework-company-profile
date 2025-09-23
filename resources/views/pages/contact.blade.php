@extends('layouts.app')

@section('title', 'Contact')

@section('content')
    <section class="container py-6">
        <h2>Contact Us</h2>
        <form action="#" method="POST" class="contact-form">
            @csrf
            <div class="form-row">
                <label>Nama</label>
                <input type="text" name="name" placeholder="Nama lengkap">
            </div>
            <div class="form-row">
                <label>Email</label>
                <input type="email" name="email" placeholder="email@domain.com">
            </div>
            <div class="form-row">
                <label>Pesan</label>
                <textarea name="message" rows="5"></textarea>
            </div>
            <button class="btn" type="submit">Kirim</button>
        </form>
    </section>
@endsection
