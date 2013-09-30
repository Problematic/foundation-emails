<?php include 'includes/_header.php' ?>
<?php include 'includes/_top-bar.php' ?>

<section class="top-area">
  <div class="row">
    <div class="large-12 columns">
      <h2>Documentation</h2>
    </div>
  </div>
</section>

<div class="row docs">
  <div class="large-3 columns">
    <ul class="doc-nav">
      <li><a href="#start">Getting Started</a></li>
      <li><a href="#grid">Grid</a></li>
      <li><a href="#sub-grid">Sub-Grid</a></li>
      <li><a href="#full-width">Full-Width Headers &amp; Footers</a></li>
      <li><a href="#visibility-classes">Visibility Classes</a></li>
      <li><a href="#panels">Panels</a></li>
      <li><a href="#buttons">Buttons</a></li>
    </ul>
  </div>
  <div class="large-9 columns">
    <h1 id="start" class="light">Getting Started</h1>
    <p class="lead">Dive in to creating your responsive email.</p>
    <hr>
    <h2 class="light">The Boilerplate</h2>
    <p>
      Starting a new Ink project is fairly straightforward.  If you aren't using one of our <a href="templates.php">templates</a>, grab the boilerplate code from below to use as a starting point.  While you can reference <code>ink.css</code> using a link tag for testing purposes, be sure to remove the <kbd>&lt;link rel="stylesheet" href="ink.css" /&gt;</kbd> statement and paste your code into the style tag in the head before running your email through an inliner.
    </p>
    <script type="text/javascript" src="https://snipt.net/embed/ede5e79e642e6842d9727f711bfe61bf/"></script>
    <br>
    <p>
      If you're applying a background color to your entire email, be sure to attach it to the table with a class of <code>body</code>, not to the actual <kbd>&lt;body&gt;</kbd> tag, since some clients remove this be default.
    </p>
    <script type="text/javascript" src="https://snipt.net/embed/cb9276e922e8c38b108c4ec8ad420e7f/"></script>
    <br>
    
    <hr class="section">

    <h1 id="grid" class="light">Grid</h1>
    <p class="lead">Create powerful multi-device layouts quickly and easily.</p>

    <hr>
    <h2 class="light">Structure</h2>
    <h4 class="normal">Overview</h4>
    <p>Ink uses a 12-column grid with a 580px wrapper.  On mobile devices (under 580px wide), columns become full width and stack vertically.</p>
    <p>While the markup requires a few additional classes to support some older mail clients, Ink's grid can be thought of in terms of three components: containers, rows and columns.</p>
    <h4 class="normal">Containers</h4>
    <p>Ink containers wrap the content and contain it to a fixed, 580px layout on desktop clients and large tablets.  Below 580px, containers take up 95% of the screen's width.</p>
    <h4 class="normal">Rows</h4>
    <p>Rows are used to separate blocks of from each other vertically.  In addition, the <kbd>&lt;td&gt;</kbd> tags of <code>.row</code> tables use the wrapper class to maintain a gutter between columns.</p>
    <h4 class="normal">Columns</h4>
    <p>Columns denote the width of the content, as based on a 12-column system.  The content inside them will expand to cover n-columns, assuming that the number of columns in one row adds up to 12.</p>
    <script type="text/javascript" src="https://snipt.net/embed/1228ccdf52570df98c40fd5cdd66fce9/"></script>
    <br>
    <hr>
    <h2 class="light">Breakdown</h2>
    <p>The main elements in the grid and how they're used:</p>
    <table>
      <thead>
        <tr>
          <td>Element Type</td>
          <td>Class Name</td>
          <td>Description</td>
        </tr>
      </thead> 
      <tr>
        <td>table</td>
        <td>container</td>
        <td>Constrains the content to a 580px wrapper on large screens (95% on small screens) and centers it within the body.</td>
      </tr>
      <tr>
        <td>table</td>
        <td>row</td>
        <td>Separates each row of content.</td>
      </tr>
      <tr>
        <td>td</td>
        <td>wrapper</td>
        <td>Wraps each <code>.columns</code> table, in order to create a gutter between columns and force them to expand to full width on small screens.</td>
      </tr>
      <tr>
        <td>td</td>
        <td>last</td>
        <td>Class applied to the last <code>.wrapper</code> td in each row in order for the gutter to work properly.  If you only have one (presumably full-width) <code>.columns</code> table (and therefore one <code>.wrapper</code> td) in a row, the <code>.wrapper</code> td still needs to have the last class applied to it.</td>
      </tr>
      <tr>
        <td>table</td>
        <td>{number}</td>
        <td>Can be any number between one and twelve (spelled out).  Used to determine how wide your <code>.columns</code> tables are.  The number of columns in each row should add up to 12, including <a href="#offsets">offset columns</a>.</td>
      </tr>
      <tr>
        <td>table</td>
        <td>columns</td>
        <td>Table that displays as n-twelfths of the width of the 580px <code>.container</code> table on large screens, and expands to the full with of the <code>.container</code> table on small screens.</td>
      </tr>
      <tr>
        <td>td</td>
        <td>expander</td>
        <td>An empty (and invisible) element added after the content element in a <code>.columns</code> table.  It forces the content <code>td</code> to expand to the full width of the screen on small devices, instead of just the width of the content within the <code>td</code>.</td>
      </tr>
    </table>
    <hr>
    
    <h2 class="light">Examples</h2>
    <h4 class="normal">Even Columns</h4>
    <p>Ink's tweve column grid maks creating even column layouts a snap.  Just use one <code>.twelve.columns</code>, two <code>.six.columns</code>, three <code>.four.columns</code> or four <code>.three.columns</code> classes to create your layout.  Appearing as single columns on large screens, the layout will fold into a single column on small (mobile) screens.</p>
    <p>While technically possible, it's not suggested that you use tables that are fewer than three columns wide.</p>
    <script type="text/javascript" src="https://snipt.net/embed/28db973ea0117f4324cf5d74b0029f55/"></script>
    <br>
    <h4 class="normal">Rows Within Columns</h4>
    <p>Unlike the <a href="http://foundation.zurb.com/docs/components/grid.html">Foundation grid</a>, Ink's grid cannot be nested.  A layout simulating rows within columns is possible, however, by placing multiple <code>.columns</code> tables (with the same number of columns) within the same <code>.wrapper</code> td.</p>
    <script type="text/javascript" src="https://snipt.net/embed/01eb0d482e77ef8e25e40e6d1dae49d1/"></script>
    <br><h4 class="normal">Centered Content</h4>
    <p>To center the content of a column, apply a class of <code>center</code> to the <kbd>&lt;td&gt;</kbd> that contains the content.  If you want to center an image, you should also apply a class of <code>center</code> to the image itself.</p>
    <script type="text/javascript" src="https://snipt.net/embed/12bd7e7e0eaf1e43c2e79803bb5c84e6/"></script>
    <br>
    <h4 class="normal">When to Use Expanders</h4>
    <p>When the Ink grid is shown on a small screen, the <code>.columns</code> tables expand to the full with of the container and stack vertically.  On some clients, however, the columns don't expand properly if the content isn't as large as the screen.  While this might not seem so bad, it can cause your layout to appear broken if you are using a background color on the <code>.columns</code> table or are centering the content.</p>
    <p>To get around this, an empty <kbd>&lt;td&gt;</kbd> with a class of <code>expander</code> is used after the <kbd>&lt;td&gt;</kbd> containing the actual content in the <code>.columns</code> table.  This extra <kbd>&lt;td&gt;</kbd> isn't displayed, but it forces the content <kbd>&lt;td&gt;</kbd> to expand to full width.</p>
    
    <hr class="section">

    <h1 id="sub-grid" class="light">Sub-Grid</h1>
    <p class="lead">Create powerful multi-device layouts quickly and easily.</p>
    <hr />
    <h2 class="light">Explanation</h2>
    <h4 class="normal">Using our predefined HTML classes</h4>
    <p>These are examples of different ways to use the 4-column Ink Grid. Emails work properly by using table elements, a developer's and designer's worst enemy, but we've made it easy for you.  You can create beautiful layouts with ease, but only if you follow this structure.</p>
    <script type="text/javascript" src="https://snipt.net/embed/a2927bac91526b5a558d3bfa73dcdd79/"></script>
    <br>
    <hr />
    <h2 class="light">Breakdown</h2>
    <p>Here's how these items are being used:</p>
    <table>
      <tr>
        <td><code>table.body</code></td>
        <td>Certain clients strip out the body tag, so we'll provide a workaround and add some CSS to override default styles</td>
      </tr>
      
      <tr>
        <td><code>td.center</code></td>
        <td>This piece centers the table</td>
      </tr>
      <tr>
        <td><code>td.container</code></td>
        <td>We'll wrap everything to 600px</td>
      </tr>
      <tr>
        <td><code>td.row</code></td>
        <td>We'll wrap everything to 600px</td>
      </tr>
      <tr>
        <td><code>td.wrapper.last</code></td>
        <td>Why you need this class. it may span two lines but that's cool because we've accommodated for that</td>
      </tr>
      <tr>
        <td><code>table.(one–four).columns</code></td>
        <td>How wide you want your content to be</td>
      </tr>
      <tr>
        <td><code>td.expander</code></td>
        <td>What expander does yay!</td>
      </tr>
    </table>
    <hr />
    <h2 class="light">Examples</h2>
    <p>Maecenas faucibus mollis interdum. Sed posuere consectetur est at lobortis. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
    <script type="text/javascript" src="https://snipt.net/embed/a2927bac91526b5a558d3bfa73dcdd79/"></script>
    
    <hr class="section">

    <h1 id="full-width" class="light">Full-Width Headers &amp; Footers</h1>
    <p class="lead">Create powerful multi-device layouts quickly and easily.</p>
    <hr />
    <h2 class="light">Explanation</h2>
    <h4 class="normal">Using our predefined HTML classes</h4>
    <p>These are examples of different ways to use the 4-column Ink Grid. Emails work properly by using table elements, a developer's and designer's worst enemy, but we've made it easy for you.  You can create beautiful layouts with ease, but only if you follow this structure.</p>
    <script type="text/javascript" src="https://snipt.net/embed/a2927bac91526b5a558d3bfa73dcdd79/"></script>
    <br>
    <hr />
    <h2 class="light">Breakdown</h2>
    <p>Here's how these items are being used:</p>
    <table>
      <tr>
        <td><code>table.body</code></td>
        <td>Certain clients strip out the body tag, so we'll provide a workaround and add some CSS to override default styles</td>
      </tr>
      
      <tr>
        <td><code>td.center</code></td>
        <td>This piece centers the table</td>
      </tr>
      <tr>
        <td><code>td.container</code></td>
        <td>We'll wrap everything to 600px</td>
      </tr>
      <tr>
        <td><code>td.row</code></td>
        <td>We'll wrap everything to 600px</td>
      </tr>
      <tr>
        <td><code>td.wrapper.last</code></td>
        <td>Why you need this class. it may span two lines but that's cool because we've accommodated for that</td>
      </tr>
      <tr>
        <td><code>table.(one–four).columns</code></td>
        <td>How wide you want your content to be</td>
      </tr>
      <tr>
        <td><code>td.expander</code></td>
        <td>What expander does yay!</td>
      </tr>
    </table>
    <hr />
    <h2 class="light">Examples</h2>
    <p>Maecenas faucibus mollis interdum. Sed posuere consectetur est at lobortis. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
    <script type="text/javascript" src="https://snipt.net/embed/a2927bac91526b5a558d3bfa73dcdd79/"></script>
    
    <hr class="section">

    <h1 id="visibility-classes" class="light">Visibility Classes</h1>
    <p class="lead">Create powerful multi-device layouts quickly and easily.</p>
    <hr />
    <h2 class="light">Explanation</h2>
    <h4 class="normal">Using our predefined HTML classes</h4>
    <p>These are examples of different ways to use the 4-column Ink Grid. Emails work properly by using table elements, a developer's and designer's worst enemy, but we've made it easy for you.  You can create beautiful layouts with ease, but only if you follow this structure.</p>
    <script type="text/javascript" src="https://snipt.net/embed/a2927bac91526b5a558d3bfa73dcdd79/"></script>
    <br>
    <hr />
    <h2 class="light">Breakdown</h2>
    <p>Here's how these items are being used:</p>
    <table>
      <tr>
        <td><code>table.body</code></td>
        <td>Certain clients strip out the body tag, so we'll provide a workaround and add some CSS to override default styles</td>
      </tr>
      
      <tr>
        <td><code>td.center</code></td>
        <td>This piece centers the table</td>
      </tr>
      <tr>
        <td><code>td.container</code></td>
        <td>We'll wrap everything to 600px</td>
      </tr>
      <tr>
        <td><code>td.row</code></td>
        <td>We'll wrap everything to 600px</td>
      </tr>
      <tr>
        <td><code>td.wrapper.last</code></td>
        <td>Why you need this class. it may span two lines but that's cool because we've accommodated for that</td>
      </tr>
      <tr>
        <td><code>table.(one–four).columns</code></td>
        <td>How wide you want your content to be</td>
      </tr>
      <tr>
        <td><code>td.expander</code></td>
        <td>What expander does yay!</td>
      </tr>
    </table>
    <hr />
    <h2 class="light">Examples</h2>
    <p>Maecenas faucibus mollis interdum. Sed posuere consectetur est at lobortis. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
    <script type="text/javascript" src="https://snipt.net/embed/a2927bac91526b5a558d3bfa73dcdd79/"></script>
    
    <hr class="section">

    <h1 id="panels" class="light">Panels</h1>
    <p class="lead">Create powerful multi-device layouts quickly and easily.</p>
    <hr />
    <h2 class="light">Explanation</h2>
    <h4 class="normal">Using our predefined HTML classes</h4>
    <p>These are examples of different ways to use the 4-column Ink Grid. Emails work properly by using table elements, a developer's and designer's worst enemy, but we've made it easy for you.  You can create beautiful layouts with ease, but only if you follow this structure.</p>
    <script type="text/javascript" src="https://snipt.net/embed/a2927bac91526b5a558d3bfa73dcdd79/"></script>
    <br>
    <hr />
    <h2 class="light">Breakdown</h2>
    <p>Here's how these items are being used:</p>
    <table>
      <tr>
        <td><code>table.body</code></td>
        <td>Certain clients strip out the body tag, so we'll provide a workaround and add some CSS to override default styles</td>
      </tr>
      
      <tr>
        <td><code>td.center</code></td>
        <td>This piece centers the table</td>
      </tr>
      <tr>
        <td><code>td.container</code></td>
        <td>We'll wrap everything to 600px</td>
      </tr>
      <tr>
        <td><code>td.row</code></td>
        <td>We'll wrap everything to 600px</td>
      </tr>
      <tr>
        <td><code>td.wrapper.last</code></td>
        <td>Why you need this class. it may span two lines but that's cool because we've accommodated for that</td>
      </tr>
      <tr>
        <td><code>table.(one–four).columns</code></td>
        <td>How wide you want your content to be</td>
      </tr>
      <tr>
        <td><code>td.expander</code></td>
        <td>What expander does yay!</td>
      </tr>
    </table>
    <hr />
    <h2 class="light">Examples</h2>
    <p>Maecenas faucibus mollis interdum. Sed posuere consectetur est at lobortis. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
    <script type="text/javascript" src="https://snipt.net/embed/a2927bac91526b5a558d3bfa73dcdd79/"></script>
    
    <hr class="section">

    <h1 id="buttons" class="light">Buttons</h1>
    <p class="lead">Dynamic and effective calls to action.</p>
    <hr />
    <h2 class="light">Structure</h2>
    <h4 class="normal">Style One: The Preferred Method* <small>Does not work with <a href="#">Premailer</a>.</small></h4>
    <p>These are examples of different ways to use the 4-column Ink Grid. Emails work properly by using table elements, a developer's and designer's worst enemy, but we've made it easy for you.  You can create beautiful layouts with ease, but only if you follow this structure.</p>
    <script type="text/javascript" src="https://snipt.net/embed/a2927bac91526b5a558d3bfa73dcdd79/"></script>
    <br>
    <h4 class="normal">Style Two: The Bulletproof Method</h4>
    <p>These are examples of different ways to use the 4-column Ink Grid. Emails work properly by using table elements, a developer's and designer's worst enemy, but we've made it easy for you.  You can create beautiful layouts with ease, but only if you follow this structure.</p>
    <script type="text/javascript" src="https://snipt.net/embed/a2927bac91526b5a558d3bfa73dcdd79/"></script>
    <br>
    <hr />
    <h2 class="light">Style Classes</h2>
    <h4 class="normal">Size</h4>
    <p>Here's how these items are being used:</p>
    <table>
      <tr>
        <td></td>
      </tr>
    </table>
    <h4 class="normal">Color</h4>
    <p>Here's how these items are being used:</p>
    <table>
      <tr>
        <td></td>
      </tr>
    </table>
    <h4 class="normal">Border Radius</h4>
    <p>Here's how these items are being used:</p>
    <table>
      <tr>
        <td></td>
      </tr>
    </table>
    <hr />
    <h2 class="light">Examples</h2>
    <p>Maecenas faucibus mollis interdum. Sed posuere consectetur est at lobortis. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
    <script type="text/javascript" src="https://snipt.net/embed/a2927bac91526b5a558d3bfa73dcdd79/"></script>
    <br>
  </div>
</div>





<?php include 'includes/_subscribe.php' ?>	
<?php include 'includes/_footer.php' ?>