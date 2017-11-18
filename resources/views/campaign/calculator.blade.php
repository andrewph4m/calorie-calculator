@extends('app')

@section('content')
<section class="calculator">
    <div class="container">
        <div class="row heading">
            <div class="col-md-offset-2 col-md-8">
                <h1 class="text-center">Daily Calorie Intake Calculator</h1>
                <p class="text-center">Fill-up the form to get your calorie intake target! It takes 30 seconds!</p>
            </div>
        </div>
        <!-- Error messages -->
        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <form action="{{route('campaign.calculator.store')}}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name">Name *</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="{{ old('name') }}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email address *</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="{{ old('email') }}">
                    </div>
                    <div class="form-group">
                        <label for="age">What is your age (years)? *</label>
                        <input type="number" class="form-control" name="age" id="age" placeholder="Age" value="{{ old('age') }}" min="0" max="150">
                    </div>
                    <div class="form-group">
                        <label for="height">How tall are you (cm)? *</label>
                        <div class="input-group">
                            <input type="number" class="form-control" name="height" id="height" placeholder="Height" value="{{ old('height') }}" min="0" max="300">
                            <div class="input-group-addon">cm</div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="weight">What is your current weight (kg)? *</label>
                        <div class="input-group">
                            <input type="number" class="form-control" name="weight" id="weight" placeholder="Weight" value="{{ old('weight') }}" min="0" max="600">
                            <div class="input-group-addon">kg</div>
                        </div>
                    </div>
                    <div class="form-group gender-group">
                        <label for="gender">Gender *</label>
                        <div class="radio">
                            <label><input type="radio" class="form" name="gender" id="male" value="male" @if (old('gender') == 'male') checked @endif>Male</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" class="form" name="gender" id="female" value="female" @if (old('gender') == 'female') checked @endif>Female</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="activity_level">What is your average daily level of activity? *</label>
                        <select class="form-control" name="activity_option" id="activity_option">
                            <option value="1">< 30 minutes of walking</option>
                            <option value="2">~ 60 minutes of walking</option>
                            <option value="3">~ 60 minutes of low intensity workout</option>
                            <option value="4">~ 60-90 minutes of moderate to high intensity workout</option>
                            <option value="5">~ 90-120 minutes of moderate intensity workout</option>
                            <option value="6">> 120 minutes of moderate to high intensity workout</option>
                            <option value="7">> 120 minutes high intensity workout (running, cycling, etc.)</option>
                        </select>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-default">SUBMIT</button>    
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@stop

@section('javascript')
<script>

</script>
@stop

