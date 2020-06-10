<header>
		<div class="navbar">
			<nav>
				<ul>
					<li>
						<a href="index.php" title="Link to Home Page">Home</a>
					</li>
					<li>
						<a href="about.php" title="About">About</a>
					</li>
					<li>
						<a href="faq.php" title="Frequently Asked Questions">FAQ</a>
					</li>
					<li>
						<a href="contact.php" title="Link to Contact Info">Contact</a>
					</li>
					<li>
						<a href="blog.php" title="Link to Blog">Blog</a>
					</li>
					<li>
						<a href="#openModal">Login</a>
					</li>
				</ul>
			</nav>
			<div id="openModal" class="modalDialog">
				<div>
					<a href="#close" title="Close" class="close">X</a>
					<!--Content for Modal -->
					<div class="login">
						<h2>Sign in</h2>
						<form name="loginform">
							<input type="email" name="email" id="email" placeholder="Email">
							<input type="password" name="password" id="password" placeholder="Password">
							<input type="submit" value="login">
						</form>
					</div>
					<!-- End login -->
				</div>
				<!-- End close -->
			</div>
			<!-- End openModal -->
		</div>
		<!-- end navbar -->
	</header>