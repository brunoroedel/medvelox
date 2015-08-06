<?php 
   //$path = $_SERVER['DOCUMENT_ROOT'];
   $js = "http://localhost/medvelox/assets/javascripts/";
?>


<!-- jQuery (necessary for Bootstraps JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<!--<script src="javascripts/bootstrap.min.js"></script>-->
<script src="<?php echo $js; ?>bootstrap.js"></script>
<script src="<?php echo $js; ?>classes.js"></script>
<script src="<?php echo $js; ?>custom-input.js"></script>
<script src="<?php echo $js; ?>nav-components.js"></script>


<script type="text/javascript" src="https://www.google.com/jsapi?autoload={'modules':[{'name':'visualization','version':'1.1','packages':['table']}]}"></script>
<script type="text/javascript">
  google.load("visualization", "1.1", {packages:["table"]});
  google.setOnLoadCallback(drawTable);

  function drawTable() {
    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Exames');
    data.addColumn('number', '10/01/2015');
    data.addColumn('number', '11/01/2015');
    data.addColumn('number', '12/01/2015');
    data.addColumn('number', '13/01/2015');
    data.addColumn('number', '14/01/2015');
    data.addColumn('number', '15/01/2015');
    data.addRows([
      ['Nome grande de exame',  {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}],
      ['Mike',  {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}],
      ['Mike',  {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}],
      ['Mike',  {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}],
      ['Mike',  {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}],
      ['Mike',  {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}],
      ['Mike',  {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}],
      ['Mike',  {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}],
      ['Mike',  {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}],
      ['Mike',  {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}],
      ['Mike',  {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}],
      ['Mike',  {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}],
      ['Mike',  {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}],
      ['Mike',  {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}],
      ['Mike',  {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}]
      
    ]);

	var table = new google.visualization.Table(document.getElementById('table_div'));

    table.draw(data, {
    	showRowNumber: true, 
    	width: '100%', 
    	height: '300px',
    	frozenColumns: true,
    	showRowNumber: false,
    	alternatingRowStyle: false,
    });

	var data2 = new google.visualization.DataTable();
    data2.addColumn('string', 'Exames');
    data2.addColumn('number', '10/01/2015');
    data2.addColumn('number', '11/01/2015');
    data2.addColumn('number', '12/01/2015');
    data2.addColumn('number', '13/01/2015');
    data2.addColumn('number', '14/01/2015');
    data2.addColumn('number', '15/01/2015');
    data2.addRows([
      ['Mike',  {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}],
      ['Mike',  {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}],
      ['Mike',  {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}],
      ['Mike',  {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}],
      ['Mike',  {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}],
      ['Mike',  {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}],
      ['Mike',  {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}],
      ['Mike',  {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}],
      ['Mike',  {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}],
      ['Mike',  {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}],
      ['Mike',  {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}],
      ['Mike',  {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}],
      ['Mike',  {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}],
      ['Mike',  {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}],
      ['Mike',  {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}, {v: 10000,  f: '$10,000'}]
      
    ]);

    var table2 = new google.visualization.Table(document.getElementById('table_div_02'));

    table2.draw(data2, {
    	showRowNumber: true, 
    	width: '100%', 
    	height: '300px',
    	frozenColumns: true,
    	showRowNumber: false,
    	alternatingRowStyle: false,
    });

    $('.table-container table').addClass('table table-hover');
    
  }
  
  
</script>

<script src="<?php echo $js; ?>main.js"></script>
