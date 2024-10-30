<?php
Class magazakapamaget {
	
	private $magazakapama_options;
	private $day_number;
	private $magazakapama_day;
	private $magazakapama_notification;

	
	public function __construct() {
		
		$this->magazakapama_options = get_option( 'magazakapama_options' );
		date_default_timezone_set($this->magazakapama_options[0][2]);
		$this->day_number = date('N', current_time( 'timestamp', 0 ) ) - 1;
		$this->magazakapama_day = $this->magazakapama_options[0][0][$this->day_number];
		$this->magazakapama_control();
		
	}
	
	public function magazakapama_control(){
		if( $this->magazakapama_day[0] == true) {
			
			for ($i = 1; $i <= 4; $i++) {
    			if(strlen($this->magazakapama_day[$i]) == 1) $this->magazakapama_day[$i] = '0'.$this->magazakapama_day[$i];
			}
			
			$notification_time = $this->magazakapama_day[1].":".$this->magazakapama_day[2]." - ".$this->magazakapama_day[3].":".$this->magazakapama_day[4];
			$opening_time = $this->magazakapama_day[1].$this->magazakapama_day[2];
			$closing_time = $this->magazakapama_day[3].$this->magazakapama_day[4];
			
			date_default_timezone_set($this->magazakapama_options[0][2]);
			$local_time =  date('Hi');
			
			if($local_time <= $opening_time or $local_time > $closing_time ) {

				if( $this->magazakapama_options[0][1] != '' ){
					
					$this->magazakapama_notification = str_replace ('[tstamp]', $notification_time, $this->magazakapama_options[0][1]);
					
					add_action( 'woocommerce_before_add_to_cart_button', array( $this, 'magazakapama_show' ), 10 );
					add_action( 'woocommerce_review_order_before_payment', array( $this, 'magazakapama_show' ), 10 );
					
				}
				
				add_action( 'woocommerce_after_single_product', array( $this, 'magazakapama_disable' ), 10 );
				add_action( 'woocommerce_proceed_to_checkout', array( $this, 'magazakapama_disable' ), 10 );
				add_action( 'woocommerce_review_order_before_submit', array( $this, 'magazakapama_disable' ), 10 );
				
				
			}
		}
		return false;
	}
	
	function magazakapama_show() {

		echo "<div class='magazakapama_show'> ".$this->magazakapama_notification." </div>";
	
	}
	
	function magazakapama_disable() {

		echo"<style> 
			.woocommerce li.product .entry-header .button, 
			.woocommerce-page li.product .entry-header .button, 
			.woocommerce .quantity, 
			.woocommerce-page .quantity, 
			.woocommerce .single_add_to_cart_button, 
			.woocommerce-page .single_add_to_cart_button,
			.woocommerce-page .checkout-button,
			.woocommerce #payment
			{ 
				display: none !important; 
			} 
		</style>";

	}

}