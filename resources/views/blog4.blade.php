@extends('layouts.master',['main_container_class' => 'mt-0'])

@section('title','Blog 4')
@section('under-nav')
<section class="blog-list-header mt-80" style="color: #fff;">
    <div class="container warning-color pt-50 pb-50 pl-100 pr-100 text-center">
        <div class="row">
            <h1 class="section-heading">Section title</h1>
            <!--Section sescription-->
            <p class="section-description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <ul class="nav nav-inline">
              <li class="nav-item">
                <a class="nav-link active" href="#">Active</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#">/</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
              </li>
            </ul>
        </div>
    </div>    
</section>

@endsection
@section('page-content')
        <div class="container">
            <div class="row">
                <div class="content-white z-depth-1 col-md-12 pl-50 pr-50 pt-50">
                    <section class="section extra-margins">
                        @include('partials/post-list/post-list-4',[
                            'post_title'  => 'Post 1',
                            'post_author' => 'King Rayhan',
                            'post_comments' => '15',
                            'post_image' => 'images/blog/blog-5.jpg',
                            'post_content' => '1At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.'
                        ])

                        @include('partials/post-list/post-list-4',[
                            'post_title'  => 'This is a post',
                            'post_author' => 'Anna Doe',
                            'post_comments' => '15',
                            'post_image' => 'images/blog/blog-6.jpg',
                            'post_content' => '1At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.'
                        ])

                        @include('partials/post-list/post-list-4',[
                            'post_title'  => 'Post 3',
                            'post_author' => 'Anna Doe',
                            'post_comments' => '15',
                            'post_image' => 'images/blog/blog-7.jpg',
                        ])
                    </section>
                </div><!-- .content .col-md-12 -->
                @include('partials/pagination')
            </div><!-- .row -->
        </div><!-- .container -->
@endsection



