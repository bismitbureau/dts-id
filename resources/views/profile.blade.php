@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-2 col-sm-12">    
                <ul class="ul-profile">
                    <li class="mb-4 li-profile " id="collapse1">Organization Summary</li>
                    <li class="mb-4 li-profile" id="collapse2">Vision and Mission</li>
                    <li class="mb-4 li-profile" id="collapse3">Our People</li>
                </ul>
            </div>
            <div class="col-lg-10 col-sm-12" id="collapse">
                    <h1>About Us</h1>
                    <hr>
                    <img src="{{ asset('images/profile/dummy.jpeg') }}" class="img-fluid my-3" width="auto">
                    <p>DTS is a business and consulting firm focusing on various research and advisory works for private and public sector institutions. We provide research, consulting, and strategic advisory services to public and private clients across industries. We work with client to address their specific objectives and transform from strategy to reality. With national and global network held by our team member, our organization attempts to build a connection and create a strategy to innovate combining comprehensive frontier researches and best practices.   
                    </p> 
                    <p>
                        In terms of organizational structure, our firm is relatively slim but highly qualified. Currently, the firm manages around fifteen permanent and temporary staffs. Most of our permanent staffs graduated from reputable postgraduate programs either in local and overseas universities. Temporary staffs are engaged on project basis and recruited from our professional networks with researchers and academicians who possess expertise in various fields. With this type of firm structure, we have been efficient and effective in delivering our finest services to clients.
                    </p>
                    <p>
                        Prior to joining DTS, several of our research teams have established reputable careers in various institutions such as in World Bank, Institute for Economic and Social Research (LPEM) University of Indonesia, Centre for Strategic and International Studies (CSIS), Australia Indonesia Partnership for Economic Governance (AIPEG), Economic Research Institute for ASEAN and East Asia (ERIA), SurveyMeter, Parkville Global Advisory, and etc. Intermittently, they are also summoned to teach at University of Indonesia and Bina Nusantara University as part of our knowledge sharing activity to wider community.
                    </p>
                    
            </div>
        </div>
    </div> 

    <script>
        document.querySelector('#collapse1').onclick = function (){
            document.querySelector("#collapse").innerHTML = `
                <h1>About Us</h1>
                <hr>
                <img src="{{ asset('images/profile/dummy.jpeg') }}" class="img-fluid my-3" width="auto">
                <p>DTS is a business and consulting firm focusing on various research and advisory works for private and public sector institutions. We provide research, consulting, and strategic advisory services to public and private clients across industries. We work with client to address their specific objectives and transform from strategy to reality. With national and global network held by our team member, our organization attempts to build a connection and create a strategy to innovate combining comprehensive frontier researches and best practices.   
                    </p> 
                    <p>
                        In terms of organizational structure, our firm is relatively slim but highly qualified. Currently, the firm manages around fifteen permanent and temporary staffs. Most of our permanent staffs graduated from reputable postgraduate programs either in local and overseas universities. Temporary staffs are engaged on project basis and recruited from our professional networks with researchers and academicians who possess expertise in various fields. With this type of firm structure, we have been efficient and effective in delivering our finest services to clients.
                    </p>
                    <p>
                        Prior to joining DTS, several of our research teams have established reputable careers in various institutions such as in World Bank, Institute for Economic and Social Research (LPEM) University of Indonesia, Centre for Strategic and International Studies (CSIS), Australia Indonesia Partnership for Economic Governance (AIPEG), Economic Research Institute for ASEAN and East Asia (ERIA), SurveyMeter, Parkville Global Advisory, and etc. Intermittently, they are also summoned to teach at University of Indonesia and Bina Nusantara University as part of our knowledge sharing activity to wider community.
                    </p>
            `;
                    
        }

        
        
        document.querySelector('#collapse2').onclick = function (){
            document.querySelector("#collapse").innerHTML = `
                <h1>Vision</h1>
                <hr>
                <p class="text-center mb-5">Lorem ipsum dolor sit amet consect ex consectetur. Fugit delectus, sapiente similique molestias nulla doloremque sit, necessitatibus veniam porro possimus omnis eligendi ducimus totam temporibus vitae architecto nihil earum illo excepturi quam! Placeat laudantium ex incidunt illo! Iure, optio! Voluptates, delectus.</p>
                <h1>Mission</h1>
                <hr>
                <ul>
                    <li class="my-4"><i class="fas fa-circle-notch    "></i> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic cupiditate consequatur illo, numquam minus quaerat aliquid vitae iste nam repellendus?</li>
                    <li class="my-4"><i class="fas fa-circle-notch    "></i> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic cupiditate consequatur illo, numquam minus quaerat aliquid vitae iste nam repellendus?</li>
                    <li class="my-4"><i class="fas fa-circle-notch    "></i> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic cupiditate consequatur illo, numquam minus quaerat aliquid vitae iste nam repellendus?</li>                        
                    <li class="my-4"><i class="fas fa-circle-notch    "></i> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic cupiditate consequatur illo, numquam minus quaerat aliquid vitae iste nam repellendus?</li>
                </ul>
            `;
                    
        }

        document.querySelector('#collapse3').onclick = function (){
            document.querySelector("#collapse").innerHTML = `
                <h1>Board of Director</h1>
                <hr>
                <div class="row mb-5">
                    <div class="col-lg-3 col-sm-12">
                    <img src="{{ asset('images/bod/ceo.png') }}" class="img-fluid img-profile">
                    </div>
                    <div class="col-lg-9 col-sm-12 p-3">
                        <h2>Teguh Yudo Wicaksono, Ph.D </h2>
                        <h6 class="text-muted">CEO</h6>
                        <p>
                            Teguh obtained his master from Sydney University, Australia and Ph.D from Kentucky University in Economics, USA. Prior to joining DTS, he worked for Centre for Strategic and International Studies (CSIS) and also serve various international programs such as World Bank, ADB, etc. He also actively provides assistance services to various government institutions. His fields of specialization are Labour Market, Microeconomics, International Trade, Health Economics and Public Finance. He also made several academic publications and popular essays.
                        </p>
                    </div>
                <div class="row mb-5 mt-5">
                    <div class="col-lg-3 col-sm-12">
                    <img src="{{ asset('images/bod/ainulhuda.png') }}" class="img-fluid img-profile">
                    </div>
                    <div class="col-lg-9 col-sm-12 p-3">
                        <h2>Ainul Huda, MSc </h2>
                        <h6 class="text-muted">Project Lead</h6>
                        <p>
                        Ainul finished his master education from Vrije University Amsterdam majoring in Economics. He has many research and consulting experiences as he worked for various institution prior to joining DTS. He worked for Institute for Economic and Social Research University of Indonesia from 2005 to 2012. From 2013 to 2017 he served with National Team for Accelerating Poverty Reduction (TNP2K) under Vice President Office in 2013-2016 as team leader for evaluation of Program Keluarga Harapan (PKH), a conditional cash transfer program initiated by government. His research interest are Poverty, Microeconomics, Household Consumption Behaviour, Survey Data Analysis and Economic Modelling, SMEs. Ainul made several publications including popular essays.                    </div>
                        </p>
                </div>
                <div class="row mb-5">
                    <div class="col-lg-6 col-sm-12">
                    <img src="{{ asset('images/bod/carlos.png') }}" class="img-fluid">
                    </div>
                    <div class="col-lg-6 col-sm-12 p-3">
                        <h2>Carlos Mangunsong, MBE</h2>
                        <h6 class="text-muted">Economist Lead</h6>
                        <p>Carlos earned his master’s degree from Monash University Australia majoring in business and economics. He has experiences working with various organizations such as private sectors, government, and international/donor institution. He worked for CSIS prior to joining DTS. His fields of specialization are Macroeconomics, International Trade, Financial Sector, Infrastructure, Data Analytics and Forecasting. </p>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-lg-6 col-sm-12">
                    <img src="{{ asset('images/profile/bod.jpeg') }}" class="img-fluid img-profile">
                    </div>
                    <div class="col-lg-6 col-sm-12 p-3">
                        <h2>ray azrin karim</h2>
                        <h6 class="text-muted">Chief Executive Officer</h6>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem maxime totam sapiente, animi nobis, aliquam assumenda, nihil sed quisquam eum id sequi dolores odio maiores. Harum repellat molestiae accusantium assumenda.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit officiis minima harum totam dolore incidunt ab molestiae odit culpa laudantium.</p>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-lg-6 col-sm-12">
                    <img src="{{ asset('images/profile/bod.jpeg') }}" class="img-fluid img-profile">
                    </div>
                    <div class="col-lg-6 col-sm-12 p-3">
                        <h2>ray azrin karim</h2>
                        <h6 class="text-muted">Chief Executive Officer</h6>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem maxime totam sapiente, animi nobis, aliquam assumenda, nihil sed quisquam eum id sequi dolores odio maiores. Harum repellat molestiae accusantium assumenda.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit officiis minima harum totam dolore incidunt ab molestiae odit culpa laudantium.</p>
                    </div>
                </div>
                `;
                    
        }
    </script>
@endsection