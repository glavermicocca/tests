<h1>
    <?= $this->url->link('<img src="/plugins/MittelTheme/Template/img/logo.svg" width="25"/>', 'DashboardController', 'show', array(), false, '', t('Dashboard')) ?>
    <span class="title">
        <?php if (! empty($project) && ! empty($task)): ?>
            <?= $this->url->link($this->text->e($project['name']), 'BoardViewController', 'show', array('project_id' => $project['id'])) ?>
        <?php else: ?>
            <?= $this->text->e($title) ?>
        <?php endif ?>
    </span>
    <?php if (! empty($description)): ?>
        <small class="tooltip" title="<?= $this->text->markdownAttribute($description) ?>">
            <i class="fa fa-info-circle"></i>
        </small>
    <?php endif ?>
</h1>