<?php
class Banner
{
    static function gen($img_url = "/app/img/helix.jpg")
    {
        $url = parse_url($_SERVER['REQUEST_URI'])['path'];
        $paths = (explode("/", $url));
        global $title;
        $path_links = "";
        $global_path = "";
        foreach ($paths as $index => $path) {
            if ($index === 0) {
                $name = "Home";
                $path = "/";
            } else {
                $name = str_replace("-", " ", $path);
                $capitalized_name = "";
                foreach (explode(" ", $name) as $word) {
                    $capitalized_name  .= (ucfirst($word) . " ");
                }
                $name = $capitalized_name;
                if ($index != 1) {
                    $global_path .= '/';
                }
                $path_links .= "<span> > </span>";
            }
            if ($index === (count($paths) - 1)) {
                $global_path .= $path;

                if ($path === "search") {
                    $search = $_GET['sq'];
                    $search = "<span class='search_query'> : $search</span>";
                    $name .= $search;
                };
                $path_links .= "<span class='actual' >$name</span>";
            } else {
                $global_path .= $path;
                $path_links .= "<a href='$global_path'>$name</a>";
            }
        }

        ob_start(); ?>
        <div class="banner" style="background-image: url(<?= $img_url ?>); height: 500px">
            <div class="overlay">
                <div class="caption w-100">
                    <h1 class="title display-4"><?= $title ?? "Novocib" ?></h1>
                </div>
                <div class="links">
                    <p class="path lead">
                        <?= $path_links ?>
                    </p>
                </div>
            </div>
        </div>
        <!-- MAINTENANCE MESSAGE -->
        <div class="container">
            <div class="alert alert-success border-success-subtle bg-success-subtle py-4 mt-3 border rounded alert-dismissible fade show" role="alert">
                <h4 class="display-6 lead text-center">
                    <i class="fa-solid fa-circle-info"></i> Scheduled Maintenance
                </h4>

                <p class="text-center mt-4 mb-0">
                    We will be performing maintenance on our servers.
                    Our services and email systems will be temporarily unavailable for a few days. <br>
                    We will work to restore everything as quickly as possible.
                </p>

                <p class="text-center mt-3">Thank you for your patience.</p>

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
        <!-- END MAINTENANCE MESSAGE -->
<?php return ob_get_clean();
    }
}
