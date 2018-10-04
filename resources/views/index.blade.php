@extends('app')
<?php $show_menu = true; ?>

@section('content')

<div class="container-fluid">
    <div class="row">
            
            @for($x = 0; $x < 200; $x++)
            <div class="col-md-2" style="padding: 0; margin: 0; background-color: #111; color: white;">
                <img style="border-right: 5px solid black" src="http://barkerhost.com/wp-content/uploads/sites/4/2017/04/tGqzgRQGkPskcEDzSgeJ2mAiA9t-6.jpg" alt="John Wick 2" width=100%><br>
                <div style="padding:5px;">{{$x}} John Wick 2<span class="badge badge-success">Наличен</span> <button class="btn btn-primary">Резервирай</button></div>
            </div>
            @endfor
    </div>
</div>

@endsection