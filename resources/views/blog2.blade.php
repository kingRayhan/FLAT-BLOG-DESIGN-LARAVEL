@extends('layouts.master')

@section('title','Blog 1')


@section('page-content')
    <main class="pt-80">
        <!--Main layout-->
        <div class="container">
            <!--First row-->
            <div class="row">
                <div class="content col-md-10 offset-md-1">
                    <div class="section section-blog-fw">
                    <!-- Post 1 -->
                    @include('partials/post-list/post-list-2',[
                        'post_title'  => 'Post 1',
                        'post_author' => 'King Rayhan',
                        'post_comments' => '15',
                        'post_image' => 'images/blog/blog-5.jpg',
                        'post_content' => '1At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.'
                    ])

                    <!-- Post 2 -->
                    @include('partials/post-list/post-list-2',[
                        'post_title'  => 'Post 2',
                        'post_author' => 'Anna Doe',
                        'post_comments' => '15',
                        'post_image' => 'images/blog/blog-6.jpg',
                    ])

                    <!-- Post 2 -->
                    @include('partials/post-list/post-list-2',[
                        'post_title'  => 'Post 3',
                        'post_author' => 'Anna Doe',
                        'post_comments' => '15',
                        'post_image' => 'images/blog/blog-7.jpg',
                    ])

                    </div>



					@include('partials/pagination')
                </div><!-- .content .col-md-8 -->
            </div><!-- .row -->
        </div><!-- .container -->
    </main>
@endsection



