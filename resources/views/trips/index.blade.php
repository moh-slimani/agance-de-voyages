@extends('layouts.app')

@section('banner')
<section class="tg-parallax tg-innerbanner" data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/parallax/bgparallax-06.jpg">
    <div class="tg-sectionspace tg-haslayout">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h1>List des voyages</h1>
                    <h2>-</h2>
                    <ol class="tg-breadcrumb">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="tg-active">List des voyages</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('main')
<main id="tg-main" class="tg-main tg-sectionspace tg-haslayout">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div id="tg-content" class="tg-content">
                    <div class="tg-listing tg-listingvone">
                        <div class="tg-sectiontitle">
                            <h2>La list des voyages</h2><br>
                            Page {{ $trips->currentPage() }} sur {{ $trips->lastPage() }}
                        </div>
                        <div class="clearfix"></div>
                        <div class="row">
                        @foreach ($trips as $trip)
                            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                                <div class="tg-populartour">
                                    <figure>
                                        <a href="tourbookingdetail.html"><img src="images/tours/img-19.jpg" alt="image destinations"></a>
                                        <span class="tg-descount">25% Off</span>
                                    </figure>
                                    <div class="tg-populartourcontent">
                                        <div class="tg-populartourtitle">
                                            <h3><a href="tourbookingdetail.html">{{ $trip->title }}</a></h3>
                                        </div>
                                        <div class="tg-description">
                                            <p>{{  str_limit($trip->description, 100) }}</p>
                                        </div>
                                        <div class="tg-populartourfoot">
                                            <div class="tg-durationrating">
                                                <span class="tg-tourduration">7 Days</span>
                                                <span class="tg-stars"><span></span></span>
                                                <em>(3 Review)</em>
                                            </div>
                                            <div class="tg-pricearea">
                                                <del>$2,800</del>
                                                <h4>$2,500</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        </div>
                        <div class="clearfix"></div>
                        <nav class="tg-pagination">
                                {!! $trips->links() !!}
                            <ul>
                                <li class="tg-active"><a href="javascript:void(0);">1</a></li>
                                <li><a href="javascript:void(0);">2</a></li>
                                <li><a href="javascript:void(0);">3</a></li>
                                <li><a href="javascript:void(0);">4</a></li>
                                <li class="tg-nextpage"><a href="javascript:void(0);"><i class="fa fa-angle-right"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
