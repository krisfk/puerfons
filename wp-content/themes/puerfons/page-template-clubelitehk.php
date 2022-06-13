<?php
/*
Template Name: clubelitehk
*/

// get_header("puerfons");
$lang_code =ICL_LANGUAGE_CODE;

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Strength of Science the Power of Youth</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.puerfons.com/clubelitehkpage.css">

</head>

<body>

    <div class="main-container mx-auto">
        <div class="banner">

            <?php
$img_id = get_field('banner');
$img_arr = wp_get_attachment_image_src($img_id,'full');
$img_src=$img_arr[0];
?>


            <img src="<?php echo $img_src;?>" alt="">

        </div>

        <!--product start-->
        <?php echo get_field('content_1');?>
        <!-- <div class="container product-container pb-5">

            <div class="purple-title text-center text-uppercase mt-5">Puerfons Plus</div>
            <div class="subtitle text-center text-uppercase mt-3 mb-3">Age Defense Anti-aging Capsules</div>

            <div class="row  no-gutters mt-3">

                <div class="col-4">
                    <img class="w-100" src="https://puerfons.com/wp-content/uploads/2021/03/Asset-21@2x-50.jpg" alt="">
                </div>
                <div class="col-4"><img class="w-100"
                        src="https://puerfons.com/wp-content/uploads/2021/03/Asset-22@2x-50.jpg" alt="">
                </div>

                <div class="col-4"><img class="w-100"
                        src="https://puerfons.com/wp-content/uploads/2021/03/Asset-23@2x-50.jpg" alt="">
                </div>

            </div>

            <div class="row no-gutters mt-5">

                <div class="col-12 col-sm-12 col-md-6 col-lg-6"><img class="w-100"
                        src="https://puerfons.com/wp-content/uploads/2021/03/Asset-24@2x-50.jpg" alt="">
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 pl-4">
                    <div class="subtitle mt-3">BENEFITS
                    </div>

                    <div class="mt-3">Revolutionary formulation (NMN + NR + Resveratrol) to boost NAD+ in human bodies
                        to inhibit
                        cellular aging and maintain your youthfulness synergistically, it supports:
                    </div>

                    <ul class="mt-3 point-ul">
                        <li><span class="font-weight-bold">Healthy aging:</span> Enhance the lifespan and metabolism of
                            living
                            cells </li>
                        <li><span class="font-weight-bold">Self-healing ability:</span> Activate cellular energy and
                            reparation
                        </li>
                        <li><span class="font-weight-bold">Brain functions:</span> Improve memory descending problem
                        </li>
                        <li><span class="font-weight-bold">General body functions:</span> Improve cardiovascular, liver
                            health
                            and muscle quality</li>
                        <li><span class="font-weight-bold">Anti-physical fatigue:</span> Enhance immunity, sleeping
                            quality and
                            concentration level </li>
                    </ul>
                </div>
            </div>

            <div class="dot-line mt-5"></div>


        </div> -->
        <!--product end-->
        <!--product start-->
        <?php echo get_field('content_2');?>

        <!-- <div class="container product-container pb-5">


            <div class="purple-title text-center text-uppercase mt-5">PUERFONS NEW GENERATION</div>
            <div class="subtitle text-center text-uppercase mt-3 mb-3">CELL ACTIVATOR CAPSULES</div>

            <div class="row  no-gutters mt-3">

                <div class="col-4">
                    <img class="w-100" src="https://puerfons.com/wp-content/uploads/2021/03/Asset-4@2x-50.jpg" alt="">
                </div>
                <div class="col-4"><img class="w-100"
                        src="https://puerfons.com/wp-content/uploads/2021/03/Asset-5@2x-50.jpg" alt="">
                </div>

                <div class="col-4"><img class="w-100"
                        src="https://puerfons.com/wp-content/uploads/2021/03/Asset-6@2x-50.jpg" alt="">
                </div>

            </div>

            <div class="row no-gutters mt-5">

                <div class="col-12 col-sm-12 col-md-6 col-lg-6"><img class="w-100"
                        src="https://puerfons.com/wp-content/uploads/2021/03/Asset-7@2x-50.jpg" alt="">
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 pl-4">
                    <div class="subtitle mt-3">BENEFITS
                    </div>

                    <div class="mt-3">To give you a natural energy and immunity boost by activating cell regeneration
                        and metabolism. To regain youthful vitality with comprehensive formulation of NMN, resveratrol
                        and multivitamin B group (including B1, B2, B3, B6, B12):

                    </div>

                    <ul class="mt-3 point-ul">

                        <li>Accelerate cell metabolism and energy </li>
                        <li>Promote cell growth and brain vitality </li>
                        <li>Enhance general body health and functions of immunity, nerves, heart, muscles, digestive
                            system, etc. </li>
                        <li>Eliminate physical fatigue</li>
                        <li>Raise concentration level </li>
                        <li>Improve sleeping quality </li>
                    </ul>
                </div>
            </div>

            <div class="dot-line mt-5"></div>


        </div> -->
        <!--product end-->

        <!--product start-->
        <?php echo get_field('content_3');?>

        <!-- <div class="container product-container pb-5">



            <div class="purple-title text-center text-uppercase mt-5">PUERFONS ASTAXANTHIN</div>
            <div class="subtitle text-center text-uppercase mt-3 mb-3">ANTIOXIDANT AND ANTI-INFLAMMATORY CAPSULES</div>

            <div class="row  no-gutters mt-3">

                <div class="col-4">
                    <img class="w-100" src="https://puerfons.com/wp-content/uploads/2021/03/Asset-8@2x-50.jpg" alt="">
                </div>
                <div class="col-4"><img class="w-100"
                        src="https://puerfons.com/wp-content/uploads/2021/03/Asset-9@2x-50.jpg" alt="">
                </div>

                <div class="col-4"><img class="w-100"
                        src="https://puerfons.com/wp-content/uploads/2021/03/Asset-10@2x-50.jpg" alt="">
                </div>

            </div>

            <div class="row no-gutters mt-5">

                <div class="col-12 col-sm-12 col-md-6 col-lg-6"><img class="w-100"
                        src="https://puerfons.com/wp-content/uploads/2021/03/Asset-11@2x-50.jpg" alt="">
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 pl-4">
                    <div class="subtitle mt-3">BENEFITS
                    </div>

                    <div class="mt-3">Sourced from the deep sea, packed with one of nature's strongest antioxidants and
                        anti-inflammatory compounds, astaxanthin, to fight oxidative stress and free radicals to keep
                        you being youthful:


                    </div>

                    <ul class="mt-3 point-ul">

                        <li>Support cardiovascular health and balance cholesterol level</li>
                        <li>Relieve joint discomfort caused by inflammation-induced illness or pain </li>
                        <li>Improve connective tissues, muscle endurance and resilience</li>
                        <li>Relieve eye fatigue</li>
                        <li>Protect your skin from oxidation damage for a brighter complexion</li>
                        <li>Produce collagen to increase skin elasticity</li>
                    </ul>
                </div>
            </div>

            <div class="dot-line mt-5"></div>


        </div> -->
        <!--product end-->

        <!--product start-->
        <?php echo get_field('content_4');?>

        <!-- <div class="container product-container pb-5">




            <div class="purple-title text-center text-uppercase mt-5">PUERFONS DAY CARE</div>
            <div class="subtitle text-center text-uppercase mt-3 mb-3">AM BIOLIFT CREAM</div>

            <div class="row  no-gutters mt-3">

                <div class="col-4">
                    <img class="w-100" src="https://puerfons.com/wp-content/uploads/2021/03/Asset-12@2x-50.jpg" alt="">
                </div>
                <div class="col-4"><img class="w-100"
                        src="https://puerfons.com/wp-content/uploads/2021/03/Asset-13@2x-50.jpg" alt="">
                </div>

                <div class="col-4"><img class="w-100"
                        src="https://puerfons.com/wp-content/uploads/2021/03/Asset-14@2x-50.jpg" alt="">
                </div>

            </div>

            <div class="row no-gutters mt-5">

                <div class="col-12 col-sm-12 col-md-6 col-lg-6"><img class="w-100"
                        src="https://puerfons.com/wp-content/uploads/2021/03/Asset-15@2x-50.jpg" alt="">
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 pl-4">
                    <div class="subtitle mt-3">BENEFITS
                    </div>

                    <div class="mt-3">From reducing wrinkles, tightening skin to protecting your delicate skin from the
                        harmful effects of sunlight and pollutants with SPF 30, the antioxidant powerhouse Puerfons AM
                        Biolift Cream gives your skin that youthful lift from within glow.


                    </div>

                    <ul class="mt-3 point-ul">


                        <li><span class="font-weight-bold">Anti-UV:</span> With SPF 30 sun protection index to block
                            both UVA and UVB to reduce pigmentation
                            and
                            dullness caused by sun exposure.</li>
                        <li><span class="font-weight-bold">Antioxidant:</span> Accelerate cell renewal, eliminate the
                            oxidative damage of free radicals to
                            maintain skin elasticity and youthfulness.</li>
                        <li><span class="font-weight-bold">Increase Vitality:</span> Promote the growth of collagen and
                            elastin to obtain lifting and firming
                            effect on skin.</li>
                    </ul>
                </div>
            </div>

            <div class="dot-line mt-5"></div>


        </div> -->
        <!--product end-->

        <!--product start-->
        <?php echo get_field('content_5');?>

        <!-- <div class="container product-container pb-5">





            <div class="purple-title text-center text-uppercase mt-5">PUERFONS NIGHT REPAIR</div>
            <div class="subtitle text-center text-uppercase mt-3 mb-3">PM FITOPLUS CREAM</div>

            <div class="row  no-gutters mt-3">

                <div class="col-4">
                    <img class="w-100" src="https://puerfons.com/wp-content/uploads/2021/03/Asset-16@2x-50.jpg" alt="">
                </div>
                <div class="col-4"><img class="w-100"
                        src="https://puerfons.com/wp-content/uploads/2021/03/Asset-17@2x-50.jpg" alt="">
                </div>

                <div class="col-4"><img class="w-100"
                        src="https://puerfons.com/wp-content/uploads/2021/03/Asset-18@2x-50.jpg" alt="">
                </div>

            </div>

            <div class="row no-gutters mt-5">

                <div class="col-12 col-sm-12 col-md-6 col-lg-6"><img class="w-100"
                        src="https://puerfons.com/wp-content/uploads/2021/03/Asset-19@2x-50.jpg" alt="">
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 pl-4">
                    <div class="subtitle mt-3">BENEFITS
                    </div>

                    <div class="mt-3">Supercharged with clinically proven active ingredients, sleep with Puerfons Night
                        Repair PM Fitoplus Cream and wake up with healthy glowing skin filled with boosting nourishment,
                        radiance and intense hydration. Making dull and aging skin a story from the past!



                    </div>

                    <ul class="mt-3 point-ul">


                        <li><span class="font-weight-bold">Anti-UV:</span> With SPF 30 sun protection index to block
                            both UVA and UVB to reduce pigmentation
                            and
                            dullness caused by sun exposure.</li>
                        <li><span class="font-weight-bold">Antioxidant:</span> Accelerate cell renewal, eliminate the
                            oxidative damage of free radicals to
                            maintain skin elasticity and youthfulness.</li>
                        <li><span class="font-weight-bold">Increase Vitality:</span> Promote the growth of collagen and
                            elastin to obtain lifting and firming
                            effect on skin.</li>
                    </ul>
                </div>
            </div>

            <div class="dot-line mt-5"></div>


        </div> -->
        <!--product end-->



    </div>



</body>

</html>