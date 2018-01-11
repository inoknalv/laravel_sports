@if (count($errors))
<div class="text-center">
  <div class="alert alert-danger alert-dismissable fade in" class="close" data-dismiss="alert" aria-label="close">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
</div>
@endif
