// デフォルトで今日の日付をセット
//日付取得(今日)
let now = new Date();
let yy = now.getFullYear();
let mm = now.getMonth() + 1;
let dd = now.getDate();

// 整形 年/月/日
let formatted = `
    ${yy}/
    ${mm.toString().padStart(2, '0')}/
    ${dd.toString().padStart(2, '0')}
    `.replace(/\n|\r/g, '');

// デフォルト値セット
$('#start_day').val(formatted);

// カレンダーアイコンクリック時
$(function (e) {
    $('#datetimepicker1').datetimepicker({
        yearSuffix: '年',
        dayViewHeaderFormat: 'YYYY{0} MMMM',
        tooltips: {
            close: '閉じる',
            selectMonth: '月を選択',
            prevMonth: '前月',
            nextMonth: '次月',
            selectYear: '年を選択',
            prevYear: '前年',
            nextYear: '次年',
            selectTime: '時間を選択',
            selectDate: '日付を選択',
            prevDecade: '前期間',
            nextDecade: '次期間',
            selectDecade: '期間を選択',
            prevCentury: '前世紀',
            nextCentury: '次世紀'
        },
        format: 'YYYY/MM/DD',
        locale: 'ja',
        firstDay: 1,
        buttons: {
            showClose: true
        }
    });
});