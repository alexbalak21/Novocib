<?php
global $title;
$title = "Fishmeal IMP Assay Kit";

// META TAGS 
ob_start(); ?>
<meta name="description" content="PRECICE® IMP Assay Kit for enzymatic determination of IMP nucleotide in fishmeal samples (Ref. 0700-006). Accurately measure IMP levels in fishmeal using our optimized enzymatic assay with high sensitivity and specificity. Ideal for fishmeal quality control and freshness assessment in aquaculture and feed production.">
<meta name="keywords" content="PRECICE IMP Assay Kit, fishmeal IMP test, IMP dehydrogenase assay, inosine monophosphate test, fishmeal freshness, aquaculture feed analysis, enzymatic IMP detection, 340nm spectrophotometry, fishmeal quality control, IMPDH enzyme assay, NADH quantification, fishmeal nucleotide analysis, PRECICE 0700-006, enzymatic fishmeal testing, IMP standard curve, fishmeal sample preparation, microplate reader assay, IMP concentration measurement, fishmeal degradation products, enzymatic fish freshness test">
<script type="application/ld+json">
    {
        "@context": "https://schema.org/",
        "@type": "Product",
        "name": "PRECICE® IMP Assay Kit",
        "description": "PRECICE® IMP Assay Kit for enzymatic determination of IMP nucleotide in fishmeal samples (Ref. 0700-006). Accurately measure IMP levels in fishmeal using our optimized enzymatic assay with high sensitivity and specificity. The kit includes all necessary reagents for 12 samples with IMP standards for calibration.",
        "brand": {
            "@type": "Brand",
            "name": "Novocib"
        },
        "category": "Aquaculture Testing Kits",
        "url": "https://www.novocib.com/fishmeal-imp-assay-kit",
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
        "keywords": "PRECICE IMP Assay Kit, fishmeal IMP test, IMP dehydrogenase assay, inosine monophosphate test, fishmeal freshness, aquaculture feed analysis, enzymatic IMP detection",
        "slogan": "Enzymatic determination of IMP nucleotide in fishmeal samples",
        "additionalProperty": {
            "@type": "PropertyValue",
            "name": "Target Analyte",
            "value": "Inosine 5'-monophosphate (IMP) in fishmeal samples"
        },
        "audience": {
            "@type": "Audience",
            "audienceType": "Aquaculture Feed Producers, Fishmeal Quality Control Labs, Research Scientists, Seafood Processing Industry, Feed Formulation Specialists"
        }
    }
</script>
<?php $metas = ob_get_clean();


require_once $_SERVER['DOCUMENT_ROOT'] . "/app/templates/new_base.php";
?>

<?= Banner::gen("/app/img/fish-farm.jpg", "coastal aquaculture facility") ?>
<main class="container mt-5">
    <h1 class="underlinedTitle center"><span class="underlined novoblue center">PRECICE® Fishmeal IMP Assay Kit</span></h2>
        <!-- Principle -->
        <div class="my-4">
            <h2 class="novo-blue">Principle</h2>
            <p class="text-center mb-3"><b class="novo-blue">PRECICE® Fishmeal IMP Assay Kit</b> provides an enzymatic tool for measuring IMP content samples by long-UV
                spectrophotometry.</p>
            <div class="text-center">
                <img src="/app/img/fishmeal-imp-assay-kit-principle.png" alt="PRECICE® Fishmeal IMP Assay Kit Principle" class="img-fluid border">
            </div>
            <p class="mt-3"><b class="novo-blue">PRECICE® Fishmeal IMP Assay Kit</b> is based on the use of recombinant IMP-specific dehydrogenase that allows irreversible
                and quantitative conversion of IMP to NADH. The NADH formed can be quantified by measuring specific
                absorbance at 340nm. For maximal accuracy, the assays are run with and without IMPDH enzyme in parallel. The
                absorbance rate observed in the absence of IMPDH is used as blank and is subtracted from the absorbance rate
                measured in its presence.</p>

        </div>

        <!-- DESCRIPTION -->
        <div class="row my-5">
            <div class="col-lg-4">
                <img class="img-fluid border" src="/app/img/fish-meal.jpg" alt="fishmeal image">
            </div>
            <div class="col-8">
                <p>Fish muscle is naturally rich in adenosine triphosphate (ATP), the nucleotide that provides the energy for muscle contraction and swimming. Following capture and respiratory arrest, ATP in fish muscle is rapidly hydrolyzed to inosine 5'-monophosphate (IMP). Because IMP is unstable and can be further degraded to inosine and hypoxanthine by autolytic and bacterial enzymes, its abundance is widely recognized as a biochemical indicator of fish freshness. Consequently, fishmeal prepared from fresh raw material is naturally enriched in dietary IMP.</p>
                <p>Among available sources, anchovy fishmeal is especially valued in aquaculture for its high digestibility, protein content, balanced amino acid profile, and essential fatty acids. While anchovy fishmeal naturally contains nucleotides, IMP levels are highly variable (Table 1) and are not consistently reported in standard composition tables.</p>
            </div>
        </div>


        <h3 class="mb-4">Table 1. Nucleotides Content in Fishmeal Samples (Anchovy)</h3>
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
        <p>This variability explains why supplementation studies dominate the literature, even though fresh fishmeal itself can provide IMP derived from ATP breakdown in muscle tissue.</p>
        <p>Accurate quantification of IMP in fishmeal is therefore essential for evaluating feed quality and nutritional value. High-performance liquid chromatography (HPLC) remains the reference method, as it enables precise and quantitative measurement of IMP concentrations with high accuracy and precision.</p>
        <div class="row">
            <figure class="col-lg-6">
                <a target="_blank" href="/app/img/nucleotides1.png"><img src="/app/img/nucleotides1.png" class="img-fluid" alt="Full spectra of nucleotides, nucleosides and bases present in anchovy fishmeal sample 1 analyzed by ion-paired reverse phase HPLC by NOVOCIB showing high level of IMP (320mg/100g)"></a>
                <figcaption><b>Figure 1</b>: Full spectra of nucleotides, nucleosides and bases present in anchovy fishmeal sample 1 analyzed by ion-paired reverse phase HPLC by NOVOCIB showing high level of IMP (320mg/100g)</figcaption>
            </figure>
            <figure class="col-lg-6">
                <a target="_blank" href="/app/img/nucleotides2.png"><img src="/app/img/nucleotides2.png" class="img-fluid" alt="Full spectra of nucleotides, nucleosides and bases present in anchovy fishmeal sample 1 analyzed by ion-paired reverse phase HPLC by NOVOCIB showing high level of IMP (320mg/100g)"></a>
                <figcaption><b>Figure 2</b>: Full spectra of nucleotides, nucleosides and bases present in anchovy fishmeal sample 1 analyzed by ion-paired reverse phase HPLC by NOVOCIB with low level of IMP (23mg/100g).</figcaption>
            </figure>
        </div>

        <div class="text-center mt-4 mb-5">
            <p class="lead">To know more about NOVOCIB's analytical service:</p>
            <a class="btn btn-primary btn-lg" href="/analytical-services">Analytical Services <i class="fas fa-flask"></i></a>
        </div>
        <p>As a faster alternative, NOVOCIB has developed novel PRECICE® IMP Assay Kit, a cost-efficient enzymatic approach. In this assay, IMP is enzymatically converted to xanthosine monophosphate (XMP) with concomitant reduction of NAD to NADH. The NADH formed is then quantified spectrophotometrically at 340 nm, with absorbance developing only in the presence of the specific enzyme. This innovation enables rapid and reliable measurement of IMP directly in fishmeal, supporting both quality control and nutritional evaluation in aquaculture feed production.</p>

        <!-- KIT CONTENT -->
        <div class="mt-4">
            <h3 class="novo-blue">Kit Content:</h3>
            <p>Once dissolved, the reagents provided in the kit are not stable and should be used the day of preparation.</p>
            <div class="row">
                <div class="col-lg-8 mt-lg-5">
                    <span> A standard <b>PRECICE® Fishmeal IMP Assay Kit</b> contains contains:</span>
                    <ul>
                        <li>one sealed 96-well microplate (roundbottom 96-well plate Corning, Costar®, ref. 3797) prefilled with <br> <b class="novo-blue">IMP-dehydrogenase enzyme</b></li>
                        <p class="mt-3 mb-1">and <b>IMP standards (3 lanes);</b></p>
                        <li>one tube <b>“Cofactor 1”;</b></li>
                        <li>one tube <b>“Cofactor 2”;</b></li>
                        <li>one vial <b>"Reaction buffer”;</b></li>
                    </ul>
                </div>
                <div class="mb-5 col-lg-4 mx-auto">
                    <img src="/app/img/imp-assay-kit.jpg" alt="photo of the kit" title="kit content" class="img-fluid my-4 border">
                </div>
            </div>
        </div>

        <!-- PRODUCT -->
        <h3 class="novo-blue text-center mt-5">Buy the Kit <i class="fa-solid fa-cart-shopping"></i></h3>
        <?= Products::gen_from_ids(32, 33) ?>
                <p class="text-center"><strong>Kit is provided in stable lyophilized form and <span class="text-danger">shipped without dry ice</span> </strong></p>
                <p class="my-4 text-center">
                    <strong>You can ask us for a quotation <a href="mailto:contact@novocib.com">Here <i class="fa-solid fa-envelopes-bulk"></i></a> or write at <a href="mailto:contact@novocib.com">contact@novocib.com</a></strong>
                </p>
            </div>
        </div>
        <div class="text-end mt-3 mb-5">
            <p><i class="fa-solid fa-download"></i> Download <a target="_blank" href="/app/documents/PRECICE® Fishmeal IMP Assay Kit - User Manual - 0700-006.pdf">PRECICE® Fishmeal IMP Assay Kit</a> User Manual <i class="fa-solid fa-book-atlas"></i></p>
        </div>
</main>