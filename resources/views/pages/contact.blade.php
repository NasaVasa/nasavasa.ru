@extends('layouts.inner')
@section('title','Контакты')
@section('innerContent')
    <section class="contact_area section_gap" >
        <div class="container">
            <div class="row">
                <x-panels.contactInfo/>
{{--                <x-panels.messageSender/>--}}
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1962186.3611115299!2d38.38240670079309!3d55.170047719210295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54afc73d4b0c9%3A0x3d44d6cc5757cf4c!2z0JzQvtGB0LrQstCw!5e0!3m2!1sru!2sru!4v1660581904074!5m2!1sru!2sru"  class="map" style="border:0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
    <!--================Contact Success and Error message Area =================-->
{{--    <div id="success" class="modal modal-message fade" role="dialog">--}}
{{--        <div class="modal-dialog">--}}
{{--            <div class="modal-content">--}}
{{--                <div class="modal-header">--}}
{{--                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                        <i class="fa fa-close"></i>--}}
{{--                    </button>--}}
{{--                    <h2>Thank you</h2>--}}
{{--                    <p>Your message is successfully sent...</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <!-- Modals error -->

{{--    <div id="error" class="modal modal-message fade" role="dialog">--}}
{{--        <div class="modal-dialog">--}}
{{--            <div class="modal-content">--}}
{{--                <div class="modal-header">--}}
{{--                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                        <i class="fa fa-close"></i>--}}
{{--                    </button>--}}
{{--                    <h2>Sorry !</h2>--}}
{{--                    <p> Something went wrong </p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection

