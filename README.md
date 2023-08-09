# Bitcoin Wallet Checksum

## Presentation

When it comes to transacting with Bitcoin, a small typo can mean sending funds into the abyss. Mistakes can be costly, and with the irreversible nature of blockchain transactions, one error could lead to a significant loss. This simple PHP script addresses this very issue by providing an additional layer of validation.

The script quickly generate a 6-digit checksum for any Bitcoin wallet address. This checksum can be shared alongside the wallet address, allowing the sender to validate the address before making the transaction.

## How to Use

1. Clone this repository: `git clone https://github.com/yrimbaud/wallet-checksum.git`
2. Navigate to the repository folder: `cd wallet-checksum`
3. Open the file `generateWalletChecksum.php`, locate the variable `$wallet` and replace it with a Bitcoin wallet address
4. Run the desired script with PHP: `php generateWalletChecksum.php`

## Troubleshooting

If you encounter issues while using this project, please check the following:
- Make sure you have PHP installed and properly configured on your system.
- Ensure that the scripts have the necessary permissions to execute.
- Verify that the input to the script meets the requirements of a Bitcoin wallet address.

If the issue persists, please open an issue on GitHub.

## Supporting The Project

If you find this project beneficial and appreciate its contributions, you might consider offering your support. One of the ways you can do this is through a Bitcoin donation!

Here is the Bitcoin address:
`bc1q3pc0ftvdew3e87k07d00k8tqj7ll924hgy69n6`

By donating Bitcoin, you are not only providing tangible assistance, but also endorsing the use of decentralized digital currencies. This encourages further innovation and freedom in the financial sector, aligning with the open source principles that guide this project.

Every donation, big or small, is deeply appreciated and will be used to further improve and maintain this project. Your support helps dedicate more time and resources, ensuring the project's continuity and enhancement!

## Author

This project is maintained by Yann Rimbaud ([yrimbaud](https://github.com/yrimbaud)).

## Licence

This project is licensed under the MIT License.
