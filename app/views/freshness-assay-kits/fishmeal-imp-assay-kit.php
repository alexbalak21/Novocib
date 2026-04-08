<?php
global $title;
$title = "PRECICE® Fishmeal IMP Assay Kit | IMP Analysis for Fishmeal";

// META TAGS 
ob_start(); ?>
<link rel="canonical" href="https://www.novocib.com/freshness-assay-kits/fishmeal-imp-assay-kit">
<meta name="description" content="PRECICE Fishmeal IMP Assay Kit for enzymatic determination of IMP in fishmeal samples (Ref. 0700-006). Measure IMP levels by long-UV spectrophotometry at 340 nm for fishmeal quality control and freshness assessment.">
<meta name="keywords" content="PRECICE Fishmeal IMP Assay Kit, fishmeal IMP assay, IMP test for fishmeal, IMP dehydrogenase assay, inosine monophosphate analysis, fishmeal freshness, aquaculture feed analysis, enzymatic IMP detection, 340 nm spectrophotometry, fishmeal quality control, IMPDH enzyme assay, NADH quantification, fishmeal nucleotide analysis, REF 0700-006, enzymatic fishmeal testing, fishmeal sample preparation">
<meta name="robots" content="index,follow,max-image-preview:large">
<meta property="og:type" content="product">
<meta property="og:site_name" content="NOVOCIB">
<meta property="og:title" content="PRECICE Fishmeal IMP Assay Kit | IMP Analysis for Fishmeal">
<meta property="og:description" content="Enzymatic kit for measuring IMP in fishmeal samples using long-UV spectrophotometry at 340 nm. Designed for fishmeal quality control and freshness assessment.">
<meta property="og:url" content="https://www.novocib.com/freshness-assay-kits/fishmeal-imp-assay-kit">
<meta property="og:image" content="https://www.novocib.com/app/img/fishmeal-imp-assay-kit-principle.png">
<meta property="og:image:alt" content="PRECICE Fishmeal IMP Assay Kit principle diagram">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="PRECICE Fishmeal IMP Assay Kit | IMP Analysis for Fishmeal">
<meta name="twitter:description" content="Enzymatic kit for measuring IMP in fishmeal samples using long-UV spectrophotometry at 340 nm for fishmeal quality control.">
<meta name="twitter:image" content="https://www.novocib.com/app/img/fishmeal-imp-assay-kit-principle.png">
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Product",
    "name": "PRECICE Fishmeal IMP Assay Kit",
    "description": "PRECICE Fishmeal IMP Assay Kit for enzymatic determination of IMP in fishmeal samples (Ref. 0700-006). Measure IMP levels by long-UV spectrophotometry at 340 nm for fishmeal quality control and freshness assessment.",
    "brand": {
        "@type": "Brand",
        "name": "Novocib"
    },
    "category": "Aquaculture Testing Kits",
    "url": "https://www.novocib.com/freshness-assay-kits/fishmeal-imp-assay-kit",
    "image": "https://www.novocib.com/app/img/fishmeal-imp-assay-kit-principle.png",
    "sku": "0700-006",
    "offers": {
        "@type": "Offer",
        "availability": "https://schema.org/InStock",
        "priceCurrency": "EUR",
        "price": "0.00",
        "seller": {
            "@type": "Organization",
            "name": "Novocib",
            "url": "https://www.novocib.com"
        }
    },
    "applicationCategory": "Fishmeal Quality Control",
    "keywords": "PRECICE Fishmeal IMP Assay Kit, fishmeal IMP assay, IMP test for fishmeal, IMP dehydrogenase assay, inosine monophosphate analysis, fishmeal freshness, aquaculture feed analysis, enzymatic IMP detection",
    "slogan": "Enzymatic determination of IMP nucleotide in fishmeal samples",
    "additionalProperty": [
        {
            "@type": "PropertyValue",
            "name": "Target Analyte",
            "value": "Inosine 5'-monophosphate (IMP) in fishmeal samples"
        },
        {
            "@type": "PropertyValue",
            "name": "Measurement Wavelength",
            "value": "340 nm"
        }
    ],
    "audience": {
        "@type": "Audience",
        "audienceType": "Aquaculture feed producers, fishmeal quality control laboratories, research scientists, seafood processing companies, feed formulation specialists"
    }
}
</script>
<?php $metas = ob_get_clean();


require_once $_SERVER['DOCUMENT_ROOT'] . "/app/templates/new_base.php";
?>
<?= Banner::gen("/app/img/fish-farm.jpg", "Fishmeal IMP Assay Kit") ?>
<main class="container mt-5">

    <h1 class="underlinedTitle center">
        <span class="underlined center novoblue">PRECICE<sup>®</sup> Fishmeal IMP Assay Kit</span>
    </h1>

    <!-- Introduction -->
    <section class="row mb-5">
        <h2 class="text-center d-none">Introduction</h2>

        <div class="col-lg-4">
            <img class="img-fluid border" src="/app/img/fish-meal.jpg" alt="Anchovy fishmeal sample used for IMP analysis">
        </div>

        <div class="col-lg-8">
            <p>
                Fish muscle is naturally rich in adenosine triphosphate (ATP), the nucleotide that provides the energy for muscle contraction and swimming. Following capture and respiratory arrest, ATP in fish muscle is rapidly hydrolyzed to inosine 5'-monophosphate (IMP). Because IMP is unstable and can be further degraded to inosine and hypoxanthine by autolytic and bacterial enzymes, its abundance is widely recognized as a biochemical indicator of fish freshness. Consequently, fishmeal prepared from fresh raw material is naturally enriched in dietary IMP.
            </p>

            <p>
                Among available sources, anchovy fishmeal is especially valued in aquaculture for its high digestibility, protein content, balanced amino acid profile, and essential fatty acids. While anchovy fishmeal naturally contains nucleotides, IMP levels are highly variable (Table 1) and are not consistently reported in standard composition tables.
            </p>
        </div>
    </section>
    
    <!-- Principle -->
    <section class="my-5">
        <h2 class="h3 ms-5">Principle</h2>

        <p class="text-center mb-3">
            <b class="novo-blue">PRECICE<sup>®</sup> Fishmeal IMP Assay Kit</b> provides an enzymatic tool for measuring IMP content in samples by long‑UV spectrophotometry.
        </p>

        <div class="text-center">
            <img src="/app/img/fishmeal-imp-assay-kit-principle.png"
                alt="PRECICE Fishmeal IMP Assay Kit principle diagram"
                class="img-fluid border">
        </div>

        <p class="mt-3">
            <b class="novo-blue">PRECICE<sup>®</sup> Fishmeal IMP Assay Kit</b> is based on the use of recombinant IMP‑specific dehydrogenase that allows irreversible and quantitative conversion of IMP to NADH. The NADH formed can be quantified by measuring absorbance at 340 nm. For maximal accuracy, assays are run with and without IMPDH enzyme in parallel. The absorbance rate observed in the absence of IMPDH is used as blank and subtracted from the absorbance rate measured in its presence.
        </p>
    </section>

    <!-- Nucleotides content -->
    <section class="my-5 pt-4">
        <h2 class="text-center mb-4 novo-blue">Nucleotides content in fishmeal</h2>
        <h4 class="mb-4">Table 1. Nucleotides Content in Fishmeal Samples (Anchovy)</h4>

        <div class="table-responsive mb-5">
            <table class="table table-bordered table-striped table-hover align-middle text-center">
                <thead class="table-dark">
                    <tr>
                        <th>Compound</th>
                        <th>Fishmeal 1</th>
                        <th>Fishmeal 2</th>
                        <th>Fishmeal 3</th>
                        <th>Fishmeal 4</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Guanine (g/kg)</td>
                        <td>1.23</td>
                        <td>1.49</td>
                        <td>1.51</td>
                        <td>1.26</td>
                    </tr>
                    <tr>
                        <td>Hypoxanthine (g/kg)</td>
                        <td>0.54</td>
                        <td>1.02</td>
                        <td>0.81</td>
                        <td>2.29</td>
                    </tr>
                    <tr>
                        <td>Inosine (g/kg)</td>
                        <td>1.93</td>
                        <td>1.79</td>
                        <td>1.90</td>
                        <td>0.76</td>
                    </tr>
                    <tr class="table-primary">
                        <td>IMP (g/kg)</td>
                        <td>3.20</td>
                        <td>1.48</td>
                        <td>2.14</td>
                        <td>0.23</td>
                    </tr>
                    <tr>
                        <td>AMP (g/kg)</td>
                        <td>0.42</td>
                        <td>0.34</td>
                        <td>0.34</td>
                        <td>0.26</td>
                    </tr>
                    <tr>
                        <td>ADP (g/kg)</td>
                        <td>0.06</td>
                        <td>0.06</td>
                        <td>0.06</td>
                        <td>0.08</td>
                    </tr>
                    <tr>
                        <td>ATP (g/kg)</td>
                        <td>0.05</td>
                        <td>0.03</td>
                        <td>0.02</td>
                        <td>0.02</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <p>
            This variability explains why supplementation studies dominate the literature, even though fresh fishmeal itself can provide IMP derived from ATP breakdown in muscle tissue.
        </p>

        <p>
            Accurate quantification of IMP in fishmeal is therefore essential for evaluating feed quality and nutritional value. High‑performance liquid chromatography (HPLC) remains the reference method, as it enables precise and quantitative measurement of IMP concentrations with high accuracy and precision.
        </p>

        <div class="row">
            <figure class="col-lg-6">
                <a target="_blank" href="/app/img/nucleotides1.png">
                    <img src="/app/img/nucleotides1.png" class="img-fluid"
                        alt="Full spectra showing high IMP">
                </a>
                <figcaption><b>Figure 1</b>: Full spectra showing high IMP (320 mg/100 g)</figcaption>
            </figure>

            <figure class="col-lg-6">
                <a target="_blank" href="/app/img/nucleotides2.png">
                    <img src="/app/img/nucleotides2.png" class="img-fluid"
                        alt="Full spectra showing low IMP">
                </a>
                <figcaption><b>Figure 2</b>: Full spectra showing low IMP (23 mg/100 g)</figcaption>
            </figure>
        </div>
    </section>

    <!-- Product -->
    <h3 class="novo-blue text-center mt-5">Buy the Kit <i class="fa-solid fa-cart-shopping"></i></h3>

    <?= Products::gen_from_ids(32, 33) ?>

    <div class="text-end mt-3 mb-4">
        <p>
            <i class="fa-solid fa-download"></i> Download
            <a target="_blank" href="/app/documents/PRECICE%C2%AE%20Fishmeal%20IMP%20Assay%20Kit%20-%20User%20Manual%20-%200700-006.pdf">
                PRECICE<sup>®</sup> Fishmeal IMP Assay Kit
            </a>
            User Manual <i class="fa-solid fa-book-atlas"></i>
        </p>
    </div>

    <p class="text-center">
        <strong>Kit is provided in stable lyophilized form and <span class="text-danger">shipped without dry ice</span></strong>
    </p>

    <p class="mt-4 text-center">
        <strong>You can ask us for a quotation <a href="mailto:contact@novocib.com">Here <i class="fa-solid fa-envelopes-bulk"></i></a> or write at <a href="mailto:contact@novocib.com">contact@novocib.com</a></strong>
    </p>

    <div class="text-center mt-5 mb-5">
        <p class="lead">To know more about NOVOCIB's analytical service:</p>
        <a class="btn btn-primary btn-lg" href="/analytical-services">
            Analytical Services <i class="fas fa-flask"></i>
        </a>
    </div>

    <p>
        As a faster alternative, NOVOCIB has developed the PRECICE<sup>®</sup> IMP Assay Kit, a cost‑efficient enzymatic approach. In this assay, IMP is enzymatically converted to xanthosine monophosphate (XMP) with concomitant reduction of NAD to NADH. The NADH formed is then quantified spectrophotometrically at 340 nm, with absorbance developing only in the presence of the specific enzyme.
    </p>

    <!-- Kit content -->
    <div class="mt-4">
        <h3 class="novo-blue">Kit Content:</h3>

        <p>Once dissolved, the reagents provided in the kit are not stable and should be used the day of preparation.</p>

        <div class="row">
            <div class="col-lg-8 mt-lg-5">
                <span>A standard <b>PRECICE<sup>®</sup> Fishmeal IMP Assay Kit</b> contains:</span>
                <ul>
                    <li>One sealed 96‑well microplate (round‑bottom, Corning Costar® 3797) prefilled with <b class="novo-blue">IMP‑dehydrogenase enzyme</b></li>
                    <li><b>IMP standards (3 lanes)</b></li>
                    <li>One tube <b>"Cofactor 1"</b></li>
                    <li>One tube <b>"Cofactor 2"</b></li>
                    <li>One vial <b>"Reaction buffer"</b></li>
                </ul>
            </div>

            <div class="mb-5 col-lg-4 mx-auto">
                <img src="/app/img/imp-assay-kit.jpg" alt="PRECICE Fishmeal IMP Assay Kit contents" title="Kit content" class="img-fluid my-4 border">
            </div>
        </div>
    </div>

    <!-- IMP concentration comparison -->
    <section class="my-5 row align-items-center">
        <h2 class="text-center h3 mb-2 novo-blue">IMP concentration comparison</h2>

        <div class="table-responsive col-lg-6">
            <table class="table table-bordered table-striped align-middle text-center imp-concentration-comparison">
                <thead class="table-light">
                    <tr>
                        <th>Sample</th>
                        <th>IMP (g/kg) - HPLC</th>
                        <th class="novo-blue">IMP (g/kg) - Enzymatic PRECICE Kit</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>FISHMEAL 1</td>
                        <td>1.33</td>
                        <td>1.26</td>
                    </tr>
                    <tr>
                        <td>FISHMEAL 2</td>
                        <td>1.95</td>
                        <td>1.90</td>
                    </tr>
                    <tr>
                        <td>FISHMEAL 3</td>
                        <td>2.30</td>
                        <td>2.13</td>
                    </tr>
                    <tr>
                        <td>FISHMEAL 4</td>
                        <td>0.69</td>
                        <td>0.58</td>
                    </tr>
                    <tr>
                        <td>FISHMEAL 5</td>
                        <td>2.91</td>
                        <td>3.00</td>
                    </tr>
                    <tr>
                        <td>FISHMEAL 6</td>
                        <td>2.11</td>
                        <td>2.11</td>
                    </tr>
                    <tr>
                        <td>FISHMEAL 7</td>
                        <td>0.90</td>
                        <td>0.84</td>
                    </tr>
                    <tr>
                        <td>FISHMEAL 8</td>
                        <td>1.64</td>
                        <td>1.56</td>
                    </tr>
                    <tr>
                        <td>FISHMEAL 9</td>
                        <td>2.13</td>
                        <td>2.36</td>
                    </tr>
                    <tr>
                        <td>FISHMEAL 10</td>
                        <td>3.94</td>
                        <td>4.16</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="col-lg-6">
            <canvas id="impChart" width="600" height="400"></canvas>
        </div>

        <!-- Chart.js -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-trendline@2.0.0"></script>
        <script src="/app/js/imp-concentration-graph.js"></script>

        <div class="table-responsive col-12 mt-4">
            <table class="table table-bordered text-center align-middle">
                <thead class="table-light">
                    <tr>
                        <th>R² / HPLC data</th>
                        <th>Recovery (Enzymatic vs HPLC)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-primary">0.99</td>
                        <td class="text-primary">101%</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <p class="text-center">
            The correlation between HPLC and PRECICE kit measurements is extremely strong: Pearson r = 0.99 and R² = 0.98, showing that both methods yield highly consistent results.
        </p>
    </section>
</main>

<style>
    .imp-concentration-comparison tr td:nth-child(3) {
        color: var(--novo-blue);
    }
</style>