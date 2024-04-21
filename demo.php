<?php

/**
 * Computes the monthly charge for a given subscription.
 *
 * @return int The total monthly bill for the customer in cents, rounded
 * to the nearest cent. For example, a bill of $20.00 should return 2000.
 * If there are no active users or the subscription is null, returns 0.
 *
 * @param string $yearMonth Always present. Has the following structure:
 *   "YYYY-MM"  // April 2022 in YYYY-MM format
 *
 * @param array $subscription May be null.
 *   If present, has the following structure:
 *   [
 *     'id' => 763,
 *     'customer_id' => 328,
 *     'monthly_price_in_cents' => 359  // price per active user per month
 *   ]
 *
 * @param array $users May be empty, but not null.
 *   Has the following structure:
 *   [
 *     [
 *       'id' => 1,
 *       'name' => 'Employee #1',
 *       'customer_id' => 1,
 *       'activated_on' => new DateTime('2021-11-04'),
 *       'deactivated_on' => new DateTime('2022-04-10')
 *     ],
 *     [
 *       'id' => 2,
 *       'name' => 'Employee #2',
 *       'customer_id' => 1,
 *       'activated_on' => new DateTime('2021-12-04'),
 *       'deactivated_on' => null
 *     ],
 *   ]
 */
function monthlyCharge($yearMonth, $subscription, $users) {
    // Check for empty subscription or users
    if (empty($subscription) || empty($users)) {
      return 0;
    }
  
    // Extract month and year from $yearMonth
    [$year, $month] = explode('-', $yearMonth);
  
    // Calculate daily rate by dividing monthly price by number of days
    $dailyRate = $subscription['monthly_price_in_cents'] / cal_days_in_month(CAL_GREGORIAN, $month, $year);
  
    // Initialize total charge to 0
    $totalCharge = 0;
  
    // Loop through each day of the month
    for ($day = 1; $day <= cal_days_in_month(CAL_GREGORIAN ,$month, $year); $day++) {
      // Create a DateTime object for current day
      $currentDate = new DateTime("$year-$month-$day");
  
      // Count active users for this day
      $activeUsers = 0;
      foreach ($users as $user) {
        // Check if user is active on this day
        if (isActiveOnDay($user, $currentDate)) {
          $activeUsers++;
        }
      }
  
      // Calculate charge for the day and add to total
      $dayCharge = $activeUsers * $dailyRate;
      $totalCharge += round($dayCharge); // Round to nearest cent
    }
  
    return $totalCharge;
  }
  
  /**
   * Helper function to check if a user is active on a specific date
   *
   * @param array $user User data with activated_on and deactivated_on fields
   * @param DateTime $date Date to check for user activity
   *
   * @return bool True if user is active on the date, False otherwise
   */
  function isActiveOnDay($user, $date) {
    $activatedOn = $user['activated_on'];
    $deactivatedOn = $user['deactivated_on'];
  
    // User is active if activated before or on the date and not deactivated yet
    return $activatedOn <= $date && (!$deactivatedOn || $deactivatedOn >= $date);
  }

  
  monthlyCharge('2024-02',['monthly_price_in_cents' => 12],[1,5]);