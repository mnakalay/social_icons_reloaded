<?php   
defined('C5_EXECUTE') or die(_("Access Denied."));
//Originally developped by Defunct (http://www.concrete5.org/profile/-/view/2162/)
//Modified and enhanced by mnakalay (http://www.concrete5.org/profile/-/view/75201/)
$size = isset ($large) ? '32' : '16';
$target = isset ($blank) ? ' target=_BLANK' : '';
if (isset ($text))
{
    $style = isset($right) ? "style='float:right;margin-left:10px;'" : "style='float:left;margin-right:10px;'";
}
else
{
	$style = '';
}
?>

<!-- SOCIAL PROFILES -->
<ul class="block-sociallinks<?php     if (isset ($large)) : ?> large<?php     endif;if (!isset ($text)) : ?> icons<?php     endif;?>">

<?php    
foreach ($profiles as $value => $url) :
	$socialName = ucfirst(str_replace('_', ' ', $value));
	$link = isset ($text) ? $socialName : '';
     if (version_compare(Config :: get('SITE_APP_VERSION'), 5.5, 'lt')) {
     $iconsPath = DIR_REL . '/packages/social_icons_reloaded/blocks/social_icons_reloaded/images/';
     }else{
    $pkg = Package::getByHandle('social_icons_reloaded');
    $iconsPath = $pkg->getRelativePath() . '/blocks/social_icons_reloaded/images/';
    }
	if ($url != null) :
		if ($value === 'email')
		{
			$url = 'mailto:' . $url;
			$title = t('Send me an email.');
		}
    	else
    	{
    		$pos = stripos($url, 'http://');
            $pos = ($pos === false || $pos > 0) ? stripos($url, 'https://') : $pos;
            $pos = ($pos === false || $pos > 0) ? stripos($url, 'ftp://') : $pos;
            $url = ($pos === false || $pos > 0) ? $url = 'http://' . $url : $url;
            $url = "'" . $url . "'" . $target;
    		$title = t('Find me on ') . $socialName . '.';
    	}
    	echo "<li><a rel='external, nofollow, noindex' href=" . $url . " title='" . $title . "'><img src='" . $iconsPath . $value . "_" . $size . ".png' alt='" . $socialName . "' " . $style . " />" . $link . "</a></li>";
	endif;
endforeach;
?>

</ul>
<!-- / SOCIAL PROFILES -->
