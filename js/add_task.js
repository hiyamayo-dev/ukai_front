/** 実装機能
* 
* 項目入力漏れチェック　　ボタンの有効状態で管理するか、クリック時に判定するか
* 開始日、期限妥当性チェック
* 登録ボタンクリック時の登録要求
* 
* 単一アイテムと繰り返しアイテムの登録
* *繰り返しアイテムに関しては　曜日、指定期間での指定を可能とする
* 
* キャンセル時の確認動作　アラート
* 登録時の確認動作　モーダル
*/

// 約束ボタンクリック
$('#promise_btn_js').on('click', function () {
    console.log('akaka')
})

// キャンセルボタンクリック
$('#cancel_btn_js').on('click', function () {

})

//開始日　デフォルト値設定
// 今日の日付を取得する関数　*inputにデータを入れるため YYYY-mm-ddにして値を返す
function getNowYMD() {
    var dt = new Date();
    var y = dt.getFullYear();
    var m = ("00" + (dt.getMonth() + 1)).slice(-2);
    var d = ("00" + dt.getDate()).slice(-2);
    var result = y + '-' + m + '-' + d;
    return result;
}
$('#exampleInputDate').val(getNowYMD);