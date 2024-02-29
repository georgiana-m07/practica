<?php
class FrontendHooks{
	
	public function base_variables(){
		$CI =& get_instance();
		$this->output = & $CI->output;
		
		$output =$this->output->get_output();
		
		$output = str_replace('{YEAR}',date("Y"),$output);
		
	
		$site_url = SITE_URL;
		$base_url = BASE_URL;

		$output = str_replace('{BASE_URL}/',$base_url,$output);
		$output = str_replace('{BASE_URL}',$base_url,$output);
		$output = str_replace('{SITE_URL}',$site_url,$output);

		$this->output->set_output($output);
	}
}
?>