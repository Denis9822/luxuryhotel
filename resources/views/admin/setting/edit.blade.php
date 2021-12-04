@extends('layouts.admin')
@section('content')

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid mt-3">
                <form action="" method="post" enctype="multipart/form-data">
                    @csrf

                    @foreach($settings as $setting)
                        @if($setting->name == "order")
                            <div class="form-group">
                                <label for="exampleFormControlInput{{$setting->id}}"><h5>{{$setting->preview_title}}</h5></label>
                                <select name="{{$setting->name}}" id="" class="form-control">
                                    @if($setting->value == "popularity" )
                                    <option selected value="{{$setting->value}}">По популярности</option>
                                    @elseif($setting->value == "price" )
                                        <option selected value="{{$setting->value}}">По цене</option>
                                    @elseif($setting->value == "review_score" )
                                        <option selected value="{{$setting->value}}">По оценке пользователей</option>
                                    @else
                                        <option selected value="{{$setting->value}}">По классу отеля</option>
                                    @endif
                                    <option value="popularity">По популярности</option>
                                    <option value="price">По цене</option>
                                    <option value="review_score">По оценке пользователей</option>
                                    <option  value="class_descending">По классу отеля</option>
                                </select>
                            </div>
                        @elseif($setting->name == "logo")
                            <div class="form-group">
                                <label for="exampleFormControlInput11"><h5>{{$setting->preview_title}}</h5></label><br>
                                <img class="dep_foto" src="/images/other/{{$setting->value}}" alt="" id="blah">
                                <input type="file" name="{{$setting->name}}" accept="" class="form-control-file mt-2" id="exampleFormControlFile11">
                            </div>
                        @else
                        <div class="form-group">
                            <label for="exampleFormControlInput{{$setting->id}}"><h5>{{$setting->preview_title}}</h5></label>
                            <input type="text" name="{{$setting->name}}" value="{{$setting->value}}" placeholder="" class="form-control" id="exampleFormControlInput{{$setting->id}}">
                        </div>
                        @endif
                    @endforeach


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

    @endif

    <script>
        $('#myModal').modal('show');
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $(input).siblings('#blah').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]); // convert to base64 string
            }
        }

        $("#exampleFormControlFile11").change(function() {

            readURL(this);
        });

    </script>
@endsection


