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
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam hic ipsa eius ipsum quo, quos asperiores explicabo dignissimos ipsam sunt officiis animi libero veritatis cum dolore quis inventore incidunt repellendus possimus temporibus omnis suscipit vitae harum aut. Pariatur sapiente, nulla eaque provident veritatis minima porro sint odio doloremque hic distinctio praesentium ea necessitatibus quo excepturi obcaecati, deserunt voluptatem placeat voluptatibus maiores. Quis non repellat exercitationem iure repellendus eius libero cumque cum dolorum debitis labore laboriosam neque adipisci perferendis veniam rem sint asperiores consequuntur quos nam, eos enim corporis minima ad. Qui consequuntur iure quos, natus architecto quasi quo quidem! Molestias?</p>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam hic ipsa eius ipsum quo, quos asperiores explicabo dignissimos ipsam sunt officiis animi libero veritatis cum dolore quis inventore incidunt repellendus possimus temporibus omnis suscipit vitae harum aut. Pariatur sapiente, nulla eaque provident veritatis minima porro sint odio doloremque hic distinctio praesentium ea necessitatibus quo excepturi obcaecati, deserunt voluptatem placeat voluptatibus maiores. Quis non repellat exercitationem iure repellendus eius libero cumque cum dolorum debitis labore laboriosam neque adipisci perferendis veniam rem sint asperiores consequuntur quos nam, eos enim corporis minima ad. Qui consequuntur iure quos, natus architecto quasi quo quidem! Molestias?</p>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam hic ipsa eius ipsum quo, quos asperiores explicabo dignissimos ipsam sunt officiis animi libero veritatis cum dolore quis inventore incidunt repellendus possimus temporibus omnis suscipit vitae harum aut. Pariatur sapiente, nulla eaque provident veritatis minima porro sint odio doloremque hic distinctio praesentium ea necessitatibus quo excepturi obcaecati, deserunt voluptatem placeat voluptatibus maiores. Quis non repellat exercitationem iure repellendus eius libero cumque cum dolorum debitis labore laboriosam neque adipisci perferendis veniam rem sint asperiores consequuntur quos nam, eos enim corporis minima ad. Qui consequuntur iure quos, natus architecto quasi quo quidem! Molestias?</p>
                    
            </div>
        </div>
    </div> 

    <script>
        document.querySelector('#collapse1').onclick = function (){
            document.querySelector("#collapse").innerHTML = `
                <h1>About Us</h1>
                <hr>
                <img src="{{ asset('images/profile/dummy.jpeg') }}" class="img-fluid my-3" width="auto">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam hic ipsa eius ipsum quo, quos asperiores explicabo dignissimos ipsam sunt officiis animi libero veritatis cum dolore quis inventore incidunt repellendus possimus temporibus omnis suscipit vitae harum aut. Pariatur sapiente, nulla eaque provident veritatis minima porro sint odio doloremque hic distinctio praesentium ea necessitatibus quo excepturi obcaecati, deserunt voluptatem placeat voluptatibus maiores. Quis non repellat exercitationem iure repellendus eius libero cumque cum dolorum debitis labore laboriosam neque adipisci perferendis veniam rem sint asperiores consequuntur quos nam, eos enim corporis minima ad. Qui consequuntur iure quos, natus architecto quasi quo quidem! Molestias?</p>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam hic ipsa eius ipsum quo, quos asperiores explicabo dignissimos ipsam sunt officiis animi libero veritatis cum dolore quis inventore incidunt repellendus possimus temporibus omnis suscipit vitae harum aut. Pariatur sapiente, nulla eaque provident veritatis minima porro sint odio doloremque hic distinctio praesentium ea necessitatibus quo excepturi obcaecati, deserunt voluptatem placeat voluptatibus maiores. Quis non repellat exercitationem iure repellendus eius libero cumque cum dolorum debitis labore laboriosam neque adipisci perferendis veniam rem sint asperiores consequuntur quos nam, eos enim corporis minima ad. Qui consequuntur iure quos, natus architecto quasi quo quidem! Molestias?</p>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam hic ipsa eius ipsum quo, quos asperiores explicabo dignissimos ipsam sunt officiis animi libero veritatis cum dolore quis inventore incidunt repellendus possimus temporibus omnis suscipit vitae harum aut. Pariatur sapiente, nulla eaque provident veritatis minima porro sint odio doloremque hic distinctio praesentium ea necessitatibus quo excepturi obcaecati, deserunt voluptatem placeat voluptatibus maiores. Quis non repellat exercitationem iure repellendus eius libero cumque cum dolorum debitis labore laboriosam neque adipisci perferendis veniam rem sint asperiores consequuntur quos nam, eos enim corporis minima ad. Qui consequuntur iure quos, natus architecto quasi quo quidem! Molestias?</p>
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