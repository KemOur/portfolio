@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="posts">
            <h4 class="posts__title">Frontend</h4>
            <div class="postlist">
                <div class="row row-cols-1 row-cols-md-3 g-4">

                    <div class="col">
                        <div class="card" style="border: none">
                            <img src="{{asset('/images/img-one.png')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card" style="border: none">
                            <img src="{{asset('/images/img-two.png')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card" style="border: none">
                            <img src="{{asset('/images/img-three.png')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card" style="border: none">
                            <img src="{{asset('/images/img-four.png')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card" style="border: none">
                            <img src="{{asset('/images/img-five.png')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>


                    <div class="col">
                        <div class="card" style="border: none">
                            <img src="{{asset('/images/img-six.png')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
