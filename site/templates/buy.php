<?php if(c::get('stage')) go('http://getkirby.com/buy') ?>
<?php snippet('header') ?>

  <main class="main" role="main">

    <h1 class="alpha">Store</h1>
    <h2 class="beta margin-bottom"><?php echo $page->subtitle()->html() ?></h2>

    <div class="grid section">
      <div class="col-3-6 buy-section">
        <div class="text">
          <h3 class="gamma"><?= buyButton('personal', 'Personal license') ?></h3>
          <h4>
            <a data-fsc-action="Add,Checkout" data-fsc-item data-fsc-item-path-value="kirby-2-personal" href="#personal">
              <?php echo $page->personalPrice()->html() ?>
            </a>
            <small>(excluding VAT)</small>
          </h4>
          <?php echo $page->personal()->kirbytext() ?>
        </div>
        <?= buyButton('personal', 'Buy now &rarr;', ['class' => 'btn']) ?>

      </div><!--
   --><div class="col-3-6 buy-section">
        <div class="text">
          <h3 class="gamma"><?= buyButton('professional', 'Professional license') ?></h3>
          <h4>
            <a data-fsc-action="Add,Checkout" data-fsc-item-path-value="kirby-2-professional" href="https://getkirby.onfastspring.com/kirby-2-professional">
              <?php echo $page->commercialPrice()->html() ?>
            </a>
            <small>(excluding VAT)</small>
          </h4>
          <?php echo $page->commercial()->kirbytext() ?>
        </div>
        <?= buyButton('professional', 'Buy now &rarr;', ['class' => 'btn']) ?>
      </div>
    </div>

    <div class="section last">
      <div class="grid">
        <div class="col-3-6">
          <h2 class="beta">Free upgrade from Kirby 1</h2>
          <div class="text">
            <p>
              <strong>Owners of a Kirby 1 license can upgrade to a Kirby 2 Pro license for free! Your Kirby 1 license key is still valid.</strong>
            </p>
            <p>
              Please follow the <a href="/docs/installation/upgrade">upgrade guide</a> for your Kirby 1 installation.
            </p>
          </div>

          <h2 class="beta">Kirby 2 Professional Upgrade</h2>
          <div class="text">
            <p>
              Owners of a Kirby 2 personal license can <strong><a href="http://sites.fastspring.com/openwe/product/kirby2-professional-upgrade">upgrade to a professional license</a></strong> at any time.
            </p>
          </div>

        </div>
        <div class="col-3-6 last">
          <h2 class="beta">Voluntary upgrade packages</h2>
          <div class="text">
            <p>
              We've got the most amazing users and some of them asked us to provide a way to pay for an upgrade nonetheless. We made this possible with a set of voluntary Kirby 1 upgrade packages.
            </p>
            <ul class="upgrade-list">
              <li><a href="https://sites.fastspring.com/openwe/instant/kirby2-addict-upgrade">The <i>I'm a Kirby Addict</i> upgrade <small>€29 / $36</small></a></li>
              <li><a href="https://sites.fastspring.com/openwe/instant/kirby2-love-upgrade">The <i>I love Kirby</i> upgrade <small>€19 / $24</small></a></li>
              <li><a href="https://sites.fastspring.com/openwe/instant/kirby2-small-upgrade">The <i>I really like Kirby</i> upgrade <small>€9 / $12</small></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

  </main>

<?php snippet('footer') ?>
