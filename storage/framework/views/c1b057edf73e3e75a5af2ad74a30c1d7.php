
<main>
  <section class="Hero">
    <div class="Hero__content">
    <?php
      use App\Models\Content;
    ?>

      <div class="Hero__title"><?php echo Content::where('section', 'educatedmind')->value('content'); ?></div>
      <div class="Hero__subtitle"><?php echo Content::where('section', 'Educatedmind_content')->value('content'); ?>

      </div>
<div id="pxl-pxl_button-1fcc5c6-3916" class="pxl-button pxl-atc-link" data-wow-delay="ms" data-aos="fade-up">
          <a href="abo" class="btn pxl-icon-active btn-block-inline btn-text-nina btn-icon-box8 pxl-icon--right">
            <div class="pxl--btn-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="white">
                <path
                  d="M5.83333 15C5.58333 15 5.41667 14.9167 5.25 14.75C4.91667 14.4167 4.91667 13.9167 5.25 13.5833L13.5833 5.25C13.9167 4.91667 14.4167 4.91667 14.75 5.25C15.0833 5.58333 15.0833 6.08333 14.75 6.41667L6.41667 14.75C6.25 14.9167 6.08333 15 5.83333 15Z">
                </path>
                <path
                  d="M14.1664 14.1667C13.6664 14.1667 13.3331 13.8333 13.3331 13.3333V6.66667H6.6664C6.1664 6.66667 5.83307 6.33333 5.83307 5.83333C5.83307 5.33333 6.1664 5 6.6664 5H14.1664C14.6664 5 14.9997 5.33333 14.9997 5.83333V13.3333C14.9997 13.8333 14.6664 14.1667 14.1664 14.1667Z">
                </path>
              </svg>
            </div>

            <div>
              <span class="pxl--btn-text" data-text="Explore Caurses">
                <span style="transition-delay: 0.045s;">
                  E</span>
                <span style="transition-delay: 0.09s;">
                  X</span>
                <span style="transition-delay: 0.135s;">
                  P</span>
                <span style="transition-delay: 0.18s;">
                  L</span>
                <span style="transition-delay: 0.225s;">
                  O</span>
                <span style="transition-delay: 0.27s;">
                  R</span>
                <span style="transition-delay: 0.315s;">
                  E</span>
                <span class="spacer" style="transition-delay: 0.405s;">
                  &nbsp;</span>
                <span style="transition-delay: 0.36s;">
                  C</span>
                <span style="transition-delay: 0.45s;">
                  A</span>
                <span style="transition-delay: 0.495s;">
                  U</span>
                <span style="transition-delay: 0.495s;">
                  R</span>
                <span style="transition-delay: 0.54s;">
                  S</span>
                <span style="transition-delay: 0.585s;">
                  E</span>
              </span>
              <span style="transition-delay: 0.62s;">
                S</span>
              </span>
            </div>

          </a>
        </div>    </div>
    <div class="Hero__image" id="Hero__image"></div>
    <div class="Hero__mask"></div>
    <canvas id="snowfall" class="Hero__snowfall"></canvas>
  </section>
</main><?php /**PATH C:\xampp\htdocs\newdigitalorra\resources\views/frontend/herosection.blade.php ENDPATH**/ ?>