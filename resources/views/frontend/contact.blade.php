@extends('templates.frontend')

@section('title', ' | Contact')

@section('content')
    <main>
        <section class="banner"></section>

        <section class="content-contact flex-center">
            <div class="container flex-center">
                <div class="title-section flex-center">
                    <h1>Lorem Ipsum Dolor</h1>
                    <span class="line-decorator"></span>
                </div>
                <p>
                    Lorem ut nostrud ipsum velit ullamco commodo non do reprehenderit aute commodo cupidatat dolor labore. Nostrud mollit non nisi fugiat. Duis nulla excepteur eiusmod qui pariatur in aute nostrud. Esse dolore tempor reprehenderit do proident aute exercitation sint pariatur ut in sunt nostrud voluptate. Sit enim ad ut culpa et in commodo anim culpa ea dolore nulla anim. Mollit ipsum pariatur et sint et incididunt dolore nulla proident commodo sunt mollit commodo.
                </p>
            </div>
        </section>

        <section class="contact flex-center" id="contact"></section>

    </main>
@endsection

@section('scripts')
    <script src="{{ asset('js/map.min.js') }}"></script>
@endsection