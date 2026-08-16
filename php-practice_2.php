<?php
// Q1 tic-tac問題

echo "1から100までのカウントを開始します。\n";

for ($a = 1; $a <= 100; $a++) {
  if ($a % 4 === 0 && $a % 5 === 0) {
    echo "tic-tac \n";
  } elseif ($a % 4 === 0) {
    echo "tic \n";
  } else if ($a % 5 === 0) {
    echo "tac \n";
  } else {
    echo $a . "\n";
  }
}
echo "\n";
echo "\n";
  
  

// Q2 多次元連想配列
 //問題１
 $personalInfos = [
    [
        'name' => 'Aさん',
        'mail' => 'aaa@mail.com',
        'tel'  => '09011112222'
    ],
    [
        'name' => 'Bさん',
        'mail' => 'bbb@mail.com',
        'tel'  => '08033334444'
    ],
    [
        'name' => 'Cさん',
        'mail' => 'ccc@mail.com',
        'tel'  => '09055556666'
    ],
];

echo $personalInfos[1]['name'] . 'の電話番号は' . $personalInfos[1]['tel'] . 'です。' . "\n"; 
echo "\n";
echo "\n";

//問題2
$count = 1;

foreach ($personalInfos as $person) {
    echo $count . "番目の" . $person['name'] . "メールアドレスは" . $person['mail'] . "で、電話番号は" . $person['tel'] . "です。\n";
    $count++;
}
echo "\n";
echo "\n";


//問題3
$ageList = [25, 30, 18];

$count = 0;

foreach ($personalInfos as &$person) {
  $person['age'] = $ageList[$count];
  $count++;
}
var_dump($personalInfos);
echo "\n";
echo "\n";


// Q3 オブジェクト-1,// Q4 オブジェクト-2

class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;

    }
  public function attend($lesson)
    {
      echo $this->studentName . "は" . $lesson . "の授業に参加しました。学籍番号：" . $this->studentId . "です。\n";
    }
}
$student = new Student(120, '山田');
$student->attend('PHP');

echo '学籍番号' . $student->studentId . '番の生徒は' . $student->studentName . "です。\n";
echo "\n";
echo "\n";


// Q5 定義済みクラス
//問題１
$date = new DateTime();
$date->modify('-1 month');
echo $date->format('Y-m-d');
echo "\n";
echo "\n";

//問題2
$today = new DateTime();
$oldDate = new DateTime('1992-04-25');
$result = $oldDate->diff($today);
echo "あの日から" . $result->days . "日経過しました。";
echo "\n";
echo "\n";

?>