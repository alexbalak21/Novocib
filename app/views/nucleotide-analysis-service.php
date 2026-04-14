<?php
global $title;
$title = "Nucleotide Analysis Service";

ob_start(); ?>
<meta name="keywords" content="NOVOCIB, HPLC analysis, nucleotides, nucleosides, nucleic acids, RNA, DNA, 5'AMP, 5'GMP, 5'IMP, 5'CMP, 5'UMP, enzymatic hydrolysis, acid hydrolysis, ion-paired chromatography, dietary nucleotides, food chemistry, feed ingredients">
<meta name="description" content="NOVOCIB provides accurate HPLC-UV analysis of dietary nucleotides, nucleosides, and nucleic acids in food and feed. Services include quantification of 5'-nucleotides (AMP, GMP, IMP, CMP, UMP), RNA and DNA analysis, and comparison of acid hydrolysis versus enzymatic hydrolysis methods for precise and eco-friendly results.">
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Product",
        "brand": {
            "@type": "Brand",
            "name": "NOVOCIB"
        },
        "name": "HPLC-UV Analysis of Dietary Nucleotides",
        "description": "NOVOCIB provides accurate HPLC-UV analysis of dietary nucleotides, nucleosides, and nucleic acids in food and feed ingredients. Services include quantification of 5'-nucleotides (AMP, GMP, IMP, CMP, UMP), RNA and DNA analysis, and comparison of acid hydrolysis versus enzymatic hydrolysis methods.",
        "url": "https://www.novocib.com/dietary-nucleotides-analysis",
        "image": "https://www.novocib.com/app/img/hplc-photo.jpg",
        "category": "Analytical Services",
        "sku": "S1200-03-NA",
        "offers": [{
                "@type": "Offer",
                "sku": "S1200-03-NA",
                "name": "Full spectra nucleotides analysis (DNA + RNA)",
                "url": "https://www.novocib.com/inquiry?ref=S1200-03-NA",
                "price": "330.00",
                "priceCurrency": "EUR",
                "availability": "https://schema.org/InStock"
            },
            {
                "@type": "Offer",
                "sku": "S1200-03-RNA",
                "name": "Full spectra nucleotides analysis (RNA only)",
                "url": "https://www.novocib.com/inquiry?ref=S1200-03-RNA",
                "price": "300.00",
                "priceCurrency": "EUR",
                "availability": "https://schema.org/InStock"
            },
            {
                "@type": "Offer",
                "sku": "S1200-03-PURINES",
                "name": "Purines content analysis",
                "url": "https://www.novocib.com/inquiry?ref=S1200-03-PURINES",
                "price": "on request",
                "priceCurrency": "EUR",
                "availability": "https://schema.org/OnDemand"
            }
        ],
        "mainEntity": {
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
                    "name": "Which nucleotides are quantified in NOVOCIB’s analysis?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "NOVOCIB quantifies free bases (adenine, guanine, cytosine, uracil, thymine), nucleosides, nucleotide monophosphates (AMP, GMP, IMP, CMP, UMP), and nucleic acids (RNA and DNA)."
                    }
                },
                {
                    "@type": "Question",
                    "name": "What is the environmental impact of the methods?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Acid hydrolysis generates hazardous corrosive waste requiring special disposal. Enzymatic hydrolysis uses biodegradable enzymes, resulting in a greener waste stream."
                    }
                }
            ]
        }
    }
</script>


<?php $metas = ob_get_clean();

require_once $_SERVER['DOCUMENT_ROOT'] . "/app/templates/new_base.php";
?>
<?= Banner::gen("/app/img/hplc.jpg", "Nucleotide Analysis Service") ?>

<main class="container mt-5">
    <!-- Title & Intro -->
    <div class="text-center mb-5">
        <h1 class="underlinedTitle">
            <span class="underlined novoblue">Total Potentially Available Nucleotides (TPAN) Analysis by Coupled Enzymatic-HPLC approach</span>
        </h1>
        <p class="col-lg-10 mx-auto lead">
            <span class="novo-blue">NOVOCIB</span> provides advanced analytical services
            using enzymatic approach coupled to ion-paired high-performance liquid chromatography
            (HPLC-UV) for complete characterization of Total Potentially Available Nucleotides (nucleotides, nucleosides, bases,
            and nucleic acids) present in food, feed, and biological samples.
        </p>
    </div>
    <div class="container my-5">
        <article class="my-5">
            <div class="mb-0">
                <table class="table w-100 product" style="margin-bottom: 0;">
                    <thead>
                        <tr>
                            <th>#REF</th>
                            <th class="w-75 text-center" style="width: 800px !important">
                                PRODUCT NAME
                            </th>
                            <th class="text-center">PRICE</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#S1200-01-SOL</td>
                            <td class="text-center">
                                <p>
                                    HPLC-UV analysis of full spectra of soluble nucleotides-bases (adenine, guanine, hypoxanthine, cytidine, uracil), nucleosides (cytosine, uridine, guanosine, inosine and adenosine), nucleotide monophosphates (CMP, UMP, GMP, IMP, AMP)
                                </p>
                            </td>
                            <td class="price">€ 300.00</td>
                            <td class="text-center">
                                <a class="btn btn-primary" href="/inquiry?ref=S1200-01-SOL&amp;price=300&amp;product=Soluble%20Nucleotides%20Analysis">Inquiry <i class="fa-solid fa-comment"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>#S1200-03-RNA</td>
                            <td class="text-center">
                                <p>
                                    HPLC-UV analysis of full spectra of nucleotides—free bases (adenine, guanine, hypoxanthine, cytidine, uracil), nucleosides (cytosine, uridine, guanosine, inosine and adenosine), nucleotide monophosphates (CMP, UMP, GMP, IMP, AMP) and nucleic acid RNA
                                </p>
                            </td>
                            <td class="price">€ 350.00</td>
                            <td class="text-center">
                                <a class="btn btn-primary" href="/inquiry?ref=S1200-03-RNA&amp;price=350&amp;product=RNA%20Analysis">Inquiry <i class="fa-solid fa-comment"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>#S1200-03-NA</td>
                            <td class="text-center">
                                <p>
                                    HPLC-UV analysis of full spectra of nucleotides—free bases (adenine, guanine, hypoxanthine, cytidine, uracil), nucleosides (cytosine, uridine, guanosine, inosine and adenosine), nucleotide monophosphates (CMP, UMP, GMP, IMP, AMP) and nucleic acids RNA and DNA
                                </p>
                            </td>
                            <td class="price">€ 400.00</td>
                            <td class="text-center">
                                <a class="btn btn-primary" href="/inquiry?ref=S1200-03-NA&amp;price=400&amp;product=Nucleic%20Acids%20Analysis">Inquiry <i class="fa-solid fa-comment"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p class="text-muted text-center mt-3"><em>Updated on April 14th, 2026.</em></p>
            <p class="lead text-center mt-4 mb-5"><b>Analytical method</b>: Ion-paired reverse-phase UV-HPLC (Agilent 1200) before and after enzymatic hydrolysis of nucleic acids (RNA and DNA) with P1 nuclease (ref. 1-3)</p>
        </article>
    </div>

    <!-- Section: Chemical Diversity -->
    <section class="row mb-5">
        <article class="col-lg-6">
            <h2 class="novo-blue">Chemical Diversity of Nucleotides</h2>
            <p>
                Total Potentially Available Nucleotides (TPAN) is the sum of all nucleotides that can be liberated from nucleic acids and nucleotide-containing compounds in a food or biological sample after complete enzymatic hydrolysis. It includes:
            </p>
            <ul>
                <li>Free nucleotides already present (e.g., AMP, GMP, CMP, UMP).</li>
                <li>Nucleotides bound in RNA and DNA, which are released upon hydrolysis of nucleic acids.</li>
                <li>Nucleotide derivatives (such as nucleosides or nucleoside monophosphates) that can be converted into nucleotides.</li>
            </ul>
            <p>
                The definition TPAN was suggested first for milk nucleotides (Leach at el, 1995*) who has developed a new method that measured the total potentially available nucleosides (TPAN) including free nucleosides, free nucleotides, nucleotide-containing adducts (such as NAD and UDP glucose), and nucleotide polymers, primarily RNA. With this method, Leach et al. determined that milk samples from American and European women contained averages of 72 and 68 mg/L of TPAN, respectively. * According to study (Tressler et al, 1998) free nucleotides in human milk represent less than half of the TPAN with RNA representing 43% and free nucleosides - 39,9% **.
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
                acquisision are controlled by Agilent Chem Station software.
                Calibrations are performed with standards prepared in mobile phase and
                with standards mixed with cell extracts, which are run immediately
                before and after every series of samples. Peak assignment of different
                bases, ribonucleosides and ribonucleoside monophosphatesis is done by
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

    <!-- Call to Action -->
    <div class="text-center mt-5">
        <h3 class="mt-1 me-3 d-inline">To know more</h3>
        <a class="btn btn-primary" href="/contact-us"><span class="lead">Contact Us <i class="fa-solid fa-envelope"></i></span></a>
    </div>
</main>

<section class="bg-light py-2">
    <div class="references row justify-content-center">
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
                <li class="mb-3">
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
                <li class="mb-3">
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