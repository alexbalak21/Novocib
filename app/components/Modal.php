<?php
class Modal
{
  static function gen($modalId, $modalImgSrc, $alt, $modalCaption)
  {

    ob_start(); ?>
    <!-- MODAL -->
    <div class="modal fade" id="<?= $modalId ?>" tabindex="-1" aria-labelledby="<?= $modalId ?>Label" aria-hidden="true">
      <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
          <button type="button" class="btn-close ms-auto mt-2 me-2" data-bs-dismiss="modal" aria-label="Close"></button>
          <div class="modal-body text-center">
            <img src="<?= $modalImgSrc ?>"
              alt="<?= $modalCaption ?>"
              class="w-100"
              style="max-height: 80vh;" />
            <p class="mt-3 text-muted">
              <?= $alt ?>
            </p>
          </div>
        </div>
      </div>
    </div>
<?php return ob_get_clean();
  }
}
?>