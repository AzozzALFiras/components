@props(['route', 'title', 'description', 'method'])


<div class="col-md-6 grid-margin stretch-card">
     <div class="card">
         <div class="card-body">
             <h4 class="card-title">{{ $title }}</h4>
             <p class="card-description">{{ $description }}</p>
             <form class="forms-sample" action="{{ $route }}" method="{{ $method }}">
                 {{ $slot }}
                 <x-buttons-class className="success">Submit</x-buttons-class>
               </form>
         </div>
     </div>
 </div>