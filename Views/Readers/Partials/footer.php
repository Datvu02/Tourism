
<div class="col-lg-4">
  <div class="sidebar">
    <div class="row">
      <div class="col-lg-12">
        <div class="sidebar-item recent-posts">
          <div class="sidebar-heading">
            <h2>Blogs nổi bật</h2>
          </div>
          <div class="content">
            <ul>
              <?php foreach ($posts as $post) { ?>

                <li><a href="index.php?mod=post&act=discover&id=<?= $post['id'] ?>">
                  <h5><?= $post['title'] ?></h5>
                  <span><?= $post['created_at'] ?></span>
                </a></li>

              <?php } ?>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-12">
        <div class="sidebar-item categories">
          <div class="sidebar-heading">
            <h2>Danh mục nổi bật</h2>
          </div>
          <div class="content">
            <ul>
              <?php foreach (getCategories() as $category) { ?>
              <li><a href="#">- <?= $category['name'] ?></a></li>
            <?php } ?>
            </ul>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
</div>
</div>
</section>


<footer>
<div class="container">
<div class="row">

<div class="col-lg-12">
  <div class="copyright-text" style="display: flex; justify-content: center;">
    <p>Copyright @ Blog Tourism<em>.</em></p>
  </div>
</div>
</div>
</div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="assets/Reader/jquery/jquery.min.js"></script>
<script src="assets/Reader/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Additional Scripts -->
<script src="assets/Reader/js/custom.js"></script>
<script src="assets/Reader/js/owl.js"></script>
<script src="assets/Reader/js/slick.js"></script>
<script src="assets/Reader/js/isotope.js"></script>
<script src="assets/Reader/js/accordions.js"></script>

<script language = "text/Javascript">
  cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
  function clearField(t){                   //declaring the array outside of the
  if(! cleared[t.id]){                      // function makes it static and global
      cleared[t.id] = 1;  // you could use true and false, but that's more typing
      t.value='';         // with more chance of typos
      t.style.color='#fff';
      }
  };
</script>

</body>
</html>
