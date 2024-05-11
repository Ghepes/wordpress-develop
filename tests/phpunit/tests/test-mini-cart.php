<?php

use WP_UnitTestCase;

class MiniCartTest extends WP_UnitTestCase
{

    function setUp()
    {
        parent::setUp();

        // Set up global vars.
        global $woocommerce;

        // Mock WC() to return woocommerce instance.
        $woocommerce = $this->getMockBuilder('WC_Data')->getMock();
    }

    function test_mini_cart_empty()
    {
        $woocommerce->cart = $this->getMockBuilder('WC_Cart')->getMock();
        $woocommerce->cart->expects($this->once())->method('is_empty')->willReturn(true);

        ob_start();
        include 'woocommerce/cart/mini-cart.php';
        $output = ob_get_clean();

        $this->assertContains('No products in the cart', $output);
    }

    function test_mini_cart_not_empty()
    {
        // Mock cart data.
        $cart_item = array(
            'data' => $this->getMockBuilder('WC_Product')->getMock(),
            'quantity' => 1
        );

        $woocommerce->cart = $this->getMockBuilder('WC_Cart')->getMock();
        $woocommerce->cart->expects($this->once())->method('is_empty')->willReturn(false);
        $woocommerce->cart->expects($this->once())->method('get_cart')->willReturn(array($cart_item));

        ob_start();
        include 'woocommerce/cart/mini-cart.php';
        $output = ob_get_clean();

        $this->assertNotContains('No products in the cart', $output);
        $this->assertContains('mini_cart_item', $output);
    }
}
