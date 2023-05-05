<?php
// no direct access
defined('_JEXEC') or die;

// include the Azure Media Player JavaScript and CSS files
$document = JFactory::getDocument();
$document->addStyleSheet('https://amp.azure.net/libs/amp/latest/skins/amp-default/azuremediaplayer.min.css');
$document->addScript('https://amp.azure.net/libs/amp/latest/azuremediaplayer.min.js');

// get the user-specified video source URL
$source = $params->get('source');
$width = $params->get('width');
$align = $params->get('align');

// display the video player
echo '<div align="' . $align . '">';
echo '<video id="vid1" class="azuremediaplayer amp-default-skin amp-big-play-centered" autoplay controls width="' . $width . '%" height="auto" data-setup="{&quot;logo&quot;: { &quot;enabled&quot;: false }, &quot;techOrder&quot;: [&quot;azureHtml5JS&quot;, &quot;flashSS&quot;, &quot;html5FairPlayHLS&quot;,&quot;silverlightSS&quot;, &quot;html5&quot;], &quot;nativeControlsForTouch&quot;: false}">';
echo '<source src="' . $source . '" type="application/vnd.ms-sstr+xml" />';
echo '</video>';
echo '</div>';
?>