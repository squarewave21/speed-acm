<!DOCTYPE html>
<html lang="ja">

<head>
  <!-- meta -->
  <meta charset="UTF-8">
  <title>メールマガジン | 難波の風俗 大阪 スピード難波店</title>
  <meta name="keywords" content="難波,風俗,大阪,ホテヘル,ホテルヘルス,スピード">
  <meta name="description" content="大阪難波の風俗 ホテルヘルス(ホテヘル) スピード難波店のメールマガジンです。風俗未経験・素人の体験入店から人気嬢まで、在籍数・可愛さ・料金全てにおいてお客様に満足いただけること間違いなし！">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="canonical" href="http://speed-speed.com/shop/nanba/mailmagazine.php">
  <link rel="alternate" media="only screen and (max-width: 640px)" href="http://speed-speed.com/smart/shop/nanba/mailmagazine.php">
  <link rel="alternate" media="handheld" href="http://speed-speed.com/mobile/shop/nanba/mailmagazine.php">
  <link rel="alternate" type="application/rss+xml" title="大阪のホテヘル スピードグループ 風俗求人お役立ち情報" href="/RSS.rss">
  <!-- /meta -->

  <!-- スタイルシートの指定 -->
  <link rel='stylesheet' href='http://speed-speed.com/css/common/reset.css' media='all'>
  <link rel='stylesheet' href='http://speed-speed.com/css/s-common/design.css' media='all'>
  <link rel='stylesheet' href='http://speed-speed.com/css/s-common/common.css' media='all'>
  <link rel='stylesheet' href='http://speed-speed.com/css/nanba/add_design.css' media='all'>
  <link rel='stylesheet' href='http://speed-speed.com/css/s-common/mailmagazine.css' media='all'>
  <!-- ジャバスクリプト用 -->

  <style>
    .acm-wrap {
      width: 500px;
      margin-left: 15px;
      margin-bottom: 20px;
    }

    .acm-wrap .flex {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding-left: 5px;
    }

    .mm-form-ttl {
      background: #FF238F;
      padding: 4px 6px;
      margin-bottom: 10px;
    }

    .mm-form-item:not(:nth-child(3)) {
      margin-right: 10px;
    }

    .mm-form-submit {
      height: 29px;
      width: 65px;
      cursor: pointer;
      background: #ff00a6;
      padding: 7px 0px;
      color: #FFF;
      border: none;
      text-align: center;
      border-radius: 4px;
    }

    .acm-remove-wrap {
      margin-top: 20px;
    }
  </style>
</head>

<body>
  <?php include_once(APPPATH . 'views/analyticstracking.php'); ?>
  <div id="wrapper">

    <!-- navi -->
    <?php include_once(APPPATH . 'views/shop/navi.php'); ?>
    <!-- /navi -->

    <!-- header -->
    <?php include_once(APPPATH . 'views/shop/header.php'); ?>
    <!-- /header -->


    <div id="contenter">
      <!-- main-content -->
      <div class="contents-section content">
        <h2><img src="/img/common/h2-mailmagzine.jpg" alt="メールマガジン"></h2>
        <div class="content-box">
          <h3><span class="sub-attend">メルマガ会員募集中</span></h3>
          <p>配信を希望するメールアドレスをご入力の上、「登録」ボタンを押して下さい。<br>
            「メールマガジン会員登録のご案内」メールをお送りします。<br>
            24時間以内にメール内のURLから手続きを行って頂くことで、ご登録が完了します。</p>
          <!----------------------- ACメーラー ----------------------->
          <form action="http://tribe-webtest.xyz/acmailer/reg.cgi" method="post" name="form2" class="acm-wrap">
            <div class="mm-form-ttl">メルマガ登録</div>
            <div class="flex">
              <div class="mm-form-item">メールアドレス</div>
              <div class="mm-form-item"><input type="text" name="email" value="" style="width:  300px"></div>
              <div class="mm-form-item">
                <input type="hidden" name="reg" value="add">
                <input type="submit" value="登録" class="mm-form-submit">
                <input type="hidden" name="encode" value="文字コード">
                <input type="hidden" name="checkbox_list" value="">
              </div>
            </div>
          </form>
          <!-----------------------///////////////////ACメーラー ----------------------->
        </div>

        <!-- <div class="content-box">
          <h3><span class="sub-attend">メルマガ会員募集中</span></h3>
          <p>登録は簡単！下のボタンを押して、空メールを配信するだけです！！<br>携帯電話からは、下のQRコードを読み込めば、登録画面にアクセスできます！<br>携帯のアドレスをご利用の方は、メール拒否設定の解除又は、ドメイン指定受信の設定（speed-speed.comの設定）をお願いします。<br>メールが受信されない場合があります。</p>
          <div class="submit"><input type="submit" onclick="location.href='mailto:<?= $mailmagazine_subscription_order_email_address_of_shop ?>'" value=" メールマガジンに登録する"></div>
        </div> -->
        <!--div class="content-box">
    	<h1><span class="sub-attend">QRコードで簡単登録</span></h1>
      <div><img src="/img/<?= $shop->name_en ?>/mailmagazine_qr.jpg"></div>
      <p>左側のQRコードを読み込みますと メルマガ登録ページにジャンプします。<br>QRコード対応の携帯電話より読み取ってください。<br>
携帯電話のメールアドレスにてご購読の場合、<br>登録前に ドメイン指定受信の解除、又は”speed-speed.com”の許可リスト登録を行って下さい。</p>
    </div-->
        <!-- <div class="content-box" id="p1">
          <h3><span class="sub-attend">メルマガの解除</span></h3>
          <p>登録しているメルマガを解除する際も、下のボタンを押してメールを送信するだけです。<br>またのご利用をお待ちしております。</p>
          <div class="submit"><input type="submit" onclick="location.href='mailto:<?= $mailmagazine_subscription_cancel_email_address_of_shop ?>'" value=" メールマガジンを解除する"></div>
        </div> -->
        <div class="content-box" id="p1">
          <h3><span class="sub-attend">メルマガの解除</span></h3>
          <p>ご登録のメールアドレスをご入力の上、「解除」ボタンを押して下さい。<br>
            「メールマガジン会員の登録解除確認メール」メールをお送りします。<br>
            24時間以内にメール内のURLから手続きを行って頂くことで、ご登録を解除します。</p>
          <!----------------------- ACメーラー ----------------------->
          <form action="http://tribe-webtest.xyz/acmailer/reg.cgi" method="post" name="form2" class="acm-wrap acm-remove-wrap">
            <div class="mm-form-ttl">メルマガ登録解除</div>
            <div class="flex">
              <div class="mm-form-item">メールアドレス</div>
              <div class="mm-form-item"><input type="text" name="email" value="" style="width:  300px"></div>
              <input type="submit" value="解除" name="submit" class="mm-form-submit">
              <input type="hidden" name="reg" value="del">
              <input type="hidden" name="encode" value="文字コード">
            </div>
          </form>
          <!-----------------------///////////////////ACメーラー ----------------------->
        </div>

        <div class="content-box">
          <h3><span class="sub-attend">出勤メルマガ</span></h3>
          <p>お気に入りのあの子の出勤をガッチリおさえる！<br>あらかじめ指定した女の子が出勤すると、あなたの元にメールを配信！<br>お店で出勤を確認する手間が省けます！<br>お気に入りの女の子がいれば、何人でも登録OK！<br>携帯のアドレスをご利用の方は、メール拒否設定の解除又は、ドメイン指定受信の設定（speed-speed.comの設定）をお願いします。<br>メールが受信されない場合があります。</p>
          <form method="post" action="mailmagazine_subscription_order_of_girl_attendance_confirm.php">
            <table class="gail_magazine content">
              <tr>
                <th>女の子</th>
                <td class="size2">
                  <select name="girl_id">
                    <option value="">選択して下さい。</option>
                    <?php foreach ($girls as $girl) : ?>
                      <option value="<?= $girl->id ?>"><?= $girl->name ?></option>
                    <?php endforeach; ?>
                  </select>
                </td>
              </tr>
              <tr>
                <th>メールアドレス</th>
                <td>
                  <input type="text" value="" name="email_address">
                </td>
              </tr>
              <tr>
                <th>送信を希望しない時間帯</th>
                <td>
                  <input type="hidden" name="h_08_11" value="1">
                  <input type="hidden" name="h_11_13" value="1">
                  <input type="hidden" name="h_13_16" value="1">
                  <input type="hidden" name="h_16_19" value="1">
                  <input type="hidden" name="h_19_21" value="1">
                  <input type="hidden" name="h_21_23" value="1">
                  <input type="hidden" name="h_23_08" value="1">
                  <label for="h_08_11"><input type="checkbox" id="h_08_11" value="0" name="h_08_11"> 早朝8時～11時</label>
                  <label for="h_11_13"><input type="checkbox" id="h_11_13" value="0" name="h_11_13"> 昼11時～13時</label>
                  <label for="h_13_16"><input type="checkbox" id="h_13_16" value="0" name="h_13_16"> 昼13時～16時</label>
                  <label for="h_16_19"><input type="checkbox" id="h_16_19" value="0" name="h_16_19"> 夕方16時～19時</label>
                  <label for="h_19_21"><input type="checkbox" id="h_19_21" value="0" name="h_19_21"> 夜19時～21時</label>
                  <label for="h_21_23"><input type="checkbox" id="h_21_23" value="0" name="h_21_23"> 夜21時〜夜23時</label>
                  <label for="h_23_08"><input type="checkbox" id="h_23_08" value="0" name="h_23_08"> 夜23時以降</label>
                </td>
              </tr>
              <tr>
                <th>送信を希望しない曜日</th>
                <td>
                  <input type="hidden" name="w_0" value="1">
                  <input type="hidden" name="w_1" value="1">
                  <input type="hidden" name="w_2" value="1">
                  <input type="hidden" name="w_3" value="1">
                  <input type="hidden" name="w_4" value="1">
                  <input type="hidden" name="w_5" value="1">
                  <input type="hidden" name="w_6" value="1">
                  <label for="w_0"><input type="checkbox" id="w_0" value="0" name="w_0">日曜</label>
                  <label for="w_1"><input type="checkbox" id="w_1" value="0" name="w_1">月曜</label>
                  <label for="w_2"><input type="checkbox" id="w_2" value="0" name="w_2">火曜</label>
                  <label for="w_3"><input type="checkbox" id="w_3" value="0" name="w_3">水曜</label>
                  <label for="w_4"><input type="checkbox" id="w_4" value="0" name="w_4">木曜</label>
                  <label for="w_5"><input type="checkbox" id="w_5" value="0" name="w_5">金曜</label>
                  <label for="w_6"><input type="checkbox" id="w_6" value="0" name="w_6">土曜</label>
                </td>
              </tr>
            </table>
            <input type="hidden" name="shop_id" value="<?= $shop->id ?>">
            <input type="hidden" name="creator_id" value="1">
            <div class="submit"><input type="submit" value=" 出勤メルマガに登録する"></div>
          </form>
        </div>
        <div class="content-box">
          <h3><span class="sub-attend">出勤メルマガの確認・解除</span></h3>
          <p>確認・解除用のメールが届きます。<br>メールに記載しているURLをクリック後、解除する女の子を選択してください。</p>
          <form method="post" action="mailmagazine_subscription_cancel_of_girl_attendance_finish.php">
            <table class="gail_magazine content">
              <tr>
                <th>メールアドレス</th>
                <td><input type="text" value="" name="email_address"></td>
              </tr>
            </table>
            <input type="hidden" name="shop_id" value="<?= $shop->id ?>">
            <div class="submit"><input type="submit" value=" 確認・解除"></div>
          </form>
        </div>
      </div>
      <!-- /main-content -->
    </div>
    <!-- /content -->

    <!-- footer -->
    <?php include_once(APPPATH . 'views/shop/footer.php'); ?>
    <!-- /footer -->

  </div>
</body>

</html>