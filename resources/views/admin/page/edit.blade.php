@extends('layouts.admin')
@section('content')

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid mt-3">
                <form action="" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="exampleFormControlInput7"><h5>СЕО title</h5></label>
                        <input type="text" name="seo_title" value="{{$page->seo_title}}" placeholder="" class="form-control" id="exampleFormControlInput7">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput8"><h5>СЕО description</h5></label>
                        <input type="text" name="seo_description" value="{{$page->seo_description}}" placeholder="" class="form-control" id="exampleFormControlInput8">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput11"><h5>Open graph Img</h5></label><br>
                        <img class="dep_foto" src="/images/other/{{$page->seo_img}}" alt="" id="blah">
                        <input type="file" name="img" accept="" class="form-control-file mt-2" id="exampleFormControlFile11">
                    </div>

                    <button type="submit" class="btn btn-primary">Сохранить</button>
                </form>
            </div>
        </main>

    </div>

    @if (session('edit'))
    <div class="modal" id="myModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Редактирование</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>{{session('edit')}}</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>

                </div>
            </div>
        </div>
    </div>

    <script>
        $('#myModal').modal('show');
    </script>
    @endif
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#blah').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]); // convert to base64 string
            }
        }
        $("#exampleFormControlFile11").change(function() {
            readURL(this);
        });
    </script>

@endsection


