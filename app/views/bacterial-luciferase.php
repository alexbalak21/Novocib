<?php
global $title;
$title = "Bacterial Luciferase";

// META TAGS 
ob_start(); ?>
<meta name="description" content="Highly Pure Bacterial Luciferase (EC 1.14.14.3) from Photobacterium phosphoreum. Ultra‑sensitive enzyme for NADH/NADPH quantification, dehydrogenase‑coupled assays, and bioluminescent detection. High activity (>500,000 RLU/s/µg), lyophilized, and shipped without dry ice.">
<meta name="keywords" content="bacterial luciferase, Photobacterium phosphoreum luciferase, EC 1.14.14.3, NADH assay, NADPH quantification, bioluminescence enzyme, FMN reductase, luminescent assay, dehydrogenase-coupled assay, NOVOCIB luciferase, high purity luciferase">
<meta name="robots" content="index, follow">
<meta property="og:title" content="Highly Pure Bacterial Luciferase (EC 1.14.14.3) – NOVOCIB">
<meta property="og:description" content="Ultra‑pure luciferase from Photobacterium phosphoreum for NADH/NADPH quantification and bioluminescent assays. High activity, lyophilized, no dry ice shipment.">
<meta property="og:type" content="product">
<meta property="og:url" content="https://www.novocib.com/bacterial-luciferase">
<meta property="og:image" content="https://www.novocib.com/app/img/Lux_Gel.png">
<?php $metas = ob_get_clean();


require_once $_SERVER['DOCUMENT_ROOT'] . "/app/templates/new_base.php";
?>

<?= Banner::gen() ?>
<main class="">

    <!-- TITLE + SHORT DESCRIPTION -->
    <section class="container mt-5">
        <h2 class="underlinedTitle text-center">
            <span class="underlined novoblue">
                Highly Pure Bacterial Luciferase (E.C.1.14.14.3)
            </span>
        </h2>

        <p class="text-center text-muted mt-2 mx-auto col-lg-8">
            Ultra‑pure FMNH₂‑dependent luciferase producing intense bioluminescence for
            NAD(P)H quantification, enzymatic assays, and high‑sensitivity analytical applications.
        </p>

        <h5 class="text-center mt-4">
            from <em>Photobacterium phosphoreum</em>
        </h5>

        <p class="text-center text-muted mx-auto col-lg-8">
            Derived from a squid‑associated <em>P. phosphoreum</em> strain selected for its brightest
            luminescence. According to the product sheet, “the luxAB gene was amplified by PCR and cloned,
            and the α and β subunits show 94% and 92% identity to SwissProt entries P24113 and P12744”
            (PDF).
        </p>

        <!-- PRODUCT TABLE -->
        <div class="row justify-content-center">
            <h4 class="mt-5 text-center text-muted">Ref. #E-Nov10</h4>
            <div class="d-flex justify-content-center mt-4">
                <div class="col-lg-10 col-12">
                    <table class="table product mb-2">
                        <thead>
                            <tr>
                                <th>#REF</th>
                                <th class="text-center">Quantity</th>
                                <th class="text-center">Price</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#E-Nov10-1</td>
                                <td class="text-center"><strong>1 mg</strong></td>
                                <td class="text-center">€ 295.00</td>
                                <td class="text-end pe-3">
                                    <a class="btn btn-primary"
                                        href="/inquiry?ref=K0709-01-2&product=Bacterial Luciferase - 1mg - #E-Nov10-1">
                                        Inquiry <i class="fa-solid fa-comment"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>#E-Nov10-2</td>
                                <td class="text-center"><strong>2 mg</strong></td>
                                <td class="text-center">€ 488.00</td>
                                <td class="text-end pe-3">
                                    <a class="btn btn-primary"
                                        href="/inquiry?ref=K0709-01-2&product=Bacterial Luciferase - 2mg - #E-Nov10-2">
                                        Inquiry <i class="fa-solid fa-comment"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>#E-Nov10-5</td>
                                <td class="text-center"><strong>5 mg</strong></td>
                                <td class="text-center">€ 1106.00</td>
                                <td class="text-end pe-3">
                                    <a class="btn btn-primary"
                                        href="/inquiry?ref=K0709-01-2&product=Bacterial Luciferase - 5mg - #E-Nov10-5">
                                        Inquiry <i class="fa-solid fa-comment"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <p class="text-center mt-4">
                        <strong>Kit is provided in stable lyophilized form and
                            <span class="text-danger">shipped without dry ice</span>.
                        </strong>
                    </p>

                    <p class="mt-5 text-center"><strong>Bulk quantity available.</strong></p>

                    <p class="mb-5 text-center">
                        <strong>
                            Request a quotation at
                            <a href="mailto:contact@novocib.com">contact@novocib.com</a>
                        </strong>
                    </p>

                    <p class="my-4 mb-5 text-end">
                        <i class="fa-solid fa-download"></i>
                        Download
                        <a target="_blank" href="/app/documents/NovoCIB E-Nov10.pdf">
                            <strong>NOVOCIB's Bacterial Luciferase</strong>
                            <i class="fa-regular fa-file-pdf"></i>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- SCIENTIFIC DESCRIPTION -->
    <section class="bg-light py-4">
        <div class="container">

            <h3 class="mt-4">Description</h3>
            <p>
                NOVOCIB’s bacterial luciferase is purified from a naturally luminescent
                <em>Photobacterium phosphoreum</em> strain isolated from squid. The PDF states:
                “the strain was selected for its brightest luminescence,” and the cloned α and β
                subunits show high identity to native proteins (94% and 92%).
            </p>

            <h3 class="mt-4">Mechanism of Bioluminescence</h3>
            <p>
                In marine photobacteria, light production results from two sequential enzymatic reactions:
            </p>
            <ul>
                <li>
                    <strong>NAD(P)H–FMN oxidoreductase (EC 1.6.8.1)</strong> reduces FMN to FMNH₂.
                </li>
                <li>
                    <strong>Bacterial luciferase (EC 1.14.14.3)</strong> oxidizes FMNH₂ in the presence of
                    an aliphatic aldehyde and oxygen, producing visible light.
                </li>
            </ul>
            <p>
                The PDF explains: “In the presence of limiting concentrations of NADH, light intensity is
                proportional to NAD(P)H concentration,” enabling highly sensitive quantification.
            </p>

            <h3 class="mt-4">Applications</h3>
            <p>
                Coupling luciferase with FMN‑NAD(P)H oxidoreductase provides an ultrasensitive system for:
            </p>
            <ul>
                <li>NADH and NADPH quantification</li>
                <li>Dehydrogenase‑coupled assays</li>
                <li>Measurement of substrates of NADH‑dependent enzymes:
                    glucose, lactate, malate, ethanol, sorbitol, oxaloacetate (PDF)
                </li>
                <li>Bioluminescent biosensors</li>
                <li>Analytical biochemistry and metabolic studies</li>
            </ul>

            <h3 class="mt-4">Activity & Performance</h3>
            <p>
                According to the product sheet, the enzyme exhibits:
            </p>
            <p class="text-center fw-bold">
                “>500,000 RLU per second per µg of protein in the presence of 10 µM NADH and
                3.5 mU/mL FMN‑reductase” (PDF).
            </p>

            <div class="row justify-content-center mt-4">
                <div class="col-lg-3 d-flex justify-content-center">
                    <figure class="col-lg-12 col-6">
                        <img src="/app/img/Lux_Gel.png" alt="Lux gel photo" class="w-100" />
                        <figcaption class="text-center mt-1">
                            SDS‑PAGE showing α (39 kDa) and β (36 kDa) subunits.
                        </figcaption>
                    </figure>
                </div>
                <div class="col-lg-9 d-flex justify-content-center mb-5">
                    <figure class="col-lg-9">
                        <img src="/app/img/Lux_Calibration.png" alt="Lux Calibration Graph" class="w-100" />
                        <figcaption class="text-center mt-1">
                            Calibration curve for NADH using 50 µg/mL luciferase.
                            The PDF describes the assay conditions: “0.1 M KH₂PO₄ pH 6.9,
                            0.02% dodecanal, 50 µM FMN, 2 mg/mL BSA; 15‑second luminescence measurement.”
                        </figcaption>
                    </figure>
                </div>
            </div>

            <h3 class="mt-4">Related Products</h3>
            <p>
                NOVOCIB also provides:
            </p>
            <ul>
                <li><strong>Bacterial FMN‑Reductase (Ref. #E‑Nov8)</strong> — required for FMNH₂ generation</li>
            </ul>

        </div>
    </section>
    <!-- REFERENCES -->
    <div class="py-2 mt-5">
        <section class="container">
            <div class="references pt-2 row justify-content-center">
                <h5 class="ps-5 mb-4">
                    <i class="novo-blue fa-solid fa-microscope"></i>
                    Scientific References &amp; External Literature Sources
                </h5>

                <div class="col-2 d-lg-block d-none">
                    <img class="w-100 pt-3" src="/app/img/icons/book.svg" alt="book icon">
                </div>

                <div class="col-lg-8">
                    <ol>

                        <!-- MAIN LUCIFERASE REFERENCE FROM PDF -->
                        <li class="mb-3">
                            <a href="https://pubmed.ncbi.nlm.nih.gov/2490522/"
                                target="_blank"
                                class="text-decoration-none"
                                title="PubMed external link">

                                <div class="fw-semibold">
                                    Optically-Based Chemical and Biochemical Sensors for the Detection of Some Drugs and Biological Compounds. (1989)
                                </div>

                                <div class="fst-italic text-muted">
                                    Coulet P.R., Blum L.J., Gautier S.M.
                                </div>

                                <div class="small text-body-secondary">
                                    <i>Journal of Pharmaceutical &amp; Biomedical Analysis, 7(12), 1361–1376.</i>
                                </div>
                            </a>
                        </li>

                    </ol>
                </div>
            </div>
        </section>
    </div>

</main>

<style>
    .nucleoside-analogues {
        border: 1px solid silver;

        tr {
            border: 1px solid silver;
        }

        th {
            padding: 12px 0;
        }

        th,
        td {
            text-align: center;

        }
    }
</style>