@extends('layouts.master')

@section('title','Blog 3')


@section('page-content')
    <main class="pt-80">
        <!--Main layout-->
        <div class="container">
            <!--First row-->
            <div class="row">
                <div class="content col-md-12">
                    @include('partials/post-list/post-list-3')
					@include('partials/pagination')
                </div><!-- .content .col-md-12 -->
            </div><!-- .row -->
        </div><!-- .container -->
    </main>
@endsection



