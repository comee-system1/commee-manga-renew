<?php $this->load->view('elements/topmenu_login'); ?>

<div class="main-contents container">
  <div class="shadow-lg p-3 mb-5 bg-white rounded">

    <form method="POST" action="#">
     <div class="text-center my-5">
            <h4>パスワードの再設定</h4><br><br>
        <div class="form-row text-left justify-content-center ">
            <div class="col-sm-8">
                <p> 
                    <input type="email" name="email" autocomplete="email" class="form-control " placeholder="メールアドレスを入力してください。" required />
                </p>
            </div>       
        </div>
     </div>
    
      <div class="text-center mb-4 row justify-content-around">
        <button type="button" class="btn btn-danger btnflex">キャンセル</button>
        <input type="submit" value="送信" class="btn btn-success btnflex">
      </div>
    </form>

  </div>
</div>
