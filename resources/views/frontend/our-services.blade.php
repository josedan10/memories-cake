@extends('templates.frontend')

@section('title', ' | Our Services')

@section ('content')
    <main>      
        <section class="tell-story flex-center">
            <div class="container flex-center">
                <div class="title-section flex-center">
                    <h1>Tell your story</h1>
                    <span class="line-decorator"></span>
                </div>

                <div class="btns-container flex-around">
                    <button class="btn btn-secondary">Cake</button>
                    <button class="btn btn-secondary">History</button>
                    <button class="btn btn-secondary">Experience</button>
                </div>
                <p>Duis do deserunt culpa nisi pariatur Lorem aliqua ex. Pariatur tempor reprehenderit est occaecat. Nisi exercitation in dolore culpa esse reprehenderit do nisi.Culpa sit aliqua velit ut excepteur fugiat velit officia in reprehenderit qui do. Reprehenderit nulla non eu consequat culpa mollit dolor culpa dolor esse Lorem minim. Reprehenderit ipsum quis minim dolor aute.Irure tempor minim ullamco esse exercitation labore sint labore et pariatur. Officia ullamco eu do ullamco esse consectetur anim ut in officia amet laborum. Ullamco ex in fugiat velit adipisicing irure reprehenderit duis ipsum dolor culpa ipsum id proident. Laborum voluptate nulla consequat consectetur occaecat sint deserunt Lorem labore Lorem sunt tempor.</p>
            </div>
        </section>

        <section class="allies flex-center" id="allies"></section>

        <section class="corporative flex-center">
            <div class="container flex-center">
                <div class="title-section flex-center">
                    <h1>Corporative</h1>
                    <span class="line-decorator"></span>
                </div>

                <div class="corporatives-container grid-container">
                    <div class="card-corporative grid-container">
                        <img src="" alt="">
                        <h2>Events</h2>
                        <p>Veniam do ullamco elit tempor. Ad deserunt ipsum cillum eu eiusmod sint cupidatat eiusmod exercitation officia mollit qui. Voluptate velit mollit ullamco in laborum. Pariatur pariatur cillum elit velit consectetur fugiat exercitation incididunt ut cillum eiusmod occaecat. Consectetur anim nostrud amet in.</p>
                    </div>
                    <div class="card-corporative grid-container">
                        <img src="" alt="">
                        <h2>Snacks</h2>
                        <p>Excepteur in minim amet do eiusmod duis est incididunt est dolor eiusmod incididunt non. Mollit incididunt reprehenderit commodo excepteur magna et sit occaecat excepteur sit amet. Commodo sit nisi proident Lorem enim esse. Velit esse laboris excepteur fugiat Lorem labore nisi eiusmod. Voluptate qui occaecat aliquip dolor sint. Ex aliqua excepteur tempor nisi ut consequat anim.</p>
                    </div>
                    <div class="card-corporative grid-container">
                        <img src="" alt="">
                        <h2>Birthday</h2>
                        <p>Adipisicing qui sunt Lorem laborum id ad ut velit anim sunt exercitation. Reprehenderit amet non nisi adipisicing eiusmod eu anim do ex labore consectetur occaecat. Do commodo consequat exercitation culpa eu aliquip reprehenderit dolore pariatur magna commodo pariatur velit. Eiusmod aliquip fugiat nisi qui sunt velit adipisicing ipsum cupidatat nostrud. Laboris cillum elit voluptate nisi eiusmod. Et officia velit cillum pariatur anim ut.</p>
                    </div>
                </div>
            </div>
            
        </section>

        <section class="suscribe flex-center">
            <div class="container flex-center">
                <form action="" method="post" class="flex-center">
                    <input class="btn btn-suscribe" type="submit" value="Suscribe">
                    <input type="email" name="email" id="email" placeholder="example@domain.com">
                </form>
            </div>
        </section>
    </main>
@endsection

@section('scripts')
    <script src="{{ asset('js/allies.min.js') }}"></script>
@endsection