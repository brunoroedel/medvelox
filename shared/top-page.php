<!--top page-->
<div class="top-page">
	<div class="row">         
		<!--breadcrumb-->
		<div class="col-lg-12">
		    <ol class="breadcrumb">
		    	<?php
	    			foreach ($breadCrumb as $value => $item){
		    			echo '<li>';
		    			echo '<a href="#">';
		    			echo $item;
		    			echo '</a>';
		    			echo '<span class="glyphicon glyphicon-chevron-right"></span></li>';
		    			echo '</li>';
		    		};
		    	?>
		    </ol>
		</div>
		<!--/ breadcrumb-->  

		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
		    <h1>
		    	<?php
	    			foreach ($sectionTitle as $value => $item)	
		    		{
		    			echo $value." "."<small>".$item."</small>";
		    		};
		    	?>
		    </h1>
		</div>

		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
	    	<?php
	    		
	    		$hasDetails = count($roundDetails);
	    		if($hasDetails > 1){	
					echo '<ul class="list-inline round-details">';
	    			foreach ($roundDetails as $value => $item)	
		    		{
		    			echo '<li>';
		    			echo $value." "."<strong>".$item."</strong>";
		    			echo '</li>';
		    		};
		    		echo '</ul>';
	    		}
	    	?>
	  	</div>
	</div>
</div>
<!--/ top page-->
