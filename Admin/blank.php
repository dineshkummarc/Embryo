<!doctype html>
<!-- Explanation: http://www.phpied.com/conditional-comments-block-downloads/ -->
<!--[if IE]><![endif]-->
<html dir="ltr" lang="en">
<head>
	<title></title>
   <meta charset="utf-8">
   <meta name="author" content="Storm Creative" />
	<link rel="stylesheet" media="screen" href="../Assets/Styles/admin.css" />
	<link rel="stylesheet" media="screen" href="../Assets/Styles/datatable.css" />	
   <!--[if IE 8]>
   <link rel="stylesheet" media="screen" href="../Assets/Styles/admin-IE8.css" />
   <![endif]-->
   <!--[if IE 7]>
   <link rel="stylesheet" media="screen" href="../Assets/Styles/admin-IE7.css" />
   <![endif]-->
   <!--[if IE 6]>
   <link rel="stylesheet" media="screen" href="../Assets/Styles/admin-IE6.css" />
   <![endif]-->
</head>
<?php flush(); ?>
<body>
	<div id="container">
      <!-- HEADER -->
      <?php include 'Includes/Header.php'; ?>         
      <div id="body">
         <div class="content">
            <!-- NAVIGATION -->
            <?php 
               include 'Includes/Menu.php';
               flush();
            ?> 
            <!-- MAIN CONTENT AREA -->
            <div id="main">
               <h1>Header 1</h1>
               <h2>Header 2</h2>
               <table id="active" class="data">
                  <thead>
                     <tr>
                        <th scope="col" class="descending">Title</th>
                        <th scope="col" class="descending">Day</th>
                        <th scope="col" class="descending">Month</th>
                        <th scope="col" class="ascending">Year</th>
                        <th scope="col" class="nolink"></th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr class="even">
                        <td scope="row">Test Title</td>
                        <td>31</td>
                        <td>August</td>
                        <td>Year</td>
                        <td><a href="#">Edit</a></td>
                     </tr>
                     <tr>
                        <td scope="row">Test Title</td>
                        <td>31</td>
                        <td>August</td>
                        <td>Year</td>
                        <td><a href="#">Edit</a></td>
                     </tr>
                     <tr class="even">
                        <td scope="row">Test Title</td>
                        <td>31</td>
                        <td>August</td>
                        <td>Year</td>
                        <td><a href="#">Edit</a></td>
                     </tr>
                     <tr>
                        <td scope="row">Test Title</td>
                        <td>31</td>
                        <td>August</td>
                        <td>Year</td>
                        <td><a href="#">Edit</a></td>
                     </tr>
                  </tbody>
                  <tfoot>
                     <tr class="even">
                     	<td colspan="5">&nbsp;</td>
                     </tr>                     
                  </tfoot>
               </table>
               <textarea id="wysiwyg"></textarea>
               <textarea id="anotherEditor"></textarea>               
               <p>&nbsp;</p>
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ac nulla erat, in facilisis lorem. Pellentesque massa eros, rutrum sit amet ultrices vitae, commodo non libero. Nulla facilisis viverra tellus non fringilla. Nunc nec sapien eu justo blandit gravida et vitae ante. Suspendisse sagittis enim a sem egestas dictum. Nullam sit amet lacus non sem interdum tempus porta eu nisi. Morbi ut velit felis. Suspendisse potenti. Praesent a luctus eros. Phasellus tristique mi non nibh convallis eget lobortis lacus euismod. In ut metus leo. Mauris consequat tortor neque. Sed convallis, magna at sollicitudin cursus, ante ligula scelerisque tellus, eu elementum tellus velit a velit.</p>
               <p>Aliquam rutrum felis eu diam dapibus et eleifend felis cursus. Praesent eu eleifend lectus. Nulla auctor tristique orci non euismod. Cras eu volutpat ante. Vestibulum nec nunc sit amet nisi pulvinar sollicitudin. Morbi lorem tortor, egestas vel vehicula rutrum, suscipit a odio. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tempor est molestie magna porttitor consequat. Maecenas mauris elit, commodo vel dignissim in, facilisis eget lorem. Suspendisse non magna libero, luctus blandit lacus. Maecenas nibh lectus, sagittis ut scelerisque quis, consectetur sed mauris. Sed et ultricies sapien. Nam massa sem, rutrum id vestibulum quis, malesuada a lorem. Aenean eu elit ac augue viverra gravida eu ac nisl.</p>
               <p>Pellentesque quis lectus risus, vel faucibus nulla. Sed dignissim blandit quam, rhoncus euismod neque pharetra non. Suspendisse enim elit, condimentum at eleifend vestibulum, placerat a metus. Vivamus sed mi vitae orci accumsan dapibus eget in odio. Suspendisse velit arcu, sagittis at gravida quis, porttitor id tortor. In non ligula eleifend dolor pellentesque dignissim. Duis dapibus aliquam nisi et hendrerit. Aliquam semper augue justo. In at est neque, ut auctor risus. Ut eget sapien augue. Praesent tristique interdum lorem in imperdiet. Morbi mattis pharetra ipsum, a commodo leo tincidunt et. Donec libero ipsum, feugiat sit amet placerat eu, ullamcorper vel sem.</p>
               <p>Vulputate imperdiet ante, quis accumsan dolor eleifend eu. Integer dictum elit non metus blandit laoreet. Suspendisse sollicitudin, libero in porttitor eleifend, nibh magna imperdiet sem, id pellentesque tortor nibh et mauris. Curabitur semper mattis ante, sit amet feugiat tortor semper vestibulum. Pellentesque malesuada tortor quis turpis suscipit mattis. Vestibulum lacus nisi, dictum eget viverra eu, scelerisque id quam. Sed facilisis consequat risus ut venenatis. Praesent sodales justo et magna auctor faucibus. In ut eros nulla, in blandit tellus. Suspendisse egestas posuere turpis, in sollicitudin mi dignissim non. Sed dictum posuere mi, in dignissim augue faucibus fermentum. Quisque scelerisque urna quis ligula malesuada mattis. Proin consectetur pulvinar urna id dignissim. Integer at turpis non libero rutrum gravida eu vel elit. Etiam nunc augue, suscipit ut consectetur sit amet, congue eu mauris. Donec hendrerit ipsum sit amet augue tristique vel placerat eros.</p>
               <p>Fusce metus tellus, feugiat id eleifend ut, blandit nec lacus. Sed semper sodales sapien ut aliquet. Proin sed sem posuere est venenatis tristique. Sed dapibus consectetur nibh, eu tincidunt libero condimentum eu.</p>
               <p>Nam sollicitudin euismod consequat. Nam mattis faucibus fermentum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed volutpat, sapien in pellentesque iaculis, libero urna vehicula mi, sed aliquet nisi magna a lorem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent libero ante, mattis eu tempor eget, interdum id neque. Morbi augue purus, posuere a viverra in, accumsan quis ante. Aliquam est lacus, pretium quis ultrices non, sagittis sit amet urna. In porta commodo neque, nec suscipit justo feugiat in. Donec tortor ligula, aliquet et hendrerit vel, tincidunt sit amet tellus. Quisque tristique arcu quis tellus viverra facilisis. Integer ullamcorper nisl at lorem gravida non blandit erat varius. Sed nisl nunc, tempor ac condimentum ac, ultricies et risus. Duis egestas viverra nisl, at ornare lorem molestie sit amet. Nullam eleifend volutpat ultrices. Nunc fringilla vehicula urna eget elementum.</p>
            </div>
         </div>
      </div>
      <?php flush(); ?>
      <!-- FOOTER -->
      <?php include 'Includes/Footer.php'; ?>
   </div>
	<!-- LABjs allows loading other scripts in parallel (without blocking) by inserting script tags dynamically -->
   <script src="../Assets/Scripts/LAB.min.js"></script>
   <script>
   	var CKEDITOR_BASEPATH = '/Template/Assets/Scripts/ckeditor/';
   	
   	$LAB
   	.setOptions({ AlwaysPreserveOrder:true, BasePath:'../Assets/Scripts/' })
			.script('jquery.min.js')
			.script('jquery.ui.min.js')
			.script('ckeditor/ckeditor.js')
			.script('uploadify.min.js')
			.script('admin.js')
			.wait(function(){
				// Initialise script when ready
				Storm.init({ editor:true, upload_image:true, upload_doc:true, upload_multidoc:true });
			});
   </script>
</body>
</html>