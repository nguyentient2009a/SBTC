@extends('client.layout.master')
@section('content')
    <main>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="main-left col-12">
                        {!! html_entity_decode($list->aboutUsPage) !!}
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
