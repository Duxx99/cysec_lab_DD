<?php

define( 'DVWA_WEB_PAGE_TO_ROOT', '' );
require_once DVWA_WEB_PAGE_TO_ROOT . 'dvwa/includes/dvwaPage.inc.php';

dvwaPageStartup( array( 'authenticated' ) );

$page = dvwaPageNewGrab();
$page[ 'title' ]   = 'Welcome' . $page[ 'title_separator' ].$page[ 'title' ];
$page[ 'page_id' ] = 'home';

$page[ 'body' ] .= "
<div class=\"body_padded\">
	<h1>Welcome to CyberSecurity Academy</h1>
	<h1>by Digitalna Dalmacija!</h1>
	<p>CyberSecurity Academy by Digitalna Dalmacija is a cutting-edge web application meticulously crafted to cater to the learning needs of students, budding web developers, and anyone intrigued by the realm of cybersecurity. Created with a focus on accessibility and educational efficacy, this platform serves as an invaluable resource for individuals keen on exploring security concepts, contemplating a career in penetration testing, or simply delving into cybersecurity out of curiosity.</p>
	<p>Tailored to accommodate users with varying levels of expertise, CyberSecurity Academy offers a rich learning environment where participants can delve into foundational security principles, practical exercises, and simulated scenarios. Whether you're taking your first steps in cybersecurity or seeking to deepen your understanding of web application security, our platform provides the tools and guidance necessary to support your journey.</p>
	<p>With an intuitive interface and a diverse range of exercises, CyberSecurity Academy empowers users to engage with real-world security challenges, sharpen their analytical skills, and cultivate a proactive approach to cybersecurity.</p>
	<p>CyberSecurity Academy by Digitalna Dalmacija draws inspiration from renowned platforms such as Hackthebox, Tryhackme, OWASP Top 10, and PortSwigger Academy, leveraging their best practices and curated content to enrich the learning experience. By integrating lessons from these industry-leading resources, our platform ensures that participants benefit from the collective wisdom of cybersecurity experts and established methodologies.</p>
	<p>Furthermore, CyberSecurity Academy goes beyond conventional learning frameworks by incorporating real-world penetration testing experiences into its curriculum. Designed by professionals with firsthand expertise in cybersecurity, these tailored exercises provide participants with invaluable insights into the challenges and dynamics of real-world security assessments. By simulating authentic scenarios and practical challenges, we empower learners to develop the critical thinking skills and technical proficiency necessary to excel in the field of cybersecurity.</p>
	<p>Through this unique blend of curated content and practical experiences, CyberSecurity Academy equips students and web developers with the knowledge, skills, and confidence needed to navigate the complexities of web application security with proficiency and finesse.</p>
	<hr />
	<br />

	<h2>WARNING!</h2>
	<p>This web application is highly vulnerable and should not be published on public Internet.</p>
	<br />
	<h3>Disclaimer</h3>
	<p>We do not take responsibility for the way in which any one uses this application. We have made the purposes of the application clear and it should not be used maliciously. We have given warnings and taken measures to prevent users from installing this web application on to live web servers. If your web server is compromised via an installation of this web application it is not our responsibility it is the responsibility of the person/s who uploaded and installed it.</p>
	<hr />
	<br />
</div>";

dvwaHtmlEcho( $page );

?>
