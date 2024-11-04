<?php require "partials/_header.php" ?>
<?php require "partials/_variables.php" ?>
<div class="container">
   <div class="container p-3 ">
       <h4 class="text-center mt-5 ">PhpStorm Shortcuts For Mac</h4>
<!--       arama barı başlangıcı-->
      <?php require "partials/_aramaBar.php" ?>
<!--       arama barı sonu-->
   </div>
    <div class="">
        <!--en  dış kabuk div-->
        <?php foreach ($kurallar as $kural): ?>
            <div class="row  clearfix ">
                <div class="col-md-4 col-lg-3 pe-0">
                    <?php echo iconTani($kural["icon1"]); ?>
                    <?php echo isset($kural["icon2"])?'<i class="bi bi-plus mx-1"></i>':null; ?>
                    <?php echo iconTani($kural["icon2"]); ?>
                    <?php echo isset($kural["icon3"])?'<i class="bi bi-plus mx-1"></i>':null; ?>
                    <?php echo isset($kural["icon3"]) ? iconTani($kural["icon3"]) : null ?>
                </div>
                <div class="col-md-8 col-lg-9  fw-light text-secondary  my-2 ">
                    <?php echo $kural["exp"]; ?>
                </div>
            </div>
            <hr>
        <?php endforeach; ?>
    </div>
</div>
<?php require "partials/_footer.php" ?>
