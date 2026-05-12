<?php
class Services
{
    static function gen()
    {
        ob_start(); ?>
        <!-- SERVICES SECTION -->
        <section class="services-section container mt-4 mb-5">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h2 class="underlinedTitle center">
                        <span class="underlined novoblue center">Our Services</span>
                    </h2>
                </div>
            </div>

            <div class="row g-4 justify-content-center">
                <!-- Service Card 1: Assay Kits -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card text-center">
                        <div class="service-icon">
                            <i class="fa-solid fa-flask-vial"></i>
                        </div>
                        <h3 class="service-title">Assay Kits</h3>
                        <p class="service-description">
                            PRECICE® One-step kits for rapid and reliable nucleotide analysis. Designed for easy use in research, quality control, and food safety applications.
                        </p>
                        <a class="btn btn-primary mt-3" href="/convenient-assay-kits">Learn More</a>
                    </div>
                </div>

                <!-- Service Card 2: Analytical Services -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card text-center">
                        <div class="service-icon">
                            <i class="fa-solid fa-microscope"></i>
                        </div>
                        <h3 class="service-title">Analytical Services</h3>
                        <p class="service-description">
                            Professional HPLC-UV analysis for comprehensive nucleotide profiling. Expert determination of nucleotides in cells, food, and feed samples.
                        </p>
                        <a class="btn btn-primary" style="margin-top: 36px;" href="/analytical-services">Learn More</a>
                    </div>
                </div>

                <!-- Service Card 3: Active Enzymes -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card text-center">
                        <div class="service-icon">
                            <i class="fa-solid fa-dna" "></i>
                        </div>
                        <h3 class="service-title">Active Purified Enzymes</h3>
                        <p class="service-description">
                            High-quality recombinant enzymes for biochemical research. Specialized enzyme solutions for nucleotide metabolism studies and screening applications.
                        </p>
                        <a class="btn btn-primary mt-3" href="/active-purified-enzymes">Learn More</a>
                    </div>
                </div>
            </div>
        </section>

        <style>
            .service-card {
                background-color: #f9fafb;
                border: 1px solid #e5e7eb;
                border-radius: 8px;
                padding: 2rem 1.5rem;
                height: 100%;
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }

            .service-card i{
                color: var(--novo-blue);
                font-size: 3rem;
                margin-bottom: 1rem;
            }

            .service-card:hover {
                transform: translateY(-5px);
                box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            }

            .service-icon {
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .service-title {
                font-weight: 600;
                color: var(--novo-blue);
                margin: 1rem 0;
                font-size: 1.25rem;
            }

            .service-description {
                color: #4b5563;
                font-size: 0.95rem;
                line-height: 1.6;
                margin: 0;
            }
        </style>
<?php
        return ob_get_clean();
    }
}
