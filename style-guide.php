<?php

$pageTitle = 'Website Style Guide'; 

$pageDesc = 'This page will be used as a web style guide for the site by displaying common page elements here with the default styling shown.';

include ('includes/headcode.html'); 



?>
				<div class="twelve columns ">
					<h1>Web Page Style Guide <em>This is an h1 element.</em></h1>
					<p>This page will be used as a web style guide for the site by displaying common page elements here with the default styling shown. <em>This is a paragraph element.</em></p>
					<article>
						<header>
							<h2>What is a Web Style Guide? <em>This is an h2 element.</em></h2>
							<p>A web style guide is a reference that helps to ensure brand consistency. A complete style guide will establish rules for visual elements of the site, such as typography, brand colors, and page components like buttons and alerts, as well as writing guidelines for voice, tone, etc. This will be a simplified style guide that I will add to as I learn more about building web pages.</p>
						</header>
						<section>
							<h3>Typography <em>This is an h3 element.</em></h3>
							<h4>Lists <em>This is an h4 element.</em></h4>
							<h5>Unordered Lists. <em>This is an h5 element.</em></h5>
							<ul>
								<li>list Item 1</li>
								<li>list Item 2</li>
								<li>list Item 3</li>
							</ul>
							<h5>Ordered Lists <em>This is an h5 element.</em></h5>
							<ol>
								<li>list Item 1</li>
								<li>list Item 2</li>
								<li>list Item 3</li>
							</ol>
							<h4>Link States <em>This is an h4 element.</em></h4>
							<h5>Link <em>This is an h5 element.</em></h5>
							<p><a href="no-page.html" title="standard link appearance – tis page doesn't exist">A standard link</a> highlights the anchor text of a hyperlink to call attention to it.</p>
							<h5>Visited Link <em>This is an h5 element.</em></h5>
							<p><a href="#" title="visited link appearance">A visited link</a> highlights the anchor text of a hyperlink that has been visited to call attention to it.</p>
							<h5>Hover Link <em>This is an h5 element.</em></h5>
							<p><a href="#" title="hover link appearance">A hover link</a> highlights the anchor text of a hyperlink that has been hovered over with a mouse to call attention to it. Hover over this link to see the hover state.</p>
							<h5>Active Link <em>This is an h5 element.</em></h5>
							<p><a href="#" title="visited link appearance">A visited link</a> highlights the background or text of a hyperlink that has been selected to call attention to it. Click and hold this link to see the active state.</p>
						</section>
					</article>
				</div>
<?php 

	include ('includes/footer.html');

?>
		