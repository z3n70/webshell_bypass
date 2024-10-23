<?php


function encrypt($plaintext, $key) {
    $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('BF-CBC'));
    $ciphertext = openssl_encrypt($plaintext, 'BF-CBC', $key, OPENSSL_RAW_DATA, $iv);
    return base64_encode($iv . $ciphertext);
}


function decrypt($ciphertext, $key) {
    $ciphertext = base64_decode($ciphertext);
    $iv_length = openssl_cipher_iv_length('BF-CBC');
    $iv = substr($ciphertext, 0, $iv_length);
    $ciphertext = substr($ciphertext, $iv_length);
    return openssl_decrypt($ciphertext, 'BF-CBC', $key, OPENSSL_RAW_DATA, $iv);
}


$plaintext = 'Teks yang akan dienkripsi menggunakan Blowfishasdnbashdgasjhdgasjhgd a agsjdhgasj dgajhg jasgdjh gajhsg djahsgd jahsgdjahsg jdhasgdj ahsgdj ahsgdjhag jdags gaj gsjdgasj hgasjh gjasdg jashdg jahsgd jasgdjash gjdahsg jahsgd jasd.';
$key = 'KunciRahasia'; // Kunci rahasia yang digunakan

$ciphertext = encrypt($plaintext, $key);
$decrypted_text = decrypt($ciphertext, $key);

echo "Plaintext: $plaintext\n";
echo "Ciphertext: $ciphertext\n";
echo "Decrypted text: $decrypted_text\n";

?>

