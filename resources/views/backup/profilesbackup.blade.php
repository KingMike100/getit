@extends('layouts.base')

@section('content')

<div class="col-md-9">
            @foreach ($profiles as $profile)
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="">
                        <img src="{{asset('/storage/' . $profile->profilePhoto)}}">
                    </a>
                    <div class="caption">
                        <p><a href="{{route('profile', $profile->id)}}">{{ $profile->details }}</a></p>
                        <p><span>by <a href="{{route('profile', $profile->id)}}">{{ $profile->user->name }}</a></span>
                            <b class="green pull-right">UGX{{ $profile->price }}</b>
                        </p>
                    </div>
                </div>
            </div>
            
        @endforeach
</div>
<div class="col-md-3">

        <!-- Blog Search Well -->
        <div class="well">
            <h4>Search Services</h4>
            <div class="input-group">
                <input type="text" class="form-control">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button">
                        <span class="glyphicon glyphicon-search"></span>
                </button>
                </span>
            </div>
            <!-- /.input-group -->
        </div>

        <!-- Blog Categories Well -->
        <div class="well">
            <h4>Categories</h4>
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-unstyled">
                        
                        @foreach ($categories as $category)
                    <li><a href="{{route('profileCategory', $category->id)}}">{{$category->name}}</a>
                        </li>
                        @endforeach
                        
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="list-unstyled">
                        <li><a href="#">Category Name</a>
                        </li>
                        <li><a href="#">Category Name</a>
                        </li>
                        <li><a href="#">Category Name</a>
                        </li>
                        <li><a href="#">Category Name</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /.row -->
        </div>

        <!-- Side Widget Well -->
        <div class="well">
            <h4>Side Widget Well</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
        </div>

    </div>
   
@endsection
