@extends('backend.layouts')
@section('title','Tambah Data')
@section('content')
<div class="col-lg-12">
    {{-- <div class="card border-left-primary"> --}}
    <div class="card mb-4">
        <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">@yield('title')</h6>
        </div>
        <div class="card-body">
            <form action="{{route('portofolio.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                          <label>Gambar</label>
                          <input type="file" name="image[]" id="fileinput" class="form-control border-dark-50" required="" multiple>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="name" id="" class="form-control border-dark-50" required="">
                            <input type="hidden" name="menu_id" value="{{$menu_id}}" class="form-control border-dark-50" required="">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Kategori</label>
                            <select name="category_id" class="form-control select2" required="">
                                @foreach (App\Category::get() as $row)
                                <option value="{{$row->id}}">{{title_case($row->name)}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                          <label>Deskripsi</label>
                            <textarea name="description" id="ckeditor" class="form-control border-dark-50" required></textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="form-gorup">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a class="btn btn-light" href="{{route('portofolio.index',$menu_id)}}">Batal</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
    $('.select2').select2({
        theme: 'bootstrap'
    });

    CKEDITOR.replace('ckeditor');

    $('#fileinput').fileinput({
        uploadUrl:'#',
          browseClass: "btn btn-primary btn-block",
          fileActionSettings:{
            showZoom:false,
            showUpload:false,
            removeClass: "btn btn-danger",
            removeIcon: "<i class='fa fa-trash'></i>"
          },
          showCaption: false,
          showRemove: false,
          showUpload: false,
          showCancel: false,
          dropZoneEnabled: false,
          allowedFileExtensions: ['jpg', 'png','jpeg'],
    });
</script>

@endpush
