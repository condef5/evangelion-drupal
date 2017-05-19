<!-- region header -->
<header class="header has-shadow">
  <div class="container">
    <div class="row middle-xs">
      <div class="col-xs-6">
        <a class="logo" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
          <img src="<?php print $logo; ?>"  alt="<?php print t('Home'); ?>" />
        </a>
      </div>
      <div class="col-xs-6">
        <div class="">
          <?php if (!empty($page['second_menu'])): ?>  
            <?php print render($page['second_menu']); ?>
          <?php endif; ?>          
        </div>
        <div class="">
          <?php if (!empty($page['main_menu'])): ?>  
            <?php print render($page['main_menu']); ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>  
</header>

<!-- region banner -->
<div class="banner">
  <?php if (!empty($page['banner'])): ?>  
    <?php print render($page['banner']); ?>
  <?php endif; ?>
</div>

<!-- region pre content -->
<div class="pre_content">
  <?php if (!empty($page['pre_content'])): ?>  
    <?php print render($page['pre_content']); ?>
  <?php endif; ?>     
</div>

<!-- content page -->
<div id="main">
  <div class="container">
    <div class="row">
      <!-- sidebar_first -->
      <?php if (!empty($page['sidebar_first'])): ?>
        <aside id="sidebar_first" class="sidebar col-xs-12 col-sm-3">
          <?php print render($page['sidebar_first']); ?>
        </aside>
      <?php endif; ?> 
      <!-- content -->
      <?php if (empty($page['sidebar_first']) && empty($page['sidebar_second']) ): ?>
        <div class="content col-xs-12 col-sm-9">
      <?php endif; ?>
      <?php if (!empty($page['sidebar_first']) && !empty($page['sidebar_second']) ): ?>
        <div class="content col-xs-12 col-sm-9">
      <?php endif; ?>
      <?php if (!empty($page['sidebar_first']) && empty($page['sidebar_second']) ): ?>
        <div class="content col-xs-12 col-sm-9 sidebar-first">
      <?php endif; ?>
      <?php if (empty($page['sidebar_first']) && !empty($page['sidebar_second']) ): ?>
        <div class="contenido caja col-xs-12 col-sm-9 sidebar-second">
      <?php endif; ?>
          <a id="main-content"></a>
          <div class="bread-section">
            <?php if (!empty($page['breadcrum'])): ?>  
              <?php print render($page['breadcrum']); ?>
            <?php endif; ?>          
          </div>
          <div class="main-content">
            <?php print render($title_prefix); ?>
            <?php if ($title): ?>
            <h1 class="title" id="page-title"><?php print $title; ?></h1>
            <?php endif; ?>
            <?php print render($title_suffix); ?>
            <?php if ($tabs): ?>
              <div class="tabs"><?php print render($tabs); ?></div>
            <?php endif; ?>
            <?php print render($page['help']); ?>
            <?php if ($action_links): ?>
              <ul class="action-links"><?php print render($action_links); ?></ul>
            <?php endif; ?>
            <?php print render($page['content']); ?>
            <?php print $feed_icons; ?>            
          </div>
        </div>
      <?php if (!empty($page['sidebar_second'])): ?>
        <aside id="sidebar_second" class="sidebar col-xs-12 col-sm-3">
            <?php print render($page['sidebar_second']); ?>
        </aside>
      <?php endif; ?>
    </div> 
  </div> 
</div>

<div class="post_content">
  <?php if (!empty($page['post_content'])): ?>  
    <?php print render($page['post_content']); ?>
  <?php endif; ?>     
</div>
<div class="footer">
  <div class="container">
    
    <?php if (!empty($page['footer'])): ?>  
      <?php print render($page['footer']); ?>
    <?php endif; ?>     
  </div>
</div> 