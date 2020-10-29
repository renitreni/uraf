<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div id="app" class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            @if ($errors->any())
                                <div class="col-md-12">
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            @endif
                            <div class="col-md-12">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-info" @click="showMdlNewUser">
                                        <i class="fas fa-user-plus"></i>
                                        New User
                                    </button>
                                </div>
                            </div>
                            <div class="col-md-12 mt-3">
                                <table id="myTable" class="table table-hover table-bordered display nowrap"
                                       style="width:100%"></table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <form method="POST" action="{{ route('users.store') }}">
            <div id="mdl-new-user" class="modal fade" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">New User</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="col-form-label">Name</label>
                                        <input name="name" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">E-mail</label>
                                        <input name="email" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Password</label>
                                        <input name="password" type="password" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Confirm Password</label>
                                        <input name="password_confirmation" type="password" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Save changes</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <x-slot name="scripts">
        <script>
            new Vue({
                el: '#app',
                data() {
                    return {
                        dt: null,
                        full_details: {}
                    }
                },
                methods: {
                    showMdlNewUser() {
                        $('#mdl-new-user').modal('show');
                    }
                },
                mounted() {
                    var $this = this;

                    $this.dt = $('#myTable').DataTable({
                        serverSide: true,
                        "scrollX": true,
                        order: [[1, "desc"]],
                        ajax: {
                            url: '{{ route('users.table') }}',
                            type: 'POST'
                        },
                        columns: [
                            {
                                data: function (value) {
                                    return '\n' +
                                        '<div class="btn-group" role="group" >\n' +
                                        '<button type="button" class="btn btn-danger btn-del-user">\n' +
                                        '<i class="fas fa-trash"></i>\n' +
                                        '</button>\n' +
                                        '</div>';
                                }, name: 'id', title: '<i class="fas fa-tools"></i>', width: '11%'
                            },
                            {data: 'id', name: 'id', title: '<i class="fas fa-id-card"></i>'},
                            {data: 'email', name: 'email', title: 'E-mail'},
                            {data: 'name', name: 'name', title: 'Name'},
                        ],
                        drawCallback() {
                            $('.btn-del-user').click(function () {
                                $this.full_details = $this.dt.row($(this).parents('tr')).data();
                                swal.fire({
                                    title: "Are you sure?",
                                    text: "Once deleted, you will not be able to recover this data!",
                                    icon: "warning",
                                    buttons: true,
                                    dangerMode: true,
                                })
                                    .then((willDelete) => {
                                        if (willDelete) {
                                            $.ajax({
                                               url: '{{ route('users.delete') }}',
                                                method: 'POST',
                                                data: $this.full_details,
                                                success(value) {
                                                    swal("Poof! Your imaginary file has been deleted!", {
                                                        icon: "success",
                                                    });
                                                    $this.dt.draw()
                                                }
                                            });
                                        } else {
                                            swal("Your data is safe!");
                                        }
                                    });
                            });
                        }
                    });
                }
            });
        </script>
    </x-slot>
</x-app-layout>
