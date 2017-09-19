@extends('layouts.admin')


@section("content")

    <div class="container-fluid">
        <div class="wrapper">
            <div class="row">

                <div class="col-md-6 col-md-offset-3">

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Create a new landing page
                        </div>
                        <div class="panel-body" id="app">
                            <form action="/admin/landings" method="POST">

                                {{ csrf_field() }}

                                <h3>General Information</h3>
                                <hr>

                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="name" class="form-control" v-model="name"
                                           required/>
                                </div>
                                <p v-if="name">Please put your .html file inside resources/view/landings/@{{ name }}.blade.php</p>
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" id="title" class="form-control" required/>
                                </div>
                                <div class="form-group">
                                    <label for="two-step">Is Two Step</label>
                                    <input type="checkbox" name="is_two_step" id="two-step" v-model="checked"/>
                                </div>
                                <div class="form-group" v-if="checked">
                                    <label for="second_name">Second Name</label>
                                    <input type="text" name="second_name" id="second_name" class="form-control" v-model="second_name"/>
                                    <p v-if="second_name">Please put your .html file inside resources/view/landings/@{{ second_name }}.blade.php</p>
                                </div>

                                <h3>Other settings</h3>
                                <hr>

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="use_email_verification" id="use_email_verification"
                                               checked> Validate Email ?
                                    </label>
                                </div>

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="use_phone_verification" id="use_phone_verification"
                                               checked> Validate Phone ?
                                    </label>
                                </div>

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="use_sms_verification" id="use_sms_verification"> Do
                                        SMS verification ?
                                    </label>
                                </div>

                                <hr>
                                <div class="pull-right">
                                    <a href="/admin/landings" class="btn btn-danger">Cancel</a>
                                    <input type="submit" class="btn btn-primary" value="Save">
                                </div>
                            </form>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>
@endsection

@section('extra_scripts')
    <script>
        var vm = new Vue({
            el: '#app',
            data: {
                name: '',
                second_name: '',
                checked: false

            }
        });
    </script>
@endsection
