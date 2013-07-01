<?php include('head.php'); ?>
<?php include('header.php'); ?>

<div id="content">
	<div>
		
		<section>
			<h1>HTML Elements</h1>

			<h2>CSS Basic Elements</h2>

			<p>The purpose of this HTML is to help determine what default settings are with CSS and to make sure that all possible HTML Elements are included in this HTML so as to not miss any possible Elements when designing a site.</p>

			<hr>

			<h2 id="headings">Headings</h2>

			<h1>Heading 1</h1>
			<h2>Heading 2</h2>
			<h3>Heading 3</h3>
			<h4>Heading 4</h4>
			<h5>Heading 5</h5>
			<h6>Heading 6</h6>

			<hr>


			<h2 id="paragraph">Paragraph</h2>

			<img class="align_right" src="http://fillmurray.com/360/240" alt="Everyone loves Bill Murray">
			<p>Lorem ipsum dolor sit amet, <a href="#" title="test link">test link</a> adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. Praesent mattis, massa quis luctus fermentum, turpis mi volutpat justo, eu volutpat enim diam eget metus. Maecenas ornare tortor. Donec sed tellus eget sapien fringilla nonummy. Mauris a ante. Suspendisse quam sem, consequat at, commodo vitae, feugiat in, nunc. Morbi imperdiet augue quis tellus.</p>

			<p>Lorem ipsum dolor sit amet, <em>emphasis</em> consectetuer adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. Praesent mattis, massa quis luctus fermentum, turpis mi volutpat justo, eu volutpat enim diam eget metus. Maecenas ornare tortor. Donec sed tellus eget sapien fringilla nonummy. Mauris a ante. Suspendisse quam sem, consequat at, commodo vitae, feugiat in, nunc. Morbi imperdiet augue quis tellus.</p>

			<hr>

			<h2 id="list_types">List Types</h2>

			<h3>Definition List</h3>
			<dl>
				<dt>Definition List Title</dt>
				<dd>This is a definition list division.</dd>
			</dl>

			<h3>Ordered List</h3>
			<ol>
				<li>List Item 1</li>
				<li>List Item 2</li>
				<li>List Item 3</li>
			</ol>

			<h3>Unordered List</h3>
			<ul>
				<li>List Item 1</li>
				<li>List Item 2</li>
				<li>List Item 3</li>
			</ul>

			<hr>

			<h2 id="form_elements">Fieldsets, Legends, and Form Elements</h2>

			<form>
				<fieldset>
					<legend>Legend</legend>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. Praesent mattis, massa quis luctus fermentum, turpis mi volutpat justo, eu volutpat enim diam eget metus.</p>
				
					<ul>

						<li>
							<label for="text_field">Text Field:</label>
							<div class="field">
								<input type="text" id="text_field">
							</div>
						</li>

						<li>
							<label for="text_area">Text Area:</label>
							<div class="field">
								<textarea id="text_area"></textarea>
							</div>
						</li>

						<li>
							<label for="select_element">Select:</label>
							<div class="field">
								<div class="select">
									<select name="select_element">
										<optgroup label="Option Group 1">
											<option value="1">Option 1</option>
											<option value="2">Option 2</option>
											<option value="3">Option 3</option>
										</optgroup>
										<optgroup label="Option Group 2">
											<option value="1">Option 1</option>
											<option value="2">Option 2</option>
											<option value="3">Option 3</option>
										</optgroup>
									</select>
								</div>
							</div>
						</li>

						<li>
							<label>Radio Buttons:</label>
							<div class="field">
								<label for="radio_1" class="checkbox"><input id="radio_1" type="radio" name="radio_button" value="radio_1"> Radio 1</label>
								<label for="radio_2" class="checkbox"><input id="radio_2" type="radio" name="radio_button" value="radio_2"> Radio 2</label>
								<label for="radio_3" class="checkbox"><input id="radio_3" type="radio" name="radio_button" value="radio_3"> Radio 3</label>
							</div>
						</li>

						<li>
							<label>Checkboxes:</label>
							<div class="field">
								<label for="check_1" class="checkbox"><input id="check_1" type="checkbox" name="checkbox" value="check_1"> Check 1</label>
								<label for="check_2" class="checkbox"><input id="check_2" type="checkbox" name="checkbox" value="check_2"> Check 2</label>
								<label for="check_3" class="checkbox"><input id="check_3" type="checkbox" name="checkbox" value="check_3"> Check 3</label>
							</div>
						</li>

						<li>
							<label for="password">Password:</label>
							<div class="field">
								<input type="password" id="password">
							</div>
						</li>

						<li>
							<label for="file">File:</label>
							<div class="field">
								<input type="file" id="file">
							</div>
						</li>

						<li class="form_buttons">
				            <input type="submit" value="submit">
				        </li>

					</ul>

				</fieldset>
			</form>

			<hr>

			<h2 id="tables">Tables</h2>

			<table cellspacing="0" cellpadding="0">
				<tr>
					<th>Table Header 1</th><th>Table Header 2</th><th>Table Header 3</th>
				</tr>
				<tr>
					<td>Division 1</td><td>Division 2</td><td>Division 3</td>
				</tr>
				<tr class="even">
					<td>Division 1</td><td>Division 2</td><td>Division 3</td>
				</tr>
				<tr>
					<td>Division 1</td><td>Division 2</td><td>Division 3</td>
				</tr>

			</table>

			<hr>

			<h2 id="misc">Misc Stuff - abbr, acronym, pre, code, sub, sup, etc.</h2>

			<p>Lorem <sup>superscript</sup> dolor <sub>subscript</sub> amet, consectetuer adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. <cite>cite</cite>. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. Praesent mattis, massa quis luctus fermentum, turpis mi volutpat justo, eu volutpat enim diam eget metus. Maecenas ornare tortor. Donec sed tellus eget sapien fringilla nonummy. <acronym title="National Basketball Association">NBA</acronym> Mauris a ante. Suspendisse quam sem, consequat at, commodo vitae, feugiat in, nunc. Morbi imperdiet augue quis tellus.  <abbr title="Avenue">AVE</abbr></p>

			<pre><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. Praesent mattis, massa quis luctus fermentum, turpis mi volutpat justo, eu volutpat enim diam eget metus. Maecenas ornare tortor. Donec sed tellus eget sapien fringilla nonummy. <acronym title="National Basketball Association">NBA</acronym> Mauris a ante. Suspendisse quam sem, consequat at, commodo vitae, feugiat in, nunc. Morbi imperdiet augue quis tellus.  <abbr title="Avenue">AVE</abbr></p></pre>

			<blockquote>
				"This stylesheet is going to help so freaking much." <br>-Blockquote
			</blockquote>

		</section>
		
		<aside>
			Sidebar
		</aside>

	</div>
</div>

<?php include('footer.php'); ?>