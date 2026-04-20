<?php
global $title;
$title = "News";
$novoblue = "#4167b1";

ob_start(); ?>
<meta name="description" content="NOVOCIB latest news, learn more about the company.">
<meta name="News">
<meta name="keywords" content="news, updates, blog">
<?php $metas = ob_get_clean();

require_once $_SERVER['DOCUMENT_ROOT'] . "/app/templates/new_base.php";
?>
<?= Banner::gen("/app/img/city.jpg") ?>
<div class="bg-light pt-4 pt-4 pb-1">
    <h2 class="underlinedTitle center"><span class="underlined novoblue center">Our Latest News</span></h2>
</div>

<div class="container py-4">
    <div class="row">
        <div class="col-lg-7">
            <h3 class="text-center mb-3">AFNOR New Standard</h3>
            <div>
                <p class="text-center lead">
                    AFNOR has published a new Standard XP V45-077 on 4th August 2025.
                </p>
                <p class="mb-0">
                    AFNOR has officially released a new standard titled XP V45-077:
                </p>
                <p class="text-center mt-1 mb-1">
                    <a href="https://www.boutique.afnor.org/en-gb/standard/xp-v45077/fisheries-and-aquatic-products-assessment-of-fish-flesh-freshness-enzymatic/fa208694/448349">
                        Fisheries and Aquatic Products - Assessment of Fish Freshness by Measuring Three Nucleotides: IMP, Inosine, and Hypoxanthine
                    </a>
                </p>
                <p>
                    This standard introduces a colorimetric enzymatic method for quantifying three key nucleotides-IMP, inosine, and hypoxanthine-which serve as reliable indicators of fish freshness. The method aims to support quality control and ensure product integrity across the seafood industry.
                </p>
                <p>
                    To facilitate implementation of this standard, NOVOCIB offers a dedicated solution: <br>
                    <a href="https://www.novocib.com/dietary-nucleotides-assay-kits/fish-freshness-assay-kit">
                        Fish Freshness Assay Kit <i class="fa-solid fa-fish-fins"></i>
                    </a> <br>
                    This kit enables rapid and accurate measurement of the same nucleotides outlined in XP V45-077, making it a practical tool for laboratories and seafood processors seeking compliance and enhanced quality assurance.
                </p>
                <p>
                    <i class="fa-solid fa-magnifying-glass"></i> About AFNOR: AFNOR (Association Française de Normalisation) is France’s national organization for standardization. It represents the country at the International Organization for Standardization (ISO) and plays a leading role in developing voluntary standards that promote quality, safety, and sustainability across diverse sectors.
                </p>
            </div>
        </div>
        <div class="col-lg-5 d-flex align-items-center">
            <img src="/app/img/afnor_headquarters.jpg" alt="afnor headquarters photo" title="AFNOR Headquarters" class="w-100">
        </div>
    </div>
    <p class="text-end text-muted mt-4 mb-1">Published on September 3rd, 2025</p>
</div>


<div class="bg-light py-5"></div>

<div class="container py-4">
    <div class="col-lg-7 mx-auto">
        <h3 class="text-center">New website</h3>
        <p class="mt-4 mb-5 lead text-center">
            Hello, welcome to our new website! We are happy to announce the complete redisign of our web platform.
            <br />
            We will continue to add new pages in the near future, so don't hezitate to check our site often.
        </p>
        <p class="text-end text-muted mt-4 mb-0">Published on April 15, 2024</p>
    </div>
</div>


<div class="bg-light pt-4 pb-1">
    <div class="container">
        <div class="row justify-content-center ">
            <h2 class="text-center novo-blue mt-5">Explore:</h2>
            <div class="col-lg-4 col-8 text-center mx-3 kit">
                <a href="/freshness-assay-kits/freshness-principle">
                    <h4>Fish Freshness Assay Kits</h4>
                </a>
            </div>
            <div class="col-lg-4 col-8 text-center kit mx-3">
                <a href="/convenient-assay-kits">
                    <h4>Convenient Assay Kits</h4>
                </a>
            </div>
            <div class="col-lg-4 col-8 text-center kit mx-3">
                <a href="/active-purified-enzymes">
                    <h4>Active Purified Enzymes</h4>
                </a>
            </div>
            <div class="col-lg-4 col-8 text-center kit mx-3">
                <a href="/analytical-services/nucleotide-analysis-service">
                    <h4>Analytical Services</h4>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="bg-light">
    <div class="py-4 text-center">
        <a class="btn btn-primary btn-lg" href="/">
            Go to Hompage <i class="fa-solid fa-house"></i>
        </a>
    </div>
</div>