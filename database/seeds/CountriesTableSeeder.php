<?php

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //table clear
        DB::table('countries')->truncate();
    
        //初期データ用意（列名をキーとする連想配列）
        $countries = [
        [

            'name' => 'アメリカ',
            'number' => '840'

        ],
        [ 
            'name'=>'中華人民共和国',
            'number'=>'156'
            
        ],
        [
            
            'name'=>'ドイツ',
            'number'=>'276'
            
        ],
        [
            
            'name'=>'デンマーク',
            'number'=>'208'
            
        ],
        [
            
            'name'=>'アイスランド',
            'number'=>'352'
            
        ],
        [

            'name'=>'アイルランド',
            'number'=>'372'
            
        ],
        [

            'name'=>'アゼルバイジャン',
            'number'=>'031'

        ],
        [
            
            'name'=>'アフガニスタン',
            'number'=>'004'
            
        ],
        [
            
            'name'=>'アラブ首長国連邦',
            'number'=>'784'
            
        ],
        [

            'name'=>'アルジェリア',
            'number'=>'012'
            
        ],
        [
            
            'name'=>'アルゼンチン',
            'number'=>'032'
            
        ],
        [
            
            'name'=>'アルメニア',
            'number'=>'051'
            
        ],
        [
            
            'name'=>'アンゴラ',
            'number'=>'024'
            
        ],
        [
            
            'name'=>'イエメン',
            'number'=>'887'
            
        ],
        [
            'name'=>'イギリス',
            'number'=>'826'
            
        ],
        [
            
            'name'=>'イスラエル',
            'number'=>'376'
            
        ],
        [
            
            'name'=>'イタリア',
            'number'=>'380'
            
        ],
        [
            'name'=>'イラク',
            'number'=>'368'
            
        ],
        [

            'name'=>'インド',
            'number'=>'356'
            
        ],
        [

            'name'=>'インドネシア',
            'number'=>'360'
            
        ],
        [

            'name'=>'ウクライナ',
            'number'=>'804'
            
        ],
        [

            'name'=>'ウズベキスタン',
            'number'=>'860'
            
        ],
        [
            'name'=>'ウルグアイ',
            'number'=>'858'
            
        ],
        [

            'name'=>'エクアドル',
            'number'=>'218'
            
        ],
        [

            'name'=>'エジプト',
            'number'=>'818'
            
        ],
        [

            'name'=>'エストニア',
            'number'=>'233'
            
        ],
        [

            'name'=>'エチオピア',
            'number'=>'231'
            
        ],
        [

            'name'=>'エルサルバドル',
            'number'=>'222'
            
        ],
        [

            'name'=>'オーストラリア',
            'number'=>'036'
            
        ],
        [

            'name'=>'オーストリア',
            'number'=>'040'
            
        ],
        [

            'name'=>'オマーン',
            'number'=>'512'
            
        ],
        [

            'name'=>'オランダ',
            'number'=>'528'
            
        ],
        [ 

            'name'=>'ガーナ',
            'name'=>'288'
            
        ],
        
        [
            
            'name'=>'ガイアナ',
            'number'=>'328'
            
        ],
        [
            
            'name'=>'カザフスタン',
            'number'=>'398'
            
        ],
        [
            
            'name'=>'カタール',
            'number'=>'634'
            
        ],
        [
            'name'=>'カナダ',
            'number'=>'124'
            
        ],
        [

            'name'=>'カボベルデ',
            'number'=>'132'

        ],
        [
            
            'name'=>'ガボン',
            'number'=>'266'
            
        ],
        [
            
            'name'=>'カメルーン',
            'number'=>'120'
            
        ],
        [
            'name'=>'ガンビア',
            'number'=>'270'
            
        ],
        [
            
            'name'=>'カンボジア',
            'number'=>'116'
            
        ],
        [
            
            'name'=>'北マケドニア共和国',
            'number'=>'807'
            
        ],
        [
            
            'name'=>'北マリアナ諸島',
            'number'=>'580'
            
        ],
        [
            
            'name'=>'ギニア',
            'number'=>'324'
            
        ],
        [

            'name'=>'ギニアビサウ',
            'number'=>'624'
            
        ],
        [
            
            'name'=>'キプロス',
            'number'=>'196'
            
        ],
        [
            
            'name'=>'キューバ',
            'number'=>'192'
            
        ],
        [

            'name'=>'キュラソー',
            'number'=>'531'
            
        ],
        [

            'name'=>'ギリシャ',
            'number'=>'300'
            
        ],
        [

            'name'=>'キリバス',
            'number'=>'296'
            
        ],
        [

           'name'=>'キルギス',
            'number'=>'417'
            
        ],
        [

            'name'=>'グアテマラ',
            'number'=>'320'
            
        ],
        [

            'name'=>'グアドループ島',
            'number'=>'312'
            
        ],
        [

            'name'=>'グアム',
            'number'=>'316'
            
        ],
        [

            'name'=>'クウェート',
            'number'=>'414'
            
        ],
        [

            'name'=>'クック諸島',
            'number'=>'184'
            
        ],
        [

            'name'=>'グリーンランド',
            'number'=>'304'
            
        ],
        [

            'name'=>'クリスマス島',
            'number'=>'162'
            
        ],
        [

            'name'=>'グレナダ',
            'number'=>'308'
            
        ],
        [

            'name'=>'クロアチア',
            'number'=>'191'
            
        ],
        [

            'name'=>'ケイマン諸島',
            'number'=>'136'
            
        ],
        [

            'name'=>'ケニア',
            'number'=>'404'
            
        ],
        [ 

            'name'=>'コートジボワール',
            'name'=>'384',
            
        ],
        [
            
            'name'=>'ココス（キーリング）諸島',
            'number'=>'166'
            
        ],
        [
            
            'name'=>'コスタリカ',
            'number'=>'188'
            
        ],
        [
            
            'name'=>'コモロ',
            'number'=>'174'
            
        ],
        [

            'name'=>'コロンビア',
            'number'=>'170'
            
        ],
        [

            'name'=>'コンゴ共和国',
            'number'=>'コンゴ民主共和国'

        ],
        [
            
            'name'=>'サウジアラビア',
            'number'=>'682'
            
        ],
        [
            
            'name'=>'サウスジョージア・サウスサンドウィッチ諸島',
            'number'=>'239'
            
        ],
        [

            'name'=>'サモア',
            'number'=>'882'
            
        ],
        [
            
            'name'=>'サントメ・プリンシペ',
            'number'=>'678'
            
        ],
        [
            
            'name'=>'サン・バルテミー島',
            'number'=>'652'
            
        ],
        [
            
            'name'=>'ザンビア',
            'number'=>'894'
            
        ],
        [
            
            'name'=>'サンピエール・ミクロン島',
            'number'=>'666'
            
        ],
        [

            'name'=>'サンマリノ',
            'number'=>'674'
            
        ],
        [
            
            'name'=>'サン・マルタン島',
            'number'=>'663'
            
        ],
        [
            
            'name'=>'シエラレオネ',
            'number'=>'694'
            
        ],
        [

            'name'=>'ジブチ',
            'number'=>'262'
            
        ],
        [

            'name'=>'ジブラルタル',
            'number'=>'292'
            
        ], 
        [

            'name'=>'ジャージー島',
            'number'=>'832'
            
        ],
        [

            'name'=>'ジャマイカ',
            'number'=>'388'
            
        ],
        [

            'name'=>'ジョージア',
            'number'=>'268'
            
        ],
        [

            'name'=>'シリア・アラブ共和国',
            'number'=>'760'
            
        ],
        [

            'name'=>'シンガポール',
            'number'=>'702'
            
        ],
        [

            'name'=>'シント・マールテン（オランダ領）',
            'number'=>'534'
            
        ],
        [

            'name'=>'ジンバブエ',
            'number'=>'716'
            
        ],
        [

            'name'=>'スイス',
            'number'=>'765'
            
        ],
        [

            'name'=>'スウェーデン',
            'number'=>'752'
            
        ],
        [

            'name'=>'スーダン',
            'number'=>'729'
            
        ],
        [

            'name'=>'スバールバル諸島・ヤンマイエン島',
            'number'=>'744'
            
        ],
        [

            'name'=>'スペイン',
            'number'=>'724'
            
        ],
        [

            'name'=>'スリナム',
            'number'=>'740'
        

        ]
        ];
        //シーダーの登録
        foreach($countries as $country){
           \App\Country::create($country); 
        }
}


}