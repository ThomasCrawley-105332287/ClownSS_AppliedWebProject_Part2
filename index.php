<!-- variables for the meta tags, so each page is unique and uses the 1 header.inc file -->
<?php
  $pageTitle = "ClownSS - Smart City Solutions";
  $metaDescription = "Indexing page for Website";
  $metaKeywords = "Smart City, ClownSS, Web Development";
  $metaAuthor = "Thomas Crawley";
  $mainCSS = "styles/main_style_sheet.css";
  $extraCSS = "styles/index-styles.css";
?>


<?php include 'includes/header.inc'; ?>

<!-- Creates a space for the nav bar to sit in when the viewport is at the top of the page-->
        <div class="nav_space"></div>
        <main>
            <section id="description">
                <h2>Our Mission</h2>
                <aside>
                    <p>"Smarter infrastructure. Better cities. Brighter futures." - SCIC CEO</p>
                </aside>
                <p>Smart City Infrastructure Consultancy is a leading advisory firm helping local councils and industry partners design and deliver the digital systems that power modern urban life.
                     From intelligent transport networks and real-time energy monitoring to integrated urban services platforms, we bring together data, technology,
                      and strategic expertise to make cities more efficient, sustainable, and liveable. We believe smarter infrastructure creates stronger communities — 
                      and we're committed to building it, one city at a time.</p>
            </section>
            <table>
                <tr>
                    <th id="sector" rowspan="2">
                        <p>Sector</p>
                    </th>
                    <th id="year" colspan="5">
                        <p>Year on Year Increase</p>
                    </th>
                </tr>
                <tr class="yoy">
                    <td>
                        <p>-50%</p>
                    </td>
                    <td>
                        <p>-25%</p>
                    </td>
                    <td>
                        <p>0%</p>
                    </td>
                    <td>
                        <p>25%</p>
                    </td>
                    <td>
                        <p>50%</p>
                    </td>
                </tr>
                <tr class="Week1">
                    <td class="sector">
                        <p>Carbon Production</p>
                    </td>
                    <td>
                        
                    </td>
                    <td id="co2" colspan="2">
                        <p></p>
                    </td>
                    <td colspan="2">
                        
                    </td>
                </tr>
                <tr class="Week2">
                    <td class="sector">
                        <p>Renuable Energy Production</p>
                    </td>
                    <td colspan="3">
                        
                    </td>
                    <td colspan="2" id="renuable">
                        <p></p>
                    </td>
                </tr>
                <tr class="Week3">
                    <td class="sector">
                        <p>Power Outages</p>
                    </td>
                    <td colspan="2">
                        
                    </td>
                    <td id="out">
                        <p></p>
                    </td>
                    <td colspan="3">
                        
                    </td>
                </tr>
                <tr class="Week4">
                    <td class="sector">
                        <p>EV Adoption</p>
                    </td>
                    <td colspan="3">
                        
                    </td>
                    <td id="ev">
                        
                    </td>
                    <td colspan="2">
                        
                    </td>
                </tr>
            </table>
            <aside>
                <div class="acknowledgement">    
                    <div id="acknowledgement_title">
                        <h2>Acknowledgement of Country</h2>
                    </div>
                    <div id="acknowledgement_text">
                        <p>
                            We respectfully acknowledge the Wurundjeri People of the Kulin Nation, 
                            who are the Traditional Owners of the land on which this website was created, 
                            and pay our respect to their Elders past, present and emerging. We are honoured 
                            to recognise our connection to Wurundjeri Country, history, culture and 
                            spirituality through these locations, and strive to ensure that we operate in 
                            a manner that respects and honours the Elders and Ancestors of these lands. 
                            We also acknowledge and respect the Traditional Owners of lands across Australia, 
                            their Elders, Ancestors, cultures and heritage,and recognise the continuing 
                            sovereignties of all Aboriginal and Torres Strait Islander Nations.
                        </p>
                    </div>
                </div>
            </aside>
        </main>
        <footer>
                <p>&copy; 2026 ClownSS. All rights reserved.</p>
                <a href="index.html" target="_self" title="Go to Top of the page"  hreflang="en">Click here to go to the top of the page</a>
                <br>
                <address><p>Contact us at: <a href="mailto:106016142@student.swin.edu.au">106016142@student.swin.edu.au</a></p></address>
                <p> Github Repo: </p>
                <a href="https://thomascrawley-105332287.github.io/ClownSS_AppliedWebProject_Part1/" target="_blank">ClownSS Repository</a>
                <p>Jira Link: </p>
                <a href="https://clownss.atlassian.net/jira/software/projects/CAWPP1/boards/1/backlog"> Jira Space</a>
        </footer>
    </body>
</html>