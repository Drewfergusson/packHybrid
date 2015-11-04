<?php get_header(); ?>

<?php
  /*Creates image array variables*/
  $left_logo = get_field('left_logo', 'options');
  $center_logo = get_field('center_logo', 'options');
  $right_logo = get_field('right_logo', 'options');
?>
		<div class="nav-container">
		    <nav>
		        <div class="nav-bar">

                <div class="module left">
                    <a href="index.html">
                        <img class="logo logo-dark" src="<?php echo $left_logo['url'];?>">
                    </a>
                </div>
                <div class="module left">
		                <a href="index.html">
		                    <img class="logo logo-dark" src="<?php echo $center_logo['url'];?>">
		                </a>
		            </div>
                <div class="wolfie module left">
		                <a href="index.html">
		                    <img class="logo logo-dark" src="<?php echo $right_logo['url'];?>">
		                </a>
		            </div>

		            <div class="module widget-handle mobile-toggle right visible-sm visible-xs">
		                <i class="ti-menu"></i>
		            </div>
		            <div class="module-group right">
		                <div class="module left">
		                    <ul class="menu">
		                        <!--li>
		                            <a href="#">Single</a>
		                        </li-->
		                        <!--li class="has-dropdown">
		                            <a href="#">
		                                Mega Menu
		                            </a>
		                            <ul class="mega-menu">
		                                <li>
		                                    <ul>
		                                        <li>
		                                            <span class="title">Column 1</span>
		                                        </li>
		                                        <li>
		                                            <a href="#">Single</a>
		                                        </li>
		                                    </ul>
		                                </li>
		                                <li>
		                                    <ul>
		                                        <li>
		                                            <span class="title">Column 2</span>
		                                        </li>
		                                        <li>
		                                            <a href="#">Single</a>
		                                        </li>
		                                    </ul>
		                                </li>
		                            </ul>
		                        </li-->
		                        <li class="has-dropdown">
		                            <a href="#">
		                                Single Dropdown
		                            </a>
		                            <ul>
		                                <li>
		                                    <a href="#"> <em>1</em>learn Science</a>
		                                </li>
                                    <li>
                                      <a href="#"> <em>2</em>see Sponsors</a>
                                    </li>
                                    <li>
                                      <a href="#"> <em>3</em>team members</a>
                                    </li>
		                            </ul>
		                        </li>
		                    </ul>
		                </div>

		            </div>

		        </div>
		    </nav>

		</div>

		<div class="main-container">
		<section ng-controller="leadController">
      <div class="container">
          <div class="row v-align-children">
              <div class="{{ videoArea }} col-md-7 col-sm-6 text-center mb-xs-24">
                  <video autoplay="autoplay" muted="muted">
                    <source src="<?php echo get_template_directory_uri() . '/media/IMG_0104.mp4'?>" type="video/MP4">
                  </video>
              </div>
              <div class="{{ textArea }} text-center">
                  <h3>NC State Formula Hybrid</h3>
                  <p>
                  </p>
                  <a class="btn-filled btn" href="#">See Our Engineering</a>
              </div>
          </div>
      </div>
		</section><section class="image-edge bg-secondary">
          <div class="container">
              <div class="race-date col-xs-12 col-sm-6 col-sm-offset-3 col-md v-align-transform">
                  <h3 class="uppercase mb40 mb-xs-24">Race Dates May 2-5 2016</h3>
                  <div class="countdown mb40" data-date="2015/12/01"></div>
                  <p>
                    If you're interested in getting updates just enter your email
                  </p>
                  <form class="halves form-newsletter" data-success="Thanks for your submission, we will be in touch shortly." data-error="Please fill all fields correctly.">
                      <input class="mb16 validate-required validate-email signup-email-field" type="text" placeholder="Email Address" name="email">
                      <input class="mb16" type="submit" value="Notify Me">
                      <iframe srcdoc="<!-- Begin MailChimp Signup Form --><link href=&quot;https://cdn-images.mailchimp.com/embedcode/classic-081711.css&quot; rel=&quot;stylesheet&quot; type=&quot;text/css&quot;><style type=&quot;text/css&quot;>    #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }    /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.       We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */</style><div id=&quot;mc_embed_signup&quot;><form action=&quot;//mrare.us8.list-manage.com/subscribe/post?u=77142ece814d3cff52058a51f&amp;id=94d040322a&quot; method=&quot;post&quot; id=&quot;mc-embedded-subscribe-form&quot; name=&quot;mc-embedded-subscribe-form&quot; class=&quot;validate&quot; target=&quot;_blank&quot; novalidate>    <div id=&quot;mc_embed_signup_scroll&quot;>    <h2>Subscribe to our mailing list</h2><div class=&quot;indicates-required&quot;><span class=&quot;asterisk&quot;>*</span> indicates required</div><div class=&quot;mc-field-group&quot;>    <label for=&quot;mce-EMAIL&quot;>Email Address  <span class=&quot;asterisk&quot;>*</span></label>    <input type=&quot;email&quot; value=&quot;&quot; name=&quot;EMAIL&quot; class=&quot;required email&quot; id=&quot;mce-EMAIL&quot;></div><div class=&quot;mc-field-group&quot;>    <label for=&quot;mce-FNAME&quot;>First Name </label>    <input type=&quot;text&quot; value=&quot;&quot; name=&quot;FNAME&quot; class=&quot;&quot; id=&quot;mce-FNAME&quot;></div><div class=&quot;mc-field-group&quot;>    <label for=&quot;mce-LNAME&quot;>Last Name </label>    <input type=&quot;text&quot; value=&quot;&quot; name=&quot;LNAME&quot; class=&quot;&quot; id=&quot;mce-LNAME&quot;></div>    <div id=&quot;mce-responses&quot; class=&quot;clear&quot;>        <div class=&quot;response&quot; id=&quot;mce-error-response&quot; style=&quot;display:none&quot;></div>        <div class=&quot;response&quot; id=&quot;mce-success-response&quot; style=&quot;display:none&quot;></div>    </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->    <div style=&quot;position: absolute; left: -5000px;&quot;><input type=&quot;text&quot; name=&quot;b_77142ece814d3cff52058a51f_94d040322a&quot; tabindex=&quot;-1&quot; value=&quot;&quot;></div>    <div class=&quot;clear&quot;><input type=&quot;submit&quot; value=&quot;Subscribe&quot; name=&quot;subscribe&quot; id=&quot;mc-embedded-subscribe&quot; class=&quot;button&quot;></div>    </div></form></div><script type='text/javascript' src='https://s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script><!--End mc_embed_signup-->" class="mail-list-form">
                      </iframe>
                  </form>
              </div>
            </div>
		    </section><section>
		        <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-12 text-center">
                       <h3>The Competition Consists Of</h3>
                    </div>
                </div>
		            <div class="row">

		                <div class="col-sm-6">
		                    <div class="feature feature-1 boxed">
		                        <div class="text-center">
		                            <i class="ti-dashboard icon"></i>
		                            <h4>Acceleration Testing</h4>
		                        </div>
		                        <p>
		                            Tests the hybrid cars acceleration capabilities over a stretch of 75 meters.<br><br><br><br><br></p>
		                    </div>

		                </div>
		                <div class="col-sm-6">
		                    <div class="feature feature-1 boxed">
		                        <div class="text-center">
		                            <i class="icon ti ti-timer"></i>
		                            <h4>Endurance</h4>
		                        </div>
		                        <p>By far the most rigorous test, the endurance section is setup as a 44 mi course where both all-electric and hybrid competition vehicles are given the same allotment of energy and compete not only for time but being efficient with energy usage. Regenerative braking as a part of a comprehensive system is crucial</p>
		                    </div>

		                </div><div class="col-sm-6">
		                    <div class="feature feature-1 boxed">
		                        <div class="text-center">
		                            <i class="icon ti ti-close"></i>
		                            <h4>Autocross</h4>
		                        </div>
		                        <p>Used to measure and judge the hybrid car's ability to handle courses that have many turns. Testing how well the system works in a more dynamic environment.</p>
		                    </div>

		                </div><div class="col-sm-6">
		                    <div class="feature feature-1 boxed">
		                        <div class="text-center">
		                            <i class="icon pe-7s-vector"></i>
		                            <h4>Design</h4>
		                        </div>
		                        <p>The design phase has the students explaining their design decisions to a panel of judges who can evaluate the approach to the solution. <br>&nbsp;</p>
		                    </div>

		                </div>

		            </div>

		        </div>

		    </section>
      </div><!--end main-container-->

<?php get_footer(); ?>
