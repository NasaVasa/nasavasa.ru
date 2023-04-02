@extends('layouts.app')

@section("content")
    <section class="ban_area">
        <div class="ban_inner d-flex align-items-center">
            <div class="container">
                <div class="ban_content text-right">
                    <h1 class="title-content">@yield('title')</h1>
                </div>
            </div>
        </div>
    </section>
    @yield("innerContent")
@endsection
