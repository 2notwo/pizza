@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">{{ __('Menu') }}</div>

                <div class="card-body">
                    @if(Auth::check())
                    
                    <form action="{{route('order.store')}}" method="post">@csrf
                        <div class="form-group">
                            <p>Name: {{auth()->user()->name}}</p>
                            <p>Email : {{auth()->user()->email}}</p>
                            <p>Phone Number: <input type="number" class="form-control" name="phone"></p>
                            <p>Small Pizza Orders: <input type="number" class="form-control" name="small_pizza" value="0"></p>
                            <p>Medium Pizza Orders: <input type="number" class="form-control" name="medium_pizza" value="0"></p>
                            <p>Large Pizza Orders: <input type="number" class="form-control" name="large_pizza" value="0"></p>
                            <p><input type="hidden" name="pizza_id" value="{{$pizza->id}}"></p>
                            <p><input type="date" name="date" class="form-control"></p>
                            <p><input type="time" name="time" class="form-control"></p>
                            <p><textarea class="form-control" name="body"></textarea></p>

                            <p><button class="btn btn-success" type="submit">Make Order</button></p>
                        </div>
                    </form>

                    @else
                    <p><a href="/login">Please login to make order</a></p>
                    @endif


                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Pizza') }}</div>

                <div class="card-body">
                            <img src="{{Storage::url($pizza->image)}}" class="img-thumbnail" style="width: 100%;">
                            <p><h3>{{$pizza->name}}</h3></p>
                            <p><h3>{{$pizza->description}}</h3></p>
                            <p>Small Pizza Price: ${{$pizza->small_pizza_price}}</p>
                            <p>Medium Pizza Price: ${{$pizza->medium_pizza_price}}</p>
                            <p>Large Pizza Price: ${{$pizza->large_pizza_price}}</p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    a.list-group-item{
        font-size: 18px;
    }

    a.list-group-item:hover{
        background-color: green;
        color: white;
    }

    .card-header{
        background-color: green;
        color: white;
        font-size: 20px;
    }
</style>
@endsection
