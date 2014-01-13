<?php

function begin() 
{
	@mysql_query("BEGIN");
}
function commit()
{
	@mysql_query("COMMIT");
}
function rollback()
{
	@mysql_query("ROLLBACK");
}
//---------------------------------------------------------------------------------------------------------------------------------
function copyFile($id, $path, $name){
	global $_FILES, $_POST;

	$file_name = "";

	if($_FILES[$name]['name'] != ""){
		$tmp = explode(".", basename($_FILES[$name]['name']));
	
		if(is_array($tmp) && count($tmp) == 2 ){
			$fname = $tmp[0] . "_" . $id . "." . $tmp[1];
			$uploadfile = $path . $fname;
		
			if (move_uploaded_file($_FILES[$name]['tmp_name'], $uploadfile)) {
				$file_name = $fname;
			} else {
			   	$file_name = "";
			}
		}
	}
	
	return $file_name;
}
//--------------------------------------------------------//
function redirectpage($extra){
	//	session_destroy();
		$host  = $_SERVER['HTTP_HOST'];
		$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		header("Location: http://$host$uri/$extra");
	}
//--------------------------------------------------------//	
function isUserLoggedIn(){
	Global $_SESSION;

	if(session_is_registered("sess_user_login") == false || $_SESSION["sess_user_login"] == false){
		return false;
	}else{
		return true;
	}
}
//--------------------------------------------------------//
function dateFormat($format, $dt){
	$x_arr  = explode("-",$dt);
	$x_time = mktime(0,0,0,$x_arr[1],$x_arr[2],$x_arr[0]);
	$x_dt   = date($format, $x_time);
	
	return $x_dt;
}
//--------------------------------------------------------//
function is_email_valid($email) { 
	if(!ereg("[0-9a-z]([-_.]?[0-9a-z])*@[0-9a-z]([-.]?[0-9a-z])*\\.[a-z]", $email)) {
		return false; 
	}else{
		return true; 
	}
}
//--------------------------------------------------------//
function is_Password_valid($Pwd) { 

	if($Pwd== ""){
		return false; 
	}else{
		if(strlen($Pwd)<6){
			return false; 
		}else{
			if(!ereg("([0-9])",$Pwd)){
				return false; 
			}elseif(!ereg("([a-zA-Z])",$Pwd)){
					return false; 
			}else{
				$chkPwd = $Pwd;
				 if(strlen(ereg_replace("([0-9])","",$chkPwd))<5){
				 	return false; 
				 }else{
					return true; 
				}
			}
			//}
		}
	} 
  
}
//--------------------------------------------------------//
function randomizer($length) { 
    $arr = array("1","2","3","4","5","6","7","8","9","0","q","w","e","r","t","y","u","i","o","p","a","s","d","f","g","h","j","k","l","z","x","c","v","b","n","m"); 
    srand((float) microtime() * 1000000); 
    for($i = $length; $i > 0; $i--) { 
        $str .= $arr[rand(0, sizeof($arr))];         
    } 
    return $str; 
} 
//--------------------------------------------------------//

function MaxValue($TableName,$FieldName,$where=""){
		if ($where==""){
			$Qry_MaxNo = "SELECT Max(" .$FieldName .") AS MaxId FROM " .$TableName; }
		else{
			$where = " WHERE ".$where;	
			$Qry_MaxNo = "SELECT Max(" .$FieldName .") AS MaxId FROM " .$TableName .$where; }
		
		$rslt_MaxNo = mysql_query($Qry_MaxNo);
		if (!$rslt_MaxNo) {
				$erro_Msg  = mysql_error();										
		}elseif(mysql_num_rows($rslt_MaxNo) <= 0){
				$erro_Msg = 0;			
		}else{
			while ($row = mysql_fetch_array($rslt_MaxNo, MYSQL_ASSOC)) {
				$Max_No = $row["MaxId"];
			}
			if($Max_No == NULL){
					$Max_No = 1;
			}else{
					$Max_No = $Max_No+1;
			}
			return $Max_No;
		}
		
}
//--------------------------------------------------------//
function checkUniqueValue($TableName,$FieldName,$FieldValue,$where=""){
		if ($where==""){
			$Qry_UniqueValue = "SELECT ".$FieldName." FROM ".$TableName." WHERE " .$FieldName."='".$FieldValue."'" ; }
		else{
			$where = " AND ".$where;	
			$Qry_UniqueValue = "SELECT ".$FieldName." FROM ".$TableName." WHERE " .$FieldName."='".$FieldValue."'".$where; }
		
		$rslt_UniqueValue = mysql_query($Qry_UniqueValue);
		if (!$rslt_UniqueValue) {
			return -2;										
		}else{
			return mysql_num_rows($rslt_UniqueValue);			
		}
		
}
//--------------------------------------------------------//
function  SSNValidation($ssno) { 
	
	$tokens = "-";
	$fndaction = strtok($ssno,$tokens);
	$cnt =0;
	$Action = array();
	$is_ssn_Valid=true;
	
	while($fndaction){
			$Action[$cnt] = $fndaction;

			if ( !is_numeric($Action[$cnt]))
				$is_ssn_Valid=false;	
			$fndaction = strtok($tokens);
			$cnt++;
	}
	if (strlen($Action[0]) !=3 || 
		strlen($Action[1]) !=2 || 
		strlen($Action[2]) !=4 ||
		$cnt !=3 )		
		{ $is_ssn_Valid=false; }
		
	return $is_ssn_Valid;
   }

//--------------------------------------------------------//
function customdateFormat($date,$slccase){
	switch($slccase){
		case "dd/mm/yy":
			$year = substr($date,2,2);
			$month = substr($date,5,2);
			$day = substr($date,8,2);
			$rtnDate = $day ."/" . $month ."/" . $year;		
			break;
		case "dd/mm/yyyy":
			$year = substr($date,0,4);
			$month = substr($date,5,2);
			$day = substr($date,8,2);
			$rtnDate = $day ."/" . $month ."/" . $year;		
			break;
		case "mm/dd/yyyy":
			$year = substr($date,0,4);
			$month = substr($date,5,2);
			$day = substr($date,8,2);
			$rtnDate = $month."/" . $day ."/" . $year;		
			break;
		case "yyyy-mm-dd":
			$year = substr($date,6,4);
			$month = substr($date,3,2);
			$day = substr($date,0,2);
			$rtnDate = $year ."-" . $month ."-" .$day;		
			break;
	}
	return $rtnDate;
	
}	
//---------------------------------------------------------------------------------------------------------------------------------
function date_strFormat($p_Date,$d_Format )
	{
		if($p_Date !=""){
			if (is_string ( $p_Date )==true)
			{
				$oDate = new DateTime($p_Date);
				$StrDate = $oDate->format($d_Format);
				return $StrDate;
			}
			else
			{
				$StrDate = $p_Date->format($d_Format);
				return $StrDate;
			}
		}
	}
//---------------------------------------------------------------------------------------------------------------------------------
function get_Date($mdate,$format)
{
	$mdate=	date_strFormat($mdate,"Y-m-d");
	
	return date($format,mktime(0,0,0,get_Month($mdate),get_Day($mdate),get_Year($mdate)));
	
}
function get_Day($date)
{
	$day = substr($date,8,2);
	return $day;
}
function get_Month($date)
{
	
	$month = substr($date,5,2);
	return $month;
}
function get_Year($date)
{
	$year = substr($date,0,4);
	return $year;
}


function nextDate($p_Date)
{
	if (is_string ( $p_Date )==true)
	{
		$oDate = new DateTime($p_Date);
		$oDate->modify("+1 day");
		return $oDate;
	}
	else{
		$p_Date->modify("+1 day");
		return $p_Date;		
	}
}
//---------------------------------------------------------------------------------------------------------------------------------
function get_WeekofYear($p_Date)
{
	if (is_string ( $p_Date )==true)
	{
		$oDate = new Date($p_Date);
		$oDate = &new dateObj($oDate);
		return $oDate->week_of_year();
	}
	else{
		$oDate = new dateObj($p_Date);
		return $oDate->week_of_year();
	}
}
//---------------------------------------------------------------------------------------------------------------------------------
function addDate($p_Date,$nDay)
{
	if (is_string ( $p_Date )==true)
	{
		$oDate = new DateTime($p_Date);
		$oDate->modify("+".$nDay." day");
		return $oDate;
	}
	else{
		$p_Date->modify("+".$nDay." day");
		return $p_Date;		
	}
}
//---------------------------------------------------------------------------------------------------------------------------------
function FirstDateofAllweek($Month,$Year){
		$date = new Date();
		$Date_Calc = new Date_Calc();
		$date->setYear($Year);
		$date->setMonth($Month);
		$TotalWeek =$date->getWeeksInMonth();	
		$daysMonth =$date->getDaysInMonth();
		$i=1;
		$PassedDays = 0;
		while($i<=$TotalWeek){
			if(strlen($PassedDays)==1){
				$PassedDays = "0".$PassedDays;
			}
			if($i==1){
				$fstdayWeek = $Date_Calc->firstOfMonthWeekday($Month,$Year);
				$lastdayWeek = 7-$fstdayWeek;
				$PassedDays = $lastdayWeek+1;									
				$Firstdate[$i-1] = $Year."-".$Month."-01";
			}elseif($i==$TotalWeek){
				$remainDays = $daysMonth -$PassedDays;
				$curWeekDays +=($daysMonth-$curWeekDays);
				$Firstdate[$i-1] = $Year."-".$Month."-".$PassedDays;
			}else{
				$Firstdate[$i-1] = $Year."-".$Month."-".$PassedDays;
				$PassedDays += 7;
			}
				$i++;
			}
			return $Firstdate;
	}
	//---------------------------------------------------------------------------------------------------------------------------------
	function lastDateofAllweek($Month,$Year){
		$date = new Date();
		$Date_Calc = new Date_Calc();
		$date->setYear($Year);
		$date->setMonth($Month);
		$TotalWeek =$date->getWeeksInMonth();	
		$daysMonth =$date->getDaysInMonth();
		$i=1;
		$PassedDays = 0;
		while($i<=$TotalWeek){
			if(strlen($PassedDays)==1)$PassedDays = "0".$PassedDays;
			if($i==1){
				$fstdayWeek = $Date_Calc->firstOfMonthWeekday($Month,$Year);
				$lastdayWeek = 7-$fstdayWeek;
				$PassedDays = $lastdayWeek+1;
				if(strlen($lastdayWeek)==1)$lastdayWeek = "0".$lastdayWeek;	
				$Lastdate[$i-1] = $Year."-".$Month."-".$lastdayWeek;
			}elseif($i==$TotalWeek){
				$remainDays = $daysMonth -$PassedDays;				 
				if(strlen($remainDays)==1)$remainDays = "0".$remainDays;
				$curWeekDays +=($daysMonth-$curWeekDays);
				$Lastdate[$i-1] = $Year."-".$Month."-".$daysMonth;
			}else{
				$PassedDays += 7;
				$lastdayWeek = $PassedDays-1;
				if(strlen($lastdayWeek)==1) $lastdayWeek = "0".$lastdayWeek;
				$Lastdate[$i-1] = $Year."-".$Month."-".$lastdayWeek;
			}
				$i++;
			}
			return $Lastdate;
	}
//---------------------------------------------------------------------------------------------------------------------------------
	function DaysNameofMonth($Month,$Year){
		$date = new Date();
		$Date_Calc = new Date_Calc();
		$date->setYear($Year);
		$date->setMonth($Month);
		$NodaysMonth =$date->getDaysInMonth();
		$firstDate = $Year."-".$Month."-01";
		$date->setDate($firstDate);
		$daysName = array();
		for($i=0;$i<$NodaysMonth;$i++){
			$daysName[$i]= $date->getDayName(True,3);
			$getNextday = $date->getNextDay();
			$date->setDate($getNextday);
		}
		
		return $daysName;
		
	}
//---------------------------------------------------------------------------------------------------------------------------------

function TimeDiff($fstTime,$sndTime){
		$fstHour = (int)substr(TimeFormat($fstTime,"24"),0,2);
		$sndHour = (int)substr(TimeFormat($sndTime,"24"),0,2);
		$fstMinit = (int)substr(TimeFormat($fstTime,"24"),3,2);
		$sndMinit = (int)substr(TimeFormat($sndTime,"24"),3,2);
		
		$tmDiff = ($sndHour  * 60 +  $sndMinit )- ($fstHour * 60 +  $fstMinit);
		if ($tmDiff  < 0){
			$tmDiff = 24 * 60 +	$tmDiff;
		}
		
		$HourDiff = ($tmDiff- $tmDiff % 60)/60;
		$MinDiff = $tmDiff % 60;
		if(strlen($MinDiff)==1){
			$MinDiff = "0".$MinDiff;
		}
		$tmDiff = $HourDiff . ":" .$MinDiff;   
		return $tmDiff;

		
	}
//---------------------------------------------------------------------------------------------------------------------------------	
function AddTime($time1,$time2){
	$tokens=":";
	$fst = strtok($time1,$tokens);
	$cnt=0;
	$fstTime=array();
	while($fst!=""){
		$fstTime[$cnt]=$fst;
		$fst = strtok($tokens);
		$cnt++;
	}

	$tokens=":";
	$snd = strtok($time2,$tokens);
	$cnt=0;
	$sndTime=array();
	while($snd!=""){
		$sndTime[$cnt]=$snd;
		$snd = strtok($tokens);
		$cnt++;
	}

	$CaryHour=0;
	$TotalMinit = (int)$fstTime[1]+(int)$sndTime[1];
	if($TotalMinit>=60){
		if($TotalMinit==60){
			$TotalMinit=0;
			$CaryHour=1;
		}else{
			while($TotalMinit>=60){
				$TotalMinit = $TotalMinit-60;
				$CaryHour++;
			}
		}
	}

	$TotalHour = (int)$fstTime[0]+(int)$sndTime[0]+$CaryHour;
	return $TotalHour.":".$TotalMinit;
	
}
//-------------------------------------------------------------------------------------------------------------------------------
function newTimeFormat($xTotalTime='00:00')
{
	
	$tokens=":";
	$x = strtok($xTotalTime,$tokens);
	$cnt=0;
	$xTime=array();
	while($x!=""){
		$xTime[$cnt]=$x;
		if (strlen($xTime[$cnt])<2)
			$xTime[$cnt] = '0'.$xTime[$cnt];
			$x = strtok($tokens);
			$cnt++;
	}
	
	if (strlen($xTime[0])==0)
		$xTime[0]='00';
	
	if (strlen($xTime[1])==0)
		$xTime[1]='00';
		

	$xTotalTime=$xTime[0].':'.$xTime[1];
	
	
	return $xTotalTime;
}
//-------------------------------------------------------------------------------------------------------------------------------
	function TimeFormat($time,$format){
		switch($format){
			case "24" :
			
					$lenth = strlen($time);
					$timeDigit = substr($time,0,$lenth-3);
					$dayPeriod =  strtoupper(substr($time,$lenth-2,2));
					if($dayPeriod == "PM" || $dayPeriod == "AM"){
					
							$tokens = ":";
							$fndaction = strtok($timeDigit,$tokens);
							$cnt =0;
							$Action = array();
							while($fndaction){
								$TimeArray[$cnt] = $fndaction;
								$fndaction = strtok($tokens);
								$cnt++;
							}
						
							if($dayPeriod == "PM"){
								
								if($TimeArray[0]<'12'){
									$TimeArray[0] = 12+$TimeArray[0];
								}
													
							}
							if($dayPeriod == "AM"){
								
								if($TimeArray[0]=='12'){
									$TimeArray[0] = '00';
								}
													
							}
							
							if(strlen($TimeArray[0])==1){
									$hour = "0".$TimeArray[0];
								}else{
									$hour = $TimeArray[0];
								}
								if(strlen($TimeArray[1])==1){
									$min = "0".$TimeArray[0];
								}else{
									$min = $TimeArray[1];
							}
		
							$time24 = $hour.":".$min.":00";
						
							return $time24;
					}else{
							return "Wrong format select in second argument";
					}
					
					break;
			case "12":
					$lenth = strlen($time);
					$timeDigit = substr($time,0,$lenth-3);
					$dayPeriod =  strtoupper(substr($time,$lenth-2,2));
					if($dayPeriod == "PM" || $dayPeriod == "AM"){
							return "Wrong format select in second argument";
					}else{
							$tokens = ":";
							$fndaction = strtok($time,$tokens);
							$cnt =0;
							$Action = array();
							while($fndaction){
								$TimeArray[$cnt] = $fndaction;
								$fndaction = strtok($tokens);
								$cnt++;
							}
							$hour = $TimeArray[0];
							$min = $TimeArray[1];
							
							if($hour>=12 && $hour < 24){
								$dayPeriod = " PM";
								if($hour!=12){
																
									$j=0;
									$i=12;
									while($i<=$hour){
										$j++;
										$i++;
									}
									$hour = $j-1;
								}
							}elseif($hour ==24){
								$dayPeriod = " AM";
								$hour = 12;
							}elseif($hour =='00'){
							
								$dayPeriod = " AM";
								$hour = 12;
							}else{
								$dayPeriod = " AM";
							}
							if(strlen($hour)==1){
								$hour = "0".$hour;
							}else{
									$hour = $hour;
							}
							if(strlen($min)==1){
								$min = "0".$min;
							}else{
								$min = $min;
							}
							$time12 = $hour.":".$min.$dayPeriod;
							return $time12;
							}
					
					break;
		}			
		
	}


//--------------------------------------------------------//
function AddStringValue($Arr_String,$selectedValue,$value = "",$ValueType =""){
		if($ValueType==""){
			$ValueType = "id";
		}
		$curV=0;
		for($curValue=0;$curValue<count($Arr_String);$curValue++){
			$cur_String = $Arr_String[$curValue];
			if($curValue==0){
					if($cur_String==$selectedValue){				
						if($value[$curV]==""){
								$conItem = 'selected="selected"';
								$Itemstring .=$conItem;
						}else{
								$conItem = $ValueType.'="'.$value[$curV].'" selected="selected"';
								$Itemstring .=$conItem;
					
						}	
					}else{
						if($value[$curV]==""){
								$conItem = '***"';
								$Itemstring .=$conItem;
						}else{
								$conItem = $ValueType.'="'.$value[$curV].'"';
								$Itemstring .=$conItem;
					
						}
					}
			}else{
					if($cur_String==$selectedValue){				
						if($value[$curV]==""){
								$conItem = ';'.'selected="selected"';
								$Itemstring .=$conItem;
						}else{
								$conItem = ';'.$ValueType.'="'.$value[$curV].'" selected="selected"';
								$Itemstring .=$conItem;
					
						}	
					}else{
						if($value[$curV]==""){
								$conItem = ';'.'***"';
								$Itemstring .=$conItem;
						}else{
								$conItem = ';'.$ValueType.'="'.$value[$curV].'"';
								$Itemstring .=$conItem;
					
						}
					}
			}
			$curV++;
			
		}
		
		$token = ";";
		$cnt = 0;
		$Item= array();
		$arr_Item = strtok($Itemstring,$token);
		while($arr_Item){
			$Item[$cnt] = $arr_Item;
			$arr_Item = strtok($token);
			$cnt++;
		}
		for($i=0;$i<count($Item);$i++){
			if($Item[$i]=="***"){
				$Item[$i]="";
			}
			
		}

		$Value = array_combin($Arr_String,$Item);
	
		return $Value;
	}
//---------------------------------------------------------------------------------------------------------------------------------
function array_combin($a1,$a2)
    {
        for($i=0;$i<count($a1);$i++)
            $ra[$a1[$i]] = $a2[$i];
        if(isset($ra)) return $ra; else return false;
    }
//---------------------------------------------------------------------------------------------------------------------------------
function data_grid($Grid_Table,$HeaderContent,$Grid_Row_Format,$Rows_Contents) {	
	$staTab = "<table id='" .$Grid_Table[tName]."'".
									" cellspacing='" .$Grid_Table[tCellspacing]."'".
									" cellpadding='" .$Grid_Table[tCellpadding]."'".
									" width='100%'".
									" class ='"  .$Grid_Table[tableClass]. "'".
									" border ='"  .$Grid_Table[tBorder]. "'".
									">";
									
	$TotalRec= count($HeaderContent);
	$hRow=$TotalRec-1;
	
	for($i=0;$i<$TotalRec;$i++)
	{
	
			$staTab .= "<tr height ='".$Grid_Table[t_tr_Height]."' >";
		
			
			if(is_array($HeaderContent[$i])){
				foreach($HeaderContent[$i] as $HeadingName => $HeadingValue){
					
					if ($HeadingValue[Visible]==true){
							$staTab .=	'<td class ="'.$HeadingValue[hClass].'"'.
										' align ="'.$HeadingValue[hAlign].'"'.
										' width = "'.$HeadingValue[hWidth].'"'.
										' colspan = "'.$HeadingValue[hColspan].'"'.
										' rowspan = "'.$HeadingValue[hRowspan].'"'.
										'>'	.$HeadingValue[hName].	'</td>';
						}
				}            
			}        
			  
			$staTab.="</tr>";
	}
	
	
	
	$TotalRec= count($Rows_Contents);
	$RowStyle;
	for($i=0;$i<$TotalRec;$i++)
	{
		if ($i%2==0){			
			$RowStyle=$Grid_Row_Format[rClass];			}
		else		{
			$RowStyle=$Grid_Row_Format[rClass_Alt];		}
		
		
		
		if(is_array($Rows_Contents[$i])){
			$staTab .="<tr>";
			$add_id="";
    		foreach($Rows_Contents[$i] as $Name => $Value)
			{
				if ($HeaderContent[$hRow][$Name][Visible]==true)
				{
						/*$Value[cClass]. ---> cell style*/
						
						if($Value[cClass_flag]==true)
							$RowStyle=$Value[cClass];
							
					$staTab .=	"<td class ='".$RowStyle."'".	
								" align ='".$Value[cAlign]."'".
								" width = '".$HeaderContent[$hRow][$Name][hWidth]."'".
								" colspan = '".$Value[hColspan]."'".
								" rowspan = '".$Value[hRowspan]."'".
								">" .$Value[cName].	"</td>";		
					
				}
				if ($Value[para_id]==true)
				{
					if ($add_id <> "")
						{ $add_id .= ";";	}
						
					if ($Value[cName] == '' || $Value[cName] == NULL)
						$Value[cName]=-1;
						
					$add_id .= $Value[cName];
				}
        	}
			
			if ($HeaderContent[$hRow][Apply_Button][Visible]==true)
			{
			

			$staTab .= '<td align ="Center" width = "auto"'
					.'" class ="'.$RowStyle.'">'
					.'<a href ="#" onclick="displayMessage(\''
					.$Grid_Row_Format[link_page].'?action=Apply('.$add_id.')\','.$Grid_Row_Format[dlgWidth].','.$Grid_Row_Format[dlgHeight].');">'
					.'<img name="edit" align="absmiddle" src="resources/images/Grid_images/apply.ico"'
					.'width="20" height="20" border="0" alt="Apply"></a></td>';
			}
			
			
			if ($HeaderContent[$hRow][View_Button][Visible]==true)
			{
			

			$staTab .= '<td align ="Center" width = "auto"'
					.'" class ="'.$RowStyle.'">'
					.'<a href ="#" onclick="displayMessage(\''
					.$Grid_Row_Format[link_page].'?action=View('.$add_id.')\','.$Grid_Row_Format[dlgWidth].','.$Grid_Row_Format[dlgHeight].');">'
					.'<img name="view" align="absmiddle" src="resources/images/Grid_images/view.png"'
					.'width="16" height="16" border="0" alt="view"></a></td>';
			}
			
			
			if ($HeaderContent[$hRow][Edit_Button][Visible]==true)
			{
			

			$staTab .= '<td align ="Center" width = "auto"'
					.'" class ="'.$RowStyle.'">'
					.'<a href ="#" onclick="displayMessage(\''
					.$Grid_Row_Format[link_page].'?action=Edit('.$add_id.')\','.$Grid_Row_Format[dlgWidth].','.$Grid_Row_Format[dlgHeight].');">'
					.'<img name="edit" align="absmiddle" src="resources/images/Grid_images/edit.png"'
					.'width="16" height="16" border="0" alt="Edit"></a></td>';
			}
			if ($HeaderContent[$hRow][Delete_Button][Visible]==true)
			{
			$staTab .= '<td align ="Center" width = "auto"'
					.'" class ="'.$RowStyle.'">'
					.'<a href ="#" onclick="displayMessage(\''
					.$Grid_Row_Format[link_page].'?action=Delete('.$add_id.')\','.$Grid_Row_Format[dlgWidth].','.$Grid_Row_Format[dlgHeight].');">'
					.'<img name="Delete" align="absmiddle" src="resources/images/Grid_images/erase.png"'
					.'width="16" height="16" border="0" alt="Delete"></a></td>';
					
			}		
			$staTab.="</tr>";  	 
		
		}
						 
    }
	$staTab.= "</table>";
	return $staTab;

}

//--------------------------------------------------------------------------------------------------------------------------------
function Data_Grid_HeaderTable($Grid_Table,$HeaderContent,$Grid_Row_Format,$Rows_Contents) {	
	
	$staTab = "<table id='" .$Grid_Table[tName]."'".
									" cellspacing='" .$Grid_Table[tCellspacing]."'".
									" cellpadding='" .$Grid_Table[tCellpadding]."'".
									" width='100%'".
									" class ='"  .$Grid_Table[tableClass]."'". 
									" border ='"  .$Grid_Table[tBorder]. "'".
									">";
									
	$TotalRec= count($HeaderContent);
	for($i=0;$i<$TotalRec;$i++)
	{
	
			$staTab .= "<tr height ='".$Grid_Table[t_tr_Height]."' >";
		
			
			if(is_array($HeaderContent[$i])){
				foreach($HeaderContent[$i] as $HeadingName => $HeadingValue){
					
					if ($HeadingValue[Visible]==true){
							$staTab .=	"<td class ='".$HeadingValue[hClass]."'".
										" align ='".$HeadingValue[hAlign]."'".
										" width = '".$HeadingValue[hWidth]."'".
										"'>" .$HeadingValue[hName]."</td>";
						}
				}            
			}        
			  
			$staTab.="</tr>";
	}
	
	
	$staTab.= "</table>";
	return $staTab;

}
//--------------------------------------------------------------------------------------------------------------------------------
function Data_Grid_DetailTable($Grid_Table,$HeaderContent,$Grid_Row_Format,$Rows_Contents) {	
	
	$staTab = "<table id='" .$Grid_Table[tName]."'".
									" cellspacing='" .$Grid_Table[tCellspacing]."'".
									" cellpadding=" .$Grid_Table[tCellpadding]."'".
									" width='100%'".
									" class ='"  .$Grid_Table[tableClass]."'".
									" border ='"  .$Grid_Table[tBorder]."'".
									">";
									
	//$staTab .= "<tr height ='".$Grid_Table[t_tr_Height]."' >";

    if(is_array($HeaderContent)){
    	foreach($HeaderContent as $HeadingName => $HeadingValue){
        	
        }            
    }        
      
	//$staTab.="</tr>";
	
	
	$TotalRec= count($Rows_Contents);
	$RowStyle;
	for($i=0;$i<$TotalRec;$i++)
	{
		if ($i%2==0){			
			$RowStyle=$Grid_Row_Format[rClass];			}
		else		{
			$RowStyle=$Grid_Row_Format[rClass_Alt];		}
			
		if(is_array($Rows_Contents[$i])){
			$staTab .="<tr>";
			$add_id="";
    		foreach($Rows_Contents[$i] as $Name => $Value)
			{
				if ($HeaderContent[$Name][Visible]==true)
				{
						/*$Value[cClass]. ---> cell style*/
						
					$staTab .=	"<td class ='".$RowStyle."'".	
								" align ='".$Value[cAlign]."'".
								" width ='".$HeaderContent[$Name][hWidth]."'".
								">" .$Value[cName]."</td>";		
					
				}
				if ($Value[para_id]==true)
				{
					if ($add_id <> "")
						{ $add_id .= ";";	}
						
					if ($Value[cName] == '' || $Value[cName] == NULL)
						$Value[cName]=-1;
						
					$add_id .= $Value[cName];
				}
        	}
			if ($HeaderContent[Edit_Button][Visible]==true)
			{
			

			$staTab .= '<td align ="Center" width = "auto"'
					.'" class ="'.$RowStyle.'">'
					.'<a href ="#" onclick="displayMessage(\''
					.$Grid_Row_Format[link_page].'?action=Edit('.$add_id.')\','.$Grid_Row_Format[dlgWidth].','.$Grid_Row_Format[dlgHeight].');">'
					.'<img name="edit" align="absmiddle" src="resources/images/Grid_images/edit.png"'
					.'width="16" height="16" border="0" alt="Edit"></a></td>';
			}
			if ($HeaderContent[Delete_Button][Visible]==true)
			{
			$staTab .= '<td align ="Center" width = "auto"'
					.'" class ="'.$RowStyle.'">'
					.'<a href ="#" onclick="displayMessage(\''
					.$Grid_Row_Format[link_page].'?action=Delete('.$add_id.')\','.$Grid_Row_Format[dlgWidth].','.$Grid_Row_Format[dlgHeight].');">'
					.'<img name="Delete" align="absmiddle" src="resources/images/Grid_images/erase.png"'
					.'width="16" height="16" border="0" alt="Delete"></a></td>';
					
			}		
			$staTab.="</tr>";  	 
		
		}
						 
    }
	$staTab.= "</table>";
	return $staTab;

}



function Check_Box($checked=false,$value=0,$id='checkbox', $name='checkbox',$Onclick_fun='')
{
		if ($checked==true || $checked==1){
			$checked=' Checked=1';			}
		elseif($checked==false || $checked==0){
			$checked='';					}
	
		$str_check_box = '<input type="checkbox" id= "'.$id
						.'" name="'.$name.'" value='.$value
						.$checked.' onclick="'.$Onclick_fun.'"/>';
		return $str_check_box;
}

//---------------------------------------------------------------------------------------------------------------------------------
function Check_User_Right($User_id=0,$Module_id=0,$Opration=0)
{
	$Opration_id=9;
	
	switch($Opration){
		case "Module":
			$Opration_id=0;
			break;
		case "Add":
			$Opration_id=1;
			break;
		case "Edit":
			$Opration_id=2;
			break;
		case "Delete":
			$Opration_id=3;
			break;
		case "Export":
			$Opration_id=4;
			break;
		case "Print":
			$Opration_id=5;
			break;
		}
		
	$qry_UserRightDetail ="SELECT  Module_Right, Add_Right, Edit_Right, Delete_Right,Export_Right,Print_Right "
						." FROM ".TABLE_USER_MODULE_RIGHT  
						." WHERE User_Id= ".$User_id." AND Module_Id = ".$Module_id;

	//return $qry_UserRightDetail;
	$rslt_UserRightDetail = mysql_query($qry_UserRightDetail);
	$noRow =mysql_num_rows($rslt_UserRightDetail);

	if (!$rslt_UserRightDetail) {
		return  false;
	}elseif($noRow <= 0){
		return  false;
	} else{
		$row = mysql_fetch_array($rslt_UserRightDetail, MYSQL_NUM);
		if ($row[$Opration_id]==1){
			return true;
		}else{
			return false;
		}	
	}
}

//---------------------------------------------------------------------------------------------------------------------------------
function ExportData_Header($Header) {
	
	
	$strHeader="<table width='100%' border='0'><tr><tr>'". $Header ."'</tr><td height='20'>";
	return $strHeader;
	
}
//---------------------------------------------------------------------------------------------------------------------------------
function ExportData_Footer() {

	$strFooter="</td></tr></table>";
	return $strFooter;
}
//---------------------------------------------------------------------------------------------------------------------------------
function OnClick_Print_Data()
{
	$strPrint= 'onClick="window.open(\'print.php\',\'print\',\'left=208,top=150,width=650,height=400,scrollbars=1,toolbar=0,resizable=1\')"';
	
	return $strPrint;
}
function OnClick_Message_Box($Message='')
{
	$strMessage = 'onclick="displayMessage(\'msgbox.php?action='.$Message.'\',290,190);"';
	return $strMessage;
}


function OnClick_Export_Data($ExportType='xls')
{
	$ExportFilename=$_SESSION['ExportName']. ".".$ExportType;
	$strExportData = 'onClick="window.open(\'exportData.php?action='.$ExportFilename.'\',\'_self\');"';
	return $strExportData;
}
//--------------------------------------------------------------------------------------------------------------------------------
function ExportData($data,$ExportFilename){
		
		/*header("Expires: Mon, 26 Jul 1997 05:00:00 GMT") ;
		header("Pragma: no-cahce") ;
		header("Content-Type: application/vnd.ms-excel");
		header("Content-Disposition: attachment; filename='".$ExportFilename."'");
		header("Expires: 0");
		header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
		header("Content-Type: application/vnd.ms-excel");
		header("Content-Disposition: \"inline\"");
		header("Content-Length: ".strlen($data));*/

		

		header("Expires: Sat, 01 Jan 2000 00:00:00 GMT"); 
		header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT"); 
		header("Pragma: public"); 
		header("Expires: 0"); 
		header("Cache-Control: must-revalidate, post-check=0, pre-check=0"); 
		header("Cache-Control: public"); 
		header("Content-Description: File Transfer");		
		session_cache_limiter("must-revalidate"); 
		header("Content-Type: application/vnd.ms-excel"); 
		header('Content-Disposition: attachment; filename="'.$ExportFilename.'"'); 

		print $data;
		 
}


function set_cookie($name, $value, $days=0)
{
    $cookie_host = preg_replace('|^www\.(.*)$|', '.\\1', $_SERVER['HTTP_HOST']);

    if (substr(strval($days), 0, 1) == 'f')
        $exp = 2147483640;
    else if (substr(strval($days), 0, 1) == 'r')
    {
        $exp = 1; $value = '';
    }
    else if ($days != 0)
        $exp = time() + intval($days)*86400;
    else
        $exp = 0;

 //   setcookie($name, $value, $exp, '/', $cookie_host);
		 setcookie($name, $value, $exp, '/', $cookie_host);
}


function msg_grp_list() {
	$Grid_Table = array("tName"=>'Corp_Detail', 	"tClass"=>'TableStyle', 
						"tAlign"=>"Left" ,				"tWidth"=>'100%',
						"tHeight"=>'',					"tCellspacing"=>1,
						"tCellpadding"=>0,				"t_tr_Height"=>5,
						"tBorder"=>0,					"Visible"=>true
						);
						
	$Grid_Row_Format = array("r_cellHeight"=>8,
								"rAlign"=>"Center" ,
								"rWidth"=>20,
								"rClass"=>'cellStyle',
								"rClass_Alt"=>'cellStyle_Alt'
								);
	$Grid_Header[0] = array(
	
			"Group_Id" =>array(	"hName"=>'',	"hClass"=>'cellHeadStyle', 
								"hAlign"=>"Center" ,"hWidth"=>'50',"Visible"=>true),
			"Group_Name"	  =>array(	"hName"=>'User Name', "hClass"=>'cellHeadStyle', 
								"hAlign"=>"Center" ,"hWidth"=>'auto',	"Visible"=>true)
			
			 );
	
	$Rows_Contents=array();
	
	$sqlQry="SELECT User_Id,User_Name FROM ".TABLE_USER_MASTER." WHERE User_Type=".$_SESSION['group_id']
					. " AND User_Id <>".$_SESSION['Login_User_Id'];
				
	$rslt_sqlQry = mysql_query($sqlQry);
	$noRow =mysql_num_rows($rslt_sqlQry);

	if (!$rslt_sqlQry) {
		$action_status = mysql_error();
	}elseif($noRow <= 0){
		
	} else{
		$i=0;
		while($row = mysql_fetch_array( $rslt_sqlQry , MYSQL_NUM ))
		{
			$Rows_Contents[$i] = array(
			"Group_Id"   =>array("cName"=>Check_Box(0,$row[0]),	"cClass"=>'cellStyle', 	"cAlign"=>"Left" ,	"para_id"=>true),
			"Group_Name" =>array(	"cName"=>$row[1], 	"cClass"=>'cellStyle', 	"cAlign"=>"Left" , "para_id"=>false)	);
		}
	}
	
	$AddTable = "<table width='100%' border='0'><tr><td>";
	$AddTable .=data_grid($Grid_Table,$Grid_Header,$Grid_Row_Format,$Rows_Contents);
	$AddTable.=	 "</td></tr></table>";
	return $AddTable;
	
}
function check_user_id( $user_name,$user_id=0 ){
	$sqlQry ="SELECT user_id,user_name FROM ".TABLE_USER_MASTER." WHERE user_name='".$user_name."'";
	
	if ($user_id != 0){
		$sqlQry .= " AND user_id <>".$user_id;
	}
	$rslt_sqlQry = mysql_query($sqlQry);
	$noRow =mysql_num_rows($rslt_sqlQry);

	if (!$rslt_sqlQry) {
		$action_status = mysql_error();
		return false;
	}elseif($noRow == 0){
		return true;
	} else{
		return false;
	}

}

function encode($filter, $str)
{
	  $filter = md5($filter);
	  $letter = -1;
	  $newpass = '';
	  $strlen = strlen($str);
	  for ( $i = 0; $i < $strlen; $i++ )
	  {
			 $letter++;
			 if ( $letter > 31 )
		 {
				$letter = 0;
		 }
			 $neword = ord($str{$i}) + ord($filter{$letter});
			 if ( $neword > 255 )
		 {
				$neword -= 256;
		 }
			 $newstr .= chr($neword);
	  }
	  return base64_encode($newstr);
}


function decode($filter, $str)
{
	  $filter = md5($filter);
	  $letter = -1;
	  $newstr = '';
	  $str = base64_decode($str);
	  $strlen = strlen($str);
	  for ( $i = 0; $i < $strlen; $i++ )
	  {
			 $letter++;
			 if ( $letter > 31 )
		 {
				$letter = 0;
		 }
			 $neword = ord($str{$i}) - ord($filter{$letter});
	
		 if ( $neword < 1 )
		 {
				$neword += 256;
		 }		$newstr .= chr($neword);

	  }
	  return $newstr;
}
function cmbGender()
{
	$gender=array();
	$gender[0] = 'Male';
	$gender[1] = 'FeMale';
	
	return $gender;
	
}

function selCmbValue($cmbArray,$cmbID)
{
	
	/*while($row= mysql_fetch_array($rslt_Employee,MYSQL_NUM)){
			$Arr_Employee[$row[0]] = array($row[1]);
			$EmpName[$k] = $row[1];
			$EmpId[$k] = $row[0];
			$k++;

		}*/
	//	$SelEmp = $Arr_Employee[$m_row[0]][0];
	//	$Employee_list = AddStringValue($EmpName,$SelEmp,$EmpId,'value');
	
	//for($i=0 ;$i<count($cmbArray)-1;$i++)
		for($i=0 ;$i<2;$i++)
		{  
		
			$Arr_Employee[$i] =$i;
			$arrayID[$i]=$i;
			$arrayValue[$i]= $cmbArray[$i];
			
		}

	
	$SelValue = $Arr_Employee[$cmbID][1];
	$Array_list = AddStringValue($arrayValue,$SelValue,$arrayID,'value');

	return $Array_list;
}

?>