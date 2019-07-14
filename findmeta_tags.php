<?php $searchmeta1 = get_meta_tags("https://www.tulipshree.com/");?>
<?php $searchmeta2 = get_meta_tags("https://aunico.in");?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
   <title>Meta Tag Finder</title>

       <style>
               *{
                       margin:0;
                       padding:0;
                       outline:0;
                       border:0;
               }
               html{min-height:100%; height:auto;}
               body{
                       background:#FFF;
                       font-size:12px;
                       font-family:verdana, arial, sans-serif;
                       color:000;
               }
               a{
                       text-decoration:none;
                       color:#999;
               }
               a:hover{
                       color:#666;
               }
               #container{
                       width:900px;
                       margin:0 auto;
               }
               h1{
                       font-weight:bold;
                       font-size:20px;
                       text-align:center;
                       padding:14px;
                       letter-spacing:1.5;
                       font-family: georgia, Sans-Serif;
                       border-bottom:1px dashed #666;
                       margin-bottom:20px;
               }
               h2{
                       font-weight:normal;
                       font-size:16px;
                       padding-top:10px;
               }
               h3{
                       font-weight:boldl;
                       font-size:14px;
                       text-align:center;
                       padding-bottom:10px;
                       font-style:italic;
               }
               #left{
                       float:left;
                       width:430px;
                       padding-bottom:40px;
               }
               #right{
                       float:right;
                       width:430px;
                       padding-bottom:40px;
               }
               .box1{
                       display:block;
                       height:70px;
                       color:#FFF;
                       background-color:#EF810E;
                       margin:10px;
                       padding:10px;
                       border:1px solid #CF6B00;
                       border-radius:10px;
                       -moz-border-radius:10px;
                       -webkit-border-radius:10px;
                       box-shadow: 10px 10px 5px #888;
               }
               .box2{
                       display:block;
                       height:70px;
                       color:#FFF;
                       background-color:#5C66FF;
                       margin:10px;
                       padding:10px;
                       border:1px solid #3340CF;
                       border-radius:10px;
                       -moz-border-radius:10px;
                       -webkit-border-radius:10px;
               }
       </style>

</head>
<body>


<div id="container">

       <h1>Meta Tag Finder</h1>

       <div id="left">

               <h3>NorthStar Media</h3>

               <h2>Author:</h2>
                       <div class="box1">
                               <?php echo ($searchmeta1["author"]); ?>
                       </div>

               <h2>Copyright:</h2>
                       <div class="box1">
                               <?php echo ($searchmeta1["copyright"]); ?>
                       </div>

               <h2>Description:</h2>
                       <div class="box1">
                               <?php echo ($searchmeta1["description"]); ?>
                       </div>

               <h2>Keywords:</h2>
                       <div class="box1">
                               <?php echo ($searchmeta1["keywords"]); ?>
                       </div>

               <h2>Robots:</h2>
                       <div class="box1">
                               <?php echo ($searchmeta1["robots"]); ?>
                       </div>

               <h2>Generator:</h2>
                       <div class="box1">
                               <?php echo ($searchmeta1["generator"]); ?>
                       </div>

       </div>


       <div id="right">

               <h3>The Coupon Magazine</h3>

               <h2>Author:</h2>
                       <div class="box2">
                               <?php echo ($searchmeta2["author"]); ?>
                       </div>

               <h2>Copyright:</h2>
                       <div class="box2">
                               <?php echo ($searchmeta2["copyright"]); ?>
                       </div>

               <h2>Description:</h2>
                       <div class="box2">
                               <?php echo ($searchmeta2["description"]); ?>
                       </div>

               <h2>Keywords:</h2>
                       <div class="box2">
                               <?php echo ($searchmeta2["keywords"]); ?>
                       </div>

               <h2>Robots:</h2>
                       <div class="box2">
                               <?php echo ($searchmeta2["robots"]); ?>
                       </div>

               <h2>Generator:</h2>
                       <div class="box2">
                               <?php echo ($searchmeta2["generator"]); ?>
                       </div>

       </div>


</div>

</body>
</html>