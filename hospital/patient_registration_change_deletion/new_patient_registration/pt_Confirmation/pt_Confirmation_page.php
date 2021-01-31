<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><!--イイ感じに携帯でも縮小してくれる-->
    <meta http-equiv="X-UA-Compatible" content="ie=edge"><!--IEでもいい感じに表示してくれる-->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 
    <!-- Bootstrap Javascript(jQuery含む) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>    
   

    <link rel="stylesheet" href="css/style.css">

   <!--<style>
    *{
      outline: 1px solid #ff0000;
    }
    </style> -->


    <title></title><!--サイトのバータイトルを　　入力！！！-->

  </head>
  
  <body>
 

    <?php /*患者情報取得欄 */
    /*患者名前*/
    $pt_id = $_POST['pt_id']; //患者ＩＤ

    /*患者名前*/
    $kanji_lastname = $_POST['kanji_last_name']; //漢字姓
    $kanji_name = $_POST['kanji_name']; //漢字名前
    $kata_lastname = $_POST['kata_last_name']; //カタカナ姓
    $kata_name = $_POST['kata_name']; //カタカナ名前

    /*生年月日*/
    $birthday = $_POST['birthday'];

    /*性別*/
    $sex = $_POST['sex'];

    /*メールアドレス*/
    $mail_address = $_POST['mail_address'];

    
        /*共通クラス作成 */
        trait Pt_data{
          public $kanji_lastnam;
          public $kanji_name;
          public $kata_lastname;
          public $kata_name;
          public $birthday;
          public $sex;
          public $mail_address;

          function __construct($a,$b){
            $this->kanji_lastname = $a;
            $this->kanji_name = $b;
           // $this->kata_lastname = $a;
           // $this->kata_name = $b;
           // $this->birthday = $a;
              //$this->mail_address = $b;
              //$this->sex = $a;
          }
            public function call_patient(){
              return "<table>
                        <tr>
                          <th>
                            <h6>患者姓　(漢字)</h6>
                          </th>
                          <th>
                            <h6>患者名前　(漢字)</h6>
                          </th>
                        <tr>
                          <td>
                            <h3>$this->kanji_lastname</h3>
                          </td>
                          <td>
                            <h3>$this->kanji_name</h3>
                          </td>
                        </tr>
                      </table>";
            }
        }


          /*漢字表記クラス*/


          class Pt_kanji{
            use Pt_data;
          }
          $pt_name_kanji = new Pt_kanji($kanji_lastname,$kanji_name);
          //echo $pt_name_kanji->  call_patient();


          /*カタカナ表記クラス*/


          class Pt_kata{
            use Pt_data;
            function __construct($a,$b){
              //$this->kanji_lastname = $a;
              //$this->kanji_name = $b;
              $this->kata_lastname = $a;
              $this->kata_name = $b;
              //$this->birthday = $a;
              //$this->mail_address = $b;
              //$this->sex = $a;
             }
              public function call_patient(){
                return "<table>
                          <tr>
                            <th>
                              <h6>患者姓　(カタカナ)</h6>
                            </th>
                            <th>
                              <h6>患者名前　(カタカナ)</h6>
                            </th>
                          <tr>
                            <td>
                              <h3>$this->kata_lastname</h3>
                            </td>
                            <td>
                              <h3>$this->kata_name</h3>
                            </td>
                          </tr>
                        </table>";
                }
            }
      $pt_name_kata = new Pt_kata($kata_lastname,$kata_name);
      //echo $pt_name_kata->  call_patient();



      /*生年月日・メールアドレス表記クラス*/



      class Pt_birthday_mail_address{
        use Pt_data;
          function __construct($a,$b){
            //$this->kanji_lastname = $a;
            //$this->kanji_name = $b;
            //$this->kata_lastname = $a;
            //$this->kata_name = $b;
            $this->birthday = $a;
            $this->mail_address = $b;
            //$this->sex = $a;
          }
              public function call_patient(){
                return "<table>
                          <tr>
                            <th>
                              <h6>生年月日</h6>
                            </th>
                            <th>
                              <h6>メールアドレス</h6>
                            </th>
                          <tr>
                            <td>
                              <h3>$this->birthday</h3>
                            </td>
                            <td>
                              <h3>$this->mail_address</h3>
                            </td>
                          </tr>
                        </table>";
                }
              }
          $pt_birth_mail = new Pt_birthday_mail_address($birthday,$mail_address);
          //echo $pt_birth_mail->call_patient();


      /*性別表記クラス*/

      class Pt_sex{
        use Pt_data;
          function __construct($a){
            //$this->kanji_lastname = $a;
            //$this->kanji_name = $b;
            //$this->kata_lastname = $a;
            //$this->kata_name = $b;
            //$this->birthday = $a;
            //$this->mail_address = $b;
            $this->sex = $a;
            }

            public function call_patient(){
              return "<table>
                        <tr>
                          <th>
                            <h6>性別</h6>
                          </th>
                          <th>
                            
                          </th>
                        <tr>
                          <td>
                            <h3>$this->sex</h3>
                          </td>
                          <td>
                            
                          </td>
                        </tr>
                      </table>";
              }
            }

        $pt_sex = new Pt_sex($sex);
        //echo $pt_sex->call_patient();

      /*クラス作成 終了*/
    ?>




    <!--本文構成-->
    <div class="wrapper">

<header>
  <h1>患者登録情報確認</h1>
  <h2>適用する情報は下記の通りです</h2>
</header>

<main>

    <section class="pt-id">
      <?php
      echo "<h3>患者ＩＤ：" .$pt_id ."</h3>";
      ?>
    </section>
  
    <section class="pt-name-kanji">
      <?= $pt_name_kanji->call_patient();?>
    </section>

    <section class="pt-name-katakana">
      <?= $pt_name_kata->call_patient(); ?>      
    </section>

    <section class="pt-other">
      <?= $pt_birth_mail->call_patient(); ?>
     </section>
      <?= $pt_sex->call_patient(); ?>
    <section class="pt-sex">
     
    </section>

    <section class = "nyuuryoku">
      <div class = "apply">
        <h2>内容を確認して情報を登録</h2>
        
          <button type = "submit" class = "btn btn-primary btn-danger btn-lg disabled" onclick = "location.href =''">
            内容を登録
          </button>
        </div>
    </section>

  </main>
    
    <footer>
        <section class="anything-top"><!--各ボタン-->
            <table>
              <tr>
                <td>
                  <form action="../../../hospital top.php">
                  <button type="button" class="btn btn-outline-info" onckick="location.href='../../../hospital_top.php">設定画面トップ</button>
                  </form>
                </td>
                <td>
                    <button type="button" class="btn btn-outline-info">医療機関HPトップ</button>
                </td>
              </tr>
              <tr>
              <td>
                  <a href="../../../reservation top .html"><button type="button" class="btn btn-outline-info">ログイン画面へ</button></a>
                </td>
              </tr>
            </table>
          </section>

         

      </footer>



   

    
    <section>
      
    </section>

  
    



  </div>
  </body>

</html><!--ここでhtmlが終わるよ-->











