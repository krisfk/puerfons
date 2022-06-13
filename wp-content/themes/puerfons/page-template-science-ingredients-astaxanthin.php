<?php
/*
Template Name: Science And Ingredients Astaxanthin
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

<?php

$citation= get_field('citation');
// echo $citation;
$rows = get_field('content_container_sections' ); // get all the rows
echo $rows[0]['content_container'];
echo $rows[1]['content_container'];
echo $rows[2]['content_container'];




?>
<!-- <div class="container text-center">
    <div class="pue-section pue-section-1 mb-5  mt-5 ">

        <div class="pue-section-subheading mb-5">
            Nicotinamide Riboside

        </div>

        <div class="row   position-relative ">

            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">

                <div class="gold-subheading">
                    What is Nicotinamide Riboside (NR)?
                </div>


                <div class="">
                    Nicotinamide Riboside (NR) is a cellular nutrient designed to permeate the cell wall with ease and
                    nourish the cell efficiently for boosting levels of NAD+, which is linked to potential health
                    benefits
                    regarding aging, brain health, heart disease risk and more.
                    <br><br>
                    To work synergistically with NMN, they are both clinically proven effective precursor substance to
                    promote the biosynthesis and production of NAD+, meaning that they serve as the “building block” to
                    make
                    the NAD+ molecule to delay aging.
                    <br><br>
                    <div class="gold-subheading">

                        2016 – The Effectiveness of Oral Administration of NR<sup>6</sup></div>
                    A randomized, double-blind, three-arm crossover pharmacokinetic study in human subjects showed that
                    NR
                    raises NAD+ by as much as 2.7-fold in human blood with a single oral dose of 1000 mg.
                    <br><br>
                    <div class="gold-subheading">
                        2017 – Clinically Proven Effective Precursor of NAD+ Production<sup>7</sup></div>
                    Researchers at the University of Washington have completed a clinical trial with 140 participants
                    showing that orally administered NR gives a dose dependent increase in NAD+ from 250-1000 mg/day
                    plateauing at a 2-fold increase in NAD+ at day nine.

                </div>
                .





            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">

                <img src="<?php echo get_template_directory_uri(); ?>/img/nico-graph.png" alt="">

                <div class="nico-graph-txt mt-3 mb-3">
                    The blue line shows a linear regression of the change in NAD+ given the change in NR, and the shaded
                    area shows the 95% confidence interval of that regression.



                    .



                </div>

            </div>

            <div class="col-12">
                <div class="gold-subheading">

                    How does Nicotinamide Riboside (NR) work?
                </div>
                Nicotinamide Riboside (NR) is more effective to increase NAD+ levels in your body than supplementing
                with straight NAD+ itself as NR can enter the cell directly without requiring a breakdown and therefore
                less nutrients are loss in the transferal process.

            </div>


        </div>


    </div>

</div> -->

<!-- <div class="container">
    <div class="pue-section pue-section-2 mt-6 mb-5">

        <table class="w-100 nico-table">



            <tr>
                <th></th>
                <th class="">
                    <img class="" src="<?php echo get_template_directory_uri(); ?>/img/tick.png" alt="">
                    Nicotinamide Riboside (NR) Supplement

                </th>
                <th class="">Direct NAD+ Supplement

                </th>
            </tr>

            <tr>
                <td class="table-col-1">Mass
                </td>
                <td class="table-col-2">
                    A cellular nutrient designed to permeate the cell wall with ease efficiently


                </td>
                <td class="table-col-3">
                    A very large molecule that is unable to enter the cell directly



                </td>
            </tr>

            <tr>
                <td class="table-col-1">Penetration to the cells

                </td>
                <td class="table-col-2">
                    Enter the cell directly without requiring a breakdown



                </td>
                <td class="table-col-3">
                    Require break down to smaller pieces before passing through the cell membrane




                </td>
            </tr>

            <tr>
                <td class="table-col-1">Efficacy

                </td>
                <td class="table-col-2">
                    Clinically proven effective in raising NAD+ level



                </td>
                <td class="table-col-3">
                    The breakdown makes the process less efficient at increasing NAD+ in the cells




                </td>
            </tr>

            <tr>
                <td class="table-col-1">Storage in Capsule Form

                </td>
                <td class="table-col-2">
                    Ordinary storage condition


                </td>
                <td class="table-col-3">
                    Degrade quickly when exposed to normal light and heat



                </td>
            </tr>




        </table>

        <div class="gold-subheading mt-6">What are the benefits of taking Nicotinamide Riboside (NR)?</div>
        <div class="gold-subheading mt-6">2017 – Positive Effects on Vascular Functions and More8


        </div>
        <div class="mt-4">Researchers have reported positive effects of NR on vascular endothelial function in
            healthy
            middle-aged and older adults, with multiple other studies are now underway assessing the effects of NR
            on muscle mitochondrial function, cognition, immune function, kidney function, traumatic brain injury,
            brown fat activity, lipid accumulation, energy metabolism, cardiovascular risk, body composition, and
            acetylcarnitine levels to come.
        </div>


    </div>
</div> -->





<!-- <div class="container">
    <div class="pue-section pue-section-3 mt-6 mb-5">

        <div class="nic-table-head-bg">


            <div
                class=" backgound-txt-div  d-table h-100 float-xl-right float-lg-right float-md-right float-sm-none float-none text-left mr-5 w-xl-auto  w-lg-auto w-md-auto  mx-xl-0  mx-lg-0 mx-md-0 mx-sm-auto mx-sm-auto mx-auto">
                <div class="d-table-cell align-middle nic-table-head-txt">
                    <div class="yellow-color font-weight-bold yellow-subheading bold mt-4">2018-2019 – Benefits of NR on
                        Various
                        Aspects
                    </div>
                    <div class="text-white mt-3"> A paper on Cell Metabolism co-written by Prof. Shin-ichiro Imai of
                        Washington
                        University School of
                        Medicine
                        outlined some of these benefits, including modest increases in life span, as well as slowed
                        Alzheimer’s
                        progress, protection against diabetes complications, improved muscle endurance, and improved
                        heart,
                        liver
                        and kidney health.
                    </div>
                </div>

            </div>

        </div>
        <div class="gold-bg gold-bg-under-banner pt-3">

            <table>
                <tr>

                    <td></td>
                    <td>Nicotinamide Riboside (NR) supports:
                    </td>
                </tr>
                <tr>
                    <td>
                        <img class="" src="<?php echo get_template_directory_uri(); ?>/img/nic-table-icon-1.png" alt="">
                    </td>
                    <td>Increase the NAD+ level in the body
                    </td>
                </tr>
                <tr>
                    <td>
                        <img class="" src="<?php echo get_template_directory_uri(); ?>/img/nic-table-icon-2.png" alt="">
                    </td>
                    <td>Stimulate long-lived proteins SIRT1 and SIRT3 that elongate lifespan of important cells
                    </td>
                </tr>
                <tr>
                    <td>
                        <img class="" src="<?php echo get_template_directory_uri(); ?>/img/nic-table-icon-3.png" alt="">
                    </td>
                    <td>Balance out cell fermentation and apoptosis
                    </td>
                </tr>
                <tr>
                    <td>
                        <img class="" src="<?php echo get_template_directory_uri(); ?>/img/nic-table-icon-4.png" alt="">
                    </td>
                    <td>Repair damaged DNA
                    </td>
                </tr>
                <tr>
                    <td>
                        <img class="" src="<?php echo get_template_directory_uri(); ?>/img/nic-table-icon-5.png" alt="">
                    </td>
                    <td>Generate more cell energy
                    </td>
                </tr>
                <tr>
                    <td>
                        <img class="" src="<?php echo get_template_directory_uri(); ?>/img/nic-table-icon-6.png" alt="">
                    </td>
                    <td>Promote hydrogen transfer and ATP synthesis in boosting key metabolic processes
                    </td>
                </tr>
                <tr>
                    <td>
                        <img class="" src="<?php echo get_template_directory_uri(); ?>/img/nic-table-icon-7.png" alt="">
                    </td>
                    <td>Resist inflammatory stress and mitochondrial activities
                    </td>
                </tr>
            </table>

        </div>
    </div>
</div> -->


<div class="container">

    <div class="pue-section pue-section-8 mt-6 mb-5">

        <div class="gold-subheading">


            <?php echo ($lang_code=='en') ?'Where do we get Astaxanthin?' : '從哪裏可以獲得蝦青素？';?>


        </div>

        <div class="container products-container mt-4">


            <?php 
				$term = 'astaxanthin'; //get_field("health");
				$args = array(
				    'posts_per_page' => 3,
				    'tax_query' => array(
				        'relation' => 'AND',
				        array(
				            'taxonomy' => 'product_cat',
				            'field' => 'slug',
				            'terms' => $term,
				            'orderby'   => 'meta_value'
				        )
				    ),
				    'post_type' => 'product',
				    'orderby' => 'meta_value_num',
				    'order' => 'ASC'
				);
                $the_query = new WP_Query( $args );
                
                
            ?>


            <div class="text-center d-flex justify-content-center">

                <div class="product-slider position-relative">

                    <?php if ( $the_query->have_posts() ) :  while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                    <div class="product-div mb-xl-0 mb-lg-0 mb-md-3 mb-sm-3 mb-3 ">
                        <div class="product-grey-bg">

                            <?php  if(get_field('best_seller')=='yes')
            {
?>
                            <div class="best-seller">

                                <div class="d-table w-100 h-100">
                                    <div class="d-table-cell align-middle"> Best <br>
                                        Seller
                                    </div>
                                </div>

                            </div>
                            <?php
            }
          ?>



                            <div class="product-thumbnail"
                                style="background-image:url('<?php echo get_the_post_thumbnail_url(); ?>');">
                                <a href="<?php the_permalink(); ?>">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/thumbnail-scale.png">
                                </a>
                            </div>
                            <div class="product-name"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></div>
                            <?php $product = wc_get_product(); ?>

                            <?php
                $product_type = $product->get_type();

                if($product_type=='simple')
                {?>


                            <div class="price mt-4">


                                <?php 
                    if($product->sale_price)
                    {
                        ?>
                                <div class="was-price">
                                    <?php echo ($lang_code=='en') ?'was' : '原價';?>


                                    <?php echo get_woocommerce_currency_symbol(); echo $product->regular_price; ?>
                                </div>

                                <div class="now-price mt-2">
                                    <?php echo ($lang_code=='en') ?'now' : '減價';?>

                                    <?php echo get_woocommerce_currency_symbol(); echo $product->sale_price; ?>
                                </div>

                                <?php
                    }
                    else{
                        ?>
                                <div class="now-price">
                                    <?php echo ($lang_code=='en') ?'price' : '售價';?>
                                    <?php echo get_woocommerce_currency_symbol(); echo $product->regular_price; ?>
                                </div>
                                <?php
                    }
                    ?>


                            </div>

                            <?php
                }
                else if($product_type=='variable')
                {

                    $variations = $product->get_available_variations();
                    $was_price=[];
                    $now_price=[];
                    // print_r($variations);
                
                    foreach ($variations as $variation) {
                        $display_regular_price = $variation['display_regular_price'];
                        $display_price = $variation['display_price'];
                        array_push($was_price,$display_regular_price );
                        array_push($now_price,$display_price );
                            }
    
                    ?>

                            <?php
                    if($was_price[0]==$now_price[0] &&$was_price[1]==$now_price[1])
                    {
                        ?>
                            <div class="price mt-4">



                                <div class="now-price mt-2">
                                    <?php echo ($lang_code=='en') ?'price' : '售價';?>


                                    <?php 
                                echo get_woocommerce_currency_symbol().$now_price[1].'/'.$now_price[0];

                                ?>
                                </div>



                            </div>
                            <?php
                    }
                    else
                    {
                        ?>
                            <div class="price mt-4">


                                <div class="was-price">
                                    <?php echo ($lang_code=='en') ?'was' : '原價';?>


                                    <?php 
echo $was_price[0].'/'.$was_price[1];
?>
                                </div>

                                <div class="now-price mt-2">
                                    <?php echo ($lang_code=='en') ?'now' : '減價';?>


                                    <?php 
                        echo get_woocommerce_currency_symbol().$now_price[1].'/'.$now_price[0];

?>
                                </div>



                            </div>
                            <?php
                    }
                    ?>



                            <?php
                }
                ?>


                            <div class="text-center mt-4 shop-now-btn-div">
                                <a href="<?php the_permalink(); ?>"
                                    class="shop-now-btn"><?php echo ($lang_code=='en') ?'SHOP NOW' : '現在購買';?>
                                </a>
                            </div>
                        </div>
                    </div>

                    <?php
endwhile;
endif;?>

                </div>


            </div>
        </div>

    </div>
</div>


<!-- <div class="background-grey-div"> -->

<?php

echo $rows[3]['content_container'];
echo $rows[4]['content_container'];

?>


<!-- <div class="container">

        <div
            class="pue-section pue-section-5 mt-xl-6 mb-xl-5 mt-lg-6 mb-lg-5 mt-md-0 mb-md-0 mt-sm-0 mb-sm-0 mt-0 mb-0">


            <div class="pue-section-subheading mb-5 mt-5">
                Resveratrol

            </div>


            <div class="gold-card mb-4">
                <div class="row">

                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">


                        <div class="d-table h-100 ">
                            <div class="d-table-cell align-middle pl-4">
                                <div class="yellow-color font-weight-bold yellow-subheading bold mt-4"> What is
                                    Resveratrol?
                                </div>

                                <div class="mt-4">
                                    Best known for its cellular renewing and anti-aging benefits on top of its ability
                                    to
                                    protect
                                    your body from free-radical damage. Resveratrol is a plant compound, also known as
                                    polyphenols,
                                    that is naturally found in the skin of red grapes, berries and peanuts.
                                    <br><br>
                                    Resveratrol is a remarkable polyphenol that is found in red wine. Yet red wine has
                                    such
                                    low
                                    concentrations in which you need to consume a barrel (almost 120L of wine) a day in
                                    order to
                                    have beneficial effects equating to clinical studies.
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mt-xl-0 mt-lg-0 mt-md-5 mt-sm-5 mt-5">
                        <img class="d-block mx-auto "
                            src="<?php echo get_template_directory_uri(); ?>/img/nic-card-img-1.jpg">

                    </div>
                </div>
            </div>
            <div class="white-card mb-4">
                <div class="row">

                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">


                        <div class="d-table h-100 ">
                            <div class="d-table-cell align-middle pl-4">


                                <div class="gold-subheading"> How does Resveratrol work on improving your health?
                                </div class="mb-3">


                                <div class="gold-subheading"> Antioxidant</div>
                                <div class="mb-3">
                                    Protect the body against any free radical damage, reduce the risks of cardiovascular
                                    diseases
                                </div>

                                <div class="gold-subheading"> Anti-inflammatory</div>
                                <div class="mb-3"> Reduce and even prevent inflammatory disorders and oxidative stress
                                    to the body.
                                    Making
                                    Resveratrol an effective supplement to support the health of joints, heart,
                                    metabolism,
                                    liver and healthy aging.
                                </div>

                                <div class="gold-subheading"> Anti-aging</div>
                                <div class="mb-3"> Promote lifespan extending effects and alleviate metabolic diseases
                                    through its
                                    activation of Sirtuins which is well-known as the “longevity genes”.
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <img class="d-block mx-auto"
                            src="<?php echo get_template_directory_uri(); ?>/img/nic-card-img-2.jpg">

                    </div>
                </div>
            </div>




        </div>
    </div> -->

<!-- <div class="container">

        <div class="pue-section pue-section-6 mt-6 mb-5 ">

            <div class="gold-subheading">What are the benefits of taking Resveratrol capsules?
            </div>

            <div>High quality and active trans-resveratrol with superior bioavailability and absorption are used compare
                to regular cis-resveratrol used in the market. It can:
            </div>


            <ul class="benefits-list-ul mt-5">

                <li class="benefits-list-ul-li">

                    <div class="d-table w-100 h-100">
                        <div class="d-table-cell align-middle position-relative">
                            <img class="" src="<?php echo get_template_directory_uri(); ?>/img/nic-benefit-icon-1.png"
                                alt="">
                            <div class="w-100 text-center icon-str">
                                Nourish skin and more
                                beauty benefits</div>
                        </div>
                    </div>

                </li>
                <li class="benefits-list-ul-li">

                    <div class="d-table w-100 h-100">
                        <div class="d-table-cell align-middle position-relative">
                            <img class="" src="<?php echo get_template_directory_uri(); ?>/img/nic-benefit-icon-2.png"
                                alt="">
                            <div class="  w-100 text-center icon-str">
                                Activate protein SIRT1 (the longevity genes) for anti-aging function</div>
                        </div>
                    </div>


                </li>

                <li class="benefits-list-ul-li">

                    <div class="d-table w-100 h-100">
                        <div class="d-table-cell align-middle position-relative">
                            <img class="" src="<?php echo get_template_directory_uri(); ?>/img/nic-benefit-icon-3.png"
                                alt="">
                            <div class=" w-100 text-center icon-str">Improve memory degradation and cognitive decline
                            </div>
                        </div>
                    </div>


                </li>

                <li class="benefits-list-ul-li">

                    <div class="d-table w-100 h-100">
                        <div class="d-table-cell align-middle position-relative">
                            <img class="" src="<?php echo get_template_directory_uri(); ?>/img/nic-benefit-icon-4.png"
                                alt="">
                            <div class="ffffffffff w-100 text-center icon-str">
                                Prevent cancers and heart disease</div>
                        </div>
                    </div>


                </li>

                <li class="benefits-list-ul-li">

                    <div class="d-table w-100 h-100">
                        <div class="d-table-cell align-middle position-relative">
                            <img class="" src="<?php echo get_template_directory_uri(); ?>/img/nic-benefit-icon-5.png"
                                alt="">
                            <div class="ffffffffff w-100 text-center icon-str">Perform antioxidant and anti-inflammatory
                                functions </div>
                        </div>
                    </div>


                </li>

                <li class="benefits-list-ul-li">

                    <div class="d-table w-100 h-100">
                        <div class="d-table-cell align-middle position-relative">
                            <img class="" src="<?php echo get_template_directory_uri(); ?>/img/nic-benefit-icon-6.png"
                                alt="">
                            <div class="ffffffffff w-100 text-center icon-str">Boost metabolism and
                                stress resistance
                            </div>
                        </div>
                    </div>


                </li>

                <li class="benefits-list-ul-li">

                    <div class="d-table w-100 h-100">
                        <div class="d-table-cell align-middle position-relative">
                            <img class="" src="<?php echo get_template_directory_uri(); ?>/img/nic-benefit-icon-7.png"
                                alt="">
                            <div class="ffffffffff w-100 text-center icon-str">Promote cells’ survival and
                                cellular energy </div>
                        </div>
                    </div>


                </li>





            </ul>
        </div>
    </div> -->
<!-- <div class="container">



    <div class="gold-subheading">

        <?php echo ($lang_code=='en') ?'Where do we get Resveratrol?' : '從哪裡可以獲得白藜蘆醇？';?>
    </div>

    <div class="container products-container mt-4">


        <?php 
				$term = 'resveratrol'; //get_field("health");
				$args = array(
				    'posts_per_page' => 3,
				    'tax_query' => array(
				        'relation' => 'AND',
				        array(
				            'taxonomy' => 'product_cat',
				            'field' => 'slug',
				            'terms' => $term,
				            'orderby'   => 'meta_value'
				        )
				    ),
				    'post_type' => 'product',
				    'orderby' => 'meta_value_num',
				    'order' => 'ASC'
				);
                $the_query = new WP_Query( $args );
                
                
            ?>

        <div class="text-center">

            <?php if ( $the_query->have_posts() ) :  while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

            <div class="product-div mb-xl-0 mb-lg-0 mb-md-3 mb-sm-3 mb-3  grey-bg">
                <div>

                    <?php
            if(get_field('best_seller')=='yes')
            {
?>
                    <div class="best-seller">

                        <div class="d-table w-100 h-100">
                            <div class="d-table-cell align-middle"> Best <br>
                                Seller
                            </div>
                        </div>

                    </div>
                    <?php
            }
          ?>




                    <div class="product-thumbnail"
                        style="background-image:url('<?php echo get_the_post_thumbnail_url(); ?>');">
                        <a href="<?php the_permalink(); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/thumbnail-scale.png">
                        </a>
                    </div>
                    <div class="product-name"><a href="<?php the_permalink(); ?>"><?php the_title();?></a>
                    </div>
                    <?php $product = wc_get_product(); ?>
                    <div class="price mt-4">

                        <div class="was-price"> <?php echo ($lang_code=='en') ?'was' : '原價';?>

                            <?php echo get_woocommerce_currency_symbol(); echo $product->regular_price; ?>
                        </div>

                        <div class="now-price mt-2"> <?php echo ($lang_code=='en') ?'now' : '減價';?>

                            <?php echo get_woocommerce_currency_symbol(); echo $product->sale_price; ?>
                        </div>
                    </div>

                    <div class="text-center mt-4 shop-now-btn-div">
                        <a href="<?php the_permalink(); ?>" class="shop-now-btn">
                            <?php echo ($lang_code=='en') ?'SHOP NOW' : '產品詳細';?>
                        </a>
                    </div>
                </div>
            </div>

            <?php
endwhile;
endif;?>


        </div>
    </div>

</div> -->
<!-- </div> -->



<?php

echo $rows[5]['content_container'];
echo $rows[6]['content_container'];
// echo 999;

?>

<!-- <div class="container">

    <div class="pue-section pue-section-7 mt-xl-6 mb-xl-5 mt-lg-6 mb-lg-5 mt-md-0 mb-md-0 mt-sm-0 mb-sm-0 mt-0 mb-0">

        <div class="pue-section-subheading mb-5 mt-5">
            Astaxanthin


        </div>



        <div class="row container  position-relative gold-bg ">

            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 text-white pt-5 pb-5">

                <div class="yellow-color font-weight-bold yellow-subheading bold">
                    What is Astaxanthin?
                </div>

                <div class="mt-3">


                    It is a compound in high purity with natural extraction from marine algae, krill, salmon, shrimps,
                    and lobsters. It is a clinically studied ingredient that facilitates safe anti-inflammatory activity
                    that supports the health of joints, heart, metabolism, liver and healthy aging.
                    <br> <br>
                    Astaxanthin is generally Recognized as Safe (“GRAS”) as a food substance according to U.S. FDA
                    regulations and has undergone extensive toxicity testing by third parties and us with no clinically
                    meaningful issues even at extremely high doses.



                </div>





            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">


                <img class="mt-5 ml-5 mt-4 mx-auto   position-absolute d-xl-inline-block d-lg-inline-block d-md-none d-sm-none d-none"
                    src="<?php echo get_template_directory_uri(); ?>/img/nic-ax-img.jpg" alt="">


            </div>


        </div>

        <img class="d-xl-none d-lg-none d-md-block d-sm-block d-block w-xl-80  w-lg-80  w-md-80  w-sm-80 w-80 mx-auto mt-5 mb-xl-0 mb-lg-0 mb-md-3 mb-sm-3 mb-3"
            src="<?php echo get_template_directory_uri(); ?>/img/nic-ax-img.jpg" alt="">



    </div>
    <div class="mt-xl-5 pt-xl-5  mt-lg-5 pt-lg-5  mt-md-0 pt-md-0 mt-sm-0 pt-sm-0 mt-0 pt-0"></div>

    <div class="gold-subheading mt-xl-5 pt-xl-5  mt-lg-5 pt-lg-5  mt-md-0 pt-md-0 mt-sm-0 pt-sm-0 mt-0 pt-0 ">How
        is
        Astaxanthin good for your health?</div>
    <div>Comparison of the Antioxidant Effects of Astaxanthin<sup>9</sup>
    </div>

    <table class="food-table">
        <tr>
            <td class="food-table-td-1">
                <div class="num">800
                </div>
                <div class="txt">times more than
                    Coenzyme Q10</div>
            </td>
            <td class="food-table-td-2">
                <div class="num">550

                </div>
                <div class="txt">times more than
                    Tea Polyphenols
                </div>
            </td>
            <td class="food-table-td-3">
                <div class="num">500
                </div>
                <div class="txt">
                    times more than
                    Vitamin E
                </div>
            </td>
        </tr>
        <tr>
            <td class="food-table-td-4">
                <div class="num">100

                </div>
                <div class="txt">times more than
                    Lycopene

                </div>
            </td>
            <td class="food-table-td-5">
                <div class="num">65


                </div>
                <div class="txt">times more than
                    Vitamin C

                </div>
            </td>
            <td class="food-table-td-6">
                <div class="num">54

                </div>
                <div class="txt">
                    times more than
                    β-carotene


                </div>
            </td>
        </tr>
    </table>



</div> -->




<!-- <div class="container">


    <div class="pue-section pue-section-8 mt-6 mb-3 ">

        <div class="gold-subheading">6 Benefits of Puerfons Astaxanthin
        </div>
    </div>

    <div class="pue-section pue-section-3 mt-3 mb-5">

        <div class="nic-table-head-bg-2">


            <div
                class="backgound-txt-div d-table h-100 float-xl-right float-lg-right float-md-right float-sm-none float-none text-left mr-5   mx-xl-0  mx-lg-0 mx-md-0 mx-sm-auto mx-sm-auto mx-auto">
                <div class="d-table-cell align-middle nic-table-head-txt">
                    Over 50 clinical and experimental studies and more than 1500 scientific articles supports the
                    benefits of this new generation of natural yet most powerful antioxidant:


                </div>

            </div>

        </div>
        <div class="gold-bg gold-bg-under-banner gold-bg-under-banner-2 pt-5 pb-5">

            <table>
                <tbody>

                    <tr>
                        <td>
                            <img class="" src="<?php echo get_template_directory_uri(); ?>/img/nic-table2-icon-1.png"
                                alt="">
                        </td>
                        <td>
                            <div class="yellow-color font-weight-bold yellow-subheading bold">
                                Support cardiovascular health

                            </div>
                            <ul>
                                <li>Reduce triglycerides (mainly constituted of natural fats and oils)</li>
                                <li>Normalize lipid profiles while boosting beneficial, good HDL-cholesterol10,11 to
                                    lower the risk of heart disease</li>
                                <li>Improves the stability of blood vessel structure by decreasing macrophage
                                    infiltration and apoptosis12.</li>
                                <li>Boosts mitochondrial energy delivery, which helps the heart muscle contract more
                                    efficiently to enhance capillary blood flow13.</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img class="" src="<?php echo get_template_directory_uri(); ?>/img/nic-table2-icon-2.png"
                                alt="">
                        </td>
                        <td>
                            <div class="yellow-color font-weight-bold yellow-subheading bold">

                                Relieve joint discomfort</div>
                            <ul>
                                <li>Prevent inflammation-induced illness or pain</li>
                                <li>Inhibit chronic inflammation</li>
                                <li>Reduce rheumatoid arthritis pain</li>
                                <li>Improve connective tissues</li>
                                <li>Enhance muscle endurance and resilience</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img class="" src="<?php echo get_template_directory_uri(); ?>/img/nic-table2-icon-3.png"
                                alt="">
                        </td>
                        <td>

                            <div class="yellow-color font-weight-bold yellow-subheading bold">

                                Slow Brain Aging
                            </div>
                            <ul>

                                <li>Protect brain tissue</li>
                                <li>Improve cognitive test battery (assess key cognitive abilities including attention,
                                    concentration, verbal learning and memory, verbal fluency, working memory and
                                    executive function) and Groton Maze Learning Test (GMLT) score in healthy
                                    middle-aged and elderly subjects with age-related forgetfulness14,15.
                                </li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img class="" src="<?php echo get_template_directory_uri(); ?>/img/nic-table2-icon-4.png"
                                alt="">
                        </td>
                        <td>

                            <div class="yellow-color font-weight-bold yellow-subheading bold">

                                Strengthen the immune system
                            </div>
                            <ul>

                                <li> Protect innate immune system by increasing the numbers and activity of white blood
                                    cells
                                    and natural killer cells against invaders16,17,18</li>
                                <li>Prevent diseases caused by inflammation (overactive immune responses)19</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img class="" src="<?php echo get_template_directory_uri(); ?>/img/nic-table2-icon-5.png"
                                alt="">
                        </td>
                        <td>
                            <div class="yellow-color font-weight-bold yellow-subheading bold">

                                Relieve eye fatigue & sour
                            </div>
                            <ul>

                                <li>Alleviate the tension of eyes’ ciliary muscles</li>
                                <li>Protects retinal cells against damages caused by oxidative stress20,21</li>
                                <li>Reduces the area of destructive new blood vessel growth on retinas22,23</li>
                            </ul>

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img class="" src="<?php echo get_template_directory_uri(); ?>/img/nic-table2-icon-6.png"
                                alt="">
                        </td>
                        <td>
                            <div class="yellow-color font-weight-bold yellow-subheading bold">

                                Radiance skin from within
                            </div>
                            <ul>


                                <li>Protect your skin from oxidation damage for a brighter complexion24,25,26</li>
                                <li>Inhibit free radical that trigger skin sagging and wrinkles to increase skin
                                    elasticity27,28,29,30</li>
                            </ul>
                        </td>
                    </tr>

                </tbody>
            </table>

        </div>
    </div>
</div> -->

<!-- 

<div class="section">
    <div class="section-wrapper">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                <div class="ingredients-pic">
                    <img src="<?php the_field("image_on_left"); ?>" />
                </div>
            </div>
            <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">
                <h3 class="section-title">
                    <?php the_field("ingredient_title"); ?>
                    <?php if(get_field("ingredient_sub_title")){ ?><span>-
                        <?php the_field("ingredient_sub_title"); ?></span><?php } ?>
                </h3>
                <?php the_field("main_content"); ?>
            </div>
        </div>
    </div>
</div>
<?php if( get_field("section_2_title") || get_field("section_2_content")) {?>
<div class="section bg-gradient">
    <div class="section-wrapper">
        <div class="row">
            <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">
                <h3 class="section-title">
                    <span><?php the_field("section_2_title"); ?></span>
                </h3>
                <div class="row it-can">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <?php the_field("section_2_content"); ?>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                <div class="ingredients-pic2">
                    <img src="<?php the_field("image_on_right"); ?>" />
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>
<?php if( get_field("more_content") ){ ?>
<div class="section">
    <div class="section-wrapper">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <?php the_field("more_content")?>
            </div>
        </div>
    </div>
</div>
<?php } ?>
<div class="section">
    <div class="section-wrapper">
        <h3 class="related-title">
            <?php if( get_locale() == "zh_TW"){ echo "相關產品"; } else { echo "RELATED PRODUCTS"; }; ?>
        </h3>
        <div class="row product-list row-eq-height">
            <?php 
				$term = get_field("product_category_slug");
				$args = array(
				    'posts_per_page' => 4,
				    'tax_query' => array(
				        'relation' => 'AND',
				        array(
				            'taxonomy' => 'product_cat',
				            'field' => 'id',
				            'terms' => $term,
				            'orderby'   => 'meta_value'
				        )
				    ),
				    'post_type' => 'product',
				    'orderby' => 'meta_value_num',
				    'order' => 'ASC'
				    
				);
				$the_query = new WP_Query( $args );
			?>
            <?php if ( $the_query->have_posts() ) :  while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
                <div class="product-thumbnail"
                    style="background-image:url('<?php echo get_the_post_thumbnail_url(); ?>');">
                    <a href="<?php the_permalink(); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/thumbnail-scale.png">
                    </a>
                </div>
                <div class="product-name"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></div>
                <?php $product = wc_get_product(); ?>
                <div class="price"><span
                        class="ori-price"><?php echo get_woocommerce_currency_symbol(); echo $product->regular_price; ?></span><span><?php echo get_woocommerce_currency_symbol(); echo $product->sale_price; ?></span>
                </div>
            </div>
            <?php endwhile; endif; ?>
        </div>
    </div>
</div> -->

<?php

if($citation)
{
    ?>
<div class="grey-bg pt-5 pb-5">
    <div class="container">

        <a href="javascript:void(0);" class="d-inline-block citation-a gold-subheading mb-3">
            <?php  echo ($lang_code=='en') ?'Citation' : '引文';?>

        </a>
        <div class="citation-content">
            <?php echo $citation;?>
        </div>


    </div>
</div>
<?php
}
?>



<script type="text/javascript">
var $ = jQuery;
$(function() {

    $('.milestone-header').click(function() {
        $('.milestone-header').removeClass('active');
        $(this).toggleClass('active');
        var idx = $(this).closest('tr').index();
        $('.milestone-content').fadeOut(0);
        $('.milestone-content').eq(idx).slideDown(200);
    })

    $('.citation-content').fadeOut(0);

    $('.citation-a').click(function() {
        $(this).toggleClass('active');
        if ($(this).hasClass('active')) {
            // $(this).closest('.product-info').find('.product-info-content').slideDown(200);
            $('.citation-content').slideDown(200);
        } else {
            $('.citation-content').fadeOut(0);

            // $(this).closest('.product-info').find('.product-info-content').fadeOut(0);

        }
    })



})
</script>
<?php

get_footer("puerfons");