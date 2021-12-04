@extends('layouts.admin')
@section('content')

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid mt-3">
                <form action="" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlInput2"><h5>Русский</h5></label>
                        <input type="text" name="text_ru" value="{{$localizations->text_ru}}" placeholder="" class="form-control" id="exampleFormControlInput2">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput3"><h5>Украинский</h5></label>
                        <input type="text" name="text_ua" value="{{$localizations->text_ua}}" placeholder="" class="form-control" id="exampleFormControlInput3">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput4"><h5>Английский</h5></label>
                        <input type="text" name="text_en" value="{{$localizations->text_en}}" placeholder="" class="form-control" id="exampleFormControlInput4">
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


@endsection


