<?php
mb_language("Japanese");
mb_internal_encoding("UTF-8");

$to = "shougo_honma@l-ife.co.jp"; // ← 自分のドメインのアドレスに変更する
$name = htmlspecialchars($_POST["name"], ENT_QUOTES);
$email = htmlspecialchars($_POST["email"], ENT_QUOTES);
$message = htmlspecialchars($_POST["message"], ENT_QUOTES);

$subject = "【お問い合わせ】$name 様より";
$body = "お名前：$name\nメールアドレス：$email\n\n---\n$message";
$headers = "From: $email";

if (mb_send_mail($to, $subject, $body, $headers)) {
    echo "送信が完了しました。ありがとうございました。";
} else {
    echo "送信に失敗しました。";
}
?>