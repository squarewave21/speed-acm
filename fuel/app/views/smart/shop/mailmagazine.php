<!DOCTYPE html>
<html lang="ja">

<head>
  <!-- meta -->
  <meta charset="UTF-8">
  <title>メールマガジン | 大阪の風俗 ホテヘル(ホテルヘルス) スピード</title>
  <meta name="keywords" content="大阪,風俗,ホテヘル,ホテルヘルス,スピード">
  <meta name="description" content="大阪・風俗・最大級のホテヘル(ホテルヘルス)グループSPEED(スピード)のメールマガジンページです。大阪で風俗をお探しなら在籍女の子数、女の子の可愛さ、料金全てにおいてお客様に満足いただけること間違いなしの当店へ是非一度ご来店下さい。">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1" />
  <meta name="format-detection" content="telephone=no" />
  <link rel="canonical" href="http://speed-speed.com/group/mailmagazine.php">
  <link rel="alternate" type="application/rss+xml" title="大阪のホテヘル スピードグループ 風俗求人お役立ち情報" href="/RSS.rss">
  <!-- /meta -->

  <!-- スタイルシートの指定 -->
  <link rel='stylesheet' href='http://speed-speed.com/smart/css/common/reset.css' media='all'>
  <link rel='stylesheet' href='http://speed-speed.com/smart/css/common/design.css' media='all'>
  <link rel='stylesheet' href='http://speed-speed.com/smart/css/group/common.css' media='all'>
  <link rel='stylesheet' href='http://speed-speed.com/smart/css/group/mailmagazine.css' media='all'>
  <style>
    .form-space {
      margin: 0 20px 20px;
    }

    .ttl-pink {
      background: #FF238F;
      padding: 8px 6px;
      margin-bottom: 10px;
      display: inline-block;
      width: 100%;
    }

    .bottom-space {
      margin-bottom: 4px;
    }

    .inline-blk {
      display: inline-block;
    }

    .input-form {
      width: 300px;
      padding: 0 7px;
    }

    .btn-pink {
      height: 25px;
      width: 65px;
      cursor: pointer;
      background: #ff00a6;
      color: #FFF;
      border: none;
      text-align: center;
      border-radius: 4px;
      margin-left: 3px;
    }
  </style>
  <!-- ジャバスクリプトの指定 -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
  <script src="/smart/js/iscroll.js"></script>
  <script src="/smart/js/footer.js"></script>
  <script>
    $(document).ready(function() {
      /* 店舗リスト アコーディオン */
      $('.shop-list div').hide();
      $('.shop-list h1').click(function(e) {
        $(this).toggleClass("active");
        $(this).next("div").slideToggle();
      });
      /* ページトップ */
      $('#pagetop').hide();
      $(window).scroll(function() {
        if ($(this).scrollTop() > 50) {
          $('#pagetop').fadeIn();
        } else {
          $('#pagetop').fadeOut();
        }
      });
      $('#pagetop').click(function() {
        $('html,body').animate({
          scrollTop: 0
        }, 300);
        return false;
      });
    });
  </script>
</head>

<body>
  <?php include_once(APPPATH . 'views/analyticstracking.php'); ?>
  <div id="wrapper">

    <!-- header -->
    <?php include_once(APPPATH . 'views/smart/shop/header.php'); ?>
    <!-- /header -->

    <!-- content -->
    <div id="contenter">
      <!-- main-content -->
      <div class="section">
        <h2><span><img src="/smart/img/common/h2_mailmagzine_c.jpg" alt="メールマガジン"></span></h2>
        <!-- <div class="content-box">
          <h3><span class="sub-attend">メルマガ会員募集中</span></h3>
          <p>登録は簡単！下のボタンを押して、空メールを配信するだけです！！<br>携帯電話からは、下のQRコードを読み込めば、登録画面にアクセスできます！<br>携帯のアドレスをご利用の方は、メール拒否設定の解除又は、ドメイン指定受信の設定（speed-speed.comの設定）をお願いします。<br>メールが受信されない場合があります。</p>
          <div class="submit"><input type="submit" onclick="location.href='mailto:<?= $mailmagazine_subscription_order_email_address_of_shop ?>'" value=" メールマガジンに登録する"></div>
        </div> -->

        <div class="content-box">
          <h3><span class="sub-attend" style="margin: 20px 20px 0;">メルマガ会員募集中</span></h3>
          <p style="line-height: 1.3;">配信を希望するメールアドレスをご入力の上、「登録」ボタンを押して下さい。<br>
            「メールマガジン会員登録のご案内」メールをお送りします。<br>
            24時間以内にメール内のURLから手続きを行って頂くことで、ご登録が完了します。</p>
          <!----------------------- ACメーラー ----------------------->
          <form action="http://tribe-webtest.xyz/acmailer/reg.cgi" method="post" name="form2" class="acm-wrap form-space">
            <div class="mm-form-ttl ttl-pink">メルマガ登録</div>
            <div class="flex">
              <div class="mm-form-item">メールアドレス</div>
              <div class="mm-form-item inline-blk"><input type="text" name="email" value="" class="input-form"></div>
              <div class="mm-form-item inline-blk">
                <input type="hidden" name="reg" value="add">
                <input type="submit" value="登録" class="mm-form-submit btn-pink" style="border-radius: 4px;">
                <input type="hidden" name="encode" value="文字コード">
                <input type="hidden" name="checkbox_list" value="">
              </div>
            </div>
          </form>
          <!-----------------------///////////////////ACメーラー ----------------------->
        </div>


        <!--div class="content-box">
    	<h1><span class="sub-attend">QRコードで簡単登録</span></h1>
      <div><img src="/img/<?= $shop->name_en ?>/mailmagazine_qr.jpg"></div>
      <p>左側のQRコードを読み込みますと メルマガ登録ページにジャンプします。<br>QRコード対応の携帯電話より読み取ってください。<br>
携帯電話のメールアドレスにてご購読の場合、<br>登録前に ドメイン指定受信の解除、又は”speed-speed.com”の許可リスト登録を行って下さい。</p>
    </div-->
        <!-- <div class="content-box">
          <h3><span class="sub-attend">メルマガの解除</span></h3>
          <p>登録しているメルマガを解除する際も、下のボタンを押してメールを送信するだけです。<br>またのご利用をお待ちしております。</p>
          <div class="submit"><input type="submit" onclick="location.href='mailto:<?= $mailmagazine_subscription_cancel_email_address_of_shop ?>'" value=" メールマガジンを解除する"></div>
        </div> -->
        <div class="content-box" id="p1">
          <h3><span class="sub-attend" style="margin: 20px;">メルマガの解除</span></h3>
          <!----------------------- ACメーラー ----------------------->
          <form action="http://tribe-webtest.xyz/acmailer/reg.cgi" method="post" name="form2" class="acm-wrap acm-remove-wrap form-space">
            <div class="mm-form-ttl ttl-pink">メルマガ登録解除</div>
            <div class="flex">
              <div class="mm-form-item">メールアドレス</div>
              <div class="mm-form-item inline-blk"><input type="text" name="email" value="" class="input-form"></div>
              <input type="submit" value="解除" name="submit" class="mm-form-submit btn-pink" style="border-radius: 4px;">
              <input type="hidden" name="reg" value="del">
              <input type="hidden" name="encode" value="文字コード">
            </div>
          </form>
          <!-----------------------///////////////////ACメーラー ----------------------->
        </div>
        <div class="content-box" id="p1">
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
          <h3><span class="sub-attend">出勤メルマガの解除</span></h3>
          <p>解除用のメールが届きます。<br>メールに記載しているURLをクリック後、解除する女の子を選択してください。</p>
          <form method="post" action="mailmagazine_subscription_cancel_of_girl_attendance_finish.php">
            <table class="gail_magazine content">
              <tr>
                <th>メールアドレス</th>
                <td>
                  <input type="text" value="" name="email_address">
                </td>
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

    <div id="pagetop">
      <a href="#">ページトップへ</a>
    </div>
    <!-- footer -->
    <?php include_once(APPPATH . 'views/smart/shop/footer.php'); ?>
    <!-- /footer -->

  </div>
  </div>
</body>

</html>