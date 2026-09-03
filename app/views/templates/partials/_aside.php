<?php
/** @var array $categories */
?>

<!-- .col-md-8 sidebar-->
          <div class="col-lg-4 sidebar pl-lg-5 ftco-animate">
            <div class="sidebar-box">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="icon icon-search"></span>
                  <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                </div>
              </form>
            </div>
            <div class="sidebar-box ftco-animate">
            <?php include '../app/views/templates/categories/_index.php'; ?>
            </div>
            <div class="sidebar-box ftco-animate">
              <?php include '../app/views/templates/posts/recentsPosts.php'; ?>
            </div>

            <div class="sidebar-box ftco-animate">
              <?php include '../app/views/templates/tags/_index.php'; ?>
            </div>

          </div>