@extends('layouts.admin')

@section("extra_styles")
    <style>
        .token-display span {
            display: block;
            background: #337ab7;
            color: #fff;
            padding: 8px;
            margin-top: -23px;
            border-radius: 5px;
        }
        p.has-error .help-block {
            font-size: 12px;
            margin-top: 14px;
        }
        p.has-error {
            font-size: 11px;
            margin-top: 8px;
        }
    </style>
@endsection

@section("content")

    <div class="container-fluid">
        <div class="wrapper">
            <div class="row">

                <div class="col-md-6 col-md-offset-3">

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Edit Source
                        </div>
                        <div class="panel-body" id="app">
                            <form method="POST" action="{{url("/admin/sources/update/" .$source->id)}}">
                                <input type="hidden" name="_method" value="PUT">
                                {{ csrf_field() }}
                                <div class="pull-right token-display">
                                    <span>Source Token: {{ $source->stoken }}</span>
                                </div>
                                <h3>General Information</h3>
                                <hr>


                                <div class="form-group">
                                    <label for="landing_page_name">Landings</label>
                                    <select name="landing_page_name" id="landing_page_name" class="form-control">
                                        @foreach($landings as $l)
                                            <option {{ ($source->landing_page->name == $l->name) ? "selected='selected'" : "" }}>
                                                {{$l->name}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <input type="hidden" name="stoken" value="{{ $source->stoken }}">
                                <div class="form-group">
                                    <label for="broker_name">Brokers</label>
                                    <select name="broker_name" id="broker_name" class="form-control">
                                        <option>Select a broker</option>
                                        @foreach($brokers as $b)
                                            <option {{ ($source->broker->name == $b->name) ? "selected='selected'" : "" }}>
                                                {{$b->name}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="campaign_id">Campaign ID</label>
                                    <input id="campaign_id" type="text" name="campaign_id" class="form-control" value="{{ $source->campaign_id }}" style="width: 15%">
                                </div>
                                <div class="form-group">
                                    <label for="default_offer_url">Default Offer Url</label>
<!--                                     <input type="text" name="default_offer_url" id="default_offer_url"
                                           class="form-control" value="{{$source->default_offer_url}}" required/> -->
                                    <p class="has-error">
                                        Please make sure an offer in HasOffers exists with the following link:<br>
                                        {{  url('/') }}/landing/{{ $source->stoken }}?affiliate_id={affiliate_id}&transaction_id={transaction_id}&offer_id={offer_id}.<br>
                                        <small class="help-block">** Please note: set "Conversion Tracking:" to "Server Postback w/ Transaction ID"</small>
                                    </p>
                                </div>


                                <div class="form-group">
                                    <label for="default_offer_url">Redirect Url</label>
                                    <input type="text" name="redirect_url" id="redirect_url" class="form-control"
                                           value="{{$source->redirect_url}}" required/>
                                </div>

                                <hr>
                                <div class="pull-right">
                                    <a href="/admin/sources" class="btn btn-danger">Cancel</a>
                                    <input type="submit" class="btn btn-primary" value="Save">
                                </div>
                            </form>
                            <h4>You can use the following parameters in your redirect URL:</h4>
                            <p>
                                <h5>Available Parameters:</h5>
                                <h6>{email}  |  {password}  |  {name}  |  {transaction_id} |  {offer_id}  |  {affiliate_id} </h6>
                            </p>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>
@endsection

@section('extra_scripts')
@endsection
