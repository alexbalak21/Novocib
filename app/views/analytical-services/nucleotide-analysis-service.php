<?php
global $title;
$title = "TPAN Nucleotide Analysis Service (HPLC-UV)";

ob_start(); ?>
<meta name="keywords" content="NOVOCIB, HPLC analysis, nucleotides, nucleosides, nucleic acids, RNA, DNA, 5'AMP, 5'GMP, 5'IMP, 5'CMP, 5'UMP, enzymatic hydrolysis, acid hydrolysis, ion-paired chromatography, dietary nucleotides, food chemistry, feed ingredients">
<meta name="description" content="NOVOCIB provides accurate HPLC-UV analysis of dietary nucleotides, nucleosides, and nucleic acids in food and feed. Services include quantification of 5'-nucleotides (AMP, GMP, IMP, CMP, UMP), RNA and DNA analysis, and comparison of acid hydrolysis versus enzymatic hydrolysis methods for precise and eco-friendly results.">
<meta name="robots" content="index,follow,max-snippet:-1,max-image-preview:large,max-video-preview:-1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes">
<link rel="canonical" href="https://www.novocib.com/nucleotide-analysis-service">

<meta property="og:type" content="website">
<meta property="og:site_name" content="NOVOCIB">
<meta property="og:url" content="https://www.novocib.com/nucleotide-analysis-service">
<meta property="og:title" content="Nucleotide Analysis Service (TPAN) by Enzymatic HPLC | NOVOCIB">
<meta property="og:description" content="TPAN analysis of nucleotides, nucleosides, bases, RNA and DNA by enzymatic hydrolysis coupled to ion-paired HPLC-UV. Compare acid and enzymatic methods and request an analysis.">
<meta property="og:image" content="https://www.novocib.com/app/img/hplc-photo.jpg">
<meta property="og:image:alt" content="NOVOCIB HPLC system for nucleotide analysis services">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Nucleotide Analysis Service (TPAN) by Enzymatic HPLC | NOVOCIB">
<meta name="twitter:description" content="Accurate TPAN analysis of food, feed and biological samples with enzymatic hydrolysis and ion-paired HPLC-UV.">
<meta name="twitter:image" content="https://www.novocib.com/app/img/hplc-photo.jpg">
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "name": "Nucleotide Analysis Service",
        "serviceType": "Total Potentially Available Nucleotides (TPAN) analysis",
        "description": "NOVOCIB provides TPAN analysis by enzymatic hydrolysis coupled to ion-paired HPLC-UV for quantification of nucleotides, nucleosides, bases, RNA and DNA in food, feed and biological samples.",
        "url": "https://www.novocib.com/nucleotide-analysis-service",
        "image": "https://www.novocib.com/app/img/hplc.jpg",
        "provider": {
            "@type": "Organization",
            "name": "NOVOCIB",
            "url": "https://www.novocib.com"
        },
        "areaServed": "Worldwide",
        "offers": [{
                "@type": "Offer",
                "sku": "S1200-01-SOL",
                "name": "Full spectra soluble nucleotides analysis",
                "url": "https://www.novocib.com/inquiry?ref=S1200-01-SOL",
                "price": "300.00",
                "priceCurrency": "EUR",
                "availability": "https://schema.org/InStock"
            },
            {
                "@type": "Offer",
                "sku": "S1200-02-RNA",
                "name": "Full spectra nucleotides analysis (RNA)",
                "url": "https://www.novocib.com/inquiry?ref=S1200-02-RNA",
                "price": "350.00",
                "priceCurrency": "EUR",
                "availability": "https://schema.org/InStock"
            },
            {
                "@type": "Offer",
                "sku": "S1200-03-NA",
                "name": "Total nucleic acids analysis (RNA + DNA)",
                "url": "https://www.novocib.com/inquiry?ref=S1200-03-NA",
                "price": "375.00",
                "priceCurrency": "EUR",
                "availability": "https://schema.org/InStock"
            },
            {
                "@type": "Offer",
                "sku": "S1200-04-SOL-NA",
                "name": "Full spectra soluble nucleotides + RNA + DNA analysis",
                "url": "https://www.novocib.com/inquiry?ref=S1200-04-SOL-NA",
                "price": "400.00",
                "priceCurrency": "EUR",
                "availability": "https://schema.org/InStock"
            }
        ]
    }
</script>
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [{
                "@type": "Question",
                "name": "What is the advantage of enzymatic hydrolysis compared to acid hydrolysis?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Enzymatic hydrolysis preserves the distinction between free nucleotides and polymeric nucleic acids, providing accurate and functionally relevant results. Acid hydrolysis is faster but collapses all compounds into bases, losing origin information."
                }
            },
            {
                "@type": "Question",
                "name": "Which compounds are quantified in NOVOCIB analysis?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "NOVOCIB quantifies free bases, nucleosides, nucleotide monophosphates such as AMP, GMP, IMP, CMP and UMP, and nucleic acids including RNA and DNA."
                }
            },
            {
                "@type": "Question",
                "name": "Is the enzymatic method more sustainable than acid hydrolysis?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Acid hydrolysis generates hazardous corrosive waste requiring neutralization and disposal. Enzymatic hydrolysis uses biodegradable enzymes and generally produces a lower-hazard waste stream."
                }
            }
        ]
    }
</script>


<?php $metas = ob_get_clean();

require_once $_SERVER['DOCUMENT_ROOT'] . "/app/templates/new_base.php";
?>
<?= Banner::gen("/app/img/hplc.jpg", "Nucleotide and Nucleic Acid Analytical Service") ?>

<main class="container mt-5">
    <!-- Title & Intro -->
    <div class="text-center mb-5" id="main">
        <h1 class="underlinedTitle">
            <span class="underlined novoblue">Total Potentially Available Nucleotides and Nucleic Acids Analysis by Enzymatic-HPLC approach</span>
        </h1>
        <p class="col-lg-10 mx-auto lead">
            <span class="novo-blue">NOVOCIB</span> provides advanced analytical services
            using enzymatic approach coupled to ion-paired high-performance liquid chromatography
            (HPLC-UV) for complete characterization of Total Potentially Available Nucleotides (nucleotides, nucleosides, bases,
            and nucleic acids) present in food, feed, and biological samples.
        </p>
    </div>
    <article class="my-5">

        <!-- Desktop table: full viewport width, outside container -->
        <div class="d-none d-md-block container-fluid px-4 mb-0">
            <table class="table product w-100" style="margin-bottom: 0;">
                <thead>
                    <tr>
                        <th style="width: 130px;">#REF</th>
                        <th>PRODUCT NAME</th>
                        <th class="text-center text-nowrap" style="width: 120px;">PRICE</th>
                        <th style="width: 120px;"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-nowrap">#S1200-01-SOL</td>
                        <td>Full spectra of soluble purine and pyrimidine nucleotides, including bases (adenine, guanine, hypoxanthine, cytidine, uracil), nucleosides (cytidine, uridine, guanosine, inosine, adenosine), and nucleotide monophosphates (CMP, UMP, GMP, IMP, AMP) analyzed by Ion paired reverse phase HPLC UV analysis.</td>
                        <td class="price text-center text-nowrap">€ 300.00</td>
                        <td class="text-center">
                            <a class="btn btn-primary" href="/inquiry?ref=S1200-01-SOL&amp;price=300&amp;product=Soluble%20Nucleotides%20Analysis">Inquiry <i class="fa-solid fa-comment"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-nowrap">#S1200-02-RNA</td>
                        <td>Full spectra of soluble bases, nucleosides, NMP and RNA characterized by ion paired HPLC UV, with quantitative assessment of NMPs generated by nuclease digestion of RNA by comparative analysis before and after nuclease digestion of RNA to NMPs.</td>
                        <td class="price text-center text-nowrap">€ 350.00</td>
                        <td class="text-center">
                            <a class="btn btn-primary" href="/inquiry?ref=S1200-02-RNA&amp;price=350&amp;product=RNA%20Analysis">Inquiry <i class="fa-solid fa-comment"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-nowrap">#S1200-03-NA</td>
                        <td>Total nucleic acid content (RNA and DNA), analyzed by nuclease digestion of RNA and DNA to corresponding NMPs and dNMPs, and quantitatively analysis by ion-paired reverse phase HPLC UV.</td>
                        <td class="price text-center text-nowrap">€ 375.00</td>
                        <td class="text-center">
                            <a class="btn btn-primary" href="/inquiry?ref=S1200-03-NA&amp;price=375&amp;product=Nucleic%20Acids%20Analysis">Inquiry <i class="fa-solid fa-comment"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-nowrap">#S1200-04-SOL-NA</td>
                        <td>Full spectra of soluble bases, nucleosides, NMPs, RNA, and DNA characterized by ion paired HPLC UV, with quantitative assessment of NMPs and dNMPs generated by nuclease digestion of RNA and DNA.</td>
                        <td class="price text-center text-nowrap">€ 400.00</td>
                        <td class="text-center">
                            <a class="btn btn-primary" href="/inquiry?ref=S1200-04-SOL-NA&amp;price=400&amp;product=Nucleic%20Acids%20Analysis">Inquiry <i class="fa-solid fa-comment"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Mobile cards (hidden on desktop) -->
        <div class="d-md-none container px-3 d-flex flex-column gap-3">

            <div class="card border">
                <div class="card-body">
                    <p class="text-muted small mb-1">#S1200-01-SOL</p>
                    <p class="card-text">Full spectra of soluble purine and pyrimidine nucleotides, including bases (adenine, guanine, hypoxanthine, cytidine, uracil), nucleosides (cytidine, uridine, guanosine, inosine, adenosine), and nucleotide monophosphates (CMP, UMP, GMP, IMP, AMP) analyzed by Ion paired reverse phase HPLC UV analysis.</p>
                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <span class="fw-semibold fs-5">€ 300.00</span>
                        <a class="btn btn-primary btn-sm" href="/inquiry?ref=S1200-01-SOL&amp;price=300&amp;product=Soluble%20Nucleotides%20Analysis">Inquiry <i class="fa-solid fa-comment"></i></a>
                    </div>
                </div>
            </div>

            <div class="card border">
                <div class="card-body">
                    <p class="text-muted small mb-1">#S1200-02-RNA</p>
                    <p class="card-text">Full spectra of soluble bases, nucleosides, NMP and RNA characterized by ion paired HPLC UV, with quantitative assessment of NMPs generated by nuclease digestion of RNA by comparative analysis before and after nuclease digestion of RNA to NMPs.</p>
                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <span class="fw-semibold fs-5">€ 350.00</span>
                        <a class="btn btn-primary btn-sm" href="/inquiry?ref=S1200-02-RNA&amp;price=350&amp;product=RNA%20Analysis">Inquiry <i class="fa-solid fa-comment"></i></a>
                    </div>
                </div>
            </div>

            <div class="card border">
                <div class="card-body">
                    <p class="text-muted small mb-1">#S1200-03-NA</p>
                    <p class="card-text">Total nucleic acid content (RNA and DNA), analyzed by nuclease digestion of RNA and DNA to corresponding NMPs and dNMPs, and quantitatively analysis by ion-paired reverse phase HPLC UV.</p>
                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <span class="fw-semibold fs-5">€ 375.00</span>
                        <a class="btn btn-primary btn-sm" href="/inquiry?ref=S1200-03-NA&amp;price=375&amp;product=Nucleic%20Acids%20Analysis">Inquiry <i class="fa-solid fa-comment"></i></a>
                    </div>
                </div>
            </div>

            <div class="card border">
                <div class="card-body">
                    <p class="text-muted small mb-1">#S1200-04-SOL-NA</p>
                    <p class="card-text">Full spectra of soluble bases, nucleosides, NMPs, RNA, and DNA characterized by ion paired HPLC UV, with quantitative assessment of NMPs and dNMPs generated by nuclease digestion of RNA and DNA.</p>
                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <span class="fw-semibold fs-5">€ 400.00</span>
                        <a class="btn btn-primary btn-sm" href="/inquiry?ref=S1200-04-SOL-NA&amp;price=400&amp;product=Nucleic%20Acids%20Analysis">Inquiry <i class="fa-solid fa-comment"></i></a>
                    </div>
                </div>
            </div>

        </div>

        <div class="container">
            <p class="text-muted text-center mt-3"><em>Updated on July 20, 2026.</em></p>
            <p class="lead text-center mt-4 mb-5"><b>Analytical method</b>: Ion-paired reverse-phase UV-HPLC (Agilent 1200) before and after enzymatic hydrolysis of nucleic acids (RNA and DNA) with P1 nuclease <a href="#references">(ref. 1-3)</a></p>
        </div>

    </article>

    <!-- Section: Method Validation -->
    <section class="my-5" id="method-validation">
        <h2 class="novo-blue mb-4 text-center">NOVOCIB's Method Validation</h2>

        <h3 class="novo-blue mb-3">Introduction</h3>
        <p>
            Nucleotides are considered semi-essential nutrients, as endogenous synthesis does not always meet
            physiological demand, particularly during periods of rapid growth, immune activation, or intestinal
            repair. In infants, dietary nucleotide supplementation has been shown to enhance humoral antibody
            responses to vaccination, as demonstrated by Pickering et al. (1998). In aquaculture, nucleotide-fortified
            feeds are widely recognized to improve intestinal health, growth performance, immune competence, gut
            integrity, and stress resistance in fish and shrimp.
        </p>
        <p>
            On the other hand, nucleotides and nucleic acids are also a major source of purines, and excessive
            human consumption may lead to overproduction of uric acid. This is particularly relevant for single-cell
            proteins (SCP), a new sustainable alternative to animal or plant proteins. SCPs are produced from
            fast-growing microbial biomass and purified by microfiltration, a process that concentrates not only
            proteins but also polymeric DNA and RNA, resulting in high nucleotide content. FAO/WHO
            recommended that SCP intended for human consumption should be processed to reduce nucleic acids to
            ~2% of dry matter, because high RNA intake increases purine load and uric-acid production.
        </p>
        <p class="fw-semibold">
            To ensure compliance with nutritional and regulatory requirements, a new analytical method was
            developed and validated to accurately quantify nucleotides and nucleic acids in complex matrices. The
            method is applicable to nucleotide ingredients, yeast and SCP protein as well as final feed products,
            enabling robust quality control and monitoring of purine load in formulations containing microbial
            proteins.
        </p>

        <h3 class="novo-blue mt-5 mb-4">Analytical Method Overview</h3>
        <p>
            NOVOCIB's analytical method integrates two complementary modern technologies to achieve accurate
            quantification of free nucleotides, nucleosides, bases, and polymeric nucleic acids (RNA and DNA)
            in complex biological ingredients and feed matrices.
        </p>

        <!-- CSS Flowchart + numbered points -->
        <div class="row align-items-center my-4 g-4">
            <!-- Flowchart -->
            <div class="col-lg-6">
                <style>
                    .flow-box {
                        background-color: #2e75b6;
                        color: #fff;
                        border-radius: 6px;
                        padding: 14px 18px;
                        text-align: center;
                        font-size: 0.92rem;
                        font-weight: 500;
                        line-height: 1.35;
                        position: relative;
                    }

                    .flow-arrow-down {
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        height: 28px;
                        color: #2e75b6;
                        font-size: 2rem;
                    }

                    .flow-branch-row {
                        display: grid;
                        grid-template-columns: 1fr 1fr;
                        gap: 16px;
                        position: relative;
                    }

                    .flow-branch-row::before {
                        content: '';
                        position: absolute;
                        top: 0;
                        left: 25%;
                        right: 25%;
                        height: 2px;
                        background: #2e75b6;
                    }

                    .flow-branch-col {
                        display: flex;
                        flex-direction: column;
                        align-items: center;
                    }

                    .flow-branch-col .flow-arrow-down {
                        margin-top: 0;
                    }
                </style>

                <div class="px-2">
                    <!-- Top: Biological Sample -->
                    <div class="flow-box mx-auto" style="max-width: 220px;">
                        Biological Sample
                    </div>

                    <!-- Branch connector line + two down arrows -->
                    <div class="flow-branch-row mt-0 pt-0" style="margin-top: 0;">
                        <div class="flow-branch-col">
                            <div class="flow-arrow-down">&#8595;</div>
                            <div class="flow-box w-100">
                                IP-RP UV-HPLC analysis for bases, nucleoside and NMP
                            </div>
                        </div>
                        <div class="flow-branch-col">
                            <div class="flow-arrow-down">&#8595;</div>
                            <div class="flow-box w-100">
                                Nuclease P1 digestion of RNA and DNA to NMP and dNMP
                            </div>
                            <div class="flow-arrow-down">&#8595;</div>
                            <div class="flow-box w-100">
                                IP-RP HPLC analysis for bases, nucleosides NMP, RNA-derived NMP and DNA-derived dNMP
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Numbered points -->
            <div class="col-lg-6">
                <ol class="ps-3">
                    <li class="mb-3">
                        <strong>Ion-Pair Reverse-Phase UV-HPLC (IP-RP HPLC–DAD)</strong> enables simultaneous
                        separation and quantification of bases, nucleosides, and nucleotides in a single analytical run.
                    </li>
                    <li class="mb-3">
                        <strong>Specific Nuclease Hydrolysis (Nuclease P1)</strong> performs complete and highly
                        specific digestion of RNA and DNA into ribo- and deoxy-monophosphate nucleotides (NMPs
                        and dNMPs), followed by comparative HPLC analysis.
                    </li>
                    <li class="mb-3">
                        <strong>Comparative Spectral Analysis</strong> — evaluation of IP-RP UV-HPLC spectra before
                        and after nuclease digestion allows precise calculation of total nucleic acids, free bases, free
                        nucleosides, and free nucleotides.
                    </li>
                </ol>
            </div>
        </div>
    </section>

    <!-- Section: Chemical Diversity -->
    <section class="row mb-5">
        <article class="col-lg-6">
            <h2 class="novo-blue">Chemical Diversity of Nucleotides</h2>
            <p>
                Nucleotides form a chemically diverse family of inter convertible molecules that includes nucleobases, nucleosides, and mono , di , and triphosphate nucleotides. These compounds differ dramatically in charge, polarity, and hydrophobicity, which makes their simultaneous separation analytically challenging.
            </p>
            <ul>
                <li>Nucleobases are weak bases with limited hydrophobicity.</li>
                <li>Nucleosides are neutral but highly polar.</li>
                <li>Nucleotides carry one to three negative charges due to their phosphate groups, making them strongly hydrophilic and poorly retained on classical reversed phase columns.</li>
            </ul>
            <p>
                Because of these physicochemical differences, standard reversed phase chromatography cannot retain or resolve all these molecules in a single run.
            </p>
            <p><a class="text-secondary" href="#ref1">(1) J L Leach, J H Baxter, B E Molitor, M B Ramstack, M L Masor Total potentially available nucleosides of human milk by stage of lactation. Am J Clin Nutr 1995 . Jun;61(6):1224-30</a></p>
            <p><a class="text-secondary" href="#ref2">(2) Tressler, R., Ramstack, M., White, N., Molitor, B., & Masor, M. (1998). Total potentially available (ribo)nucleosides (TPAN) in human milk from Asian women. Journal of Pediatric Gastroenterology and Nutrition, 26(5)</a></p>

        </article>
        <article class="col-lg-6">
            <figure class="border">
                <img class="img-fluid"
                    src="/app/img/purine-pyrimidine-bases-nucleosides-nucleotides.jpg"
                    alt="Structures of purine and pyrimidine bases, nucleosides, and nucleotides" />
                <figcaption class="text-muted text-center">
                    <small><b>Fig. 1:</b> Purine and pyrimidine bases, nucleosides, and nucleotides.</small>
                </figcaption>
            </figure>
        </article>
    </section>

    <!-- Section: Traditional Acid Hydrolysis -->
    <section class="row mb-5">
        <article class="col-lg-6">
            <h2 class="novo-blue h3">Traditional Acid Hydrolysis Method</h2>
            <p>
                The conventional approach uses perchloric acid hydrolysis followed by reverse-phase HPLC:
            </p>
            <ol>
                <li>Strong acid hydrolyzes nucleic acids, nucleotides, and nucleosides into free bases.</li>
                <li>Bases are separated by reverse-phase HPLC.</li>
            </ol>
            <p><strong>Advantages:</strong> Simple, fast, widely used.</p>
            <p><strong>Limitations:</strong></p>
            <ul>
                <li>Non-specific: cannot distinguish free NMP from nucleosides or nucleic acids.</li>
                <li>Functional mismatch: RNA-rich samples appear identical to free NMP-rich samples.</li>
                <li>Harsh conditions: acids degrade/modify analytes, introducing artifacts.</li>
                <li>Environmental impact: corrosive waste requiring special disposal.</li>
            </ul>
            <!-- Figure & Trigger modal -->
            <figure class="mt-4 border">
                <img src="/app/img/nucleotide-analysis-traditional-acid-hydrolysis-method.jpg"
                    alt="Nucleotide analysis Traditional Acid Hydrolysis Method"
                    class="img-fluid"
                    style="cursor: pointer;"
                    data-bs-toggle="modal"
                    data-bs-target="#acidHydrolysisModal" />
                <figcaption class="text-muted text-center">
                    <small class="text-muted">Schematic of traditional acid hydrolysis method for nucleotide analysis. <i class="fa-solid fa-arrow-pointer"></i></small>
                </figcaption>
            </figure>
            <?= Modal::gen("acidHydrolysisModal", "/app/img/nucleotide-analysis-traditional-acid-hydrolysis-method.jpg", "Nucleotide analysis Traditional Acid Hydrolysis Method", "Schematic of traditional acid hydrolysis method for nucleotide analysis.") ?>
        </article>
        <article class="col-lg-6">
            <figure class="border">
                <img class="img-fluid"
                    src="/app/img/hplc-chromatogram-heterocyclic-bases.jpg"
                    alt="Chromatogram of heterocyclic bases separated by reverse-phase HPLC"
                    title="Chromatogram of bases"
                    style="cursor: pointer;"
                    data-bs-toggle="modal"
                    data-bs-target="#heterocyclicBasesModal" />
                <figcaption class="text-muted text-center">
                    <small><b>Fig. 2:</b> Chromatogram of heterocyclic bases separated after acid hydrolysis.</small>
                </figcaption>
            </figure>
            <?= Modal::gen("heterocyclicBasesModal", "/app/img/hplc-chromatogram-heterocyclic-bases.jpg", "Chromatogram of heterocyclic bases separated by reverse-phase HPLC", "Chromatogram of heterocyclic bases separated after acid hydrolysis.") ?>
        </article>
    </section>

    <!-- Section: NOVOCIB Enzymatic/HPLC Approach -->
    <section class="row mb-5">
        <article class="col-lg-6">
            <h2 class="novo-blue h3">NOVOCIB’s Enzymatic Hydrolysis + Ion-Paired HPLC</h2>
            <p>
                NOVOCIB’s method couples enzymatic hydrolysis with ion-paired reverse-phase HPLC and diode array detection:
            </p>
            <ol>
                <li>Ion-paired chromatography separates bases, nucleosides, and nucleotides (mono-, di-, triphosphates) in one run.</li>
                <li>Nucleic acids (RNA/DNA) are enzymatically hydrolyzed to NMP/dNMP and quantified before and after nuclease treatment.</li>
            </ol>
            <p><strong>Advantages:</strong></p>
            <ul>
                <li>Specific and accurate: distinguishes nucleotides, nucleosides, bases, and nucleic acids.</li>
                <li>No chemical modification of analytes.</li>
                <li>Relevant: reflects true composition (taste-active NMP vs inert RNA).</li>
                <li>Greener: reduced environmental impact compared to acid hydrolysis.</li>
            </ul>
            <p>
                <strong>Why enzymatic-HPLC?</strong> Acid hydrolysis is fast but blind, collapsing all compounds into bases.
                Enzymatic-HPLC is slower but precise, preserving distinctions critical for food chemistry, nutrition, and pharmacology.
            </p>
        </article>
        <article class="col-lg-6">
            <figure class="border">
                <img src="/app/img/rna-dna-hplc-chromatogram-nuclease.jpg"
                    alt="Nucleotide spectra before and after nuclease treatment"
                    class="img-fluid"
                    style="cursor: pointer;"
                    data-bs-toggle="modal"
                    data-bs-target="#nucleotideBeforeAfterModal" />
                <figcaption class="text-muted text-center">
                    <small><b>Fig. 3:</b> Nucleotide spectra of yeast extract before (blue) and after (red) nuclease treatment. <i class="fa-solid fa-arrow-pointer"></i></small>
                </figcaption>
            </figure>
            <?= Modal::gen("nucleotideBeforeAfterModal", "/app/img/rna-dna-hplc-chromatogram-nuclease.jpg", "Nucleotide spectra before and after nuclease treatment", "Nucleotide spectra of yeast extract before (blue) and after (red) nuclease treatment.") ?>
        </article>

        <div class="col-lg-8 mx-auto mt-3 d-flex justify-content-center">
            <figure class="border">
                <figcaption class="text-muted text-center">
                    <small>Schematic of enzymatic hydrolysis method for nucleotide analysis. <i class="fa-solid fa-arrow-pointer"></i></small>
                </figcaption>
                <img src="/app/img/Nucleotide-Analysis-by-Enzymatic-Hydrolysis-coupled-to-Ion-Paired-HPLC.jpg"
                    alt="Nucleotide analysis by Enzymatic Hydrolysis coupled to Ion-Paired HPLC"
                    class="w-100"
                    style="cursor: pointer;"
                    data-bs-toggle="modal"
                    data-bs-target="#enzymaticHydrolysisModal" />
            </figure>
            <?= Modal::gen("enzymaticHydrolysisModal", "/app/img/Nucleotide-Analysis-by-Enzymatic-Hydrolysis-coupled-to-Ion-Paired-HPLC.jpg", "Nucleotide analysis by Enzymatic Hydrolysis coupled to Ion-Paired HPLC", "Schematic of enzymatic hydrolysis method for nucleotide analysis.") ?>
        </div>
        <div class="col-lg-8 mx-auto mt-3 border p-3 mb-5">
            <p class="lead text-secondary">In addition to protocol developed by Leach et al. (1995) that does not distinguish between ribonucleotides
                (RNA-derived) and deoxyribonucleotides (DNA-derived), NOVOCIB's approach allows separate quantification of
                ribo-NMP (RNA) and dNMP (DNA).</p>
        </div>
    </section>



    <!-- Section: Analytical Standards -->
    <section class="my-5" id="analytical-standards">
        <h2 class="novo-blue mb-3">Analytical Standards</h2>
        <p>
            Since commercially available nucleobases, nucleosides, and nucleotide mono-, di-, and triphosphates
            may contain unspecified amounts of residual salts and water, NOVOCIB verifies the true molar
            concentration of each standard using published molar absorption coefficients (see tables below).
            This verification step ensures a reproducible concentration of analytes from different sources for
            the HPLC calibration. The integrity of every standard is controlled by HPLC analysis.
        </p>

        <!-- Table 1: NMP -->
        <h3 class="h6 fw-semibold mt-4 mb-2">Table 1. Nucleotide monophosphates (NMP) molar absorption coefficients, measurement wavelength and pH</h3>
        <div class="table-responsive mb-4">
            <table class="table table-bordered table-striped align-middle">
                <thead class="table-light">
                    <tr>
                        <th>Compound</th>
                        <th class="text-center">Wavelength &Lambda; max, nm</th>
                        <th class="text-center">Molar extinction coefficient &epsilon; max (M<sup>-1</sup> cm<sup>-1</sup>)</th>
                        <th class="text-center">pH</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Cytidine 5'-monophosphate (CMP)</td>
                        <td class="text-center">272</td>
                        <td class="text-center">9 000</td>
                        <td class="text-center">7</td>
                    </tr>
                    <tr>
                        <td>Uridine 5'-monophosphate (UMP)</td>
                        <td class="text-center">262</td>
                        <td class="text-center">10 000</td>
                        <td class="text-center">7</td>
                    </tr>
                    <tr>
                        <td>Guanosine 5'-monophosphate (GMP)</td>
                        <td class="text-center">250</td>
                        <td class="text-center">14 200</td>
                        <td class="text-center">7</td>
                    </tr>
                    <tr>
                        <td>Inosine 5'-monophosphate (IMP)</td>
                        <td class="text-center">248</td>
                        <td class="text-center">12 300</td>
                        <td class="text-center">Not communicated</td>
                    </tr>
                    <tr>
                        <td>Adenosine 5'-monophosphate (AMP)</td>
                        <td class="text-center">259</td>
                        <td class="text-center">15 400</td>
                        <td class="text-center">7</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Table 2: Nucleobases -->
        <h3 class="h6 fw-semibold mt-4 mb-2">Table 2. Nucleobases molar absorption coefficients, measurement wavelength and pH</h3>
        <div class="table-responsive mb-4">
            <table class="table table-bordered table-striped align-middle">
                <thead class="table-light">
                    <tr>
                        <th>Compound</th>
                        <th class="text-center">Wavelength &Lambda; max, nm</th>
                        <th class="text-center">Molar extinction coefficient &epsilon; max (M<sup>-1</sup> cm<sup>-1</sup>)</th>
                        <th class="text-center">pH</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Cytosine (C)</td>
                        <td class="text-center">267</td>
                        <td class="text-center">6 100</td>
                        <td class="text-center">8.8</td>
                    </tr>
                    <tr>
                        <td>Uracil (U)</td>
                        <td class="text-center">259</td>
                        <td class="text-center">8 200</td>
                        <td class="text-center">7</td>
                    </tr>
                    <tr>
                        <td>Guanine (G)</td>
                        <td class="text-center">275</td>
                        <td class="text-center">8 100</td>
                        <td class="text-center">6.2</td>
                    </tr>
                    <tr>
                        <td>Hypoxanthine (Hx)</td>
                        <td class="text-center">248</td>
                        <td class="text-center">10 700</td>
                        <td class="text-center">Not communicated</td>
                    </tr>
                    <tr>
                        <td>Adenine (A)</td>
                        <td class="text-center">260</td>
                        <td class="text-center">13 400</td>
                        <td class="text-center">Not communicated</td>
                    </tr>
                    <tr>
                        <td>Xanthine (X)</td>
                        <td class="text-center">271</td>
                        <td class="text-center">9 200</td>
                        <td class="text-center">7.5</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Table 3: Nucleosides -->
        <h3 class="h6 fw-semibold mt-4 mb-2">Table 3. Nucleosides molar absorption coefficients, measurement wavelength and pH</h3>
        <div class="table-responsive mb-4">
            <table class="table table-bordered table-striped align-middle">
                <thead class="table-light">
                    <tr>
                        <th>Compound</th>
                        <th class="text-center">Wavelength &Lambda; max, nm</th>
                        <th class="text-center">Molar extinction coefficient &epsilon; max (M<sup>-1</sup> cm<sup>-1</sup>)</th>
                        <th class="text-center">pH</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Cytidine (CR)</td>
                        <td class="text-center">271</td>
                        <td class="text-center">9 100</td>
                        <td class="text-center">8.2</td>
                    </tr>
                    <tr>
                        <td>Uridine (UR)</td>
                        <td class="text-center">261</td>
                        <td class="text-center">10 100</td>
                        <td class="text-center">7.3</td>
                    </tr>
                    <tr>
                        <td>Guanosine (GR)</td>
                        <td class="text-center">252</td>
                        <td class="text-center">13 700</td>
                        <td class="text-center">5.5–7</td>
                    </tr>
                    <tr>
                        <td>Inosine (IR)</td>
                        <td class="text-center">249</td>
                        <td class="text-center">12 200</td>
                        <td class="text-center">6–7.5</td>
                    </tr>
                    <tr>
                        <td>Adenosine (AR)</td>
                        <td class="text-center">260</td>
                        <td class="text-center">15 100</td>
                        <td class="text-center">Not communicated</td>
                    </tr>
                    <tr>
                        <td>Xanthosine (XR)</td>
                        <td class="text-center">249</td>
                        <td class="text-center">11 400</td>
                        <td class="text-center">8</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Protocol: How to check concentration -->
        <h3 class="h5 novo-blue mt-5 mb-3">How to check the concentration of purified nucleotide by absorbance</h3>
        <ol>
            <li>Prepare a 100 mM stock solution in autoclaved deionized water<sup>*</sup> using the molecular weight provided by the supplier.</li>
            <li>Choose the appropriate wavelength on the UV-spectrophotometer.</li>
            <li>Make a blank using a quartz 1-cm cuvette (plastic cuvettes must not be used for short-UV wavelengths) filled with a buffer of the desired pH.</li>
            <li>Prepare a 0.05 mM (50 µM) solution of the nucleotide in the same buffer<sup>**</sup>.</li>
            <li>Measure the absorbance of the 50 µM solution.</li>
            <li>Compare the obtained absorbance value with the molar extinction coefficient (&epsilon;) to calculate the actual analyte concentration.</li>
        </ol>
        <p class="text-muted small">
            <sup>*</sup> Some nucleosides and bases are insoluble in water but can be dissolved in 0.1–0.5 M KOH.<br>
            <sup>**</sup> Intermediate dilutions may be required to prepare a 50 µM solution from a 100 mM stock.
        </p>

        <div class="border rounded p-4 bg-light mt-3">
            <p class="fw-semibold mb-2">Example — IMP concentration check:</p>
            <ol class="mb-3">
                <li>Prepare 100 mM inosine-5'-monophosphate (IMP) by dissolving 392 mg of powder in 1 mL of water (Ref. I4625).</li>
                <li>Select 248 nm as the detection wavelength on the spectrophotometer.</li>
                <li>Prepare a 1 mM IMP solution (1:100 dilution of the 100 mM stock) and a 50 µM IMP solution (1:20 dilution of the 1 mM solution).</li>
                <li>Measure the absorbance of 50 µM IMP solution at 248 nm using a quartz 1-cm cuvette (plastic cuvettes must not be used for short-UV wavelengths).</li>
                <li>If, for example, the absorbance at 248 nm is 0.375 AU (instead of 0.615), this corresponds to an actual concentration of 30.5 µM instead of 50 µM IMP.</li>
            </ol>
            <p class="fst-italic novo-blue mb-0 fw-semibold">
                If you have questions about preparing nucleotide standards at exact concentrations, please
                <a href="/contact-us">contact us</a> or use our <a href="/nucleotide-standards">lyophilized standards</a>.
            </p>
        </div>
    </section>

    <!-- Section: Selectivity, Specificity, Linearity & Repeatability -->
    <section class="my-5" id="method-performance">
        <h2 class="novo-blue mb-4">Method Performance</h2>

        <h3 class="h5 novo-blue mb-2">Selectivity</h3>
        <p>
            Selectivity of this method is ensured by the excellent separation of nucleotides, achieved through
            the high purity of the TBA ion-pairing reagent, its optimized concentration in buffers A and B,
            and the superior performance of the Zorbax Eclipse Plus C18 column (Agilent).
        </p>

        <h3 class="h5 novo-blue mt-4 mb-2">Specificity</h3>
        <p>
            Specificity of this method relies on accurate nucleotide identification by comparing retention times
            and UV absorption spectra (254/280 ratio), which are characteristic for each nucleotide. Spectra at
            254 nm and 280 nm are recorded using a diode-array detector (Agilent). Run control and data
            acquisition are performed using Agilent ChemStation software.
        </p>
        <div class="row g-4 my-3">
            <div class="col-md-6">
                <figure class="border p-2 text-center">
                    <img src="/app/img/hplc-chromatogram-nucleobases-nucleosides-nmp-standards.jpg"
                        alt="Chromatogram of 15 mixed standard solutions of nucleobases, nucleosides and NMP at 250 nm"
                        class="img-fluid"
                        style="cursor: pointer;"
                        data-bs-toggle="modal"
                        data-bs-target="#fig1ChromatogramModal" />
                    <figcaption class="text-muted mt-2 text-center">
                        <small><b>Fig. 1:</b> Chromatogram of 15 mixed standard solutions of nucleobases, nucleosides and NMP (250 nm). <i class="fa-solid fa-arrow-pointer"></i></small>
                    </figcaption>
                </figure>
                <?= Modal::gen("fig1ChromatogramModal", "/app/img/hplc-chromatogram-nucleobases-nucleosides-nmp-standards.jpg", "Chromatogram of 15 mixed standard solutions of nucleobases, nucleosides and NMP at 250 nm", "Chromatogram of 15 mixed standard solutions of nucleobases, nucleosides and NMP (250 nm).") ?>
            </div>
            <div class="col-md-6">
                <figure class="border p-2 text-center">
                    <img src="/app/img/hplc-spectra-nucleobases-nucleosides-nmp-254-280nm.jpg"
                        alt="Superposition of UV spectra at 254 nm and 280 nm for 15 mixed standards of nucleobases, nucleosides and NMP with 254/280 area ratio"
                        class="img-fluid"
                        style="cursor: pointer;"
                        data-bs-toggle="modal"
                        data-bs-target="#fig2SpectraModal" />
                    <figcaption class="text-muted mt-2 text-center">
                        <small><b>Fig. 2:</b> Superposition of spectra at 254 nm (blue) and 280 nm (red) with 254/280 area ratio indicated for each nucleotide. <i class="fa-solid fa-arrow-pointer"></i></small>
                    </figcaption>
                </figure>
                <?= Modal::gen("fig2SpectraModal", "/app/img/hplc-spectra-nucleobases-nucleosides-nmp-254-280nm.jpg", "Superposition of UV spectra at 254 nm and 280 nm for 15 mixed standards of nucleobases, nucleosides and NMP with 254/280 area ratio", "Superposition of spectra at 254 nm (blue) and 280 nm (red) with 254/280 area ratio indicated for each nucleotide.") ?>
            </div>
        </div>
        <h3 class="h5 novo-blue mt-4 mb-2">Linearity and Repeatability</h3>
        <p>
            Linearity and repeatability were evaluated using three independent calibration curves prepared from
            mixtures of standards: STDB1 (CMP, UMP, GMP, IMP, AMP), STDB2 (cytosine, uridine, guanosine,
            inosine, adenosine), and STDB3 (adenine, guanine, hypoxanthine, cytidine, uracil). Each mixture
            was analyzed at the indicated concentrations, with six repeated measurements per level. Tables 4–6
            summarize the coefficients of determination for all calibration curves and the relative standard
            deviations of peak areas obtained at the lowest tested concentration (25 µM) for nucleotides,
            nucleosides, and bases. All compounds exhibited good linearity, with the highest correlations
            observed for 5'-NMP, which represents the primary focus of this study.
        </p>

        <!-- Table 4: NMP linearity -->
        <h3 class="h6 fw-semibold mt-4 mb-2">Table 4. Coefficients of determination obtained with calibrated standards solutions of nucleotides monophosphates</h3>
        <div class="table-responsive mb-4">
            <table class="table table-bordered table-striped align-middle">
                <thead class="table-light">
                    <tr>
                        <th>Standard mix</th>
                        <th>Composition</th>
                        <th class="text-center">Linearity (r²)<br><small class="fw-normal">(25, 50, 75, 100, 200, 500 µM)</small></th>
                        <th class="text-center">% RSD<br><small class="fw-normal">(Peak area 254 nm at lowest concentration)</small></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td rowspan="6" class="fw-semibold novo-blue align-middle">STD1 (NMP)</td>
                        <td>CMP</td>
                        <td class="text-center">0.998</td>
                        <td class="text-center">1.90%</td>
                    </tr>
                    <tr>
                        <td>UMP</td>
                        <td class="text-center">0.999</td>
                        <td class="text-center">2.30%</td>
                    </tr>
                    <tr>
                        <td>GMP</td>
                        <td class="text-center">0.996</td>
                        <td class="text-center">2.50%</td>
                    </tr>
                    <tr>
                        <td>IMP</td>
                        <td class="text-center">0.996</td>
                        <td class="text-center">2.80%</td>
                    </tr>
                    <tr>
                        <td>AMP</td>
                        <td class="text-center">0.998</td>
                        <td class="text-center">2.70%</td>
                    </tr>
                    <tr>
                        <td>XMP</td>
                        <td class="text-center">0.997</td>
                        <td class="text-center">2.40%</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Table 5: Nucleosides linearity -->
        <h3 class="h6 fw-semibold mt-4 mb-2">Table 5. Coefficients of determination obtained with calibrated standards solutions of nucleosides</h3>
        <div class="table-responsive mb-4">
            <table class="table table-bordered table-striped align-middle">
                <thead class="table-light">
                    <tr>
                        <th>Standard mix</th>
                        <th>Composition</th>
                        <th class="text-center">Linearity (r²)<br><small class="fw-normal">(25, 50, 75, 100, 200, 500 µM)</small></th>
                        <th class="text-center">% RSD<br><small class="fw-normal">(Peak area 254 nm at lowest concentration)</small></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td rowspan="6" class="fw-semibold novo-blue align-middle">STD2 (Nucleosides)</td>
                        <td>Cytosine</td>
                        <td class="text-center">0.984</td>
                        <td class="text-center">2.90%</td>
                    </tr>
                    <tr>
                        <td>Uridine</td>
                        <td class="text-center">0.992</td>
                        <td class="text-center">3.60%</td>
                    </tr>
                    <tr>
                        <td>Guanosine</td>
                        <td class="text-center">0.987</td>
                        <td class="text-center">4.50%</td>
                    </tr>
                    <tr>
                        <td>Inosine</td>
                        <td class="text-center">0.977</td>
                        <td class="text-center">3.80%</td>
                    </tr>
                    <tr>
                        <td>Adenosine</td>
                        <td class="text-center">0.975</td>
                        <td class="text-center">2.70%</td>
                    </tr>
                    <tr>
                        <td>Xanthosine</td>
                        <td class="text-center">0.977</td>
                        <td class="text-center">2.40%</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Table 6: Bases linearity -->
        <h3 class="h6 fw-semibold mt-4 mb-2">Table 6. Coefficients of determination obtained with calibrated standards solutions of bases</h3>
        <div class="table-responsive mb-4">
            <table class="table table-bordered table-striped align-middle">
                <thead class="table-light">
                    <tr>
                        <th>Standard mix</th>
                        <th>Composition</th>
                        <th class="text-center">Linearity (r²)<br><small class="fw-normal">(25, 50, 75, 100, 200, 500 µM)</small></th>
                        <th class="text-center">% RSD<br><small class="fw-normal">(Peak area 254 nm at lowest concentration)</small></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td rowspan="6" class="fw-semibold novo-blue align-middle">STD3 (Bases)</td>
                        <td>Adenine</td>
                        <td class="text-center">0.953</td>
                        <td class="text-center">5.90%</td>
                    </tr>
                    <tr>
                        <td>Guanine</td>
                        <td class="text-center">0.968</td>
                        <td class="text-center">7.60%</td>
                    </tr>
                    <tr>
                        <td>Hypoxanthine</td>
                        <td class="text-center">0.941</td>
                        <td class="text-center">6.50%</td>
                    </tr>
                    <tr>
                        <td>Cytidine</td>
                        <td class="text-center">0.950</td>
                        <td class="text-center">6.80%</td>
                    </tr>
                    <tr>
                        <td>Uracil</td>
                        <td class="text-center">0.956</td>
                        <td class="text-center">5.70%</td>
                    </tr>
                    <tr>
                        <td>Xanthine</td>
                        <td class="text-center">0.969</td>
                        <td class="text-center">6.40%</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <section class="container my-5">
        <h2 class="text-center mb-4 novo-blue">Method Comparison for Nucleotide Analysis</h2>
        <div class="table-responsive">
            <table class="table table-bordered table-striped align-middle">
                <thead class="table-light">
                    <tr>
                        <th scope="col">Attribute</th>
                        <th scope="col">Traditional Acid Hydrolysis + HPLC</th>
                        <th scope="col">NOVOCIB’s Enzymatic Hydrolysis + Ion-Paired HPLC</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Specificity</th>
                        <td>Low — collapses all sources into bases</td>
                        <td>High — distinguishes free NMP/nucleosides from RNA/DNA</td>
                    </tr>
                    <tr>
                        <th scope="row">Quantitative Accuracy</th>
                        <td>Prone to overestimation — assumes bases equal NMP</td>
                        <td>Accurate — g/kg attribution to actual sources</td>
                    </tr>
                    <tr>
                        <th scope="row">Analyte Integrity</th>
                        <td>Harsh — potential degradation and artifacts</td>
                        <td>Gentle — preserves native monomers</td>
                    </tr>
                    <tr>
                        <th scope="row">Functional Relevance</th>
                        <td>Poor — taste/bioactivity not reflected</td>
                        <td>Strong — aligns with sensory and biological properties</td>
                    </tr>
                    <tr>
                        <th scope="row">Operational Complexity</th>
                        <td>Simple workflow</td>
                        <td>Two-step but standardized</td>
                    </tr>
                    <tr>
                        <th scope="row">Environmental Impact</th>
                        <td>Hazardous strong acid; corrosive waste requiring neutralization and disposal</td>
                        <td>Enzymes aqueous and biodegradable; lower hazard and greener waste stream</td>
                    </tr>
                    <tr>
                        <th scope="row">Application</th>
                        <td>Purified ingredients enriched in nucleotides</td>
                        <td>Complex mixtures or final products with low nucleotide and RNA content</td>
                    </tr>
                    <tr>
                        <th scope="row">Example</th>
                        <td>Yeast extracts</td>
                        <td>Aquafeed supplemented with nucleotides and/or RNA</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <!-- Section: HPLC Photo -->
    <section class="row my-5">
        <!-- <h2 class="novo-blue text-center mb-2">Aquafeed HPLC Spectra</h2> -->
        <article class="my-5 col-lg-6">
            <h3 class="mb-3 novo-blue">Our analytical system</h3>
            <p>
                Agilent 1120 series HPLC liquid chromatograph fitted with binary pump,
                vacuum degasser, well-plate autosampler, thermostatic column compartment
                and multiple wavelength and diode array detector. Run and data
                acquisition are controlled by Agilent Chem Station software.
                Calibrations are performed with standards prepared in mobile phase and
                with standards mixed with cell extracts, which are run immediately
                before and after every series of samples. Peak assignment of different
                bases, ribonucleosides and ribonucleoside monophosphates is done by
                comparing both retention times and characteristics of UV absorption
                spectra (254/280 ratio) with those of standards. The area of individual
                peaks was measured using ChemStation software (Agilent).
            </p>
        </article>
        <div class="col-lg-6 mx-auto">
            <figure>
                <img class="img-fluid" src="/app/img/hplc-photo.jpg"
                    alt="Laboratory photo of HPLC system used for nucleotide analysis"
                    title="HPLC Analysis" />
                <figcaption class="text-muted text-center">
                    <small>Photo of HPLC system used for nucleotide analysis.</small>
                </figcaption>
            </figure>
        </div>
    </section>

    <section class="container my-5" aria-label="Frequently asked questions about nucleotide analysis">
        <h2 class="text-center mb-4 novo-blue">Frequently Asked Questions</h2>
        <div class="accordion" id="nucleotideFaq">
            <div class="accordion-item">
                <h3 class="accordion-header" id="faqHeadingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqOne" aria-expanded="false" aria-controls="faqOne">
                        What is the advantage of enzymatic hydrolysis compared to acid hydrolysis?
                    </button>
                </h3>
                <div id="faqOne" class="accordion-collapse collapse" aria-labelledby="faqHeadingOne" data-bs-parent="#nucleotideFaq">
                    <div class="accordion-body">
                        Enzymatic hydrolysis preserves the distinction between free nucleotides and polymeric nucleic acids, which improves compositional interpretation. Acid hydrolysis is fast, but it collapses multiple compound classes into free bases.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h3 class="accordion-header" id="faqHeadingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqTwo" aria-expanded="false" aria-controls="faqTwo">
                        Which compounds are quantified in NOVOCIB analysis?
                    </button>
                </h3>
                <div id="faqTwo" class="accordion-collapse collapse" aria-labelledby="faqHeadingTwo" data-bs-parent="#nucleotideFaq">
                    <div class="accordion-body">
                        The service quantifies free bases, nucleosides, nucleotide monophosphates (AMP, GMP, IMP, CMP, UMP), and nucleic acids (RNA and DNA), depending on the selected package.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h3 class="accordion-header" id="faqHeadingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqThree" aria-expanded="false" aria-controls="faqThree">
                        Is the enzymatic method more sustainable than acid hydrolysis?
                    </button>
                </h3>
                <div id="faqThree" class="accordion-collapse collapse" aria-labelledby="faqHeadingThree" data-bs-parent="#nucleotideFaq">
                    <div class="accordion-body">
                        In most workflows, yes. Enzymatic hydrolysis generally reduces hazardous corrosive waste relative to strong-acid hydrolysis and simplifies waste management.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <div class="text-center mt-5">
        <h3 class="me-3 pt-3 d-inline">To know more</h3>
        <a class="btn btn-primary" href="/contact-us"><span class="lead">Contact Us <i class="fa-solid fa-envelope"></i></span></a>
        <p class="mt-5 mb-5 lead text-muted">See all services on our <a href="/analytical-services">Analytical Services</a> page or submit a request directly via <a href="/inquiry?ref=S1200-03-NA&amp;price=400&amp;product=Nucleic%20Acids%20Analysis">Inquiry</a>.</p>
    </div>
</main>

<section class="bg-light py-2">
    <div class="references row justify-content-center" id="references">
        <h3 class="text-center py-3 w-100 h4">
            Scientific references
            <i class="fa-solid fa-microscope novo-blue"></i>
        </h3>
        <div class="col-2">
            <img src="/app/img/icons/book.svg" class="w-100" alt="book logo">
        </div>
        <div class="col-8 d-flex align-items-center mx-1">
            <ol>
                <!-- 2006 -->
                <li id="ref1" class="mb-3">
                    <a href="https://pubmed.ncbi.nlm.nih.gov/16620851/"
                        target="_blank"
                        rel="noopener"
                        title="Nucleotide and nucleoside content in human milk during early lactation (2006)"
                        class="text-decoration-none">

                        <div class="fw-semibold">
                            Nucleotide, nucleoside, and related compound content of human milk during early lactation. (2006)
                        </div>

                        <div class="fst-italic text-muted">
                            Lönnerdal B., Keen C.L., Hernell O.
                        </div>

                        <div class="small text-body-secondary">
                            <i>Journal of Pediatric Gastroenterology and Nutrition. PMID: 16620851 : 132–136</i>
                        </div>
                    </a>
                </li>

                <!-- 1998 -->
                <li id="ref2" class="mb-3">
                    <a href="https://www.researchgate.net/publication/237909550_TOTAL_POTENTIALLY_AVAILABLE_RIBONUCLEOSIDES_TPAN_IN_HUMAN_MILK_FROM_ASIAN_WOMEN"
                        target="_blank"
                        rel="noopener"
                        title="Total potentially available (ribo)nucleosides (TPAN) in human milk from Asian women (1998)"
                        class="text-decoration-none">

                        <div class="fw-semibold">
                            Total potentially available (ribo)nucleosides (TPAN) in human milk from Asian women. (1998)
                        </div>

                        <div class="fst-italic text-muted">
                            Tressler R., Ramstack M., White N., Molitor B., Masor M.
                        </div>

                        <div class="small text-body-secondary">
                            <i>Journal of Pediatric Gastroenterology and Nutrition, 26(5).</i>
                        </div>
                    </a>
                </li>

                <!-- 1995 – Analytical Biochemistry -->
                <li class="mb-3">
                    <a href="https://pubmed.ncbi.nlm.nih.gov/8594993/"
                        target="_blank"
                        rel="noopener"
                        title="Ion-pairing HPLC method for simultaneous determination of nucleotides and related compounds (1995)"
                        class="text-decoration-none">

                        <div class="fw-semibold">
                            An ion-pairing HPLC method for the direct simultaneous determination of nucleotides, deoxynucleotides, nicotinic coenzymes, oxypurines, nucleosides, and bases in perchloric acid cell extracts. (1995)
                        </div>

                        <div class="fst-italic text-muted">
                            Di Pierro F., Tavazzi B., Perno C.F., Bartolini M., Balestra E., Calió R., Giardina B., Lazzarino G.
                        </div>

                        <div class="small text-body-secondary">
                            <i>Analytical Biochemistry. PMID: 8594993 : 231, 407–412</i>
                        </div>
                    </a>
                </li>

                <!-- 1995 – AJCN -->
                <li class="mb-3">
                    <a href="https://pubmed.ncbi.nlm.nih.gov/7762521/"
                        target="_blank"
                        rel="noopener"
                        title="Total potentially available nucleosides of human milk by stage of lactation (1995)"
                        class="text-decoration-none">

                        <div class="fw-semibold">
                            Total potentially available nucleosides of human milk by stage of lactation. (1995)
                        </div>

                        <div class="fst-italic text-muted">
                            Leach J.L., Baxter J.H., Molitor B.E., Ramstack M.B., Masor M.L.
                        </div>

                        <div class="small text-body-secondary">
                            <i>American Journal of Clinical Nutrition, 61(6), 1224–1230.</i>
                        </div>
                    </a>
                </li>
            </ol>
        </div>
    </div>
</section>