<?php
    function foo($value){
        $value = $value + 1;
    }

    function bar($value){
        $value = $value + 1;
    }

$value = 1;
print "$value\n"; //1

foo($value);
print "$value\n"; //2

bar($value);
print "$value\n"; //2


class foo {
    private $value;

    function __construct() {
        $this->value = 1;
    }

    function get() {
        return $value;
    }
};

$test = new foo();

print $test ->get()."\n";

$test->increment();

print $test->get()."\n";


//あるシステムでは毎日深夜にバッチジョブが起動し、それまでの１日の間に追加されたレコードのみを対象に処理が実行されています。そのレコードを格納するために、以下のようなSQL分で定義されたテーブルが定義されています。

CREATE TABLE process_queue(
    id integer primary key,
    is_done boolean,
    job_type integer,
    parameter vachar
);

//このテーブルには常時レコードがつかされ、処理されています。その際 is_done カラムはfalseの状態です。バッチジョブでは、このテーブルのis_doneカラムがfalseの状態のレコードのみを対象にして、job_typeとparameterカラムの内容に応じて処理が実行され、ジョブが終了するとis_doneカラムの値がtrueに変更されます。日々500件程度のデータが追加され、処理されています。システム運用当初は数分間で処理が完了しておりましたが、数年間運用した結果、処理の完了までに１時間以上要することになってしまいました。その原因は何位が考えられるでしょう？日々追加し、処理されるジョブの量には変化はないものとします。
