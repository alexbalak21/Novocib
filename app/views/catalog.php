<?php
$title = "Novocib Product Catalog - Enzymes, Assay Kits & Analytical Services";
ob_start(); ?>
<meta name="keywords" content="enzyme assay kits, nucleotide metabolism, purified enzymes, PRPP-S assay, HPRT assay, IMPDH2, dCK, ADK, nucleotide analysis, Novocib">
<meta name="description" content="Explore Novocib’s complete catalog of high-purity enzymes, enzymatic assay kits, nucleotide analysis services, and recombinant proteins for biochemical and pharmaceutical research.">
<?php $metas = ob_get_clean();
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/templates/new_base.php";
?>
<style>
  .btn-novo {
  background-color: var(--novo-blue) !important;
  color: white !important;
}

.btn-novo:hover {
  background-color: #2e5fa0 !important;
  color: white !important;
}
</style>

<div class="banner" style="background-image: url('/app/img/brand-table-banner.jpg'); height: 500px;">
  <div class="overlay">
    <div class="caption w-100">
      <div>
        <h1 class="title display-4 mt-lg-5 mt-4">Novocib Catalog</h1>
        <h2 class="text-center mt-3 lead display-6">Enzymes, Assay Kits &amp; Analytical Services</h2>
        <p class="text-center mt-4 lead mx-auto" style="max-width: 1000px; font-size: 1.8rem;">
          High-purity enzymes, validated enzymatic assay kits, and analytical services
          supporting research in nucleotide metabolism, drug development, and food quality control.
        </p>
      </div>
    </div>
    <div class="links">
      <p class="path lead"><a href="/">Home</a><span> &gt; </span><a href="/catalog">Catalog</a><span> </p>
    </div>
  </div>
</div>
<div class="container mt-5 text-center my-5 pt-3">
  <p class="text-center lead display-6 text-muted">Our Products & Services</p>
</div>

<!-- ============================
     ASSAY KITS
============================= -->
<section class="py-5">
  <div class="container">
    <h2 class="mb-4 novo-blue">Enzymatic Assay Kits</h2>
    <p>
      Novocib’s <strong>PRECICE® assay kits</strong> deliver high sensitivity, reproducibility,
      and convenience for nucleotide metabolism research, enzymatic activity measurement,
      and food freshness analysis.
    </p>

    <div class="row g-4 mt-3">

      <!-- PRPP-S -->
      <div class="col-md-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <h5 class="">PRECICE® PRPP-S Assay Kit</h5>
            <p class="small text-muted">Ref: K0709-04-2 : €515</p>
            <p>Quantification of PRPP synthetase activity. Ideal for nucleotide metabolism studies.</p>
            <a href="/convenient-assay-kits/prpp-s-assay-kit#main" class="btn btn-novo">View Product &nbsp;<i class="fa-solid fa-arrow-up-right-from-square"></i></a>
          </div>
        </div>
      </div>

      <!-- HPRT -->
      <div class="col-md-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <h5 class="">PRECICE® HPRT Assay Kit</h5>
            <p class="small text-muted">Ref: K0709-01-2 : €420</p>
            <p>Measures hypoxanthine-guanine phosphoribosyltransferase activity.</p>
            <a href="/convenient-assay-kits/hprt-assay-kit#main" class="btn btn-novo">View Product &nbsp;<i class="fa-solid fa-arrow-up-right-from-square"></i></a>
          </div>
        </div>
      </div>

      <!-- AMPDA -->
      <div class="col-md-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <h5 class="">AMP Deaminase Assay Kit</h5>
            <p class="small text-muted">Ref: K0709-05-2 : €510</p>
            <p>Quantifies AMP deaminase activity. Used in muscle physiology and metabolic research.</p>
            <a href="/convenient-assay-kits/ampda-assay-kit#main" class="btn btn-novo">View Product &nbsp;<i class="fa-solid fa-arrow-up-right-from-square"></i></a>
          </div>
        </div>
      </div>

      <!-- ITP-ase -->
      <div class="col-md-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <h5 class="">ITP-ase Assay Kit</h5>
            <p class="small text-muted">Ref: K0709-06-2 : €440</p>
            <p>Assay for inosine triphosphatase activity. Supports enzyme deficiency research.</p>
            <a href="/convenient-assay-kits/itp-ase-assay-kit#main" class="btn btn-novo">View Product &nbsp;<i class="fa-solid fa-arrow-up-right-from-square"></i></a>
          </div>
        </div>
      </div>

      <!-- ADK / dCK / Adk -->
      <div class="col-md-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <h5 class="">ADK & dCK Phosphorylation Kits</h5>
            <p class="small text-muted">ADK or dCK Phosphorylation Assay Kit : €530</p>
            <p>High-throughput phosphorylation assays for ADK, dCK, and Adk enzymes.</p>
            <a href="/convenient-assay-kits#assay-kits" class="btn btn-novo">Browse Kits &nbsp;<i class="fa-solid fa-arrow-up-right-from-square"></i></a>
          </div>
        </div>
      </div>

      <!-- Fish Freshness -->
      <div class="col-md-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <h5 class="">Fish Freshness Assay Kits</h5>
            <p class="small text-muted">from €190 to €420</p>
            <p>IMP-based freshness analysis for fish and fishmeal. Microplate & spectrophotometer formats.</p>
            <a href="/freshness-assay-kits/fishmeal-imp-assay-kit#main" class="btn btn-novo">View Product &nbsp;<i class="fa-solid fa-arrow-up-right-from-square"></i></a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ============================
     ENZYMES
============================= -->
<section class="py-5 bg-light">
  <div class="container">
    <h2 class="mb-4 novo-blue">Active & Purified Enzymes</h2>
    <p>
      Novocib supplies <strong>high-purity recombinant enzymes</strong> essential for
      nucleotide metabolism research, drug screening, and enzymatic pathway studies.
    </p>

    <div class="row g-4 mt-3">

      <!-- FMN Reductase -->
      <div class="col-md-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <h5 class="">FMN-Reductase</h5>
            <p class="small text-muted">25-100 Units : €440-€825</p>
            <p>Purified FMN-Reductase for biochemical assays.</p>
            <a href="/active-purified-enzymes/fmn-reductase#main" class="btn btn-novo">View Product &nbsp;<i class="fa-solid fa-arrow-up-right-from-square"></i></a>
          </div>
        </div>
      </div>

      <!-- Adenosine Kinase -->
      <div class="col-md-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <h5 class="">Human Adenosine Kinase</h5>
            <p class="small text-muted">100-200 mU : €355-€625</p>
            <p>Recombinant ADK for nucleotide metabolism and drug screening.</p>
            <a href="/active-purified-enzymes/recombinant-adenosine-kinase#main" class="btn btn-novo">View Product &nbsp;<i class="fa-solid fa-arrow-up-right-from-square"></i></a>
          </div>
        </div>
      </div>

      <!-- dCK -->
      <div class="col-md-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <h5 class="">Human Deoxycytidine Kinase</h5>
            <p class="small text-muted">500 mU - 2 U : €295-€945</p>
            <p>Purified dCK for nucleoside analog research.</p>
            <a href="/active-purified-enzymes/recombinant-deoxycytidine-kinase#main" class="btn btn-novo">View Product &nbsp;<i class="fa-solid fa-arrow-up-right-from-square"></i></a>
          </div>
        </div>
      </div>

      <!-- CN-II -->
      <div class="col-md-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <h5 class="">Human 5'-Nucleotidase II (cN-II)</h5>
            <p class="small text-muted">50-100 mU : €350-€560</p>
            <p>Purified cN-II enzyme for nucleotide metabolism studies.</p>
            <a href="/active-purified-enzymes/cn-ii#main" class="btn btn-novo">View Product &nbsp;<i class="fa-solid fa-arrow-up-right-from-square"></i></a>
          </div>
        </div>
      </div>

      <!-- IMPDH -->
      <div class="col-md-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <h5 class="">Human IMPDH Type 2</h5>
            <p class="small text-muted">100 - 250 mU : €295 - €550</p>
            <p>Recombinant IMPDH2 for biosynthesis pathway research.</p>
            <a href="/active-purified-enzymes/human-recombinant-impdh#main" class="btn btn-novo">View Product &nbsp;<i class="fa-solid fa-arrow-up-right-from-square"></i></a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ============================
     ANALYTICAL SERVICES
============================= -->
<section class="py-5">
  <div class="container">
    <h2 class="mb-3 novo-blue">Analytical Services</h2>
    <p class="mb-4">Precise, reliable HPLC analysis for pharmaceutical, food, and research applications. Our laboratory provides comprehensive nucleotide profiling with fast turnaround times.</p>

    <div class="row g-4">

      <!-- Nucleotide Analysis -->
      <div class="col-md-6">
        <div class="p-4 border rounded shadow-sm h-100">
          <h5 class="">Nucleotide Analysis Service</h5>
          <p class="small text-muted">from €300 to €400</p>
          <p>
            Advanced ion‑paired HPLC analysis of nucleotides in food, yeast extracts,
            ingredients, and biological samples. Ideal for quality control, R&D, and
            regulatory compliance.
          </p>
          <a href="/analytical-services/nucleotide-analysis-service#main"
            class="btn btn-novo">
            Learn More &nbsp;<i class="fa-solid fa-arrow-up-right-from-square"></i>
          </a>
        </div>
      </div>

      <!-- Yeast Extracts -->
      <div class="col-md-6">
        <div class="p-4 border rounded shadow-sm h-100">
          <h5 class="">Yeast Extract Nucleotide Analysis</h5>
          <p class="small text-muted">€420 per sample</p>
          <p>
            Specialized HPLC profiling of 5'‑nucleotides and flavor‑enhancing
            compounds in yeast extracts. Ideal for food, fermentation, and
            flavor‑ingredient quality control.
          </p>
          <a href="/analytical-services/yeast-extract-nucleotide-analysis#main"
            class="btn btn-novo">
            Learn More &nbsp;<i class="fa-solid fa-arrow-up-right-from-square"></i>
          </a>
        </div>
      </div>


      <!-- Cellular Nucleotide Analysis (HPLC-UV) -->
      <div class="col-md-6">
        <div class="p-4 border rounded shadow-sm h-100">
          <h5 class="">Cellular Nucleotide Analysis (HPLC‑UV)</h5>
          <p class="small text-muted">€350</p>
          <p>
            Full‑spectrum profiling of cellular nucleotides (bases, nucleosides, NMP, NDP, NTP) using ion‑pairing HPLC.
            Ideal for drug mode‑of‑action studies and metabolic pathway analysis.
          </p>
          <a href="/analytical-services/cellular-nucleotides-analysis#main" class="btn btn-novo">
            Learn More &nbsp;<i class="fa-solid fa-arrow-up-right-from-square"></i>
          </a>
        </div>
      </div>

      <!-- IMPDH2 Screening Service -->
      <div class="col-md-6">
        <div class="p-4 border rounded shadow-sm h-100">
          <h5 class="">IMPDH2 Screening Service</h5>
          <p class="small text-muted">€590</p>
          <p>
            IC50 determination for new compounds using recombinant human IMPDH2.
            Includes duplicate testing and mycophenolic acid as positive control.
          </p>
          <a href="/active-purified-enzymes/human-recombinant-impdh#screening" class="btn btn-novo">
            Learn More &nbsp;<i class="fa-solid fa-arrow-up-right-from-square"></i>
          </a>
        </div>
      </div>

    </div>


  </div>
</section>

<section class="py-5 text-white text-center" style="background-color: var(--novo-blue);">
  <div class="container">
    <h2 class=" mb-3">Request Pricing or Technical Information</h2>
    <p class="mb-4">Contact Novocib’s scientific team for product specifications, quotes, or custom project discussions.</p>
    <a href="/contact#main" class="btn btn-light btn-lg  px-4">Contact Novocib <i class="fa-regular fa-envelope"></i></a>
  </div>
</section>
