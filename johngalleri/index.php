<?php get_header()?>
<?php while(have_posts()): the_post() ?>
<meta name="Denne side er forsiden til John Olesen Galleri. Dette er en sammenfatning af alle undersider og indhold, der er på hjemmesiden">
<section class="heading" style="background-image: url(<?php the_field("header_img") ?>)">
    <div class="headingcontent">
        <h1> John Olesen Galleri </h1>
    </div>
    <div class="col-lg-12 headerbtns">
        <a href="http://nmcdesign.dk/kontakt" class="col-6 btn1"><p>Kontakt</p></a>
        <a href="http://nmcdesign.dk/om-john" class="col-6 btn1"><p>Om John</p></a>
    </div>
</section>

<section class="indexcategories">
    <div class="indexboxes">

        <div class="indexbox" style="background-image: url(<?php the_field("box1") ?>)">
            <a href="http://nmcdesign.dk/malerier" class="col- indexboxtext">
                <p class="boxp">Malerier</p>
            </a>
        </div>

        <div class="indexbox" style="background-image: url(<?php the_field("box2") ?>)">
            <a href="http://nmcdesign.dk/skulpturer" class="col- indexboxtext">
                <p class="boxp">Skulpturer</p>
            </a>         
        </div>

        <div class="indexbox" style="background-image: url(<?php the_field("box3") ?>)">
            <a href="http://nmcdesign.dk/kunsttryk" class="col- indexboxtext">
                <p class="boxp">Kunsttryk</p>
            </a>
            
        </div>
    </div>
</section>

<section class="indexudstillinger">
    <div class="udstillinger1">
        <div class="udstillingerimg" style="background-image: url(<?php the_field("billede_1") ?>)"></div>
        <div class="udstillinger_content">
            <h2 class="udstillinger_text"><?php the_field("overskrift_1")?></h2>
            <p class="udstillinger_subtext"><?php the_field("brodtekst_1")?></p>
            <a href="http://nmcdesign.dk/udstilling-1"><p class="btn1">Se mere</p></a>
            
        </div>
    </div>

    <div class="udstillinger2">
        <div class="udstillinger_content">
            <h2 class="udstillinger_text"><?php the_field("overskrift_2")?></h2>
            <p class="udstillinger_subtext"><?php the_field("brodtekst_2")?></p>
            <a href="http://nmcdesign.dk/udstilling-2"><p class="btn1">Se mere</p></a>
        </div>
        <div class="udstillingerimg" style="background-image: url(<?php the_field("billede_2") ?>)"></div>
    </div>

    <div class="udstillinger3">
        <div class="udstillingerimg" style="background-image: url(<?php the_field("billede_3") ?>)"></div>
        <div class="udstillinger_content">
            <h2 class="udstillinger_text"><?php the_field("overskrift_3")?></h2>
            <p class="udstillinger_subtext"><?php the_field("brodtekst_3")?></p>
            <a href="http://nmcdesign.dk/udstilling-3"><p class="btn1">Se mere</p></a>
        </div>
    </div>
</section>

<?php endwhile ?>

<?php get_footer(); ?>