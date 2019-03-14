<header class="header">
    <div class="header-inner">
        <h4 class="m-0 mr-5 flex-shrink-0">
            <a class="header-link" href="/">Sports Monitor</a>
        </h4>
        <nav class="header-nav">
            <div class="d-flex align-items-center">
                <?php foreach ($this->menu as $item): ?>
                    <h6 class="header-nav-item font-weight-normal">
                        <a class="header-nav-link btn btn-primary"
                           href="<?= $item['url'] ?>">
                            <?= $item['title'] ?>
                        </a>
                    </h6>
                <?php endforeach; ?>
            </div>
            <h6 class="header-nav-item font-weight-normal">
                <a class="header-nav-link btn btn-primary"
                   href="<?= $this->menuProfile['url'] ?>">
                    <?= $this->menuProfile['title'] ?>
                </a>
            </h6>
        </nav>
    </div>
</header>