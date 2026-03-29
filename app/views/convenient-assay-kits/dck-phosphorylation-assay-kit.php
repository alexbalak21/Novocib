<?php
global $title;
$title = "PRECICE® dCK Phosphorylation Assay Kit | Human Deoxycytidine Kinase Activity Assay";
$page_title = "Deoxycytidine Kinase Phosphorylation Assay Kit";

ob_start(); ?>
<meta name="description" content="High-sensitivity microplate assay for evaluating phosphorylation of ribo- and deoxyribonucleoside analogues by human recombinant deoxycytidine kinase (dCK). Validated with gemcitabine, cladribine, aracytidine, and natural nucleosides. Ideal for drug discovery and nucleoside analogue screening.">
<meta name="keywords" content="deoxycytidine kinase assay, dCK phosphorylation assay, nucleoside analogue phosphorylation, gemcitabine activation, cladribine phosphorylation, aracytidine phosphorylation, ribonucleoside assay, deoxyribonucleoside assay, NOVOCIB dCK, competitive inhibition assay, IMPDH coupled assay, HTS nucleoside screening">
<?php $metas = ob_get_clean();
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/templates/new_base.php";
?>
<?= Banner::gen("/app/img/dck_banner.webp"); ?>
<main>
    <section class="container mt-5">
        <!-- PAGE TITLE -->
        <div class="text-center mb-4">
            <h1 class="h2 underlinedTitle right">
                <span class="underlined novoblue right">PRECICE<sup>®</sup> dCK Phosphorylation Assay Kit</span>
            </h1>
            <p class="lead">
                Microplate-based spectrophotometric assay for evaluating phosphorylation of ribo- and deoxyribonucleoside analogues by human recombinant deoxycytidine kinase.
            </p>
        </div>
        <!-- BADGES -->
        <div class="text-center mb-5">
            <span class="badge bg-primary me-2">Includes active human dCK enzyme</span>
            <span class="badge bg-success me-2">High-throughput microplate format</span>
            <span class="badge bg-info text-dark">Validated with clinically important nucleoside analogues</span>
        </div>
        <div class="row">
            <!-- LEFT COLUMN: DESCRIPTION -->
            <article class="col-lg-6">
                <p>
                    The <strong>PRECICE<sup>®</sup>dCK Phosphorylation Assay Kit</strong>, developed by NOVOCIB's R&D team, provides a ready to use solution for evaluating the phosphorylation of novel ribonucleoside and deoxyribonucleoside analogues using the active human recombinant deoxycytidine kinase supplied in the kit. Each kit includes active human recombinant deoxycytidine kinase and calibrated solution of gemcitabine to ensure accurate and reproducible phosphorylation measurements without enzymology background.
                </p>
                <p>
                    Human deoxycytidine kinase (dCK) has unusually broad specificity and is the activation enzyme for many anticancer and antiviral nucleoside analogues Human deoxycytidine kinase (dCK). It phosphorylates purine deoxynucleosides (dAR, dGR); pyrimidine deoxynucleosides (dCR); ribonucleoside (CR) and also nucleoside analogues cytarabine; gemcitabine; cladribine; fludarabine and L-nucleosides like lamivudine (3TC). Structural studies have shown how dCK accommodates both D- and L-nucleosides, explaining why it activates drugs of both chiralities.
                </p>
                <p>
                <h4 class="novo-blue">Assay Principle</h4>
                <strong>PRECICE<sup>®</sup> dCK Phosphorylation Assay Kit</strong> is based on the competitive inhibition of deoxyinosine (dIR) phosphorylation by human deoxycytidine kinase (dCK) in the presence of a nucleoside analogue.
                </p>
                <ul>
                    <li>In the absence of a nucleoside competitor, dCK phosphorylates deoxyinosine, producing dIMP.</li>
                    <li>dIMP is immediately oxidized by IMPDH to dXMP, with concomitant formation of NADH₂.</li>
                    <li>In the presence of a nucleoside competitor, phosphorylation of deoxyinosine (a poor dCK substrate) is inhibited, resulting in a decrease in NADH₂ formation.</li>
                </ul>
                <p>Because IMPDH activity is supplied in large excess, the coupling reaction proceeds instantly, ensuring that the rate-limiting step is dCK activity. Thus, the enzymatic activity of dCK—corresponding to the formation rate of dIMP—is stoichiometrically and directly monitored by measuring NADH₂ production at 340 nm (Fig. 1).</p>
            </article>

            <!-- RIGHT COLUMN: IMAGES -->
            <aside class="col-lg-6 text-center">
                <figure class="col-xl-8 col-10 mx-auto mb-4">
                    <img class="img-fluid" src="/app/img/dck_assay_kit.jpg"
                        alt="Composition of the dCK Phosphorylation Assay Kit"
                        title="Contents of the dCK Phosphorylation Assay Kit">
                </figure>

                <figure class="border rounded mt-5">
                    <img class="w-100" src="/app/img/dCK-phosphorylation-kit.png"
                        alt="Reaction scheme of the dCK phosphorylation assay">
                    <figcaption class="text-muted my-1">
                        Figure 1. Enzymatic principle of PRECICE<sup>®</sup> dCK Phosphorylation Assay Kit
                    </figcaption>
                </figure>

                <h3 class="novo-blue mt-3 h4">PRECICE<sup>®</sup> dCK Phosphorylation Assay Kit</h3>
                <p class="text-muted lead strong">Ref. #K0307-01</p>
            </aside>

            <!-- PRODUCT INFO -->
            <div class="d-flex justify-content-center mt-5">
                <div class="col-lg-10 col-12 text-center">
                         <?= Product::gen("dCK Phosphorylation Assay Kit") ?>

                    <p class="strong">
                        Kit is provided in stable lyophilized form and
                        <span class="text-danger">shipped without dry ice</span>.
                    </p>

                    <p class="strong my-4">
                        Screening service by <span class="novo-blue">NOVOCIB</span> also available.<br>
                        For HTS evaluation of dCK activity in lysates, NOVOCIB offers the
                        <span class="novo-blue">dCK Assay Kit</span>.
                    </p>

                    <p class="mt-4 mb-5 text-end">
                        <a target="_blank" href="/app/documents/NovoCIB K0307-01-User Manual v140213SR Phosphorylation.pdf">
                            <i class="fa-solid fa-book-atlas"></i>
                            <strong>dCK Phosphorylation Assay Protocol</strong>
                            <i class="fa-regular fa-file-pdf"></i>
                        </a>
                    </p>

                </div>
            </div>

            <!-- VALIDATION SECTION -->
            <section class="col-12 mt-4">
                <h2 class="h4 novo-blue">Enzyme and Assay Validation</h2>
                <p>NOVOCIB's human dCK enzyme is an active, purified 33 kDa protein obtained by RT-PCR amplification of mRNA extracted from human hepatoma cells, expressed in E. coli, and characterized for its substrate properties (Km and Vmax). Its kinetic parameters were compared with published data for several nucleoside analogues (Table below).</p>
                <b>Characterization of the substrate properties (Km and Vmax) of nucleoside analogues for NOVOCIB human deoxycytidine kinase, compared with published kinetic parameters for well-characterized nucleoside analogues such as aracytidine, gemcitabine, cladribine, and lamivudine.</b>
                <div class="table-responsive mb-4">
                    <table class="table table-bordered table-striped align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>Substrate</th>
                                <th>K<sub>m</sub> (M)<br>Novocib dCK</th>
                                <th>V<sub>max</sub> (µmol/mg/min)<br>Novocib dCK</th>
                                <th>K<sub>m</sub> (µM)<br>Published</th>
                                <th>V<sub>max</sub> (µmol/mg/min)<br>Published</th>
                                <th>Reference</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td rowspan="3">Deoxycytidine</td>
                                <td rowspan="3">0.577</td>
                                <td rowspan="3">0.026</td>
                                <td>0.16</td>
                                <td>0.033</td>
                                <td>Johansson & Karlsson, 1995</td>
                            </tr>
                            <tr>
                                <td>1.3</td>
                                <td>0.069</td>
                                <td>Usova & Eriksson, 1997</td>
                            </tr>
                            <tr>
                                <td>0.57</td>
                                <td>0.004</td>
                                <td>Someya et al., 2003</td>
                            </tr>

                            <tr>
                                <td>Gemcitabine</td>
                                <td>42.71</td>
                                <td>0.325</td>
                                <td>—</td>
                                <td>—</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td rowspan="2">Deoxyadenosine</td>
                                <td rowspan="2">150.5</td>
                                <td rowspan="2">1.08</td>
                                <td>115</td>
                                <td>—</td>
                                <td>Sabini et al., 2008</td>
                            </tr>
                            <tr>
                                <td>480</td>
                                <td>1.5</td>
                                <td>Johansson & Karlsson, 1995</td>
                            </tr>

                            <tr>
                                <td>Aracytidine</td>
                                <td>6.81</td>
                                <td>0.224</td>
                                <td>15</td>
                                <td>0.009</td>
                                <td>Someya et al., 2003</td>
                            </tr>

                            <tr>
                                <td rowspan="2">Cladribine</td>
                                <td rowspan="2">56.5</td>
                                <td rowspan="2">0.285</td>
                                <td>89</td>
                                <td>0.126</td>
                                <td>Usova & Eriksson, 1997</td>
                            </tr>
                            <tr>
                                <td>24</td>
                                <td>0.76</td>
                                <td>Johansson & Karlsson, 1995</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

            <!-- IC50 SECTION -->
            <section class="col-12 mt-4">

                <h2 class="h4 novo-blue">Validated with Anticancer Nucleoside Analogues</h2>

                <p class="ms-5">
                    <i class="novo-blue fa-solid fa-arrow-right"></i>
                    Validated with gemcitabine, cladribine, aracytidine, and natural nucleosides.
                </p>

                <div class="row justify-content-center">
                    <div class="col-lg-8 col-12">
                        <img class="w-100" src="/app/img/dCK-competitors.png" alt="Graph showing competitive inhibition of deoxyinosine phosphorylation by various nucleoside analogues. The curves display percent dIR phosphorylated versus analogue concentration (0.001–10 mM, log scale), comparing poor, good, and excellent dCK substrates such as ribavirin, thymidine, deoxyuridine, ganciclovir, deoxyguanosine, fludarabine, gemcitabine, cladribine, aracytidine, and deoxycytidine.">
                    </div>

                    <div class="col-lg-8">
                        <table class="my-4 w-100 nucleoside-analogues">
                            <thead>
                                <tr>
                                    <th>Nucleoside Analogues</th>
                                    <td>Deoxycytidine</td>
                                    <td>Cladribine</td>
                                    <td>Aracytidine</td>
                                    <td>Gemcitabine</td>
                                    <td>Fludarabine</td>
                                    <td>Deoxyguanosine</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>IC50</strong> <br>(Competitive Inhibition)</td>
                                    <td>5µM</td>
                                    <td>30µM</td>
                                    <td>30µM</td>
                                    <td>100µM</td>
                                    <td>400µM</td>
                                    <td>1,2mM</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </section>

        </div>

        <!-- SIMPLE / HTS -->
        <section class="mt-5 col-lg-8 mx-auto">
            <h2 class="h3 novo-blue">Simple</h2>
            <p class="ms-5"><i class="novo-blue fa-solid fa-arrow-right"></i> Homogeneous and continuous (add-and-measure)</p>

            <h2 class="h3 novo-blue mt-4">High-Throughput Analysis</h2>
            <p class="ms-5"><i class="novo-blue fa-solid fa-arrow-right"></i> Test 12 analogues at 7 concentrations simultaneously</p>
            <p class="ms-5 mb-5"><i class="novo-blue fa-solid fa-arrow-right"></i> Readout at 340 nm</p>
        </section>

    </section>

    <!-- ORDER BUTTON -->
    <div class="text-center mt-3">
        <a class="btn btn-primary btn-lg"
            href="/inquiry?ref=K0307-01&product=dCK Phosphorylation Assay Kit&volume=1 plate (96 assays)">
            Order <i class="fa-solid fa-cart-arrow-down"></i>
        </a>
    </div>

    <!-- REFERENCES -->
     <section class="bg-light mt-5 pt-1 pb-1">
        <div class="container">
            <div class="references">
                <h2 class="h5 text-center pt-4 pb-4 novo-blue"><i class="fa-solid fa-book"></i> Scientific Articles citing Dck Phosphorylation Assay Kit from <span class="text-secondary">NOVOCIB</span>:</h5>
                <ol>
                    <li>
                        <a target="_blank" href="https://pmc.ncbi.nlm.nih.gov/articles/PMC6779049/">
                            Disparate Effects of Cytotoxic Chemotherapy on the Antiviral Activity of Antiretroviral Therapy: Implications for Treatments of HIV-Infected Cancer Patients (2019) <br>
                            S. Medina-Moreno, J.C. Zapata, M.L. Cottrell, N.M. Le, S. Tao, J. Bryant, E. Sausville, R.F. Schinazi, A.D.M. Kashuba, R.R. Redfield, A. Heredia*
                            Antivir Ther. 24(3): 177-186.
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="https://pubs.acs.org/doi/10.1021/acschembio.6b00788">
                            Activation Pathway of a Nucleoside Analog Inhibiting Respiratory Syncytial Virus Polymerase (2017) <br>
                            P.C. Jordan, S.K. Stevens, Y. Tam, R.P. Pemberton, S. Chaudhuri, A.D. Stoycheva, N. Dyatkina, G. Wang, J.A. Symons, J. Deval*, L. Beigelman
                            ACS Chem. Biol. 12(1): 83-91.
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="https://pubmed.ncbi.nlm.nih.gov/30251630/">Combined Proteomic and In Silico Target Identification Reveal a Role for 5-Lipoxygenase in Developmental Signaling Pathways (2018) Brand et al., Cell Chemical Biology 25, 1095-1106 <br> S. Brand, S. Roy, P. Schröder, B. Rathmer, J. Roos, S. Kapoor , S. Patil, C. Pommerenke , T. Maier, P. Janning , S. Eberth, D. Steinhilber, D. Schade, G. Schneider, K. Kumar, S. Ziegler, H. Waldmann</a>
                    </li>
                    <li>
                        <a target="_blank" href="https://www.sciencedirect.com/science/article/abs/pii/S0753332217326318">N (4)-[B-(4,4,5,5-tetramethyl-1,3,2-dioxaborolan)methyl]-2'-deoxycytidine as a potential boron delivery agent with respect to glioblastoma (2017) <br> Ł. Uram , J. Nizioł, P. Maj, J. Sobich , W. Rode, T. Ruman Biomedicine & Pharmacotherapy V. 95, Pages 749-755</a>
                    </li>
                    <li>
                        <a target="_blank" href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC8919275/">Rational Design of an Orally Active Anticancer Fluoropyrimidine, Pencitabine, a Hybrid of Capecitabine and Gemcitabine (2022) <br> Thomas I. Kalman ACS Med Chem Lett. 13(3): 409-416</a>
                    </li>
                </ol>
            </div>
        </div>
    </div>

</main>