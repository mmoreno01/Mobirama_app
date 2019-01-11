@extends('layout')

@section('content')

<div class="uk-height-large uk-background-cover uk-light uk-flex uk-flex-top" uk-parallax="bgy: -200" style="background-image: url('imagenes/payroll/pyroll.png');">
    <h1 class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical" uk-parallax="y: 50,0">SOFOM</h1>
</div>

<h1>Blog</h1>

<section id="content-items">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="post preview st-1">
                    <figure class="post-thumbnail">
                      <div class="hover">
                        <a href="images/big-images/4.jpg" class="lightbox-images">
                          <span class="wicon-iconmonstr-zoom-in-thin"></span>
                        </a>
                      </div>
                      <img src="imagenes/blog/4.jpg" alt="">
                    </figure>
                <div class="post-content">
                      <ul class="meta">
                        <li class="meta-date">Posted on
                          <a href="#">2th May, 2018</a>
                        </li>
                        <li class="meta-category">in
                          <a href="#">News &amp; Events</a>
                        </li>
                      </ul>
                      <h4 class="post-title">
                        <a href="#">Five great lessons you can learn from Walton Consulting</a>
                      </h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam id vestibulum ante, eget venenatis mi.</p>
                      <p>
                        <a href="#" class="color-link">Read more
                          <i class="fa fa-long-arrow-right"></i>
                        </a>
                      </p>
                    </div>
                  </div>
            </div>
            <div class="col-md-4">
                <ul>
                    <li>enlase</li>
                    <li>enlase</li>
                    <li>enlase</li>
                    <li>enlase</li>
                </ul>
            </div>
        </div>
    </div>
</section>

@endsection
