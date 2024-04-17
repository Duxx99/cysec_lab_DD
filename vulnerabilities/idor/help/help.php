<div class="body_padded">
	<h1>Help - Insecure Direct Object References (IDOR)</h1>

	<div id="code">
	<table width='100%' bgcolor='white' style="border:2px #C0C0C0 solid">
	<tr>
	<td><div id="code">
		<h3>About</h3>
		<p>An Insecure Direct Object Reference (IDOR) occurs when an application exposes direct references to objects based on user-supplied input. 
			This vulnerability allows attackers to manipulate these references to access unauthorized data or functionality.</p>

		<p>Attackers can exploit IDOR vulnerabilities to access sensitive information, such as other users' data, administrative resources, or internal files.</p>

		<p>Preventing IDOR vulnerabilities requires proper access controls and validation of user input to ensure that users can only access authorized resources.</p>

		<br /><hr /><br />

		<h3>Objective</h3>
		<p>The objective of the IDOR challenge is to identify and exploit vulnerabilities in the application to access sensitive information or perform unauthorized actions.</p>

		<br /><hr /><br />

		<h3>Challenge</h3>
		<p>In this challenge, you are presented with a scenario where the application uses direct object references that are controlled by user input. 
			Your task is to manipulate the object references in the URL to access resources or data you are not authorized to see.</p>
		<pre>Spoiler: <span class="spoiler">Change the 'id' parameter in the URL to bypass access controls.</span></pre>

	</div></td>
	</tr>
	</table>

	</div>

	<br />

	<p>Reference: <a href="https://www.owasp.org/index.php/Insecure_Direct_Object_References_(IDOR)">OWASP - Insecure Direct Object References (IDOR)</a></p>
</div>
