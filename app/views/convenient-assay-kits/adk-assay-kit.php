<?php
global $title;
$title = "ADK Assay Kit - Human Adenosine Kinase Activity & Inhibitor Screening";

ob_start(); ?>
<meta name="keywords" content="ADK assay kit, adenosine kinase assay, adenosine kinase inhibitor screening, HTS ADK assay, IMPDH coupled assay, purine metabolism, nucleoside kinase assay, A-134974, NOVOCIB">
<meta name="description" content="Non-radioactive, HTS-ready assay kit to measure human adenosine kinase (ADK) activity and screen ADK inhibitors. 96-well plate format, Z'-factor 0.68.">
<meta property="og:title" content="PRECICE® ADK Assay Kit - Human Adenosine Kinase Activity Assay">
<meta property="og:description" content="Non-radioactive, high-throughput assay kit for measuring human adenosine kinase (ADK) activity and screening novel ADK inhibitors.">
<meta property="og:image" content="/app/img/ADK_Assay_kit.jpg">
<meta property="og:type" content="product">
<link rel="canonical" href="https://www.novocib.com/convenient-assay-kits/adk-assay-kit">

<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Product",
        "name": "PRECICE® ADK Assay Kit",
        "sku": "K0507-01",
        "description": "Non-radioactive, high-throughput compatible assay kit for in vitro measurement of human adenosine kinase (ADK) activity, including human recombinant ADK enzyme. Used for ADK inhibitor screening and IC50 determination.",
        "brand": {
            "@type": "Brand",
            "name": "NOVOCIB"
        },
        "manufacturer": {
            "@type": "Organization",
            "name": "NOVOCIB"
        },
        "image": "https://www.novocib.com/app/img/ADK_Assay_kit.jpg",
        "offers": {
            "@type": "Offer",
            "priceCurrency": "EUR",
            "price": "530.00",
            "availability": "https://schema.org/InStock",
            "url": "https://www.novocib.com/convenient-assay-kits/adk-assay-kit"
        },
        "additionalProperty": [{
                "@type": "PropertyValue",
                "name": "Format",
                "value": "96-well microplate (1 plate, 96 assays)"
            },
            {
                "@type": "PropertyValue",
                "name": "Detection",
                "value": "Absorbance, 340 nm (NADH2 formation)"
            },
            {
                "@type": "PropertyValue",
                "name": "Z'-factor",
                "value": "0.68"
            },
            {
                "@type": "PropertyValue",
                "name": "Storage",
                "value": "Lyophilized, -20°C, shipped without dry ice"
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
                "name": "What does the PRECICE® ADK Assay Kit measure?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "It measures the enzymatic activity of human adenosine kinase (ADK) in vitro. ADK transfers the terminal phosphate group of ATP to inosine, forming IMP; a coupled IMPDH reaction then converts IMP to XMP and generates NADH2, which is monitored continuously by absorbance at 340 nm."
                }
            },
            {
                "@type": "Question",
                "name": "Can this kit be used to screen ADK inhibitors?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. The kit is validated for high-throughput screening (HTS) of ADK inhibitors and IC50 determination. It was validated with the reference inhibitor A-134974 and achieved a Z'-factor of 0.68, which meets HTS assay quality standards."
                }
            },
            {
                "@type": "Question",
                "name": "Is the ADK Assay Kit radioactive?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "No. It is a non-radioactive, homogeneous, add-and-measure assay based on continuous spectrophotometric monitoring at 340 nm, requiring no separation or wash steps."
                }
            },
            {
                "@type": "Question",
                "name": "What equipment is needed to run the assay?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "A plate agitator and a microplate reader fitted with a 340 nm filter (for example Labsystems iEMS Reader MF, BioTek Epoch, or PerkinElmer readers)."
                }
            },
            {
                "@type": "Question",
                "name": "How is the kit shipped and stored?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Reagents are provided in stable lyophilized form and shipped without dry ice. Store at -20°C upon receipt."
                }
            },
            {
                "@type": "Question",
                "name": "What is included in the ADK Assay Kit?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "One 96-well plate kit contains lyophilized cofactors (DTT, NAD, ATP), lyophilized highly active IMPDH, lyophilized human recombinant ADK enzyme (20 nmol), an inosine substrate solution, an A-134974 ADK inhibitor reference solution, 5x reaction buffer, and a round-bottom 96-well microplate."
                }
            }
        ]
    }
</script>

<?php $metas = ob_get_clean();

require_once $_SERVER['DOCUMENT_ROOT'] . "/app/templates/new_base.php";
?>
<?= Banner::gen("/app/img/adk-kit.jpg") ?>

<section class="container mt-5">

    <h1 class="underlinedTitle right"><span class="underlined novoblue right">ADK Assay Kit - Human Adenosine Kinase Activity Assay</span></h1>

    <div class="row align-items-center">
        <div class="col-lg-6">
            <p>
                <b class="novo-blue">PRECICE<sup>®</sup> ADK Assay Kit</b> is a convenient, non-radioactive, high-throughput-compatible assay for measuring human adenosine kinase (ADK) activity in vitro. It is designed for drug discovery programs screening for novel ADK inhibitors, and includes ready-to-use human recombinant ADK enzyme.
            </p>
            <h2 class="novo-blue h4">Assay Principle</h2>
            <p>
                Adenosine kinase (ADK) transfers the terminal phosphate group of ATP to a substrate, generating ADP as a by-product. This kit uses inosine as a surrogate ADK substrate, coupled to a highly active IMP dehydrogenase (IMPDH) reaction that directly reports the inosine monophosphate (IMP) formed by ADK. In the presence of inosine and ATP, ADK phosphorylates inosine into IMP; IMPDH then immediately oxidizes IMP to XMP in the presence of NAD, producing NADH2. Because IMPDH is provided in excess, ADK activity is the rate-limiting step, so NADH2 formation &mdash; monitored continuously by absorbance at 340 nm &mdash; directly and stoichiometrically reflects ADK activity.
            </p>
        </div>
        <div class="col-lg-6 text-center">
            <img class="w-100" src="/app/img/ADK_Assay_Kit_Principle.png" alt="Reaction scheme of the PRECICE ADK Assay Kit: ADK phosphorylates inosine to IMP, coupled to IMPDH oxidation of IMP to XMP with NADH2 formation, monitored at 340 nm" />
            <h3 class="novo-blue h4">PRECICE<sup>®</sup> ADK Assay Kit</h3>
            <h4 class="h5">Ref. #K0507-01</h4>
            <div class="col-lg-6 mx-auto mt-4">
                <img class="img-fluid" src="/app/img/ADK_Assay_kit.jpg" alt="PRECICE ADK Assay Kit contents: lyophilized cofactor and enzyme tubes (DTT, NAD, ATP, IMPDH, human ADK enzyme, inosine substrate, A-134974 inhibitor), 5x reaction buffer tube, and 96-well microplate" />
            </div>
        </div>

        <div class="d-flex justify-content-center mt-4">
            <div class="col-lg-10 col-12">

                <?= Product::gen_from_id(9) ?>

                <p class="text-center">
                    <b>
                        Kit is provided in stable lyophilized form and
                        <span class="text-danger">shipped without dry ice</span>
                    </b>
                </p>
                <p class="mt-4 mb-5 text-end">
                    <i class="fa-solid fa-download"></i> Download
                    <a target="_blank" href="/app/documents/Novocib_K0507-01_User_Manual.pdf" title="User manual">
                        <strong>In vitro ADK assay protocol</strong>
                        <i class="fa-regular fa-file-pdf"></i>
                    </a>
                    (User manual, ref. K0507-01)
                </p>
            </div>
        </div>

        <div class="mt-0 mb-4">
            <h2 class="mt-5 pt-4 novo-blue text-center h4">🔬 Key Features of the ADK Assay Kit</h2>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mt-3">

                <div class="col">
                    <div class="border rounded p-3 h-100 bg-light shadow-sm text-start">
                        <h3 class="mb-2 h6">☑️ Convenient</h3>
                        <ul class="mb-0 ps-3">
                            <li>Non-radioactive, add-and-measure format</li>
                            <li>Homogeneous assay, no wash or separation steps</li>
                            <li>Continuous absorbance monitoring at 340 nm</li>
                        </ul>
                    </div>
                </div>

                <div class="col">
                    <div class="border rounded p-3 h-100 bg-light shadow-sm text-start">
                        <h3 class="mb-2 h6">📊 Quantitative</h3>
                        <ul class="mb-0 ps-3">
                            <li>IMP converted to NADH₂ in a stoichiometric, quantitative manner</li>
                            <li>Enables accurate kinetic analysis (Km, Vmax, IC50)</li>
                        </ul>
                    </div>
                </div>

                <div class="col">
                    <div class="border rounded p-3 h-100 bg-light shadow-sm text-start">
                        <h3 class="mb-2 h6">⚙️ High-Throughput Format</h3>
                        <ul class="mb-0 ps-3">
                            <li>Standard 96-well microplate format</li>
                            <li>Compatible with plate readers fitted with a 340 nm filter</li>
                            <li>Meets HTS assay standards (Z'-factor 0.68)</li>
                        </ul>
                    </div>
                </div>

                <div class="col">
                    <div class="border rounded p-3 h-100 bg-light shadow-sm text-start">
                        <h3 class="mb-2 h6">🔒 Validated & Reliable</h3>
                        <ul class="mb-0 ps-3">
                            <li>Validated with reference ADK inhibitor A-134974</li>
                            <li>Confirmed activity on ribavirin, a known ADK substrate</li>
                            <li>Includes human recombinant ADK enzyme (20 nmol)</li>
                        </ul>
                    </div>
                </div>

            </div>

            <p class="mt-5 text-center">
                For rapid in vitro screening of nucleoside analog phosphorylation by human adenosine kinase, see our
                <a href="/convenient-assay-kits/adk-phosphorylation-assay-kit">
                    PRECICE<sup>®</sup> ADK Phosphorylation Assay Kit <i class="fa-solid fa-arrow-up-right-from-square"></i>
                </a>
            </p>
        </div>

    </div>
</section>

<section class="bg-light py-3">
    <div class="container">
        <div class="mb-5">
            <h2 class="h5">Why Adenosine Kinase Is a Drug Discovery Target</h2>
            <p>Adenosine kinase (ADK) is a ubiquitous enzyme that regulates intra- and extracellular concentrations of adenosine, an important modulator of central nervous system function and a signaling molecule involved in hypoxia, inflammation, and nociception. Together with adenosine deaminase, ADK controls cellular adenosine levels. Inhibiting ADK selectively raises local adenosine concentrations, which has been shown to reduce seizure susceptibility and nociception in vivo. ADK dysfunction is implicated in several pathologies, including diabetes, epilepsy, and cancer, making it a rational therapeutic target. Adenosine-regulating drugs have been investigated as analgesic and anti-inflammatory agents, and for the treatment of schizophrenia and ischemic brain injury.</p>
        </div>

        <div class="mb-5">
            <h2 class="h5">Kit Contents</h2>
            <p>Each PRECICE® ADK Assay Kit (one 96-well plate, 96 assays) includes:</p>
            <ul>
                <li>Cofactor 1 (DTT, lyophilized)</li>
                <li>Cofactor 2 (NAD, lyophilized)</li>
                <li>Cofactor 3 (ATP, lyophilized)</li>
                <li>Highly active IMPDH (lyophilized)</li>
                <li>Human recombinant ADK enzyme (lyophilized, 20 nmol)</li>
                <li>Inosine substrate solution (50 mM)</li>
                <li>ADK inhibitor reference compound, A-134974 (50 µM solution)</li>
                <li>Reaction Buffer 5x (4 mL, in a 50 mL tube)</li>
                <li>Round-bottom 96-well microplate (Corning® Costar®, ref. 3797)</li>
            </ul>
            <p>Full step-by-step preparation and plate-layout instructions are provided in the <a target="_blank" href="/app/documents/NovoCIB_K0507-01_User_Manual_06082026.pdf">user manual</a>.</p>
        </div>

        <div>
            <h2 class="h5">Validation Data</h2>
            <p><strong>PRECICE<sup>®</sup> ADK Assay Kit</strong> was validated for ADK inhibitor screening and IC50 determination using the reference compound A-134974 (Sigma-Aldrich, under license from Abbott Laboratories). The Z'-factor was calculated from 44 negative (no ADK inhibition) and 44 positive (500 nM A-134974) control wells and measured at 0.68 &mdash; an excellent level of performance for a screening assay.</p>
            <div class="d-flex justify-content-center">
                <figure class="col-lg-7">
                    <img src="/app/img/ADK_Inhibition_Curve.png" alt="Dose-response inhibition curve of human adenosine kinase by A-134974, showing IC50 determination across 12 concentrations" class="w-100">
                    <figcaption class="text-center"><strong>ADK inhibition curve with compound A-134974 at 12 different concentrations.</strong> <br>
                        All data points represent the mean (± SD) of 8 wells (2 wells in duplicate, on 4 independent plates). IC50 was determined by fitting a 4-parameter non-linear curve to the data using the least-squares method. IMPDH activity assays confirmed that IMPDH itself is not inhibited by A-134974 (data not shown).</figcaption>
                </figure>
            </div>
        </div>
    </div>
</section>

<div class="container mt-5">
    <h2 class="underlinedTitle">Frequently Asked Questions</h2>
    <div class="accordion" id="faqADKAssayKit">
        <div class="accordion-item">
            <h3 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAssay1" aria-expanded="false">
                    What does the ADK Assay Kit measure?
                </button>
            </h3>
            <div id="faqAssay1" class="accordion-collapse collapse" style="">
                <div class="accordion-body">
                    The enzymatic activity of human adenosine kinase in vitro. ADK phosphorylates inosine to IMP, which is immediately oxidized by a coupled IMPDH reaction to produce NADH2, monitored continuously by absorbance at 340 nm.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h3 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAssay2" aria-expanded="false">
                    Can this kit be used to screen ADK inhibitors and determine IC50 values?
                </button>
            </h3>
            <div id="faqAssay2" class="accordion-collapse collapse" style="">
                <div class="accordion-body">
                    Yes. The kit is validated for high-throughput screening (HTS) of ADK inhibitors and IC50 determination, with a Z'-factor of 0.68. It was benchmarked using the reference inhibitor A-134974.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h3 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAssay3">
                    Is the ADK Assay Kit radioactive?
                </button>
            </h3>
            <div id="faqAssay3" class="accordion-collapse collapse">
                <div class="accordion-body">
                    No. It is a non-radioactive, homogeneous, add-and-measure assay based on continuous spectrophotometric monitoring, with no separation or wash steps required.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h3 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAssay4">
                    What equipment is needed to run the assay?
                </button>
            </h3>
            <div id="faqAssay4" class="accordion-collapse collapse">
                <div class="accordion-body">
                    A plate agitator and a microplate reader fitted with a 340 nm absorbance filter (for example, Labsystems iEMS Reader MF, BioTek Epoch, or PerkinElmer readers).
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h3 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAssay5">
                    How should the kit be stored and shipped?
                </button>
            </h3>
            <div id="faqAssay5" class="accordion-collapse collapse">
                <div class="accordion-body">
                    Reagents are provided in stable lyophilized form and shipped without dry ice. Store at -20°C upon receipt.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h3 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAssay6" aria-expanded="false" aria-controls="faqAssay6">
                    What is included in the ADK Assay Kit?
                </button>
            </h3>
            <div id="faqAssay6" class="accordion-collapse collapse" data-bs-parent="#faqADKAssayKit">
                <div class="accordion-body">
                    One 96-well plate kit (96 assays) contains lyophilized cofactors (DTT, NAD, ATP), lyophilized highly active IMPDH, lyophilized human recombinant ADK enzyme (20 nmol), an inosine substrate solution, an A-134974 ADK inhibitor reference solution, 5x reaction buffer, and a round-bottom 96-well microplate.
                </div>
            </div>
        </div>
    </div>
</div>

<div class="text-center mt-3">
    <a class="btn btn-primary btn-lg" href="/inquiry?ref=K0507-01.01&amp;product=Adk Assay Kit&amp;volume=1 plate (96 assays)">
        Order <i class="fa-solid fa-cart-arrow-down"></i>
    </a>
</div>

<div class="mx-4">
    <div class="references mt-4">
        <h2 class="ms-1 pt-4 pb-3 mb-4 text-center h5">Scientific Works citing <span class="novo-blue">NOVOCIB</span> Adenosine Kinase and PRECICE<sup>®</sup> ADK Assay kits <i class="novo-blue fa-solid fa-arrow-up-right-from-square ms-2"></i></h2>
        <div class="row">
            <div class="col-2 d-none d-md-block">
                <img src="/app/img/icons/book.svg" class="w-100" alt="book logo">
            </div>
            <div class="col-lg-10">
                <ol>
                    <li>
                        <a target="_blank" href="https://pubmed.ncbi.nlm.nih.gov/34204594/">
                            M. Orlicka-Płocka, A. Fedoruk-Wyszomirska, D. Gurda-Wozna, P. Pawelczak , P. Krawczyk,
                            M. Giel-Pietraszuk, G. Framski, T. Ostrowski, E. Wyszko.
                            Implications of Oxidative Stress in Glioblastoma Multiforme Following Treatment with Purine Derivatives.
                            Antioxidants 2021, 10, 950.
                        </a>
                    </li>

                    <li>
                        <a target="_blank" href="http://www.ncbi.nlm.nih.gov/pubmed/10200156">
                            L.M. Johnson, O.J. Smith, D.A. Hahn, C.F. Baer.
                            Short-term heritable variation overwhelms 200 generations of mutational variance for metabolic traits in Caenorhabditis elegans.
                            Evolution. 2020 Nov;74(11):2451-2464.
                        </a>
                    </li>

                    <li>
                        <a target="_blank" href="https://www.nature.com/articles/s41598-017-06636-8">
                            S. Asada, E. Ohta, Y. Akimoto, N. Abolhassani, D. Tsuchimoto, Y. Nakabeppu.
                            2‑Oxoadenosine induces cytotoxicity through intracellular accumulation of 2‑oxo‑ATP and depletion of ATP but not via the p38 MAPK pathway.
                            Scientific Reports. 2017;7:6528.
                        </a>
                    </li>

                    <li>
                        <a href="https://pubmed.ncbi.nlm.nih.gov/28504647/">
                            U. Nayar, J. Sadek, J. Reichel, D. Hernandez-Hopkins, G. Akar, P.J. Barelli, M.A. Sahai, H. Zhou,
                            J. Totonchy, D. Jayabalan, R. Niesvizky, I. Guasparri, D. Hassane, Y. Liu, S. Sei, R.H. Shoemaker,
                            J. D. Warren, O. Elemento, K.M. Kaye, E. Cesarman.
                            Identification of a nucleoside analog active against adenosine kinase-expressing plasma cell malignancies.
                            J Clin Invest. 2017 Jun 1;127(6):2066-2080.
                        </a>
                    </li>

                    <li>
                        <a href="https://pubmed.ncbi.nlm.nih.gov/27410258/">
                            K.S. Toti, D. Osborne, A. Ciancetta, D. Boison, K.A. Jacobson.
                            South (S)- and North (N)-Methanocarba-7-Deazaadenosine Analogues as Inhibitors of Human Adenosine Kinase.
                            J. Med. Chem. 2016, 59, 14, 6860-6877.
                        </a>
                    </li>

                    <li>
                        <a href="https://www.sfn.org/-/media/SfN/Documents/Annual-Meeting/FinalProgram/NS2017/Full-Abstract-PDFs-2017/SFN17_Abstract-PDFs---Posters_4_Tue_AM.pdf">
                            K. DANIELYAN, R. D. VARDANYAN, A. SIMONYAN, A. S. SAGYAN.
                            The sole role of PRPS-1 in the regenerative processes after experimental stroke.
                            Poster#: 459.07/A7. 2017 Neuroscience Meeting Planner.
                            <br>Washington, DC: Society for Neuroscience, 2017.
                        </a>
                    </li>

                    <li>
                        <a href="https://pubmed.ncbi.nlm.nih.gov/21963049/">
                            M.K. Bjursell, H.J. Blom, J.A. Cayuela, M.L. Engvall, N. Lesko, S. Balasubramaniam, G. Brandberg,
                            M. Halldin, M. Falkenberg, C. Jakobs, D. Smith, E. Struys, U. von Döbeln, C. M. Gustafsson,
                            J. Lundeberg, A. Wedell.
                            Adenosine Kinase Deficiency Disrupts the Methionine Cycle and Causes Hypermethioninemia, Encephalopathy, and Abnormal Liver Function.
                            Am J Hum Genet. 2011 Oct 7; 89(4): 507-515.
                        </a>
                    </li>

                    <li>
                        <a href="https://pubmed.ncbi.nlm.nih.gov/21427729/">
                            E. CESARMAN, U. NAYAR, J.D. WARREN, J. SADEK.
                            US20190225643A1 Novel nucleoside analogs and use thereof in therapeutic treatment.
                            Patent application filed by Cornell University.
                        </a>
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>