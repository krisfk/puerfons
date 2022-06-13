<?php
/*
Template Name: Science And Ingredients NAD
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


$rows = get_field('content_container_sections' ); // get all the rows
// $specific_row = $rows[0]; // 0 will get the first row, remember that the count starts at 0
// $sub_field_value = $specific_row['SUB_FIELD_NAME']; // get the sub field value
echo $rows[0]['content_container'];
echo $rows[1]['content_container'];
echo $rows[2]['content_container'];
echo $rows[3]['content_container'];

?>

<!-- <div class="container text-center">
    <div class="pue-section pue-section-1 mt-5 mb-5">

        <div class="pue-section-subheading mb-5">
            NAD+ - The Key to Stay Young <br>
            Cutting Edged Science of Healthy Aging

        </div>

        <div class="row container  position-relative gold-bg ">

            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 text-white pt-5 pb-5">

                <div class="yellow-color font-weight-bold yellow-subheading bold">
                    What is Nicotinamide Adenine Dinucleotide (NAD+)?
                </div>

                <div class="mt-3">

                    NDA+ (Nicotinamide Adenine Dinucleotide) is not only a necessary molecule for human beings to
                    sustain
                    lives
                    but also the most important substance to maintain the youthfulness of human body. It exists in all
                    living
                    cells to regulate the rate of active cells.

                </div>

                <div class="yellow-color font-weight-bold yellow-subheading bold mt-4">
                    Why do you need to supplement NAD+?
                </div>

                <div class="mt-3">
                    Research also shows the level of NAD + in the human body declines continuously with age. The level
                    of
                    NAD +
                    of adults and the elderly is only 20% of the babies. Therefore, the older we get, the more NAD +
                    needs
                    to be
                    supplemented.
                </div>



            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">


                <img class="mt-5 ml-5 mt-4 position-absolute d-xl-inline-block d-lg-inline-block d-md-none d-sm-none d-none"
                    src="<?php echo get_template_directory_uri(); ?>/img/level-of-nad-2.jpg" alt="">


            </div>


        </div>

        <img class="d-xl-none d-lg-none d-md-inline-block d-sm-inline-block w-80 mx-auto mt-5"
            src="<?php echo get_template_directory_uri(); ?>/img/level-of-nad-2.jpg" alt="">



    </div>

</div> -->

<!-- <div class="container">
    <div class="pue-section pue-section-2 mt-6 mb-5">

        <ul class="nad-icon-list-ul">

            <li class="nad-icon-list-ul-li">

                <div class="d-table w-100 h-100">
                    <div class="d-table-cell align-middle position-relative">
                        <img class="" src="<?php echo get_template_directory_uri(); ?>/img/nad-icon-1.png" alt="">
                        <div class=" position-absolute bottom left w-100 text-center icon-str">Aging </div>
                    </div>
                </div>

            </li>
            <li class="nad-icon-list-ul-li">

                <div class="d-table w-100 h-100">
                    <div class="d-table-cell align-middle position-relative">
                        <img class="" src="<?php echo get_template_directory_uri(); ?>/img/nad-icon-2.png" alt="">
                        <div class=" position-absolute bottom left w-100 text-center icon-str">Immune Stress </div>
                    </div>
                </div>


            </li>
            <li class="nad-icon-list-ul-li">


                <div class="d-table w-100 h-100">
                    <div class="d-table-cell align-middle position-relative">
                        <img class="" src="<?php echo get_template_directory_uri(); ?>/img/nad-icon-3.png" alt="">
                        <div class=" position-absolute bottom left w-100 text-center icon-str">Intense Exercise </div>
                    </div>
                </div>
            </li>
            <li class="nad-icon-list-ul-li">

                <div class="d-table w-100 h-100">
                    <div class="d-table-cell align-middle position-relative">

                        <img class="" src="<?php echo get_template_directory_uri(); ?>/img/nad-icon-4.png" alt="">
                        <div class=" position-absolute bottom left w-100 text-center icon-str">Sleep Disruption </div>
                    </div>
                </div>
            </li>
            <li class="nad-icon-list-ul-li">

                <div class="d-table w-100 h-100">
                    <div class="d-table-cell align-middle position-relative">

                        <img class="" src="<?php echo get_template_directory_uri(); ?>/img/nad-icon-5.png" alt="">
                        <div class=" position-absolute bottom left w-100 text-center icon-str">Overeating </div>
                    </div>
                </div>
            </li>
            <li class="nad-icon-list-ul-li">


                <div class="d-table w-100 h-100">
                    <div class="d-table-cell align-middle position-relative">
                        <img class="" src="<?php echo get_template_directory_uri(); ?>/img/nad-icon-6.png" alt="">
                        <div class=" position-absolute bottom left w-100 text-center icon-str">Lifestyle Stressor
                        </div>
                    </div>
                </div>
            </li>



        </ul>

        <div class="mt-4 text-center">
            <img class="" src="<?php echo get_template_directory_uri(); ?>/img/double-arrow-down-gold.png" alt="">
            <div class="mt-4 double-arrow-under-text">NAD+ Declines and Causes Senile Diseases
            </div>
        </div>
    </div>
</div> -->




<!-- <div class="container">
    <div class="pue-section pue-section-3 mt-5 mb-6 text-center">



        <div class="row container  position-relative gold-bg-2 ">

            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12  text-white pt-5 pb-5">

                <div class="yellow-color font-weight-bold yellow-subheading bold">

                    How to supplement NAD+?
                </div>
                <div class="mt-3">

                    Dr. David Sinclair, a tenured professor of Department of Genetics at Harvard Medical School, and his
                    colleagues published their latest findings on NDA+ in the Science Magazine. NMN and NR are both
                    proven effective precursor of NAD+, meaning that they serve as a “building block” to make the NAD+
                    molecule in human cells.

                </div>





                <img class="position-absolute mt-5  d-xl-inline-block d-lg-inline-block d-md-none d-sm-none d-none"
                    src="<?php echo get_template_directory_uri(); ?>/img/nad-chem-img.jpg" alt="">



            </div>
            <div class="col-6">


                <img class="mt-6 ml-5 mt-4 position-absolute  d-xl-inline-block d-lg-inline-block d-md-none d-sm-none d-none"
                    src="<?php echo get_template_directory_uri(); ?>/img/most-in-people.jpg" alt="">


            </div>


        </div>
        <img class="d-xl-none d-lg-none d-md-inline-block d-sm-inline-block w-80 mx-auto mt-5"
            src="https://staging.puerfons.com/wp-content/themes/puerfons/img/nad-chem-img.jpg" alt="">

        <img class="d-xl-none d-lg-none d-md-inline-block d-sm-inline-block w-80 mx-auto mt-5"
            src="https://staging.puerfons.com/wp-content/themes/puerfons/img/most-in-people.jpg" alt="">




    </div>

</div> -->


<!-- <div class="container">

    <div class="pue-section pue-section-4 mt-6 mb-5 d-inline-block">

        <div class="gold-subheading">
            To help the process of cell activating and healthy aging, NAD+ can:

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

        <div class="gold-subheading">
            Puerfons – your age defying solution

        </div>

        <div class="mt-4">Puerfons’ capsules ensure supplementing the lost nutrition and vitality of individuals by
            enhancing the
            level of NAD + in human body. NMN and NR are both proven effective precursor of NAD+, and resveratrol plays
            the important role of multiplying the impacts synergistically.
        </div>


    </div>

</div> -->


<div class="container products-container mt-3">


    <?php 
				$term = 'health'; //get_field("health");
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

    <div class="text-center d-flex justify-content-center flex-wrap">

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



<!-- <div class="mt-xl-5 pt-xl-5  mt-lg-5 pt-lg-5  mt-md-0 pt-md-0 mt-sm-0 pt-sm-0 mt-0 pt-0"></div> -->





<!-- <div class="background-grey-div"> -->
<?php
echo $rows[4]['content_container'];
echo $rows[5]['content_container'];
?>
<!-- <div class="container">

<div class="pue-section pue-section-6 mt-6 mb-5">


    <div class="gold-subheading">
        The team was led by:
    </div>


    <div class="row mt-4 teammate-div">

        <a class="col teammate-a" href="javascript:void(0);"><img
                src="http://staging.puerfons.com/wp-content/uploads/sites/9/2020/11/teamleader-1.jpg"
                alt=""></a>
        <a class="col teammate-a" href="javascript:void(0);"><img
                src="http://staging.puerfons.com/wp-content/uploads/sites/9/2020/11/teamleader-2.jpg"
                alt=""></a>
        <a class="col teammate-a" href="javascript:void(0);"><img
                src="http://staging.puerfons.com/wp-content/uploads/sites/9/2020/11/teamleader-3.jpg"
                alt=""></a>
        <a class="col teammate-a" href="javascript:void(0);"><img
                src="http://staging.puerfons.com/wp-content/uploads/sites/9/2020/11/teamleader-4.jpg"
                alt=""></a>
        <a class="col teammate-a" href="javascript:void(0);"><img
                src="http://staging.puerfons.com/wp-content/uploads/sites/9/2020/11/teamleader-5.jpg"
                alt=""></a>

        <div class="mt-3 col-12 teamleader-title">Prof. Hiroshi Itoh of the Department of Internal Medicine
            (Endocrinology,
            Metabolism, and
            Nephrology,)
        </div>

        <div class="mt-3 col-12 teamleader-title">Prof. Kazuo Tsubota of the Department of Ophthalmology

        </div>

        <div class="mt-3 col-12 teamleader-title">Prof. Masato Yasui of the Department of Pharmacology

        </div>

        <div class="mt-3 col-12 teamleader-title">Prof. Hideyuki Okano of the Department of Physiology

        </div>
        <div class="mt-3 col-12 teamleader-title">The study was conducted in collaboration with Prof.
            Shin-ichiro Imai of
            Washington University School of Medicine in St. Louis.

        </div>


    </div> -->



<!-- </div> -->
<!-- </div> -->
<?php
echo $rows[6]['content_container'];
?>
<!-- <div class="container">

        <div
            class="pue-section pue-section-5 mt-xl-6 mb-xl-5 mt-lg-6 mb-lg-5 mt-md-0 mb-md-0 mt-sm-0 mb-sm-0 mt-0 mb-0 ">


            <div class="pue-section-subheading mb-5 mt-5">
                Nicotinamide Mononucleotide (NMN)


            </div>

            <div class="gold-subheading">
                What is NMN? The age-defying solution of the century?
            </div>

            <div class="row mt-5">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">Nicotinamide Mononucleotide (NMN) is the
                    latest groundbreaking life science discovery
                    and proven a precursor of NAD+ , meaning that it serves as a “building block” to make the NAD+
                    molecule for preventing genetic changes in aging process.
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mt-xl-0 mt-lg-0 mt-md-3 mt-sm-3 mt-3 ">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/nad-water-img.jpg" alt="">

                </div>

            </div>



        </div>

        <table>
            <tr>
                <td class="dot-td">
                    <div class="dot-line"></div>
                    <div class="gold-dot"></div>
                </td>
                <td class="milestone-info-td">
                    <ul class="mt-3">
                        <li>
                            <a class="milestone-header" href="javascript:void(0);">2013 – The Discovery of Significant
                                Anti-aging Results
                                of NMN<sup>1</sup>
                                by Harvard University</a>
                            <ul class="mt-3 milestone-content">
                                <li>

                                    <div class="row">

                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">

                                            <div>
                                                Dr. David Sinclair, A tenured Professor in the Department of
                                                Genetics and co-Director of the Paul F. Glenn Center for the Biology of
                                                Aging at Harvard Medical School. He made a breakthrough in anti-aging
                                                research.
                                            </div>

                                            <ul class="dot-ul mt-3">
                                                <li>Time: One Week</li>
                                                <li>Administering NMN in normal drinking water to older mice</li>
                                                <li>NAD+ levels were restored to levels seen in younger control mice
                                                </li>
                                                <li>Restored muscle mitochondrial function to levels seen in younger
                                                    control
                                                    mice</li>
                                                <li>Strong correction in age-associated metabolic dysfunction</li>

                                            </ul>



                                        </div>
                                        <div
                                            class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12  mt-xl-0 mt-lg-0 mt-md-3 mt-sm-3 mt-3 ">

                                            <img src="<?php echo get_template_directory_uri(); ?>/img/milestone-img-1.jpg"
                                                alt="">

                                            <table class="before-taking-table">
                                                <tr>
                                                    <td colspan="2" class="heading">Before Taking NMN</td>
                                                </tr>
                                                <tr>
                                                    <td class="pr-2">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/img/milestone-img-2.jpg"
                                                            alt="">
                                                    </td>
                                                    <td class="pl-2"> <img
                                                            src="<?php echo get_template_directory_uri(); ?>/img/milestone-img-3.jpg"
                                                            alt=""></td>
                                                </tr>
                                            </table>

                                        </div>
                                    </div>

                                </li>
                            </ul>
                        </li>
                    </ul>

                </td>
            </tr>
            <tr>
                <td class="dot-td">

                    <div class="gold-dot"></div>
                    <div class="dot-line"></div>

                </td>
                <td class="milestone-info-td">
                    <ul class="mt-3">
                        <li>
                            <a class="milestone-header" href="javascript:void(0);">2016 – Oral Administration of NMN on
                                Improving
                                Age-associated Dysfunctions<sup>2</sup>
                            </a>
                            <ul class="mt-3  milestone-content">
                                <li>

                                    <div class="row">

                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">

                                            <div class="gold-subheading">

                                                How does NMN work for age defense?
                                            </div>

                                            <div class="mt-3">
                                                Shinichiro Imai, a Japanese professor at the University of Washington in
                                                the United States, has made the major discovery, marking a historic
                                                breakthrough in the development of global anti-aging research:
                                                <br> <br>
                                                The oral administration of a small molecular weight of NMN increases the
                                                amount of nicotinamide adenine dinucleotide (NAD+) in various organs and
                                                restore ATP (energy molecules synthesized by mitochondrial cells). It
                                                appears in the bloodstream in less than three minutes and is quickly
                                                converted to NAD in multiple tissues. It rewrites the aging process by
                                                improving age-associated functional decline and disease conditions in
                                                animals.
                                                <br> <br>
                                                The researchers found a variety of beneficial effects of NMN
                                                supplementation, including in skeletal muscle, liver function, bone
                                                density, eye function, insulin sensitivity, immune function, body weight
                                                and physical activity levels.



                                            </div>





                                        </div>
                                        <div
                                            class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12  mt-xl-0 mt-lg-0 mt-md-3 mt-sm-3 mt-3 ">

                                            <div class="milestone-img-graph-title mb-3">NAD+ level increases after
                                                taking NMN
                                                for 30 minutes</div>
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/milestone-img-graph.jpg"
                                                alt="">

                                            <table>
                                                <tr>
                                                    <td class="w-50 pr-2"><img
                                                            src="<?php echo get_template_directory_uri(); ?>/img/milestone-img-4.jpg"
                                                            alt=""></td>
                                                    <td class="w-50 pl-2"><img
                                                            src="<?php echo get_template_directory_uri(); ?>/img/milestone-img-5.jpg"
                                                            alt=""></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <ul class="dot-ul">
                                                            <li>Lean</li>
                                                            <li>Energetic</li>
                                                            <li>Increase Insulin sensitivity &
                                                                Lipid metabolism</li>
                                                            <li>Decrease chances of diabetes</li>
                                                            <li>Better eye function</li>
                                                            <li>Higher bone density</li>
                                                            <li>Better immunity</li>

                                                        </ul>


                                                    </td>
                                                    <td>
                                                        <ul class="dot-ul">
                                                            <li>Weight gain</li>
                                                            <li>Decrease energy metabolism</li>
                                                            <li>Increase chances of diabetes</li>

                                                        </ul>
                                                    </td>
                                                </tr>
                                            </table>



                                        </div>
                                    </div>

                                </li>
                            </ul>
                        </li>
                    </ul>

                </td>
            </tr>
            <tr>
                <td class="dot-td">

                    <div class="gold-dot"></div>
                    <div class="dot-line"></div>

                </td>
                <td class="milestone-info-td">
                    <ul class="mt-3">
                        <li>
                            <a class="milestone-header" href="javascript:void(0);">2017 – Oral Administration of NMN on
                                DNA Repair<sup>3</sup></a>
                            <ul class="mt-3  milestone-content">
                                <li>

                                    <div class="row">

                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">

                                            <div>

                                                Team of Dr. David Sinclair administered NMN to the 2-year-old mice
                                                (roughly equivalent to a 70-year-old human) and their following
                                                functions have returned to the level as those of 4-month-old mice (like
                                                a 25-year-old adult):

                                            </div>

                                            <ul class="dot-ul mt-3">

                                                <li>DNA Repair Capacities</li>
                                                <li>Sample Tissues</li>
                                                <li>Muscle Endurance</li>
                                                <li>Extend Life span by 20%</li>
                                            </ul>



                                        </div>
                                        <div
                                            class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12  mt-xl-0 mt-lg-0 mt-md-3 mt-sm-3 mt-3 ">

                                            <img src="<?php echo get_template_directory_uri(); ?>/img/milestone-img-6.jpg"
                                                alt="">



                                        </div>
                                    </div>

                                </li>
                            </ul>
                        </li>
                    </ul>

                </td>
            </tr>


            <tr>
                <td class="dot-td">

                    <div class="gold-dot"></div>
                    <div class="dot-line"></div>

                </td>
                <td class="milestone-info-td">
                    <ul class="mt-3">
                        <li>
                            <a class="milestone-header" href="javascript:void(0);">
                                How safe is NMN?<br>2017 – Recognized by NASA on Protecting Astronauts from Serious
                                Aging


                            </a>
                            <ul class="mt-3  milestone-content">
                                <li>

                                    <div class="row">

                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">

                                            <div>


                                                With the benefit of NMN in DNA repair effect, The National Aeronautics
                                                and Space Administration (NASA) has begun the research of taking NMN to
                                                protect astronauts from cosmic rays in the outer space.
                                                <br><br>

                                                NMN is expected to become the resolution of aging challenges for
                                                astronauts caused by the space missions. Previous studies have shown
                                                that after a four-year round trip to Mars, the DNA damage to astronauts
                                                caused by high-energy particle radiation in space would increase the
                                                death rate of body cells by 5% and cell mutation by almost 100% which
                                                lead to significant aging.



                                            </div>



                                        </div>
                                        <div
                                            class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12  mt-xl-0 mt-lg-0 mt-md-3 mt-sm-3 mt-3">

                                            <img src="<?php echo get_template_directory_uri(); ?>/img/milestone-img-7.jpg"
                                                alt="">



                                        </div>
                                    </div>

                                </li>
                            </ul>
                        </li>
                    </ul>

                </td>
            </tr>

            <tr>
                <td class="dot-td">

                    <div class="gold-dot"></div>
                    <div class="dot-line"></div>

                </td>
                <td class="milestone-info-td">
                    <ul class="mt-3">
                        <li>
                            <a class="milestone-header" href="javascript:void(0);">
                                2016-2018 – Awarded by NASA Twice


                            </a>
                            <ul class="mt-3 milestone-content">
                                <li>

                                    <div class="row">

                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12  ">

                                            <div>


                                                Due to the role of NMN in protecting against DNA damage caused by space
                                                ionizing radiation and restoring the loss of skeletal muscle under
                                                weightlessness, a panel of judges from NASA recognize NMN as one of the
                                                top three innovations for of NASA iTech in 2016 and 2018.





                                            </div>



                                        </div>
                                        <div
                                            class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mt-xl-0 mt-lg-0 mt-md-3 mt-sm-3 mt-3">

                                            <img src="<?php echo get_template_directory_uri(); ?>/img/milestone-img-8.jpg"
                                                alt="">



                                        </div>
                                    </div>

                                </li>
                            </ul>
                        </li>
                    </ul>

                </td>
            </tr>


            <tr>
                <td class="dot-td">

                    <div class="gold-dot"></div>
                    <div class="dot-line"></div>

                </td>
                <td class="milestone-info-td">
                    <ul class="mt-3">
                        <li>
                            <a class="milestone-header" href="javascript:void(0);">
                                2018 – "Times" Health Person of the Year 2018

                            </a>
                            <ul class="mt-3 milestone-content">
                                <li>

                                    <div class="row">

                                        <div class="col-12">

                                            <div>

                                                David himself was awarded the Australian Medal and 50 people of "Times"
                                                Health Person of the Year 2018 for his contribution in the field of
                                                anti-aging





                                            </div>



                                        </div>

                                    </div>

                                </li>
                            </ul>
                        </li>
                    </ul>

                </td>
            </tr>

            <tr>
                <td class="dot-td">

                    <div class="gold-dot"></div>

                </td>
                <td class="milestone-info-td">
                    <ul class="mt-3">
                        <li>
                            <a class="milestone-header" href="javascript:void(0);">
                                2019 – NMN Is Clinically Proven Safe for Human Use<sup>4</sup>
                            </a>
                            <ul class="mt-3 milestone-content">
                                <li>

                                    <div class="row">

                                        <div class="col-12">

                                            <div>

                                                Since 2016, The Keio University research team has conducted a clinical
                                                trial study to investigate the safety of single administration of NMN in
                                                healthy men. It has confirmed NMN can be safely administered that it is
                                                effectively metabolized in the body. The results of this research were
                                                published in Endocrine Journal on November 2, 2019.




                                            </div>



                                        </div>

                                    </div>

                                </li>
                            </ul>
                        </li>
                    </ul>

                </td>
            </tr>

        </table>

    </div> -->




<!-- <div class="container">

        <div class="pue-section pue-section-6 mt-6 mb-5">


            <div class="gold-subheading">
                The team was led by:
            </div>

           
            <div class="row mt-4 teammate-div">

                <a class="col teammate-a" href="javascript:void(0);"><img
                        src="<?php echo get_template_directory_uri(); ?>/img/teamate.jpg" alt=""></a>
                <a class="col teammate-a" href="javascript:void(0);"><img
                        src="<?php echo get_template_directory_uri(); ?>/img/teamate.jpg" alt=""></a>
                <a class="col teammate-a" href="javascript:void(0);"><img
                        src="<?php echo get_template_directory_uri(); ?>/img/teamate.jpg" alt=""></a>
                <a class="col teammate-a" href="javascript:void(0);"><img
                        src="<?php echo get_template_directory_uri(); ?>/img/teamate.jpg" alt=""></a>
                <a class="col teammate-a" href="javascript:void(0);"><img
                        src="<?php echo get_template_directory_uri(); ?>/img/teamate.jpg" alt=""></a>

                <div class="mt-3 col-12">Prof. Hiroshi Itoh of the Department of Internal Medicine (Endocrinology,
                    Metabolism, and
                    Nephrology,)
                </div>
            </div>



        </div>
    </div> -->

<!-- <div class="container">

        <div class="pue-section pue-section-7 mt-6 mb-5">

            <div class="gold-subheading">
                What are the benefits of taking NMN from Puerfons’ supplement?
            </div>


            <ul class="benefits-list-ul mt-5">

                <li class="benefits-list-ul-li">

                    <div class="d-table w-100 h-100">
                        <div class="d-table-cell align-middle position-relative">
                            <img class="" src="<?php echo get_template_directory_uri(); ?>/img/benefit-icon-1.png"
                                alt="">
                            <div class="w-100 text-center icon-str">Activate a variety of
                                longevity proteins Sirtuins to restore mitochondria to a younger level that effectively
                                confront and delay aging process </div>
                        </div>
                    </div>

                </li>
                <li class="benefits-list-ul-li">

                    <div class="d-table w-100 h-100">
                        <div class="d-table-cell align-middle position-relative">
                            <img class="" src="<?php echo get_template_directory_uri(); ?>/img/benefit-icon-2.png"
                                alt="">
                            <div class="  w-100 text-center icon-str">Promote DNA autonomic
                                reparation </div>
                        </div>
                    </div>


                </li>

                <li class="benefits-list-ul-li">

                    <div class="d-table w-100 h-100">
                        <div class="d-table-cell align-middle position-relative">
                            <img class="" src="<?php echo get_template_directory_uri(); ?>/img/benefit-icon-3.png"
                                alt="">
                            <div class=" w-100 text-center icon-str">Protect the heart and
                                improve cardiovascular functions5 </div>
                        </div>
                    </div>


                </li>

                <li class="benefits-list-ul-li">

                    <div class="d-table w-100 h-100">
                        <div class="d-table-cell align-middle position-relative">
                            <img class="" src="<?php echo get_template_directory_uri(); ?>/img/benefit-icon-4.png"
                                alt="">
                            <div class="ffffffffff w-100 text-center icon-str">Fasten break down of body
                                fat and increase exercise endurance </div>
                        </div>
                    </div>


                </li>

                <li class="benefits-list-ul-li">

                    <div class="d-table w-100 h-100">
                        <div class="d-table-cell align-middle position-relative">
                            <img class="" src="<?php echo get_template_directory_uri(); ?>/img/benefit-icon-5.png"
                                alt="">
                            <div class="ffffffffff w-100 text-center icon-str">Protect liver and eyes
                            </div>
                        </div>
                    </div>


                </li>

                <li class="benefits-list-ul-li">

                    <div class="d-table w-100 h-100">
                        <div class="d-table-cell align-middle position-relative">
                            <img class="" src="<?php echo get_template_directory_uri(); ?>/img/benefit-icon-6.png"
                                alt="">
                            <div class="ffffffffff w-100 text-center icon-str">Improve sleeping and
                                memorizing quality </div>
                        </div>
                    </div>


                </li>

                <li class="benefits-list-ul-li">

                    <div class="d-table w-100 h-100">
                        <div class="d-table-cell align-middle position-relative">
                            <img class="" src="<?php echo get_template_directory_uri(); ?>/img/benefit-icon-7.png"
                                alt="">
                            <div class="ffffffffff w-100 text-center icon-str">Activate dermal collagen
                                synthesis </div>
                        </div>
                    </div>


                </li>

                <li class="benefits-list-ul-li">

                    <div class="d-table w-100 h-100">
                        <div class="d-table-cell align-middle position-relative">
                            <img class="" src="<?php echo get_template_directory_uri(); ?>/img/benefit-icon-8.png"
                                alt="">
                            <div class="ffffffffff w-100 text-center icon-str">Repair DNA from damaged
                                cells </div>
                        </div>
                    </div>


                </li>

                <li class="benefits-list-ul-li">

                    <div class="d-table w-100 h-100">
                        <div class="d-table-cell align-middle position-relative">
                            <img class="" src="<?php echo get_template_directory_uri(); ?>/img/benefit-icon-9.png"
                                alt="">
                            <div class="ffffffffff w-100 text-center icon-str">Enhance insulin
                                sensitivity and interfere with type 2 diabetes </div>
                        </div>
                    </div>


                </li>

                <li class="benefits-list-ul-li">

                    <div class="d-table w-100 h-100">
                        <div class="d-table-cell align-middle position-relative">
                            <img class="" src="<?php echo get_template_directory_uri(); ?>/img/benefit-icon-10.png"
                                alt="">
                            <div class=" w-100 text-center icon-str">Eliminate free radicals
                                that cause aging process </div>
                        </div>
                    </div>


                </li>




            </ul>

        </div>
    </div> -->



<!-- <div class="container">

    <div class="pue-section pue-section-8 mt-6 mb-5">

        <div class="gold-subheading">

            <?php echo ($lang_code=='en') ?'Where do we get NMN?' : '從哪裡可以獲得NMN？';?>







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

                <div class="product-div mb-xl-0 mb-lg-0 mb-md-3 mb-sm-3 mb-3 grey-bg">
                    <div class="grey-bg">

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
                        <div class="product-name"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></div>
                        <?php $product = wc_get_product(); ?>
                        <div class="price mt-4">

                            <div class="was-price">
                                <?php echo ($lang_code=='en') ?'was' : '原價';?>

                                <?php echo get_woocommerce_currency_symbol(); echo $product->regular_price; ?>
                            </div>

                            <div class="now-price mt-2">
                                <?php echo ($lang_code=='en') ?'now' : '減價';?>

                                <?php echo get_woocommerce_currency_symbol(); echo $product->sale_price; ?>
                            </div>
                        </div>

                        <div class="text-center mt-4 shop-now-btn-div mb-3">
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

    </div>
</div> -->
<!-- </div> -->


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

    $('.milestone-header').click(function() {
        $('.milestone-header').removeClass('active');
        $(this).toggleClass('active');
        var idx = $(this).closest('tr').index();
        $('.milestone-content').fadeOut(0);
        $('.milestone-content').eq(idx).slideDown(200);
    })

    $('.teamleader-title').fadeOut(0);

    $('.teamleader-title').eq(0).fadeIn(0);

    $('.teammate-a').click(function() {

        var idx = $(this).index();

        $('.teamleader-title').fadeOut(0);

        $('.teamleader-title').eq(idx).fadeIn(0);

    });

})
</script>
<?php

get_footer("puerfons");