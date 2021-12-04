@extends('layouts.admin')
@section('content')

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid mt-3">
                <form action="" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlInput2"><h5>Название</h5></label>
                        <input type="text" name="name" value="{{$inspiration->name}}" placeholder="" class="form-control" id="exampleFormControlInput2">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput3"><h5>Описание</h5></label>
                        <textarea rows="10" type="text" name="description" placeholder="" class="form-control" id="exampleFormControlInput3">{{$inspiration->description}}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput4"><h5>Сортировка</h5></label>
                        <input type="text" name="order" value="{{$inspiration->order}}" placeholder="" class="form-control" id="exampleFormControlInput4">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput5"><h5>URL</h5></label>
                        <input type="text" name="slug" value="{{$inspiration->slug}}" placeholder="" class="form-control" id="exampleFormControlInput5">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput6"><h5>Фото</h5></label>
                        <input type="text" name="preview_image" value="{{$inspiration->preview_image}}" placeholder="" class="form-control" id="exampleFormControlInput6">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput7"><h5>СЕО title</h5></label>
                        <input type="text" name="seo_title" value="{{$inspiration->seo_title}}" placeholder="" class="form-control" id="exampleFormControlInput7">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput8"><h5>СЕО description</h5></label>
                        <input type="text" name="seo_description" value="{{$inspiration->seo_description}}" placeholder="" class="form-control" id="exampleFormControlInput8">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput11"><h5>Open graph Img</h5></label><br>
                        <img class="dep_foto" src="/images/other/{{$inspiration->seo_img}}" alt="" id="blah">
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


