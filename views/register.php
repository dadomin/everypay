<section id="main-register">
	<div class="size">
		<div class="home-div">
			<div class="home-img">
				<img src="./img/register.png" alt="register">
			</div>

			<div class="home-img">
				<form action="/register/check" method="POST" class="home-register"  enctype="multipart/form-data">
					<h3>
						Get in touch with <br>
						our team
					</h3>
					
					<input type="text" placeholder="YOUR NAME" name="name">
					<input type="text" placeholder="ID" name="id">
					<input type="password" placeholder="PASSWORD" name="pass">
					<input type="password" placeholder="PASSWORD CONFIRM" name="cpass">

					<input type="date" name="birth">

					<select name="sex" id="">
						<option value="0">WOMAN</option>
						<option value="1">MAN</option>
					</select>

					<div>
						<input type="text" placeholder="프로필 사진 선택" disabled="disabled" class="file-show">
						<label for="file">업로드</label>
						<input type="file" name="file" id="file">

					</div>
					
					<button>DONE</button>
				</form>
			</div>
			
		</div>
	</div>

	<img src="./img/bar1.png" alt="register-bar" class="register-bar">
</section>