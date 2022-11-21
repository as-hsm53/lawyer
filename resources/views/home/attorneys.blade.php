@extends('home.main');

@section('attorneys')
<section class="page_breadcrumbs cs parallax section_padding_top_40 section_padding_bottom_40">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2>Attorneys</h2>
                <!-- <ol class="breadcrumb">
                    <li>
                        <a href="index.html">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="#">Pages</a>
                    </li>
                    <li class="active">Attorneys</li>
                </ol> -->
            </div>
        </div>
    </div>
</section>

<section class="ls ms section_padding_top_100 section_padding_bottom_50 columns_margin_bottom_60">
    <div class="container">
        <h4>Filter Lawyers</h4>
        <form class="row" method="post" action="filter">
            @csrf
            <div class="col-md-4 col-sm-2">
                <div class="form-group has-placeholder">
                    <label for="cityId">Filter By City</label>
                    <i class="grey fa fa-map-marker"></i>
                    <select name="cityId" class="form-select form-select form-control" aria-label=".form-select example">
                        <option value="0" selected>Filter By City</option>
                        @foreach($cities as $c)
                        <option value="{{$c->id}}">{{$c->city}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-4 col-sm-2">
                <div class="form-group has-placeholder">
                    <label for="qualification">Filter By Practice</label>
                    <i class="grey fa fa-graduation-cap"></i>
                    <select name="qualification"  class="form-select form-select form-control" aria-label=".form-select example">
                        <option value="0" selected>Filter By Practice</option>
                        <option value="Family">Family law</option>
                        <option value="Civil">Civil Law</option>
                        <option value="Business">Business Law</option>
                        <option value="Criminal">Criminal Law</option>
                        <option value="Personal">Personal Law</option>
                        <option value="Drug Offence">Drug Offense</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4 col-sm-2">
                <button type="submit" class="btn btn-primary"  style="width: 100%;">Filter</button>
            </div>
        </form>
            <form class="row" action="showAll" method="post" style="display:flex; justify-content:center;">
                @csrf
                <div class="col-md-4 col-sm-2">
                    <button type="submit" class="btn btn-primary" style="width: 100%;">Show All</button>
                </div>
            </form>
        <div class="row">
        @foreach($result as $a)    
            <div class="col-md-4 col-sm-2">
                <div class="vertical-item content-absolute content-hover text-center">
                    <div class="item-media">
                        <img src="../images/lawyers/{{$a->image}}" alt="Lawyer Image" style="height: 85%;" />
                    </div>
                    <div class="item-content ds">
                        <h6 class="muli text-uppercase inline-block rightmargin_5 bottommargin_0">
                            {{$a->firstName}} {{$a->lastName}}
                        </h6>
                        <span class="highlight">{{$a->qualification}} Lawyer</span>
                        <br>
                        <span class="highlight">{{$a->city}}</span>
                        <div class="content-body">

                            <div class="divider_20">
                                <a class="social-icon theme-color-icon soc-facebook" href="#" title="" data-toggle="tooltip" data-original-title="Facebook"></a>
                                <a class="social-icon theme-color-icon soc-twitter" href="#" title="" data-toggle="tooltip" data-original-title="Twitter"></a>
                                <a class="social-icon theme-color-icon soc-youtube" href="#" title="" data-toggle="tooltip" data-original-title="Youtube"></a>
                                <a class="social-icon theme-color-icon soc-google" href="#" title="" data-toggle="tooltip" data-original-title="Google"></a>
                            </div>
                            <p class="grey">
                                {{$a->description}}
                            </p>
                            <p class="topmargin_30">
                                <a href="/home/lawyer{{$a->id}}" class="theme_button color1">Read more</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</section>
@endsection