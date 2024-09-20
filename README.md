# php-openssl-encrypt

Hidden commands using OpenSSL

POST 内容を秘密鍵、公開鍵を使用して暗号、複合化して通信を行う。

SSL に対応していないサイトであったり、WAF による監視を回避するために使用。

また、複合化できない場合は処理を中断することで認証としても使用可能。

server.php でのスクリーンショット

![img/image.png](img/image.png)

```sh
$ php key-gen.php
```

を実行して生成された鍵を server.php と、client.php の変数に書き換えて使用してください。

はまりどころとして、`openssl_public_encrypt()`があまり大きいデータを暗号化できないので固定長で分割してやる必要がある。

仕様上デバッグがしにくいので、server.php側でclient.phpのHTTPステータスコードが200でなければそのまま画面に表示するようにする。

```php
if (intval($status) !== 200) {
    die('Client Error: ' . $status . ' ' . $encryptedData);
}
```