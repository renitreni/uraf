<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="card">
                    <div class="card-body">
                        <h2>Card title</h2>
                        <table id="myTable" class="table table-hover table-bordered"></table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-slot name="scripts">
        <script>
            $(document).ready(function () {
                $('#myTable').DataTable({
                    serverSide: true,
                    ajax: {
                        url: '{{ route('dashboard.table') }}',
                        type: 'POST'
                    },
                    columns: [
                        {
                            data: function (value) {
                                return '<a class="btn btn-primary btn-sm">Show More</a>';
                            }, name: 'tabang_id', title: 'Action', width: '11%'
                        },
                        {data: 'tabang_id', name: 'tabang_id', title: 'Tabang ID'},
                        {data: 'first_name', name: 'first_name', title: 'Firstname'},
                        {data: 'middle_name', name: 'middle_name', title: 'Middlename'},
                        {data: 'last_name', name: 'last_name', title: 'Lastname'},
                        {data: 'gender', name: 'gender', title: 'Gender'},
                        {data: 'passport', name: 'passport', title: 'Passport'},
                        {data: 'iqama', name: 'iqama', title: 'IQAMA'},
                        {data: 'email_address', name: 'email_address', title: 'Email Address'},
                    ]
                });
            });
        </script>
    </x-slot>
</x-app-layout>
