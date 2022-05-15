<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <style>
        [v-cloak] {
            display: none;
        }
    </style>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Buylike') }}</title>
    @include('Admin.Layouts.header')

</head>
<body class="bg-accpunt-pages">
<div style="background-image: url('http://dev.tingarden.com/loading.gif')"></div>
<div class="container-scroller">
@include('Admin.Layouts.menu-top')
<!-- partial:partials/_navbar.html -->

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
    @include('Admin.Layouts.menu-left')
    <!-- partial -->

        <div class="main-panel">
            <div class="content-wrapper">
                @yield('content')
            </div>
            @include('Admin.Layouts.footer')
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>


<div class="system_message">
    <div class="title">Cập nhật thành công</div>
</div>
<div class="system_confirm">
    <div class="box-confirm">
        <div class="title-confirm">Yêu cầu xác nhận</div>

        <div class="btn-confirm">
            <button class="btn btn-secondary">Đóng</button>
            <button class="btn btn-success">Xác nhận</button>
        </div>
    </div>
</div>
<div class="modal" tabindex="-1" role="dialog" id="modalChangePass">
    <div id="object-change-password"
         user-id="{{Auth::user()->_id ?? ''}}" api-change-password="{{route('admin.Customer.change_password')}}" class="modal-dialog" role="document">
        <div class="modal-content  bg-white">
            <div class="modal-header">
                <h5 class="modal-title">Thay đổi mật khẩu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group"><p class="m-0 font-0-9">Mật khẩu cũ
                            </p> <input data-vv-as="Mật khẩu cũ" v-validate="'required|min:6'" name="old_password"
                                        v-model="data_create.old_password" data-vv-as="Mã sản phẩm" name="code" type="password" class="form-control form-control-sm">
                            <div v-show="errors.has('old_password')" class="text-danger">
                                <i class="fas fa-exclamation-circle"></i>
                                <span>@{{ errors.first('old_password') }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group"><p class="m-0 font-0-9">Mật khẩu mới
                            </p> <input data-vv-as="password" v-validate="'required|min:6'" name="password"
                                        v-model="data_create.password" data-vv-as="Mã sản phẩm" name="code" type="password" class="form-control form-control-sm">
                            <div v-show="errors.has('password')" class="text-danger">
                                <i class="fas fa-exclamation-circle"></i>
                                <span>@{{ errors.first('password') }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group"><p class="m-0 font-0-9">Xác nhận mật khẩu mới
                            </p> <input data-vv-as="confirm password"
                                        v-validate="'required|min:6|confirmed:password'" name="confirm_password"
                                        data-vv-as="Mã sản phẩm" name="code" type="password" class="form-control form-control-sm">
                            <div v-show="errors.has('confirm_password')"
                                 class="text-danger">
                                <i class="fas fa-exclamation-circle"></i>
                                <span>@{{ errors.first('confirm_password') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                <button type="button" @click="changePassword()" class="btn btn-success">Cập nhật</button>
            </div>
        </div>
    </div>
</div>

</body>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.min.js"></script>

<script src="{{ asset('resources/admin/assets/vendors/js/vendor.bundle.base.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>
{{--<script src="../../resources/admin/assets/js/off-canvas.js"></script>--}}


<script src="{{ asset('resources/admin/assets/js/hoverable-collapse.js') }}"></script>
<script src="{{ asset('resources/admin/assets/js/misc.js?time=').time() }}"></script>


<script src="{{ asset('resources/admin/assets/js/lodash.min.js') }}"></script>
<script src="{{ asset('resources/admin/assets/js/todolist.js') }}"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>
<script src="{{ asset('resources/admin/assets/vendors/moment/moment.js')}}"></script>
<script src="{{ asset('resources/admin/assets/vendors/daterangepicker/daterangepicker.min.js') }}"></script>
<script src="{{ asset('resources/admin/assets/js/vue/vue.js') }}"></script>
<script src="{{ asset('resources/admin/assets/js/vue/vee-validate.js') }}"></script>
<script src="{{ asset('resources/admin/assets/js/vue/vi.js') }}"></script>
<script src="{{ asset('resources/admin/assets/js/helper.js') }}"></script>
<script src="{{ asset('resources/admin/assets/js/vue/vue-filter.js') }}"></script>
<script src="{{ asset('resources/admin/assets/js/vue/components.js?time=').time() }}"></script>
<script  src="{{ asset('js/vendor/ckeditor/ckeditor.js')}}"></script>
<script  src="{{ asset('js/vendor/ckeditor/adapters/jquery.js')}}"></script>
<script  src="{{ asset('vendor/bootstrap-select-1.13.14/dist/js/bootstrap-select.min.js')}}"></script>

@yield('script')
<script src="{{ asset('resources/admin/assets/js/custom.js?time=').time() }}"></script>
<script>
    $(document).ready(function() {
        $('textarea.description').ckeditor();
        CKEDITOR.config.filebrowserUploadMethod = "form";
        CKEDITOR.config.filebrowserUploadUrl =
            "{{ route('api.upload.ckeditor') . '?_token=' . csrf_token() }}";
    })
</script>
<script>
    var changePassword = new objectChangePassword('#object-change-password');

    function objectChangePassword(element) {
        // Vue.use(VeeValidate, {
        //     locale: 'vi',
        //     fieldsBagName: 'vvFields'
        // });
        var timeout = null;
        this.vm = new Vue({
            el: element,
            data: {
                loading: false,
                api_change_password: $(element).attr('api-change-password'),
                data_create: {
                    old_password: '',
                    password: '',
                    _id: $(element).attr('Customer-id')
                }

            },
            methods: {
                changePassword: function () {
                    var vm = this;
                    vm.loading = true;
                    this.$validator.validate().then(valid => {
                        if (valid) {
                            axios.post(vm.api_change_password, vm.data_create).then(function (response) {
                                vm.isLoading = false;
                                var data = response.data;
                                if (data.error) {
                                    helper.showNotification(data.message, 'danger');
                                    return;
                                }
                                $('#modalChangePass').modal('hide');
                                helper.showNotification(data.message, 'success');
                            })
                        }
                    })
                },
            },

            created: function () {
                console.log(this.user_id);
            },
            computed: {},
            mounted: function () {

            },
            watch: {
            },
        });
        return this;
    }
</script>
</html>
