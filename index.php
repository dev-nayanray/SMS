<?php include'header.php' ?>

<?php if (isset($_POST['srcbtn'])) {
		$un = $_POST['blood_group'];
        $pass = $_POST['district'];
         header("refresh:1;url=admin/Pages/donor.php");
}else{
	 
}






 ?>







	<div class="search">
		<div class="hed">
			<center>
				Find a blood friend......
			</center>
		</div>
		 		<div class="inpu">
		 			<form action="" method="post">
			<ul>
				<li><select name="blood_group" >
										<option value="A+">A+</option>
										<option value="A-">A-</option>
										<option value="B+">B+</option>
										<option value="B-">B-</option>
										<option value="O+">O+</option>
										<option value="O-">O-</option>
										<option value="AB+">AB+</option>
										<option value="AB-">AB-</option>
									</select>
								</li>
				<li>
					<select name="district" id="district" class="district select2-hidden-accessible" tabindex="-1" aria-hidden="true">
										<option value="পঞ্চগড়">পঞ্চগড়</option>
										<option value="ঠাকুরগাঁও">ঠাকুরগাঁও</option>
										<option value="দিনাজপুর ">দিনাজপুর </option>
										<option value="রংপুর">রংপুর </option>
										<option value="ঢাকা">ঢাকা</option>
										<option value="কুড়িগ্রাম">কুড়িগ্রাম</option>
										<option value="লালমনিরহাট">লালমনিরহাট</option>
										<option value="নীলফামারী">নীলফামারী </option>
										<option value="গাইবান্ধা">গাইবান্ধা</option>
										
										
										<option value="চট্টগ্রাম">চট্টগ্রাম</option> 
											<option value="রাজশাহী">রাজশাহী </option>
											<option value="সিলেট"> সিলেট </option>
											<option value="যশোর">যশোর</option>
											<option value="ময়মনসিংহ">ময়মনসিংহ</option>
											<option value="কুমিল্লা">কুমিল্লা </option>
											<option value="বরিশাল">বরিশাল</option>
											<option value="ফরিদপুর">ফরিদপুর </option>
											<option value="বগুড়া">বগুড়া </option>
											<option value="পাবনা">পাবনা </option>
											<option value="রাঙ্গামাটি">রাঙ্গামাটি </option>
											<option value="কুষ্টিয়া">কুষ্টিয়া </option>
											<option value="নোয়াখালী">নোয়াখালী </option>
											<option value="খুলনা">খুলনা</option>
											<option value="টাঙ্গাইল">টাঙ্গাইল </option> 
											<option value="ভোলা">ভোলা </option>
											<option value="বান্দরবান">বান্দরবান </option>
											<option value="চাঁদপুর">চাঁদপুর </option>
											<option value="হবিগঞ্জ">হবিগঞ্জ </option>
											<option value="লক্ষীপুর">লক্ষীপুর</option>
											<option value="বরগুনা">বরগুনা </option>
											<option value="ঝালকাঠি">ঝালকাঠি </option>
											<option value="পিরোজপুর">পিরোজপুর </option>
											<option value="পটুয়াখালী">পটুয়াখালী </option>
											<option value="ঝিনাইদহ">ঝিনাইদহ</option>
											<option value="নড়াইল">নড়াইল </option>
											<option value="মাগুরা">মাগুরা </option> 
											<option value="সাতক্ষিরা">সাতক্ষিরা</option>
											<option value="বাগেরহাট">বাগেরহাট </option>
											<option value="চুয়াডাঙ্গা">চুয়াডাঙ্গা </option>
											<option value="মেহেরপুর">মেহেরপুর </option>
											<option value="সিরাজগঞ্জ">সিরাজগঞ্জ </option>
											<option value="জয়পুরহাট">জয়পুরহাট </option>
											<option value="নাটোর">নাটোর</option>
											<option value="নওগাঁ">নওগাঁ </option>
											<option value="চাঁপাইনবাবগঞ্জ">চাঁপাইনবাবগঞ্জ</option>
											<option value="খাগড়াছড়ি">খাগড়াছড়ি </option>
											<option value="ফেনী">ফেনী </option>
											<option value="ব্রাহ্মণবাড়ীয়া">ব্রাহ্মণবাড়ীয়া </option>
											<option value="সুনামগঞ্জ">সুনামগঞ্জ</option>
											<option value="কক্সবাজার">কক্সবাজার </option>
											<option value="মৌলভীবাজার">মৌলভীবাজার </option>
											<option value="গোপালগঞ্জ">গোপালগঞ্জ </option>
											<option value="শরীয়তপুর">শরীয়তপুর </option>
											<option value="মাদারীপুর">মাদারীপুর </option>
											<option value="রাজবাড়ী">রাজবাড়ী </option>
											<option value="গাজীপুর">গাজীপুর </option>
											<option value="কিশোরগঞ্জ">কিশোরগঞ্জ</option>
											<option value="জামালপুর">জামালপুর </option>
											<option value="শেরপুর">শেরপুর </option>
											<option value="নেত্রকোনা">নেত্রকোনা</option>
											<option value="মুন্সীগঞ্জ">মুন্সীগঞ্জ </option>
											<option value="নরসিংদী">নরসিংদী </option>
						<option value="নারায়ণগঞ্জ">নারায়ণগঞ্জ</option>
					<option value="মানিকগঞ্জ">মানিকগঞ্জ </option>
										
										<option value="অন্যান্য">অন্যান্য</option>
									</select>
				</li>
				<li>
					<button name="srcbtn">Search</button>
				</li>
			</ul>
			</form>
		</div>
	</div>

	<div class="reg">
			
		<a href="reg.php">
			 <button>Register to become a blood relative</button> 
		</a>
	</div>
	<div class="content">
		<div class="left">
			 <div class="lt">
			 	
				<h2>Raktabandhu blood card</h2>
				<p><a href="#">Download your card now</a></p>
				<button>Create the card</button>

			 </div>
			 <div class="lbo">
			 	<h3><a href="#">How do I create the card?</a></h3>
			 	<button>Watch the video</button>
			 </div>			 
		</div>
		<div class="right">
				<img src="asset/giphy.gif">
		</div>
		
	</div>
	<div class="store">
		<div class="box">
			<a href="#"><img src="asset/fb.jpg"></a>
		</div>
		<div class="box">
			<a href="#"><img src="asset/play.png"></a>
		</div>
	</div>
	<div class="note">
		 			<a href="#">Note</a>
			If you want to work with Raktabandhu, to know about Raktabandhu, if you forgot your password, contact us <a href="#">+8801981308611,+8801920875345.</a>
			<br>
			<br>
			<br>
			<center>
				<button>Click to know more about Rakta Bandhu</button>
			</center>
		 
	</div>
	<?php include 'footer.php' ?>