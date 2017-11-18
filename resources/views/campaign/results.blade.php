@extends('app')

@section('content')
<section class="results">
	<div class="container">
		<div class="row heading">
			<div class="col-md-offset-2 col-md-8">
				<h1 class="text-center">Your Target Score</h1>
				<h2 class="text-center">{{$respondent->target_kcal}}</h2>
				<p class="text-center">Download the meal plan with the closest score <a href="http://yolofood.com.sg/meal-plan/#meal-plan-download" target="_blank">here</a>.</p>
				<p class="text-center">AIM FOR at least 60 mins of moderate exercise most days to maximise lean body weight gains / fat losses.</p>
			</div>
		</div>
	</div>
</section>
@stop

@section('javascript')

@stop