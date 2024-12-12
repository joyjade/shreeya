<!DOCTYPE html>
<html lang="en">

<head>
	<title><?= $site->title()?> | <?= $page->title() ?></title>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="crg.ico" type="image/x-icon">
	
  <?= css(['assets/css/global.css', 'assets/type/typography.css', 'assets/css/mobile.css', '@auto',]) ?>
</head>

<body class="">
  <div class="title">
    <a href="<?= $site->url() ?>"><?= $site->title() ?></a>
  </div>
	<nav>
    <ul class="nav">
      <?php foreach ($site->children()->listed() as $item): ?>
        <li>
          <a <?php e($item->isOpen(), 'class="active"') ?> href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
        </li>
      <?php endforeach ?>
    </ul>
	</nav>