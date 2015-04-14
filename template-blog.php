<?php
/*
 * Template Name:  Blog List
 */
get_header()
?>
<div class="wrapper_content">
  <div class="container_24 ">
    <div class="breadcrumbs">
      <ul>
        <li class="home">
          <a href="./index.html" title="Go to Home Page">Home</a>
          <span class="separator">/ </span>
        </li>
        <li class="blog">
          <a href="./blog.html" title="Return to Blog">Blog</a>
          <span class="separator">/ </span>
        </li>
        <li class="blog_cat_3">
          <strong>Lorem ispum</strong>
        </li>
      </ul>
    </div>
    <div class="grid_18 em-main-wrapper">
      <div class="em_post-items">
        <div class="em_post-item">
          <div class="post-title">
            <h2><a href="./blog_details.html">Class aptent taciti sociosqu ad litora torquent per conubia nostra</a></h2>
            <small class="time-stamp">Wednesday, Oct 23 2013, 01:48AM</small>
          </div>
          <div class="std">
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
          </div>
          <div class="post-footer">
            <span class="comment-count">
              4			</span>
            <a class="comment-post-link" href="./blog_details.html">Comments</a>
            <span class="separator">|</span>
            <span class="post-by">
              Posted by <span>admin</span>
            </span>
          </div>
        </div>
        <div class="em_post-item">
          <div class="post-title">
            <h2><a href="./blog_details.html">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</a></h2>
            <small class="time-stamp">Wednesday, Oct 23 2013, 01:36AM</small>
          </div>
          <div class="std">
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
          </div>
          <div class="post-footer">
            <span class="comment-count">
              0			</span>
            <a class="comment-post-link" href="./blog_details.html">Comments</a>
            <span class="separator">|</span>
            <span class="post-by">
              Posted by <span>admin</span>
            </span>
          </div>
        </div>
        <div class="em_post-item">
          <div class="post-title">
            <h2><a href="./blog_details.html">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</a></h2>
            <small class="time-stamp">Wednesday, Oct 23 2013, 01:33AM</small>
          </div>
          <div class="std">
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
          </div>
          <div class="post-footer">
            <span class="comment-count">
              4			</span>
            <a class="comment-post-link" href="./blog_details.html">Comments</a>
            <span class="separator">|</span>
            <span class="post-by">
              Posted by <span>admin</span>
            </span>
          </div>
        </div>
        <div class="em_post-item">
          <div class="post-title">
            <h2><a href="./blog_details.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a></h2>
            <small class="time-stamp">Tuesday, Oct 1 2013, 11:05AM</small>
          </div>
          <div class="std">
            <a href="./blog_details.html">
              <img src="./media/emblog/post/img_post_001.jpg">
            </a>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
          </div>
          <div class="post-footer">
            <span class="comment-count">
              14			</span>
            <a class="comment-post-link" href="./blog_details.html">Comments</a>
            <span class="separator">|</span>
            <span class="post-by">
              Posted by <span>admin</span>
            </span>
          </div>
        </div>
      </div>
      <div class="toolbar-bottom blog">
        <div class="pager">
          <p class="amount">
            Items 1 to 4 of 5 total
          </p>
          <div class="pages">
            <strong>Page:</strong>
            <ol>
              <li class="current">1</li>
              <li><a href="#">2</a></li>
              <li>
                <a class="next i-next" href="#" title="Next">
                  <span>Next page</span>
                  <img src="<?= SKIN ?>galabigshop/images/pager_arrow_right.gif" alt="Next" class="v-middle">
                </a>
              </li>
            </ol>
          </div>
        </div>
        <div class="sorter">
          <div class="sort-by">
            <label>Sort By</label>
            <select>
              <option value="#" selected="selected">
                Time
              </option>
              <option value="#">
                Name
              </option>
            </select>
            <a href="#" title="Set Ascending Direction"><img src="<?= SKIN ?>galabigshop/images/i_asc_arrow.gif" alt="Set Ascending Direction" class="v-middle"></a>
          </div>
        </div>
      </div>
    </div>
    <div class="grid_6 em-col-right em-sidebar">
      <div class="block em_blog-cat">
        <div class="block-title">
          <strong><span>Blog Categories</span></strong>
        </div>
        <div class="block-content">
          <ul class="nav-blog">
            <li class=" level0 first current"><a href="./blog_category.html"><span>Lorem ispum</span></a></li>
            <li class=" level0  parent">
              <a href="./blog_category.html"><span>Fashion</span></a>
              <ul class="level0">
                <li class=" level1 first "><a href="./blog_category.html"><span>Women's Clothing</span></a></li>
                <li class=" level1 last "><a href="./blog_category.html"><span>Men's Clothings</span></a></li>
              </ul>
            </li>
            <li class=" level0  "><a href="./blog_category.html"><span>Boutique</span></a></li>
            <li class=" level0  "><a href="./blog_category.html"><span>Home &amp; Garden</span></a></li>
            <li class=" level0  "><a href="./blog_category.html"><span>Collectibles &amp; Art</span></a></li>
            <li class=" level0 last "><a href="./blog_category.html"><span>Women's Clothing</span></a></li>
          </ul>
        </div>
      </div>
      <div class="block em_block-recent-post">
        <div class="block-title">
          <strong><span>Recent Posts</span></strong>
        </div>
        <div class="block-content">
          <ol>
            <li class="item">
              <a class="post-title" href="./blog_details.html">Class aptent taciti sociosqu ad litora torquent per conubia nostra</a>
              <small class="time-stamp">Wednesday, Oct 23 2013, 01:48AM</small>
              <span class="post-by">Posted by <span>admin</span></span>
            </li>
            <li class="item">
              <a class="post-title" href="./blog_details.html">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</a>
              <small class="time-stamp">Wednesday, Oct 23 2013, 01:36AM</small>
              <span class="post-by">Posted by <span>admin</span></span>
            </li>
            <li class="item">
              <a class="post-title" href="./blog_details.html">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</a>
              <small class="time-stamp">Wednesday, Oct 23 2013, 01:33AM</small>
              <span class="post-by">Posted by <span>admin</span></span>
            </li>
            <li class="item">
              <a class="post-title" href="./blog_details.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a>
              <small class="time-stamp">Tuesday, Oct 1 2013, 11:05AM</small>
              <span class="post-by">Posted by <span>admin</span></span>
            </li>
            <li class="item">
              <a class="post-title" href="./blog_details.html">Morbi id egestas tortor</a>
              <small class="time-stamp">Tuesday, Oct 1 2013, 10:54AM</small>
              <span class="post-by">Posted by <span>admin</span></span>
            </li>
          </ol>
        </div>
      </div>
      <div class="block em_block-recent-comments">
        <div class="block-title">
          <strong><span>Recent Comments</span></strong>
        </div>
        <div class="block-content">
          <ol type="square">
            <li class="item recent-comment-item">
              <a class="comment-title" href="./blog_details.html">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</a>
              <small class="time-stamp">Monday, Oct 28 2013, 09:36AM</small>
              <div class="recent-comment-content">
                fdfdf
              </div>
              <span class="comment-by">Commented by 							   <span>Customer</span>
              </span>
            </li>
            <li class="item recent-comment-item">
              <a class="comment-title" href="./blog_details.html">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</a>
              <small class="time-stamp">Monday, Oct 28 2013, 09:36AM</small>
              <div class="recent-comment-content">
                fdfdf
              </div>
              <span class="comment-by">Commented by 							   <span>Customer</span>
              </span>
            </li>
            <li class="item recent-comment-item">
              <a class="comment-title" href="./blog_details.html">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</a>
              <small class="time-stamp">Monday, Oct 28 2013, 09:34AM</small>
              <div class="recent-comment-content">
                fdfdfdf
              </div>
              <span class="comment-by">Commented by 							   <span>Customer</span>
              </span>
            </li>
            <li class="item recent-comment-item">
              <a class="comment-title" href="./blog_details.html">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</a>
              <small class="time-stamp">Monday, Oct 28 2013, 09:33AM</small>
              <div class="recent-comment-content">
                fdfdfdfdf
              </div>
              <span class="comment-by">Commented by 							   <span>Customer</span>
              </span>
            </li>
            <li class="item recent-comment-item">
              <a class="comment-title" href="./blog_details.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a>
              <small class="time-stamp">Monday, Oct 28 2013, 09:30AM</small>
              <div class="recent-comment-content">
                fdfdfdf
              </div>
              <span class="comment-by">Commented by 							   <span>Customer</span>
              </span>
            </li>
          </ol>
        </div>
      </div>
      <div class="block em_block-tag-cloud">
        <div class="block-title">
          <strong><span>Tag Cloud</span></strong>
        </div>
        <div class="block-content">
          <ul>
            <li class="item"><a href="#" style="font-size:32px;">fashion</a></li>
            <li class="item"><a href="#" style="font-size:22px;">test</a></li>
            <li class="item"><a href="#" style="font-size:12px;">tag</a></li>
            <li class="item"><a href="#" style="font-size:12px;">dolor</a></li>
            <li class="item"><a href="#" style="font-size:12px;">bigshop</a></li>
            <li class="item"><a href="#" style="font-size:12px;">lorem</a></li>
            <li class="item"><a href="#" style="font-size:12px;">ispum</a></li>
          </ul>
          <div class="actions">
            <a href="#">View All Tags</a>
          </div>
        </div>
      </div>
    </div>
    <div class="clear"></div>
  </div>
</div>
<?php
get_footer();
