<?php
$day=date("j");
$month=date("n");
//$day = 25;
//$month = 6;
$half=false;
$even=true;
$weekday=date("w");
?>
<html  height="100%">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Avanti Pizza & Pasta</title>
	<link rel="stylesheet" href="themes/avanti.min.css" />
	<link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.3/jquery.mobile.structure-1.4.3.min.css" />
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.3/jquery.mobile-1.4.3.min.js"></script>
</head>
<body>
	<div data-role="page" data-theme="a">
		<div >
			
		</div>
		<div data-role="content" data-theme="a">
			<div  align="center"><img src="headermob.png" width="100%" border="0"></div >
			<div data-role="collapsible-set" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d">
			<br>
				<div data-role="collapsible">
                    <h1>Lunch Specials</h1>
					
					<div data-role="collapsible-set" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d">
					<div data-role="collapsible">
					<h1>Salads</h1>
					
					<table width="100%">
						<tr><th align="center" id="itemName" colspan="2"> </th> </tr>
						
						<tr><th align="center"  id="itemDescr">Served with two garlic rolls</th></tr>
						<tr><th><th></tr>
						<tr><th align="center" id="itemPrice" colspan="2"> </th> </tr>
						<tr><th><th></tr>
						<tr><th align="center" id="itemName">Super Nick Salad</th><th id="itemPrice">$9.99</th></tr>
						<tr><td id="itemDescr">Garden salad with grilled chicken, gorgonzola cheese and walnuts</td><td id="itemDescr"></td></tr>
						<tr><th><th></tr>
						<tr><th align="center" id="itemName">Grilled Chicken Portobello</th><th id="itemPrice">$9.99</th></tr>
						<tr><td id="itemDescr">Garden salad with grilled chicken, portobello mushrooms and pine nuts</td><td id="itemDescr"></td></tr>
						<tr><th><th></tr>
						<tr><th align="center" id="itemName">Super Granny Salad</th><th id="itemPrice">$9.99</th></tr>
						<tr><td id="itemDescr">Granny Smith apple slices, red seedless grapes, walnuts and gorgonzola cheese
						on top of mixed greens with raspberry vinaigrette dressing</td><td id="itemDescr"></td></tr>
						<tr><th><th></tr> 
					</table>
					</div>
					<div data-role="collapsible"><h1>Wraps</h1>
					<table class="art-menu" width="100%">
						<tr><th align="center" id="itemName" colspan="2"> </th> </tr>
						<tr><th><th></tr>
						<tr><th><th></tr>
						
						<tr><th align="center"  id="itemDescr">Choice of: White, Whole Wheat, Spinach or Sun Dried Tomatoes wraps </th></tr>
						<tr><th><th></tr>
						<tr><th align="center" id="itemPrice" colspan="2"> </th> </tr>
						<tr><th><th></tr>
						<tr><th align="center" id="itemName">Chicken Arugula Wrap</th><th id="itemPrice">$7.99</th></tr>
						<tr><td id="itemDescr">Baby arugula, grilled chicken breast, tomatoes, onions and basil pesto delicately wrapped in a gourmet sandwich wrap.</td><td id="itemDescr"></td></tr>
						<tr><th><th></tr>
						<tr><th align="center" id="itemName">Chicken Caesar Wrap</th><th id="itemPrice">$7.99</th></tr>
						<tr><td id="itemDescr">Grilled chicken, Romaine lettuce, parmigiana cheese and caesar dressing</td><td id="itemDescr"></td></tr>
						<tr><th><th></tr>
						<tr><th align="center" id="itemName">Tuna Salad Wrap</th><th id="itemPrice">$7.99</th></tr>
						<tr><td id="itemDescr">Homemade Tuna salad with lettuce, tomatoes, onions and mayo</td><td id="itemDescr"></td></tr>
						<tr><th><th></tr>
						<tr><th align="center" id="itemName">Turkey Bacon Wrap</th><th id="itemPrice">$7.99</th></tr>
						<tr><td id="itemDescr">Turkey breast and crispy bacon with lettuce, tomatoes, onions and mayo</td><td id="itemDescr"></td></tr>
						<tr><th><th></tr>
						<tr><th><th></tr>
						<tr><th align="center" id="itemName" colspan="2"> </th> </tr>
						<tr><th><th></tr>
						<tr><th><th></tr>
						</table>
					</div>
					<div data-role="collapsible"><h1>Flatbreads</h1>
					<table class="art-menu" width="100%">
						
						<tr><th><th></tr>
						<tr><th align="center" id="itemPrice" colspan="2"> </th> </tr>
						<tr><th><th></tr>
						<tr><th align="center" id="itemName">Arugula</th><th id="itemPrice">$8.99</th></tr>
						<tr><td id="itemDescr">Thin and crispy  whole wheat flat bread baked with mozzarella cheese, fresh tomatoes, basil pesto topped with chilled arugula leaves drizzled with balsamic vinaigrette and olive oil.</td><td id="itemDescr"></td></tr>
						<tr><th><th></tr>
						<tr><th align="center" id="itemName">Margarita</th><th id="itemPrice">$8.99</th></tr>
						<tr><td id="itemDescr">Thin and crispy  whole wheat flat bread baked with fresh mozzarella cheese, fresh tomatoes,  topped with fresh basil , parmesan cheese and olive oil.</td><td id="itemDescr"></td></tr>
						<tr><th><th></tr>
						<tr><th align="center" id="itemName">Signature</th><th id="itemPrice">$8.99</th></tr>
						<tr><td id="itemDescr">Thin and crispy  whole wheat flat bread baked with mozzarella cheese, gorgonzola, spinach, fresh tomatoes, red onions, kalamata olives</td><td id="itemDescr"></td></tr>
						<tr><th><th></tr>
						<tr><th align="center" id="itemName">Spinach & Ricotta</th><th id="itemPrice">$8.99</th></tr>
						<tr><td id="itemDescr">Thin and crispy  whole wheat flat bread baked with mozzarella cheese, ricota cheese,  spinach, garlic and olive oil.</td><td id="itemDescr"></td></tr>
						<tr><th><th></tr>
						<tr><th><th></tr>
						</table>
					</div>
					<div data-role="collapsible"><h1>Paninis</h1>
					<table class="art-menu" width="100%">
						<tr><th align="center" id="itemName" colspan="2"> </th> </tr>
						<tr><th><th></tr>
						<tr><th><th></tr>
						
						<tr><th><th></tr>
						<tr><th align="center" id="itemPrice" colspan="2"> </th> </tr>
						<tr><th><th></tr>
						<tr><th align="center" id="itemName">Treviso Panini</th><th id="itemPrice">$8.99</th></tr>
						<tr><td id="itemDescr">Grilled chicken breast, basil pesto, tomatoes, onions, arugula, touch of red chili flakes and balsamic vinaigrette .</td><td id="itemDescr"></td></tr>
						<tr><th><th></tr>
						<tr><th align="center" id="itemName">Chicken Bruschetta Panini</th><th id="itemPrice">$8.99</th></tr>
						<tr><td id="itemDescr">Grilled chicken, mozzarella, balsamic and fresh bruschetta on side</td><td id="itemDescr"></td></tr>
						<tr><th><th></tr>
						<tr><th align="center" id="itemName">Palermo Panini</th><th id="itemPrice">$8.99</th></tr>
						<tr><td id="itemDescr">Salami, prosciutto, fresh mozzarella, balsamic and roasted peppers</td><td id="itemDescr"></td></tr>
						<tr><th><th></tr>
						<tr><th align="center" id="itemName">Turkey Pesto Panini</th><th id="itemPrice">$8.99</th></tr>
						<tr><td id="itemDescr">Thin sliced turkey breast, provolone, artichokes, fresh tomatoes and basil pesto</td><td id="itemDescr"></td></tr>
						<tr><th><th></tr>
						<tr><th><th></tr>
					</table>
					</div>
					<div data-role="collapsible"><h1>Melt Platters</h1>
					<table class="art-menu" width="100%">
						<tr><th align="center" id="itemName" colspan="2"> </th> </tr>
						<tr><th><th></tr>
						<tr><th><th></tr>
					
						<tr><th align="center"  id="itemDescr">Choice of: White, Wheat, Rye or Multigrain bread </th></tr>
						<tr><th><th></tr>
						<tr><th align="center" id=itemPrice" colspan="2"> </th> </tr>
						<tr><th><th></tr>
						<tr><th align="center" id="itemName">Tuna Melt Platter</th><th id="itemPrice">$7.99</th></tr>
						<tr><td id="itemDescr">Our own Tuna Salad, mozzarella, red onion and hot banana peppers, served with steak fries and homemade Cole Slaw</td><td id="itemDescr"></td></tr>
						<tr><th><th></tr>
						<tr><th align="center" id="itemName">Turkey Melt Platter</th><th id="itemPrice">$7.99</th></tr>
						<tr><td id="itemDescr">Thin sliced turkey breast with mozzarella, roasted red peppers and sliced tomato, served with steak fries and homemade Cole Slaw</td><td id="itemDescr"></td></tr>
						<tr><th><th></tr>
						<tr><th><th></tr>
					</table>
					</div>
					<div data-role="collapsible"><h1>Hero Special</h1>
					<table class="art-menu" width="100%">
						<tr><th align="center" id="itemName" >Tilapia Avocado</th> <th id="itemPrice">$9.99</th></tr>
						<tr><th align="center"  id="itemDescr">Breaded Tilapia  filet in a toasted roll with lemon tartar sauce, lettuce, tomatoes and avocado</th></tr>
						<tr><th><th></tr>
						</table>
						</div>
					<div data-role="collapsible"><h1>Gluten Free Pasta</h1>
					<table class="art-menu" width="100%">
						<tr><th align="center" id="itemName" colspan="2"> </th> </tr>
						<tr><th><th></tr>
						<tr><th><th></tr>
						
						
						<tr><th><th></tr>
						<tr><th align="center" id="itemPrice" colspan="2"> </th> </tr>
						<tr><th><th></tr>
						<tr><th align="center" id="itemName">Pasta Pomodoro</th><th id="itemPrice">$9.99</th></tr>
						<tr><td id="itemDescr">Grilled chicken tomatoes, pine nuts, pesto with gluten free penne.</td><td id="itemDescr"></td></tr>
						<tr><th><th></tr>
						<tr><th align="center" id="itemName">Pasta Primavera</th><th id="itemPrice">$9.99</th></tr>
						<tr><td id="itemDescr">Mushrooms, spinach, tomatoes, garlic, feta cheese with gluten free penne.</td><td id="itemDescr"></td></tr>
						<tr><th><th></tr>
						<tr><th><th></tr>
					</table>
					</div>
					<div data-role="collapsible"><h1>Pasta Dishes</h1>
					<table class="art-menu" width="100%">
						<tr><th align="center" id="itemName" colspan="2"> </th> </tr>
						<tr><th><th></tr>
						<tr><th><th></tr>
					
						<tr><th align="center"  id="itemDescr">Served winth two garlic rolls </th></tr>
						<tr><th><th></tr>
						<tr><th align="center" id="itemPrice" colspan="2"> </th> </tr>
						<tr><th><th></tr>
						<tr><th align="center" id="itemName">Lasagna</th><th id="itemPrice">$7.99</th></tr>
						<tr><td id="itemDescr">Three layers of tender pasta with creamy ricotta, ground beef, romano cheese, zesty tomato sauce, topped off with melted mozzarella cheese.</td><td id="itemDescr"></td></tr>
						<tr><th><th></tr>
						<tr><th align="center" id="itemName">Cheese Ravioli</th><th id="itemPrice">$7.99</th></tr>
						<tr><td id="itemDescr">An old Italian tradition, round shaped tender pasta, filled with a special blend of ricotta cheese, covered with our own tomato sauce, melted mozzarella & parmesan cheese.</td><td id="itemDescr"></td></tr>
						<tr><th><th></tr>
						<tr><th align="center" id="itemName">Spaghetti with Meatsauce</th><th id="itemPrice">$7.99</th></tr>
						<tr><td id="itemDescr">All time favorite with a hearty sauce. Our exclusive blend from our own family recipe, lavished over a steamy bed of pasta.</td><td id="itemDescr"></td></tr>
						<tr><th><th></tr>
						<tr><th align="center" id="itemName">Whole Wheat Penne</th><th id="itemPrice">$7.99</th></tr>
						<tr><td id="itemDescr">With choice of:  Meatsauce or Fresh Tomatoes, Garlic and Olive Oil</td><td id="itemDescr"></td></tr>
						<tr><th><th></tr>
						<tr><th><th></tr>
					</table>
					</div>
					<div data-role="collapsible"><h1>Lunch Entrees</h1>
					<table class="art-menu" width="100%">
						<tr><th align="center" id="itemName" colspan="2"> </th> </tr>
						<tr><th><th></tr>
						<tr><th><th></tr>
						
						<tr><th align="center"  id="itemDescr">Served winth two garlic rolls </th></tr>
						<tr><th><th></tr>
						<tr><th align="center" id="itemPrice" colspan="2"> </th> </tr>
						<tr><th><th></tr>
						<tr><th align="center" id="itemName">Chicken Alfredo</th><th id="itemPrice">$11.99</th></tr>
						<tr><td id="itemDescr">Grilled chicken breast with our homemade alfredo sauce over pasta of your choice.</td><td id="itemDescr"></td></tr>
						<tr><th><th></tr>
						<tr><th align="center" id="itemName">Chicken Parmigiana</th><th id="itemPrice">$10.99</th></tr>
						<tr><td id="itemDescr">Breaded chicken, with our homemade sauce, topped with melted mozzarella cheese Served with pasta of your choice. </td><td id="itemDescr"></td></tr>
						<tr><th><th></tr>
						<tr><th align="center" id="itemName">Eggplant Parmigiana</th><th id="itemPrice">$10.99</th></tr>
						<tr><td id="itemDescr">Deep fried breaded eggplant with our homemade sauce, topped with melted mozzarella cheeseServed with pasta of your choice.</td><td id="itemDescr"></td></tr>
						<tr><th><th></tr>
						<tr><th><th></tr>
					</table>
					</div>
					<div data-role="collapsible"><h1>Stromboli</h1>
					<table class="art-menu" width="100%">
						<tr><th align="center" id="itemName" colspan="2"> </th> </tr>
						<tr><th><th></tr>
						<tr><th><th></tr>
					
						<tr><th align="center"  id="itemDescr">Served with side of marinara </th></tr>
						<tr><th><th></tr>
						<tr><th align="center" id="itemPrice" colspan="2"> </th> </tr>
						<tr><th><th></tr>
						<tr><th align="center" id="itemName">Veggie Lovers</th><th id="itemPrice">$6.99</th></tr>
						<tr><td id="itemDescr">Mozzarella cheese, spinach, tomatoes, mushrooms, broccoli </td><td id="itemDescr"></td></tr>
						<tr><th><th></tr>
						<tr><th align="center" id="itemName">Avinti's Special</th><th id="itemPrice">$6.99</th></tr>
						<tr><td id="itemDescr">Mozzarella cheese, pepperoni, sausage, mushrooms, onions, green peppers</td><td id="itemDescr"></td></tr>
						<tr><th><th></tr>
						<tr><th align="center" id="itemName">Buffalo Chicken</th><th id="itemPrice">$6.99</th></tr>
						<tr><td id="itemDescr">Mozzarella cheese, grilled chicken with buffalo sauce</td><td id="itemDescr"></td></tr>
						<tr><th><th></tr>
						<tr><th align="center" id="itemName">Steak</th><th id="itemPrice">$6.99</th></tr>
						<tr><td id="itemDescr">Mozzarella cheese, steak, green peppers, mushrooms, onions</td><td id="itemDescr"></td></tr>
						<tr><th><th></tr>
						<tr><th align="center" id="itemName">Meat</th><th id="itemPrice">$6.99</th></tr>
						<tr><td id="itemDescr">Mozzarella cheese, pepperoni, ham, bacon, sausage, meatball </td><td id="itemDescr"></td></tr>
						<tr><th><th></tr>
						<tr><th align="center" id="itemName">Pepperoni</th><th id="itemPrice">$6.99</th></tr>
						<tr><td id="itemDescr">Mozzarella cheese, pepperoni</td><td id="itemDescr"></td></tr>
						<tr><th><th></tr>
						<tr><th align="center" id="itemName">Chicken Florentine</th><th id="itemPrice">$6.99</th></tr>
						<tr><td id="itemDescr">Mozzarella and ricotta cheese, grilled chicken, spinach</td><td id="itemDescr"></td></tr>
						<tr><th><th></tr>
						<tr><th align="center" id="itemName">Chicken Parmigiana</th><th id="itemPrice">$6.99</th></tr>
						<tr><td id="itemDescr">Breaded chicken breast with mozzarella and  homemade marinara sauce</td><td id="itemDescr"></td></tr>
						<tr><th><th></tr>
						<tr><th align="center" id="itemName">Eggplant Parmigiana</th><th id="itemPrice">$6.99</th></tr>
						<tr><td id="itemDescr">Breaded eggplant with mozzarella and  homemade marinara sauce</td><td id="itemDescr"></td></tr>
						<tr><th><th></tr>
						<tr><th><th></tr>
					</table>
					</div>
					<div data-role="collapsible"><h1>Pizza Special</h1>
					<table class="art-menu" width="100%">
						<tr><th align="center" id="itemName" colspan="2"> </th> </tr>
						<tr><th><th></tr>
						<tr><th><th></tr>
					
						
						<tr><th><th></tr>
						<tr><th align="center" id="itemPrice" colspan="2"> </th> </tr>
						<tr><th><th></tr>
						<tr><th align="center" id="itemName">Two Slices Combo</th><th id="itemPrice">$7.99</th></tr>
						<tr><td id="itemDescr">Two Giant Slices  a side salad or soup and large soda. Add any topping for $0.75/slice.</td><td id="itemDescr"></td></tr>
						
						<tr><th><th></tr>
						<tr><th><th></tr>
					
					</table>
					</div>
					</div>
                </div> 
				<div data-role="collapsible">
					<h1>Early Bird Specials</h1>
					<table width="100%">
						
						<tr><th><th></tr>
						<tr><th align="center" id="itemName"> Three Italian Course Meal only for $12.99</th></tr>
						<tr><th><th></tr>
					<tr><th align="center" id="itemDescr">Begin with a fresh cut salad or homemade soup
served with fresh out of the oven garlic rolls, <br>continue on to one of our delicious entrees and complete your dinner by indulging in delectable italian desert  </th></tr>
						<tr><th align="center" id="itemName">Chicken Parmigiana</th></tr>
						<tr><td id="itemDescr"> Breaded chicken, with our homemade sauce, topped with melted mozzarella cheese. Served with pasta of your choice.</td></tr>
						<tr><th><th></tr
						<tr><th align="center" id="itemName">Eggplant Parmigiana</th></tr>
						<tr><td id="itemDescr">Breaded eggplant, deep fried and covered with our own thick hearty tomato sauce & topped with mozzarella cheese. Served with pasta of your choice.</td></tr>
						<tr><th><th></tr>
						<tr><th align="center" id="itemName">Spaghetti with Meatballs</th></tr>
						<tr><td id="itemDescr">An exclusive blend, a hearty marinara sauce from our family recipe, lavished over a steamy bed of spaghetti and homemade italian meatballs.</td></tr>
						<tr><th><th></tr>
						<tr><th align="center" id="itemName">Homemade Lasagna </th></tr>
						<tr><td id="itemDescr">Three layers of tender pasta with creamy ricotta, ground beef, romano cheese, zesty tomato sauce, topped off with melted mozzarella cheese. </td></tr>
						<tr><th><th></tr>
						<tr><th align="center" id="itemName">Baked Ziti </th></tr>
						<tr><td id="itemDescr">Penne pasta covered with a mixture of rich ricotta, tomato sauce, melted mozzarella & parmesan. </td></tr>
						<tr><th><th></tr>
						
						</table>
				</div>
				<div data-role="collapsible">
					<h1>Chef's Specials</h1>
					<?php
						if ($month%2)
								$even=false;
						if ($day<=15) 
								$half=true;
						if ($even==true and $half==true)
									include "dinner_special1.inc.php";
									
						elseif ($even==true and $half==false) 
										include "dinner_special2.inc.php";
										
						elseif ($even==false and $half==true)
										include "dinner_special3.inc.php";
						else 
								include"dinner_special4.inc.php";
					?>
				</div>
			</div>
		</div>
		<br><br><br>	
		<div>
			<a data-role="button" data-transition="slide" href="index.html">Home</a>
         </div>
		
		<div class="vysota">
			<footer data-role="footer" data-theme="a">

				<div align="center" style="font-color: white; font-size: 150%;">
				<a href="tel://561-469-7323">561-469-7323</a></div>
				<div align="center" style="font-size: 120%;">Dine-in   Delivery   Take-out</div>
				
			</footer>
		</div>
	
	</div>
</body>
</html>