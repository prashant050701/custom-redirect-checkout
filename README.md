# Custom Redirect to Checkout with Single Product

A WooCommerce plugin that clears the cart, adds a specified product, and redirects the customer directly to the checkout page. This ensures only the specified product is in the cart when the customer proceeds to checkout.

## Features

- Automatically clears the existing cart.
- Adds a specific product to the cart based on the URL parameter.
- Redirects the customer straight to the checkout page with the selected product.

## Installation

1. Download the plugin as a `.zip` file or clone the repository.
2. Upload the plugin to your WordPress installation:
   - Navigate to **Plugins > Add New** in the WordPress dashboard.
   - Click **Upload Plugin** and select the `.zip` file, or upload the folder via FTP to `wp-content/plugins/`.
3. Activate the plugin through the **Plugins** menu in WordPress.

## Usage

To use the plugin, simply construct a URL like the following:
https://your-site.com/checkout/?add-to-cart=PRODUCT_ID

- Replace `PRODUCT_ID` with the actual WooCommerce product ID you want to add to the cart.

## Example
https://your-site.com/checkout/?add-to-cart=183

This URL will:
- Empty the current cart.
- Add the product with ID `183` to the cart.
- Redirect the customer to the checkout page with only that product.
- This way product quantity will not increase on reload.


This plugin is open-source and released under the [MIT License](LICENSE).



