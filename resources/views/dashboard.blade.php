<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div id="app" class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="card">
                    <div class="card-body">
                        <h2 class="mb-4">Tabang Overview</h2>
                        <table id="myTable" class="table table-hover table-bordered display nowrap"
                               style="width:100%"></table>
                    </div>
                </div>
            </div>
        </div>

        <div id="mdl-overview" class="modal" tabindex="-1">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Full Details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="row">
                            <div class="form-group col-md-12 mt-2">
                                <h3>General Information</h3>
                                <hr>
                            </div>
                            <div class="form-group col-md-auto">
                                <strong>First Name</strong>
                                <i>@{{ full_details.first_name }}</i>
                            </div>
                            <div class="form-group col-md-auto">
                                <strong>Middle Name</strong>
                                <i>@{{ full_details.middle_name }}</i>
                            </div>
                            <div class="form-group col-md-auto">
                                <strong>Last Name</strong>
                                <i>@{{ full_details.last_name }}</i>
                            </div>
                            <div class="form-group col-md-auto">
                                <strong>Gender</strong>
                                <i>@{{ full_details.gender }}</i>
                            </div>
                            <div class="form-group col-md-auto">
                                <strong>Passport Number</strong>
                                <i>@{{ full_details.passport }}</i>
                            </div>
                            <div class="form-group col-md-auto">
                                <strong>IQAMA</strong>
                                <i>@{{ full_details.iqama }}</i>
                            </div>
                            <div class="form-group col-md-12 mt-2">
                                <h3>Occupation</h3>
                                <hr>
                            </div>
                            <div class="form-group col-md-auto">
                                <strong>Current Position</strong>
                                <i>@{{ full_details.occupation }}</i>
                            </div>
                            <div class="form-group col-md-12 mt-2">
                                <h3>Contact Information</h3>
                                <hr>
                            </div>
                            <div class="form-group col-md-auto">
                                <strong>E-mail or Facebook Name</strong>
                                <i>@{{ full_details.email_address }}</i>
                            </div>
                            <div class="form-group col-md-auto">
                                <strong>Primary Contact Number</strong>
                                <i>@{{ full_details.contact_number }}</i>
                            </div>
                            <div class="form-group col-md-auto">
                                <strong>Other Contact Number</strong>
                                <i>@{{ full_details.contact_number2 }}</i>
                            </div>
                            <div class="form-group col-md-auto">
                                <strong>Location KSA</strong>
                                <i>@{{ full_details.location_ksa }}</i>
                            </div>
                            <div class="form-group col-md-12 mt-2">
                                <h3>Employer Information</h3>
                                <hr>
                            </div>
                            <div class="form-group col-md-auto">
                                <strong>Employer Name</strong>
                                <i>@{{ full_details.employer_name }}</i>
                            </div>
                            <div class="form-group col-md-auto">
                                <strong>Employer Contact Number</strong>
                                <i>@{{ full_details.employer_contact }}</i>
                            </div>
                            <div class="form-group col-md-auto">
                                <label>Recruitment Agency in Saudi</label>
                                <i>@{{ full_details.saudi_agency }}</i>
                            </div>
                            <div class="form-group col-md-auto">
                                <strong>Recruitment Agency in Philippines</strong>
                                <i>@{{ full_details.agency }}</i>
                            </div>
                            <div class="form-group col-md-12 mt-2">
                                <h3>Complaint</h3>
                                <hr>
                            </div>
                            <div class="form-group col-md-12 mt-2">
                                <strong>Concerns of the sender</strong><br>
                                <i>@{{ full_details.complain }}</i>
                            </div>
                            <div class="form-group col-md-12 mt-2">
                                <h3>Sender's Coordinates</h3>
                                <hr>
                            </div>
                            <div class="form-group col-md-auto">
                                <strong>Latitude</strong>
                                <i>@{{ full_details.actual_langitude }}</i>
                            </div>
                            <div class="form-group col-md-auto">
                                <strong>Longtitude</strong>
                                <i>@{{ full_details.actual_longitude }}</i>
                            </div>
                            <div class="form-group col-md-12 mt-2">
                                <h3>Evidences</h3>
                                <hr>
                            </div>
                            <div class="form-group col-md-4" v-if="full_details.image1">
                                <div class="form-group">
                                    <label>Image 1</label>
                                    <a target="_blank" :href="'complains-images/' + full_details.image1" class="btn btn-link">
                                        View Link
                                    </a>
                                </div>
                            </div>
                            <div class="form-group col-md-4" v-if="full_details.image2">
                                <div class="form-group">
                                    <label>Image 2</label>
                                    <a target="_blank" :href="'complains-images/' + full_details.image2" class="btn btn-link">
                                        View Link
                                    </a>
                                </div>
                            </div>
                            <div class="form-group col-md-4" v-if="full_details.image3">
                                <div class="form-group">
                                    <label>Image 3</label>
                                    <a target="_blank" :href="'complains-images/' + full_details.image3" class="btn btn-link">
                                        View Link
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-slot name="scripts">
        <script>
            new Vue({
                el: '#app',
                data() {
                  return {
                      dt: null,
                      full_details: {
                          actual_langitude: "",
                          actual_longitude: "",
                          agency: "",
                          complain: "",
                          contact_number: "",
                          contact_number2: "",
                          date_created: "",
                          email_address: "",
                          employer_contact: "",
                          employer_name: "",
                          first_name: "",
                          gender: "",
                          image1: "",
                          image2: "",
                          image3: "",
                          iqama: "",
                          last_name: "",
                          location_ksa: "",
                          middle_name: "",
                          occupation: "",
                          passport: "",
                          saudi_agency: "",
                          tabang_id: "",
                      }
                  }
                },
                mounted() {
                    var $this =this;
                    $this.dt = $('#myTable').DataTable({
                        serverSide: true,
                        "scrollX": true,
                        order: [[1, "desc"]],
                        ajax: {
                            url: '{{ route('dashboard.table') }}',
                            type: 'POST'
                        },
                        columns: [
                            {
                                data: function (value) {
                                    return '<a class="btn btn-primary btn-sm btn-show-more">Full Details</a>';
                                }, name: 'tabang_id', title: 'Action', width: '11%'
                            },
                            {data: 'tabang_id', name: 'tabang_id', title: 'ID'},
                            {data: 'first_name', name: 'first_name', title: 'Firstname'},
                            {data: 'middle_name', name: 'middle_name', title: 'Middlename'},
                            {data: 'last_name', name: 'last_name', title: 'Lastname'},
                            {data: 'gender', name: 'gender', title: 'Gender'},
                            {data: 'passport', name: 'passport', title: 'Passport'},
                            {data: 'iqama', name: 'iqama', title: 'IQAMA'},
                            {data: 'email_address', name: 'email_address', title: 'Email Address'},
                        ],
                        drawCallback() {
                            $('.btn-show-more').click(function () {
                                $this.full_details = $this.dt.row( $(this).parents('tr') ).data();
                                $('#mdl-overview').modal('show');
                            });
                        }
                    });
                }
            });
        </script>
    </x-slot>
</x-app-layout>
