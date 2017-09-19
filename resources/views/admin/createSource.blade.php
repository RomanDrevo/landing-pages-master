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
                            Create a new source
                        </div>
                        <div class="panel-body" id="app">
                            <div class="pull-right token-display">
                                <span>Source Token: {{ $stoken }}</span>
                            </div>
                            <form action="/admin/sources" method="POST">

                                {{ csrf_field() }}

                                <h3>General Information</h3>
                                <hr>
                                <div class="form-group">
                                    <label for="landing_page_name">Landings</label>
                                    <select name="landing_page_name" id="landing_page_name" class="form-control">
                                        <option>Select a landing</option>
                                        @foreach($landings as $l)
                                            <option>{{$l->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <input type="hidden" name="stoken" value="{{ $stoken }}"/>
                                <div class="form-group">
                                    <label for="broker_name">Brokers</label>
                                    <select name="broker_name" id="broker_name" class="form-control">
                                        <option>Select a broker</option>
                                        @foreach($brokers as $b)
                                            <option>{{$b->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="campaign_id">Campaign ID</label>
                                    <input id="campaign_id" type="text" name="campaign_id" class="form-control" style="width: 15%">
                                </div>
                                <div class="form-group">
                                    <label for="default_offer_url">Default Offer Url</label>
                                    <!-- <input type="text" name="default_offer_url" id="default_offer_url"
                                           class="form-control" v-model="name"
                                           /> -->
                                    <p class="has-error">
                                        Create an offer in HasOffers with the following link:<br>
                                        {{  url('/') }}/landing/{{ $stoken }}?affiliate_id={affiliate_id}&transaction_id={transaction_id}&offer_id={offer_id}.<br>
                                        <small class="help-block">** Please make sure the "Conversion Tracking:" is set to "Server Postback w/ Transaction ID"</small>
                                    </p>
                                </div>


                                <div class="form-group">
                                    <label for="default_offer_url">Redirect Url</label>
                                    <input type="text" name="redirect_url" id="redirect_url" class="form-control"
                                           v-model="name"
                                           required/>
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
