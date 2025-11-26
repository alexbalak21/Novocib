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
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-trendline"></script>

<?= Banner::gen("/app/img/fish-farm.jpg", "coastal aquaculture facility") ?>
<main class="container mt-5">
    <h1 class="underlinedTitle center h2"><span class="underlined novoblue center">PRECICE® Fishmeal IMP Assay Kit</span></h2>
        <!-- Introduction -->
        <section class="row mb-5">
            <h2 class="text-center d-none">Introduction</h2>
            <div class="col-lg-4">
                <img class="img-fluid border" src="/app/img/fish-meal.jpg" alt="fishmeal image">
            </div>
            <div class="col-lg-8">
                <p>Fish muscle is naturally rich in adenosine triphosphate (ATP), the nucleotide that provides the energy for muscle contraction and swimming. Following capture and respiratory arrest, ATP in fish muscle is rapidly hydrolyzed to inosine 5'-monophosphate (IMP). Because IMP is unstable and can be further degraded to inosine and hypoxanthine by autolytic and bacterial enzymes, its abundance is widely recognized as a biochemical indicator of fish freshness. Consequently, fishmeal prepared from fresh raw material is naturally enriched in dietary IMP.</p>
                <p>Among available sources, anchovy fishmeal is especially valued in aquaculture for its high digestibility, protein content, balanced amino acid profile, and essential fatty acids. While anchovy fishmeal naturally contains nucleotides, IMP levels are highly variable (Table 1) and are not consistently reported in standard composition tables.</p>
            </div>
        </section>


        <!-- Principle -->
        <section class="my-5">
            <h2 class="h3 ms-5">Principle</h2>
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
        </section>

        <!-- IMP concentration -->
        <section class="my-5 row align-items-center">
            <h2 class="text-center h3 mb-2">IMP concentration comparison</h2>
            <div class="table-responsive col-lg-6">
                <table class="table table-bordered table-striped align-middle text-center imp-concentration-comparison">
                    <thead class="table-light">
                        <tr>
                            <th>Sample</th>
                            <th>IMP (g/kg) - HPLC</th>
                            <th class="novoblue">IMP (g/kg) - Enzymatic PRECICE Kit</th>
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

            <div class="col-lg-6"><canvas id="impChart" width="600" height="400"></canvas></div>

            <div class="table-responsive col-12">
                <table class="table table-bordered text-center align-middle">
                    <thead class="table-light">
                        <tr>
                            <th style="width: 50%;">R² /HPLC data</th>
                            <th style="width: 50%;">Recovery (Enzymatic versus HPLC)</th>
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
            <p class="text-center">The correlation between HPLC and PRECICE kit measurements is extremely strong: Pearson r ≈ 0.99 and R² ≈ 0.98, showing that both methods yield highly consistent results.</p>
        </section>


        <!-- Nucleotides content in fishmeal -->
        <section class="my-5 pt-4 ">
            <h2 class="text-center mb-4">Nucleotides content in fishmeal</h2>
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
        </section>

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

        <div class="text-end mt-3 mb-5">
            <p><i class="fa-solid fa-download"></i> Download <a target="_blank" href="/app/documents/PRECICE® Fishmeal IMP Assay Kit - User Manual - 0700-006.pdf">PRECICE® Fishmeal IMP Assay Kit</a> User Manual <i class="fa-solid fa-book-atlas"></i></p>
        </div>
</main>

<style>
    .imp-concentration-comparison tr td:nth-child(3) {
        color: var(--novo-blue);
    }
</style>
<script>
    const ctx = document.getElementById('impChart').getContext('2d');

    const dataPoints = [{
            x: 1.33,
            y: 1.26
        },
        {
            x: 1.95,
            y: 1.90
        },
        {
            x: 2.30,
            y: 2.13
        },
        {
            x: 0.69,
            y: 0.58
        },
        {
            x: 2.91,
            y: 3.00
        },
        {
            x: 2.11,
            y: 2.11
        },
        {
            x: 0.90,
            y: 0.84
        },
        {
            x: 1.64,
            y: 1.56
        },
        {
            x: 2.13,
            y: 2.36
        },
        {
            x: 3.94,
            y: 4.16
        }
    ];

    new Chart(ctx, {
        type: 'scatter',
        data: {
            datasets: [{
                label: 'IMP Concentration (g/kg)',
                data: dataPoints,
                backgroundColor: 'rgb(55, 113, 200)',
                borderColor: 'rgb(55, 113, 200)',
                pointRadius: 5,
                trendlineLinear: {
                    style: "rgba(255,105,180,0.8)",
                    lineStyle: "solid",
                    width: 2,
                    projection: true,
                    label: "y = 1.0166x"
                }
            }]
        },
        options: {
            plugins: {
                legend: {
                    display: false
                }
            },
            scales: {
                x: {
                    title: {
                        display: true,
                        text: 'IMP (g/kg) by HPLC'
                    },
                    beginAtZero: false
                },
                y: {
                    title: {
                        display: true,
                        text: 'IMP (g/kg) by Enzymatic Kit'
                    },
                    beginAtZero: false
                }
            }
        }
    });
</script>