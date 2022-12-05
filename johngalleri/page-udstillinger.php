<?php get_header()?>
<?php while(have_posts()): the_post() ?>

<meta name="På denne underside vises en oversigt over Johns udstillinger">

<section class="heading" style="background-image: url(<?php the_field("header_img_udstillinger") ?>)">
    <div class="headingcontent">
        <h1> Udstillinger </h1>
    </div>
    <div class="col-lg-12 headerbtns">
        <a href="/kontakt" class="col-6 btn1"><p>Kontakt</p></a>
        <a href="/om-john" class="col-6 btn1"><p>Om John</p></a>
    </div>
</section>

<section class="udstillinger_indhold">
    <div class="udstillinger_indhold1">
        <h2 class="udstillinger_titel"><?php the_field("udstilling_1_tekst")?></h2>
        <div class="udstillinger_img" style="background-image: url(<?php the_field("udstilling_1_img") ?>)"></div>
        <a href="/udstilling-1"><p class="btn1">Se mere</p></a>
    </div>

    <div class="udstillinger_indhold1">
        <h2 class="udstillinger_titel"><?php the_field("udstilling_2_text")?></h2>
        <div class="udstillinger_img" style="background-image: url(<?php the_field("udstilling_2_img") ?>)"></div>
        <a href="/udstilling-2"><p class="btn1">Se mere</p></a>
    </div>

    <div class="udstillinger_indhold1">
        <h2 class="udstillinger_titel"><?php the_field("udstilling_3_tekst")?></h2>
        <div class="udstillinger_img" style="background-image: url(<?php the_field("udstilling_3_img") ?>)"></div>
        <a href="/udstilling-3"><p class="btn1">Se mere</p></a>
    </div>
</section>

<?php endwhile ?>

<?php get_footer(); ?>