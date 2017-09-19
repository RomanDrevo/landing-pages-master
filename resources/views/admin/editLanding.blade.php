@extends('layouts.admin')


@section("content")

    <div class="container-fluid">
        <div class="wrapper">
            <div class="row">

                <div class="col-md-6 col-md-offset-3">

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Edit landing page
                        </div>
                        <div class="panel-body" id="app">
                            <form method="POST" action="{{url("/admin/landings/update/" .$landing->name)}}">
                                <input type="hidden" name="_method" value="PUT">
                                {{ csrf_field() }}

                                <h3>General Information</h3>
                                <hr>

                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="name" class="form-control"  value="{{$landing->name}}" required />
                                </div>
                                <p v-if="name">Please put your .html file inside resources/view/landings/@{{ name }}.blade.php</p>
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" id="title" class="form-control" value="{{$landing->title}}" required />
                                </div>
                                <div class="form-group">
                                    <label for="is_two_step">Is Two Step</label>
                                    <input type="checkbox" name="is_two_step" id="is_two_step"  @if($landing->is_two_step)checked @endif  />
                                </div>

                                <div class="form-group">
                                    <label for="second_name">Second Name</label>
                                    <input type="text" name="second_name" id="second_name" value="{{ $landing->second_name }}" class="form-control"/>
                                    <span>**** If landing page is two step, add a name of second page</span>
                                </div>

                                <h3>Other settings</h3>
                                <hr>

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="use_email_verification" id="use_email_verification" checked> Validate Email ?
                                    </label>
                                </div>

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="use_phone_verification" id="use_phone_verification" checked> Validate Phone ?
                                    </label>
                                </div>

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="use_sms_verification" id="use_sms_verification"> Do SMS verification ?
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
                name: ''
            }
        });
    </script>
@endsection
