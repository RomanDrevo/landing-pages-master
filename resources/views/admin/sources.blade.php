@extends('layouts.admin')


@section("content")

    <div class="container-fluid">
        <div class="wrapper">


                <div class="container">

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            All Sources
                        </div>
                        <div class="panel-body">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Landing Name</th>
                                    <th>Broker Name</th>
                                    <th>Campaign ID</th>
                                    <th>URL</th>
                                    <th>Logo</th>
                                    <th>Active</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($sources as $s)

                                    <tr>
                                        <td>{{ $s->id }}</td>
                                        <td>{{ $s->landing_page->name }}</td>
                                        <td>{{ $s->broker->name }}</td>
                                        <td>{{ $s->campaign_id ?  $s->campaign_id :  'Unknown' }}</td>
                                        <td><a href="{{ url("/landing/" .$s->stoken) }}">{{ url("/landing/" .$s->stoken) }}</a>
                                        </td>
                                        <td>{{ $s->display_logo ? "YES" : "NO" }}</td>
                                        <td>{{ $s->active ? "YES" : "NO" }}</td>
                                        <td style="width: 180px;">


                                            <form action="{{url("/admin/sources/addLogo/" .$s->id)}}"
                                                  method="GET" class="action-buttons">
                                                <button type="submit"
                                                        class="btn {{ $s->display_logo ? "btn-danger" : "btn-success" }} btn-sm"
                                                        data-toggle="tooltip" data-placement="bottom"
                                                        title="{{ $s->display_logo ? "Hide logo on landing" : "Show logo on landing" }}">
                                                    <i class="fa fa-user-circle" aria-hidden="true"></i>
                                                </button>
                                            </form>


                                            <form action="{{url("/admin/sources/activate/" .$s->id)}}"
                                                  method="GET" class="action-buttons">
                                                <button type="submit"
                                                        class="btn {{ $s->active ? "btn-danger" : "btn-success" }} btn-sm"
                                                        data-toggle="tooltip" data-placement="bottom"
                                                        title="{{ $s->active ? "Deactivate" : "Activate" }}">
                                                    <i class="fa fa-power-off" aria-hidden="true"></i>
                                                </button>
                                            </form>

                                            <a href="{{url("/admin/sources/edit/" .$s->id)}}"
                                               data-toggle="tooltip" data-placement="bottom" title="EDIT"
                                               class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"
                                                                                 aria-hidden="true"></i></a>

                                            <form class="action-buttons" method="POST"
                                                  action="{{url("/admin/sources/delete/" .$s->id)}}">
                                                {{ csrf_field() }}
                                                <input type="hidden" name="_method" value="DELETE"/>
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                        data-toggle="tooltip" data-placement="bottom" title="DELETE"><i
                                                            class="fa fa-trash-o"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <hr>
                            <div class="text-center">
                                <a href="/admin/sources/create" class="btn btn-primary">Create a new Source</a>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
    </div>
@endsection


