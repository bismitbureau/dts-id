@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-2 col-sm-12">    
                <ul class="ul-profile">
                    <li class="mb-4" id="collapse1">Organization Summary</li>
                    <li class="mb-4" id="collapse2">Vision and Mission</li>
                    <li class="mb-4" id="collapse3">Our People</li>
                </ul>
            </div>
            <div class="col-lg-10 col-sm-12" id="collapse">
                    <h1>Organization summary</h1>
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
                <h1>Organization summary</h1>
                <hr>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam hic ipsa eius ipsum quo, quos asperiores explicabo dignissimos ipsam sunt officiis animi libero veritatis cum dolore quis inventore incidunt repellendus possimus temporibus omnis suscipit vitae harum aut. Pariatur sapiente, nulla eaque provident veritatis minima porro sint odio doloremque hic distinctio praesentium ea necessitatibus quo excepturi obcaecati, deserunt voluptatem placeat voluptatibus maiores. Quis non repellat exercitationem iure repellendus eius libero cumque cum dolorum debitis labore laboriosam neque adipisci perferendis veniam rem sint asperiores consequuntur quos nam, eos enim corporis minima ad. Qui consequuntur iure quos, natus architecto quasi quo quidem! Molestias?</p>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam hic ipsa eius ipsum quo, quos asperiores explicabo dignissimos ipsam sunt officiis animi libero veritatis cum dolore quis inventore incidunt repellendus possimus temporibus omnis suscipit vitae harum aut. Pariatur sapiente, nulla eaque provident veritatis minima porro sint odio doloremque hic distinctio praesentium ea necessitatibus quo excepturi obcaecati, deserunt voluptatem placeat voluptatibus maiores. Quis non repellat exercitationem iure repellendus eius libero cumque cum dolorum debitis labore laboriosam neque adipisci perferendis veniam rem sint asperiores consequuntur quos nam, eos enim corporis minima ad. Qui consequuntur iure quos, natus architecto quasi quo quidem! Molestias?</p>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam hic ipsa eius ipsum quo, quos asperiores explicabo dignissimos ipsam sunt officiis animi libero veritatis cum dolore quis inventore incidunt repellendus possimus temporibus omnis suscipit vitae harum aut. Pariatur sapiente, nulla eaque provident veritatis minima porro sint odio doloremque hic distinctio praesentium ea necessitatibus quo excepturi obcaecati, deserunt voluptatem placeat voluptatibus maiores. Quis non repellat exercitationem iure repellendus eius libero cumque cum dolorum debitis labore laboriosam neque adipisci perferendis veniam rem sint asperiores consequuntur quos nam, eos enim corporis minima ad. Qui consequuntur iure quos, natus architecto quasi quo quidem! Molestias?</p>
            `;
                    
        }

        document.querySelector('#collapse2').onclick = function (){
            document.querySelector("#collapse").innerHTML = `
                <h1>Vision and Mission</h1>
                <hr>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam hic ipsa eius ipsum quo, quos asperiores explicabo dignissimos ipsam sunt officiis animi libero veritatis cum dolore quis inventore incidunt repellendus possimus temporibus omnis suscipit vitae harum aut. Pariatur sapiente, nulla eaque provident veritatis minima porro sint odio doloremque hic distinctio praesentium ea necessitatibus quo excepturi obcaecati, deserunt voluptatem placeat voluptatibus maiores. Quis non repellat exercitationem iure repellendus eius libero cumque cum dolorum debitis labore laboriosam neque adipisci perferendis veniam rem sint asperiores consequuntur quos nam, eos enim corporis minima ad. Qui consequuntur iure quos, natus architecto quasi quo quidem! Molestias?</p>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam hic ipsa eius ipsum quo, quos asperiores explicabo dignissimos ipsam sunt officiis animi libero veritatis cum dolore quis inventore incidunt repellendus possimus temporibus omnis suscipit vitae harum aut. Pariatur sapiente, nulla eaque provident veritatis minima porro sint odio doloremque hic distinctio praesentium ea necessitatibus quo excepturi obcaecati, deserunt voluptatem placeat voluptatibus maiores. Quis non repellat exercitationem iure repellendus eius libero cumque cum dolorum debitis labore laboriosam neque adipisci perferendis veniam rem sint asperiores consequuntur quos nam, eos enim corporis minima ad. Qui consequuntur iure quos, natus architecto quasi quo quidem! Molestias?</p>
            `;
                    
        }

        document.querySelector('#collapse3').onclick = function (){
            document.querySelector("#collapse").innerHTML = `
                <h1>Our People</h1>
                <hr>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam hic ipsa eius ipsum quo, quos asperiores explicabo dignissimos ipsam sunt officiis animi libero veritatis cum dolore quis inventore incidunt repellendus possimus temporibus omnis suscipit vitae harum aut. Pariatur sapiente, nulla eaque provident veritatis minima porro sint odio doloremque hic distinctio praesentium ea necessitatibus quo excepturi obcaecati, deserunt voluptatem placeat voluptatibus maiores. Quis non repellat exercitationem iure repellendus eius libero cumque cum dolorum debitis labore laboriosam neque adipisci perferendis veniam rem sint asperiores consequuntur quos nam, eos enim corporis minima ad. Qui consequuntur iure quos, natus architecto quasi quo quidem! Molestias?</p>
                `;
                    
        }
    </script>
@endsection