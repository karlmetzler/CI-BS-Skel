<!DOCTYPE html>

<html lang="en">
	
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title><?= $page_title; ?></title>
		
		<?= link_tag('css/core.css'); ?>
		
		<?
			if(isset($styles))
			{
				foreach($styles as $style)
				{
					echo link_tag($style);
				}
			}
		?>
		
		<!-- HTML5 shim and Respond.js for IE8 support of HTML4 elements and media queries -->
		<!--[if lt IE 9]>
		    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
	    
	    
	    <!-- Favicons
	================================================== -->
		<?= link_tag('images/icons/favicon.ico','shortcut icon','image/ico');?>
		<?= link_tag(array('href'=>'images/icons/apple-touch-icon.png','rel'=>'apple-touch-icon'));?>
		<?= link_tag(array('href'=>'images/icons/apple-touch-icon-57x57.png','rel'=>'apple-touch-icon','sizes'=>'57x57'));?>
		<?= link_tag(array('href'=>'images/icons/apple-touch-icon-72x72.png','rel'=>'apple-touch-icon','sizes'=>'72x72'));?>
		<?= link_tag(array('href'=>'images/icons/apple-touch-icon-76x76.png','rel'=>'apple-touch-icon','sizes'=>'76x76'));?>
		<?= link_tag(array('href'=>'images/icons/apple-touch-icon-114x114.png','rel'=>'apple-touch-icon','sizes'=>'114x114'));?>
		<?= link_tag(array('href'=>'images/icons/apple-touch-icon-120x120.png','rel'=>'apple-touch-icon','sizes'=>'120x120'));?>
		<?= link_tag(array('href'=>'images/icons/apple-touch-icon-144x144.png','rel'=>'apple-touch-icon','sizes'=>'144x144'));?>
		<?= link_tag(array('href'=>'images/icons/apple-touch-icon-152x152.png','rel'=>'apple-touch-icon','sizes'=>'152x152'));?>
		<?= link_tag(array('href'=>'images/icons/apple-touch-icon-180x180.png','rel'=>'apple-touch-icon','sizes'=>'180x180'));?>
	    
	</head>
	
	<body>
		
		<div class="breakpoint large visible-lg">Large Breakpoint</div>
		<div class="breakpoint medium visible-md">Medium Breakpoint</div>
		<div class="breakpoint small visible-sm">Small Breakpoint</div>
		<div class="breakpoint x-small visible-xs">Extra Small Breakpoint</div>
		
		<nav class="navbar navbar-default navbar-fixed-top">
				
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
						<span class="sr-only">Toggle Navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					
					<?= anchor(site_url(),$this->config->item('site_name'),array('class'=>'navbar-brand visible-xs')); ?>
				</div>
				
				<div class="collapse navbar-collapse" id="collapse">
					<ul class="nav navbar-nav center">
						<li class="active"><?= anchor(site_url(),'Link 1 <span class="sr-only">(current)'); ?></li>
						<li><?= anchor('#','Link 1'); ?></li>
						
						<li><?= anchor('#','Link 2'); ?></li>
						<li><?= anchor('#','Link 3',array('class'=>'visible-xs')); ?></li>
						
					</ul>
					
					<?
						$social = $this->config->item('social_channels'); 
					?>
					
					<ul class="nav navbar-nav navbar-right">
						<? foreach($social as $soc):?>
						<? if($soc['link'] !== ''): ?>
						<li><?= anchor($soc['link'],'<span class="social-icon socicon-'.$soc['channel'].'" aria-hidden="true"></span><span class="sr-only">Connect with us on '.$soc['channel'].'</span>',array('class'=>'social-link','title'=>'Connect with us on '.$soc['channel']));?></li>
						<? endif; ?>
						<? endforeach; ?>
						<li><?= anchor('#','<span class="social-icon socicon-mail" aria-hidden="true"></span><span class="sr-only">Contact us via Email</span>',array('class'=>'social-link','title'=>'Connect with us via Email')); ?></li>
					</ul>
					
				</div>
			</div>
			
		</nav>
		
		<div class="container">
			
			<h1> <?= $page_title; ?></h1>
		</div>
		
		
		<?= script_tag('scripts/jquery-1.12.0.min.js'); ?>
		<?= script_tag('scripts/bootstrap.min.js'); ?>
		
		<? 
			if(isset($scripts))
			{
				foreach($scripts as $script)
				{
					echo script_tag($script);
				}
			}
		?>
		
	</body>
	
</html>
