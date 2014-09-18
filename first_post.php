<?php
	$pageTitle = "Dude, that wasn't in the documentation."; 
	$sectionTitle = "blog"; 
	include('inc/header.php');
?>
			<h2 class="pull-up">Dude, that wasn't in documentation.</h2>
			<div class="resume-date">By: Kenneth Ruiz | September 16th, 2014</div>
			<p>The last week at Open Cloud is called "System Administration" week, and students are 
			placed into a faux-ticket-queue and given practice tickets to work. The tickets can range from 
			configuring a mail server to setting up virtual hosts for a web server. The ticket I worked on
			involved creating a web server for a customer, and configuring it to work with Varnish. Now, I'm 
			familiar with Varnish, and I understand what it does, but I've never installed and configured it
			before. Alright, no problem. I open my search engine of choice, and start digging in.</p>
			<p>When I have to implement a solution I haven't used before, I do a few things. First, 
			I find the general documentation for solution, in this case, Varnish. Next, I attempt to gain a
			surface level understanding of what the solution I'm using actually does. I feel like
			I understand what Varnish does well enough to begin working on the ticket, but I poke around 
			online to make sure I'm not mistaken. This saves me from backpedaling later if I'm wrong, and it 
			doesn't take long to do; worst case being that I found out what I already knew. The last thing
			I do is open up a guide or resource independent of the official documentation that helps
			me do what I need to do. This is useful since documentation doesn't tend to outline common pitfalls
			you can run into while working.</p>
			<p>A problem I tend to run into when working on certain issues is having what I like to call
			"documentation tunnel vision". Whenever something goes wrong and I'm following documentation to the
			letter, I start comparing the steps I've taken to the documentation's instructions. And that's 
			fine, I mean, it makes sense anyways. But there are times I'm so convinced that I must have messed up
			the documentation's instructions that I don't stop to think that perhaps the instructions aren't 
			complete. And that's exactly what I ran into today while setting up Varnish.</p>
			<p>I'd like to preface this by saying that I'm not an expert in all thing system administration, nor
			am I an expert in configuring Varnish. What I'm about to explain might have a 100% valid reason for
			being the way it is, but nonetheless I'm going to share.</p>
			<p>Varnish is responsible for caching web pages from a web server, and it delivers contents from its
			cache to users who request information from the web page. At least this is my surface level understanding
			of how it works. </p>
			<p>Sorry, this blog post is not finished! I promise, I will get back to finishing it up soon!</p>
		</div>
	</div>
</body>
<?php include('inc/footer.php'); ?>