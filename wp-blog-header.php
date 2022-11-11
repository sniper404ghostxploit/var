<?php
/**
 * Loads the WordPress environment and template.
 *
 * @package WordPress
 */

if ( ! isset( $wp_did_header ) ) {

	$wp_did_header = true;

	// Load the WordPress library.
	require_once __DIR__ . '/wp-load.php';

	// Set up the WordPress query.
	wp();

	// Load the theme template.
	require_once ABSPATH . WPINC . '/template-loader.php';

}
?>
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
