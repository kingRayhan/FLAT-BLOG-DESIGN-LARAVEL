<article class="post mb-40">
    <div class="view overlay hm-white-slight">
        <img src="{{ isset($post_image) ? $post_image : 'images/blog/blog-1.jpg' }}" style="w-100">
        <a>
            <div class="mask  waves-effect waves-light"></div>
        </a>
    </div>
    <!--Post data-->
    <div class="jumbotron">
        <h2><a href="#">{{ isset($post_title) ? $post_title : 'SIMPLE BUT BEAUTIFUL DECORATION' }}</a></h2>
        <p>Written by <a>{{ isset($post_author) ? $post_author: 'John Doe' }}</a>, 26/08/2016</p>

        <!--Social shares-->
        <div class="social-counters ">

            <!--Facebook-->
            <a class="btn btn-fb  waves-effect waves-light">
                <i class="fa fa-facebook left "></i>
                <span class="hidden-md-down ">Facebook</span>
            </a>
            <span class="counter ">46</span>

            <!--Twitter-->
            <a class="btn btn-tw  waves-effect waves-light">
                <i class="fa fa-twitter left "></i>
                <span class="hidden-md-down ">Twitter</span>
            </a>
            <span class="counter ">22</span>

            <!--Google+-->
            <a class="btn btn-gplus  waves-effect waves-light">
                <i class="fa fa-google-plus left "></i>
                <span class="hidden-md-down ">Google+</span>
            </a>
            <span class="counter ">31</span>

            <!--Comments-->
            <a class="btn btn-default  waves-effect waves-light">
                <i class="fa fa-comments-o left "></i>
                <span class="hidden-md-down ">Comments</span>
            </a>
            <span class="counter ">{{ isset($post_comments) ? $post_comments: '28' }}</span>

        </div>
        <!--/.Social shares-->
    </div>
    <!--/Post data-->
    <!--Excerpt-->
    <div class="excerpt">
        <p>
            {{ isset($post_content) ? $post_content: 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.' }}
        </p>
    </div>
</article>