@if(Session::get('success', false))
<?php $data = Session::get('success'); ?>
@if (is_array($data))
@foreach ($data as $msg)
<div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 200px;">
    <div class="toast toast-show fade show" role="alert" aria-live="assertive" aria-atomic="true"
        style="position: absolute; top: 0; right: 0;">
        <div class="toast-header">
            <div class="d-flex align-items-center flex-grow-1">
              <div class="flex-shrink-0">
                {{-- <img class="avatar avatar-sm avatar-circle" src="../assets/img/160x160/img4.jpg" alt="Image description"> --}}
              </div>
              <div class="flex-grow-1 ms-3">
                {{-- <h5 class="mb-0">Bob Dean</h5>
                <small class="ms-auto">11 mins ago</small> --}}
              </div>
              <div class="text-end">
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
              </div>
            </div>
          </div>
        <div class="toast-body">
            {{ $msg }}
        </div>
    </div>
</div>
{{-- <div class="alert alert-success" role="alert">
    <i class="fa fa-check"></i>
    {{ $msg }}
</div> --}}
@endforeach
@else
<div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 200px;">
    <div class="toast toast-show fade show" role="alert" aria-live="assertive" aria-atomic="true"
        style="position: absolute; top: 0; right: 0;">
        <div class="toast-header">
            <div class="d-flex align-items-center flex-grow-1">
              <div class="flex-shrink-0">
                {{-- <img class="avatar avatar-sm avatar-circle" src="../assets/img/160x160/img4.jpg" alt="Image description"> --}}
              </div>
              <div class="flex-grow-1 ms-3">
                {{-- <h5 class="mb-0">Bob Dean</h5>
                <small class="ms-auto">11 mins ago</small> --}}
              </div>
              <div class="text-end">
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
              </div>
            </div>
          </div>
        <div class="toast-body">
            {{ $data }}
        </div>
    </div>
</div>
@endif
@endif