<?php

use App\Payment;
use Carbon\Carbon;


function postImage($path)
  	{
  		 //return $path ? asset(Voyager::image($path)) : asset('img/product/noimage.jpg');
      return $path && file_exists('storage/'.$path) ? asset('storage/'.$path) : asset('img/product/noimage.jpg');
  	}

function getInvestor($id)
	{
		$order = Payment::find($id);

		return $order;
	}

function planExpiry($plan, $date)
	{
		if ($plan == 'lite') 
			{
				$hourAdd = 18;
			}elseif($plan == 'pro')
				{
					$hourAdd = 35;
				}elseif ($plan == 'max') 
					{
						$hourAdd = 1;
					}else
						{
							$hourAdd = 96;
						}
		$carbon_date = Carbon::parse($date);
		$realtime = $carbon_date->addHours($hourAdd);

		$now = date('Y-m-d H:i:s');
		$startDate = Carbon::createFromFormat('Y-m-d H:i:s', date('Y-m-d H:i:s'));
		$endDate = Carbon::createFromFormat('Y-m-d H:i:s', $realtime);

		if ( $now > $endDate) 
			{
				$days = 0;
				$hours = 0;
				$minutes = 0;
			}else
				{
					$days = $startDate->diffInDays($endDate);
					$hours = $startDate->copy()->addDays($days)->diffInHours($endDate);
					$minutes = $startDate->copy()->addDays($days)->addHours($hours)->diffInMinutes($endDate);
				}

		return $days.' Days, '.$hours.' Hours, '.$minutes.' Minutes';
	}