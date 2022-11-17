@extends('home.main');

@section('lawyerPage')

@foreach($data as $d)
<section class="page_breadcrumbs cs parallax section_padding_top_40 section_padding_bottom_40">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2>{{$d->firstName}} {{$d->lastName}}</h2>
                <!-- <ol class="breadcrumb">
                    <li>
                        <a href="index.html">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="#">Team</a>
                    </li>
                    <li class="active">Team Member</li>
                </ol> -->
            </div>
        </div>
    </div>
</section>

<section class="ls ms section_padding_top_100 section_padding_bottom_100 columns_padding_25">
    <div class="container">
        <div class="row">
        @if(Session::has("message"))
            <div class="col-lg-12">
                <div class=" alert alert-success">{{session("message")}}</div>
            </div>
        @endif
            <div class="col-md-5">
                <div class="vertical-item content-absolute text-center">
                    <div class="item-media">
                        <img src="../images/lawyers/{{$d->image}}" alt="" />
                    </div>
                    <div class="item-content content-title ds">
                        <h6 class="muli text-uppercase inline-block rightmargin_5 bottommargin_0">
                        {{$d->firstName}} {{$d->lastName}}
                        </h6>
                        <span class="highlight">{{$d->qualification}} Lawyer</span>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <p>
                    {{$d->description}}
                </p>

                <div class="ds header_darkgrey" style="padding: 5rem; border-radius: 10px;">
                    <h2 class="section_header highlight">Hire Me</h2>
                        <p>Please choose your preferred timings from below to hire me.</p>
                    <form method="post" action="booking">
                        @csrf
                        <div class="row columns_margin_bottom_30">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="bookDate" class="sr-only">Booking Date
                                        <span class="required">*</span>
                                    </label>
                                    <input type="date" aria-required="true" size="30" value="" name="bookDate" id="bookDate" class="form-control" placeholder="Choose Date">
                                </div>
                            </div>
                            <!-- <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="bookTime" class="sr-only">Booking Time
                                        <span class="required">*</span>
                                    </label>
                                    <input type="time" aria-required="true" size="30" value="" name="bookTime" id="bookTime" class="form-control" placeholder="Choose Time">
                                </div>
                            </div> -->
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <select name="bookTimeStart"  class="form-select form-select form-control" aria-label=".form-select example">
                                        <option value="0" selected>Select Start Time</option>
                                        <option value="11:00">11:00 AM</option>
                                        <option value="13:00">1:00 PM</option>
                                        <option value="15:00">3:00 PM</option>
                                        <option value="17:00">5:00 PM</option>
                                    </select>
                                    <!-- @if ($errors->has('qualification'))
                                        <span class="text-danger"><b>{{ $errors->first('qualification') }}</b></span>
                                    @endif -->
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <select name="bookTimeEnd"  class="form-select form-select form-control" aria-label=".form-select example">
                                        <option value="0" selected>Select End Time</option>
                                        <option value="12:00">12:00 PM</option>
                                        <option value="14:00">2:00 PM</option>
                                        <option value="16:00">4:00 PM</option>
                                        <option value="18:00">6:00 PM</option>
                                    </select>
                                    <!-- @if ($errors->has('qualification'))
                                        <span class="text-danger"><b>{{ $errors->first('qualification') }}</b></span>
                                    @endif -->
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="description" class="sr-only">Your Message</label>
                                    <textarea rows="1" cols="45" name="description" id="description" class="form-control" placeholder="Your Message"></textarea>
                                </div>
                            </div>
                        </div>
                        <p class="form-submit">
                            <input type="hidden" value="{{$d->cityId}}" name="cityId" id="cityId">
                            <input type="hidden" value="{{$d->id}}" name="lawyerId" id="lawyerId">
                            
                            <button type="submit" id="submit" name="submit" class="theme_button color1">Send request</button>
                        </p>
                    </form>
                </div>   
                <p>
                    Filet mignon capicola pork sausage pork belly corned beef meatloaf shoulder, bacon leberkas jerky burgdoggen ham hock kielbasa bresaola. Kielbasa bacon drumstick jowl pastrami cupim meatball pork loin ball tip picanha corned beef brisket biltong kevin
                    meatloaf.
                </p>

                <blockquote>
                    “Chicken venison pastrami shankle fatback meatball pancetta beef. Ground round bacon t-bone prosciutto strip steak pork.”

                    <div class="item-meta topmargin_30">
                        <h5 class="small-text muli bold margin_0">
                            <a href="team-single.html">Christina Aguilar</a>
                        </h5>
                        <p class="highlight">Founder of the Justice</p>
                    </div>
                </blockquote>

                <p>
                    Sausage pork loin brisket sirloin, ham drumstick picanha kevin chuck. Prosciutto venison t-bone pig tenderloin tail short ribs meatloaf porchetta biltong flank bacon cupim. Burgdoggen bresaola cupim corned beef.
                </p>

            </div>

        </div>
    </div>
</section>
@endforeach
@endsection