<?php get_header()?>
<?php while(have_posts()): the_post() ?>

<meta name="Under kunsttryk kan man købe Johns egne kunsttryk ONLINE">

<section class="heading" style="background-image: url(<?php the_field("header_img_kunsttryk") ?>)">
    <div class="headingcontent">
        <h1> Kunsttryk </h1>
    </div>
    <div class="col-lg-12 headerbtns">
        <a href="http://nmcdesign.dk/kontakt" class="col-6 btn1"><p>Kontakt</p></a>
        <a href="http://nmcdesign.dk/om-john" class="col-6 btn1"><p>Om John</p></a>
    </div>
</section>

<section class="kunsttryk_content">
    <div class="kunsttryk_text"> <p> Det vil snart være muligt at få Johns kunst på tryk! </p> </div>
</section>

<?php endwhile ?>

<?php get_footer(); ?>