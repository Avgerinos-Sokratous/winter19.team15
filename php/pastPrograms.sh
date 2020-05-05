#!/bin/bash

#count=100
#if [ $count -eq 100 ]; then echo 'Count is 100'; fi
#now=$(date +"%d%m%Y")

getDay() { 
  if [ $day = "Monday" ]; 
  then 
     day="monday"; 
  fi
  if [ $day = "Tuesday" ]; 
  then 
     day="tuesday"; 
  fi
  if [ $day = "Wednesday" ]; 
  then 
     day="wednesday"; 
  fi
  if [ $day = "Thursday" ]; 
  then 
     day="thursday"; 
  fi
  if [ $day = "Friday" ]; 
  then 
     day="friday"; 
  fi
}


i=0
#i=$((i+1))
#day=$(date --date="$i day ago")

day=$(date --date="$i day ago" +"%A")
if [ $day = "Saturday" ]
then
    i=$((i+1))
    day=$(date --date="$i day ago" +"%A")
elif [ $day = "Sunday" ]
then 
    i=$((i+2))
    day=$(date --date="$i day ago" +"%A")
fi 
nums=$(date --date="$i day ago" +"%d%m%Y")
getDay
curl "https://www.ironsky-fitness.com/programming/$day-$nums" > ./public_html/php/day0.txt;
echo $day-$nums
i=$((i+1))


day=$(date --date="$i day ago" +"%A")
if [ $day = "Saturday" ]
then
    i=$((i+1))
    day=$(date --date="$i day ago" +"%A")
elif [ $day = "Sunday" ]
then 
    i=$((i+2))
    day=$(date --date="$i day ago" +"%A")
fi 
nums=$(date --date="$i day ago" +"%d%m%Y")
getDay
curl "https://www.ironsky-fitness.com/programming/$day-$nums" > ./public_html/php/day1.txt;
echo $day-$nums
i=$((i+1))


day=$(date --date="$i day ago" +"%A")
if [ $day = "Saturday" ]
then
    i=$((i+1))
    day=$(date --date="$i day ago" +"%A")
elif [ $day = "Sunday" ]
then 
    i=$((i+2))
    day=$(date --date="$i day ago" +"%A")
fi 
nums=$(date --date="$i day ago" +"%d%m%Y")
getDay
curl "https://www.ironsky-fitness.com/programming/$day-$nums" > ./public_html/php/day2.txt;
echo $day-$nums
i=$((i+1))


day=$(date --date="$i day ago" +"%A")
if [ $day = "Saturday" ]
then
    i=$((i+1))
    day=$(date --date="$i day ago" +"%A")
elif [ $day = "Sunday" ]
then 
    i=$((i+2))
    day=$(date --date="$i day ago" +"%A")
fi 
nums=$(date --date="$i day ago" +"%d%m%Y")
getDay
curl "https://www.ironsky-fitness.com/programming/$day-$nums" > ./public_html/php/day3.txt;
echo $day-$nums
i=$((i+1))


day=$(date --date="$i day ago" +"%A")
if [ $day = "Saturday" ]
then
    i=$((i+1))
    day=$(date --date="$i day ago" +"%A")
elif [ $day = "Sunday" ]
then 
    i=$((i+2))
    day=$(date --date="$i day ago" +"%A")
fi 
nums=$(date --date="$i day ago" +"%d%m%Y")
getDay
curl "https://www.ironsky-fitness.com/programming/$day-$nums" > ./public_html/php/day4.txt;
echo $day-$nums
i=$((i+1))


day=$(date --date="$i day ago" +"%A")
if [ $day = "Saturday" ]
then
    i=$((i+1))
    day=$(date --date="$i day ago" +"%A")
elif [ $day = "Sunday" ]
then 
    i=$((i+2))
    day=$(date --date="$i day ago" +"%A")
fi 
nums=$(date --date="$i day ago" +"%d%m%Y")
getDay
curl "https://www.ironsky-fitness.com/programming/$day-$nums" > ./public_html/php/day5.txt;
echo $day-$nums
i=$((i+1))


day=$(date --date="$i day ago" +"%A")
if [ $day = "Saturday" ]
then
    i=$((i+1))
    day=$(date --date="$i day ago" +"%A")
elif [ $day = "Sunday" ]
then 
    i=$((i+2))
    day=$(date --date="$i day ago" +"%A")
fi 
nums=$(date --date="$i day ago" +"%d%m%Y")
getDay
curl "https://www.ironsky-fitness.com/programming/$day-$nums" > ./public_html/php/day6.txt;
echo $day-$nums



#now=$(date +"%d%m%Y")
#now=$(date +"%A");
#if [ $now != "Thursday" ]
#then
#    echo "Hey";
#fi
#echo $now

#export https_proxy=proxy.cs.ucy.ac.cy:8008
#curl "https://www.ironsky-fitness.com/programming/wednesday-26022020" > day0.txt;
#curl "https://www.ironsky-fitness.com/programming/tuesday-25022020" > day1.txt;
#curl "https://www.ironsky-fitness.com/programming/monday-24022020" > day2.txt;
#curl "https://www.ironsky-fitness.com/programming/friday-21022020" > day3.txt;
#curl "https://www.ironsky-fitness.com/programming/thursday-20022020" > day4.txt;
#curl "https://www.ironsky-fitness.com/programming/wednesday-19022020" > day5.txt;
#curl "https://www.ironsky-fitness.com/programming/tuesday-18022020" > day6.txt;
