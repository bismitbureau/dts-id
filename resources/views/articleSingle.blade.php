@extends('layouts.main')

@section('content')

<div class="container pt-4">
   <section class="article mb-3 p-5">
      <h1>Paving the path to a brighter future</h1>
      <p><small>written by <a href="#">Khalis Murfid</a> at January 1st, 2019</small></p>
      <hr>
      <p class="font-weight-light"">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed, amet et exercitationem aliquam voluptas consectetur quisquam obcaecati 
         laudantium. Unde labore sit animi laborum eveniet corrupti ipsum fugit voluptas officia ullam? Deserunt, tenetur corrupti. Eligendi maxime 
         blanditiis enim magnam. Suscipit mollitia officia atque repellendus sint. A perspiciatis eaque quia illum, enim inventore obcaecati quos, 
         itaque magnam nesciunt, quidem sapiente facilis cumque molestias? Repudiandae sunt consequuntur veritatis porro itaque qui officia tempora, 
      </p>
      <p class="font-weight-light">
            error accusantium iure modi provident magni perferendis, pariatur illum nihil delectus recusandae perspiciatis vitae enim ea, mollitia a. Libero 
            dignissimos quia veniam voluptas debitis illum earum iure laudantium quaerat vel.   
      </p>
      <p class="font-weight-light"">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed, amet et exercitationem aliquam voluptas consectetur quisquam obcaecati 
         laudantium. Unde labore sit animi laborum eveniet corrupti ipsum fugit voluptas officia ullam? Deserunt, tenetur corrupti. Eligendi maxime 
         blanditiis enim magnam. Suscipit mollitia officia atque repellendus sint. A perspiciatis eaque quia illum, enim inventore obcaecati quos, 
         itaque magnam nesciunt, quidem sapiente facilis cumque molestias? Repudiandae sunt consequuntur veritatis porro itaque qui officia tempora, 
      </p>
      <p class="font-weight-light">
            error accusantium iure modi provident magni perferendis, pariatur illum nihil delectus recusandae perspiciatis vitae enim ea, mollitia a. Libero 
            dignissimos quia veniam voluptas debitis illum earum iure laudantium quaerat vel.
      </p>
      <img src="{{ asset('images/article/dumy.jpg') }}" alt="" class="img-fluid rounded">
      <br><br>
      <hr>
      <p>tag : <a href="../article/tag/asd">asd</a></p>
      <hr>
      <p>9 views <i class="fa fa-eye" aria-hidden="true"></i></p>
   </section>

   <section>
      <h3>Recent articles</h3>
      <div class="card-deck">
         <div class="card">
            <a href="">
               <img class="card-img-top" src="{{ asset('images/article/dumy.jpg') }}" alt="Card image cap">
            </a>
           <div class="card-body">
             <a href="">
                <h5 class="card-title">Card title</h5>
            </a>
             <p class="card-text"><small class="text-muted">Posted 10 minutes ago</small></p>
           </div>
         </div>
         <div class="card">
               <a href="">
                     <img class="card-img-top" src="{{ asset('images/article/dumy.jpg') }}" alt="Card image cap">
                  </a>
                 <div class="card-body">
                   <a href="">
                      <h5 class="card-title">Card title</h5>
                  </a>
               <p class="card-text"><small class="text-muted">Posted 10 minutes ago</small></p>
            </div>
         </div>
         <div class="card">
               <a href="">
                     <img class="card-img-top" src="{{ asset('images/article/dumy.jpg') }}" alt="Card image cap">
                  </a>
                 <div class="card-body">
                   <a href="">
                      <h5 class="card-title">Card title</h5>
                  </a>
               <p class="card-text"><small class="text-muted">Posted 10 minutes ago</small></p>
            </div>
         </div>
       </div>
   </section>

   <section class="article mb-5 p-5">
      <h3>Leave a comment</h3>
      <hr>
      <a href="">
         <p class="text-center">Login to leave a comment!</p>
      </a>
   </section>
</div>
@endsection
