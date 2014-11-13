<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Input</title>

    <!-- Bootstrap -->
    <link href="../../../libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/input.css" rel="stylesheet">
</head>
  <body>
	<div class="container">
		<div class="row clearfix">
			<div class="col-md-12 column">
				<form role="form">
					{foreach from=$fields item=value key=key}
						<div class="form-group">
							<label for={$value}>{$value}</label>
							<input type={$value} class="form-control" id={$value} placeholder={$dbvalues.$value} />
							<p class="help-block">
								Example block-level help text here.
							</p>
						</div>
					{/foreach}
					
					<div class="checkbox">
						<label><input type="checkbox" /> Check me out</label>
					</div> 
					<button type="submit" class="btn btn-default">Submit</button>
				</form>
			</div>
		</div>
	</div>
	   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../../libs/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/app.js"> </script>
</body>
</html>