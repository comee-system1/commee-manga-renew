<?php $this->load->view('elements/topmenu'); ?>

<main class="w-100 mb-5">
	<div class="container-fluid"> 
		<!--=============================================================================== --> 
		
		<!-- 右上メニュー部分 -->
		<?php $this->load->view('elements/topmenu_right'); ?>
		<!--=============================================================================== -->
		<section class="m-5">
			<div class="d-block font-weight-bold h4">COMEEに登録する</div>
				<div class="row my-3">
					<div class="col-md-5 d-none d-md-block">
					<div class="col col-xs-12 col-md-12">
						<h2>COMEEにようこそ！</h2>
						<div class="mt-5">
						<p>COMEEは、創作をする人、それを応援する人、ものづくりが好きなみんなのための街のような場所。
						<br />
						<br />
						好みのクリエイターやコンテンツを見つけたり、自分のつくりたいものをつくったりして楽しめます。
						<br />
						<br />
						いっしょに、創作の輪を広げていきましょう。
						</p>
						</div>
					</div>
					</div>
					<div class="col-xs-12 col-md-7">
					<div class="col col-sm-12  col-md-10">
						<div class="card mb-4 shadow-sm">
						<div class="card-header">
							<h4 class="my-0 fw-normal">comeeに登録する</h4>
						</div>
						<div class="card-body">
							<form action=""  method="POST" >
							<div >
								<label for="email">メールアドレス</label>
								<input type="email" name="email" id="email" value="" placeholder="mail@comee.co.jp" class="form-control" />
							</div>
							<div class="mt-3">
								<label for="password">パスワード
								<br /><small>8文字以上の半角英数記号</small>
								</label>
								<input type="text" name="email" id="password" value=""  class="form-control" />
							</div>
							<div class="mt-3">
								<label for="username">ユーザーネーム
								<br /><small>comeeに表示されます</small>
								</label>
								<input type="text" name="username" id="username" value=""  class="form-control" />
							</div>
							<div class="mt-3">
								
								<label for="username">生年月日</label>
								<div>
								<div class="col-md-4 col-4 form-check-inline">
									<input type="text" name="year" value=""  class="form-control" />&nbsp;年
								</div>
								<div class="col-md-3 col-3 form-check-inline">
									<select name="month" class="form-control" > 
									<?php for($i=1;$i<=12;$i++):?>
									<option value="<?=$i?>" ><?=$i?>月</option>
									<?php endfor;?>
									</select>
								</div>
								<div class="col-md-3 col-3 form-check-inline">
									<select name="day" class="form-control" > 
									<?php for($i=1;$i<=31;$i++):?>
									<option value="<?=$i?>" ><?=$i?>日</option>
									<?php endfor;?>
									</select>
								</div>
								</div>
							</div>
							<div class="text-center mt-3">
								<?=form_checkbox('agree', 'on', FALSE);?>
								<a href="#" target=_blank>利用規約</a>に同意する
								<?=br(2)?>
								<input type="submit" name="regist" value="登録する(無料)" class="btn btn-info w-100" />
							</div>
							<hr class="mt-3" />
							<div class="text-center mt-3">
								<p class="font-weight-bold">ソーシャルアカウントで登録</p>
								<div class="row">
								<div class="col-md-6">
								<a href="" class="btn btn-success w-100">
									<i class="fab fa-twitter" ></i>
									Twitter</a>
								</div>
								<div class="col-md-6">
								<a href="" class="btn btn-primary w-100">
								<i class="fab fa-facebook-f"></i>
									Facebook</a>
								</div>
								</div>
							</div>
							</form>
						</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
	<!--/.container-fluid--> 
