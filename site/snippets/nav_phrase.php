
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
  <nav class="phrase">
    <a href="<?= $site->url() ?>"><?= $site->title() ?></a></h1>
    <div>
      is a 
      <a href="">poet</a>, 
      <a href="">textile artist</a>, 
      and <a href="">baker</a>. 
    </div>
	</nav>