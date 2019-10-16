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

   <style>
    *{
      outline: 1px solid #ff0000;
    }
    </style>


    <title></title><!--サイトのバータイトルを　　入力！！！-->

  </head>
  
  <body>
  <div class="wrapper">

    <header>
    <h1>患者登録情報確認</h1>
    <h2>適用する情報は下記の通りです</h2>
    </header>
    
    <main>

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

    ?>
    <section class="pt-id">
      <?php
      echo "<h3>患者ＩＤ：" .$pt_id ."</h3>";
      ?>
    </section>
  

<table>
  <tr>
    <th>
      <h3>患者姓(漢字)</h3>
    </th>
    <th>
      <h3>患者名前(漢字)</h3>
    </th>
  <tr>
    <td>
      <h3>$kanji_lastname</h3>
    </td>
    <td>
      <h3>$kanji_name</h3>
    </td>
  </tr>
  <tr>
    <th>
      <h3>患者姓(カタカナ)</h3>
    </th>
    <th>
      <h3>患者名前(カタカナ)</h3>
    </th>
  </tr>
  <tr>
    <td>
      <h3>$kata_lastname</h3>
    </td>
    <td>
      <h3>$kata_name</h3>
    </td>
  </tr>
  


</table>



    




    </main>
    <footer>
    



    </footer>

    
    <section>
      
    </section>

  
    



  </div>
  </body>

</html><!--ここでhtmlが終わるよ-->











