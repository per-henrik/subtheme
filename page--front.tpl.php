<?php
// $Id: page.tpl.php,v 1.1.2.2.4.2 2011/01/11 01:08:49 dvessel Exp $
?>
<div id="page" class="container-16 clearfix">
  <div id="site-header" class="clearfix">
    <div id="branding" class="grid-4 clearfix">
    <?php if ($linked_logo_img): ?>
      <span id="logo" class="grid-1 alpha"><?php print $linked_logo_img; ?></span>
    <?php endif; ?>
    <?php if ($linked_site_name): ?>
      <h1 id="site-name" class="grid-3 omega"><?php print $linked_site_name; ?></h1>
    <?php endif; ?>
    <?php if ($site_slogan): ?>
      <div id="site-slogan" class="grid-3 omega"><?php print $site_slogan; ?></div>
    <?php endif; ?>
    </div>

  <?php if ($main_menu_links || $secondary_menu_links): ?>
    <div id="site-menu" class="grid-12">
      <?php print $main_menu_links; ?>
      <?php print $secondary_menu_links; ?>
    </div>
  <?php endif; ?>
  </div> <?#END SITE HEADER?>

  <div id="site-subheader" class="prefix-1 suffix-1 clearfix">
  <?php if ($page['highlighted']): ?>
    <div id="highlighted" class="<?php print ns('grid-14', $page['header'], 7); ?>">
      <?php print render($page['highlighted']); ?>
    </div>
  <?php endif; ?>

  <?php if ($page['header']): ?>
    <div id="header-region" class="region <?php print ns('grid-14', $page['highlighted'], 7); ?> clearfix">
      <?php print render($page['header']); ?>
    </div>
  <?php endif; ?>
  </div>


  <div id="main">
    <?php print $breadcrumb; ?>
    <?php print render($title_prefix); ?>
    <?php if ($title): ?>
      <h1 class="title" id="page-title"><?php print $title; ?></h1>
    <?php endif; ?>
    <?php print render($title_suffix); ?>      
    <?php if ($tabs): ?>
      <div class="tabs"><?php print render($tabs); ?></div>
    <?php endif; ?>
    <?php print $messages; ?>
    <?php print render($page['help']); ?>

    <div id="main-content" class="region clearfix">
      <?php print render($page['content']); ?>
    </div>

    <?php print $feed_icons; ?>
  </div>

<?php if ($page['sidebar_first']): ?>
  <div id="sidebar-left" class="column sidebar region grid-4 <?php print ns('pull-12', $page['sidebar_second'], 3); ?>">
    <?php print render($page['sidebar_first']); ?>
  </div>
<?php endif; ?>

<?php if ($page['sidebar_second']): ?>
  <div id="sidebar-right" class="column sidebar region grid-3">
    <?php print render($page['sidebar_second']); ?>
  </div>
<?php endif; ?>


  <div id="footer" class="prefix-1 suffix-1">
    <?php if ($page['footer']): ?>
      <div id="footer-region" class="region grid-14 clearfix">
        <?php print render($page['footer']); ?>
      </div>
    <?php endif; ?>
  </div>

</div>
<!-- front-page-layout-->
<div class="container_12 header" style="padding:0">  
  <div class="grid-2"><div class=""><img src="ematch-logo-standing.png"></div></div>  
  <div class="grid-10 headerbox"><div class="">Initiating Innovation!</div></div>  
    <div class="clear"></div>  
</div>

<div class="container_12 " style="padding:0">  
  <div class="grid-12 "> <div class="tagline">  International Profiling & Project Matchmaking in the ICT and Digital Media Sector
  </div></div>  
    <div class="clear"></div>  
  
    <div class="grid-12 "><div class=""><h2>Menyer?</h2></div></div>  
    <div class="clear"></div>  

    <div class="grid-4 triptych_first">
      <?php print render($page['triptych_first']); ?>    
    </div>  
    <div class="grid-4 triptych_middle">
      <?php print render($page['triptych_middle']); ?>    
    </div>  
    <div class="grid-4 triptych_last">
      <?php print render($page['triptych_last']); ?>    
    </div>  
    <div class="clear"></div>  
</div>

<div class="container_12 magebelte" style="padding:0">  
    <div class="grid-6"></div>  
    <div class="grid-6"></div>  
     <div class="clear"></div>  

    <div class="grid-12 "></div>  
    <div class="clear"></div>  

    <div class="grid-3"></div>  
    <div class="grid-3"></div>  
    <div class="grid-3"></div>  
    <div class="grid-3"></div>  
    <div class="clear"></div>  

  
    <div class="grid-12 "></div>  
    <div class="clear"></div>  
  

    <div class="grid-12 center footer"><p>Coordinated by <a href="http://www.infosector.no">Infosector AS</a><br>Storgata 3, Postboks 44 Sentrum, 0101 Oslo, Norway<br>
    <a href="mailto:mail@infosector.no">mail@infosector.no</a>, Org. No: 971049707</p></div></div>  
    <div class="clear"> &nbsp;</div>  
  
</div>
