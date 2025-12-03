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
                "price": "420.00",
                "priceCurrency": "EUR",
                "availability": "https://schema.org/InStock"
            },
            {
                "@type": "Offer",
                "sku": "S1200-03-RNA",
                "name": "Full spectra nucleotides analysis (RNA only)",
                "url": "https://www.novocib.com/inquiry?ref=S1200-03-RNA",
                "price": "380.00",
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
<?= Banner::gen("/app/img/hplc.jpg") ?>

<main class="container mt-5">
    <!-- Title & Intro -->
    <div class="text-center mb-5">
        <h1 class="underlinedTitle">
            <span class="underlined novoblue">Full Dietary Nucleotides Spectra by HPLC</span>
        </h1>
        <p class="col-lg-10 mx-auto lead">
            <span class="novo-blue">NOVOCIB</span> provides advanced analytical services using ion-paired
            high-performance liquid chromatography (HPLC-UV) for complete characterization of dietary nucleotides,
            nucleosides, bases, and nucleic acids in food, feed, and biological samples.
        </p>
    </div>

    <!-- Section: Chemical Diversity -->
    <section class="row mb-5">
        <article class="col-lg-6">
            <h2 class="novo-blue">Chemical Diversity of Nucleotides</h2>
            <p>
                Nucleotides exist in cells in multiple chemical forms, making their analysis complex:
            </p>
            <ul>
                <li>Heterocyclic bases: adenine, guanine, cytosine, uracil (RNA), thymine (DNA)</li>
                <li>Ribo- and deoxyribonucleosides</li>
                <li>Ribo- and deoxyribonucleotides: mono-, di-, and triphosphates (NMP, NDP, NTP; dNMP, dNDP, dNTP)</li>
                <li>Polymeric nucleic acids: RNA and DNA composed of ribo- and deoxynucleotides</li>
            </ul>
            <p>
                Because of this chemical diversity, these molecules cannot be separated in a single HPLC run without
                specialized approaches.
            </p>
        </article>
        <article class="col-lg-6">
            <figure>
                <img class="img-fluid" style="border: 1px solid silver"
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
        </article>
        <article class="col-lg-6">
            <figure>
                <img class="img-fluid" style="border: 1px solid silver"
                    src="/app/img/hplc-chromatogram-heterocyclic-bases.jpg"
                    alt="Chromatogram of heterocyclic bases separated by reverse-phase HPLC"
                    title="Chromatogram of bases" />
                <figcaption class="text-muted text-center">
                    <small><b>Fig. 2:</b> Chromatogram of heterocyclic bases separated after acid hydrolysis.</small>
                </figcaption>
            </figure>
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
            <figure>
                <img class="img-fluid" style="border: 1px solid silver"
                    src="/app/img/rna-dna-hplc-chromatogram-nuclease.jpg"
                    alt="Nucleotide spectra before and after nuclease treatment"
                    title="Nucleotide spectra" />
                <figcaption class="text-muted text-center">
                    <small><b>Fig. 3:</b> Nucleotide spectra of yeast extract before (blue) and after (red) nuclease treatment.</small>
                </figcaption>
            </figure>
        </article>
    </section>

    <section class="container my-5">
        <h2 class="text-center mb-4 novo-blue">Method Comparison for Nucleotide Analysis</h2>
        <div class="table-responsive">
            <table class="table table-bordered table-striped align-middle">
                <thead class="table-light">
                    <tr>
                        <th scope="col">Attribute</th>
                        <th scope="col">Perchloric Acid Hydrolysis + HPLC</th>
                        <th scope="col">Enzymatic Hydrolysis + HPLC</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Specificity</th>
                        <td>Low — collapses sources into bases</td>
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
                </tbody>
            </table>
        </div>
    </section>

    <!-- Section: HPLC Photo -->
    <section class="row my-5">
        <article class="my-5 col-lg-6">
            <h2 class="novo-blue mb-3">Our analytical system</h2>
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
<div class="container my-5">
    <article class="my-5">
        <div class="d-flex justify-content-center">
            <table class="table w-100 product">
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
                        <td>#S1200-03-NA</td>
                        <td class="text-center">
                            <p>
                                HPLC-UV analysis of full spectra of dietary nucleotides in food and feed ingredients—free bases (adenine, guanine, hypoxanthine, cytidine, uracil), nucleosides (cytosine, uridine, guanosine, inosine and adenosine), nucleotide monophosphates (CMP, UMP, GMP, IMP, AMP) and nucleic acids (DNA** and RNA**), expressed as g/100g.
                                *The analysis of full spectra nucleotides is realized by ion-paired HPLC-UV allowing simultaneous separation of apolar bases, nucleosides, polar NMP and dNMP in one run
                                **Nucleic acids DNA and RNA are analyzed after enzymatic digestion of RNA and DNA to NMP and dNMP with nuclease.
                            </p>
                        </td>
                        <td class="price">€ 420.00 / sample</td>
                        <td>
                            <a class="btn btn-primary" href="/inquiry?ref=S1200-03-NA&amp;price=420&amp;product=Dietary%20Nucleotides%20Analysis">Inquiry <i class="fa-solid fa-comment"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>#S1200-03-RNA</td>
                        <td class="text-center">
                            <p>
                                HPLC-UV analysis of full spectra of dietary nucleotides in food and feed ingredients—free bases, nucleosides, nucleotide monophosphates and nucleic acid RNA (without DNA), expressed as g/100g
                            </p>
                        </td>
                        <td class="price">€ 380.00 / sample</td>
                        <td>
                            <a class="btn btn-primary" href="/inquiry?ref=S1200-03-RNA&amp;price=380&amp;product=RNA%20Analysis">Inquiry <i class="fa-solid fa-comment"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>#S1200-03-PURINES</td>
                        <td class="text-center">
                            <p>
                                Purines content (bases adenine, guanine, xanthine and hypoxanthine, expressed as g/100g) calculated from full spectra of nucleotides
                                (Ref. #S1200-03-NA or Ref. #S1200-03-RNA)
                            </p>
                        </td>
                        <td class="price text-center">On request</td>
                        <td>
                            <a class="btn btn-primary" href="/inquiry?ref=S1200-03-PURINES&amp;product=Purines%20Analysis">Inquiry <i class="fa-solid fa-comment"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </article>
</div>