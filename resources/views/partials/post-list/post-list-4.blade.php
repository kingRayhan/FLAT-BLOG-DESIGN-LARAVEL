    <div class="row">

        <!--First column-->
        <div class="col-md-5 mb-r">
            <!--Featured image-->
            <div class="view overlay hm-white-slight">
                <img src="{{ isset($post_image) ? $post_image : 'images/blog/blog-1.jpg' }}" class="img-fluid" alt="">
                <a>
                    <div class="mask waves-effect waves-light"></div>
                </a>
            </div>
        </div>

        <div class="col-md-7 mb-r">
            <!--Excerpt-->
            <a href="" class="amber-text"><h5><i class="fa fa-diamond"></i>Fashion</h5></a>
            <h4>{{ isset($post_title) ? $post_title : 'SIMPLE BUT BEAUTIFUL DECORATION' }}</h4>
            <p>{{ isset($post_content) ? $post_content : 'SIMPLE BUT BEAUTIFUL DECORATION' }}</p>
            <p>by <a><strong>Carine Fox</strong></a>, 19/08/2016</p>
            <a class="btn waves-effect waves-light primary-color-dark">Read more</a>
        </div>
    </div>
    <hr>