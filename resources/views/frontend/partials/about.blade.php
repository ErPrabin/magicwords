 <!-- overview -->
 <div class="about py-5">
     <div class="container">
         <div class="row">
             <div class="col-md-6 p-5">
                 <img src="{{ asset('images/component/' . getCData('About Us', 'image')) }}"
                     alt="{{ config('app.name') }}" class="img-fluid" />
             </div>
             <div class="col-md-6 p-4">
                 <div class="about-text">
                     <h1>About Us</h1>
                     <div class="m-bar"></div>
                     <div class="about-index-description mt-3 text-justify">
                         <p>
                             {!! getCData('About Us', 'description') !!}
                         </p>
                     </div>
                     <div class="contact-number-index">
                         <button class="btn red-btn-color">
                             Read More
                         </button>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- overview ends -->
