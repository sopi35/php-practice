<?php
// Q1 変数と文字列
$name = '角野琳音';
echo "私の名前は「{$name}」です。";
echo "\n";
echo "\n";
// Q2 四則演算
$num = 5 * 4;

echo $num;
echo "\n";
echo $num / 2;
echo "\n";
echo "\n";

// Q3 日付操作
echo date('現在の時刻は、2019年05月23日 14時48分22
秒です。');
echo "\n";
echo "\n";

// Q4 条件分岐-1 if文
$device = 'mac';
if ($device === 'windows') {
   echo '使用OSは、windowsです。';
}
if ($device === 'mac') { 
  echo '使用OSは、macです。';
} 
if ($device === 'linux') {
  echo 'どちらでもありません。';
}
   
  echo "\n";
echo "\n";
// Q5 条件分岐-2 三項演算子
$age = 20;
echo $age >= 18 ? '成人です。' : '未成年です。';
echo "\n";
echo "\n";

// Q6 配列
$prefectures = ['北海道', '大阪府', '栃木県', '千葉県'];
echo $prefectures[2]. "と" .$prefectures[3]. "は関東地方の都道府県です。";
echo "\n";
echo "\n";

// Q7 連想配列-1
$prefectures = [
  "東京都"=> "新宿区",
  "神奈川県"=> "横浜市",
  "千葉県"=> "千葉市",
  "埼玉県"=> "さいたま市",
  "栃木県"=> "宇都宮市",
  "群馬県"=> "前橋市",
  "茨城県"=> "水戸市",
  ];


foreach ($prefectures as $capital )
  echo $capital ."\n";
  echo "\n";

// Q8 連想配列-2
$prefectures = [
  "東京都"=> "新宿区",
  "神奈川県"=> "横浜市",
  "千葉県"=> "千葉市",
  "埼玉県"=> "さいたま市",
  "栃木県"=> "宇都宮市",
  "群馬県"=> "前橋市",
  "茨城県"=> "水戸市",
  ];

  if ($prefectures ["埼玉県"] == "さいたま市") {
  echo "埼玉県の県庁所在地は、" . $prefectures ["埼玉県"] . "です。";
  }
  echo "\n";
  echo "\n";

// Q9 連想配列-3
$prefectures = [
  "東京都"=> "新宿区",
  "神奈川県"=> "横浜市",
  "千葉県"=> "千葉市",
  "埼玉県"=> "さいたま市",
  "栃木県"=> "宇都宮市",
  "群馬県"=> "前橋市",
  "茨城県"=> "水戸市",
  "北海道"=> "札幌市",
  "沖縄県"=> "那覇市",
  ];
  if ($prefectures ["東京都"]== "新宿区") {
  echo "東京都の県庁所在地は、" . $prefectures ["東京都"] . "です。" . "\n";}
  if ($prefectures ["神奈川県"]== "横浜市") {
  echo "神奈川県の県庁所在地は、" . $prefectures ["神奈川県"] . "です。" . "\n";
 }
 if ($prefectures ["千葉県"]== "千葉市") {
  echo "千葉県の県庁所在地は、" . $prefectures ["千葉県"] . "です。" . "\n";
 }
  if ($prefectures ["埼玉県"]== "さいたま市") {
  echo "埼玉県の県庁所在地は、" . $prefectures ["埼玉県"] . "です。" . "\n";
 }
 if ($prefectures ["栃木県"]== "宇都宮市") {
  echo "栃木県の県庁所在地は、" . $prefectures ["栃木県"] . "です。" . "\n";
 }
 if ($prefectures ["群馬県"]== "前橋市") {
  echo "群馬県の県庁所在地は、" . $prefectures ["群馬県"] . "です。" . "\n";
 }
 if ($prefectures ["茨城県"]== "水戸市") {
  echo "茨城県の県庁所在地は、" . $prefectures ["茨城県"] . "です。" . "\n";
 }
 if ($prefectures ["北海道"]== "札幌市") {
  echo "北海道は関東地方ではありません。" . "\n";
  }
  if ($prefectures ["沖縄県"]== "那覇市") {
  echo "沖縄県は関東地方ではありません。" . "\n";
  }
  echo "\n";

// Q10 関数-1
function hello($name) {
  return $name . "さん、こんにちは。";
}

echo hello('金谷');
echo "\n";
echo hello('安藤');
echo "\n";
echo "\n";

// Q11 関数-2
function calcTaxInPrice($price) {
  return $price * 1.1;
}
$price = 1000;
$TaxInPrice = calcTaxInPrice($price);
echo $price ."円の商品の税込価格は、" . $TaxInPrice . "円です。";
echo "\n";
echo "\n";


// Q12 関数とif文
function distinguishNum($num) {
  if ($num % 2 === 0) {
    return "偶数です。";
  }
  else {
    return "奇数です。";
  }
}
$num = 11;
echo $num ."は" . distinguishNum($num);
echo "\n";
$num = 24;
echo $num ."は" . distinguishNum($num);
echo "\n";
echo "\n";

// Q13 関数とswitch文
function evaluateGrade($Grade) {
  switch ($Grade) {
    case 'A':
    case 'B':
      return "合格です。";

    case 'C':  
      return "合格ですが追加課題があります。";

    case 'D': 
      return "判定不明です。講師に問い合わせて下さい。";
      break;
  }
  }

$result = evaluateGrade('A');
echo $result;
echo "\n";
$result = evaluateGrade('D');
echo $result;
echo "\n";
