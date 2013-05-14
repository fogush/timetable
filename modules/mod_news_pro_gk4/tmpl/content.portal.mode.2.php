<?php
/**
* Default template
* @package Gavick News Show Pro GK4
* @Copyright (C) 2009-2011 Gavick.com
* @ All rights reserved
* @ Joomla! is Free Software
* @ Released under GNU/GPL License : http://www.gnu.org/copyleft/gpl.html
* @version $Revision: 4.3.0.0 $
**/
// no direct access
defined('_JEXEC') or die('Restricted access');
$news_amount = $this->parent->config['news_portal_mode_amount'];
?>
<?php if($news_amount > 0) : ?>
<div class="nspMainPortalMode2<?php if($this->parent->config['autoanim'] == TRUE) echo ' autoanim'; ?> nspFs<?php echo $this->parent->config['module_font_size']; ?>" id="nsp-<?php echo $this->parent->config['module_id']; ?>">
	<?php if($this->parent->config['news_portal_mode_amount'] > 0) : ?>
	<div class="nspImages">
		<div class="nspArts">
			<div class="nspArtsScroll">
			<?php for($i = 0; $i < count($news_image_tab); $i++) : ?>
				<div class="nspArt">
					<div style="padding:<?php echo $this->parent->config['art_padding']; ?>">
						<?php echo $news_image_tab[$i];?>
					</div>
				</div>
			<?php endfor; ?>
			</div>	
		</div>
	</div>
	<?php endif; ?>
	
	<div class="nspBotInterface">
		<a class="nspPrev"><?php echo JText::_('MOD_NEWS_PRO_GK4_NSP_PREV'); ?></a>
		<div class="nspTextBlock">
			<div class="nspTextWrap">
				<?php for($i = 0; $i < count($news_title_tab); $i++) : ?>
				<div class="nspArtHeadline">
					<?php echo $news_title_tab[$i];?>
				</div>
				<?php endfor; ?>	
			</div>
		</div>
		<a class="nspNext"><?php echo JText::_('MOD_NEWS_PRO_GK4_NSP_NEXT'); ?></a>
	</div>
</div>
<?php else : ?>
<p><?php echo JText::_('MOD_NEWS_PRO_GK4_NSP_ERROR'); ?></p>
<?php endif; ?>