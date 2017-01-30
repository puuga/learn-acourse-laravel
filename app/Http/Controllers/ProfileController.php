<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
  //
  private $me = [
    'name' => 'Siwawes',
    'surname' => 'Wongcharoen',
    'birthday' => [
      'en' => '1986-04-17',
      'th' => '2529-04-17',
    ],
  ];

  public function getName() {
    return $this->me['name'];
  }

  public function getSurname() {
    return $this->me['surname'];
  }

  public function getBirthDay($lang = 'en') {
    if ($lang === 'en' || $lang === 'th') {
      return $this->me['birthday'][$lang];
    }
    return date("Y-m-d");
  }

  public function getYearOfBirthday() {
    return explode('-', $this->me['birthday']['th'])[0] - 543;
  }

  public function getAge($lang = 'en') {
    if ($lang === 'en') {
      return date("Y") - explode('-', $this->me['birthday']['en'])[0];
    } elseif ($lang === 'th') {
      return date("Y") - explode('-', $this->me['birthday']['th'])[0] + 543;
    }
    return -1;
  }

  public function getProfile() {
    $me = [
      'name' => 'Siwawes',
      'surname' => 'Wongcharoen',
      'birthday' => '1986-04-17',
      'sports' => [
        'swimming', 'bassketball', 'tennis', 'bike',
      ],
      'skills' => [
        'hard' => ['java', 'javascript', 'data mining',],
        'soft' => ['speaker', 'trainer',],
      ],
    ];
    $me['age'] = $this->getAge('en');
    return view('profile', $me);
  }
}
