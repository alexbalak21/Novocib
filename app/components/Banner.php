<?php
class Banner
{
    /**
     * Generate a banner with dynamic title and breadcrumb path.
     *
     * @param string $img_url Background image URL
     * @param string|null $page_title Optional page title override
     * @return string Rendered HTML banner
     */
    static function gen($img_url = "/app/img/helix.jpg", $page_title = null)
    {

        if ($img_url === "" || $img_url === null) {
            $img_url = "/app/img/helix.jpg"; // default image
        }
        // Parse current URL path
        $url = parse_url($_SERVER['REQUEST_URI'])['path'];
        $paths = explode("/", trim($url, "/"));

        global $title;
        $path_links = "";
        $global_path = "";

        // Build breadcrumb links
        foreach ($paths as $index => $path) {
            if ($path === "") {
                $name = "Home";
                $path = "/";
            } else {
                $name = ucwords(str_replace("-", " ", $path));
                $global_path .= "/" . $path;
                $path_links .= $index > 0 ? "<span> &gt; </span>" : "";
            }

            if ($index === count($paths) - 1) {
                // Handle search query display
                if ($path === "search" && isset($_GET['sq'])) {
                    $search = htmlspecialchars($_GET['sq']);
                    $name .= "<span class='search_query'> : $search</span>";
                }
                $path_links .= "<span class='actual'>$name</span>";
            } else {
                $path_links .= "<a href='$global_path'>$name</a>";
            }
        }

        // Determine banner title priority
        $display_title = !empty($page_title)
            ? $page_title
            : (!empty($title) ? $title : "Novocib");

        // Render banner HTML
        ob_start(); ?>
        <div class="banner" style="background-image: url('<?= $img_url ?>'); height: 500px;">
            <div class="overlay">
                <div class="caption w-100">
                    <h1 class="title display-4"><?= $display_title ?></h1>
                </div>
                <div class="links">
                    <p class="path lead"><?= $path_links ?></p>
                </div>
            </div>
        </div>
        <?php
        return ob_get_clean();
    }
}
?>
