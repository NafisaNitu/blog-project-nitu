@extends('front.master')

@section('title')
    Blog Page
@endsection

@section('body')

    <section class="page-title overlay" style="background-image: url({{ asset('/') }}front-assets/images/background/page-title.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="text-white font-weight-bold">Our Blog</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>Our Blog</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">



                    <div class="col-lg-8 py-100">
                    <div class="border rounded bg-white">
                        <img class="img-fluid w-100 rounded-top" src="{{ asset($blog->blog_image) }}" alt="blog-image">
                        <div class="p-4">
                            <h3>{{ $blog->blog_title }}</h3>
                            <ul class="list-inline d-block pb-4 border-bottom mb-3">
                                <li class="list-inline-item text-color">Posted By Admin</li>
                                <li class="list-inline-item text-color">On 25 November</li>
                                <li class="list-inline-item text-color">Tag: Advice, Fitness</li>
                            </ul>
                            <p>{{ $blog->blog_content }}</p>

                        </div>
                    </div>

                </div>

                <div class="col-lg-4">
                    <!-- Sidebar -->
                    <div class="bg-white px-4 py-100 sidebar-box-shadow">
                        <!-- Search Widget -->
                        <div class="mb-50">
                            <h4 class="mb-3">Search Here</h4>
                            <div class="search-wrapper">
                                <input type="text" class="form-control" name="search" placeholder="Type Here...">
                            </div>
                        </div>
                        <!-- categories -->
                        <div class="mb-50">
                            <h4 class="mb-3">Categories</h4>
                            <ul class="pl-0 mb-0">
                                <li class="border-bottom">
                                    <a href="#" class="d-block text-color py-10">Business Analysis</a>
                                </li>
                                <li class="border-bottom">
                                    <a href="#" class="d-block text-color py-10">Consultancy</a>
                                </li>
                                <li class="border-bottom">
                                    <a href="#" class="d-block text-color py-10">Investment</a>
                                </li>
                                <li class="border-bottom">
                                    <a href="#" class="d-block text-color py-10">Profit & Growth</a>
                                </li>
                                <li>
                                    <a href="#" class="d-block text-color py-10">Marketing Guidance</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Widget Recent Post -->
                        <div class="mb-50">
                            <h4 class="mb-3">Recent News</h4>
                            <div class="d-flex py-3 border-bottom">
                                <div class="mr-4">
                                    <a href="blog-single.html">
                                        <img class="rounded" src="{{ asset('/') }}front-assets/images/blog/post-thumb-sm-01.jpg" alt="post-thumb">
                                    </a>
                                </div>
                                <div>
                                    <h6 class="mb-3">
                                        <a class="text-dark" href="blog-single.html">Marketing Strategy 2017-2018.</a>
                                    </h6>
                                    <p class="meta">16 Dec, 2018</p>
                                </div>
                            </div>
                            <div class="d-flex py-3 border-bottom">
                                <div class="mr-4">
                                    <a href="blog-single.html">
                                        <img class="rounded" src="{{ asset('/') }}front-assets/images/blog/post-thumb-sm-02.jpg" alt="post-thumb">
                                    </a>
                                </div>
                                <div class="content">
                                    <h6 class="mb-3">
                                        <a class="text-dark" href="blog-single.html">Jack Ma & future of E-commerce</a>
                                    </h6>
                                    <p class="meta">16 Dec, 2018</p>
                                </div>
                            </div>
                            <div class="d-flex py-3">
                                <div class="mr-4">
                                    <a href="blog-single.html">
                                        <img class="rounded" src="{{ asset('/') }}front-assets/images/blog/post-thumb-sm-03.jpg" alt="post-thumb">
                                    </a>
                                </div>
                                <div class="content">
                                    <h6 class="mb-3">
                                        <a class="text-dark" href="blog-single.html">Jack Ma & future of E-commerce</a>
                                    </h6>
                                    <p class="meta">16 Dec, 2018</p>
                                </div>
                            </div>
                        </div>
                        <!-- Widget Tags -->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /blog -->


@endsection

