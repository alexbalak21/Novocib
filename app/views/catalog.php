<?php
$title = "Catalog";

ob_start(); ?>
<meta name="keywords" content="">
<meta name="description" content="">
<?php $metas = ob_get_clean();

require_once $_SERVER['DOCUMENT_ROOT'] . "/app/templates/new_base.php";
?>
<?= Banner::gen() ?>

<section class="py-5 bg-light">
  <div class="container">
    <h1 class="display-5 fw-bold text-center mb-4">
      Novocib – High‑Purity Enzymes, Nucleotides & Assay Kits
    </h1>
    <p class="lead text-center mx-auto" style="max-width: 800px;">
      Discover Novocib’s complete catalog of high‑purity enzymes, nucleotides, 
      enzymatic assay kits, and custom biochemical services. Trusted by 
      pharmaceutical companies and research laboratories worldwide.
    </p>
  </div>
</section>

<section class="py-5">
  <div class="container">
    <h2 class="fw-bold mb-4">Enzymes</h2>
    <p>
      Novocib provides a wide range of <strong>research‑grade enzymes</strong> 
      used in nucleotide metabolism, drug discovery, and enzymology research. 
      Each enzyme is purified to the highest standards to ensure reproducibility 
      and scientific accuracy.
    </p>

    <div class="row g-4 mt-3">
      <div class="col-md-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <h5 class="card-title fw-bold">Nucleotide Metabolism Enzymes</h5>
            <p class="card-text">
              AMP deaminase, adenylate kinase, HGPRT, purine nucleoside 
              phosphorylase, and more.
            </p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <h5 class="card-title fw-bold">Kinases & Phosphatases</h5>
            <p class="card-text">
              High‑specificity kinases and phosphatases for phosphorylation 
              studies and metabolic pathway analysis.
            </p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <h5 class="card-title fw-bold">Dehydrogenases</h5>
            <p class="card-text">
              NAD/NADP‑dependent dehydrogenases for enzymatic assays and 
              metabolic profiling.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-5 bg-light">
  <div class="container">
    <h2 class="fw-bold mb-4">Nucleotides & Metabolites</h2>
    <p>
      Novocib produces <strong>high‑purity nucleotides</strong> and metabolic 
      intermediates essential for enzymatic assays and biochemical research.
    </p>

    <ul class="list-group list-group-flush mt-3">
      <li class="list-group-item">ATP, ADP, AMP, GTP, GDP, GMP</li>
      <li class="list-group-item">NAD / NADH – NADP / NADPH</li>
      <li class="list-group-item">PRPP, ribose‑5‑phosphate, IMP, XMP</li>
    </ul>
  </div>
</section>

<section class="py-5">
  <div class="container">
    <h2 class="fw-bold mb-4">Enzymatic Assay Kits</h2>
    <p>
      Ready‑to‑use <strong>assay kits</strong> designed for enzyme activity 
      measurement, metabolic pathway analysis, and drug screening.
    </p>

    <div class="row g-4 mt-3">
      <div class="col-md-6">
        <div class="p-4 border rounded shadow-sm h-100">
          <h5 class="fw-bold">Purine & Pyrimidine Pathway Kits</h5>
          <p>AMP deaminase, adenylate kinase, HGPRT activity kits.</p>
        </div>
      </div>

      <div class="col-md-6">
        <div class="p-4 border rounded shadow-sm h-100">
          <h5 class="fw-bold">Energy Metabolism Kits</h5>
          <p>ATP/ADP ratio, NAD/NADH quantification, mitochondrial assays.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-5 bg-light">
  <div class="container">
    <h2 class="fw-bold mb-4">Cell‑Based Assays</h2>
    <p>
      Evaluate cellular energy state, mitochondrial function, and cytotoxicity 
      with Novocib’s validated cell‑based assays.
    </p>

    <ul class="list-group list-group-flush mt-3">
      <li class="list-group-item">ATP/ADP & AMP/ATP ratio assays</li>
      <li class="list-group-item">Mitochondrial function assays</li>
      <li class="list-group-item">Cytotoxicity & viability assays</li>
    </ul>
  </div>
</section>

<section class="py-5">
  <div class="container">
    <h2 class="fw-bold mb-4">Custom Biochemical Services</h2>
    <p>
      Novocib offers <strong>custom enzyme purification</strong>, 
      <strong>assay development</strong>, and <strong>biochemical analysis</strong> 
      tailored to research and pharmaceutical needs.
    </p>

    <div class="row g-4 mt-3">
      <div class="col-md-4">
        <div class="p-4 border rounded shadow-sm h-100">
          <h5 class="fw-bold">Custom Enzyme Purification</h5>
          <p>High‑purity enzymes produced on demand.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="p-4 border rounded shadow-sm h-100">
          <h5 class="fw-bold">Assay Development</h5>
          <p>Design and optimization of enzymatic assays.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="p-4 border rounded shadow-sm h-100">
          <h5 class="fw-bold">Biochemical Analysis</h5>
          <p>Metabolite quantification, enzyme kinetics, pathway studies.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-5 bg-primary text-white text-center">
  <div class="container">
    <h2 class="fw-bold mb-3">Request Pricing or Technical Information</h2>
    <p class="mb-4">
      Contact Novocib’s scientific team for product specifications, quotes, or 
      custom project discussions.
    </p>
    <a href="#" class="btn btn-light btn-lg fw-bold px-4">
      Contact Novocib
    </a>
  </div>
</section>
