@extends('layouts.app')

@section('title','home')

@section('content')

    <div class="py-5">
        <main class="container">
            <div>
                <a class="btn btn-info rounded rounded-pill mb-3" style="width: 200px;" href="{{ route('item.create') }}">Create new item</a>
            </div>
            <div class="row">
                @foreach( $items as $item)
                        <div class="col-xs-12  col-md-4 py-2">
                            <div class="card">
                                <img src="{{ url('img/uc_img.jpeg') }}" class="card-img-top w-50 mx-auto" />
                                <div class="card-body">
                                    <h5 class="card-title text-center">{{$item->name}}</h5>
                                    <p class="card-text text-center">price ${{$item->price}}</p>
                                    <form class="d-flex justify-content-around" action="{{ route('item.destroy',$item->id) }}" method="POST" onsubmit="return confirm(`You want remove '{{$item->name}}'`)">
                                        @csrf
                                        <a      class="btn btn-info rounded rounded-pill" style="width: 48%;" href="{{ route('item.edit',$item->id) }}">edit</a>
                                        <button class="btn btn-info rounded rounded-pill" style="width: 48%;" type="submit">remove</button>
                                    </form>
                                </div>
                        </div> 
                    </div>
                @endforeach
            </div>
        </main>
    </div>
@endsection