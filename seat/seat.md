# GW特別企画、、席替えプログラムを作成してください。

<img src="https://s3-ap-northeast-1.amazonaws.com/optext/misc/seat.png" width="500px">


以下のファイルを作成します。

+ list.php
  + 席替え画面を表示する
+ shuffle.php
  + 席替えデータをシャッフルする
+ upload.php
  + 席替えデータをアップロードする
+ download.php
  + 席替えデータをダウンロードする

## 1. list.php

+ 以下の席替えデータ（seat.txt）読み込んで、席替え画面を表示する。
  + 初期表示時のCOLは6とする。

```
Mura
Kawa
FT
Tashi
Takahi
Saga
EastMt
Nai
Kamo
Kame
Katt
FM
O
Samy
High
TKHR
TG
Mz
Hr
It
Tarner
WestBay
Iwa
Nom
Kzm
Fuku
Miya
```

## 2. shuffle.php

> shuffleボタンクリック時の処理

+ 席替えデータ（seat.txt）の内容をシャッフルする。
+ list.phpへリダイレクトする。
  + 入力されたCOL数に従い列を表示すること

## 3. download.php

> downloadリンククリック時の処理

+ 表示中の席替えデータ（seat.txt）をダウンロードする。

## 4. upload.php

> uploadボタンクリック時の処理

+ 入力された席替えデータ（seat2.txtなど）をアップロードする。
  + 既存のseat.txtと差し替える。
+ list.phpへリダイレクトする。
