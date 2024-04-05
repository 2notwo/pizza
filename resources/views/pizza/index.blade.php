@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">{{ __('Menu') }}</div>

                <div class="card-body">
                    <ul class="list-group">
                        <a href="" class="list-group-item list-group-item-action">View</a>
                        <a href="" class="list-group-item list-group-item-action">Create</a>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Pizza') }}</div>

                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Name of pizza</label>
                        <input type="text" class="form-control" name="name" placeholder="name of pizza">
                    </div>
                    <div class="form-group">
                        <label for="description">Description of pizza</label>
                        <textarea class="form-control" name="description"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Pizza Price($)</label>
                        <div class="row">
                            <div class="col">
                                <input type="number" class="form-control" placeholder="small pizza price">
                            </div>
                            <div class="col">
                                <input type="number" class="form-control" placeholder="medium pizza price">
                            </div>
                            <div class="col">
                                <input type="number" class="form-control" placeholder="large pizza price">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="description">Category</label>
                        <select class="form-control">
                            <option value=""></option>
                            <option value="margherita">Margherita</option>
                            <option value="gimmethemeat">Gimme The Meat</option>
                            <option value="veggiedelight">Veggie Delight</option>
                            <option value="makeminehot">Make Mine Hot</option>
                        </select>
                    </div>
                    <div class="form-goup">
                        <label>Image</label>
                        <input type="file" class="form-control" name="iamge">
                    </div>
                    <div class="form-goup text-center">
                        <button class="btn btn-primary" type="submit">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
