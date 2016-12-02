@extends('layouts.master',['main_container_class' => 'mt-30'])

@section('title','Single Page 1')


@section('under-nav')
	@include('partials.single-header')
@endsection

@section('page-content')

        <div class="container single-page">
            <!--First row-->
            <div class="row">

				<nav class="breadcrumb">
				  <a class="breadcrumb-item" href="#">Home</a>
				  <a class="breadcrumb-item" href="#">Library</a>
				  <a class="breadcrumb-item" href="#">Data</a>
				  <span class="breadcrumb-item active">Bootstrap</span>
				</nav>
                <div class="content-white z-depth-1 col-md-12 pl-50 pr-50 pt-30">
					<p>Morbi et accumsan est, non convallis metus. Etiam faucibus, leo et scelerisque facilisis, magna erat dictum nibh, vel congue tortor massa vitae magna. Morbi et accumsan est, non convallis metus.</p>
					<figure class="figure">
					  <img src="images/blog/blog-2.jpg" class="figure-img img-fluid w-100 rounded" alt="...">
					  <figcaption class="figure-caption">A caption for the above image.</figcaption>
					</figure>
					<p>Quisque sagittis nisl sit amet nulla rutrum ultrices. Vivamus ut sagittis ligula, sit amet fermentum dolor. Mauris accumsan neque ut odio tempor semper ac vitae ligula. <a href="#">Sample Link</a>. Morbi viverra tincidunt nisl, eget placerat erat. Morbi ornare mollis quam, sit amet vestibulum erat pharetra vitae:</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas impedit blanditiis, repellat ullam provident nihil assumenda iure culpa ducimus a quia delectus eveniet totam facere veniam, fugiat id, natus quaerat nisi ea ab? Ex at amet ea vero, repellat perferendis nam assumenda deserunt culpa earum soluta ipsum quo accusantium adipisci eaque alias asperiores porro repellendus. Consectetur corporis enim veniam ex optio recusandae, dignissimos quidem sit tenetur ipsum, delectus nesciunt. Obcaecati unde aliquid saepe debitis, esse quos nam consequuntur vel quisquam earum quod necessitatibus voluptas ex quis quia autem quaerat numquam repellendus odio quo suscipit nulla, cumque iure. Excepturi harum similique ipsa accusantium, quisquam et dolore ab necessitatibus dolorum sunt nam animi temporibus sapiente reprehenderit neque sit veniam sequi aperiam explicabo eum nesciunt aliquid esse ipsam! Reprehenderit saepe laudantium ab libero voluptate molestias laboriosam est sit officia similique, quo quia accusantium facilis animi reiciendis, doloribus earum cumque nobis, vitae harum culpa tenetur. Voluptatem incidunt modi, eligendi vero voluptate quae deleniti id culpa nulla, molestias, corrupti sint, rem. Vel molestias, nisi repellat illo recusandae id fugit. Laudantium quisquam accusantium fuga placeat illum mollitia ducimus temporibus quam tempora iure ipsa excepturi voluptatibus quae nihil velit, expedita soluta eaque alias reiciendis rerum ullam! Corporis!</p>
					<ul>
					  <li>Lorem ipsum dolor sit amet</li>
					  <li>Consectetur adipiscing elit</li>
					  <li>Integer molestie lorem at massa</li>
					  <li>Facilisis in pretium nisl aliquet</li>
					  <li>Nulla volutpat aliquam velit
					    <ul>
					      <li>Phasellus iaculis neque</li>
					      <li>Purus sodales ultricies</li>
					      <li>Vestibulum laoreet porttitor sem</li>
					      <li>Ac tristique libero volutpat at</li>
					    </ul>
					  </li>
					  <li>Faucibus porta lacus fringilla vel</li>
					  <li>Aenean sit amet erat nunc</li>
					  <li>Eget porttitor lorem</li>
				    </ul>

					<p>Nulla sed mi leo, sit amet molestie nulla. Phasellus lobortis blandit ipsum, at adipiscing eros porta quis. Phasellus in nisi ipsum, quis dapibus magna. <strong>Im bold</strong> and <i>Italic Text</i>, pretium sit amet aliquam a, gravida eget dui. Pellentesque eu ipsum et quam faucibus scelerisque vitae ut ligula. Ut luctus fermentum commodo. Mauris eget justo turpis, eget</p>

					<div class="quote_area pl-80 pr-80 mb-20">
					    <i class="fa fa-quote-left" aria-hidden="true"></i>
					    <p>Lorem ipsum dolor sit amet, consecte tur adipiscing elit. Sed a elit condimentum, tempus magna quis, venenatis nunc.</p>
					    <h4>Leo Widrich - Buffer Editor</h4>
					</div>

						<div class="blog_image_content row m0">
                            <div class="col-md-6">
                                 <div class="image_content">
                                    <img src="images/blog/single_blog_Q.png" class="float-xs-left pr-10">
                                    <p>uisque sagittis nisl sit amet nulla rutrum us. Vivamus ut sagittis ligula, sit amet fermentum dolor. Mauris accumsan neqe Mauris odi ipsum, porttitor id ante ac, rutrum dictum</p>
                                 </div>
                                <h6>semper ac vitae ligula. Sample Link. Morbi viverran ttincidunt nisl</h6>
                                <img src="images/blog/blog-5.jpg" class="img-fluid">
                                <div class="mt-30"></div>
                                <h4>It’s a standard caption</h4>
                                <h5>Etiam vitae nisl est. Fusce mollis imperdiet risus ut aliquam.</h5>
                            </div>
                            <div class="col-md-6">
                                <p>Curabitur sit amet finibus mi. Etiam vitae nisl est. Fusce mollis imperdiet risus ut aliquam. Mauris odi ipsum, porttitor id ante ac, rutrum dictum nisi Vestibulum pulvinar felgula in sit. </p>
                                <div class="right_element_content">
                                    <h4>This is heading 3</h4>
                                    <p>Etiam vitae nisl est. Fusce mollis imperdiet risus ut aliquam. Mauris odi ipsum, porttitor id ante ac, rutrum dictum nisi Vestibulum pulvinar felgula in sit.</p>
                                </div>
                                <div class="right_element_content">
                                    <h4>This is heading 3</h4>
                                    <p>Etiam vitae nisl est. Fusce mollis imperdiet risus ut aliquam. Mauris odi ipsum, porttitor id ante ac, rutrum dictum nisi Vestibulum pulvinar felgula in sit.</p>
                                </div>
                            </div>
                        </div><!-- .row -->

                </div><!-- .content .col-md-12-->
            </div><!-- .row -->
        </div><!-- .container -->
@endsection



