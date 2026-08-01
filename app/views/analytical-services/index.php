<?php
global $title;
$title = "Analytical Services for Nucleotide & Nucleic Acid Analysis";

ob_start(); ?>
<meta name="keywords" content="nucleotide analysis, nucleic acid analysis, HPLC services, biomass analysis, microbial biomass nucleic acids, single-cell protein SCP, yeast extract analysis, cellular nucleotides, dietary nucleotides, nucleotide profiling, IMPDH inhibitors, food ingredient analysis, pharmaceutical testing, NOVOCIB">
<meta name="description" content="NOVOCIB's analytical services provide comprehensive nucleotide and nucleic acid analysis using advanced HPLC technology. Specializing in microbial biomass, single-cell protein (SCP), yeast extract, cellular nucleotides, and dietary nucleotide testing for pharmaceutical, feed, and food industries.">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes">
<link rel="canonical" href="https://www.novocib.com/analytical-services" />

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.novocib.com/analytical-services/">
<meta property="og:title" content="Analytical Services for Nucleotide &amp; Nucleic Acid Analysis | NOVOCIB">
<meta property="og:description" content="Comprehensive nucleotide and nucleic acid analysis services using HPLC technology for biomass, food, feed, and pharmaceutical industries. Accurate, reliable results from industry experts.">
<meta property="og:image" content="https://www.novocib.com/app/img/analytical-services-og.jpg">

<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Analytical Services for Nucleotide &amp; Nucleic Acid Analysis | NOVOCIB">
<meta name="twitter:description" content="Advanced HPLC analysis of nucleotides and nucleic acids in microbial biomass, yeast extract, and cells for research and industry.">
<meta name="twitter:image" content="https://www.novocib.com/app/img/analytical-services-twitter.jpg">

<?php $metas = ob_get_clean();

require_once $_SERVER['DOCUMENT_ROOT'] . "/app/templates/new_base.php";
?>

<!-- Schema.org markup for WebPage -->
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "name": "Analytical Services for Nucleotide & Nucleic Acid Analysis",
        "description": "Comprehensive nucleotide and nucleic acid analysis services using HPLC technology for microbial biomass, single-cell protein, pharmaceutical, feed, and food industries.",
        "publisher": {
            "@type": "Organization",
            "name": "NOVOCIB",
            "logo": {
                "@type": "ImageObject",
                "url": "https://www.novocib.com/app/img/logo.png"
            }
        },
        "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "https://www.novocib.com/analytical-services/"
        }
    }
</script>

<?= Banner::gen("/app/img/analytical-services.jpg", "Nucleotides and Nucleic Acid HPLC Analysis") ?>
<div class="container">
    <h2 class="underlinedTitle center">
        <span class="underlined novoblue center my-5">Full-Spectrum Analysis of Nucleotides and Nucleic Acids in Biomass, Food &amp; Feed</span>
    </h2>

    <div class="row g-4">
        <!-- Service 1 -->
        <div class="col-lg-6" itemscope itemtype="https://schema.org/Service">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body p-4">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-primary bg-opacity-10 p-3 rounded-3 me-3">
                            <i class="fas fa-flask fa-2x text-primary"></i>
                        </div>
                        <h2 class="h4 mb-0" itemprop="name">
                            <a href="/analytical-services/nucleotide-analysis-service" class="text-decoration-none" itemprop="url">Nucleotide &amp; Nucleic Acids Analysis</a>
                        </h2>
                    </div>
                    <p class="card-text" itemprop="description">
                        Our ion-paired HPLC-UV method provides full-spectrum separation and quantification of bases, nucleosides, nucleotides, and nucleic acids (RNA/DNA) in microbial biomass, single-cell protein (SCP), cell extracts, food products, and feed ingredients - perfectly suited for quality control and research.
                    </p>
                    <a href="/analytical-services/nucleotide-analysis-service" class="btn btn-outline-primary mt-2" aria-label="Learn more about our Nucleotide Analysis service">Learn More <i class="fas fa-arrow-right ms-1"></i></a>
                </div>
            </div>
        </div>

        <!-- Service 2 -->
        <div class="col-lg-6" itemscope itemtype="https://schema.org/Service">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body p-4">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-primary bg-opacity-10 p-3 rounded-3 me-3">
                            <i class="fas fa-wine-bottle fa-2x text-primary"></i>
                        </div>
                        <h2 class="h4 mb-0" itemprop="name">
                            <a href="/analytical-services/yeast-extract-nucleotide-analysis" class="text-decoration-none" itemprop="url">Yeast Nucleotides and SCP Nucleic Acid Quantification</a>
                        </h2>
                    </div>
                    <p class="card-text" itemprop="description">
                        Our analytical method is based on nuclease treatment followed by HPLC quantification of deoxy- and ribonucleotides released from DNA and RNA. This analysis provides comprehensive data on total bases, nucleosides, nucleotides, and nucleic acids present in the sample.
                    </p>
                    <a href="/analytical-services/yeast-extract-nucleotide-analysis" class="btn btn-outline-primary mt-2" aria-label="Learn more about our Yeast Extract Analysis service">Learn More <i class="fas fa-arrow-right ms-1"></i></a>
                </div>
            </div>
        </div>

        <!-- Service 3 -->
        <div class="col-lg-6" itemscope itemtype="https://schema.org/Service">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body p-4">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-primary bg-opacity-10 p-3 rounded-3 me-3">
                            <i class="fas fa-dna fa-2x text-primary"></i>
                        </div>
                        <h2 class="h4 mb-0" itemprop="name">
                            <a href="/cellular-nucleotides-analysis" class="text-decoration-none" itemprop="url">Cellular Nucleotides</a>
                        </h2>
                    </div>
                    <p class="card-text" itemprop="description">
                        Comprehensive profiling of over 31 cellular (deoxy-)ribonucleotides (mono-, di-, and triphosphate) in antimetabolite-treated cells. Our SPE extraction and ion-paired HPLC analysis provides detailed insights for pharmaceutical research and development.
                    </p>
                    <a href="/cellular-nucleotides-analysis" class="btn btn-outline-primary mt-2" aria-label="Learn more about our Cellular Nucleotides Analysis service">Learn More <i class="fas fa-arrow-right ms-1"></i></a>
                </div>
            </div>
        </div>

        <!-- Service 4 -->
        <div class="col-lg-6" itemscope itemtype="https://schema.org/Service">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body p-4">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-primary bg-opacity-10 p-3 rounded-3 me-3">
                            <i class="fas fa-utensils fa-2x text-primary"></i>
                        </div>
                        <h2 class="h4 mb-0" itemprop="name">
                            <a href="/dietary-nucleotides" class="text-decoration-none" itemprop="url">Dietary Nucleotides</a>
                        </h2>
                    </div>
                    <p class="card-text" itemprop="description">
                        Essential for growth and development, nucleotides play crucial roles in energy metabolism and cellular function. Our analysis services help ensure optimal nucleotide content in dietary supplements and functional foods.
                    </p>
                    <a href="/dietary-nucleotides" class="btn btn-outline-primary mt-2" aria-label="Learn more about our Dietary Nucleotides service">Learn More <i class="fas fa-arrow-right ms-1"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Section: Chemical Diversity -->
    <section class="row mb-5">
        <h2 class="mt-5 mb-4 text-center novo-blue" title="overview" id="principles">Principles</h2>
        <article class="col-lg-6">
            <h3 class="novo-blue">Chemical Diversity of Nucleotides</h3>
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

    <!-- Why Choose Us Section -->
    <div class="row mt-5 pt-4 border-top">
        <div class="col-12 text-center mb-4">
            <h2 class="h3 mt-5">Why Choose Our Analytical Services?</h2>
        </div>

        <!-- Award -->
        <div class="col-md-3 mb-4">
            <div class="text-center p-3 h-100">
                <div class="bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                    <i class="fas fa-award fa-2x text-primary"></i>
                </div>
                <h3 class="h5">European Award-Winning Lab</h3>
                <p>Honored at the european level for pioneering analytical services and excellence in nucleotide research.</p>
            </div>
        </div>

        <!-- Technology -->
        <div class="col-md-3 mb-4">
            <div class="text-center p-3 h-100">
                <div class="bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                    <i class="fas fa-chart-line fa-2x text-primary"></i>
                </div>
                <h3 class="h5">Advanced Technology</h3>
                <p>The most advanced approach for nucleotide analysis combining full-spectra ion pair reversed phase HPLC and specific enzymes transforming the chromatographic readout from “chemical separation” to “functional interpretation”.</p>
            </div>
        </div>

        <!-- Expert Team -->
        <div class="col-md-3 mb-4">
            <div class="text-center p-3 h-100">
                <div class="bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                    <i class="fa-solid fa-microscope fa-2x text-primary"></i>
                </div>
                <h3 class="h5">Quality Control</h3>
                <p>Our analyses are performed following high quality laboratory standards, including controlled sample and standards handling, validated SOP and transparent reporting - complete chromatographic data (spectra, peak areas, g/100 g) and a Certificate of Analysis.</p>
            </div>
        </div>

        <!-- NEW: 20 Years Expertise -->
        <div class="col-md-3 mb-4">
            <div class="text-center p-3 h-100">
                <div class="bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                    <i class="fas fa-flask fa-2x text-primary"></i>
                </div>
                <h3 class="h5">20 Years of Expertise</h3>
                <p>
                    Expertise across diverse matrices from cultured cells and animal tissues
                    to yeasts, mushrooms, foods, aquaculture feed, infant formula, by-products,
                    and molasses.
                </p>
            </div>
        </div>
    </div>
</div>

<section class="py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="text-center mb-5">
                    <h2 class="h1 mb-3">Frequently Asked Questions</h2>
                    <p class="lead text-muted">Find answers to common questions about our analytical services</p>
                </div>

                <div class="accordion" id="faqAccordion">

                    <!-- FAQ 1 -->
                    <div class="accordion-item border-0 shadow-sm mb-3">
                        <h3 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed bg-white" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                aria-expanded="false" aria-controls="collapseOne">
                                What is the typical turnaround time for analysis?
                            </button>
                        </h3>
                        <div id="collapseOne" class="accordion-collapse collapse"
                            aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Standard turnaround time is 5-7 business days from sample receipt. Expedited services are available upon request for an additional fee. Contact our team for specific project timelines.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 2 -->
                    <div class="accordion-item border-0 shadow-sm mb-3">
                        <h3 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed bg-white" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                aria-expanded="false" aria-controls="collapseTwo">
                                What information is included in the analysis report?
                            </button>
                        </h3>
                        <div id="collapseTwo" class="accordion-collapse collapse"
                            aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Our comprehensive reports include detailed chromatograms, quantitative results, method parameters, and expert interpretation. We also provide raw data in standard formats for your further analysis.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 3 -->
                    <div class="accordion-item border-0 shadow-sm mb-3">
                        <h3 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed bg-white" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                aria-expanded="false" aria-controls="collapseThree">
                                What are the sample requirements?
                            </button>
                        </h3>
                        <div id="collapseThree" class="accordion-collapse collapse"
                            aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                The analysis requires 5-10g of yeast extract powder or 10-20mL of liquid sample. Samples should be shipped under refrigerated conditions to preserve integrity.
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