
    
<?php
/**
 * Template Name: TRest
 */
	get_header();
?>
    
    

		<a href="https://github.com/davidstutz/bootstrap-multiselect"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_red_aa0000.png" alt="Fork me on GitHub"></a>

        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="well well-sm" style="margin-top:12px;">
                        <ul class="nav nav-list">
                            <li><a href="#getting-started">Getting Started</a></li>
                            <li><a href="#examples">Examples</a></li>
                            <li><a href="#options">Options</a></li>
                            <li><a href="#templates">Templates</a></li>
                            <li><a href="#methods">Methods</a></li>
                            <li><a href="#further-examples">Further Examples</a></li>
                            <li><a href="#additional-styling">Additional Styling</a></li>
                            <li><a href="#faq">Frequently Asked Questions</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="page-header">
                        <h1>Bootstrap Multiselect</h1>
                    </div>
                    
                    <ul class="nav nav-pills">
                        <li class="active"><a href="#">Bootstrap 3.1 &amp; jQuery 2.1</a></li>
                        <li><a href="index-2-3.html">Bootstrap 2.3 &amp; jQuery 2.1</a></li>
                    </ul>
                    <hr>
                    
                    <p class="lead">
                        Bootstrap Multiselect is a JQuery based plugin to provide an intuitive user interface for using select inputs with the multiple attribute present. Instead of a select a bootstrap button will be shown as dropdown menu containing the single options as checkboxes.
                    </p>
                </div>
            </div>
            
	        <script>
	            $('.dropdown input, .dropdown label').click(function (event) {
	                event.stopPropagation();
	            });
        	</script>
            
            <div class="page-header">
                <h1><a id="getting-started"></a>Getting Started</h1>
            </div>
            
            <p>
                The following code snippet will help you getting started.
            </p>

            <pre class="prettyprint linenums">
&lt;!-- Include Twitter Bootstrap and jQuery: --&gt;
&lt;link rel=&quot;stylesheet&quot; href=&quot;css/bootstrap.min.css&quot; type=&quot;text/css&quot;/&gt;
&lt;script type=&quot;text/javascript&quot; src=&quot;js/jquery.min.js&quot;&gt;&lt;/script&gt;
&lt;script type=&quot;text/javascript&quot; src=&quot;js/bootstrap.min.js&quot;&gt;&lt;/script&gt;

&lt;!-- Include the plugin's CSS and JS: --&gt;
&lt;script type=&quot;text/javascript&quot; src=&quot;js/bootstrap-multiselect.js&quot;&gt;&lt;/script&gt;
&lt;link rel=&quot;stylesheet&quot; href=&quot;css/bootstrap-multiselect.css&quot; type=&quot;text/css&quot;/&gt;

&lt;!-- Build your select: --&gt;
&lt;select class=&quot;multiselect&quot; multiple=&quot;multiple&quot;&gt;
  &lt;option value=&quot;cheese&quot;&gt;Cheese&lt;/option&gt;
  &lt;option value=&quot;tomatoes&quot;&gt;Tomatoes&lt;/option&gt;
  &lt;option value=&quot;mozarella&quot;&gt;Mozzarella&lt;/option&gt;
  &lt;option value=&quot;mushrooms&quot;&gt;Mushrooms&lt;/option&gt;
  &lt;option value=&quot;pepperoni&quot;&gt;Pepperoni&lt;/option&gt;
  &lt;option value=&quot;onions&quot;&gt;Onions&lt;/option&gt;
&lt;/select&gt;

&lt;!-- Initialize the plugin: --&gt;
&lt;script type=&quot;text/javascript&quot;&gt;
  $(document).ready(function() {
    $(&#39;.multiselect&#39;).multiselect();
  });
&lt;/script&gt;
            </pre>
            
			<div class="page-header">
				<h1><a id="examples"></a>Examples</h1>
			</div>
			
			<script type="text/javascript">
			    $(document).ready(function() {
			        window.prettyPrint() && prettyPrint();
					
			        $('#example1').multiselect();
					
			        $('#example2').multiselect();
					
			        $('#example3').multiselect({
			            buttonClass: 'btn btn-link'
			        });
					
			        $('#example4').multiselect({
			            buttonClass: 'btn btn-default btn-sm'
			        });
					
			        $('#example6').multiselect();
					
			        $('#example9').multiselect({
			            onChange:function(element, checked){
			                alert('Change event invoked!');
			                console.log(element);
			            }
			        });
					
			        for (var i = 1; i <= 100; i++) {
			            $('#example11').append('<option value="' + i + '">Options ' + i + '</option>');
			        }
			        $('#example11').multiselect({
			            maxHeight: 200
			        })
					
			        $('#example13').multiselect();
					
			        $('#example14').multiselect({
			            buttonWidth: '500px',
			            buttonText: function(options) {
			                if (options.length === 0) {
			                    return 'None selected <b class="caret"></b>';
			                }
			                else {
			                    var selected = '';
			                    options.each(function() {
			                        selected += $(this).text() + ', ';
			                    });
			                    return selected.substr(0, selected.length -2) + ' <b class="caret"></b>';
			                }
			            }
			        });
					
			        $('#example16').multiselect({
			            onChange: function(option, checked) {
                            if (checked === false) {
                                $('#example16').multiselect('select', option.val());
                            }
			            }
			        });
					
			        $('#example19').multiselect();

			        $('#example20').multiselect({
			            selectedClass: null
			        });
					
			        $('#example23').multiselect();
					
			        $('#example24').multiselect();

			        $('#example25').multiselect({
			        	dropRight: true,
			        	buttonWidth: '300px'
			        });

			        $('#example27').multiselect({
			        	includeSelectAllOption: true
			        });

					// Add options for example 28.
					for (var i = 1; i <= 100; i++) {
						$('#example28').append('<option value="' + i + '">' + i + '</option>');
					}

			        $('#example28').multiselect({
			        	includeSelectAllOption: true,
			        	enableFiltering: true,
			        	maxHeight: 150
			        });
                    
                    $('#example28-values').on('click', function() {
                        var values = [];
                        
                        $('option:selected', $('#example28')).each(function() {
                            values.push($(this).val());
                        });
                        
                        alert(values);
                    })
                    
                    $('#example32').multiselect();
                    
                    $('#example39').multiselect({
                        includeSelectAllOption: true,
			        	enableCaseInsensitiveFiltering: true
                    });
                    
                    $('#example41').multiselect({
			        	includeSelectAllOption: true
			        });
                    
                    $('#example44').multiselect({
                        onDropdownShow: function() {
                            alert('Dropdown shown!');
                        },
                        onDropdownHide: function() {
                            alert('Dropdown hidden ...');
                        }
                    });
                    
                    for (var i = 1; i < 1000; i++) {
                        $('#example45').append('<option value="' + i + '">Option ' + i + '</option>');
                    }
                    
                    $('#example45').multiselect({
                        includeSelectAllOption: true,
                        maxHeight: 150
                    });
                    
                    $('#example46').multiselect({
                        checkboxName: 'multiselect-checkbox'
                    });
			    });
			</script>
			<p>
				The best way learning from the examples is using firebug, chrome developer tools or similar tools for your browser. Examine the generated markup and used javascript code.
			</p>
			<table class="table table-striped">
				<tr>
					<td>
						<select id="example1">
							<option value="cheese" selected>Cheese</option>
							<option value="tomatoes">Tomatoes</option>
							<option value="mozarella">Mozzarella</option>
							<option value="mushrooms">Mushrooms</option>
							<option value="pepperoni">Pepperoni</option>
							<option value="onions">Onions</option>
						</select>
					</td>
					<td>
						Normal select. The plugin will do single selection using radio buttons rather than multiple selection using checkboxes.
					</td>
				</tr>
			    <tr>
			        <td>
			            <select id="example2" multiple="multiple">
			                <option value="cheese" selected>Cheese</option>
			                <option value="tomatoes" selected>Tomatoes</option>
			                <option value="mozarella" selected>Mozzarella</option>
			                <option value="mushrooms">Mushrooms</option>
			                <option value="pepperoni">Pepperoni</option>
			                <option value="onions">Onions</option>
			            </select>
			        </td>
			        <td>
			            Select with preselected options: <code>&lt;option value=&quot;cheese&quot; selected&gt;Cheese&lt;/option&gt;</code>
			        </td>
			    </tr>
			    <tr>
			        <td>
			            <select id="example27" multiple="multiple">
			                <option value="cheese">Cheese</option>
			                <option value="tomatoes">Tomatoes</option>
			                <option value="mozarella">Mozzarella</option>
			                <option value="mushrooms">Mushrooms</option>
			                <option value="pepperoni">Pepperoni</option>
			                <option value="onions">Onions</option>
			            </select>
			        </td>
			        <td>
			            Multiselect with a 'Select all' option.
			        </td>
			    </tr>
                       <tr>
					<td>
                        <div class="btn-group">
                            <select id="example28" multiple="multiple"></select>
                            <button id="example28-values" class="btn btn-primary">Get Selected</button>
                        </div>
					</td>
					<td>
						Multiselect with a 'Select all' option and filtering enabled using the <code>enableFiltering</code> option.
					</td>
				</tr>
                <tr>
					<td>
						<select id="example41" multiple="multiple">
                            <option value="cheese" selected>Cheese</option>
							<option value="tomatoes" selected>Tomatoes</option>
							<option value="mozarella" selected>Mozzarella</option>
							<option value="mushrooms" selected>Mushrooms</option>
							<option value="pepperoni" selected>Pepperoni</option>
							<option value="onions" selected>Onions</option>
                        </select>
					</td>
					<td>
                        The 'Select all' option automatically repsonds to the selection of the user. In particular, it responds to the initial state of the select.
					</td>
				</tr>
                <tr>
					<td>
						<select id="example45" multiple="multiple"></select>
					</td>
					<td>
                        Test the performance of the 'Select all' option with 999 options.
					</td>
				</tr>
				<tr>
					<td>
						<select id="example3" multiple="multiple">
							<option value="cheese">Cheese</option>
							<option value="tomatoes">Tomatoes</option>
							<option value="mozarella">Mozzarella</option>
							<option value="mushrooms">Mushrooms</option>
							<option value="pepperoni">Pepperoni</option>
							<option value="onions">Onions</option>
						</select>
					</td>
					<td>
						As link using <code>buttonClass: &apos;btn btn-link&apos;</code>.
					</td>
				</tr>
				<tr>
					<td>
						<select id="example4" multiple="multiple">
							<option value="cheese">Cheese</option>
							<option value="tomatoes">Tomatoes</option>
							<option value="mozarella">Mozzarella</option>
							<option value="mushrooms">Mushrooms</option>
							<option value="pepperoni">Pepperoni</option>
							<option value="onions">Onions</option>
						</select>
					</td>
					<td>
						Small button using <code>buttonClass: &apos;btn btn-default btn-sm&apos;</code>.
					</td>
				</tr>
				<tr>
					<td>
						<div class="input-group btn-group">
							<span class="input-group-addon"><b class="glyphicon glyphicon-list-alt"></b></span>
							<select id="example6" multiple="multiple">
								<option value="cheese">Cheese</option>
								<option value="tomatoes">Tomatoes</option>
								<option value="mozarella">Mozzarella</option>
								<option value="mushrooms">Mushrooms</option>
								<option value="pepperoni">Pepperoni</option>
								<option value="onions">Onions</option>
							</select>
						</div>
					</td>
					<td>
						Multiple select within a group with add-ons and default container for the plugin: <code>buttonContainer: &apos;&lt;div class="btn-group" /&gt;&apos;</code>.
					</td>
				</tr>
				<tr>
					<td>
						<select id="example9" multiple="multiple">
							<option value="cheese">Cheese</option>
							<option value="tomatoes">Tomatoes</option>
							<option value="mozarella">Mozzarella</option>
							<option value="mushrooms">Mushrooms</option>
							<option value="pepperoni">Pepperoni</option>
							<option value="onions">Onions</option>
						</select>
					</td>
					<td>
						Using the <code>onChange</code> option you can add an event handler to the change event. The event handler gets the selected option as first parameter and a variable saying whether the option is checked or not as second one.
					</td>
				</tr>
				<tr>
					<td>
						<select id="example11" multiple="multiple">
							
						</select>
					</td>
					<td>
						For long option lists the <code>maxHeight</code> option can be set.
					</td>
				</tr>
				<tr>
					<td>
						<select id="example13" multiple="multiple">
							<option value="enabled1">Enabled 1</option>
							<option value="enabled2">Enabled 2</option>
							<option value="disabled2" disabled="disabled">Disabled 1</option>
						</select>
					</td>
					<td>
						The plugin supports disabled options, too: <code>disabled=&quot;disabled&quot;</code>
					</td>
				</tr>
				<tr>
					<td>
						<select id="example14" multiple="multiple">
							<option value="cheese">Cheese</option>
							<option value="tomatoes">Tomatoes</option>
							<option value="mozarella">Mozzarella</option>
							<option value="mushrooms">Mushrooms</option>
							<option value="pepperoni">Pepperoni</option>
							<option value="onions">Onions</option>
						</select>
					</td>
					<td>
						Use the <code>buttonWidth</code> option to adjust the width of the button.
					</td>
				</tr>
				<tr>
					<td>
						<select id="example16" multiple="multiple">
							<option value="cheese">Cheese</option>
							<option value="tomatoes">Tomatoes</option>
							<option value="mozarella">Mozzarella</option>
							<option value="mushrooms">Mushrooms</option>
							<option value="pepperoni">Pepperoni</option>
							<option value="onions">Onions</option>
						</select>
					</td>
					<td>
						Using the <code>onChange</code> option to prevent user from deselecting selected options.
					</td>
				</tr>
				<tr>
					<td>
						<select id="example19" multiple="multiple">
							<optgroup label="Mathematics">
								<option value="analysis">Analysis</option>
								<option value="algebra">Linear Algebra</option>
								<option value="discrete">Discrete Mathematics</option>
								<option value="numerical">Numerical Analysis</option>
								<option value="probability">Probability Theory</option>
							</optgroup>
							<optgroup label="Computer Science">
								<option value="programming">Introduction to Programming</option>
								<option value="automata">Automata Theory</option>
								<option value="complexity">Complexity Theory</option>
								<option value="software">Software Engineering</option>
							</optgroup>
						</select>
					</td>
					<td>
						Option groups are detected automatically and for each option group an header element is added: <code>&lt;optgroup label=&quot;Mathematics&quot;&gt;...&lt;/optgroup&gt;</code>
					</td>
				</tr>
				<tr>
					<td>
						<select id="example23" multiple="multiple">
							<option value="lab">Lab Course</option>
							<option value="proseminar">Proseminar</option>
							<optgroup label="Mathematics">
								<option value="analysis">Analysis</option>
								<option value="algebra">Linear Algebra</option>
								<option value="discrete">Discrete Mathematics</option>
								<option value="numerical">Numerical Analysis</option>
								<option value="probability">Probability Theory</option>
							</optgroup>
							<optgroup label="Computer Science">
								<option value="programming">Introduction to Programming</option>
								<option value="automata">Automata Theory</option>
								<option value="complexity">Complexity Theory</option>
								<option value="software">Software Engineering</option>
							</optgroup>
						</select>
					</td>
					<td>
						Option groups and options without any group are supported simultaneously.
					</td>
				</tr>
				<tr>
					<td>
						<select id="example20" multiple="multiple">
							<option value="cheese">Cheese</option>
							<option value="tomatoes">Tomatoes</option>
							<option value="mozarella">Mozzarella</option>
							<option value="mushrooms">Mushrooms</option>
							<option value="pepperoni">Pepperoni</option>
							<option value="onions">Onions</option>
						</select>
					</td>
					<td>
						Using the <code>selectedClass</code> option to turn off the active class for selected options.
					</td>
				</tr>
				<tr>
					<td>
						<select id="example24" multiple="multiple">
							<option value="analysis" label="Ana">Analysis</option>
							<option value="algebra" label="LA">Linear Algebra</option>
							<option value="discrete" label="Discrete">Discrete Mathematics</option>
							<option value="numerical" label="NumA">Numerical Analysis</option>
							<option value="probability" label="Proba">Probability Theory</option>
						</select>
					</td>
					<td>
						Specify an alternative label for the options: <code>&lt;option label=&quot;label&quot;&gt;&lt;/option&gt;</code>
					</td>
				</tr>
                <tr>
                    <td>
						<div class="pull-left">
                        	<select id="example25" multiple="multiple">
                                	<option value="analysis" label="Ana">Analysis</option>
                                    <option value="algebra" label="LA">Linear Algebra</option>
                                    <option value="discrete" label="Discrete">Discrete Mathematics</option>
                                    <option value="numerical" label="NumA">Numerical Analysis</option>
                                    <option value="probability" label="Proba">Probability Theory</option>
	                        </select>
						</div>
                    </td>
                    <td>
                        Make the menu drop right instead of dropping left with <code>dropRight</code>.
                    </td>
                </tr>
				<tr>
					<td>
						<select id="example26" multiple="multiple" data-role="multiselect">
							<option value="cheese">Cheese</option>
							<option value="tomatoes">Tomatoes</option>
							<option value="mozarella">Mozzarella</option>
							<option value="mushrooms">Mushrooms</option>
							<option value="pepperoni">Pepperoni</option>
							<option value="onions">Onions</option>
						</select>
					</td>
					<td>
						Using the <code>data-role="multiselect"</code> attribute for automatic wireup.
					</td>
				</tr>
				<tr>
					<td>
						<select id="example31" multiple="multiple" data-role="multiselect" disabled>
							<option value="cheese">Cheese</option>
							<option value="tomatoes">Tomatoes</option>
							<option value="mozarella">Mozzarella</option>
							<option value="mushrooms">Mushrooms</option>
							<option value="pepperoni">Pepperoni</option>
							<option value="onions">Onions</option>
						</select>
					</td>
					<td>
						The multiselect will adopt the state of the select: <code>&lt;select disabled&gt;&lt;/select&gt;</code>.
					</td>
				</tr>
                <tr>
					<td>
						<select id="example32" multiple="multiple" tabindex="1">
							<option value="cheese">Cheese</option>
							<option value="tomatoes">Tomatoes</option>
							<option value="mozarella">Mozzarella</option>
							<option value="mushrooms">Mushrooms</option>
							<option value="pepperoni">Pepperoni</option>
							<option value="onions">Onions</option>
						</select>
					</td>
					<td>
						The button will keep the <code>tabindex</code> of the select.
					</td>
				</tr>
                <tr>
					<td>
						<select id="example39" multiple="multiple">
							<option value="lab">Lab Course</option>
							<option value="proseminar">Proseminar</option>
							<optgroup label="Mathematics">
								<option value="analysis">Analysis</option>
								<option value="algebra">Linear Algebra</option>
								<option value="discrete">Discrete Mathematics</option>
								<option value="numerical">Numerical Analysis</option>
								<option value="probability">Probability Theory</option>
							</optgroup>
							<optgroup label="Computer Science">
								<option value="programming">Introduction to Programming</option>
								<option value="automata">Automata Theory</option>
								<option value="complexity">Complexity Theory</option>
								<option value="software">Software Engineering</option>
							</optgroup>
						</select>
					</td>
					<td>
						Using <code>optgroup</code> with filtering and the select all option.
					</td>
				</tr>
                <tr>
					<td>
						<select id="example44" multiple="multiple">
							<option value="cheese">Cheese</option>
							<option value="tomatoes">Tomatoes</option>
							<option value="mozarella">Mozzarella</option>
							<option value="mushrooms">Mushrooms</option>
							<option value="pepperoni">Pepperoni</option>
							<option value="onions">Onions</option>
						</select>
					</td>
					<td>
                        The <code>onDropdownShow</code> and <code>onDropdownHide</code> represent the <code>show.bs.dropdown</code> and <code>hide.bs.dropdown</code> events provided by Twitter Bootstrap.
					</td>
				</tr>
                <tr>
					<td>
						<select id="example46" multiple="multiple">
							<option value="cheese">Cheese</option>
							<option value="tomatoes">Tomatoes</option>
							<option value="mozarella">Mozzarella</option>
							<option value="mushrooms">Mushrooms</option>
							<option value="pepperoni">Pepperoni</option>
							<option value="onions">Onions</option>
						</select>
					</td>
					<td>
                        Use the <code>checkboxName</code> to adapt the <code>name</code> attribute of the used checkboxes.
					</td>
				</tr>
			</table>

            <div class="page-header">
				<h1><a id="options"></a>Options</h1>
			</div>
            
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Option</th>
						<th>Explanation</th>
						<th>Usage</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><code>buttonText</code></td>
						<td>A function returning the string displayed if options are selected. All currently selected options and the select are passed as argument. In addition HTML can be added to the button, for example the caret icon seen in the examples.</td>
						<td>
							<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
  $(document).ready(function() {
    $(&#39;.multiselect&#39;).multiselect({
      buttonText: function(options, select) {
        if (options.length == 0) {
          return this.nonSelectedText + ' &lt;b class="caret"&gt;&lt;/b&gt;';
        }
        else {
          if (options.length > this.numberDisplayed) {
            return options.length + ' ' + this.nSelectedText + ' &lt;b class="caret"&gt;&lt;/b&gt;';
          }
          else {
            var selected = '';
            options.each(function() {
              var label = ($(this).attr('label') !== undefined) ? $(this).attr('label') : $(this).html();

              selected += label + ', ';
            });
            return selected.substr(0, selected.length - 2) + ' &lt;b class="caret"&gt;&lt;/b&gt;';
          }
        }
      }
    });
  });
&lt;/script&gt;
							</pre>
						</td>
					</tr>
                    <tr>
						<td><code>numberDisplayed</code></td>
						<td>This option can be used to define the number of displayed option before the text defined in <code>nSelectedText</code> is used. This option may not be available when using a custom <code>buttonText</code> function.</td>
						<td>
							<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
  $(document).ready(function() {
    $(&#39;.multiselect&#39;).multiselect({
      numberDisplayed: 4
    });
  });
&lt;/script&gt;
							</pre>
						</td>
					</tr>
                                        <tr>
 						<td><code>nonSelectedText</code></td>
 						<td>A string that is displayed when no options are selected.</td>
 						<td>
 							<pre class="prettyprint linenums">
 &lt;script type=&quot;text/javascript&quot;&gt;
   $(document).ready(function() {
     $(&#39;.multiselect&#39;).multiselect({
       nonSelectedText: 'You have not selected any options'
     });
   });
 &lt;/script&gt;
 							</pre>
 						</td>
 					</tr>
                                        <tr>
						<td><code>buttonTitle</code></td>
						<td>Function defining the title of the button. Similar to the <code>buttonText</code> option.</td>
						<td>
							<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
  $(document).ready(function() {
    $(&apos;.multiselect&apos;).multiselect({
      buttonTitle: function(options, select) {
        var selected = &apos;&apos;;
        options.each(function () {
          selected += $(this).text() + &apos;, &apos;;
        });
        return selected.substr(0, selected.length - 2);
      },
    });
  });
&lt;/script&gt;
							</pre>
						</td>
					</tr>
					<tr>
						<td><code>buttonClass</code></td>
						<td>The class of the dropdown button. Default: <code>btn</code>.</td>
						<td>
							<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
  $(document).ready(function() {
    $(&#39;.multiselect&#39;).multiselect({
      buttonClass: &apos;btn-primary btn-lg&apos;
    });
  });
&lt;/script&gt;
							</pre>
						</td>
					</tr>
					<tr>
						<td><code>buttonWidth</code></td>
						<td>
							The width of the dropdown button. Default: <code>auto</code>.
							Allowed formats:
							<ul>
								<li><code>100px</code></li>
								<li><code>50%</code></li>
								<li><code>auto</code></li>
							</ul>
							If the width is defined using CSS the option should be set to <code>false</code>.
						</td>
						<td>
							<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
  $(document).ready(function() {
    $(&#39;.multiselect&#39;).multiselect({
      buttonWidth: &apos;300px&apos;
    });
  });
&lt;/script&gt;
							</pre>
						</td>
					</tr>
					<tr>
						<td><code>buttonContainer</code></td>
						<td>
							The used container holding both the dropdown button and the dropdown menu. Default: <code>&lt;div class="btn-group" /&gt;</code>.
						</td>
						<td>
							<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
  $(document).ready(function() {
    $(&#39;.multiselect&#39;).multiselect({
      buttonContainer: &apos;&lt;span class="dropdown" /&gt;&apos;
    });
  });
&lt;/script&gt;
							</pre>
						</td>
					</tr>
					<tr>
						<td><code>label</code></td>
						<td>Function to write the label of the item.</td>
						<td>
							<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
  $(document).ready(function() {
    $(&#39;.multiselect&#39;).multiselect({
      label: function(element) {
      	return $(element).html()+&#39; (&#39;+$(element).val()+&#39;)&#39;;
      }
    });
  });
&lt;/script&gt;
							</pre>
						</td>
					</tr>
					<tr>
						<td><code>selectedClass</code></td>
						<td>The class applied to the parent <code>&lt;li&gt;</code> of selected items. Default: <code>active</code>.</td>
						<td>
							<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
  $(document).ready(function() {
    $(&#39;.multiselect&#39;).multiselect({
      selectedClass: null
    });
  });
&lt;/script&gt;
							</pre>
						</td>
					</tr>
					<tr>
						<td><code>onChange</code></td>
						<td>
							This event handler is triggered when the selected options are changed.
						</td>
						<td>
							<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
  $(document).ready(function() {
    $(&#39;.multiselect&#39;).multiselect({
      onChange: function(element, checked) {
      	alert(&apos;Change event invoked!&apos;);
      }
    });
  });
&lt;/script&gt;
							</pre>
						</td>
					</tr>
					<tr>
						<td><code>onDropdownShow</code></td>
						<td>
                            <p>
                                This event handler is triggered when the dropdown are shown.
                            </p>
                            <p>
                                <span class="text-warning">Both, the <code>onDropdownShow</code> and the <code>onDropdownHide</code> options are not supported when using Twitter Bootstrap 2.3.</span>
                            </p>
						</td>
						<td>
							<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
  $(document).ready(function() {
    $(&#39;.multiselect&#39;).multiselect({
      onDropdownShow: function(event) {
      	alert(&apos;Show event invoked!&apos;);
      }
    });
  });
&lt;/script&gt;
							</pre>
						</td>
					</tr>
					<tr>
						<td><code>onDropdownHide</code></td>
						<td>
                            <p>
                                This event handler is triggered when the dropdown are hidden.
                            </p>
                            <p>
                                <span class="text-warning">Both, the <code>onDropdownShow</code> and the <code>onDropdownHide</code> options are not supported when using Twitter Bootstrap 2.3.</span>
                            </p>
						</td>
						<td>
							<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
  $(document).ready(function() {
    $(&#39;.multiselect&#39;).multiselect({
      onDropdownHide: function(event) {
      	alert(&apos;Hide event invoked!&apos;);
      }
    });
  });
&lt;/script&gt;
							</pre>
						</td>
					</tr>					
					<tr>
						<td><code>maxHeight</code></td>
						<td>
							Used for a long list of options this option defines the maximum height of the dropdown menu. If the size is exceeded a scrollbar will appear.
						</td>
						<td>
							<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
  $(document).ready(function() {
    $(&#39;.multiselect&#39;).multiselect({
      maxHeight: 400
    });
  });
&lt;/script&gt;
							</pre>
						</td>
					</tr>
                    <tr>
						<td><code>checkboxName</code></td>
						<td>
							Used to configure the <code>name</code> attribute of the checkboxes or radio buttons used within the multiselect.
						</td>
						<td>
							<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
  $(document).ready(function() {
    $(&#39;.multiselect&#39;).multiselect({
      checkboxName: 'custom-name'
    });
  });
&lt;/script&gt;
							</pre>
						</td>
					</tr>
					<tr>
						<td><code>includeSelectAllOption</code></td>
						<td>
							If set to <code>true</code> a 'Select all' option will be added.
						</td>
						<td>
							<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
  $(document).ready(function() {
    $(&#39;.multiselect&#39;).multiselect({
      includeSelectAllOption: true
    });
  });
&lt;/script&gt;
							</pre>
						</td>
					</tr>
                    <tr>
						<td><code>includeSelectAllIfMoreThan</code></td>
						<td>
                            If <code>includeSelectAllOption</code> is set to <code>true</code>, the select all option will be added if more than <code>includeSelectAllIfMoreThan</code> options are present. By default this option is set to <code>0</code>.
						</td>
						<td>
							<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
  $(document).ready(function() {
    $(&#39;.multiselect&#39;).multiselect({
      includeSelectAllOption: true,
      includeSelectAllIfMoreThan: 10
    });
  });
&lt;/script&gt;
							</pre>
						</td>
					</tr>
					<tr>
						<td><code>includeSelectAllDivider</code></td>
						<td>
                            If set to <code>true</code> (along with <code>includeSelectAllOption</code>) a divider will be placed below the 'Select all' option.
						</td>
						<td>
							<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
  $(document).ready(function() {
    $(&#39;.multiselect&#39;).multiselect({
      includeSelectAllOption: true,
      includeSelectAllDivider: true
    });
  });
&lt;/script&gt;
							</pre>
						</td>
					</tr>
					<tr>
						<td><code>selectAllText</code></td>
						<td>
							The label for the 'Select all' option.
						</td>
						<td>
							<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
  $(document).ready(function() {
    $(&#39;.multiselect&#39;).multiselect({
      selectAllText: true
    });
  });
&lt;/script&gt;
							</pre>
						</td>
					</tr>
					<tr>
						<td><code>selectAllValue</code></td>
						<td>
							The value by which the select all option is identified.
						</td>
						<td>
							<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
  $(document).ready(function() {
    $(&#39;.multiselect&#39;).multiselect({
      selectAllValue: 'multiselect-all',
    });
  });
&lt;/script&gt;
							</pre>
						</td>
					</tr>
					<tr>
						<td><code>enableFiltering</code></td>
						<td>
							If set to <code>true</code> a search field will be added to filter the visible options.
						</td>
						<td>
							<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
  $(document).ready(function() {
    $(&#39;.multiselect&#39;).multiselect({
      enableFiltering: true
    });
  });
&lt;/script&gt;
							</pre>
						</td>
					</tr>
                    <tr>
						<td><code>filterBehavior</code></td>
						<td>
                            Either <code>text</code>, <code>value</code> or <code>both</code>. Determines whether the option's text, value or both is used for filtering.
						</td>
						<td>
							<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
  $(document).ready(function() {
    $(&#39;.multiselect&#39;).multiselect({
      enableFiltering: true,
      filterBehavior: 'both'
    });
  });
&lt;/script&gt;
							</pre>
						</td>
					</tr>
                    <tr>
						<td><code>enableCaseInsensitiveFiltering</code></td>
						<td>
							The same as <code>enableFiltering</code> but with case insensitive filtering.
						</td>
						<td>
							<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
  $(document).ready(function() {
    $(&#39;.multiselect&#39;).multiselect({
      enableCaseInsensitiveFiltering: true
    });
  });
&lt;/script&gt;
							</pre>
						</td>
					</tr>
					<tr>
						<td><code>filterPlaceholder</code></td>
						<td>
							The placeholder used in the search field if filtering is enabled.
						</td>
						<td>
							<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
  $(document).ready(function() {
    $(&#39;.multiselect&#39;).multiselect({
      filterPlaceholder: &apos;Search&apos;
    });
  });
&lt;/script&gt;
							</pre>
						</td>
					</tr>
					<tr>
						<td><code>dropRight</code></td>
						<td>
							Will make the menu drop right if set to <code>true</code>.
						</td>
						<td>
							<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
  $(document).ready(function() {
    $(&#39;.multiselect&#39;).multiselect({
      dropRight: true
    });
  });
&lt;/script&gt;
							</pre>
						</td>
					</tr>
				</tbody>
			</table>
            
            <div class="page-header">
				<h1><a id="templates"></a>Templates</h1>
			</div>
            
            <script type="text/javascript">
                $(document).ready(function() {
                    $('#example47').multiselect({
                        templates: {
                            divider: '<div class="divider" data-role="divider"></div>'
                        }
                    });
                });
            </script>
            
            <p>
                The plugin uses templates to create different parts of the plugin - as for example the filter, dividers or the button. The default templates can be seen below.
            </p>
            
            <pre class="prettyprint linenums">
templates: {
  button: '&lt;button type="button" class="multiselect dropdown-toggle" data-toggle="dropdown"&gt;&lt;/button&gt;',
  ul: '&lt;ul class="multiselect-container dropdown-menu"&gt;&lt;/ul&gt;',
  filter: '&lt;div class="input-group"&gt;&lt;span class="input-group-addon"&gt;&lt;i class="glyphicon glyphicon-search"&gt;&lt;/i&gt;&lt;/span&gt;&lt;input class="form-control multiselect-search" type="text"&gt;&lt;/div&gt;',
  li: '&lt;li&gt;&lt;a href="javascript:void(0);"&gt;&lt;label&gt;&lt;/label&gt;&lt;/a&gt;&lt;/li&gt;',
  divider: '&lt;li class="divider"&gt;&lt;/li&gt;',
  liGroup: '&lt;li&gt;&lt;label class="multiselect-group"&gt;&lt;/label&gt;&lt;/li&gt;'
}
            </pre>
            
            <p>
                The templates can be overriden using the <code>templates</code> configuration option. The example below uses a <code>div</code> for dividers.
            </p>
            
            <table class="table table-striped">
                <tbody>
                    <tr>
                        <td>
                            <select id="example47" multiple="multiple">
                                <option value="cheese">Cheese</option>
                                <option value="tomatoes">Tomatoes</option>
                                <option data-role="divider"></option>
                                <option value="mozarella">Mozzarella</option>
                                <option value="mushrooms">Mushrooms</option>
                                <option data-role="divider"></option>
                                <option value="pepperoni">Pepperoni</option>
                                <option value="onions">Onions</option>
                            </select>
                        </td>
                        <td>
                            <pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
  $(document).ready(function() {
    $(&#39;.multiselect&#39;).multiselect({
      templates: {
        divider: '&lt;div class="divider" data-role="divider"&gt;&lt;/div&gt;'
      }
    });
  });
&lt;/script&gt;
                            </pre>
                        </td>
                    </tr>
                </tbody>
            </table>
            
			<div class="page-header">
				<h1><a id="methods"></a>Methods</h1>
			</div>
            
			<script type="text/javascript">
			    $(document).ready(function() {
			        $('#example8').multiselect();
			        $('#example8-destroy').on('click', function() {
			            $('#example8').multiselect('destroy');
			        });
					$('#example8-create').on('click', function() {
			            $('#example8').multiselect();
			        });
                    
			        $('#example10').multiselect();
			        $('#example10-select').on('click', function() {
			            $('option[value="tomatoes"]', $('#example10')).prop('selected', true);
			            $('option[value="tomatoes"]', $('#example10')).attr('selected', 'selected');
						
			            $('option[value="mushrooms"]', $('#example10')).prop('selected', true);
			            $('option[value="mushrooms"]', $('#example10')).attr('selected', 'selected');
						
			            $('option[value="onions"]', $('#example10')).prop('selected', true);
			            $('option[value="onions"]', $('#example10')).attr('selected', 'selected');
						
			            alert('Selected Tomatoes, Mushrooms and Onions.');
			        });
			        $('#example10-deselect').on('click', function() {
			            $('option', $('#example10')).each(function(element) {
			                $(this).removeAttr('selected').prop('selected', false);
			            });
			        });
			        $('#example10-refresh').on('click', function() {
			            $('#example10').multiselect('refresh');
			        });
					
			        $('#example12').multiselect({
			            enableFiltering: true
			        });
			        $('#example12-rebuild').on('click', function() {
			            $('#example12').multiselect('rebuild');
			        });
			        $('#example12-add').on('click', function() {
			            $('#example12').append('<option value="add1">Addition 1</option><option value="add2">Addition 2</option><option value="add3">Addition 3</option>');
			        });
			        $('#example12-delete').on('click', function() {
			            $('option[value="add1"]', $('#example12')).remove();
			            $('option[value="add2"]', $('#example12')).remove();
			            $('option[value="add3"]', $('#example12')).remove();
			        });
					
			        $('#example17').multiselect();
			        $('#example17-cheese').on('click', function() {
			            $('#example17').multiselect('select', 'cheese');
			        });
			        $('#example17-mushrooms').on('click', function() {
			            $('#example17').multiselect('select', 'mushrooms');
			        });
					
			        $('#example18').multiselect();
			        $('#example18-cheese').on('click', function() {
			            $('#example18').multiselect('deselect', 'cheese');
			        });
			        $('#example18-mushrooms').on('click', function() {
			            $('#example18').multiselect('deselect', 'mushrooms');
			        });
                    
                    $('#example35').multiselect();
                    $('#example35-enable').on('click', function() {
                        $('#example35').multiselect('enable');
                    });
                    $('#example35-disable').on('click', function() {
                        $('#example35').multiselect('disable');
                    });
                    
                    $('#example36').multiselect();
                    $('#example36-enable').on('click', function() {
                        $('#example36').multiselect('enable');
                    });
                    $('#example36-disable').on('click', function() {
                        $('#example36').multiselect('disable');
                    });
			    });
			</script>
			<table class="table table-striped">
				<tbody>
					<tr>
						<td width="50%">
                            <p><code>.multiselect('destroy')</code></p>
                            <p>
                                This method is used to destroy the plugin on the given element - meaning unbinding the plugin.
                            </p>
                        </td>
						<td>
							<div class="btn-group">
								<select id="example8" multiple="multiple">
									<option value="cheese">Cheese</option>
									<option value="tomatoes">Tomatoes</option>
									<option value="mozarella">Mozzarella</option>
									<option value="mushrooms">Mushrooms</option>
									<option value="pepperoni">Pepperoni</option>
									<option value="onions">Onions</option>
								</select>
								<button id="example8-destroy" class="btn btn-danger">Destroy/Unbind</button>
								<button id="example8-create" class="btn btn-success">Create/Bind</button>
							</div>
						</td>
					</tr>
					<tr>
						<td>
                            <p><code>.multiselect('refresh')</code></p>
                            <p>
                                This method is used to refresh the checked checkboxes based on the currently selected options within the select. Click &apos;Select some options&apos; so select some of the options (meaning added the <code>selected</code> attribute to some of the options). Then click refresh. The plugin will update the checkboxes accordingly.
                            </p>
                        </td>
						<td>
							<div class="btn-group">
								<select id="example10" multiple="multiple">
									<option value="cheese">Cheese</option>
									<option value="tomatoes">Tomatoes</option>
									<option value="mozarella">Mozzarella</option>
									<option value="mushrooms">Mushrooms</option>
									<option value="pepperoni">Pepperoni</option>
									<option value="onions">Onions</option>
								</select>
								<button id="example10-select" class="btn btn-default">Select some options</button>
								<button id="example10-deselect" class="btn btn-default">Deselect all</button>
								<button id="example10-refresh" class="btn btn-primary">Refresh</button>
							</div>
						</td>
					</tr>
					<tr>
						<td>
                            <p><code>.multiselect('rebuild')</code></p>
                            <p>
                                Rebuilds the whole dropdown menu. All selected options will remain selected (if still existent!).
                            </p>
                        </td>
						<td>
							<div class="btn-group">
								<select id="example12" multiple="multiple">
									<option value="cheese">Cheese</option>
									<option value="tomatoes">Tomatoes</option>
									<option value="mozarella">Mozzarella</option>
									<option value="mushrooms">Mushrooms</option>
									<option value="pepperoni">Pepperoni</option>
									<option value="onions">Onions</option>
								</select>
								<button id="example12-add" class="btn btn-default">Add some options</button>
								<button id="example12-delete" class="btn btn-default">Delete some options</button>
								<button id="example12-rebuild" class="btn btn-primary">Rebuild</button>
							</div>
						</td>
					</tr>
					<tr>
						<td>
                            <p><code>.multiselect('select', value)</code></p>
                            <p>
                                Selects an option by its value (which has to be given as string). Works also using an array of values.
                            </p>
                        </td>
						<td>
							<div class="btn-group">
								<select id="example17" multiple="multiple">
									<option value="cheese">Cheese</option>
									<option value="tomatoes">Tomatoes</option>
									<option value="mozarella">Mozzarella</option>
									<option value="mushrooms">Mushrooms</option>
									<option value="pepperoni">Pepperoni</option>
									<option value="onions">Onions</option>
								</select>
								<button id="example17-cheese" class="btn btn-default">Select cheese</button>
								<button id="example17-mushrooms" class="btn btn-default">Select Mushrooms</button>
							</div>
						</td>
					</tr>
					<tr>
						<td>
                            <p><code>.multiselect('deselect', value)</code></p>
                            <p>
                                Deselect an option by its value (which has to be given as string). Works also using an array of values.
                            </p>
                        </td>
						<td>
							<div class="btn-group">
								<select id="example18" multiple="multiple">
									<option value="cheese">Cheese</option>
									<option value="tomatoes">Tomatoes</option>
									<option value="mozarella">Mozzarella</option>
									<option value="mushrooms">Mushrooms</option>
									<option value="pepperoni">Pepperoni</option>
									<option value="onions">Onions</option>
								</select>
								<button id="example18-cheese" class="btn btn-default">Deselect cheese</button>
								<button id="example18-mushrooms" class="btn btn-default">Deselect Mushrooms</button>
							</div>
						</td>
					</tr>
                    <tr>
						<td colspan="2">
                            <p><code>.multiselect('dataprovider', data)</code></p>
                            <p>
                                Provides data for building the select's options the following way:
                            </p>
                            <pre class="prettyprint linenums">
var data = [
    {label: &quot;ACNP&quot;, value: &quot;ACNP&quot;},
    {label: &quot;test&quot;, value: &quot;test&quot;}
];
$(&quot;#multiselect&quot;).multiselect('dataprovider', data);
                            </pre>
						</td>
					</tr>
                    <tr>
						<td colspan="2">
                            <p><code>.multiselect('setOptions', options)</code></p>
                            <p>
                                Used to change configuration after initializing the multiselect. This may be useful in combination with <code>.multiselect('rebuild')</code>.
                            </p>
                        </td>
					</tr>
                    <tr>
						<td>
                            <p><code>.multiselect('disable')</code></p>
                            <p>
                                Disable both the underlying select and the dropdown button.
                            </p>
                        </td>
                        <td>
                            <div class="btn-group">
                                <select id="example35" multiple="multiple">
                                    <option value="cheese">Cheese</option>
                                    <option value="tomatoes">Tomatoes</option>
                                    <option value="mozarella">Mozzarella</option>
                                    <option value="mushrooms">Mushrooms</option>
                                    <option value="pepperoni">Pepperoni</option>
                                    <option value="onions">Onions</option>
                                </select>
								<button id="example35-enable" class="btn btn-default">Enable</button>
								<button id="example35-disable" class="btn btn-default">Disable</button>
                            </div>
                        </td>
					</tr>
                    <tr>
						<td>
                            <p><code>.multiselect('enable')</code></p>
                            <p>
                                Enable both the underlying select and the dropdown button.
                            </p>
                        </td>
                        <td>
                            <div class="btn-group">
                                <select id="example36" multiple="multiple" disabled="disabled">
                                    <option value="cheese">Cheese</option>
                                    <option value="tomatoes">Tomatoes</option>
                                    <option value="mozarella">Mozzarella</option>
                                    <option value="mushrooms">Mushrooms</option>
                                    <option value="pepperoni">Pepperoni</option>
                                    <option value="onions">Onions</option>
                                </select>
								<button id="example36-enable" class="btn btn-default">Enable</button>
								<button id="example36-disable" class="btn btn-default">Disable</button>
                            </div>
                        </td>
					</tr>
				</tbody>
			</table>

			<div class="page-header">
				<h1><a id="further-examples"></a>Further Examples</h1>
			</div>
			<script type="text/javascript">
 				/**
				 * Gets whether all the options are selected.
                 * 
				 * @param {jQuery} $el
				 * @returns {bool}
				 */
			    function multiselect_selected($el) {
			        var ret = true;
			        $('option', $el).each(function(element) {
			            if (!!!$(this).prop('selected')) {
			                ret = false;
			            }
			        });
			        return ret;
			    }
				 
			    /**
				 * Selects all the options.
                 * 
				 * @param {jQuery} $el
				 * @returns {undefined}
				 */
			    function multiselect_selectAll($el) {
			        $('option', $el).each(function(element) {
			            $el.multiselect('select', $(this).val());
			        });
			    }

			    /**
				 * Deselects all the options.
                 * 
				 * @param {jQuery} $el
				 * @returns {undefined}
				 */
			    function multiselect_deselectAll($el) {
			        $('option', $el).each(function(element) {
			            $el.multiselect('deselect', $(this).val());
			        });
			    }
				 
			    /**
				 * Clears all the selected options
                 * 
				 * @param {jQuery} $el
                 * @param {jQuery} $btn
				 * @returns {undefined}
				 */
			    function multiselect_toggle($el, $btn) {
			        if (multiselect_selected($el)) {
			            multiselect_deselectAll($el);
			            $btn.text("Select All");
			        }
			        else {
			            multiselect_selectAll($el);
			            $btn.text("Deselect All");
			        }
			    }
				 
			    $(document).ready(function() {
                    
			        $('#example21').multiselect();
			        $("#example21-toggle").click(function(e) {
			            e.preventDefault();
			            multiselect_toggle($("#example21"), $(this));
			        });
					
			        $('#example22').multiselect({
			            buttonText: function(options) {
			                if (options.length === 0) {
			                    return 'None selected <b class="caret"></b>';
			                }
			                else if (options.length > 6) {
			                    return options.length + ' selected  <b class="caret"></b>';
			                }
			                else {
			                    var selected = '';
			                    options.each(function() {
			                        selected += $(this).text() + ', ';
			                    });
	
			                    return selected.substr(0, selected.length -2) + ' <b class="caret"></b>';
			                }
			            },
			            onChange: function(element, checked) {
			                if(checked === true) {
			                    //action taken here if true
			                }
			                else if(checked === false) {
			                    if(confirm('Do you wish to deselect the element?')) {
			                        //action taken here
			                    }
			                    else {
			                        $("#example22").multiselect('select', element.val());
			                    }
			                }
			            }
			        });
                    
                    var firstConfigurationSet = {
                        includeSelectAllOption: false,
                        enableFiltering: false
                    };
                    var secondConfigurationSet = {
                        includeSelectAllOption: true,
                        enableFiltering: true
                    };
                    
                    var set = 1;
                    $('#example33').multiselect(firstConfigurationSet);
                    
                    function rebuildMultiselect(options) {
                        $('#example33').multiselect('setOptions', options);
                        $('#example33').multiselect('rebuild');
                    }
                    
                    $('#example33-configuration-set').on('click', function(event) {
                        switch (set) {
                            case 2:
                                rebuildMultiselect(firstConfigurationSet);
                                
                                $(this).text('Configuration Set 2');
                                set = 1;
                                break;
                            case 1:
                            default:
                                rebuildMultiselect(secondConfigurationSet);
                                
                                $(this).text('Configuration Set 1');
                                set = 2;
                                break;
                            
                        }
                    });
                    
                    $('#example34').multiselect();
  
                    $('#example34-select').on('click', function() {
                        $('#example34').multiselect('select', 'cheese');
                        $('#example34').multiselect('select', 'tomatoes');
                    });

                    $('#example34-deselect').on('click', function() {
                        $('#example34').multiselect('deselect', 'cheese');
                        $('#example34').multiselect('deselect', 'tomatoes');
                    });

                    $('#example34-values').on('click', function() {
                        $('#example34-text').text('Selected: ' + $('#example34').val()).addClass('alert alert-info');
                    });
                    
                    $('#example37').multiselect({
                        onChange: function(option, checked) {
                            // Get selected options.
                            var selectedOptions = $('#example37 option:selected');
                            
                            if (selectedOptions.length >= 4) {
                                // Disable all other checkboxes.
                                var nonSelectedOptions = $('#example37 option').filter(function() {
                                    return !$(this).is(':selected');
                                });
                                
                                var dropdown = $('#example37').siblings('.multiselect-container');
                                nonSelectedOptions.each(function() {
                                    var input = $('input[value="' + $(this).val() + '"]');
                                    input.prop('disabled', true);
                                    input.parent('li').addClass('disabled');
                                });
                            }
                            else {
                                // Enable all checkboxes.
                                var dropdown = $('#example37').siblings('.multiselect-container');
                                $('#example37 option').each(function() {
                                    var input = $('input[value="' + $(this).val() + '"]');
                                    input.prop('disabled', false);
                                    input.parent('li').addClass('disabled');
                                });
                            }
                        }
                    });
                    
                    var orderCount = 0;
                    $('#example38').multiselect({
                        buttonText: function(options) {
			                if (options.length === 0) {
			                    return 'None selected <b class="caret"></b>';
			                }
			                else if (options.length > 3) {
			                    return options.length + ' selected  <b class="caret"></b>';
			                }
			                else {
                                var selected = [];
			                    options.each(function() {
			                        selected.push([$(this).text(), $(this).data('order')]);
			                    });
                                
                                selected.sort(function(a, b) {
                                    return a[1] - b[1];
                                });
                                
                                var text = '';
                                for (var i = 0; i < selected.length; i++) {
                                    text += selected[i][0] + ', ';
                                }
                                
			                    return text.substr(0, text.length -2) + ' <b class="caret"></b>';
			                }
			            },
                        onChange: function(option, checked) {
                            if (checked) {
                                orderCount++;
                                $(option).data('order', orderCount);
                            }
                            else {
                                $(option).data('order', '');
                            }
                        }
                    });
                    
                    $('#example38-order').on('click', function() {
                        var selected = [];
                        $('#example38 option:selected').each(function() {
                            selected.push([$(this).val(), $(this).data('order')]);
                        });
                        
                        selected.sort(function(a, b) {
                            return a[1] - b[1];
                        });
                        
                        var text = '';
                        for (var i = 0; i < selected.length; i++) {
                            text += selected[i][0] + ', ';
                        }
                        text = text.substring(0, text.length - 2);
                        
                        alert(text);
                    });
                    
                    $('#example40').multiselect({
                        onChange: function(option, checked) {
                            var values = [];
                            $('#example40 option').each(function() {
                                if ($(this).val() !== option.val()) {
                                    values.push($(this).val());
                                }
                            });
                            
                            $('#example40').multiselect('deselect', values);
                        }
                    });
                    
                    $('#example42').multiselect({
                        onChange: function(option, checked) {
                            var selected = 0;
                            $('option', $('#example42')).each(function() {
                                if ($(this).prop('selected')) {
                                    selected++;
                                }
                            });
                            
                            if (selected >= 3) {
                                $('#example42').siblings('div').children('ul').dropdown('toggle');
                            }
                        }
                    });
                    
                    $('#example43').multiselect({
                        onDropdownHide: function() {
                            alert('Dropdown closed ...');
                        },
                        onDropdownShow: function() {
                            alert('Dropdown openend!');
                        }
                    });
                    
                    $('#example43-show').on('click', function() {
                        $('#example43').siblings('div').trigger('show.bs.dropdown');
                    });
                    
                    $('#exampler43-hide').on('click', function() {
                        $('#example43').siblings('div').trigger('hide.bs.dropdown');
                    });
			    });
			</script>
			<table class="table table-striped">
				<tbody>
                    <tr>
						<td>
                            <p>
                                Use "Select" and "Deselect" to select or deselect cheese and tomatoes. Use "Values" to display the currently selected elements by using <code>$('.multiselect').val()</code>.
                            </p>
							<div class="btn-group">
								<select id="example34" multiple="multiple">
									<option value="cheese">Cheese</option>
									<option value="tomatoes">Tomatoes</option>
									<option value="mozarella">Mozzarella</option>
									<option value="mushrooms">Mushrooms</option>
									<option value="pepperoni">Pepperoni</option>
									<option value="onions">Onions</option>
								</select>
								<button id="example34-select" class="btn btn-primary">Select</button>
								<button id="example34-deselect" class="btn btn-primary">Deselect</button>
								<button id="example34-values" class="btn btn-primary">Values</button>
							</div>
                            <div id="example34-text" style="margin-top:6px;"></div>
						</td>
						<td>
							<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
  $('#example34').multiselect();
  
  $('#example34-select').on('click', function() {
    $('#example34').multiselect('select', 'cheese');
    $('#example34').multiselect('select', 'tomatoes');
  });

  $('#example34-deselect').on('click', function() {
    $('#example34').multiselect('deselect', 'cheese');
    $('#example34').multiselect('deselect', 'tomatoes');
  });

  $('#example34-values').on('click', function() {
    $('#example34-text').text('Selected: ' + $('#example34').val()).addClass('alert alert-info');
  });
&lt;/script&gt;
							</pre>
						</td>
					</tr>
					<tr>
						<td>
                            <p>
                                Use the button to toggle the selection.
                            </p>
							<div class="btn-group">
								<select id="example21" multiple="multiple">
									<option value="cheese">Cheese</option>
									<option value="tomatoes">Tomatoes</option>
									<option value="mozarella">Mozzarella</option>
									<option value="mushrooms">Mushrooms</option>
									<option value="pepperoni">Pepperoni</option>
									<option value="onions">Onions</option>
								</select>
								<button id="example21-toggle" class="btn btn-primary">Select All</button>
							</div>
						</td>
						<td>
							<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
  /**
   * Gets whether all the options are selected
   * @param {jQuery} $el
   * @returns {bool}
   */
  function multiselect_selected($el) {
    var ret = true;
    $('option', $el).each(function(element) {
      if (!!!$(this).prop('selected')) {
        ret = false;
      }
    });
    return ret;
  }
   
  /**
   * Selects all the options
   * @param {jQuery} $el
   * @returns {undefined}
   */
  function multiselect_selectAll($el) {
    $('option', $el).each(function(element) {
      $el.multiselect('select', $(this).val());
    });
  }
  /**
   * Deselects all the options
   * @param {jQuery} $el
   * @returns {undefined}
   */
  function multiselect_deselectAll($el) {
    $('option', $el).each(function(element) {
      $el.multiselect('deselect', $(this).val());
    });
  }
   
  /**
   * Clears all the selected options
   * @param {jQuery} $el
   * @returns {undefined}
   */
  function multiselect_toggle($el, $btn) {
    if (multiselect_selected($el)) {
      multiselect_deselectAll($el);
      $btn.text(&quot;Select All&quot;);
    }
    else {
      multiselect_selectAll($el);
      $btn.text(&quot;Deselect All&quot;);
    }
  }
   
  $(document).ready(function() {
    $('#example21').multiselect();
    $(&quot;#example21-toggle&quot;).click(function(e) {
      e.preventDefault();
      multiselect_toggle($(&quot;#example21&quot;), $(this));
    });
  });
&lt;/script&gt;
							</pre>
						</td>
					</tr>
					<tr>
						<td>
                            <p>
                                When deselecting an option you will be asked for confirmation.
                            </p>
                            <select id="example22" multiple="multiple">
                                <option value="cheese">Cheese</option>
                                <option value="tomatoes">Tomatoes</option>
                                <option value="mozarella">Mozzarella</option>
                                <option value="mushrooms">Mushrooms</option>
                                <option value="pepperoni">Pepperoni</option>
                                <option value="onions">Onions</option>
                            </select>
						</td>
						<td>
							<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
  $(document).ready(function() {
    $('#example22').multiselect({
      buttonClass: 'btn',
      buttonWidth: 'auto',
      buttonText: function(options) {
        if (options.length == 0) {
          return 'None selected &lt;b class=&quot;caret&quot;&gt;&lt;/b&gt;';
        }
        else if (options.length &gt; 6) {
          return options.length + ' selected  &lt;b class=&quot;caret&quot;&gt;&lt;/b&gt;';
        }
        else {
          var selected = '';
          options.each(function() {
            selected += $(this).text() + ', ';
          });
          return selected.substr(0, selected.length -2) + ' &lt;b class=&quot;caret&quot;&gt;&lt;/b&gt;';
        }
      },
      onChange: function(element, checked) {
        if(checked == true) {
          // action taken here if true
        }
        else if (checked == false) {
          if (confirm('Do you wish to deselect the element?')) {
            // action taken here
          }
          else {
            $(&quot;#example22&quot;).multiselect('select', element.val());
          }
        }
      }
    });
  });
&lt;/script&gt;
							</pre>
						</td>
					</tr>
                    <tr>
                        <td>
                            <p>
                                Switching between different configuration sets is possible using a combination of <code>.multiselect('setOptions', options)</code> and <code>.multiselect('rebuild')</code>.
                            </p>
                            <div class="btn-group">
                                <select id="example33" multiple="multiple">
                                    <option value="cheese">Cheese</option>
                                    <option value="tomatoes">Tomatoes</option>
                                    <option value="mozarella">Mozzarella</option>
                                    <option value="mushrooms">Mushrooms</option>
                                    <option value="pepperoni">Pepperoni</option>
                                    <option value="onions">Onions</option>
                                </select>
                                <button id="example33-configuration-set" class="btn btn-primary">Configuration Set 2</button>
                            </div>
                        </td>
                        <td>
                            <pre class="linenums prettyprint">
&lt;script type=&quot;text/javascript&quot;&gt;
  $(document).ready(function() {

    var firstConfigurationSet = {
      includeSelectAllOption: false,
      enableFiltering: false
    };
    var secondConfigurationSet = {
      includeSelectAllOption: true,
      enableFiltering: true
    };

    var set = 1;
    $('#example33').multiselect(firstConfigurationSet);
                    
    function rebuildMultiselect(options) {
      $('#example33').multiselect('setOptions', options);
      $('#example33').multiselect('rebuild');
    }

    $('#example33-configuration-set').on('click', function(event) {
      switch (set) {
        case 2:
          rebuildMultiselect(firstConfigurationSet);

          $(this).text('Configuration Set 2');
          set = 1;
          break;
        case 1:
        default:
          rebuildMultiselect(secondConfigurationSet);

          $(this).text('Configuration Set 1');
          set = 2;
          break;
      }
    });
  });
&lt;/script&gt;
                            </pre>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>
                                Limit the number of selected options using the <code>onChange</code> option. The user may only select a maximum of 4 options. Then all other options are disabled.
                            </p>
                            <div class="btn-group">
                                <select id="example37" multiple="multiple">
                                    <option value="cheese">Cheese</option>
                                    <option value="tomatoes">Tomatoes</option>
                                    <option value="mozarella">Mozzarella</option>
                                    <option value="mushrooms">Mushrooms</option>
                                    <option value="pepperoni">Pepperoni</option>
                                    <option value="onions">Onions</option>
                                </select>
                            </div>
                        </td>
                        <td>
                            <pre class="linenums prettyprint">
&lt;script type=&quot;text/javascript&quot;&gt;
  $(document).ready(function() {
    $('#example37').multiselect({
      onChange: function(option, checked) {
        // Get selected options.
        var selectedOptions = $('#example37 option:selected');

        if (selectedOptions.length >= 4) {
          // Disable all other checkboxes.
          var nonSelectedOptions = $('#example37 option').filter(function() {
            return !$(this).is(':selected');
          });

          var dropdown = $('#example37').siblings('.multiselect-container');
          nonSelectedOptions.each(function() {
            var input = $('input[value="' + $(this).val() + '"]');
            input.prop('disabled', true);
            input.parent('li').addClass('disabled');
          });
        }
        else {
          // Enable all checkboxes.
          var dropdown = $('#example37').siblings('.multiselect-container');
          $('#example37 option').each(function() {
            var input = $('input[value="' + $(this).val() + '"]');
            input.prop('disabled', false);
            input.parent('li').addClass('disabled');
          });
        }
      }
    });
  });
&lt;/script&gt;
                            </pre>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>
                                Record the order the options are selected. When selecting an item an ordering number will be incremented and saved within the option.
                            </p>
                            <div class="btn-group">
                                <select id="example38" multiple="multiple">
                                    <option value="cheese">Cheese</option>
                                    <option value="tomatoes">Tomatoes</option>
                                    <option value="mozarella">Mozzarella</option>
                                    <option value="mushrooms">Mushrooms</option>
                                    <option value="pepperoni">Pepperoni</option>
                                    <option value="onions">Onions</option>
                                </select>
                                <button id="example38-order" class="btn btn-primary">Order</button>
                            </div>
                        </td>
                        <td>
                            <pre class="linenums prettyprint">
&lt;script type=&quot;text/javascript&quot;&gt;
  $(document).ready(function() {
    var orderCount = 0;
    $('#example38').multiselect({
      buttonText: function(options) {
        if (options.length == 0) {
          return 'None selected <b class="caret"></b>';
        }
        else if (options.length > 3) {
          return options.length + ' selected  <b class="caret"></b>';
        }
        else {
          var selected = [];
          options.each(function() {
            selected.push([$(this).text(), $(this).data('order')]);
          });
          
          selected.sort(function(a, b) {
            return a[1] - b[1];
          })

          var text = '';
          for (var i = 0; i < selected.length; i++) {
            text += selected[i][0] + ', ';
          }

          return text.substr(0, text.length -2) + ' <b class="caret"></b>';
        }
      },
      onChange: function(option, checked) {
        if (checked) {
          orderCount++;
          $(option).data('order', orderCount);
        }
        else {
          $(option).data('order', '');
        }
      }
    });

    $('#example38-order').on('click', function() {
      var selected = [];
      $('#example38 option:selected').each(function() {
        selected.push([$(this).val(), $(this).data('order')]);
      });

      selected.sort(function(a, b) {
        return a[1] - b[1];
      });

      var text = '';
      for (var i = 0; i < selected.length; i++) {
        text += selected[i][0] + ', ';
      }
      text = text.substring(0, text.length - 2);

      alert(text);
    });
  });
&lt;/script&gt;
                            </pre>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>
                                Simulate single selections using checkboxes. The behavior will be similar to a multiselect with radio buttons.
                            </p>
                            <div class="btn-group">
                                <select id="example40" multiple="multiple">
                                    <option value="cheese">Cheese</option>
                                    <option value="tomatoes">Tomatoes</option>
                                    <option value="mozarella">Mozzarella</option>
                                    <option value="mushrooms">Mushrooms</option>
                                    <option value="pepperoni">Pepperoni</option>
                                    <option value="onions">Onions</option>
                                </select>
                            </div>
                        </td>
                        <td>
                            <pre class="linenums prettyprint">
&lt;script type=&quot;text/javascript&quot;&gt;
  $('#example40').multiselect({
    onChange: function(option, checked) {
      var values = [];
      $('#example40 option').each(function() {
        if ($(this).val() !== option.val()) {
          values.push($(this).val());
        }
      });
      
      $('#example40').multiselect('deselect', values);
    }
  });
&lt;/script&gt;
                            </pre>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>
                                Close dropdown after 3 selections automatically.
                            </p>
                            <div class="btn-group">
                                <select id="example42" multiple="multiple">
                                    <option value="cheese">Cheese</option>
                                    <option value="tomatoes">Tomatoes</option>
                                    <option value="mozarella">Mozzarella</option>
                                    <option value="mushrooms">Mushrooms</option>
                                    <option value="pepperoni">Pepperoni</option>
                                    <option value="onions">Onions</option>
                                </select>
                            </div>
                        </td>
                        <td>
                            <pre class="linenums prettyprint">
&lt;script type=&quot;text/javascript&quot;&gt;
  $('#example42').multiselect({
    onChange: function(option, checked) {
      var selected = 0;
      $('option', $('#example42')).each(function() {
        if ($(this).prop('selected')) {
          selected++;
        }
      });

      if (selected >= 3) {
        $('#example42').siblings('div').children('ul').dropdown('toggle');
      }
    }
  });
&lt;/script&gt;
                            </pre>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>
                                Trigger <code>hide.bs.dropdown</code> and <code>show.bs.dropdown</code> manually.
                            </p>
                            <div class="btn-group">
                                <select id="example43" multiple="multiple">
                                    <option value="cheese">Cheese</option>
                                    <option value="tomatoes">Tomatoes</option>
                                    <option value="mozarella">Mozzarella</option>
                                    <option value="mushrooms">Mushrooms</option>
                                    <option value="pepperoni">Pepperoni</option>
                                    <option value="onions">Onions</option>
                                </select>
                                <button id="example43-show" class="btn btn-default"><code>show</code></button>
                                <button id="example43-hide" class="btn btn-default"><code>hide</code></button>
                            </div>
                        </td>
                        <td>
                            <pre class="linenums prettyprint">
&lt;script type=&quot;text/javascript&quot;&gt;
  $('#example40').multiselect({
    onChange: function(option, checked) {
      var values = [];
      $('#example40 option').each(function() {
        if ($(this).val() !== option.val()) {
          values.push($(this).val());
        }
      });
      
      $('#example40').multiselect('deselect', values);
    }
  });
&lt;/script&gt;
                            </pre>
                        </td>
                    </tr>
				</tbody>
			</table>

			<div class="page-header">
				<h1><a id="additional-styling"></a>Additional Styling</h1>
			</div>
			<p>
                For additional styling of the multiselect button, the CSS class <code>multiselect</code> can be used.
            </p>
			<style media="screen" type="text/css">
			    .add-styling-1 .multiselect {
			        width: 500px;
			        text-align: left;
			    }
			    .add-styling-1 .multiselect b.caret {
                    position: absolute;
                    top: 14px;
                    right: 8px;
				}
			    .add-styling-1 .multiselect-group {
			        font-weight: bold;
			        text-decoration: underline;
			    }
			    .add-styling-2 .multiselect-all {
			        font-weight: bold;
			    }
			    .add-styling-2 .multiselect-search {
			        color: red;
			    }
			</style>
			<script type="text/javascript">
			    $(document).ready(function() {
			        $('#example15').multiselect({
			            buttonWidth: '400px'
			        });
			        
			        for (var i = 1; i <= 100; i++) {
			        	$('#example29').append('<option value="' + i + '">' + i + '</option>');
			        }
			        
			        $('#example29').multiselect({
			        	includeSelectAllOption: true,
			        	enableFiltering: true,
                        maxHeight: 150
			        });
			    });
			</script>
			<div>
				<table class="table table-striped">
					<tr class="add-styling-1">
						<td>
                            <p>
                                Text alignment combined with fixed width and bold, underlined text for option group headers.
                            </p>
							<select id="example15" multiple="multiple">
								<optgroup label="Mathematics">
									<option value="analysis">Analysis</option>
									<option value="algebra">Linear Algebra</option>
									<option value="discrete">Discrete Mathematics</option>
									<option value="numerical">Numerical Analysis</option>
									<option value="probability">Probability Theory</option>
								</optgroup>
								<optgroup label="Computer Science">
									<option value="programming">Introduction to Programming</option>
									<option value="automata">Automata Theory</option>
									<option value="complexity">Complexity Theory</option>
									<option value="software">Software Engineering</option>
								</optgroup>
							</select>
						</td>
						<td>
							<pre class="prettyprint linenums">
.multiselect {
  text-align: left;
}
.multiselect b.caret {
  position: absolute;
  top: 14px;
  right: 8px;
}
.multiselect-group {
  font-weight: bold;
  text-decoration: underline;
}
							</pre>
						</td>
					</tr>
					<tr class="add-styling-2">
						<td>
                            <p>
                                Access the select all option by using the <code>.multiselect-all</code> class. The filter search field can be manipulated by using <code>.multiselect-search</code>;
                            </p>
                            <select id="example29" multiple="multiple">
								
							</select>
						</td>
						<td>
							<pre class="prettyprint linenums">
.multiselect-all label {
  font-weight: bold;
}
.multiselect-search {
  color: red;
}
							</pre>
						</td>
					</tr>
				</table>
			</div>
            
            <div class="page-header">
                <h1><a id="faq"></a>Frequently Asked Questions</h1>
            </div>
            
            <p>
                Here are some of the (not necessarily that frequently) asked questions and their answers.
            </p>
            
            <p>
                <b>What about older browsers, i.e. Internet Explorer 6, 7 and 8?</b>
            </p>
            
            <p>
                With version 2.0, jQuery no longer supports the older IE versions. Nevertheless, the plugin should run as expected using the 1.x branch of jQuery. See <a href="http://blog.jquery.com/2013/04/18/jquery-2-0-released/">here</a> for details.
            </p>
            
            <p>
                <b>Using <code>return false;</code> within the <code>onChange</code> option does not prevent the option from being selected/deselected ...</b>
            </p>
            
            <p>
                The <code>return</code> statement within the <code>onChange</code> method has no influence on the result. For preventing an option from being deselected or selected have a look at the examples in the <a href="#further-examples">Further Examples</a> section.
            </p>
            
            <p>
                <b>How to underline the searched text when using the filter?</b>
            </p>
            
            <p>
                This issue is discussed <a href="https://github.com/davidstutz/bootstrap-multiselect/issues/309" target="_blank">here</a>.
            </p>
            
            <p>
                <b>How to hide the checkboxes?</b>
            </p>
            
            <p>
                A related issue is discussed <a href="https://github.com/davidstutz/bootstrap-multiselect/issues/205" target="_blank">here</a> and includes a possible solution when using CSS to hide the checkboxes:
            </p>
            <pre>
.multiselect-container input {
  display: none
}
            </pre>
		</div>

		<div class="container">
			<hr>
			<p>
				&copy; 2012 - 2014
				<a href="http://davidstutz.de">David Stutz</a> - dual licensed: <a href="http://www.apache.org/licenses/LICENSE-2.0">Apache License v2.0</a>, <a href="http://opensource.org/licenses/BSD-3-Clause">BSD 3-Clause License</a>
			</p>
		</div>
	</body>
</html>
