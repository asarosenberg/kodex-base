<?php
class CNavigation {
	public static function GenerateMenu($items) {
		$html = "<nav>\n";
		foreach($items as $item) {
			if (basename($_SERVER['PHP_SELF']) == $item['url']) {
				$html .= "<a href='{$item['url']}' class=\"active\">{$item['text']}</a>\n";
			} else {
				$html .= "<a href='{$item['url']}'>{$item['text']}</a>\n";
			}
		}
		$html .= "</nav>\n";
		return $html;
	}
}; 