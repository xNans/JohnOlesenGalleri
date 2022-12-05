<?php get_header()?>
<?php while(have_posts()): the_post() ?> 

<meta name="her vises alle Johns materialer">

<section class="heading" style="background-image: url(<?php the_field("header_img_malerier") ?>)">
    <div class="headingcontent">
        <h1> Malerier </h1>
    </div>
    <div class="col-lg-12 headerbtns">
        <a href="http://nmcdesign.dk/kontakt" class="col-6 btn1"><p>Kontakt</p></a>
        <a href="http://nmcdesign.dk/om-john" class="col-6 btn1"><p>Om John</p></a>
    </div>
</section>

<section class="udstilling_1_content">
    <div class="udstilling_row1">
        <div class="udstilling1_row_content">
            <div class="udstilling_1_item" style="background-image: url(<?php the_field("udstilling_1_img_1") ?>)"></div>
            <div class="udstilling_1_text"><h2><?php the_field("udstilling_1_headertext_1")?></h2></div>
            <div class="udstilling_1_subtext"><p><?php the_field("udstilling_1_subtekst_1")?></p></div>
        </div>
        <div class="udstilling1_row_content">
            <div class="udstilling_1_item" style="background-image: url(<?php the_field("udstilling_1_img_2") ?>)"></div>
            <div class="udstilling_1_text"><h2><?php the_field("udstilling_1_headertext_2")?></h2></div>
            <div class="udstilling_1_subtext"><p><?php the_field("udstilling_1_subtekst_2")?></p></div>
        </div>
        <div class="udstilling1_row_content">
            <div class="udstilling_1_item" style="background-image: url(<?php the_field("udstilling_1_img_3") ?>)"></div>
            <div class="udstilling_1_text"><h2><?php the_field("udstilling_1_headertext_3")?></h2></div>
            <div class="udstilling_1_subtext"><p><?php the_field("udstilling_1_subtekst_3")?></p></div>
        </div>
    </div>

    <div class="udstilling_row1">
        <div class="udstilling1_row_content">
            <div class="udstilling_1_item" style="background-image: url(<?php the_field("udstilling_1_img_4") ?>)"></div>
            <div class="udstilling_1_text"><h2><?php the_field("udstilling_1_headertext_4")?></h2></div>
            <div class="udstilling_1_subtext"><p><?php the_field("udstilling_1_subtekst_4")?></p></div>
        </div>
        <div class="udstilling1_row_content">
            <div class="udstilling_1_item" style="background-image: url(<?php the_field("udstilling_1_img_5") ?>)"></div>
            <div class="udstilling_1_text"><h2><?php the_field("udstilling_1_headertext_5")?></h2></div>
            <div class="udstilling_1_subtext"><p><?php the_field("udstilling_1_subtekst_5")?></p></div>
        </div>
        <div class="udstilling1_row_content">
            <div class="udstilling_1_item" style="background-image: url(<?php the_field("udstilling_1_img_6") ?>)"></div>
            <div class="udstilling_1_text"><h2><?php the_field("udstilling_1_headertext_6")?></h2></div>
            <div class="udstilling_1_subtext"><p><?php the_field("udstilling_1_subtekst_6")?></p></div>
        </div>
    </div>

    <div class="udstilling_row1">
        <div class="udstilling1_row_content">
            <div class="udstilling_1_item" style="background-image: url(<?php the_field("udstilling_1_img_7") ?>)"></div>
            <div class="udstilling_1_text"><h2><?php the_field("udstilling_1_headertext_7")?></h2></div>
            <div class="udstilling_1_subtext"><p><?php the_field("udstilling_1_subtekst_7")?></p></div>
        </div>
        <div class="udstilling1_row_content">
            <div class="udstilling_1_item" style="background-image: url(<?php the_field("udstilling_1_img_8") ?>)"></div>
            <div class="udstilling_1_text"><h2><?php the_field("udstilling_1_headertext_8")?></h2></div>
            <div class="udstilling_1_subtext"><p><?php the_field("udstilling_1_subtekst_8")?></p></div>
        </div>
        <div class="udstilling1_row_content">
            <div class="udstilling_1_item" style="background-image: url(<?php the_field("udstilling_1_img_9") ?>)"></div>
            <div class="udstilling_1_text"><h2><?php the_field("udstilling_1_headertext_9")?></h2></div>
            <div class="udstilling_1_subtext"><p><?php the_field("udstilling_1_subtekst_9")?></p></div>
        </div>
    </div>

    <div class="udstilling_row1">
        <div class="udstilling1_row_content">
            <div class="udstilling_1_item" style="background-image: url(<?php the_field("udstilling_1_img_10") ?>)"></div>
            <div class="udstilling_1_text"><h2><?php the_field("udstilling_1_headertext_10")?></h2></div>
            <div class="udstilling_1_subtext"><p><?php the_field("udstilling_1_subtekst_10")?></p></div>
        </div>
        <div class="udstilling1_row_content">
            <div class="udstilling_1_item" style="background-image: url(<?php the_field("udstilling_1_img_11") ?>)"></div>
            <div class="udstilling_1_text"><h2><?php the_field("udstilling_1_headertext_11")?></h2></div>
            <div class="udstilling_1_subtext"><p><?php the_field("udstilling_1_subtekst_11")?></p></div>
        </div>
        <div class="udstilling1_row_content">
            <div class="udstilling_1_item" style="background-image: url(<?php the_field("udstilling_1_img_12") ?>)"></div>
            <div class="udstilling_1_text"><h2><?php the_field("udstilling_1_headertext_12")?></h2></div>
            <div class="udstilling_1_subtext"><p><?php the_field("udstilling_1_subtekst_12")?></p></div>
        </div>
    </div>

</section>

<?php endwhile ?>

<?php get_footer(); ?>