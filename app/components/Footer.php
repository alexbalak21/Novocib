<?php
class Footer
{
    static function gen()
    {
        ob_start(); ?>

        <footer class="container-fluid">
            <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-sm-7">
                            <ul class="contact">
                                <li>
                                    <i class="fa-solid fa-envelope"></i>
                                    <a href="mailto:contact@novocib.com">contact@novocib.com</a>
                                </li>
                                <li>
                                    <i class="fa-solid fa-phone"></i>
                                    <a href="tel:+33631446805">+33 6 31 44 68 05</a>
                                </li>
                                <li class="adress">
                                    <div><i class="fa-solid fa-location-dot"></i></div>
                                    <a href="">
                                        <div>
                                            Criée Boulogne
                                            <br />
                                            Halle à Marée Quai Jean Voisin
                                            <br />
                                            62200 BOULOGNE-SUR-MER
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6 col-sm-4">
                            <ul class="d-flex flex-column h-100">
                                <li>
                                    <i class="fa-brands fa-linkedin"></i>
                                    <a href="https://www.linkedin.com/company/novocib/">Linked-In</a>
                                </li>
                                <li>
                                    <i class="fa-solid fa-box-open"></i>
                                    <a href="/catalog">Products & Services</a>
                                </li>
                                <li class="mt-auto">
                                    <i class="fa-solid fa-user-tie"></i>
                                    <a href="mailto:admin@novocib.com">Website Admin</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="copyright">
                    <p class="text-center">Copyright © <?= date("Y") ?> Novocib. All Rights Reserved.</p>
                </div>
            </div>
        </footer>

        <style>
            footer i.fa-solid,
            footer i.fa-brands {
                display: inline-flex !important;
                align-items: center !important;
                justify-content: center !important;
                vertical-align: middle !important;
                line-height: 1 !important;
                --fa-line-height: 1 !important;
            }

            footer ul li i {
                width: 40px !important;
                height: 40px !important;
                display: inline-flex !important;
                align-items: center !important;
                justify-content: center !important;
                border-radius: 50% !important;
                background-color: white !important;
                margin-right: 50px !important;
                color: #336293 !important;
                padding: 0 !important;
            }
        </style>
        <?php return ob_get_clean();
    }
} ?>