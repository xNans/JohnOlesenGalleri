<?php get_header()?>
<?php while(have_posts()): the_post() ?>

<meta name="Denne side indeholder en biografi, samt tidslinje, for John Olesen">

<section class="heading_kontakt" style="background-image: url(<?php the_field("header_img_om_john") ?>)">
    <div class="heading_kontakt_content">
        <h1> Om John </h1>
    </div>
</section>

<section class="om_john_content">
    <div class="om_john_text"> <?php the_field("om_john_text")?></div>
</section>

<?php endwhile ?>

<?php get_footer(); ?>