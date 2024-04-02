@extends('layouts.main')

@section('content')

<main>
    <section class="category">
        <div class="slider">
            <div class="slides">
                <div class="slide" id="slide1">
                    <img src="images/1.jpg" alt="Welcome Slide 1">
                </div>
                <div class="slide" id="slide2">
                    <img src="images/22.jpg" alt="Welcome Slide 2">
                </div>
                <div class="slide" id="slide3">
                    <img src="images/45.webp" alt="Welcome Slide 3">
                </div>
            </div>
            <a class="prev" onclick="changeSlide(-1)">&#10094;</a>
            <a class="next" onclick="changeSlide(1)">&#10095;</a>
        </div>
    </section>
    <section class="categories">
        <h2>Browse By Category</h2>
        <div class="cards">
            <div class="card concert">
                <img src="images/i1.jpeg" alt="Concert">
                <span>Concert</span>
            </div>
            <div class="card festival">
                <img src="images/f.webp" alt="Festival">
                <span>Festival</span>
            </div>
            <div class="card gossip">
                <img src="images/i1.jpeg" alt="Gossip">
                <span>Gossip</span>
            </div>
            <div class="card fantasy">
                <img src="images/f.webp" alt="Fantasy">
                <span>Fantasy</span>
            </div>
        </div>
    </section>
</main>

@endsection