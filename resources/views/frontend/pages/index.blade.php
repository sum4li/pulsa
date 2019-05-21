@extends('frontend.layouts')
@section('title',title_case($menu->first()->name))
@section('content')
<section class="mbr-section content4 cid-rr152HgXiB" id="content4-t">
    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                {{-- <h3 class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5"></h3> --}}
                {!! $data->first()->description !!}
            </div>
        </div>
    </div>
</section>
@endsection
@push('scripts')
    <script>
        $(document).ready(function(){
            $('table').addClass('table table-sm table-bordered');
        });
    </script>
@endpush
