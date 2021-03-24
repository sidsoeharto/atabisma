@extends('layout.main')

@section('content')
<section id="content">
    <div class="container-fluid content-wrap p-0">
        <div class="section parallax min-vh-100 m-0 border-0 d-flex skrollable skrollable-between" style="background-color: white" data-bottom-top="background-position:0px 0px;" data-top-bottom="background-position:0px -300px;">
            <section id="about-us" class="vertical-middle">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1 class="section-title"><b style="color: #b80f0a">About</b> Us</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <p class="about-content"><b>ATA Logistik</b> was founded in 2019 and head office in Jakarta, we provide a full scope of integrated logistics
                                service from/to Indonesia and provide our clients with comprehensive in all package services, which in term
                                of shipping mode and transportation. We grow with the networks across of global logistics services, ATA
                                Logistik has been aware of most important points to match our customers need with best competitive rates
                                and high quality service. As we are located in Indonesia, has many interesting wide-growth of industrial and
                                tourism to offer.</p>
                            <p class="about-content">As Indonesia is an archipelago and also developing country so are the industries in many aspects, from
                                small industries (UMKM) to big manufacture, covering from the West (Sumatera Island) to the East (Papua
                                Island). Therefore, we consider take action and contribute logistics service come in export and import.</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="section parallax min-vh-100 m-0 border-0 d-flex skrollable skrollable-between" data-bottom-top="background-position:0px -250px;" data-top-bottom="background-position:0px -400px;">
            <section id="vision-mission" class="vertical-middle">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-left">
                            <h1 class="section-title"><b style="color: #b80f0a">Vision</b> & Mission</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="vision-title"><b style="color: #b80f0a">Our</b> Vision</h3>
                            <div class="container pl-2">
                                <h6 class="ata-red vision-content"><b>Our vision is to become the most challenging logistics services provided in scale of Nation-wide</b></h6>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="vision-title"><b style="color: #b80f0a">Our</b> Mission</h3>
                            <div class="container pl-4">
                                <h6 class="vision-content">
                                    <ul class="chevron">
                                        <li>Build a team of satisfied and loyal colleagues</li>
                                        <li>Helping our clients to achieve greater success by working with them on daily basis to create special value</li>
                                        <li>Make our partner become convenient to do business with us</li>
                                    </ul>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="section parallax min-vh-100 m-0 border-0 d-flex skrollable skrollable-between" style="background-image: url({{ url(asset('/assets/images/bg-container2-red.jpg')) }}); background-position: center center; background-size: cover; background-repeat: no-repeat; transform: translate3d(0px, 0px, 0px); height: 768px;" data-bottom-top="background-position:0px 0px;" data-top-bottom="background-position:0px -300px;">
            <section id="ads" class="vertical-middle">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 justify-content-center">
                            <h1 class="section-ads-quote">“</h1>
                            <h1 class="section-ads-title">One Stop</h1>
                            <h1 class="section-ads-title">Logistic Services</h1>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="section parallax min-vh-100 m-0 border-0 d-flex skrollable skrollable-between" style="background-image: url({{ url(asset('/assets/images/bg-orang-red.jpg')) }}); background-position: center center; background-size: cover; background-repeat: no-repeat; transform: translate3d(0px, 0px, 0px);" data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -400px;">
            <section id="service-advantage" class="vertical-middle">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-left ata-white">
                            <h1 class="ata-white section-title"><b>Service</b> Advantage</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 ata-white">
                            <p class="ata-white about-content"> We are ready to fulfil the order of arrangement Seafreight, Airfreight, warehouse, in land transportation and
                                nation-wide logistic provider. We have strength in customs clearance with all kind terms such as Ex-work,
                                DDU, DDP, DAP, FOB and etc, Breakbulk or oversized cargo, personalised solution for every customer and
                                client. Established global network and relationships with shipping line, airlines and logistics service providers bring you the best individualised service at a cost effective price.</p>
                            <p class="ata-white about-content"><b>Our goal is to simplify the whole logistics process,</b> make timely deliveries & provide you with cost-effective shipping solutions. And minimize your transportation risks.</p>
                            <p class="ata-white about-content">Every enquiries will be handle though a ‘One-Window’ service by our professional team with personalized
                                solution, Most of the employees have over 10 years’ experience of logistics industry which guarantees the
                                high-quality and professional service in freight forwarding and in providing supply and chain solution.</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="section parallax min-vh-100 m-0 border-0 d-flex skrollable skrollable-between" style="background-color: white; background-position: 0px -0px;" data-bottom-top="background-position:0px 0px;" data-top-bottom="background-position:0px -300px;">
            <section id="service-freight" class="vertical-middle">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-left">
                            <h1 class="section-title"><b style="color: #b80f0a">Freight</b> & Logistic Services</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="row">
                                <div class="col-sm-2">
                                    <img src="{{asset('/assets/images/worldwideagent.png')}}">
                                </div>
                                <div class="col-sm-10 service-content">
                                    <h4 class="service-content"><b>Worldwide Agent</b><br> & Networks</h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2">
                                    <img src="{{asset('/assets/images/seafreight.png')}}">
                                </div>
                                <div class="col-sm-10 service-content">
                                    <h4 class="service-content"><b>SeaFreight</b> & AirFreight</h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2">
                                    <img src="{{asset('/assets/images/nationwide-transport.png')}}">
                                </div>
                                <div class="col-sm-10">
                                    <h4 class="service-content"><b>Nation-wide Transport</b><br>Services</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="row">
                                <div class="col-sm-2">
                                    <img src="{{asset('/assets/images/custom-brokerage.png')}}">
                                </div>
                                <div class="col-sm-10">
                                    <h4 class="service-content"><b>Customs</b> Brokerage :</h4>
                                    <div class="container pl-3 pt-0">
                                        <h6 class="service-content-list">
                                            <ul class="chevron">
                                                <li>DDP / DDU / DAP / FOB / EXWORK / FCA</li>
                                            </ul>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2">
                                    <img src="{{asset('/assets/images/warehouse.png')}}">
                                </div>
                                <div class="col-sm-10">
                                    <h4 class="service-content"><b>Warehouse</b> & Distribution</h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2">
                                    <img src="{{asset('/assets/images/project-cargo.png')}}">
                                </div>
                                <div class="col-sm-10">
                                    <h4 class="service-content"><b>Project</b> Cargo:</h4>
                                    <div class="container pl-3 pt-0">
                                        <h6 class="service-content-list">
                                            <ul class="chevron">
                                                <li>OOG </li>
                                                <li>LCT/Breakbulk</li>
                                                <li>Reefer Cargo</li>
                                                <li>Machine & Relocation </li>
                                            </ul>
                                        </h6>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="section parallax min-vh-100 m-0 border-0 d-flex skrollable skrollable-between" style="background-image: url({{ url(asset('/assets/images/bg-pesawat-white.jpg')) }}); background-position: center center; background-size: cover; background-repeat: no-repeat; transform: translate3d(0px, 0px, 0px);"" data-bottom-top="background-position:0px 0px;" data-top-bottom="background-position:0px -300px;">
            <section id="value-proposition" class="vertical-middle">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-left">
                            <h1 class="section-title"><b style="color: #b80f0a">Value</b> Proposition</h1>
                            <h3 class="section-subtitle">Our Strong Selling Point ;</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12" style="padding-left: 3rem;">
                            <h6 class="service-content-list">
                                <ul class="chevron">
                                    <li>Early adopter and even innovation driver of technological improvements</li>
                                    <li>Ability to deliver</li>
                                    <li>Asset reliability with own wheels, drivers and own logistics facilities</li>
                                    <li>Full system integratability</li>
                                    <li>Continuous Improvement Attitude</li>
                                    <li>One -stop-shop for all types of logistics services</li>
                                    <li>Systems and process driven approval in order to ensure operational quality</li>
                                </ul>
                            </h6>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="section parallax min-vh-100 m-0 border-0 d-flex skrollable skrollable-between" style="background-image: url(&quot;images/parallax/1.jpg&quot;); background-position: 0px -193.662px;" data-bottom-top="background-position:0px 0px;" data-top-bottom="background-position:0px -400px;">
            <section id="location" class="vertical-middle">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-left section-title">
                            <h1 class="section-title"><b style="color: #b80f0a">Operating</b> Location</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-sm-6 p-4">
                            <h6 class="service-content-list">
                                <ul class="chevron">
                                    <li>Port of Jakarta <b>(Head Office)</b></li>
                                    <li>Port of Semarang</li>
                                </ul>
                            </h6>
                        </div>
                        <div class="col-md-3 col-sm-6 p-4">
                            <h6 class="service-content-list">
                                <ul class="chevron">
                                    <li>Port of Surabaya</li>
                                    <li>Port of Belawan</li>
                                </ul>
                            </h6>
                        </div>
                        <div class="col-md-3 col-sm-6 p-4">
                            <h6 class="service-content-list">
                                <ul class="chevron">
                                    <li>Port of Batam</li>
                                    <li>Port of Makassar</li>
                                </ul>
                            </h6>
                        </div>
                        <div class="col-md-3 col-sm-6 p-4">
                            <h6 class="service-content-list">
                                <ul class="chevron">
                                    <li>Port of Denpasar</li>
                                </ul>
                            </h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <img src="{{asset('/assets/images/indonesia.png')}}">
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </div>
</section>
@endsection
