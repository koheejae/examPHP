<?php     /* 출생한 연, 월, 일에 따라 만 나이 계산하기 */

    $now_year = 2023;				 
    $now_month = 9;
    $now_day = 15;

    $birth_year = 1992;			
    $birth_month = 5;
    $birth_day = 10;

    if ($birth_month < $now_month)		
        $age = $now_year - $birth_year;
    elseif ($birth_month == $now_month)		
    {
        if ($birth_day <= $now_day)			
            $age = $now_year - $birth_year;
        else $age = $now_year - $birth_year - 1;
    }
    else					
        $age = $now_year - $birth_year - 1;

    echo "오늘 날짜 : $now_year 년 $now_month 월 $now_day 일<br>";		
    echo "출생 연월일 : $birth_year 년 $birth_month 월 $birth_day 일생<br>";
    echo "만 나이 : $age 세";
?>