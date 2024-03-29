<?php
class Time_message extends Controller {
	function index()
	{
		// タイトル
		$data['title'] = '時刻メッセージ';
		// 現在の時刻
		$data['now_time'] = date("H時i分s秒");
		// 現在の時刻（時）
		$now_hour = date("H");
		// 時間に合わせたメッセージを表示
		if ($now_hour == 12)
		{
			$data['message'] = 'お昼です。';
		}
		elseif ($now_hour == 3)
		{
			$data['message'] = '3時のピーナッツバーのオヤツです。';
		}
		else
		{
			$data['message'] = '今日も頑張って！';
		}
		// テンプレートに変数を代入
		$this->load->view('time_message_view', $data);
	}
}
?>