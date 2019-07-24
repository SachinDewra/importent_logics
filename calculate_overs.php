public function calculation_over()
	{
		$balls = 80; //Total Balls
		$balls2 = 80; //Total Balls Again in other variable
		$balls -= $balls % 6; //Make value divisible by 6
		$total_overs = $balls / 6; // Divide it from 6
		$f = $balls2 % 6; //get module from total balls 
		echo $total_overs_calculated = (float)$total_overs.'.'.$f; //over detail comes
	}
  
  
//Thanks SDSA
