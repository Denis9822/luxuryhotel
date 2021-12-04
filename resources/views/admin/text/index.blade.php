@extends('layouts.admin')
@section('content')

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid mt-3">

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                       Текст/переводы
                    </div>
                    <div class="wrap_butn p-3">

                        <button type="button" class="btn btn-secondary admin_edit" disabled>Редактировать</button>

                    </div>

                    <div class="card-body dds">
                        <div class="table-responsive">

                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>Русский</th>
                                    <th>Украинский</th>
                                    <th>Английский</th>
                                </tr>
                                </thead>
                                <tfoot>

                                <tr>
                                    <th></th>
                                    <th>Русский</th>
                                    <th>Украинский</th>
                                    <th>Английский</th>
                                </tr>
                                </tfoot>
                                <tbody>

                                @foreach($localizations as $res)
                                <tr>
                                    <td><input type="radio" name="depid" value="{{$res->id}}"></td>
                                    <td>{{$res->text_ru}}</td>
                                    <td>{{$res->text_ua}}</td>
                                    <td>{{$res->text_en}}</td>
                                </tr>
                                @endforeach

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script>

        $('input[type=radio]').on('change',function (){

            var id = $(this).val();

            $('.admin_edit').removeAttr('disabled');
            $('.admin_del').removeAttr('disabled');

            $('.admin_edit').click(function (){
                window.location.href = '/admin/text/'+id+'/edit';
            })




        })


    </script>
@endsection


