<?php
global $title;
$title = "PRPP-S Assay Kit";

ob_start(); ?>
<meta name="keywords" content="PRPP-S Assay Kit, Non-radioactive assay, Phosphoribosylpyrophosphate synthetase, PRPP measurement, Enzymatic assay, Purine salvage pathway, Genetic disorders, Continuous monitoring, 96-well plate format, NADH formation, HGPRT enzyme, IMPDH enzyme, PRPP-S activity, Cell lysates, Convenient assay kit">
<meta name="description" content="Discover the PRECICE® PRPP-S Assay Kit, the first non-radioactive solution for precise measurement of PRPP-S activity in cellular lysates. Designed for convenience, this enzymatic assay utilizes highly active HGPRT and IMPDH enzymes to continuously monitor PRPP synthesis via NADH formation. Ideal for research on purine salvage pathways and genetic disorders, the kit offers a fast, reliable, and user-friendly protocol in a 96-well plate format. Enhance your studies with this innovative tool for accurate PRPP quantification.">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Product",
        "name": "PRECICE® PRPP Assay Kit",
        "description": "Non-radioactive enzymatic assay for quantification of PRPP in cell extracts. Based on HGPRT and IMPDH coupling reactions with spectrophotometric detection at 340 nm.",
        "brand": {
            "@type": "Brand",
            "name": "NOVOCIB"
        },
        "sku": "K0709-02-2",
        "category": "Research Assay Kits",
        "url": "https://www.novocib.com/convenient-assay-kits/prpp-s-assay-kit",
        "image": "https://www.novocib.com/app/img/PRPP-S-Assay-Kit.png",
        "offers": {
            "@type": "Offer",
            "url": "https://www.novocib.com/convenient-assay-kits/prpp-s-assay-kit",
            "priceCurrency": "EUR",
            "availability": "https://schema.org/InStock"
        },
        "mainEntity": [{
                "@type": "FAQPage",
                "mainEntity": [{
                        "@type": "Question",
                        "name": "What is the principle of the PRPP Assay Kit?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "PRPP is converted to IMP by HGPRT, then oxidized to XMP by IMPDH, producing NADH₂ measurable at 340 nm."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "What is the detection range?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "The assay quantifies PRPP between 8–400 µM. Extracts must be concentrated to detect physiological levels (0.1–1 µM)."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "What are the kit contents?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Includes cofactors (DTT, NAD), IMPDH enzyme, HGPRT Reaction Mixture, BLANK buffer, and a 96-well plate."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "How should PRPP instability be managed?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Use autoclaved solutions, precipitate enzymes during extraction, and verify stability with positive controls."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "How is the assay performed?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Extract PRPP with acetone precipitation, filter, dry, resuspend in BLANK or Reaction Mixture, and measure absorbance at 340 nm."
                        }
                    }
                ]
            },
            {
                "@type": "HowTo",
                "name": "PRPP Extraction Procedure",
                "description": "Step-by-step acetone-based extraction protocol for PRPP measurement.",
                "step": [{
                        "@type": "HowToStep",
                        "text": "Wash cell pellet with autoclaved PBS, centrifuge, and chill on ice."
                    },
                    {
                        "@type": "HowToStep",
                        "text": "Add cold acetone (−70 °C) to pellet and incubate 3h."
                    },
                    {
                        "@type": "HowToStep",
                        "text": "Centrifuge, recover clear supernatant, and filter with 0.2 µm PTFE syringe filter."
                    },
                    {
                        "@type": "HowToStep",
                        "text": "Dry extracts under reduced pressure, resuspend in BLANK or Reaction Mixture."
                    },
                    {
                        "@type": "HowToStep",
                        "text": "Measure absorbance at 340 nm using plate reader or spectrophotometer."
                    }
                ]
            }
        ]
    }
</script>
<?php $metas = ob_get_clean();

require_once $_SERVER['DOCUMENT_ROOT'] . "/app/templates/new_base.php";

echo Banner::gen("/app/img/prps-kit.jpg")
?>

<main class="container mt-5">
    <h2 class="underlinedTitle right mb-4">
        <span class="underlined novoblue right">PRECICE® PRPP-S Assay Kit</span>
    </h2>
    <h3 class="text-center mb-4">Spectrophotometric, 96‑well microplate format</h3>

    <div class="row">
        <div class="col-lg-6">
            <article>
                <p>
                    <strong>Phosphoribosylpyrophosphate synthetase (PRS; EC 2.7.6.1)</strong> is an essential enzyme in the purine salvage pathway, encoded by the <em>PRPS1</em> gene. Mutations in this gene can lead to
                    <strong>PRS superactivity</strong>, an X‑linked condition associated with excessive purine production.
                </p>
                <p>
                    Overactivity of <em>PRPS1</em> increases PRPP availability, resulting in excess uric acid — a breakdown product of purines. Elevated uric acid can cause gout (arthritis due to uric acid crystals in joints) and kidney or bladder stones.
                </p>
                <p>
                    Increased PRPP availability may result from PRPP‑S superactivity or <a href="/convenient-assay-kits/hprt-assay-kit">HPRT deficiency</a>.
                </p>
            </article>
        </div>

        <div class="col-lg-6 text-center">
            <img class="img-fluid" src="/app/img/PRPP-S-Assay-Kit.png"
                alt="PRECICE® PRPP-S Assay Kit reaction principle"
                title="PRECICE® PRPP-S Assay Kit reaction principle" />
            <h4 class="novo-blue mt-3">PRECICE® PRPP-S Assay Kit</h4>
            <h5>Ref. #K0709-04-2</h5>
        </div>
    </div>

    <section class="mt-4">
        <h4 class="novo-blue">Kit Description</h4>
        <p>
            The PRECICE® PRPP-S Assay Kit is the first non‑radioactive solution for precise measurement of PRPP‑S activity in cellular lysates. This enzymatic assay uses highly active HGPRT and IMPDH enzymes to continuously monitor PRPP synthesis via NADH formation.
            Designed for research on purine salvage pathways and genetic disorders, the kit provides a fast, reliable, and user‑friendly protocol in a 96‑well plate format.
        </p>
        <div class="col-lg-4 mx-auto mt-3 mb-4 text-center col-md-9">
            <img class="img-fluid border" src="/app/img/prpp-s-assay-kit.jpg"
                alt="Contents of PRECICE® PRPP-S Assay Kit"
                title="Kit components" />
        </div>
    </section>

    <section class="mt-4">
        <h4 class="novo-blue">Assay Principle</h4>
        <p>The assay continuously monitors PRPP synthesis through coupled enzymatic reactions:</p>
        <ol>
            <li>PRS catalyzes PRPP formation from ATP and ribose‑5‑phosphate.</li>
            <li>HGPRT converts PRPP and hypoxanthine (Hx) into IMP.</li>
            <li>IMPDH oxidizes IMP to XMP in the presence of NAD, producing NADH₂, measured spectrophotometrically at 340 nm.</li>
        </ol>
    </section>

    <section class="mt-4 text-center">
        <!-- Product database integration -->
        <?= Product::gen("PRECICE® PRPP-S Assay Kit", "convenient-assay-kits/prpp-s-assay-kit") ?>

        <p class="mt-3">
            <strong>Kit is provided in stable lyophilized form and
                <span class="text-danger">shipped without dry ice</span>.</strong>
        </p>
        <p class="mt-4 mb-5">
            <i class="fa-solid fa-download"></i>&nbsp;
            <a target="_blank" href="/app/documents/NovoCIB K0709-02-2 User Manual.pdf">
                <strong>User Manual (PDF)</strong>
            </a>
            <i class="fa-solid fa-book"></i>
        </p>
    </section>

    <section class="row bg-light mb-4 py-3 align-items-center">
        <div class="col-lg-3 text-center">
            <h4 class="novo-blue">Validated</h4>
        </div>
        <div class="col-lg-9">
            <p>
                Specific activity of PRS in human erythrocyte lysates measured with the kit is consistent with published data.
            </p>
        </div>
        <div class="col-lg-6 text-center">
            <img class="w-100" src="/app/img/PRPP-S-assay.png"
                alt="Validation graph of PRPP-S assay" />
        </div>
        <div class="col-lg-6">
            <table class="table table-sm">
                <tbody>
                    <tr>
                        <td><strong>RBC specimen 1 (n=4)</strong></td>
                        <td>65 ± 2 nmol/h/mg Hb</td>
                    </tr>
                    <tr>
                        <td><strong>RBC specimen 2 (n=4)</strong></td>
                        <td>76 ± 12 nmol/h/mg Hb</td>
                    </tr>
                    <tr>
                        <td><strong>RBC specimen 3 (n=4)</strong></td>
                        <td>78 ± 10 nmol/h/mg Hb</td>
                    </tr>
                    <tr>
                        <td><strong>Published data (Gordon et al., J. Inher. Metab. Dis. 10, 1987)</strong></td>
                        <td>102 ± 20 nmol/h/mg Hb</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <div class="my-4 pt-3 border">
        <section class="row mb-4">
            <div class="col-lg-3 text-center">
                <h4 class="novo-blue">Convenient</h4>
            </div>
            <div class="col-lg-9">
                <ul>
                    <li>Non‑radioactive</li>
                    <li>Continuous monitoring</li>
                    <li>No sample preparation required — cell lysates are directly used</li>
                </ul>
            </div>
        </section>

        <section class="row bg-light py-2 mx-0 mb-4">
            <div class="col-lg-3 text-center">
                <h4 class="novo-blue">Fast</h4>
            </div>
            <div class="col-lg-9 text-center">
                <p>Analyze up to 6 samples in duplicate within 1 hour.</p>
            </div>
        </section>

        <section class="row mb-4">
            <div class="col-lg-3 text-center">
                <h4 class="novo-blue">Principle Recap</h4>
            </div>
            <div class="col-lg-9">
                <p>
                    PRS activity is quantified by monitoring NADH₂ formation at 340 nm after sequential HGPRT and IMPDH reactions.
                </p>
            </div>
        </section>
        </divc>
</main>

<!-- Frequently asked questions -->
<section class="pt-4 pb-4 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="text-center mb-5">
                    <h2 class="h1 mb-3">Frequently Asked Questions</h2>
                    <p class="lead text-muted">Find answers to common questions about the PRECICE® PRPP-S Assay Kit</p>
                </div>

                <div class="accordion" id="faqAccordion">
                    <!-- Q1 -->
                    <div class="accordion-item border-0 shadow-sm mb-3">
                        <h3 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                What is the principle of the PRPP-S Assay Kit?
                            </button>
                        </h3>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                The assay couples PRPP synthesis with HGPRT and IMPDH reactions. PRPP is converted to IMP, then oxidized to XMP, producing NADH₂ that is continuously monitored at 340 nm.
                            </div>
                        </div>
                    </div>

                    <!-- Q2 -->
                    <div class="accordion-item border-0 shadow-sm mb-3">
                        <h3 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                What is the detection range of the assay?
                            </button>
                        </h3>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                The kit quantifies PRPP in the range of 8–400 µM. Since intracellular PRPP is typically 0.1–1 µM, extracts should be concentrated 10–100 fold for accurate measurement.
                            </div>
                        </div>
                    </div>

                    <!-- Q3 -->
                    <div class="accordion-item border-0 shadow-sm mb-3">
                        <h3 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                How should PRPP instability be managed?
                            </button>
                        </h3>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                PRPP is highly unstable. Use autoclaved solutions, precipitate cellular enzymes during extraction, and include positive controls to check for degradation.
                            </div>
                        </div>
                    </div>

                    <!-- Q4 -->
                    <div class="accordion-item border-0 shadow-sm mb-3">
                        <h3 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                What equipment is required?
                            </button>
                        </h3>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                A plate agitator, a plate reader with 340 nm filter or spectrophotometer, polypropylene tubes, and 0.2 µm PTFE syringe filters are required.
                            </div>
                        </div>
                    </div>

                    <!-- Q5 -->
                    <div class="accordion-item border-0 shadow-sm">
                        <h3 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                How fast can I run the assay?
                            </button>
                        </h3>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Up to 6 samples in duplicate can be analyzed simultaneously within 1 hour.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-center mt-5">
                    <p class="mb-3">Have more questions? Our team is here to help.</p>
                    <a href="/contact" class="btn btn-primary btn-lg">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="">
    <div class="references mt-5 pb-2 container">
        <h5 class="ms-5 pt-4 pb-3 novo-blue">Scientific Works citing <span class="text-secondary">NOVOCIB</span> PRPP-S Assay Kit:</h5>
        <ol>
            <li>
                <a target="_blank" href="https://www.nature.com/articles/s41589-023-01354-x">Direct stimulation of de novo nucleotide synthesis by O-GlcNAcylation 2024 L. Chen, Q. Zhou, P. Zhang, W. Tan, Y. Li, Z. Xu, J. Ma, G.M. Kupfer , Y. Pei, Q. Song 5, H. Pei Nature Chem Biol; 20(1):19-29</a>
            </li>
            <li>
                <a target="_blank" href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC11126974/">Ablation of Atp5if1 impairs metabolic reprogramming and proliferation of T lymphocytes and compromises mouse survival I. Romero-Carraminana, S. Dominguez-Zorita, P.B. Esparza-Molto, J. M. Cuezva (2024) iScience 27, 109863</a>
            </li>
            <li>
                <a href="https://www.scielo.org.mx/scielo.php?pid=S1665-14562021000200141&script=sci_arttext&tlng=en">Effect of hypoxia on purine metabolism in human skeletal muscle cells. (2021) Rivera-Pérez et al: Biotecnia / XXIII (2): 141-148
                </a>
            </li>
            <li>
                <a href="https://www.pulsus.com/scholarly-articles/prps1-is-a-regulative-for-neuroprotection-and-cells-regenerative-proliferation-4897.html">PRPS-1 is a regulative for neuroprotection and cells regenerative proliferation (2018), Danielyan KE, Vardanyan R, Paronyan ZK , Barkhudaryants IM , Chailyan SG, Bisharyan MS. J Biomol Biochem Vol.2 No.2 6-10</a>
            </li>
            <li>
                <a href="https://pubmed.ncbi.nlm.nih.gov/28432611/">Comparison of human erythrocyte purine nucleotide metabolism and blood purine and pyrimidine degradation product concentrations before and after acute exercise in trained and sedentary subjects (2018) W. Dudzinska, M Suska, A Lubkowska, K Jakubowska, M Olszewska, K Safranow, D Chlubek <br> J Physiol Sci 68(3):293-305.</a>
            </li>
            <li>
                <a href="https://pubmed.ncbi.nlm.nih.gov/23734909/">Cell cycle regulation of purine synthesis by phosphoribosyl pyrophosphate and inorganic phosphate (2013) Fridman; A. Saha; A. Chan; D.E. Casteel; R.B. Pilz; G.R. Boss Biochem J 454 (1): 91-99 A.</a>
            </li>
        </ol>
    </div>
</div>