<!DOCTYPE html>
<html>
<head>
	<title>HOTEL TANGERANG</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container">
<h1 class="text-center">HOTEL TANGERANG</h1>

<div class="card mt-4">
  <div class="card-header bg-primary text-white">
    FORM PEMESAN HOTEL TANGERANG
  </div>
  <div class="card-body">
    <form method="post" action="">
    	<div class="form group">
    		<label>nama pemesan</label>
    		<input type="text" name="tnamapemesan" class="form-control" placeholder="masukan nama anda disini!" required>
    		</div>
<div class="form group">
    		<label>alamat</label>
    		<input type="textarea" name="tnim" class="form-control" placeholder="input alamat anda disini!" required>
    		</div>
    	<div class="form group">
    		<label>kota</label>
    		<input type="text" name="tnim" class="form-control" placeholder="input kota anda disini!" required>
    		</div>
    	<div class="form group">
    		<label>nomor hotel</label>
    		<select class="form-control" name="tnomor">
    		<option></option>
    		<option value="1">1</option>
    		<option value="2">2</option>
    		<option value="3">3</option>
    	</select>


    		
   	</div>
    <div class="form group">
    		<label>nama hotel</label>
    		<select class="form-control" name="tnomor">
    		<option></option>
    		<option value="pamarayan">pamarayan</option>
    		<option value="alium">alium</option>
    		<option value="olive">olive</option>
    	</select>
    		
    	</div>
    	
    	<div class="form group">
    		<label>date from</label>
    		<select class="form-control" name="tdate">
    		<option></option>
    		<option value="1">1</option>
    		<option value="2">2</option>
    		<option value="3">3</option>
    		<option value="4">4</option>
    		<option value="5">5</option>
    		<option value="6">6</option>
    		<option value="7">7</option>
    		<option value="8">8</option>
    		<option value="9">9</option>
    		<option value="10">10</option>
    		<option value="11">11</option>
    		<option value="12">12</option>
    		<option value="13">13</option>
    		<option value="14">14</option>
    		<option value="15">15</option>
    		<option value="16">16</option>
    		<option value="17">17</option>
    		<option value="18">18</option>
    		<option value="19">19</option>
    		<option value="20">20</option>
    		<option value="21">21</option>
    		<option value="22">22</option>
    		<option value="23">23</option>
    		<option value="24">24</option>
    		<option value="25">25</option>
    		<option value="26">26</option>
    		<option value="27">27</option>
    		<option value="28">28</option>
    		<option value="29">29</option>
    		<option value="30">30</option>
    		<option value="31">31</option>

    	
    	</select>
    		
    	<div class="form group">
    		<label>date to</label>
    		<select class="form-control" name="tdate">
    		<option></option>
    		<option value="1">1</option>
    		<option value="2">2</option>
    		<option value="3">3</option>
    		<option value="4">4</option>
    		<option value="5">5</option>
    		<option value="6">6</option>
    		<option value="7">7</option>
    		<option value="8">8</option>
    		<option value="9">9</option>
    		<option value="10">10</option>
    		<option value="11">11</option>
    		<option value="12">12</option>
    		<option value="13">13</option>
    		<option value="14">14</option>
    		<option value="15">15</option>
    		<option value="16">16</option>
    		<option value="17">17</option>
    		<option value="18">18</option>
    		<option value="19">19</option>
    		<option value="20">20</option>
    		<option value="21">21</option>
    		<option value="22">22</option>
    		<option value="23">23</option>
    		<option value="24">24</option>
    		<option value="25">25</option>
    		<option value="26">26</option>
    		<option value="27">27</option>
    		<option value="28">28</option>
    		<option value="29">29</option>
    		<option value="30">30</option>
    		<option value="31">31</option>
    		
    	</select>


    		
   	</div>
    	</div>

    		

    	<button type="submit" class="btn btn-success" name="bsimpan">simpan</button>
    	<button type="reset" class="btn btn-success" name="breset">kosongkan</button>
    

    </form>

  </div>
</div>
<!-- akhir card form -->


<!-- awal card tabel -->
<div class="card mt-4">
  <div class="card-header bg-success text-white">
    DAFTAR HOTEL TANGERANG
  </div>
  <div class="card-body">

  	<table class="table table-bordered table-striped">
  		<tr>
  			<th>nomor hotel</th>
  			<th>nama hotel</th>
  			<th>kota</th>
  			<th>price</th>
  			<th>type</th>
		</tr>
		<tr>
			<td>1</td>
			<td>pamarayan</td>
			<td>tangerang</td>
			<td>500.000/day</td>
			<td>bintang 5</td>
		</tr>
		<tr>
			<td>2</td>
			<td>alium</td>
			<td>tangerang</td>
			<td>250.000/day</td>
			<td>bintang 3</td>
		</tr>
		<tr>
			<td>3</td>
			<td>olive</td>
			<td>tangerang</td>
			<td>350.000/day</td>
			<td>bintang 4</td>
		</tr>
		
		</tr>
  	</table>
    

  </div>
</div>
<!-- akhir card tabel -->

</div>

<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>
