<?php
	$pageTitle = "You get a scrollbar! Everyone gets a scrollbar!"; 
	$sectionTitle = "blog"; 
	include('inc/header.php');
?>
			<h2 class="pull-up">You get a scrollbar! Everyone gets a scrollbar!</h2> 
			<div class="resume-date">By: Kenneth Ruiz | September 15th, 2014</div>
			<p>I've been working on this website for a few weeks now. Well, I've been learning
			about the development process for a couple months, but the website itself has been
			something I've been working on for a few weeks. This is a project I took on
			with very little past web development experience. At the time, I had a basic
			understanding of HTML and CSS syntax. I knew what headers and paragraphs were, and
			that you could style elements using CSS, and I knew that JavaScript existed.<p>
			<p>On the other hand, I had never written PHP, and I didn't understand what divs were, 
			or understand the difference between ids and classes. If you asked me what Apache
			and MySQL were, I would have stared at you for a little while and shrugged. And now
			this website exists. It has actual content on it, it's responsive, it has a navigation 
			bar, and it looks okay! I'm going to tell you what happened, how I got here. And most 
			importantly, I'm going to tell you why each page on my website has a scrollbar, and why
			I still have a lot more to learn.</p>
			<p>I started learning web development from a website called Team Treehouse. There's a
			monthly/yearly subscription for using their learning resources, but it has been well worth
			the expense thus far. There's a lot of similar websites out there (Codecademy, Code School). 
			And I can't really recommend Team Treehouse over any other learning resource, it's just what I 
			went with, so take that for what it is. Using their "learning tracks", I've learned 
			all the web development skills (HTML, CSS, PHP) I have, and some more. I'm still using their
			website at the time of this post to get a deeper understanding of MySQL, so I can later develop the
			back end of this website.</p>
			<p><span class="off-color">Fun fact</span>: As of right now (September 2014), blog posts are being hard-coded into this
			website. Meaning blog posts aren't being stored and retrieved from a database. But that's
			what I'm working on accomplishing next. That's going to take some time for me to implement, 
			but I'd like there the be some content on the website, so writing posts in an HTML document
			will have to suffice for now.</p>
			<p><span class="off-color">Fun Fact II</span>: Also as of right now, my website isn't even being
			hosted online. I haven't even paid for a domain name as of right now because, again, I wanted
			there to be some content on the website before launching.</p>
			<p>I'm using Apache as the web-server application for the website. I've used Nginx in the past, but I chose Apache
			just because it's the most familiar to me. At the time of writing this, I'm attending a Linux
			system administration school called the Rackspace Open Cloud Academy. This is where I've gained
			most of the foundational technical skills I have and learned how to configure things like Apache and MySQL.
			When I develop from home, I develop on a virtual machine using Vagrant and VirtualBox. I learned 
			how to use Vagrant the old-fashioned way- reading the documentation and rolling my face across the keyboard
			when something didn't work the way I expected it to.</p>
			<p>For version control, I use git and GitHub. Team Treehouse also had a learning track for using 
			version control, so credit goes out to them for teaching me that too. I plan on using git to manage
			my deployments once the website does launch, but we'll see how that pans out in the future. It feels like 
			a whole lot has gone into making this website when I sit down and think about it, and there is some 
			truth to that, there has to be. But looking forward, I see a whole lot of improvements that could be made.
			Some of these improvements are things I'm not even convinced need to be made, but that I would like to
			make for the sake of gaining knowledge from having done them.</p>
			<p>On my website (as of now), each page has a scrollbar. Each page will have a scrollbar regardless
			of whether or not there's content to actually scroll up and down to. You see, when I first started making the
			website, the pages varied in length. For example, while it doesn't exist now, I used to have a page 
			dedicated contacting me. That page has since been merged into the Resume page, but when it existed,
			that page just had three lines worth of content. On the other hand, the Resume page had a lot of content. 
			And back then, when you went from the Resume page to the Contact page, all the elements on the webpage would
			shift left (or right depending on which page you were going to).</p>

			<p>This was a problem that puzzled me for a long time. I spent at least a couple hours staring at the CSS 
			for the website, wondering what could be causing such a strange issue. I was convinced that there was an issue with the margins or padding on the navigation elements at the top of the screen, but couldn't figure out what it was.
			I was at a dead end. I showed a friend the issue I was having. He didn't even have web developement 
			experience, but I needed someone to dump all the frustration on and I was desperate. Mostly just desperate.</p>

			<p>He doesn't even look at the code. He just sees the issue I'm describing and goes "It's the scrollbars."
			I didn't even understand what he meant because I was so convinced there was an issue with the actual code I wrote.</p>

			<p>As it turns out, the scrollbars on the side of a webpage can, and will, shift your content to make room for their
			existence. And I'm not sure if I would have came to that conclusion without help. I struggled to find what I 
			consider to be an elegant solution to that problem. I'm positive there's one out there, and I'm sure it's simple
			to implement. But I was so tired of staring at such a (what was to me) a glaring issue, that I decided...</p>

			<p>Screw it. For now, all the webpages are getting scrollbars.</p>
		</div>
	</div>
</body>
<?php include('inc/footer.php'); ?>