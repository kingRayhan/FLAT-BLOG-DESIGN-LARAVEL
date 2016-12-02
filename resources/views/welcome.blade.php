@extends('layouts.master')

@section('title','Blog 1')


@section('page-content')
    <main class="pt-80">
        <!--Main layout-->
        <div class="container">
            <!--First row-->
            <div class="row">
                <div class="content col-md-8">

                	<!-- Post 1 -->
                    @include('partials/post-list/post-list-1',[
						'post_title'  => 'Hello World',
						'post_author' => 'John Doe',
						'post_comments' => '35',
						'post_image' => 'images/blog/blog-1.jpg',
                    ])
                    
                	<!-- Post 2 -->
                    @include('partials/post-list/post-list-1',[
						'post_title'  => 'Post 2',
						'post_author' => 'King Rayhan',
						'post_comments' => '35',
						'post_image' => 'images/blog/blog-2.jpg',
                    ])

                	<!-- Post 3 -->
                    @include('partials/post-list/post-list-1',[
						'post_title'  => 'Post 3',
						'post_author' => 'King Rayhan',
						'post_comments' => '35',
						'post_image' => 'images/blog/blog-3.jpg',
                    ])



					@include('partials/pagination')
                </div><!-- .content .col-md-8 -->
                <div class="sidebar col-md-4">
                	@include('partials/sidebar')
                </div><!-- .sidebar -->
            </div><!-- .row -->
        </div><!-- .container -->
    </main>
@endsection



