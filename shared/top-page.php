<!--top page-->
<div class="top-page">
	<div class="row">         
		<!--breadcrumb-->
		<div class="col-lg-12">
		    <ol class="breadcrumb">
		    	<?php
		    		foreach ($breadCrumb as $value => $item)	
		    		{
		    			echo '<li>';
		    			echo '<a href="#">';
		    			echo $item;
		    			echo '</a>';
		    			echo '<span class="glyphicon glyphicon-chevron-right"></span></li>';
		    		};
		    	?>
		    </ol>
		</div>
		<!--/ breadcrumb-->  

		<div class="col-lg-6">
		    <h1 class=""><?= $sectionTitle; ?></h1>
		</div>

		<div class="col-lg-6">
		    <ul class="list-inline round-details">
		    	<?php
		    		if($roundDetails > 0){
		    			foreach ($roundDetails as $value => $item)	
			    		{
			    			echo '<li>';
			    			echo $value." "."<strong>".$item."</strong>";
			    			echo '</li>';
			    		};
		    		}
		    	?>
		    </ul>
	  	</div>
	</div>
</div>
<!--/ top page-->
