/**
 * Created by okubo on 2017/05/20.
 */
window.onload = function() {
	$("div.content_with_ruby *:contains(')]')")
		.each(
			function() {
				var org = $(this).html();
				var regex_replaceToRuby = /\[([^\[\]()]+)\(([^\[\]()]+)\)\]/g;
				var regex_replaceExtraTags = /\#\#/g;
				var converted = org.replace(regex_replaceToRuby, '<ruby>$1<rt>$2</rt></ruby>');

				$(this).html(converted);
			}
		);
	$("div.content_with_ruby *:contains(']]')")
		.each(
			function() {
				var org = $(this).html();
				var regex_replaceExtraTags = /\[\[([^\[\]]+)\]\]/g;
				var converted2 = org.replace(regex_replaceExtraTags, '<$1>');

				$(this).html(converted2);
			}
		);
}
