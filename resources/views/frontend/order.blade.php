@extends('templates.frontend')

@section('title', ' | Order')

@section('content')
    <main>
        <section class="contact-content flex-center"> 
            <img src="{{ asset('src/img/orderBig.png') }}" alt="img-form" />
            <div class="container content-container flex-center">
                <div class="title-section flex-center">
                    <h1>Form</h1>
                    <span class="line-decorator"></span>
                </div>
                <div class="info">
                    <img src="{{ asset('src/img/orderSmall.png') }}" alt="img-content-form" />
                    <h2>The cakes are accompanied by your story</h2>
                    <p>Ea officia ex id nostrud magna ad ipsum et elit pariatur eiusmod in. Aute mollit culpa deserunt velit adipisicing deserunt ullamco enim est nulla in deserunt nisi. Nostrud duis duis veniam ad nulla do ex nulla est elit ex nisi. Commodo sint tempor quis et enim aliqua incididunt consequat. Exercitation Lorem sit aliquip laboris dolore nostrud. Est culpa et laborum mollit nulla veniam. Irure qui eiusmod culpa tempor nulla fugiat ea.</p>
                </div>
            </div>
        </section>

        <section class="order-form" id="order-form"></section>

    </main>
@endsection

@section('scripts')
    <script src="{{ asset('js/order.min.js') }}"></script>
@endsection