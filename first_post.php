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
			I find the general documentation for solution. In this case, Varnish. Next, I attempt to gain a
			surface level understanding of what the solution I'm using actually does. I feel like
			I understand what Varnish does well enough to begin working on the ticket, but I poke around 
			online to make sure I'm not mistaken. This saves me from backpedaling later if I'm wrong, and it 
			doesn't take long to do; worst case being that I found out what I already knew. The last thing
			I do is open up a guide or resource independent of the official documentation that helps
			me do what I need to do. This is useful since official documentation doesn't tend to outline common pitfalls
			you can run into while working. It's nice to get two sides to the same story, even in development.</p>
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
			of how it works. And when configuring Varnish, I have to tell set Varnish to listen on a specific 
			port. The documentation showed me where in the configuration to set this value, and this is what I 
			ended up doing. Lo and behold, it's not working. I start retracing the steps I took, I make sure
			there isn't a glaring firewall issue, and I troubleshoot myself into a corner where I don't know 
			quite what to do.</p>
			<p>Eventually, I find out Varnish isn't listening on the port I configured it to listen on. It makes sense
			to check the configuration file for the thirteenth time at this point to check again that the port is set
			correctly. And it is.</p>
			<p>Alright, well I know what I set the port to in this specific value, and this feels like a longshot to me, 
			but I guess there could be two different locations in the file that you have to set the value? I mean, that's
			not in the documentation I read, and the people who write those things are much smarter than me, but you know
			what, I don't know what else to do. I search the file for the port Varnish is listening, and it didn't take
			me more than a minute to find it. I feel stupid, but I'm just relieved that it was a mistake that simple. For
			reasons I quite don't understand, yeah, there was just two places I had to change the listening port number in
			the configuration file. And you know, I'm really early in my sysadmin and web development career, so I'm not going
			to beat myself up about it, but I have a lot to learn. One of those things: documentation isn't always going
			hold my hand. And that totally sucks.</p>
		</div>
	</div>
</body>
<?php include('inc/footer.php'); ?>