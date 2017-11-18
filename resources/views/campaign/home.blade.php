@extends('app')

@section('content')
<div class="banner">
    <h1 class="text-center">THE YOLO MEAL PLAN</h1>
</div>
<div class="container">
    <div class="row home-section-one">
        <div class="col-md-offset-1 col-md-10">
            <h6><strong>YOLO</strong> makes it easy for you by becoming your personal nutritionist!</p></h6>
            <h6>We make SHAPING-UP a fun, healthy and tasty experience!</p></h6>
        </div>
    </div>
    <div class="row home-section-two">
        <div class="col-md-offset-1 col-md-10">
            <ul>
                <li><p><strong>PERSONALISED</strong> - Weekly Meal Plans designed by our nutritionist to fit YOU!</p></li>
                <li><p><strong>CONVENIENT</strong> - we partner with Uber Eats to bring your meals to your doorstep at no extra cost!</p></li>
                <li><p><strong>TASTY</strong> - your meal plan is filled with our best YOLO recipes to make sure that you don’t compromise on taste!</p></li>
                <li><p><strong>AFFORDABLE</strong> - $99 per week including lunch and dinners! Sayyy whatttt!?</p></li>
            </ul>
        </div>
    </div>
    <div class="row home-section-three">
        <div class="col-md-offset-1 col-md-2">
            <section class="img-container">
                <a href="{{route('campaign.how')}}">
                    <img src="http://placehold.it/165x165" alt="" class="img-responsive img-circle center">
                    <h2>How does it work?</h2>
                </a>
            </section>
        </div>
        <div class="col-md-2">
            <section class="img-container">
                <a href="{{route('campaign.pricing')}}">
                    <img src="http://placehold.it/165x165" alt="" class="img-responsive img-circle center">
                    <h2>Pricing</h2>
                </a>
            </section>
        </div>
        <div class="col-md-2">
            <section class="img-container">
                <a href="{{route('campaign.faq')}}">
                    <img src="http://placehold.it/165x165" alt="" class="img-responsive img-circle center">
                    <h2>FAQ</h2>
                </a>
            </section>
        </div>
        <div class="col-md-2">
            <section class="img-container">
                <a href="{{route('campaign.calculator')}}">
                    <img src="http://placehold.it/165x165" alt="" class="img-responsive img-circle center">
                    <h2>Daily Calorie Intake Calculator</h2>
                </a>
            </section>
        </div>
        <div class="col-md-2">
            <section class="img-container">
                <a href="{{route('campaign.meal')}}">
                    <img src="http://placehold.it/165x165" alt="" class="img-responsive img-circle center">
                    <h2>Meal Plan download</h2>
                </a>
            </section>
        </div>
    </div>
</div>
@stop

@section('javascript')

@stop

