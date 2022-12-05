<?php get_header()?>
<?php while(have_posts()): the_post() ?>

<meta name="Dette er Johns kontaktside">

<section class="heading_kontakt" style="background-image: url(<?php the_field("header_img_kontakt") ?>)">
    <div class="heading_kontakt_content">
        <h1> Kontakt </h1>
    </div>
</section>

<section class="kontakt_content">
    <div class="kontakt_text"> <?php the_field("kontakt_tekst")?></div>
    <div class="kontakt_img" style="background-image: url(<?php the_field("kontakt_img") ?>)"></div>
</section>
<?php endwhile ?>

<?php get_footer(); ?>