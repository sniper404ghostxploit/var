<?php
/**
 * The header for Astra Theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?><!DOCTYPE html>
<?php astra_html_before(); ?>
<html <?php language_attributes(); ?>>
<head>
<?php astra_head_top(); ?>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">

<?php wp_head(); ?>
<?php astra_head_bottom(); ?>
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8123166908748705"
     crossorigin="anonymous"></script>
</head>

<body <?php astra_schema_body(); ?> <?php body_class(); ?>>
  <div style="display:none;">
		<ul>
		<li><a href="https://www.exploitsports.my.id">EXPLOITSPORTS</a></li>
		<li><a href="https://www.exploitsports.my.id/2022/09/pengertian-bug.html">Pengertian Bug Dan Penjelasannya</a></li>
		<li><a href="https://www.exploitsports.my.id/2022/09/mengenal-nama-jenis-jenis-bug-pada.html">Mengenal Nama Jenis-Jenis Bug Pada Sebuah Website</a></li>
		<li><a href="https://www.exploitsports.my.id/2022/09/pengertian-bug-sql-injecton-dan-cara.html">Pengertian Bug Sql Injecton Dan Cara Kerjanya</a></li>
		<li><a href="https://www.exploitsports.my.id/2022/09/mengenal-bug-remote-code-execution-rce.html">Mengenal Bug Remote Code Execution ( RCE )</a></li>
		<li><a href="https://www.exploitsports.my.id/2022/09/pengertian-bug-local-file-inclusion-lfi.html">Pengertian Bug Local File Inclusion ( LFI )</a></li>
		<li><a href="https://www.exploitsports.my.id/2022/09/pengertian-bug-local-file-disclosure-lfd.html">Pengertian Bug Local File Disclosure ( LFD )</a></li>
		</ul> 
		</div>
<?php astra_body_top(); ?>
<?php wp_body_open(); ?>

<a
	class="skip-link screen-reader-text"
	href="#content"
	role="link"
	title="<?php echo esc_html( astra_default_strings( 'string-header-skip-link', false ) ); ?>">
		<?php echo esc_html( astra_default_strings( 'string-header-skip-link', false ) ); ?>
</a>

<div
<?php
	echo astra_attr(
		'site',
		array(
			'id'    => 'page',
			'class' => 'hfeed site',
		)
	);
	?>
>
	<?php
	astra_header_before();

	astra_header();

	astra_header_after();

	astra_content_before();
	?>
	<div id="content" class="site-content">
		<div class="ast-container">
		<?php astra_content_top(); ?>
