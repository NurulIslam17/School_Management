@extends('website.master')

@section('title')
    About
@endsection

@section('body')
   <section class="py-5">
       <div class="container">

           <div class="row mb-5">
               <div class="col-md-6">
                   <h1>Who We Are ...</h1>
                   <p style="text-align: justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci amet  aspernatur commodi eveniet in libero nihil optio suscipit veniam, veritatis. Accusamus <br>alias architecto consequatur enim expedita facere incidunt minima minus neque nulla odit omnis, pariatur perferendis placeat rem tempore voluptas! Esse et itaque minus nesciunt quibusdam reiciendis sequi soluta tempora ore magnam numquam quod reiciendis saepe. Aperiam assumenda impedit labore libero nesciunt nobis quae! A ad adipisci aliquam, architecto aut blanditiis consequatur cum dolores eligendi facilis labore laborum maxime minus mollitia nihil nostrum omnis provident quam quas quos ratione sapiente velit voluptates.</p>
               </div>
               <div class="col-md-6">
                   <img src="{{asset('/')}}website/images/who.jpg" class="w-100 animated bounce infinite" alt="">
               </div>
           </div>

           <div class="row mb-3">
               <div class="col-md-6">
                   <img src="{{asset('/')}}website/images/workstyle.png" class="w-100" alt="">
               </div>
               <div class="col-md-6">
                   <h1>Why Us...</h1>
                   <p style="text-align: justify">met, consectetur adipisicing elit. Adipisci amet aspernatur commodi eveniet in libero nihil optio suscipit veniam, veritatis. Accusamus alias architecto consequatur enim expedita facere incidunt minima minus neque nulla odit omnis, pariatur perferendis placeat rem tempore voluptas! Esse et itaque minus nesciunt quibusdam reiciendis sequi soluta tempora temporibus voluptatem. Animi culpa dolore dolorum explicabo inventore labore magnam numquam quod reiciendis saepe. Aperiam assumenda impedit labore libero nesciunt nobis quae! A ad adipisci aliquam, architecto aut blanditiis consequatur cum dolores eligendi facilis labore laborum maxime minus mollitia nihil nostrum omnis provident quam quas quos ratione sapiente velit voluptates.</p>
               </div>
           </div>

           <div class="row mb-5">
               <div class="col-md-6">
                   <h1>Our Style</h1>
                   <ul>
                       <li class="pt-2">et, consectetur adipisicing elit. Eaque, illum?</li>

                       <li class="pt-2">Lctetur adipisicing elit. Animi atque corporis doloremque dolorum et facilis inventore ipsa nihil odio quas.</li>
                       <li class="pt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos libero minima quos sequi, tempora vero?</li>
                        <li class="pt-2">m dolor sit amet, consectetur adipisicing elit. Deleniti error, neque nisi rerum soluta veritatis voluptatum. Animi ea illum maiores natus numquam odio ratione sint soluta tempore vel, voluptas voluptatem!</li>
                        <li class="pt-2">neque nisi rerum soluta veritatis voluptatum. Animi ea illum maiores natus numquam odio ratione sint soluta tempore vel, voluptas voluptatem!</li>
                   </ul>
               </div>
               <div class="col-md-6">
                   <img src="{{asset('/')}}website/images/workstyle1.png" class="w-100" alt="">
               </div>
           </div>

       </div>

   </section>
@endsection
