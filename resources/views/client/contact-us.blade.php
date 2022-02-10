@extends('client.layout.master')
@section('content')
    <main>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="main-left col-12" >
                        {!! $list->contactUsPage !!}
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.0979884304465!2d105.77946311478455!3d21.028764893154438!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454b32940de77%3A0x3a64fc9d543bf0a5!2zOCBUw7RuIFRo4bqldCBUaHV54bq_dCwgTeG7uSDEkMOsbmgsIFThu6sgTGnDqm0sIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1630940030191!5m2!1svi!2s" width="1050" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
