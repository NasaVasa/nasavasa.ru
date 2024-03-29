@extends('layouts.inner')
@section('title','Контакты')
@section('innerContent')
    <section class="contact_area section_gap">
        <div class="container">
            <div class="row">
                <x-panels.contactInfo/>
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

