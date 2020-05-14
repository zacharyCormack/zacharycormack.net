=== KaTeX ===
Contributors: Thomas Churchman
Tags: katex, latex, math, equation, tex, mathjax
Requires at least: 5.0
Tested up to: 5.4
Stable tag: 2.0.2
Requires PHP: 5.3
License: GPLv2 or later

Use the fastest math typesetting library on your website.

== Description ==
The KaTeX WordPress plugin enables you to use the fastest [TeX math typesetting engine](https://github.com/Khan/KaTeX) on your WordPress website. You can include TeX inside a `[katex]...[/katex]` shortcode or in a Gutenberg block. Either way the math will render beautifully on your website. When using Gutenberg blocks, the equations will render immediately inside your editor!

Equations in blocks or using the `[katex display=true]...[/katex]` shortcode will render on page in display mode--with bigger symbols--centered on their own line.

For compatability with other LaTeX plugins, this plugin optionally supports `[latex]...[/latex]` shortcodes.

You can choose to serve KaTeX yourself or through the third-party [jsDelivr CDN](http://www.jsdelivr.com).

[Plugin Website](https://wordpress.org/plugins/katex)

== Installation ==
1. Upload the `katex` folder to your `/wp-content/plugins/` directory or automatically download and install the plugin through WordPress's plugin manager;
1. Activate the plugin in WordPress; and
1. Use the `[latex]` shortcode or KaTeX Gutenberg blocks in your posts and pages.

== Frequently Asked Questions ==
= Can I move from LaTeX plugin X to this plugin? =

You should be able to replace any other LaTeX plugin using `[latex]` shortcodes without having to make changes to existing posts. Other plugins might handle display-mode latex other than `[latex display=true]...[/latex]`, in which case old posts unfortunately have to be changed.

== Screenshots ==
1. Preview your TeX right inside the editor.
1. TeX is rendered inside your visitors' browsers.

== Changelog ==
= 2.0.2 =
* Fix block editor variable scoping.

= 2.0.1 =
* Upgrade KaTeX resources to v0.11.1.

= 2.0.0 =
* Support adding CSS classes to KaTeX Gutenberg Blocks to help with styling. Backwards compatibility note: KaTeX Gutenberg Blocks are now rendered wrapped in a `div` element on which classes `wp-block-katex-display-block` and `katex-eq` are set. You can add more classes to this `div` through WordPress's post editor. Previously, KaTeX Gutenberg Blocks were rendered wrapped in an unclassed `span`. KaTeX shortcodes are still wrapped inside a `span` with only the class `katex-eq` set. If you depend on old behavior for styling, you might need to update your styling rules.

= 1.0.5 =
* Fix 1.0.4 release issue: KaTeX resources were not committed correctly.

= 1.0.4 =
* Upgrade KaTeX resources to v0.10.2.

= 1.0.3 =
* Fix warnings related to plugin options that occurred on PHP 5.
* Clean up the plugin's options on plugin deletion.

= 1.0.2 =
* Upgrade KaTeX resources to v0.10.1.

= 1.0.1 =
* Fix issue where KaTeX resources would not be loaded on the admin pages.

= 1.0.0 =
* Initial release.

== Upgrade Notice ==
