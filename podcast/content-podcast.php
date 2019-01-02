<div class="content">
<?php $yellow->snippet("sidebar") ?>
<div class="main" role="main">
<h1><?php echo $yellow->page->getHtml("titleContent") ?></h1>
<ul>
<?php foreach($yellow->page->getPages() as $page): ?>
<?php if($yellow->page->get("feedChronologicalOrder")): ?>
<?php $sectionNew = $page->getDateHtml("modified") ?>
<?php else: ?>
<?php $sectionNew = $page->getDateHtml("published") ?>
<?php endif ?>
<?php if($section!=$sectionNew) { $section = $sectionNew; echo "</ul><h2>$section</h2><ul>\n"; } ?>
<li><a href="<?php echo $page->getLocation(true) ?>"><?php echo $page->getHtml("title") ?></a><?php if ($page->isExisting("mediafile")): ?> (<a href="<?php if ($yellow->config->isExisting("audioUrlPrefix")) echo $yellow->config->get("audioUrlPrefix"); echo $page->getHtml("mediafile") ?>">Download</a>)<?php endif ?></li>
<?php endforeach ?>
</ul>
<?php $yellow->snippet("pagination", $yellow->page->getPages()) ?>
</div>
</div>
