@extends('layouts.admin')
@section('content')

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid mt-3">

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                       Администраторы
                    </div>
                    <div class="wrap_butn p-3">

                        <button type="button" class="btn btn-secondary admin_edit" disabled>Редактировать</button>
                        <button type="button" class="btn btn-primary admin_add"><a href="{{route('admin_add')}}" style="color: white">Добавить</a></button>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">

                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>Ид</th>
                                    <th>E-mail</th>
                                </tr>
                                </thead>
                                <tfoot>

                                <tr>
                                    <th></th>
                                    <th>Ид</th>
                                    <th>E-mail</th>
                                </tr>
                                </tfoot>
                                <tbody>

                                @foreach($users as $user)
                                <tr>
                                    <td><input type="radio" name="depid" value="{{$user->id}}"></td>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->email}}</td>

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
                window.location.href = '/admin/admin/'+id+'/edit';
            })

            $('.admin_del').click(function (){

                    window.location.href = '/admin/admin/'+id+'/remove';
            })


        })


    </script>
@endsection


