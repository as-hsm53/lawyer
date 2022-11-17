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

                <div class="header_darkgrey" style="padding: 5rem; border-radius: 10px;">
                    <form method="post" action="https://html.modernwebtemplates.com/justice/">
                        <div class="row columns_margin_bottom_30">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="first-name" class="sr-only">First Name
                                        <span class="required">*</span>
                                    </label>
                                    <input type="text" aria-required="true" size="30" value="" name="first-name" id="first-name" class="form-control" placeholder="First Name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="last-name" class="sr-only">Last Name
                                        <span class="required">*</span>
                                    </label>
                                    <input type="text" aria-required="true" size="30" value="" name="last-name" id="last-name" class="form-control" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="email" class="sr-only">Your E-Mail</label>
                                    <input type="text" size="30" value="" name="email" id="email" class="form-control" placeholder="Your E-Mail">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="phone" class="sr-only">Phone Number
                                        <span class="required">*</span>
                                    </label>
                                    <input type="text" aria-required="true" size="30" value="" name="phone" id="phone" class="form-control" placeholder="Your Phone">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group select-group">
                                    <label for="phone" class="sr-only">Practice Area
                                        <span class="required">*</span>
                                    </label>
                                    <div class="input-group">
                                        <select aria-required="true" id="month" name="mounth" class="choice empty form-control">
                                            <option value="" disabled selected data-default>Practice Area</option>
                                            <option value="january">January</option>
                                            <option value="february">February</option>
                                            <option value="march">March</option>
                                        </select>
                                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="comment" class="sr-only">Your Message</label>
                                    <textarea rows="1" cols="45" name="comment" id="comment" class="form-control" placeholder="Your Message"></textarea>
                                </div>
                            </div>
                        </div>
                        <p class="form-submit">
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