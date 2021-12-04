@extends('layouts.admin')
@section('content')

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid mt-3">
                <form action="" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="exampleFormControlInput2"><h5>Название</h5></label>
                        <input type="text" name="name" value="" placeholder="" class="form-control" id="exampleFormControlInput2">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput3"><h5>Активный</h5></label> <br>
                        <input type="checkbox" class="" id="exampleFormControlInput3" name="active" value="1">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput4"><h5>Шорт название </h5></label>
                        <input type="text" name="shortcut" value="" placeholder="" class="form-control" id="exampleFormControlInput4">
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
                    <h5 class="modal-title">Добавление</h5>
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


