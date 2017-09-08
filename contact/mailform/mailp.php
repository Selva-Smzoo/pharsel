<?php
// Mailform Permission Changer
// 2015/02/24 by Ujin Shin
// SELVA Co., Ltd. Inc. (www.SELVA Co., Ltd..co.jp)

//説明
//mailform と同じ directory にこちらのファイルを入れて、
//ブラウザーから実行してください。
//例: ドメイン名/ディレクトリ名/mailp.php

echo chmod('send.cgi', 0755) ? 'send.cgi: 755 CHMODed successfully!' : 'Error';
echo "<br>";
echo chmod('count.dat', 0777) ? 'count.dat: 777 CHMODed successfully!' : 'Error';
echo "<br>";
echo chmod('check.cgi', 0755) ? 'check.cgi: 755 CHMODed successfully!' : 'Error';
echo "<br>";
echo chmod('postcodes/', 0755) ? 'postcodes/: 755 CHMODed successfully!' : 'Error';
echo "<br>";
echo chmod('postcodes/get.cgi', 0755) ? 'postcodes/get.cgi: 755 CHMODed successfully!' : 'Error';
echo "<br>";
echo chmod('Jcode/', 0755) ? 'Jcode/: 755 CHMODed successfully!' : 'Error';
echo "<br>";
echo chmod('Jcode/Unicode/', 0755) ? 'Jcode/Unicode/: 755 CHMODed successfully!' : 'Error';

echo "<br><br>";
echo "Thank you!";

unlink(__FILE__);

