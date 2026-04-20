<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/logic/db_operations.php";

class Products
{
    /**
     * Generate product table by title (multiple products)
     */
    static function gen(string $product_title)
    {
        $products = find_all_products_by_title($product_title);
        if (!$products) return "";

        // Compute latest update date
        $latestDate = self::get_latest_date($products);

        ob_start(); ?>
        
        <div class="table-responsive">
            <table class="table product mb-2">
                <?= self::render_table_header() ?>
                <tbody>
                    <?php foreach ($products as $product): ?>
                        <?= self::render_product_row($product) ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <?= self::render_updated_date($latestDate) ?>

        <?php return ob_get_clean();
    }

    /**
     * Generate product table from multiple IDs
     */
    static function gen_from_ids(...$ids)
    {
        $products = [];

        foreach ($ids as $id) {
            $p = get_product_by_id((int)$id);
            if ($p) $products[] = $p;
        }

        if (!$products) return "";

        // Compute latest update date
        $latestDate = self::get_latest_date($products);

        ob_start(); ?>
        
        <div class="table-responsive">
            <table class="table product mb-2">
                <?= self::render_table_header() ?>
                <tbody>
                    <?php foreach ($products as $product): ?>
                        <?= self::render_product_row($product) ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <?= self::render_updated_date($latestDate) ?>

        <?php return ob_get_clean();
    }

    /**
     * Shared: Render table header
     */
    private static function render_table_header()
    {
        return '
        <thead>
            <tr>
                <th class="d-none d-md-table-cell">#REF</th>
                <th class="text-center">SIZE</th>
                <th class="text-center d-none d-md-table-cell">PRICE</th>
                <th></th>
            </tr>
        </thead>';
    }

    /**
     * Shared: Render a single product row
     */
    private static function render_product_row($product)
    {
        ob_start(); ?>
        
        <tr>
            <td class="d-none d-md-table-cell"><?= "#" . $product['reference'] ?></td>
            <td class="text-center">
                <span class="fw-bold"><?= $product['title'] ?></span><br>
                <?= $product['size'] ?>
            </td>
            <td class="text-center d-none d-md-table-cell"><?= $product['price'] . ".00 €" ?></td>
            <td class="text-end pe-3">
                <div class="d-block d-md-none text-end mb-1 fw-bold">
                    <?= $product['price'] . ".00 €" ?>
                </div>
                <a class="btn btn-primary"
                   href="/inquiry?ref=<?= $product['reference'] ?>&amp;price=<?= $product['price'] ?>&amp;product=<?= urlencode($product['title']) ?>&amp;volume=<?= $product['size'] ?>">
                    Inquiry <i class="fa-solid fa-comment"></i>
                </a>
            </td>
        </tr>

        <?php return ob_get_clean();
    }

    /**
     * Shared: Compute latest update date from product list
     */
    private static function get_latest_date(array $products)
    {
        $latest = null;

        foreach ($products as $p) {
            if (!empty($p['updated_on'])) {
                $time = strtotime($p['updated_on']);
                if ($latest === null || $time > $latest) {
                    $latest = $time;
                }
            }
        }

        return $latest;
    }

    /**
     * Shared: Render updated date line
     */
    private static function render_updated_date($timestamp)
    {
        if (!$timestamp) return "";
        return '
        <p class="text-muted text-center">
            <em>Last updated on : ' . date('F jS, Y', $timestamp) . '.</em><br />
        </p>';
    }
}
?>
