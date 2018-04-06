@extends('templates.frontend')

@section('title', ' | Cakes and Cupcakes')

@section('content')
    <main>
        <section class="gallery flex-center" id="gallery"></section>

        <section class="search flex-center">
            <div class="container flex-center">
                <form action="" method="post" class="flex-center">
                    
                    <div class="card-search">
                        <span class="comment">Find your here your favorites</span>
                        <h2>Cakes & Cupcakes</h2>
                    </div>
                    
                    <input type="search" placeholder="Search ..." />
                    <input type="submit" value="Search" class="btn btn-search" />
                    
                </form>
            </div>
            <img class="left" src="src/img/search1.png" alt="">
            <img class="right" src="src/img/search2.png" alt="">
        </section>

        <section class="post flex-center">
            <img src="src/img/post.png" alt="picture-post" />                
            <div class="container flex-center">
                <div class="card-post">
                    <h1>Lorem Ipsum Dolor sit Amet</h1>
                    <p>
                        Elit ad proident nostrud fugiat esse qui tempor amet dolore voluptate id. Laborum non deserunt pariatur esse amet duis consectetur fugiat dolor anim et deserunt nulla excepteur. Laboris sit cillum sunt dolore deserunt laboris fugiat ad est tempor cillum minim. Excepteur incididunt consequat eiusmod officia adipisicing veniam deserunt. Et magna voluptate et ullamco incididunt mollit.
                    </p>
                    <a href="" class="btn btn-secondary">Click Me!</a>
                </div>
            </div>
        </section>
    </main>
@endsection

@section('scripts')
    <script src="{{ asset('js/gallery.min.js') }}"></script>
@endsection