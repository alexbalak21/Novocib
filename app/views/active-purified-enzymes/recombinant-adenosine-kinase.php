<?php
global $title;
$title = "Human Active Adenosine Kinase Enzyme";

ob_start(); ?>
<meta name="keywords" content="adenosine kinase, recombinant enzyme, human ADK, ATP phosphorylation, nucleoside analogs, drug discovery, epilepsy, inflammation, cancer, NOVOCIB, enzyme assay kit, Km Vmax data, ribavirin phosphorylation">
<meta name="description" content="NOVOCIB's recombinant human adenosine kinase (ADK) is a purified enzyme used in drug discovery and nucleoside phosphorylation assays. Includes validated Km and Vmax data for ribavirin, tubercidine, inosine, and more. A key therapeutic target for epilepsy, inflammation, and cancer.">
<?php $metas = ob_get_clean();

require_once $_SERVER['DOCUMENT_ROOT'] . "/app/templates/new_base.php";
?>

<?= Banner::gen() ?>
<div class="container mt-5">
  <div class="row">
    <h2 class="underlinedTitle center">
      <span class="underlined novoblue center">Human Adenosine Kinase (ADK, EC 2.7.1.20)</span>
    </h2>
    <div class="col-lg-6">
      <p><i><strong>Synonyms: </strong>ADK, Adenosine 5'-phosphotransferase</i></p>
      <p>
        <b class="novo-blue">NOVOCIB</b>'s human adenosine kinase is
        an active and purified, 345-aa short form (39kDa) ADK protein cloned by RT-PCR amplification of mRNA extracted from human hepatoma cells and expressed in E.coli. The sequence of the cloned ADK (GenBank accession number U50196) was confirmed by DNA sequencing (100% identity).
      </p>
      <p class="mt-3 mb-4">
        Adenosine kinase catalyzes the transfer of &gamma;-phosphate from ATP to the 5'-hydroxyl of adenosine, a key modulator of central nervous system functions and a signal molecule involved in hypoxia, inflammation, and nociception. Together with adenosine deaminase, adenosine kinase regulates intra- and extracellular adenosine concentration. 
        <br><br>
        Inhibition of adenosine kinase selectively increases local adenosine concentrations and reduces seizure susceptibility and nociception in vivo. ADK dysfunction is implicated in diabetes, epilepsy, and cancer. Consequently, ADK is a rational therapeutic target for drug discovery, and adenosine-regulating drugs have been tested as analgesic, anti-inflammatory, and neuroprotective agents. 
        <br><br>
        ADK is also responsible for phosphorylation and clinical activity of several therapeutic nucleosides, including the antiviral drug ribavirin, immunosuppressive drug mizoribine, and anticancer C-nucleoside tiazofurin.
      </p>
      <p>
        For rapid evaluation of substrate properties of novel nucleoside analogs for human adenosine kinase see our
        <a href="/convenient-assay-kits/adk-phosphorylation-assay-kit">PRECICE® ADK Phosphorylation Assay Kit.</a>
      </p>
      <p>
        For rapid HTS search of novel ADK inhibitors see our
        <a href="/convenient-assay-kits/adk-assay-kit">PRECICE® ADK Assay Kit.</a>
      </p>
    </div>
    <div class="col-lg-6 my-5">
      <div class="text-center">
        <img class="w-100" src="/app/img/ADK_Reaction.png" alt="Reaction schema of human adenosine kinase" />
        <h4 class="novo-blue mt-4">Adenosine Kinase</h4>
        <h5 class="mb-5">Ref. #E-Nov5</h5>
      </div>
    </div>
  </div>
</div>

<!-- Km/Vmax Section -->
<div class="container mt-5">
  <h2 class="text-center novo-blue">Km and Vmax Data for Nucleoside Analogues</h2>
  <p>
    Validated enzymatic parameters for human recombinant adenosine kinase (ADK) compared with published values:
  </p>

  <!-- Responsive table wrapper -->
  <div class="table-responsive">
    <table class="table table-bordered table-sm">
      <thead class="table-light">
        <tr>
          <th scope="col">Substrate</th>
          <th scope="col">Km (µM, Novocib)</th>
          <th scope="col">Kcat (min⁻¹, Novocib)</th>
          <th scope="col">Km (µM, Published)</th>
          <th scope="col">Kcat (min⁻¹, Published)</th>
          <th scope="col">Reference</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Adenosine</td>
          <td>11</td>
          <td>1.5</td>
          <td>3.2 / 0.150</td>
          <td>13</td>
          <td>
            <a class="text-black" href="#ref-1">
              Wu et al. 2005; Yamada et al. 1981 <i class="fa-solid fa-down-long"></i>
            </a>
          </td>
        </tr>
        <tr>
          <td>Ribavirin</td>
          <td>328</td>
          <td>1.9</td>
          <td>540</td>
          <td>1.8</td>
          <td>
            <a class="text-black" href="#ref-2">
              Wu et al. 2005 <i class="fa-solid fa-down-long"></i>
            </a>
          </td>
        </tr>
        <tr>
          <td>Deoxyadenosine</td>
          <td>295</td>
          <td>3.4</td>
          <td>360</td>
          <td>-</td>
          <td>
            <a class="text-black" href="#ref-3">
              Yamada et al. 1981 <i class="fa-solid fa-down-long"></i>
            </a>
          </td>
        </tr>
        <tr>
          <td>Tubercidine</td>
          <td>12</td>
          <td>2.2</td>
          <td>-</td>
          <td>-</td>
          <td>-</td>
        </tr>
        <tr>
          <td>Inosine</td>
          <td>1758</td>
          <td>2.6</td>
          <td>-</td>
          <td>-</td>
          <td>-</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<!-- Assay Conditions -->
<div class="bg-light">
  <div class="container">
    <h2 class="pt-4 mb-4 text-center novo-blue">Assay Conditions and Enzyme Characteristics</h2>
    <div class="row pt-3">
      <div class="col-lg-6 row">
        <div class="col-3">
          <img class="w-100" src="/app/img/AK_Gel.png" alt="SDS-PAGE gel showing purified human adenosine kinase" />
        </div>
        <div class="col-8">
          <p><strong>Unit Definition:</strong> One unit of adenosine kinase converts 1.0 µmole of inosine and ATP to IMP and ADP per minute at pH 8 at 37°C, as measured by a coupled IMPDH enzyme system.</p>
          <p><strong>Specific Activity:</strong> ≥ 0.200 unit/mg protein.</p>
          <p><strong>Purity:</strong> controlled by 12% AA SDS-PAGE.</p>
        </div>
      </div>
      <div class="col-lg-6">
        <p><strong>Assay condition:</strong> Enzymatic activity of adenosine kinase with particular nucleoside substrate is measured by spectrophotometric assays in a coupled lactate dehydrogenase / pyruvate kinase system. Assays were carried out at 37°C, at 50mM Tris-HCl pH7.6; 50mM KCl, 5mM MgCl2, 2.5mM ATP, 0.1mM NADH, 1mM phosphoenolpyruvate, 1mM DTT, PK 5U/ml, LDH 5U/ml. Reaction was followed in an iEMS Reader MF (Labsystems) microtiter plate reader at 340nm.</p>
        <div class="text-center pb-4">
          <img class="col-lg-9" src="/app/img/AK_Kinetics.png" alt="Kinetics graph of ribavirin phosphorylation by adenosine kinase" />
        </div>
      </div>
    </div>
  </div>
</div>


<!-- FAQ Section -->
<div class="container mt-5">
  <h2 class="underlinedTitle">Frequently Asked Questions</h2>
  <div class="accordion" id="faqADK">
    <div class="accordion-item">
      <h3 class="accordion-header">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
          What substrates does adenosine kinase phosphorylate?
        </button>
      </h3>
      <div id="faq1" class="accordion-collapse collapse show">
        <div class="accordion-body">
          ADK phosphorylates adenosine and several nucleoside analogues including ribavirin, tubercidine, mizoribine, and tiazofurin.
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h3 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
          How is enzyme purity controlled?
        </button>
      </h3>
      <div id="faq2" class="accordion-collapse collapse">
        <div class="accordion-body">
          Purity is verified by SDS-PAGE analysis and specific activity measurements to ensure consistent quality.
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h3 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
          Can assays be customized?
        </button>
      </h3>
      <div id="faq3" class="accordion-collapse collapse">
        <div class="accordion-body">
          Yes, client-specified alterations and custom nucleoside phosphorylation assays are available upon request.
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h3 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
          What applications does ADK have in drug discovery?
        </button>
      </h3>
      <div id="faq4" class="accordion-collapse collapse">
        <div class="accordion-body">
          ADK is a validated target for analgesic, anti-inflammatory, and neuroprotective drugs. It is also essential for the activation of therapeutic nucleosides such as ribavirin, mizoribine, and tiazofurin, making it highly relevant in antiviral, immunosuppressive, and anticancer drug development.
        </div>
      </div>
    </div>
  </div>
</div>

<!-- References Section -->
<div class="bg-light">
    <div class="container">
      <div class="references mt-5 pb-3">
        <h5 class="ms-5 pt-4 pb-3 text-secondary">
          Scientific Works citing <span class="novo-blue">NOVOCIB</span> Adenosine Kinase and PRECICE® ADK Assay kits:
        </h5>
        <ol>
          <li id="ref-1">
            <a href="https://pubmed.ncbi.nlm.nih.gov/15917525/" target="_blank">
              <i>Wu JZ, Larson G, Walker H, Shim JH, Hong Z.</i><br>
              Phosphorylation of ribavirin and viramidine by adenosine kinase and cytosolic 5'-nucleotidase II: Implications for ribavirin metabolism in erythrocytes. <b>Antimicrob Agents Chemother.</b> 2005;49(6):2164-2171.
            </a>
          </li>
          <li id="ref-2">
            <a href="https://pubmed.ncbi.nlm.nih.gov/7272111/" target="_blank">
              <i>Yamada Y, Goto H, Ogasawara N.</i><br>
              Adenosine kinase from human liver. <b>Biochim Biophys Acta.</b> 1981;660(1):36-43.
            </a>
          </li>
          <li id="ref-3">
            <a href="https://pubmed.ncbi.nlm.nih.gov/34204594/" target="_blank">
              <i>Orlicka-Płocka M, Fedoruk-Wyszomirska A, Gurda-Wozna D, Pawelczak P, Krawczyk P, Giel-Pietraszuk M, Framski G, Ostrowski T, Wyszko E.</i><br>
              Implications of Oxidative Stress in Glioblastoma Multiforme Following Treatment with Purine Derivatives. <b>Antioxidants.</b> 2021;10:950.
            </a>
          </li>
          <li>
            <a href="http://www.ncbi.nlm.nih.gov/pubmed/10200156" target="_blank">
              <i>Johnson LM, Smith OJ, Hahn DA, Baer CF.</i><br>
              Short-term heritable variation overwhelms 200 generations of mutational variance for metabolic traits in <i>Caenorhabditis elegans</i>. <b>Evolution.</b> 2020;74(11):2451-2464.
            </a>
          </li>
          <li>
            <a href="https://www.sfn.org/-/media/SfN/Documents/Annual-Meeting/FinalProgram/NS2017/Full-Abstract-PDFs-2017/SFN17_Abstract-PDFs---Posters_4_Tue_AM.pdf" target="_blank">
              <i>Danielyan K, Vardanyan RD, Simonyan A, Sagyan AS.</i><br>
              The sole role of PRPS-1 in the regenerative processes after experimental stroke. Poster#: 459.07/A7. <b>Society for Neuroscience Annual Meeting.</b> Washington, DC, 2017.
            </a>
          </li>
          <li>
            <a href="https://pubmed.ncbi.nlm.nih.gov/28504647/" target="_blank">
              <i>Nayar U, Sadek J, Reichel J, Hernandez-Hopkins D, Akar G, Barelli PJ, Sahai MA, Zhou H, Totonchy J, Jayabalan D, Niesvizky R, Guasparri I, Hassane D, Liu Y, Sei S, Shoemaker RH, Warren JD, Elemento O, Kaye KM, Cesarman E.</i><br>
              Identification of a nucleoside analog active against adenosine kinase-expressing plasma cell malignancies. <b>J Clin Invest.</b> 2017;127(6):2066-2080.
            </a>
          </li>
          <li>
            <a href="https://pubmed.ncbi.nlm.nih.gov/27410258/" target="_blank">
              <i>Toti KS, Osborne D, Ciancetta A, Boison D, Jacobson KA.</i><br>
              South (S)- and North (N)-Methanocarba-7-Deazaadenosine Analogues as Inhibitors of Human Adenosine Kinase. <b>J Med Chem.</b> 2016;59(14):6860-6877.
            </a>
          </li>
          <li>
            <a href="https://pubmed.ncbi.nlm.nih.gov/21963049/" target="_blank">
              <i>Bjursell MK, Blom HJ, Cayuela JA, Engvall ML, Lesko N, Balasubramaniam S, Brandberg G, Halldin M, Falkenberg M, Jakobs C, Smith D, Struys E, von Döbeln U, Gustafsson CM, Lundeberg J, Wedell A.</i><br>
              Adenosine Kinase Deficiency Disrupts the Methionine Cycle and Causes Hypermethioninemia, Encephalopathy, and Abnormal Liver Function. <b>Am J Hum Genet.</b> 2011;89(4):507-515.
            </a>
          </li>
          <li>
            <a href="https://pubmed.ncbi.nlm.nih.gov/21427729/" target="_blank">
              <i>Cesarman E, Nayar U, Warren JD, Sadek J.</i><br>
              Novel nucleoside analogs and use thereof in therapeutic treatment. <b>Patent application filed by Cornell University.</b> US20190225643A1.
            </a>
          </li>
        </ol>
      </div>
    </div>
</div>
