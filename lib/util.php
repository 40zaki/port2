<?php
    // XSS対策のためのHTMLエスケープ
    function es($data,$charset = 'utf-8'){
        // dataが配列のとき
        if(is_array($data)){
            // 再帰呼び出し
            return array_map(__METHOD__,$data);
        }   else {
            // HTMLエスケープを実行
            return htmlspecialchars($data,ENT_QUOTES,$charset);
        }
    }

    //入力値に不正なデータがないかなどをチェックする関数
    function checkInput($var){
    if(is_array($var)){
      return array_map('checkInput', $var);
    }else{
      //NULLバイト攻撃対策
      if(preg_match('/\0/', $var)){  
        die('不正な入力です。');
      }
      //文字エンコードのチェック
      if(!mb_check_encoding($var, 'UTF-8')){ 
        die('不正な入力です。');
      }
      //改行、タブ以外の制御文字のチェック
      if(preg_match('/\A[\r\n\t[:^cntrl:]]*\z/u', $var) === 0){  
        die('不正な入力です。制御文字は使用できません。');
      }
      return $var;
    }
  }