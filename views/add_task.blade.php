<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css読み込み -->
    <link rel="stylesheet" href="{{asset('/assets/css/add_task.css')}}" />
    <!-- ブートストラップ読み込み -->
    <link rel="stylesheet" href="{{asset('/css/app.css')}}" />
    <script src="{{ asset('js/app.js') }}" defer></script>

    <title>なにをやりたいですか？</title>
</head>

<body>

    <!-- 約束　入力制限トースト -->
    <div class="toast" id="myToast">
        <div class="toast-header">
            <strong class="mr-auto"><i class="far fa-envelope">約束内容が適切ではありません</i></strong>
            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="toast-body">
            <div><b>約束内容は20字以内で入力してください(*'▽')</b><br />
            </div>
        </div>
    </div>
    <style>
    #myToast {
        position: absolute;
        top: 3%;
        right: 3%;
        z-index: 1040;
    }
    </style>


    <!-- TODOアイテムを登録する -->
    <div class="main_container">

        <!-- 値をセットする  20字以内-->
        <!-- タイトル入力 -->
        <div class="form_container">
            <span class="task_title">
                <form class="was-validated">
                    <div class="mb-3 title">
                        <label for="validationTitle">約束内容</label>
                        <input type='text' class="form-control form-control-lg　is-invalid" id="validationTitle"
                            placeholder="鵜飼さんに誓います...(20文字以内)" onChange='length_check()' required>
                    </div>
                </form>
            </span>
            <script type="module">
            // 約束内容が既定文字数（２０字）を超えたときに、通知と入力欄初期化する
            document.getElementById('validationTitle').onchange = function() {
                if ($('#validationTitle').val().length > 20) {
                    $("#myToast").toast({
                        delay: 2100
                    }).toast('show');
                    $('#validationTitle').val(''); //初期化
                }
            }
            </script>

            <!-- 開始日入力 -->
            <div class="mb-3">
                <label for="exampleInpuDate" class='start_day '>開始日</label>
                <input type="date" class="form-control start_day" id="exampleInputDate">
            </div>


            </span>
            <!-- 期限入力 -->
            <span class="deadline"> 期限日</span>
            <!-- 難易度選択　スライダー　1~10 -->
            <span class="difficulty">難易度</span>

            <!-- 条件判定で表示を分ける -->
            <span class="repeat_week"></span><!-- 曜日指定 -->
            <span class="repeat_period"></span><!-- 期間指定　 -->
        </div>

        <!-- フッター　登録・キャンセルボタン配置 -->
        <div>
            <button type="button" class="fotter_btn btn btn-danger" id="cancel_btn_js">キャンセル</button>
            <button type="button" class="fotter_btn btn btn-success" id="promise_btn_js">約束する</button>
        </div>
    </div>

    <!-- スクリプト読み込み -->
    <script src="{{ mix('js/add_task.js')}}" type="module"></script>
</body>

</html>