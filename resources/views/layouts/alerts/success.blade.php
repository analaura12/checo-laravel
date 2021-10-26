@if(session()->has('success'))
    <div class="alert alert-success mt-2" id="alert-success">
        <i class="fa fa-check-circle"></i>
        {{ session()->get('success') }}
    </div>
@endif
