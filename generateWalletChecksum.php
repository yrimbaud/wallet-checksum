<?php
function generateWalletChecksum($wallet) {
    $wallet_hash = hash('sha512', $wallet, true);
    $intVal = hexdec(bin2hex(substr($wallet_hash, 0, 8)));
    $checksum = substr($intVal, -6);
    return $checksum;
}

$wallet = "1KbhVL8dXvCu7WSdpYTKVdjUCg3k5gkw94"; // Replace the string by a Bitcoin wallet
$checksum = generateWalletChecksum($wallet);

echo 'The 6-digit verification for the Bitcoin address <em>'.$wallet.'</em> is: '.$checksum;
?>
