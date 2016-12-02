<article class="post mb-40">
    <div class="card">
        <div class="view overlay hm-white-slight">
            <img src="{{ isset($post_image) ? $post_image : 'images/blog/blog-1.jpg' }}" class="img-fluid" alt="">
            <a href="#">
                <div class="mask"></div>
            </a>
        </div>
        <div class="card-block">
            <!--Title-->
            <h2 class="card-title"><a href="#">{{ isset($post_title) ? $post_title : 'SIMPLE BUT BEAUTIFUL DECORATION' }}</a></h2>
            <div class="entry-meta">
                <span class="posted-on text-muted">
                    <i class="fa fa-calendar"></i> 
                    <a href="#" rel="bookmark" class="text-muted">
                        <time class="entry-date published">April 7, 2015</time>
                        <time class="updated" datetime="2015-05-23T07:57:46+00:00">May 23, 2015</time>
                    </a>
                </span>
                <span class="byline">
                    <i class="fa fa-user text-muted"></i> 
                    <span class="author vcard">
                        <a class="text-muted" href="#">{{ isset($post_author) ? $post_author: 'John Doe' }}</a>
                    </span>
                    <span class="comments-link">
                        <i class="fa fa-comment-o text-muted"></i>
                        <a href="#" class="text-muted">{{ isset($post_comments) ? $post_comments: '28' }} Comments</a>
                    </span>
                </span>
            </div>
            <!--Text-->
            <p class="card-text">
                {{ isset($post_content) ? $post_content: 'Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth anim…' }}
                
            </p>
            <a href="#" class="btn primary-color-dark">Read more</a>
        </div>
    </div>
</article>