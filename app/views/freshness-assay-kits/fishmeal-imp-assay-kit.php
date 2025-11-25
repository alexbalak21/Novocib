<?php
global $title;
$title = "Fishmeal IMP Assay Kit";

// META TAGS 
ob_start(); ?>
<meta name="description" content="Accurately measure IMP (Inosine 5'-monophosphate) levels in fishmeal with Novocib's FISH-IMP Assay Kit. Ideal for research in fishmeal quality control, freshness assessment, and nutritional studies. Get reliable, sensitive results with our optimized protocol.">
<meta name="keywords" content="Fishmeal IMP Assay Kit, IMP assay, Inosine 5'-monophosphate, fishmeal quality control, freshness assessment, nutritional studies, enzyme activity assay, biochemical assay kit, research reagents, life science tools, Novocib assays, metabolic pathway analysis">
<script type="application/ld+json">
    {
        "@context": "https://schema.org/",
        "@type": "Product",
        "name": "Fishmeal IMP Assay Kit",
        "description": "Accurately measure IMP (Inosine 5'-monophosphate) levels in fishmeal with Novocib's FISH-IMP Assay Kit. Ideal for research in fishmeal quality control, freshness assessment, and nutritional studies.",
        "brand": {
            "@type": "Brand",
            "name": "Novocib"
        },
        "category": "Life Science Research Kits",
        "url": "https://www.novocib.com/fish-imp-assay-kit",
        "sku": "FISH-IMP-KIT",
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
        "applicationCategory": "Biochemical Research",
        "keywords": "Fishmeal IMP Assay Kit, IMP assay, Inosine 5'-monophosphate, fishmeal quality control, freshness assessment, nutritional studies",
        "slogan": "Precise IMP measurement for fishmeal quality assessment",
        "additionalProperty": {
            "@type": "PropertyValue",
            "name": "Target Analyte",
            "value": "Inosine 5'-monophosphate (IMP)"
        },
        "audience": {
            "@type": "Audience",
            "audienceType": "Research Scientists, Quality Control Specialists, Aquaculture Industry"
        }
    }
</script>
<?php $metas = ob_get_clean();


require_once $_SERVER['DOCUMENT_ROOT'] . "/app/templates/new_base.php";
?>

<?= Banner::gen("/app/img/fish-farm.jpg", "coastal aquaculture facility") ?>
<main class="container mt-5">
    <h2 class="underlinedTitle center"><span class="underlined novoblue center">PRECICE® Fishmeal IMP Assay Kit</span></h2>
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
    <div class="mb-5 col-lg-5 mx-auto">
        <img src="/app/img/imp-assay-kit.jpg" alt="photo of the kit" class="img-fluid my-4 border">
    </div>
    <div class=" d-flex justify-content-center mt-4">
        <div class="col-lg-10 col-12">
            <div class="table-responsive">
                <table class="table product mb-2">
                    <thead>
                        <tr>
                            <th class="d-none d-md-table-cell">#REF</th>
                            <th class="text-center">SIZE</th>
                            <th class="text-center d-none d-md-table-cell">PRICE</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="d-none d-md-table-cell">#0700-06-12</td>
                            <td class="text-center">PRECICE® Fishmeal IMP Assay Kit<br>(microplate reader, for 12 samples) including calibration curve with IMP</td>
                            <td class="d-none d-md-table-cell text-center">190.00 €</td>
                            <td class="text-end pe-3">
                                <div class="d-block d-md-none text-end mb-1 fw-bold">
                                    190.00 € </div>
                                <a class="btn btn-primary" href="/inquiry?ref=0700-06-12&amp;price=190.00&amp;product=PRECICE® Fishmeal IMP Assay Kit&amp;volume=microplate reader, for 12 samples">
                                    Inquiry <i class="fa-solid fa-comment"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p class="text-muted text-center">
                <em>Updated on November 25th, 2025.</em><br>
            </p>
            <p class="text-center"><strong>Kit is provided in stable lyophilized form and <span class="text-danger">shipped without dry ice</span> </strong></p>
            <p class="my-4 text-center">
                <strong>You can ask us for a quotation <a href="mailto:contact@novocib.com">Here <i class="fa-solid fa-envelopes-bulk"></i></a> or write at <a href="mailto:contact@novocib.com">contact@novocib.com</a></strong>
            </p>
        </div>
    </div>
    <div class="text-end mt-3 mb-5">
        <p><i class="fa-solid fa-download"></i> Download <a target="_blank" href="/app/documents/PRECICE® Fishmeal IMP Assay Kit - User Manual - 0700-006">PRECICE® Fishmeal IMP Assay Kit</a> User Manual <i class="fa-solid fa-book-atlas"></i></p>
    </div>
</main>