
@if(session('info'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
   {{session('info')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
    <div class="alert alert-success" role="alert">
       
    </div>
@endif   

