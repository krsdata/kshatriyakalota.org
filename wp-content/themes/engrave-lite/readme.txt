== Think Up Themes ==

- By Think Up Themes, http://www.thinkupthemes.com/

Requires at least:	4.0.0
Tested up to:		4.3.1

Engrave Lite is the free version of the multi-purpose professional theme ideal for a business or blog website. The theme is responsive, HD retina ready and comes with 600+ Google Fonts which can easily be selected directly from the theme options panel.


-----------------------------------------------------------------------------
	Support
-----------------------------------------------------------------------------

- For support for Engrave Lite please post a support ticket over at the https://wordpress.org/support/theme/engrave-lite.


-----------------------------------------------------------------------------
	Frequently Asked Questions
-----------------------------------------------------------------------------

- None Yet


-----------------------------------------------------------------------------
	Limitations
-----------------------------------------------------------------------------

- RTL support is yet to be added. This is planned for inclusion in v1.4.
- Multi-language support is yet to be added. This is planned for inclusion in v1.4.


-----------------------------------------------------------------------------
	Copyright, Sources, Credits & Licenses
-----------------------------------------------------------------------------

Engrave Lite WordPress Theme, Copyright 2011 Think Up Themes Ltd
Engrave Lite is distributed under the terms of the GNU GPL

Demo images are licensed under CC0 1.0 Universal (CC0 1.0) and available from http://pixabay.com/
Image used in screenshot licensed under CC0 1.0 Universal (CC0 1.0) and available from http://pixabay.com/en/new-york-city-brooklyn-bridge-night-336475/

The following opensource projects, graphics, fonts, API's or other files as listed have been used in developing this theme. Thanks to the author for the creative work they made. All creative works are licensed as being GPL or GPL compatible.

    [1.01] Item:        Underscores (_s) starter theme - Copyright: Automattic, automattic.com
           Item URL:    http://underscores.me/
           Licence:     Licensed under GPLv2 or later
           Licence URL: http://www.gnu.org/licenses/gpl.html

    [1.02] Item:        Redux Framework
           Item URL:    https://github.com/ReduxFramework/ReduxFramework
           Licence:     GPLv3
           Licence URL: http://www.gnu.org/licenses/gpl.html

    [1.03] Item:        TGM Plugin Activation
           Item URL:    http://tgmpluginactivation.com/#license
           Licence:     GPLv3
           Licence URL: http://www.gnu.org/licenses/gpl.html

    [1.04] Item:        html5shiv (jQuery file)
           Item URL:    http://code.google.com/p/html5shiv/
           Licence:     MIT
           Licence MIT: http://opensource.org/licenses/mit-license.html

    [1.05] Item:        Retina js
           Item URL:    http://retinajs.com
           Licence:     MIT
           Licence URL: http://opensource.org/licenses/mit-license.html

    [1.06] Item:        ResponsiveSlides
           Item URL:    https://github.com/viljamis/ResponsiveSlides.js
           Licence:     MIT
           Licence URL: http://opensource.org/licenses/mit-license.html

    [1.07] Item:        Font Awesome
           Item URL:    http://fortawesome.github.io/Font-Awesome/#license
           Licence:     SIL Open Font &  MIT
           Licence OFL: http://scripts.sil.org/cms/scripts/page.php?site_id=nrsi&id=OFL
           Licence MIT: http://opensource.org/licenses/mit-license.html

    [1.08] Item:        Twitter Bootstrap
           Item URL:    https://github.com/twitter/bootstrap/wiki/License
           Licence:     Apache 2.0
           Licence URL: http://www.apache.org/licenses/LICENSE-2.0

    [1.09] Item:        Elegant Icons
           Item URL:    http://www.elegantthemes.com/blog/resources/elegant-themes-icon-pack-for-free
           Licence:     Dual GPL and MIT
           Licence URL: /licenses/license_(elegant_icons).txt

    [1.10] Item:        Elegant Media Icons
           Item URL:    https://www.iconfinder.com/search/?q=iconset:elegantmediaicons
           Licence:     GPL
           Licence URL: http://www.gnu.org/licenses/gpl.html


-----------------------------------------------------------------------------
	Changelog
-----------------------------------------------------------------------------

Version 1.7.13
- Updated: Font Awesome library updated to latest version v4.6.3. Ensures all icons in FA library are available to use.

Version 1.7.12
- Fixed:   Custom Redux extensions now load correctly. Issue introduced in previous version where extensions did not load is now corrected.

Version 1.7.11
- Fixed:   Custom Redux extensions now moved to folder main-extensions to ensure compatibility with Redux plugin. Ensures plugin and theme can be used without conflicting.
- Updated: "ReduxFramework::$_url . 'assets/img/layout" changed to "trailingslashit( get_template_directory_uri() ) . 'admin/main/assets/img/layout"

Version 1.7.10
- Fixed:   ThinkUpSlider now checks to see if any slide is assigned, rather than just the first slide. Corrects issue where deleting slides resulted in issues.

Version 1.7.9
- Fixed:   Checkbox field saves as as "off" when unticked.
- Fixed:   Switch field saves as as "off" when switched off.
- Fixed:   Full post content on blog archive pages only displayed if explicitly set by user in theme options.
- Fixed:   Masonry script now output on all archive pages. Fixes issue where masonry layout didn't work on category and tags pages.
- Updated: Links in breadcrumb function sanitized.
- Updated: Textdomain added to top of style.css file.
- Updated: thinkup_input_wptitle() outputs at start of wp_head().
- Updated: style-shortcodes.css updated to be consistent with all themes.
- Updated: Link to gmpg.org in header.php now compatible with https sites.
- Updated: All references to textdomain 'themecheck' changed to 'redux-framework'.
- Updated: Links to widgets page changed from /wp-admin/widgets.php to esc_url( admin_url( 'widgets.php' ) ).
- Updated: Homepage (Content) section renamed to Homepage (Featured) to make it clear that the section is intended for minimal content.
- Updated: Theme tags updated to reflect new tags. Old rags will be removed once WP v4.6 is released and users can no longer filter with old tags.
- Removed: alert( 'test000' ); removed from jquery.serializeForm.js.
- Removed: //alert( 'test11-22' ); removed from extension_customizer.min.js.
- Removed: Deregistered redux scripts removed for compliance with .org requirements 'wpb_ace' and 'jquerySelect2'.

Version 1.7.8
- Fixed:   Post content displayed on main blog page can be set by user using core WordPress <!--more--> tag.
- Updated: Logo image width set to "auto".

Version 1.7.7
- Fixed:   Comments form updated to use custom arguments. PHP notices fixed for comments form - changes made comments.php file.
- Fixed:   Custom titles now display correctly on mobile layouts. Issue previously caused titles to be squashed on smaller screens.
- Updated: Description for "thinkup_header_socialswitch" option now displays correctly
- Updated: Minor css changes made in style.css to header, breadcrumbs and footer links.

Version 1.7.6
- Updated: Font Awesome library updated to v4.2.0.
- Updated: Translation .pot file added. Old files .mo and .po removed.
- Updated: All Font Awesome icon classes now use fa- prefix instead of icon- prefix.

Version 1.7.5
- Fixed:   Function is_blog() renamed to thinkup_check_isblog() to ensure correct prefixing and reduce change of conflict with 3rd party code.
- Fixed:   Function add_menuclass() renamed to thinkup_input_menuclass() to ensure correct prefixing and reduce change of conflict with 3rd party code.
- Fixed:   Function home_page_menu_args() renamed to thinkup_menu_homelink() to ensure correct prefixing and reduce change of conflict with 3rd party code.
- Fixed:   Function get_comments_popup_link() renamed to get_comments_popup_link() to ensure correct prefixing and reduce change of conflict with 3rd party code.
- Fixed:   Function get_comments_number_str() renamed to thinkup_comments_returnstring() to ensure correct prefixing and reduce change of conflict with 3rd party code.
- Updated: Portfolio masonry container checks updated in main-frontend.js.
- Updated: Function thinkup_input_logoretinaja() renamed to thinkup_input_logoretinaja() to be inline with proper naming convention.

Version 1.7.4
- Updated: Social media links in pre-header now open in new tab.
- Updated: Translation .pot file added. Old files .mo and .po removed.

Version 1.7.3
- Fixed:   Disables sortable slides in Customizer. This prevents issues where phantom slides still appear after deleting slides.
- Updated: Various minor styling updates for theme options in customizer.

Version 1.7.2
- Fixed:   "$this->_extension_url" used for redux extensions fixed to ensure custom extensions are loaded correctly on all sites.

Version 1.7.1
- Fixed:   Floating elements now cleared within template-archive.php using class "clearboth".
- Fixed:   Floating elements now cleared within template-sitemap.php using class "clearboth".
- Updated: Redux notices prevented from displaying.
- Updated: Padding added to ThinkUpSlider content area.
- Updated: Validation for links changed from "url" to "html" to allow for links to inner pages.
- Updated: input specific type styling extended to include input[type=search] and  input[type=tel].
- Updated: Widgets now use "parent::__construct" instead of "parent::__construct" to register widget.
- Updated: border-box sizing added to comments section in posts to ensure width doesn't overflow container.
- Updated: Class ".portfolio-wrapper" added to all instances of ID "#container" where a masonry layout is used.
- Removed: References to "filters.svg#grayscale" removed from style-shortcodes.css.
- Removed: Custom JS option in customizer removed. Can potentially cause issues with customizer if user specified JS is incorrect.

Version 1.7.0
- New:     Customizer support added. All Theme options settings now controlled from within Customizer.
- Fixed:   thinkup_check_ishome() now works correctly on all sites.
- Fixed:   Migration script updated to prevent loss of data. If data doesn't migrate to customizer. Support can still retrieve from database.
- Updated: Elusive icons updated to 2.0 to ensure smooth transition of featured content icons from old to new Redux version.
- Removed: Redux styling in style-backend.css no longer needed.
- Removed: jQuery used to add "required" settings to theme options now longer needed.
- Removed: Theme options panel removed - replaced with customizer to comply with new WordPress guidelines.

Version 1.6.9
- Updated: Prep for Customizer integration. Redux global variable changed from $redux -> $thinkup_redux_variables. Migration function thinkup_migrate_redux_option().

Version 1.6.8
- Fixed:   Textdomain added to all translatable strings.
- Fixed:   Custom social media icons now display correctly.

Version 1.6.7
- Updated: css code in style-shortcodes.css completely rewritten. Much tidier and easier or end user to customize.

Version 1.6.6
- Fixed:   prettyPhoto updates to v3.1.6 to put in place prettyPhoto XSS fix.
- Fixed:   #sidebar styling in style-responsive.css applied with !important attribute.
- Updated: #main-core styling in style-responsive.css applied with !important attribute.
- Updated: caroufredsel now checks to if carousel item exists before executing code - reduces jQuery notices.
- Updated: caroufredsel code updated to ensure carousel code is not applied to individual items (e.g. postitem, featured items, images).

Version 1.6.5
- Fixed:   Blog grid layout now displays correctly (full-width) on mobile devices.
- Fixed:   Fix jQuery code used to add tr tags in main-backend.js. Improves compatibility with 3rd party code.
- Removed: Unnecessary placeholder theme options removed.

Version 1.6.4
- New:     Variable $thinkup_general_fixedlayoutswitch used to assign responsive layouy for default settings.
- Updated: Theme now displays responsive layout on default settings. 
- Removed: Variable $thinkup_general_responsiveswitch was used to set fixed layout by default.

Version 1.6.3
- Updated: Change blog-style class to blog-article.
- Updated: Link to support forum updated in readme file.
- Updated: Change readme file to ensure support article link is correct.
- Updated: Coments in functions.php now applied using single line exclusions to make debugging easier.
- Updated: Add class="clearboth" after #slider so that it works correctly with all 3rd party shortcodes.

Version 1.6.2
- New:     Page title is now output using add_theme_support( 'title-tag' ) to ensure compliance with WordPress 4.1.1 guidelines.
- New:     Add WooCommerce compatibility to allow users to customize WooCommerce from theme folder.
- Updated: Functions that are used to add additional image sizes are now child theme compatible allowing feature to be overwritten from child theme.

Version 1.6.1
- New:     three-columns tag added to style.css given the 3 column layout of the homepage feauted content section.
- Fixed:   Function thinkup_input_wptitle() removed as it causes issues with page title when posts are assigned to homepage.

Version 1.6.0
- Updated: blog article css updated to ensure white background - makes it easier for user to customize site.

Version 1.5.9
- Updated: URL Placeholder text added to dlider url field.

Version 1.5.8
- Fixed:   Blog posts now allow for custom date format to be used. Picks up fromat from Settings -> General.
- Removed: sysinfo.php removed from Redux framework as it is not required.
- Removed: TGM plugin activation removed as no plugins are currently recommended for installation.

Version 1.5.7
- Fixed:   Sanitization of Site Title and Site Description in theme options panel changed to allow non-english alphabet charachters.

Version 1.5.6
- Removed: Recommended plugins removed due to plugin errors with WordPress4.0 update.

Version 1.5.5
- Fixed:   get_page_link changed to get_permalink to ensure links work correctly for call to action.
- Fixed:   get_page_link changed to get_permalink to ensure links work correctly for homepage featured content.
- Updated: Font Awesome v4.2.0 added.

Version 1.5.4
- New:     Font Awesome v4.1.0 added.
- Fixed:   Css added to correct image format issue in theme options panel.
- Updated: Slider image repaced with new image.
- Updated: Retina js script only output when HD logo set. Prevents image 404 errors on hd screens.
- Updated: http removed from credit links to ensure they work correctly on both http:// and https:// sites.
- Updated: current-theme class removed from promotion section in theme options panel to correct image sizing issue.
- Updated: get_stylesheet_directory_uri() changed to get_template_directory_uri() for theme info tab in theme options panel.
- Updated: Responsive layout class changed from fixed to layout-fixed. Allows more developer control with layout-responsive class.
- Removed: Delay autop code removed.
- Removed: Unneccesary commented text remoed from framework.php.
- Removed: Correct z-index of iframe code removed. No longer required since Wordpress v3.9 release.

Version 1.5.3
- New:     Custom background functionality added.
- New:     Custom header image functionality added.
- New:     thinkup_hook_header() moved to immediately after <head> html tag in header.php.
- Fixed:   Responsive jQuery fixed for iframes. Including Youtube videos etc...
- Updated: Image sizes updated to screen width of 1140px
- Updated: thinkup_hook_header() moved to immediately after <head> html tag.

Version 1.5.2
- Fixed:   Icons now display on tabs in theme options panelOffer updated to 10% off with value $31.
- Updated: Changes to "Enable Responsive Layout" description on theme options panel.

Version 1.5.1
- Updated: Offer updated to 10% off with value $31.

Version 1.5.0
- Fixed:   Responsive header menu now works on localhost correctly.
- Updated: Auto sizing of logo image added.
- Updated: Styling added for default WordPress widgets.
- Removed: All references to blog layout 2.
- Removed: All references to template family.

Version 1.4.91
- Fixed:   Slider checks adjusted - php error message fixed.

Version 1.4.9
- Updated: Core Masonry code now being used. Removed external file.
- Updated: is_thinkup() code replaced. Where required replaced with is_front_page().

Version 1.4.8
- New:     Responsive-layout and red theme tags added.
- Fixed:   Slider shows on default settings.
- Fixed:   Favicon is opt in and disabled by default.
- Fixed:   Intro width corrected to display properly on Safari.
- Fixed:   Pre-header menu Fixed to display properly on Safari.
- Fixed:   slider height corrected to display properly on Safari.
- Removed: Typography option removed.
- Removed: Footer credit cannot be removed.

Version 1.4.7
- Fixed:   Page links for homepage content boxes.

Version 1.4.6
- New:     Masonry JS script added.
- Fixed:   Main header menu stays at bottom even when a large logo is added.
- Fixed:   Responsive navigation menu displays when custom menu is not set.
- Updated: Screenshot - Shows 3 boxes on homepage.
- Updated: Blog layout changed to 2 column with masonry.
- Updated: ThinkUpSlider ratio when loaded on mobile devices.
- Updated: query_posts replaced with WP_Query in template-sitemap.php.

Version 1.4.5
- paginate_link() renamed to thinkup_input_nav().
- Attachment pagination styled to match post / page pagination.

Version 1.4.4
- Translation scripts updated

Version 1.4.3
- Built in slider added.
- SlideDeck2 Lite recommended install removed.

Version 1.4.2
- Logo css changed to prevent overlap with main header menu.
- Copyright added.

Version 1.4.1
- Default header styles added to match menus.
- Site title displayed upon activation.
- Footer widgets disabled upon activation.
- 'Walker_Nav_Menu_Responsive extends Walker_Nav_Menu' updated. 

Version 1.4.0
- Translation ready functionality added.
- Removed blog template (style2).
- Default showing of 'Think Up Themes Ltd' logo removed.

Version 1.3.3
- html5shiv added - licensed under MIT.

Version 1.3.2
- html5shiv removed.
- Redux framework license changed from GPLv2 to GPLv3. (Author allows the distributor flexibility on choice of GPL license version).

Version 1.3.1
- Theme URL changed.

Version 1.3
- Unlimited Sidebars removed.
- Twitter widget removed (php & css).
- PrettyPhoto removed (php & js).
- Social media icons replaced.

Version 1.2
- Page / Post pagination added.
- Util removed.

Version 1.1
- Removed SMOF framework.
- Added Redux framework.

Version 1.0
- Initial release.