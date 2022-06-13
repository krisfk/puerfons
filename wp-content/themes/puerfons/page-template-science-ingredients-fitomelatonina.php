<?php
/*
Template Name: Science And Ingredients Fitomelatonina
*/

get_header("puerfons");

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

<div class="background-grey-div">

    <?php

$rows = get_field('content_container_sections' ); // get all the rows
echo $rows[0]['content_container'];
echo $rows[1]['content_container'];
echo $rows[2]['content_container'];
echo $rows[3]['content_container'];

?>
    <!-- <div class="container">
        <div class="pue-section pue-section-1 mb-5  mt-5 ">

            <div class="pue-section-subheading mb-5">
                Fitomelatonina<sup>&reg;</sup>

            </div>

            <div class="gold-subheading">Reverse Signs of Aging – The Integration of Science and Nature</div>


            <div class="row no-gutters">
                <div
                    class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12 order-xl-1 order-lg-1 order-md-2 order-sm-2 order-2 mt-md-3 mt-sm-3 mt-3 ">

                    <img class="" src="<?php echo get_template_directory_uri(); ?>/img/fit-img-1.jpg" alt="">
                </div>
                <div
                    class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12 mt-xl-6 mt-lg-6  mt-xl-5 mt-lg-5   mt-md-0 mt-sm-0 mt-0 order-xl-2 order-lg-2 order-md-1 order-sm-1 order-1">
                    <div class="gold-bg p-3">
                        Melatonin is a hormone secreted by our body, mainly in the pineal gland in human brain and in
                        the
                        skin.
                        It is best known for the role in regulating our circadian rhythms.
                        <br> <br>
                        The darkness at night activates its synthesis while the daylight reduces its production.
                        <br> <br>
                        Backed by 40 years of anti-aging research from legendary Italian pharmacist, Dr. Francesca Ferri
                        devised
                        the extraction from 3 Alpine plants (Avena sativa, Achillea millefolium, Salvia officinalis) to
                        formulate this superhouse of antioxidant and nourishment for pampering your delicate skin.
                    </div>
                </div>

            </div>

        </div>

    </div> -->


    <!-- <div class="container">
        <div class="pue-section pue-section-2 mb-5  mt-5 ">

            <div class="gold-subheading">How does Fitomelatonina<sup>&reg;</sup> help with skin aging?
            </div>

            <div>
                Fitomelatonina® is the vegetable equivalent of human melatonin in some Alpine and Mediterranean plants,
                performs
                the function: <br> <br>

                Regulate the photoperiodism of the plant <br>
                <ul class="dot-ul">
                    <li>Leaf movements, growth, seed germination, etc.</li>
                    <li>An organisms' ability to adjust their behavioral response to daily changes and seasonal cycles
                        of
                        light and darkness</li>
                </ul>
                <br>
                Act as an antioxidant against stress conditions that cause oxidative damage

                <ul class="dot-ul">

                    <li>High or low temperatures, pollutants, ozone, UV rays, etc.
                    </li>
                </ul>

            </div>



        </div>
    </div> -->


    <!-- <div class="container">
        <div class="pue-section pue-section-3 mb-5  mt-5 ">

            <div class="gold-subheading">To activate cellular power and self-repairing ability to fight off skin
                sagging,
                smooth fine lines, reduce pigmentation and dullness. Nourish your skin with intense hydration and
                radiance.

            </div>

            <div class="row">
                <div class="col-xl-6 col-lg-6  col-md-12  col-sm-12 col-12">

                    <table class="fit-table">
                        <tr>
                            <td class="fit-table-col-1">
                                <img class="" src="<?php echo get_template_directory_uri(); ?>/img/fit-icon-1.png"
                                    alt="">


                            </td>
                            <td class="fit-table-col-2">
                                <div class="gold-subheading mb-2"> Glowing and Hydrated Skin
                                </div>
                                Infiltrate into the dermis for hydration and nourishment
                            </td>
                        </tr>
                        <tr>
                            <td class="fit-table-col-1"> <img class=""
                                    src="<?php echo get_template_directory_uri(); ?>/img/fit-icon-2.png" alt="">
                            </td>
                            <td class="fit-table-col-2">
                                <div class="gold-subheading mb-2">Firming Effect
                                </div>
                                Boost collagen system for plumping and tightening skin
                            </td>
                        </tr>
                        <tr>
                            <td class="fit-table-col-1"> <img class=""
                                    src="<?php echo get_template_directory_uri(); ?>/img/fit-icon-3.png" alt="">
                            </td>
                            <td class="fit-table-col-2">
                                <div class="gold-subheading mb-2">Smoothing Fine Lines and Skin Texture
                                </div>Support cell regeneration to restore smoothness

                            </td>
                        </tr>
                        <tr>
                            <td class="fit-table-col-1"> <img class=""
                                    src="<?php echo get_template_directory_uri(); ?>/img/fit-icon-4.png" alt="">
                            </td>
                            <td class="fit-table-col-2">
                                <div class="gold-subheading mb-2"> Balancing Skin Tone with Less Pigmentation
                                </div>
                                <div>
                                    Anti-UV and antioxidant to reduce the formation of pigmentation
                                </div>
                            </td>
                        </tr>
                    </table>

                </div>
                <div class="col-xl-6 col-lg-6  col-md-12  col-sm-12 col-12">

                    <img class="" src="<?php echo get_template_directory_uri(); ?>/img/fit-img-2.jpg" alt="">

                </div>


            </div>



        </div>
    </div> -->




    <!-- <div class="container">
        <div class="pue-section pue-section-4 mb-5  mt-5 ">

            <div class="gold-subheading">Laboratory tested anti-aging results
            </div>

            <div>By combining FITOMELATONINA<sup>&reg;</sup>
                , a well-researched ingredient that is an antioxidant powerhouse, with
                supercharged NMN and SPF30 to brighten, nourish and protect your skin. The antioxidant rich Biolift UV
                face
                cream is powered by science with results that are clinically proven.
            </div>


            <div class="row white-bg p-4 mt-4">
                <div class="col-xl-6 col-lg-6  col-md-12  col-sm-12 col-12
">

                    <div class="gold-subheading"> Antioxidant
                    </div>

                    <ul class="dot-ul">
                        <li>
                            Colorimetric test that highlights the antioxidant capacity of Fitomelatonina® on
                            keratinocytes,
                            the primary type of cell found in the epidermis, the outermost layer of the skin.</li>
                        <li>Keratin serves important structural and protective functions. Some keratins have also been
                            found
                            to regulate key cellular activities, such as cell growth and protein synthesis.
                        </li>
                    </ul>

                </div>

                <div class="col-xl-6 col-lg-6  col-md-12  col-sm-12 col-12 mt-xl-0 mt-lg-0 mt-md-3 mt-sm-3 mt-3
">


                    <div class="row  text-center">

                        <div class="col-6">
                            <img class="" src="<?php echo get_template_directory_uri(); ?>/img/fit-circle-1.png" alt="">
                            <div>Photo A <br>
                                In red are the keratinocytes exposed to the daily harmful environment with pollutants
                                and oxidative stress.
                            </div>
                        </div>
                        <div class="col-6"> <img class=""
                                src="<?php echo get_template_directory_uri(); ?>/img/fit-circle-2.png" alt="">
                            <div>Photo B <br>
                                Keratinocytes subjected to the exposure of UV rays are protected with Fitomelatonina®
                            </div>
                        </div>
                    </div>

                </div>

            </div>


            <div class="row gold-bg p-4">
                <div class="col-xl-6 col-lg-6  col-md-12  col-sm-12 col-12">

                    <div class=" yellow-subheading"> Revitalizing the Cellular Growth

                    </div>

                    <ul class="dot-ul">
                        <li>
                            Colorimetric test that highlights the remodeling capacity of Fitomelatonina® on the
                            cytoskeleton, that is a complex network of interlinking protein filaments present in all
                            cells for organelle transport, cell division, motility, and signaling.

                        </li>

                    </ul>

                </div>

                <div class="col-xl-6 col-lg-6  col-md-12  col-sm-12 col-12  mt-xl-0 mt-lg-0 mt-md-3 mt-sm-3 mt-3">


                    <div class="row  text-center">

                        <div class="col-6">
                            <img class="" src="<?php echo get_template_directory_uri(); ?>/img/fit-circle-3.png" alt="">
                            <div>Photo A <br>
                                In green are the fibrous matrix which contain large amounts of collagen fibers.

                            </div>
                        </div>
                        <div class="col-6"> <img class=""
                                src="<?php echo get_template_directory_uri(); ?>/img/fit-circle-4.png" alt="">
                            <div>Photo B <br>
                                The cytoskeleton is much more active and dynamic with more collagen production after
                                treatment with Fitomelatonina®. </div>
                        </div>
                    </div>

                </div>

            </div>


            <div class="row white-bg p-4">
                <div class="col-xl-6 col-lg-6  col-md-12  col-sm-12 col-12">

                    <div class=" gold-subheading"> Regenerating Skin Cells


                    </div>

                    <ul class="dot-ul">
                        <li>

                            Colorimetric test that highlights the skin's proliferation and regeneration ability of
                            Fitomelatonina® on the cytoskeleton, that is a complex network of interlinking protein
                            filaments present in all cells for organelle transport, cell division, motility, and
                            signaling.

                        </li>

                    </ul>

                </div>

                <div class="col-xl-6 col-lg-6  col-md-12  col-sm-12 col-12  mt-xl-0 mt-lg-0 mt-md-3 mt-sm-3 mt-3">


                    <div class="row  text-center">

                        <div class="col-6">
                            <img class="" src="<?php echo get_template_directory_uri(); ?>/img/fit-circle-5.png" alt="">
                            <div>Photo A <br>
                                In blue are the keratinocyte maturation (cell proliferation) and density of lobed
                                nuclei.

                            </div>
                        </div>
                        <div class="col-6"> <img class=""
                                src="<?php echo get_template_directory_uri(); ?>/img/fit-circle-6.png" alt="">
                            <div>Photo B <br>

                                Cell proliferation increases more than 3 times after the application of Fitomelatonina®.
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="row gold-bg p-4">
                <div class="col-xl-6 col-lg-6  col-md-12  col-sm-12 col-12">

                    <div class=" yellow-subheading">Anti-wrinkle


                    </div>

                    <ul class="dot-ul">
                        <li>
                            Test on 43 subjects with signs of chronological aging and photo-induced with daily
                            application of Fitomelatonina®.

                        </li>

                    </ul>

                </div>

                <div class="col-xl-6 col-lg-6  col-md-12  col-sm-12 col-12  mt-xl-0 mt-lg-0 mt-md-3 mt-sm-3 mt-3">


                    <img src="<?php echo get_template_directory_uri(); ?>/img/fit-graph.png" alt="">

                </div>

            </div>

        </div>
    </div> -->




</div>



<?php

echo $rows[4]['content_container'];
echo $rows[5]['content_container'];
?>
<!-- <div class="container">
    <div class="pue-section pue-section-6 mb-5  mt-5 ">


        <div class="pue-section-subheading mb-5">
            Quality Assurance

        </div>

        <div class="row no-gutters">

            <div class="col-12">

                <img src="<?php echo get_template_directory_uri(); ?>/img/fit-img-3.jpg" alt="">
            </div>

            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 gold-bg p-4 gold-section">

                <div class="yellow-subheading">Revolutionary Anti-aging Ingredients
                </div>
                <div class="mb-3">
                    With the approval of Dr. David Sinclair of Harvard Medical School, Puerfons’ supplements include
                    effective and cutting-edge anti-aging ingredients.
                </div>


                <div class="yellow-subheading"> Safety Certification </div>
                <div class="mb-3">
                    Puerfons’ supplements have passed the tests of eight major nutritional components, heavy metals, and
                    microbiological conducted by SGS. Manufactured in a FDA-certified factory in the United States, in
                    accordance with Good Manufacturing Practice (GMP) for production and packaging. It has been
                    inspected
                    and certified by the National Sanitation Foundation (NSF), which is widely recognized as the most
                    stringent of certification party in the industry.
                </div>


                <div class="yellow-subheading"> Professional R&D Team </div>
                <div class="mb-3">

                    A group of medical and scientific experts with solid background and experience in medicine,
                    pharmacy,
                    biotechnology, and clinical preventive medicine are recruited to form a professional research &
                    development team.
                </div>

                <div class="yellow-subheading"> Effective Dosage </div>
                <div>

                    Strictly abide by Hong Kong's various regulations on medicine, pharmacy and sanitation, the
                    proportions
                    of ingredients have been certified by animal experiments and clinical trials. The raw materials with
                    high purity, absorption rate and effectiveness are selected.
                </div>




            </div>

            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12  p-4 ">


                <div class="gold-subheading"> Non-genetically Modified (Non-GMO) Raw Materials
                </div>
                <div class="mb-3">
                    The safety of genetically modified products and their environmental impact are still controversial.
                    Therefore, Puerfons insists on using non-genetically modified raw materials to better ensure the
                    purity
                    and safety of Puerfons’ products.
                </div>

                <div class="gold-subheading">
                    No Additives</div>
                <div>
                    Keep the natural and original of the ingredients, avoid unnecessary chemical effects, and let the
                    product exert its maximum effect.
                </div>




            </div>

        </div>
    </div>
</div> -->




<!-- <div class="container">
    <div class="pue-section pue-section-6 mb-5  mt-5 ">

        <ul>
            <li>
                <a class="gold-subheading citation-a" href="javascript:void(0);">Citation</a>
                <ol class="citation-ol">
                    <li> Gomes, A. P., Price, N. L., Ling, A. J., Moslehi, J. J., Montgomery, M. K., Rajman, L., White,
                        J.
                        P., Teodoro, J. S., Wrann, C. D., Hubbard, B. P., Mercken, E. M., Palmeira, C. M., de Cabo, R.,
                        Rolo, A. P., Turner, N., Bell, E. L., & Sinclair, D. A. (2013). Declining NAD(+) induces a
                        pseudohypoxic state disrupting nuclear-mitochondrial communication during aging. Cell, 155(7),
                        1624–1638. https://doi.org/10.1016/j.cell.2013.11.037</li>
                    <li> Mills, K. F., Yoshida, S., Stein, L. R., Grozio, A., Kubota, S., Sasaki, Y., Redpath, P.,
                        Migaud,
                        M. E., Apte, R. S., Uchida, K., Yoshino, J., & Imai, S. I. (2016). Long-Term Administration of
                        Nicotinamide Mononucleotide Mitigates Age-Associated Physiological Decline in Mice. Cell
                        metabolism,
                        24(6), 795–806. https://doi.org/10.1016/j.cmet.2016.09.013</li>

                    <li> Li, J., Bonkowski, M. S., Moniot, S., Zhang, D., Hubbard, B. P., Ling, A. J., Rajman, L. A.,
                        Qin, B., Lou, Z., Gorbunova, V., Aravind, L., Steegborn, C., & Sinclair, D. A. (2017). A
                        conserved NAD+ binding pocket that regulates protein-protein interactions during aging. Science
                        (New York, N.Y.), 355(6331), 1312–1317. https://doi.org/10.1126/science.aad8242
                    </li>
                    <li> Irie, J., Inagaki, E., Fujita, M., Nakaya, H., Mitsuishi, M., Yamaguchi, S., Yamashita, K.,
                        Shigaki, S., Ono, T., Yukioka, H., Okano, H., Nabeshima, Y. I., Imai, S. I., Yasui, M., Tsubota,
                        K., & Itoh, H. (2020). Effect of oral administration of nicotinamide mononucleotide on clinical
                        parameters and nicotinamide metabolite levels in healthy Japanese men. Endocrine journal, 67(2),
                        153–160. https://doi.org/10.1507/endocrj.EJ19-0313
                    </li>
                    <li> Das, A., Huang, G. X., Bonkowski, M. S., Longchamp, A., Li, C., Schultz, M. B., Kim, L. J.,
                        Osborne, B., Joshi, S., Lu, Y., Treviño-Villarreal, J. H., Kang, M. J., Hung, T. T., Lee, B.,
                        Williams, E. O., Igarashi, M., Mitchell, J. R., Wu, L. E., Turner, N., Arany, Z., … Sinclair, D.
                        A. (2018). Impairment of an Endothelial NAD+-H2S Signaling Network Is a Reversible Cause of
                        Vascular Aging. Cell, 173(1), 74–89.e20. https://doi.org/10.1016/j.cell.2018.02.008
                    </li>
                    <li> Trammell, S. A., Schmidt, M. S., Weidemann, B. J., Redpath, P., Jaksch, F., Dellinger, R. W.,
                        Li, Z., Abel, E. D., Migaud, M. E., & Brenner, C. (2016). Nicotinamide riboside is uniquely and
                        orally bioavailable in mice and humans. Nature communications, 7, 12948.
                        https://doi.org/10.1038/ncomms12948
                    </li>
                    <li> Airhart, S. E., Shireman, L. M., Risler, L. J., Anderson, G. D., Nagana Gowda, G. A., Raftery,
                        D., Tian, R., Shen, D. D., & O'Brien, K. D. (2017). An open-label, non-randomized study of the
                        pharmacokinetics of the nutritional supplement nicotinamide riboside (NR) and its effects on
                        blood NAD+ levels in healthy volunteers. PloS one, 12(12), e0186459.
                        https://doi.org/10.1371/journal.pone.0186459
                    </li>
                    <li> Heilbronn L. K. (2017). Clinical Trials Corner. Nutrition and healthy aging, 4(2), 193–194.
                        https://doi.org/10.3233/NHA-170001
                    </li>
                    <li> Nishida Y., Yamashita E., Miki W. (2007). Quenching activities of common hydrophilic and
                        lipophilic antioxidants against singlet oxygen using chemiluminescence detection system.
                        Carotenoid Science, 11,16–20.
                    </li>
                    <li> Yoshida H, Yanai H, Ito K, et al. Administration of natural astaxanthin increases serum
                        HDL-cholesterol and adiponectin in subjects with mild hyperlipidemia. Atherosclerosis. 2010
                        Apr;209(2):520-3.
                    </li>
                    <li> Yang Y, Seo JM, Nguyen A, et al. Astaxanthin-rich extract from the green alga Haematococcus
                        pluvialis lowers plasma lipid concentrations and enhances antioxidant defense in apolipoprotein
                        E knockout mice. J Nutr. 2011 Sep;141(9):1611-7.
                    </li>
                    <li> Li W, Hellsten A, Jacobsson LS, Blomqvist HM, Olsson AG, Yuan XM. Alpha-tocopherol and
                        astaxanthin decrease macrophage infiltration, apoptosis and vulnerability in atheroma of
                        hyperlipidaemic rabbits. J Mol Cell Cardiol. 2004 Nov;37(5):969-78.
                    </li>
                    <li> Nakao R, Nelson OL, Park JS, Mathison BD, Thompson PA, Chew BP. Effect of astaxanthin
                        supplementation on inflammation and cardiac function in BALB/c mice. Anticancer Res. 2010
                        Jul;30(7):2721-5.
                    <li> Satoh A, Tsuji S, Okada Y, et al. Preliminary clinical evaluation of toxicity and efficacy of a
                        new astaxanthin-rich Haematococcus pluvialis extract. J Clin Biochem Nutr. 2009 May;44(3):280-4.
                    </li>
                    <li> Katagiri M, Satoh A, Tsuji S, Shirasawa T. Effects of astaxanthin-rich Haematococcus pluvialis
                        extract on cognitive function: a randomised, double-blind, placebo-controlled study. J Clin
                        Biochem Nutr. 2012 Sep;51(2):102-7.
                    </li>
                    <li> Nakao R, Nelson OL, Park JS, Mathison BD, Thompson PA, Chew BP. Effect of dietary astaxanthin
                        at different stages of mammary tumor initiation in BALB/c mice. Anticancer Res. 2010
                        Jun;30(6):2171-5.
                    </li>
                    <li> Chew BP, Mathison BD, Hayek MG, Massimino S, Reinhart GA, Park JS. Dietary astaxanthin enhances
                        immune response in dogs. Vet Immunol Immunopathol. 2011 Apr 15;140(3-4):199-206.
                    </li>
                    <li> Park JS, Mathison BD, Hayek MG, Massimino S, Reinhart GA, Chew BP. Astaxanthin stimulates
                        cell-mediated and humoral immune responses in cats. Vet Immunol Immunopathol. 2011 Dec
                        15;144(3-4):455-61.
                    </li>
                    <li> Chew BP, Park JS. Carotenoid action on the immune response. J Nutr. 2004 Jan;134(1):257S-61S.
                    </li>
                    <li> Izumi-Nagai K, Nagai N, Ohgami K, et al. Inhibition of choroidal neovascularization with an
                        anti-inflammatory carotenoid astaxanthin. Invest Ophthalmol Vis Sci. 2008 Apr;49(4):1679-85.
                    </li>
                    <li> Nakajima Y, Inokuchi Y, Shimazawa M, Otsubo K, Ishibashi T, Hara H. Astaxanthin, a dietary
                        carotenoid, protects retinal cells against oxidative stress in-vitro and in mice in-vivo. J
                        Pharm Pharmacol. 2008 Oct;60(10):1365-74.
                    </li>
                    <li> Izumi-Nagai K, Nagai N, Ohgami K, et al. Inhibition of choroidal neovascularization with an
                        anti-inflammatory carotenoid astaxanthin. Invest Ophthalmol Vis Sci. 2008 Apr;49(4):1679-85.
                    </li>
                    <li> Nakajima Y, Inokuchi Y, Shimazawa M, Otsubo K, Ishibashi T, Hara H. Astaxanthin, a dietary
                        carotenoid, protects retinal cells against oxidative stress in-vitro and in mice in-vivo. J
                        Pharm Pharmacol. 2008 Oct;60(10):1365-74.
                    </li>
                    <li> Lyons NM, O’Brien NM. Modulatory effects of an algal extract containing astaxanthin on
                        UVA-irradiated cells in culture. J Dermatol Sci. 2002 Oct;30(1):73-84.
                    </li>
                    <li> Terazawa S, Nakajima H, Shingo M, Niwano T, Imokawa G. Astaxanthin attenuates the UVB-induced
                        secretion of prostaglandin E2 and interleukin-8 in human keratinocytes by interrupting MSK1
                        phosphorylation in a ROS depletion- independent manner. Exp Dermatol. 2012 Jul;21 Suppl 1:11-7.
                    </li>
                    <li> Anunciato TP, da Rocha Filho PA. Carotenoids and polyphenols in nutricosmetics, nutraceuticals,
                        and cosmeceuticals. J Cosmet Dermatol. 2012 Mar;11(1):51-4.
                    </li>
                    <li> Lyons NM, O’Brien NM. Modulatory effects of an algal extract containing astaxanthin on
                        UVA-irradiated cells in culture. J Dermatol Sci. 2002 Oct;30(1):73-84.
                    </li>
                    <li> Kidd P. Astaxanthin, cell membrane nutrient with diverse clinical benefits and anti-aging
                        potential. Altern Med Rev. 2011 Dec;16(4):355-64
                    </li>
                    <li> Martinez A, Rodriguez-Girones MA, Barbosa A, Costas M. Donator acceptor map for carotenoids,
                        melatonin and vitamins. J Phys Chem A. 2008 Sep 25;112(38):9037-42.
                    </li>
                    <li> Suganuma K, Nakajima H, Ohtsuki M, Imokawa G. Astaxanthin attenuates the UVA-induced
                        up-regulation of matrix- metalloproteinase-1 and skin fibroblast elastase in human dermal
                        fibroblasts. J Dermatol Sci. 2010 May;58(2):136-42.
                    </li>
                </ol>
            </li>
        </ul>
    </div>
</div> -->






<script type="text/javascript">
var $ = jQuery;
$(function() {

    $('.citation-a').click(function() {
        // $('.citation-a').removeClass('active');
        $(this).toggleClass('active');
        if ($(this).hasClass('active')) {

            $('.citation-ol').slideDown(200);
        } else {
            $('.citation-ol').fadeOut(0);
        }
        // var idx = $(this).closest('tr').index();
        // $('.milestone-content').fadeOut(0);
        // $('.milestone-content').eq(idx).slideDown(200);
    })




});

document.body.innerHTML = document.body.innerHTML.replace(/\u2028/g, '');
</script>
<?php

get_footer("puerfons");