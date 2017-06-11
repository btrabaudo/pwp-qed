# pwp-qed
Personal website for QED.

## Milestone1

#### Feedback
The documentation for milestone1 could have had just a little more detail. It was very hard to discern what exactly is your audience, and purpose.  The use case is also a little sparse. Everything else is perfect, the Html is perfectly laid out, and your directory structure is exactly what we expect.

I would recommend spending just a little more time and try to layout exactly what you want to accomplish with your PWP

#### Grade Tier III https://bootcamp-coders.cnm.edu/projects/personal/rubric/

## Milestone2a 

#### Corrections

your HTML is perfect but you needed to link to the wireframes in milestone2.php

#### Feedback

The objectives you laid out in the content strategy section gave me a clear sense of what you wanted to accomplish with PWP. The same cannot be said about the wireframes. It was very hard for me to get a sense of what exactly your site was going to look like. (the crossed out boxes really confused me). Remember that wireframes are considered a deliverable to either a client or employer prior to finalizing UI layout and commencing development.

#### Suggestions 

I recommend taking a little extra time nailing down what exactly your site is going to look like. You seem to know what goals are just not what the final product is going to look like. What is the purpose of the motto/Headline? Do you plan on having a nav bar that links back to specific sections of your site? For the links to GitHub, LinkedIn and Bugbunty (also the bugbunty link is an awesome idea) I recommend using faviconsIn the work section of your site how do you plan on displaying links to our portfolio? If you plan on using a third party tool I highly recommend using fancy-box from Fancy Apps. Past alumni have used fancy-box to great success. finally, What type of content do you plan on adding to the personal and academic sections on the site

#### Grade: Tier II

I am going to go ahead and clear you to begin for on Milestone2b, but I highly recommend spending a little more time nailing down what the site is going to look like before you start

## Milestone 2b Feedback

Overall you've made good progress, and your PWP is shaping up nicely. With a little work you'll have something really great to show off.

Grade Tier III - Good job!

## Milestone 2b Feedback
Tier III

## Milestone 3 / Final PWP Evaluation
Since you're still waiting on ICANN to verify the domain, I'm evaluating your bootcamp-coders deployment. 

Your well written content and choice of visuals create a unique and engaging design. There is some room for further refinement regarding the layout and the HTML/Bootstrap grid structure, and I think simplifying the way your content sections are structured and nested will help things a bit. It should also make things much easier! I've made some notes on technical issues and fixes down below in **Edits &amp; Suggestions**.

You contact form looks wired up perfectly from my end - check you email and see if you got my test message. Nice job.

It's too bad you're still waiting on ICANN verification. Have you checked the email address you used register the domain name with A2 for a verification notification? Talk to me this week and I can help you get this fixed.

Overall this is a great start, and I would continue to refine the layout and presentation. I think you have a great concept here.

Your Milestone 3/Final Delivery for PWP passes at [Tier II](https://bootcamp-coders.cnm.edu/projects/personal/rubric/).

Your overall passing grade across all of your PWP Milestones is [23/40 points (57.5%)](https://bootcamp-coders.cnm.edu/projects/personal/rubric/#sample-score).

- Milestone 1 - 20%: Tier III 30(0.2) = 6
- Milestone 2a - 20%: Tier II 20(0.2) = 4
- Milestone 2b - 10%: Tier III 30(0.1) = 3
- Milestone 3 - 50%: Tier  II 20(0.5) = 10

### Edits &amp; Suggestions
- &lt;body&gt; tag is closed on line 100 - should be closed down on line 168
- Remove the sticky footer classes and div if you're not implementing it
- I might start with somthing like this for the navbar:
#### HTML:
```
<nav>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-4 logo">
        <a href="#"><img class="img-responsive" src="../public_html/images/logo.jpeg" alt="logo"></a>
      </div>
      <div class="col-sm-4 text-center">
        <p class="h4">Changing Lives Through Web Development</p>
      </div>
      <div class="col-sm-4 text-right">
        <div class="btn-group btn-group-md" role="group">
          <button type="button" class="btn btn-default"><i class="fa fa-github fa-2x" aria-hidden="true"></i></button>
          <button type="button" class="btn btn-default"><i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i></button>
        </div>
      </div>
    </div>
  </div>
</nav>
```
#### CSS: 
```
nav {
        padding: 2rem 0;
    }

    .logo img {
        height 75px;
    }
    
@media only screen and (max-width: 768px) {
    .col-sm-4.text-right {
        text-align: center;
    }

    .logo img {
        margin: 0 auto 2rem auto;
    }
}
```
- I would avoid using the `jumbotron` class on the outside of the content sections - it's really not meant to be used like this. I would probably code up these sections like this, and repeat down the page as needed:

#### HTML
```
<section class="wrap workImage">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-6">
        <h3>Work Profile</h3>
        <p class="lead">Not your average developer and entrepreneur. With a non-traditional background, a B.A. in Philosophy and History of Advanced Science and Mathematics, and a prior career in the arts, creative problem solving, and out of the box thinking are at the heart of my work.</p>
      </div>
    </div>
  </div>
</section> 
```
#### CSS
```
section.wrap {
  background-size: cover;
  color: white;
  height: 60vh;
  padding: 10rem 0;
}

.workImage {
  background: url(../images/comp.jpeg) no-repeat center;
}
```
