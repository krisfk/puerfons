<?php
/*
Template Name: about-us
*/

get_header("puerfons");
$lang_code =ICL_LANGUAGE_CODE;

?>

<div class="page-banners">

    <?php


if( have_rows('banners') ):
    while ( have_rows('banners') ) : the_row();
    
    $img_url = wp_get_attachment_url(get_sub_field('banner_image'));
    
    
    ?>

    <div>
        <img src="<?php echo $img_url;?>" alt="">
    </div>
    <?php
endwhile;
endif;
    ?>

</div>



<!-- <div class="page-banner-txt-2 pt-3 pb-3 pl-4 pr-4">
    The essence of youth -
    Enjoy the Freedom and
    Energy Brought by
    A Healthy Body and Mind</div> -->

<div class="container mt-xl-5 mt-lg-5 mt-md-5 mt-sm-5 mt-3 pt-5" id="brand">

    <div class="row pue-section pue-section-1">

        <?php // echo get_field('section1content')?>
        <?php //echo get_field('section2content')?>

        <div class="col-xl-6 col-md-6 col-sm-12 col-12  positive-relative flower-wrapper">


            <div class="position-absolute w-100 h-100">
                <div class="d-table  w-100 h-100">
                    <div class="d-table-cell align-middle">
                        <div class="about-slogon-1">


                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="60.91px"
                                height="53.71px" viewBox="0 0 60.91 53.71"
                                style="enable-background:new 0 0 60.91 53.71;" xml:space="preserve">
                                <style type="text/css">
                                .st0 {
                                    fill: #AD835D;
                                }
                                </style>
                                <defs>
                                </defs>
                                <g>
                                    <path class="st0" d="M42.52,0H0l0,53.71h6.44l0-47.27h36.08c6.59,0,11.96,5.36,11.96,11.94c0,6.59-5.36,11.94-11.96,11.94v6.43
		c10.14,0,18.4-8.24,18.4-18.38C60.91,8.24,52.66,0,42.52,0z" />
                                    <polygon class="st0" points="15.04,53.7 21.48,53.7 21.48,36.76 34.73,36.76 34.73,30.32 21.48,30.32 21.48,21.32 41.82,21.32 
		41.82,14.89 15.04,14.89 	" />
                                </g>
                            </svg>

                            <div class="mt-3">
                                <?php  echo get_field('section1content')?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <img src="<?php echo get_template_directory_uri(); ?>/img/flower.jpg" alt="">

        </div>

        <?php  echo get_field('section2content')?>

        <!-- <div class="col-xl-6 col-md-6 col-sm-12 col-12 ">
            Youth is often associated with the number of age, as if the older you are, the duller your life would be.
            <br> <br>
            Purefons yet believes youth is a state of mind. The essence of youth is enjoying the freedom and energy
            brought by a healthy body and mind. A vigorous life is synchronized with health and wellness instead of your
            age.
            <br><br>
            Found in Hong Kong in 2017. Puerfons’ supplements and skincare products promote anti-aging functions that
            maintain your beauty and health. The regenerated body will free you from the chain of physical limitation
            and support you with a rejuvenated vision and mindset.
            <br><br>
            A wide range of Puerfons’ products helps delaying the negative effects of aging process and guiding you to
            the “fountain of youth” - To supplement ingredients that are missing from the intrinsic genes or lost from
            natural ageing process; to eliminate free radicals that scavenge the body and cause damage to cells,
            proteins and DNA; to reprogram dysfunctional cells to function actively as when you were young; to prevent
            physical and physiological decline by restoring lost functional ability of cells.
            <br><br>
            <span class="gold-subheading">The Strength of Science, the Power of Youth</span>

            <br><br>
            Based on scientific research of life science over two decades, Puerfons is committed to turn progressive
            science into your everyday life with our unique set of products and services, to transform anti-aging
            technologies into everyone’s joyful daily routine and habits to extend your health span.





        </div> -->
    </div>


</div>


<!-- <div class="pue-section pue-section-2 mt-5 mb-5">

    <div class="pue-section-subheading mt-5 mb-5">
        NAD+ - The Key to Stay Young <br>
        Cutting Edged Science of Healthy Aging

    </div>

    <div class="row container mt-4">
        <div class="col-6">


            <div>

                <div class="brown-square-bg"></div>

                <div class="txt-on-brown-square mt-4">
                    NDA+ (Nicotinamide Adenine Dinucleotide) is not only a necessary molecule for human beings to
                    sustain
                    lives
                    but also the most important substance to maintain the youthfulness of human body. It exists in all
                    living
                    cells to regulate the rate of active cells. <br><br>

                    Dr. David Sinclair, a tenured professor of Department of Genetics at Harvard Medical School, and his
                    colleagues published their latest findings on NDA+ in the Science Magazine. Dr. Sinclair dripped
                    NAD+
                    into
                    the drinking water of experimental mice. In less than a week, significant age reversal was observed
                    in
                    the
                    muscle tissue of the mice, and their DNA repair ability also increased.
                </div>
            </div>


            <img class="mt-3 img-on-brown-square" src="<?php echo get_template_directory_uri(); ?>/img/man-1.jpg"
                alt="">



        </div>
        <div class="col-6">


            <img class="img-on-brown-square mt-4" src="<?php echo get_template_directory_uri(); ?>/img/level-of-nad.jpg"
                alt="">

            <div class="mt-3">

                Research also shows the level of NAD + in the human body declines continuously with age. The level of
                NAD + of adults and the elderly is only 20% of the babies. Therefore, the older we get, the more NAD +
                needs to be supplemented.
                <br> <br>
                Puerfons’ capsules ensure supplementing the lost nutrition and vitality of individuals by enhancing the
                level of NAD + in human body. NMN and NR are both proven effective precursor of NAD+, and resveratrol
                plays the important role of multiplying the impacts synergistically.





            </div>

        </div>


        <div class="col-12 gold-subheading bold mt-5"> To help the process of cell activating and healthy aging, NAD+
            can:
        </div>

        <ul class="points-list-ul mt-5 pb-5">
            <li>
                <div class="num">1</div>

                <div class="point-des">Repair damaged cells in DNA</div>
            </li>
            <li>
                <div class="num">2</div>
                <div class="point-des">Increase cell metabolism and inhibit stem cells from aging</div>
            </li>
            <li>
                <div class="num">3</div>
                <div class="point-des">Improve muscle mass and reduce muscle loss</div>

            </li>
            <li>
                <div class="num">4</div>
                <div class="point-des">Promote hydrogen transferal in key metabolic processes and ATP synthesis</div>
            </li>
            <li>
                <div class="num">5</div>
                <div class="point-des">Activate longevity protein Sirtuin (SIRT) to boost brain energy and delay aging
                </div>
            </li>

        </ul>

    </div>





</div> -->



<!-- <div class="pue-section pue-section-3 mt-5 mb-5">


    <div class="row container mt-4">




        <div class="pue-section-subheading mt-5 mb-5">
            Quality Assurance


        </div>


        <img src="<?php echo get_template_directory_uri(); ?>/img/science.jpg" alt="">


        <div class="col-6 gold-blk p-5">


            <span class="white-subheading">Revolutionary anti-aging ingredients</span>
            <br>
            With the approval of Dr. David Sinclair of Harvard Medical School, Puerfons’ supplements include effective
            and cutting-edge anti-aging ingredients.
            <br> <br>


            <span class="white-subheading">Safety Certification </span>

            <br>
            Puerfons’ supplements have passed the tests of eight major nutritional components, heavy metals, and
            microbiological conducted by SGS. Manufactured in a FDA-certified factory in the United States, in
            accordance with Good Manufacturing Practice (GMP) for production and packaging. It has been inspected and
            certified by the National Sanitation Foundation (NSF), which is widely recognized as the most stringent of
            certification party in the industry.
            <br> <br>

            <span class="white-subheading">Professional R&D Team </span>

            <br>
            A group of medical and scientific experts with solid background and experience in medicine, pharmacy,
            biotechnology, and clinical preventive medicine are recruited to form a professional research & development
            team.
            <br> <br>

            <span class="white-subheading"> Effective Dosage
            </span>

            <br>
            Strictly abide by Hong Kong's various regulations on medicine, pharmacy and sanitation, the proportions of
            ingredients have been certified by animal experiments and clinical trials. The raw materials with high
            purity, absorption rate and effectiveness are selected.




        </div>

        <div class="col-6 pt-3">


            <span class="grey-subheading bold">Non-genetically Modified (Non-GMO) Raw Materials</span> <br>

            The safety of genetically modified products and their environmental impact are still controversial.
            Therefore, Puerfons insists on using non-genetically modified raw materials to better ensure the purity and
            safety of Puerfons’ products.
            <br><br>

            <span class="grey-subheading bold" n>No Additives</span> <br>
            Keep the natural and original of the ingredients, avoid unnecessary chemical effects, and let the product
            exert its maximum effect.

 



        </div>

    </div>
</div> -->


<div id="team" class="section bg-hr pue-section pue-section-4 mt-xl-5 mt-lg-5 mt-md-5 mt-sm-5 mt-4  pt-6 pb-6">

    <div class="text-center">
        <div class="pue-section-subheading text-center">
            <?php
echo get_field('section3title');
?>
        </div>
    </div>

    <div class="mt-4 container">
        <!-- The Research & Development team of Puerfons is supported by medical and scientific
        experts with
        solid
        background and experience in medicine, pharmacy, biotechnology, and clinical preventive medicine. They are
        recruited to develop top quality anti-aging products with cutting-edge science, ingredients and effective
        formulation. -->
        <?php
    
    echo get_field('section3content');

?>
    </div>




    <div class="mt-5">

        <div class="row no-gutters justify-content-center about-box scientist-box container gold-bg p-3">
            <?php

				$i=0;
				// Check value exists.
				if( have_rows('section3scientist') ):

				    // Loop through rows.
				    while ( have_rows('section3scientist') ) : the_row();

					?>
            <div class=" col-xl-2 col-lg-2 col-md-2 col-sm-4 col-4 ">
                <div class="img-box  <?php if( $i == 0 ){ echo "active"; } $i++; ?>"><img class="d-block"
                        src="<?php the_sub_field("img"); ?>" /></div>
            </div>
            <?php
				    // End loop.
				    endwhile;

				endif;

            ?>

        </div>

        <div class="scientist-content container">

            <?php

				$i=0;
				// Check value exists.
				if( have_rows('section3scientist') ):

				    // Loop through rows.
				    while ( have_rows('section3scientist') ) : the_row();

					?>
            <div class="mt-4 scientist-profile <?php if( $i == 0 ){ echo "active"; } $i++; ?>">
                <h2><?php the_sub_field("scientist_name"); ?></h2>
                <?php the_sub_field("profile"); ?>
            </div>
            <?php
				    // End loop.
				    endwhile;

				endif;

			?>
        </div>
    </div>
</div>


<div class="section bg-hr pue-section pue-section-5 mt-5" id="support">

    <div class="text-center mb-3">
        <div class="pue-section-subheading mt-5 text-center">
            <!-- Supportive Members All Over the World  -->
            <?php echo ($lang_code=='en') ?'Supportive Members All Over the World' : '遍佈全球的支持者';?>
        </div>
    </div>

    <div class="container mb-5">
        <div class="members-slider">
            <?php
        
        
        if( have_rows('section4supporter') ):

            // Loop through rows.
            while ( have_rows('section4supporter') ) : the_row();
       
            ?>
            <div class="row gold-bg no-gutters">

                <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12 members-slider-left white-bg">


                    <img class="d-block mx-auto float-xl-right float-lg-right float-md-right float-sm-none float-none"
                        src="<?php the_sub_field('img'); ?>">



                </div>
                <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12 members-slider-right">

                    <div class="d-table h-100">
                        <div class="d-table-cell align-middle pt-4 pb-4">
                            <div class="row no-gutters">

                                <div class="col-1">

                                    <div class="d-table h-100 mx-auto">
                                        <div class="d-table-cell">
                                            <div class="about-quote-open"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-10">
                                    <?php the_sub_field('msg'); ?>


                                </div>
                                <div class="col-1">

                                    <div class="d-table h-100 mx-auto">
                                        <div class="d-table-cell align-bottom">
                                            <div class="about-quote-close"></div>
                                        </div>
                                    </div>
                                </div>


                            </div>

                            <div class="row no-gutters">

                                <div class="col-1">


                                </div>
                                <div class="col-10">
                                    <div class="supporter-person"><?php the_sub_field('name'); ?></div>

                                    <div><?php the_sub_field('supporter_title'); ?></div>

                                </div>
                                <div class="col-1">

                                </div>


                            </div>
                        </div>
                    </div>


                </div>

            </div>

            <?php
        
           endwhile;
           endif;
           
        ?>

        </div>

    </div>



    <div class="container">
        <!-- <div class="flexslider ">
            <ul class="slides">
                <?php

					// Check value exists.
					if( have_rows('section4supporter') ):

					    // Loop through rows.
					    while ( have_rows('section4supporter') ) : the_row();

						?>
                <li>
                    <div class="mobile-supporter-img mb-5">
                        <img src="<?php the_sub_field('img'); ?>">
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-12 supporter-img-div mx-auto">

                            <div class="d-table h-100">

                                <div class="d-table-cell h-100 align-middle">

                                    <img src="<?php the_sub_field('img'); ?>">

                                </div>
                            </div>


                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12 mx-auto">
                            <div class="supporter-box">
                                <div class="supporter-msg">
                                    <div class="quote-open"></div>
                                    <?php the_sub_field('msg'); ?>
                                    <div class="quote-close"></div>

                                </div>
                                <div class="supporter-person"><?php the_sub_field('name'); ?></div>
                                <div class="supporter-title"><?php the_sub_field('supporter_title'); ?></div>
                            </div>
                        </div>
                    </div>
                </li>
                <?php
					    // End loop.
					    endwhile;

					endif;

				?>
            </ul>
        </div> -->


        <div class="row other-support justify-content-center no-gutters">
            <?php

				// Check value exists.
				if( have_rows('section4other') ):

				    // Loop through rows.
				    while ( have_rows('section4other') ) : the_row();

					?>
            <div class=" col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 supporters-div">
                <div class="img-box">
                    <img src="<?php the_sub_field('img'); ?>" />
                    <?php the_sub_field('name'); ?>
                </div>
            </div>
            <?php
				    // End loop.
				    endwhile;

				endif;

			?>
        </div>

    </div>



</div>





<div id="brand" class="section" style="display:none;">
    <div class="section-wrapper">
        <h3 class="section-title">
            <?php the_field("section1title"); ?>
        </h3>
        <?php the_field("section1content"); ?>
    </div>
</div>
<div id="aging" class="section bg-gradient" style="display:none">
    <div class="section-wrapper">
        <h3 class="section-title">
            <?php the_field("section2title"); ?>
        </h3>
        <?php the_field("section2content"); ?>
        <div class="row justify-content-center about-box">
            <?php
				// Check value exists.
				if( have_rows('section2icon') ):

				    // Loop through rows.
				    while ( have_rows('section2icon') ) : the_row();

					?>
            <div class=" col-xl-2 col-lg-2 col-md-2 col-sm-4 col-6 ">
                <div class="img-box"><img src="<?php the_sub_field("img"); ?>" /></div>
                <?php the_sub_field("icon_description"); ?>
            </div>
            <?php
				    // End loop.
				    endwhile;

				endif;

			?>
        </div>
    </div>
</div>
<!-- <div id="team" class="section bg-hr">
    <div class="section-wrapper">
        <h3 class="section-title">
            <?php the_field("section3title"); ?>
        </h3>
        <?php the_field("section3content"); ?>
        <div class="row justify-content-center about-box scientist-box">
            <?php

				$i=0;
				// Check value exists.
				if( have_rows('section3scientist') ):

				    // Loop through rows.
				    while ( have_rows('section3scientist') ) : the_row();

					?>
            <div class=" col-xl-2 col-lg-2 col-md-2 col-sm-4 col-4 ">
                <div class="img-box  <?php if( $i == 0 ){ echo "active"; } $i++; ?>"><img
                        src="<?php the_sub_field("img"); ?>" /></div>
            </div>
            <?php
				    // End loop.
				    endwhile;

				endif;

			?>
        </div>
        <div class="scientist-content">
            <?php

				$i=0;
				// Check value exists.
				if( have_rows('section3scientist') ):

				    // Loop through rows.
				    while ( have_rows('section3scientist') ) : the_row();

					?>
            <div class="scientist-profile <?php if( $i == 0 ){ echo "active"; } $i++; ?>">
                <h2><?php the_sub_field("scientist_name"); ?></h2>
                <?php the_sub_field("profile"); ?>
            </div>
            <?php
				    // End loop.
				    endwhile;

				endif;

			?>
        </div>
    </div>
</div> -->
<div id="support" class="section" style="display:none">
    <div class="section-wrapper">
        <h3 class="section-title">
            <?php the_field("section4title"); ?>
        </h3>
        <div class="flexslider">
            <ul class="slides">
                <?php

					// Check value exists.
					if( have_rows('section4supporter') ):

					    // Loop through rows.
					    while ( have_rows('section4supporter') ) : the_row();

						?>
                <li>
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-12">
                            <img src="<?php the_sub_field('img'); ?>">
                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-8 col-sm-8 col-12">
                            <div class="supporter-box">
                                <div class="supporter-msg">
                                    <?php the_sub_field('msg'); ?>
                                </div>
                                <div class="supporter-person"><?php the_sub_field('name'); ?></div>
                                <div class="supporter-title"><?php the_sub_field('supporter_title'); ?></div>
                            </div>
                        </div>
                    </div>
                </li>
                <?php
					    // End loop.
					    endwhile;

					endif;

				?>
            </ul>
        </div>
        <h3 class="section-title">
            <span><?php the_field("section4other_title"); ?></span>
        </h3>
        <div class="row other-support justify-content-center">
            <?php

				// Check value exists.
				if( have_rows('section4other') ):

				    // Loop through rows.
				    while ( have_rows('section4other') ) : the_row();

					?>
            <div class=" col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
                <div class="img-box">
                    <img src="<?php the_sub_field('img'); ?>" />
                    <?php the_sub_field('name'); ?>
                </div>
            </div>
            <?php
				    // End loop.
				    endwhile;

				endif;

			?>
        </div>
    </div>
</div>

<script type="text/javascript">
var $ = jQuery;
$(function() {
    $('.page-banners').slick({
        dots: true,
        arrows: false,
        pauseOnFocus: false,
        infinite: true,
        speed: 800,
        autoplaySpeed: 5000,
        autoplay: true,
        fade: true,
        cssEase: 'ease-out',
        pauseOnHover: false
    })

    $('.members-slider').slick({
        dots: true,
        arrows: false,
        pauseOnFocus: false,
        infinite: true,
        speed: 800,
        adaptiveHeight: true,
        autoplaySpeed: 5000,
        autoplay: true,
        fade: true,
        cssEase: 'ease-out',
        pauseOnHover: false
    })

});
</script>
<?php

get_footer("puerfons");