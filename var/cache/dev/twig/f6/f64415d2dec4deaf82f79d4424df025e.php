<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__88bbe962f22cc9a41b6e471b60224e46 */
class __TwigTemplate_97989b7e47d3f2b520d95d8e37f42594 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__88bbe962f22cc9a41b6e471b60224e46"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__88bbe962f22cc9a41b6e471b60224e46"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/prestashop/custom/vt_axetor/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/prestashop/custom/vt_axetor/img/app_icon.png\" />

<title>Module manager • Prestashop 814</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminModulesManage';
    var iso_user = 'en';
    var lang_is_rtl = '0';
    var full_language_code = 'en-us';
    var full_cldr_language_code = 'en-US';
    var country_iso_code = 'US';
    var _PS_VERSION_ = '8.1.4';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'A new order has been placed on your store.';
    var order_number_msg = 'Order number: ';
    var total_msg = 'Total: ';
    var from_msg = 'From: ';
    var see_order_msg = 'View this order';
    var new_customer_msg = 'A new customer registered on your store.';
    var customer_name_msg = 'Customer name: ';
    var new_msg = 'A new message was posted on your store.';
    var see_msg = 'Read this message';
    var token = 'd18a22b14ee0b4fb7df6e27ebcf930a0';
    var currentIndex = 'index.php?controller=AdminModulesManage';
    var employee_token = '6276fe92a0ea39a9e0e10bcbdd8bbbf8';
    var choose_language_translate = 'Choose language:';
    var default_language = '1';
    var admin_modules_link = '/prestashop/custom/vt_axetor/admincp/index.php/improve/modules/manage?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA';
    var admin_notification_get_link = '/prestashop/custom/vt_axetor/admincp/index.php/common/notifications?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA';
    var admin_notification_push_link = adminNotificationPushLink = '/prestashop/custom/vt_axetor/admincp/index.php/common/notifications/ack?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjz";
        // line 40
        echo "GSotpTEhpNZA';
    var tab_modules_list = '';
    var update_success_msg = 'Update successful';
    var search_product_msg = 'Search for a product';
  </script>



<link
      rel=\"preload\"
      href=\"/prestashop/custom/vt_axetor/admincp/themes/new-theme/public/2d8017489da689caedc1.preload..woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/prestashop/custom/vt_axetor/admincp/themes/new-theme/public/create_product_default_theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/custom/vt_axetor/admincp/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"https://unpkg.com/@prestashopcorp/edition-reskin/dist/back.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/custom/vt_axetor/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/custom/vt_axetor/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/custom/vt_axetor/modules/leofeature/views/css/back.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/custom/vt_axetor/modules/leopopupsale/views/css/back.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/custom/vt_axetor/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/custom/vt_axetor/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/custom/vt_axetor/modules/leoelements/views/css/back.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/custom/vt_axetor/modules/leoextratab/views/css/back.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/custom/vt_axetor/modules/leoblog/views/css/admin/blogmenu.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/prestashop\\/custom\\/vt_axetor\\/admincp\\/\";
var baseDir = \"\\/prestash";
        // line 69
        echo "op\\/custom\\/vt_axetor\\/\";
var changeFormLanguageUrl = \"\\/prestashop\\/custom\\/vt_axetor\\/admincp\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\";
var currency = {\"iso_code\":\"USD\",\"sign\":\"\$\",\"name\":\"US Dollar\",\"format\":null};
var currency_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"USD\",\"currencySymbol\":\"\$\",\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"\\u00a4#,##0.00\",\"negativePattern\":\"-\\u00a4#,##0.00\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var leo_token = \"e0df1f58f806f570538336dde08b7598\";
var leofeature_module_dir = \"\\/prestashop\\/custom\\/vt_axetor\\/modules\\/leofeature\\/\";
var number_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":true};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
var url = \"http:\\/\\/localhost\\/prestashop\\/custom\\/vt_axetor\\/modules\\/leopopupsale\\/ajax.php\";
var url_ajax_blog = \"http:\\/\\/localhost\\/prestashop\\/custom\\/vt_axetor\\/modules\\/leoblog\\/adminajax.php\";
</script>
<script type=\"text/javascript\" src=\"/prestashop/custom/vt_axetor/modules/ps_edition_basic/views/js/favicon.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/custom/vt_axetor/modules/ps_edition_basic/views/js/hideMinifiedChecklist.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/custom/vt_axetor/admincp/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/custom/vt_axetor/js/jquery/plugins/jquery.chosen.js\"></";
        // line 86
        echo "script>
<script type=\"text/javascript\" src=\"/prestashop/custom/vt_axetor/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/custom/vt_axetor/js/admin.js?v=8.1.4\"></script>
<script type=\"text/javascript\" src=\"/prestashop/custom/vt_axetor/admincp/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/custom/vt_axetor/js/tools.js?v=8.1.4\"></script>
<script type=\"text/javascript\" src=\"/prestashop/custom/vt_axetor/admincp/themes/new-theme/public/create_product.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/custom/vt_axetor/modules/leofeature/views/js/back.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/custom/vt_axetor/modules/leopopupsale/views/js/back.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/custom/vt_axetor/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/custom/vt_axetor/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/custom/vt_axetor/modules/leoextratab/views/js/back.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/prestashop/custom/vt_axetor/admincp/index.php/common/notifications?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>
    <script>
        window.userLocale  = 'en';
        window.userflow_id = 'ct_55jfryadgneorc45cjqxpbf6o4';
    </script>
    <script type=\"module\" src=\"https://unpkg.com/@prestashopcorp/smb-edition-homepage/dist/assets/index.js\"></script><script>
            var admin_gamification_ajax_url = \"http:\\/\\/localhost\\/prestashop\\/custom\\/vt_axetor\\";
        // line 116
        echo "/admincp\\/index.php?controller=AdminGamification&token=ead6b84a83d7b840c08c67a93fdf878c\";
            var current_id_tab = 40;
        </script><script type=\"text/template\" id=\"btn-edit-page-builder-category\">
    <div>
\t\t\t\t\t<br />
\t\t\t<a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminLeoElementsCreator&token=edee72620fa6eb1e1a4254224a7a2b77\" target=\"_blank\" class=\"button button-primary button-hero edit_with_button_link\">
                            <img src=\"/prestashop/custom/vt_axetor/modules/leoelements/views/img/logo.png\" alt=\"Leo Elements Logo\">
                            Edit with Leo Elements Creator
\t\t\t</a>
\t\t    </div>
</script>

<script type=\"text/template\" id=\"btn-edit-page-builder-product\">
    <div>
\t\t                    <br />
                    <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminLeoElementsCreator&token=edee72620fa6eb1e1a4254224a7a2b77\" target=\"_blank\" class=\"button button-primary button-hero edit_with_button_link\">
                        <img src=\"/prestashop/custom/vt_axetor/modules/leoelements/views/img/logo.png\" alt=\"Leo Elements Logo\">
                        Edit with Leo Elements Creator
                    </a>
\t\t    </div>
</script>
\t
<script type=\"text/template\" id=\"btn-edit-page-builder-cms\">
    <div>
\t\t\t\t\t<br />
                        <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminLeoElementsCreator&token=edee72620fa6eb1e1a4254224a7a2b77\" target=\"_blank\" class=\"button button-primary button-hero edit_with_button_link\">
                            <img src=\"/prestashop/custom/vt_axetor/modules/leoelements/views/img/logo.png\" alt=\"Leo Elements Logo\">
                            Edit with Leo Elements Creator
                        </a>
\t\t    </div>
</script>

<script type=\"text/template\" id=\"btn-edit-page-builder-blog\">
    <div class=\"form-group\">
        <label class=\"control-label col-lg-3\"></label>
    ";
        // line 151
        echo "    <div class=\"col-lg-9\">
\t\t\t\t\t\t\t<a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminLeoElementsCreator&token=edee72620fa6eb1e1a4254224a7a2b77\" class=\"btn btn-info leo-btn-edit\"><i class=\"icon-external-link\"></i>
\t\t\t\t\tEdit content with - LeoElements
\t\t\t\t</a>
\t\t\t\t\t</div>
    </div>
</script>
\t 
<script type=\"text/template\" id=\"btn-edit-page-builder-manufacturer\">
    <div>
\t\t\t\t\t<br />
\t\t\t<a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminLeoElementsCreator&token=edee72620fa6eb1e1a4254224a7a2b77\" class=\"btn btn-info leo-btn-edit\"><i class=\"icon-external-link\"></i> 
\t\t\t\tEdit content with - LeoElements
\t\t\t</a>
\t\t    </div>
</script>
\t 
<script type=\"text/template\" id=\"btn-edit-page-builder-supplier\">
    <div>
\t\t\t\t\t<br />
\t\t\t<a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminLeoElementsCreator&token=edee72620fa6eb1e1a4254224a7a2b77\" class=\"btn btn-info leo-btn-edit\"><i class=\"icon-external-link\"></i> 
\t\t\t\tEdit content with - LeoElements
\t\t\t</a>
\t\t    </div>
</script>

<script type=\"text/template\" id=\"btn-edit-page-builder-leoguide\">
    <div>
\t\t\t\t\t<br />
                        <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminLeoElementsCreator&token=edee72620fa6eb1e1a4254224a7a2b77\" target=\"_blank\" class=\"button button-primary button-hero edit_with_button_link\">
                            <img src=\"/prestashop/custom/vt_axetor/modules/leoelements/views/img/logo.png\" alt=\"Leo Elements Logo\">
                            Edit with Leo Elements Creator
                        </a>
\t\t    </div>
</script>

<script type=\"text/javascript\">
\t\$(document).ready(function () {
\t\tvar \$wrapperCategory = \$('div#category_description, div#root_category_description').closest('.col-sm'),
\t\t\t\$wrapperProduct = \$('#features'),
\t\t\t\$wrapperCms = \$('#cms_page_content'),
\t\t\t\$wrapperBlog = \$('#smart_blog_post_form').find(\"[name^=content_]\").first()";
        // line 192
        echo ".parents('.form-group').last(),
\t\t\t\$wrapperManufacturer = \$('div#manufacturer_description').closest('.col-sm'),
\t\t\t\$wrapperSupplier = \$('div#supplier_description').closest('.col-sm'),
                        \$wrapperCms = \$('#cms_page_content'),
                        \$wrapperLeoGuide = \$('.js_guide_content').closest('.col-lg-8'),

\t\t\t\$btnTemplateCategory = \$('#btn-edit-page-builder-category'),
\t\t\t\$btnTemplateProduct = \$('#btn-edit-page-builder-product'),
\t\t\t\$btnTemplateCms = \$('#btn-edit-page-builder-cms'),
\t\t\t\$btnTemplateBlog = \$('#btn-edit-page-builder-blog'),
\t\t\t\$btnTemplateManufacturer = \$('#btn-edit-page-builder-manufacturer'),
\t\t\t\$btnTemplateSupplier = \$('#btn-edit-page-builder-supplier'),
                        \$btnTemplateLeoGuide = \$('#btn-edit-page-builder-leoguide');

\t\t\t\$wrapperCategory.append(\$btnTemplateCategory.html());
\t\t\t\$wrapperProduct.prepend(\$btnTemplateProduct.html());
\t\t\t\$wrapperCms.after(\$btnTemplateCms.html());
\t\t\t\$wrapperBlog.after(\$btnTemplateBlog.html());
\t\t\t\$wrapperManufacturer.append(\$btnTemplateManufacturer.html());
\t\t\t\$wrapperSupplier.append(\$btnTemplateSupplier.html());
                        \$wrapperLeoGuide.append(\$btnTemplateLeoGuide.html());
            if(!\$wrapperProduct.length){
            \t\$wrapperProduct = \$('#product_description_description').parent();
            \t\$wrapperProduct.append(\$btnTemplateProduct.html());
            }
\t});
</script>


";
        // line 221
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-en adminmodulesmanage developer-mode\"
  data-base-url=\"/prestashop/custom/vt_axetor/admincp/index.php\"  data-token=\"qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"/prestashop/custom/vt_axetor/admincp/index.php/modules/pseditionbasic/homepage?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\"></a>
      <span id=\"shop_version\">8.1.4</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Quick Access
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=f7e23a21bedfeb318d73a20d0f3a8293\"
                 data-item=\"Catalog evaluation\"
      >Catalog evaluation</a>
          <a class=\"dropdown-item quick-row-link  active\"
         href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php/improve/modules/manage?token=e685920b3d5f52ff77a180f85330c2cd\"
                 data-item=\"Installed modules\"
      >Installed modules</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php/sell/catalog/categories/new?token=e685920b3d5f52ff77a180f85330c2cd\"
                 data-item=\"New category\"
      >New category</a>
          <a class=\"dropdown-item quick-row-link new-product-button\"
         href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php/sell/catalog/products-v2/create?to";
        // line 255
        echo "ken=e685920b3d5f52ff77a180f85330c2cd\"
                 data-item=\"New product\"
      >New product</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=1081f3fbdc36c1dd236dc7e33d2f3ebf\"
                 data-item=\"New voucher\"
      >New voucher</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php/sell/orders?token=e685920b3d5f52ff77a180f85330c2cd\"
                 data-item=\"Orders\"
      >Orders</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-remove-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-method=\"remove\"
        data-quicklink-id=\"5\"
        data-rand=\"126\"
        data-icon=\"icon-AdminModulesSf\"
        data-url=\"index.php/improve/modules/manage\"
        data-post-link=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminQuickAccesses&token=9eed3250f22d48bc0f0663ff550a2683\"
        data-prompt-text=\"Please name this shortcut:\"
        data-link=\"Modules - List\"
      >
        <i class=\"material-icons\">remove_circle_outline</i>
        Remove from Quick Acess
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminQuickAccesses&token=9eed3250f22d48bc0f0663ff550a2683\">
      <i class=\"material-icons\">settings</i>
      Manage your quick accesses
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminSearch&amp;token=5ae33e3b411";
        // line 295
        echo "cf2680f81dcb15c61c44c\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Search (e.g.: product reference, customer name…)\" aria-label=\"Searchbar\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Everywhere
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Everywhere\" href=\"#\" data-value=\"0\" data-placeholder=\"What are you looking for?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Everywhere</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Product name, reference, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalog</a>
        <a class=\"dropdown-item\" data-item=\"Customers by name\" href=\"#\" data-value=\"2\" data-placeholder=\"Name\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Customers by name</a>
        <a class=\"dropdown-item\" data-item=\"Customers by ip address\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Customers by IP address</a>
        <a class=\"dropdown-item\" data-item=\"Orders\" href=\"#\" data-value=\"3\" data-placeholder=\"Order ID\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Orders</a>
        <a class=\"dropdown-item\" data-item=\"Invoices\" href=\"#\" data-value=\"4\" data-placeholder=\"Invoice number\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Invoices</a>
        <a class=\"dropdown-item\" data-item=\"Carts\" href=\"#\" data-value=\"5\" data-placeholder=\"Cart ID\" data-icon=\"icon-shopp";
        // line 312
        echo "ing-cart\"><i class=\"material-icons\">shopping_cart</i> Carts</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Module name\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">SEARCH</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">Cancel</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Quick Access</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=f7e23a21bedfeb318d73a20d0f3a8293\"
             data-item=\"Catalog evaluation\"
    >Catalog evaluation</a>
      <a class=\"dropdown-item quick-row-link active\"
       href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php/improve/modules/manage?token=e685920b3d5f52ff77a180f85330c2cd\"
             data-item=\"Installed modules\"
    >Installed modules</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php/sell/catalog/categories/new?token=e685920b3d5f52ff77a180f85330c2cd\"
             data-item=\"New category\"
    >New category</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php/sell/catalog/products-v2/create?token=e685920b3d5f52ff77a180f85330c2cd\"
             data-item=\"New product\"
    >New product</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=Adm";
        // line 349
        echo "inCartRules&amp;addcart_rule&amp;token=1081f3fbdc36c1dd236dc7e33d2f3ebf\"
             data-item=\"New voucher\"
    >New voucher</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php/sell/orders?token=e685920b3d5f52ff77a180f85330c2cd\"
             data-item=\"Orders\"
    >Orders</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-remove-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-method=\"remove\"
      data-quicklink-id=\"5\"
      data-rand=\"8\"
      data-icon=\"icon-AdminModulesSf\"
      data-url=\"index.php/improve/modules/manage\"
      data-post-link=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminQuickAccesses&token=9eed3250f22d48bc0f0663ff550a2683\"
      data-prompt-text=\"Please name this shortcut:\"
      data-link=\"Modules - List\"
    >
      <i class=\"material-icons\">remove_circle_outline</i>
      Remove from Quick Acess
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminQuickAccesses&token=9eed3250f22d48bc0f0663ff550a2683\">
    <i class=\"material-icons\">settings</i>
    Manage your quick accesses
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

              <div class=\"component hide-mobile-sm\" id=\"header-debug-mode-container\">
          <a class=\"link shop-state\"
             id=\"debug-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"<p class=&quot;text-left&quot;><strong>Your store is in debug mode.</strong></p><p class=&quot;text-left&quot;>All the PHP errors and messages are displayed. When you no longer need it, &lt;strong&gt;turn off&lt;/strong&gt; this mode.</p>\"
             href=\"/prestashop/custom/vt_axetor/admincp/index.php/configure/advanced/performance/?_token=qWRrFTaQOudRjbH3p";
        // line 389
        echo "DlyiSzmusTYqjzGSotpTEhpNZA\"
          >
            <i class=\"material-icons\">bug_report</i>
            <span>Debug mode</span>
          </a>
        </div>
      
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/prestashop/custom/vt_axetor/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>View my store</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Orders<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Customers<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
        ";
        // line 443
        echo "      data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new order for now :(<br>
              Have you checked your <strong><a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=00cea90626f11ddfa2874b795b71048c\">abandoned carts</a></strong>?<br>Your next order could be hiding there!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new customer for now :(<br>
              Are you active on social media these days?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new message for now.<br>
              Seems like all your customers are happy :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      from <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
   ";
        // line 491
        echo "   #_id_customer_ - <strong>_customer_name_</strong>_company_ - registered <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
          </div>
        
        <div class=\"component\" id=\"header-employee-container\">
          <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost/prestashop/custom/vt_axetor/img/pr/default.jpg\" alt=\"Demo\" /></span>
        <span class=\"employee_profile\">Welcome back Demo</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/prestashop/custom/vt_axetor/admincp/index.php/configure/advanced/employees/1/edit?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\">
      <i class=\"material-icons\">edit</i>
      <span>Your profile</span>
    </a>
    </div>

    <p class=\"divider\"></p>

                  <a class=\"dropdown-item \" href=\"https://accounts.distribution.prestashop.net?utm_source=localhost&utm_medium=back-office&utm_campaign=ps_accounts&utm_content=headeremployeedropdownlink\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">open_in_new</i> Manage your PrestaShop account
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=training-en&utm_mbo_source";
        // line 528
        echo "=menu-user-back-office\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">school</i> Training
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/en/experts?utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=expert-en&utm_mbo_source=menu-user-back-office\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">person_pin_circle</i> Find an expert
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"/prestashop/custom/vt_axetor/admincp/index.php/modules/mbo/modules/catalog/?utm_mbo_source=menu-user-back-office&_token=xApXeZAFauCI033H0iZtJsgpzyNHZJwKGcEf8xyMpTE&utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=addons-en&utm_mbo_source=menu-user-back-office\"  rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">extension</i> Prestashop Marketplace
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://help-center.prestashop.com/en?utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=help-center-en&utm_mbo_source=menu-user-back-office\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">help</i> Help Center
        </a>
                  <p class=\"divider\"></p>
            
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminLogin&amp;logout=1&amp;token=74a839f775c089b2a4d09bc53c2ec5ba\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Sign out</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/prestashop/custom/vt_axetor/admincp/index.php/configure/advanced/employees/toggle-navigation?";
        // line 554
        echo "_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"/prestashop/custom/vt_axetor/admincp/index.php/modules/pseditionbasic/homepage?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.1.4</span>
      </div>

      <ul class=\"main-menu\">
              
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"160\" id=\"tab-HOME\">
                <span class=\"title\">Welcome</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"161\" id=\"subtab-AdminPsEditionBasicHomepageController\">
                    <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/modules/pseditionbasic/homepage?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\">
                      <i class=\"material-icons mi-home\">home</i>
                      <span>
                      Home
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"1\" id=\"subtab-AdminDashboard\">
                    <a href=\"http://localhost/prestashop/custom/vt_axetor/adminc";
        // line 594
        echo "p/index.php?controller=AdminDashboard&amp;token=1fc7c4bf9d16c77f2f53963ee1ab3000\" class=\"link\">
                      <i class=\"material-icons mi-trending_up\">trending_up</i>
                      <span>
                      Dashboard
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Sell</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/sell/orders/?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Orders
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
               ";
        // line 632
        echo "               <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/sell/orders/?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> Orders
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/sell/orders/invoices/?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> Invoices
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/sell/orders/credit-slips/?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> Credit Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/sell/orders/delivery-slips/?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> Delivery Slips
                                </a>
                              </li>

                                               ";
        // line 661
        echo "                                   
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminCarts&amp;token=00cea90626f11ddfa2874b795b71048c\" class=\"link\"> Shopping Carts
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/sell/catalog/products?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/sell/catalog/products?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"li";
        // line 690
        echo "nk\"> Products
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/sell/catalog/categories?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> Categories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/sell/catalog/monitoring/?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> Monitoring
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminAttributesGroups&amp;token=6eda77581de818d88cbffe2e868e7607\" class=\"link\"> Attributes &amp; Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"1";
        // line 721
        echo "6\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/sell/catalog/brands/?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> Brands &amp; Suppliers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/sell/attachments/?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> Files
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminCartRules&amp;token=1081f3fbdc36c1dd236dc7e33d2f3ebf\" class=\"link\"> Discounts
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/sell/stocks/?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                       ";
        // line 750
        echo "       </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/sell/customers/?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Customers
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/sell/customers/?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> Customers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/sell/addresses/?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> Addresses
     ";
        // line 780
        echo "                           </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminCustomerThreads&amp;token=040004fca1c5d516492b5fe4fd6d1900\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Customer Service
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminCustomerThreads&amp;token=040004fca1c5d516492b5fe4fd6d1900\" class=\"link\"> Customer Service
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li clas";
        // line 811
        echo "s=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/sell/customer-service/order-messages/?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> Order Messages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminReturn&amp;token=c0537ed13ae7f62ebd6e16b346953d64\" class=\"link\"> Merchandise Returns
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/modules/metrics/legacy/stats?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Stats
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
 ";
        // line 841
        echo "                                                     
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"164\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/modules/metrics/legacy/stats?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> Stats
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"165\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/modules/metrics?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Improve</span>
            </li>

                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/modules/mbo/modules/catalog/?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\">
                      <i ";
        // line 875
        echo "class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                                                                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"151\" id=\"subtab-AdminPsMboModuleParent\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/modules/mbo/modules/catalog/?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> Marketplace
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/improve/modules/manage?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> Module Manager
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"180\" id=\"subtab-AdminLeoBootstrap";
        // line 903
        echo "MenuModule\">
                                <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminLeoBootstrapMenuModule&amp;token=56da2418c7c1b59ac0592b693d2d132e\" class=\"link\"> Leo Megamenu Configuration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"183\" id=\"subtab-AdminLeoSlideshowMenuModule\">
                                <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminLeoSlideshowMenuModule&amp;token=2bd05acde5da2b6fc9d470e6161b1689\" class=\"link\"> Leo Slideshow Configuration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"193\" id=\"subtab-AdminLeoQuickLoginModule\">
                                <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminLeoQuickLoginModule&amp;token=ffd070b40fbea04e5f37f83a3fa7ae9f\" class=\"link\"> Leo Quick Login Configuration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"196\" id=\"subtab-AdminLeoProductSearchModule\">
                                <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminLeoProductSearchModule&amp;token=4365a196a93d897bd37baf3d609663d8\" class=\"link\"> Leo Produ";
        // line 928
        echo "ct Search Configuration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"197\" id=\"subtab-AdminLeoSizechart\">
                                <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminLeoSizechart&amp;token=4536cdad21b0380179394cb8144c68c5\" class=\"link\"> Leo Size Chart
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"204\" id=\"subtab-AdminLeogalleryManagement\">
                                <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminLeogalleryManagement&amp;token=c21de700ebc17e376ec3ff12e67541de\" class=\"link\"> Leo Gallery
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/improve/design/themes/?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Design
                      </span>
      ";
        // line 960
        echo "                                              <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"137\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/improve/design/themes/?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> Theme &amp; Logo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"155\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/modules/mbo/themes/catalog/?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> Themes Catalog
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/improve/design/mail_theme/?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> Email Theme
                                </a>
                           ";
        // line 987
        echo "   </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/improve/design/cms-pages/?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/improve/design/modules/positions/?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminImages&amp;token=c30d61fdd7526766a4803edfcaffb0be\" class=\"link\"> Image Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/prestashop/custom/vt_axetor";
        // line 1017
        echo "/admincp/index.php/modules/link-widget/list?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> Link List
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminCarriers&amp;token=8900b5c24350e020c1842417733d686d\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Shipping
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminCarriers&amp;token=8900b5c24350e020c1842417733d686d\" class=\"link\"> Carriers
                                </a>
                              </li>

                                                                                  
                              
                                                    ";
        // line 1048
        echo "        
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/improve/shipping/preferences/?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"140\" id=\"subtab-AdminMbeConfiguration\">
                                <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminMbeConfiguration&amp;token=0f8322d0bfac2adfa5177449f4a0346f\" class=\"link\"> MBE - Configuration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"143\" id=\"subtab-AdminMbeShipping\">
                                <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminMbeShipping&amp;token=9b58716d01d576c1ab5a7e203b3a4248\" class=\"link\"> MBE - Shipments
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/prestashop/custom/vt_axeto";
        // line 1077
        echo "r/admincp/index.php/improve/payment/payment_methods?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Payment
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/improve/payment/payment_methods?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> Payment Methods
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/improve/payment/preferences?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      ";
        // line 1107
        echo "
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/improve/international/localization/?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/improve/international/localization/?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> Localization
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/improve/international/zones/?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> Locations
                                </a>
                              </li>

                                                ";
        // line 1136
        echo "                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/improve/international/taxes/?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/improve/international/translations/settings?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> Translations
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"125\" id=\"subtab-Marketing\">
                    <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminPsfacebookModule&amp;token=df1d3d97defba314bb263eaca2866bd9\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                            ";
        // line 1166
        echo "                </i>
                                            </a>
                                              <ul id=\"collapse-125\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"126\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminPsfacebookModule&amp;token=df1d3d97defba314bb263eaca2866bd9\" class=\"link\"> Facebook &amp; Instagram
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"158\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=0b328b843be9d91a44ef2230cff60c8d\" class=\"link\"> Google
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"169\" id=\"subtab-AdminLeoElements\">
                    <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminLeoElementsDashboard&amp;token=b987a054d2731c4dbf48536573ac9a95\" class=\"link\">
                      <i class=\"material-icons mi-brush\">brush</i>
                      <span>
                      Leo Elements Creator
   ";
        // line 1196
        echo "                   </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-169\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"170\" id=\"subtab-AdminLeoElementsDashboard\">
                                <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminLeoElementsDashboard&amp;token=b987a054d2731c4dbf48536573ac9a95\" class=\"link\"> Leo Dashboard
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"171\" id=\"subtab-AdminLeoElementsProfiles\">
                                <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminLeoElementsProfiles&amp;token=f7de05c8f023ebb4d3d04b30936a299d\" class=\"link\"> Profiles: Home or LandingPage
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"172\" id=\"subtab-AdminLeoElementsPositions\">
                                <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminLeoElementsPositions&amp;token";
        // line 1222
        echo "=8508356bc3b57939280b3e67bca9db91\" class=\"link\"> Positions: Header Content Footer
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"173\" id=\"subtab-AdminLeoElementsContents\">
                                <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminLeoElementsContents&amp;token=14f25f84d567fa802611435d017afb28\" class=\"link\"> Hook And Content Any Where
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"174\" id=\"subtab-AdminLeoElementsProducts\">
                                <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminLeoElementsProducts&amp;token=b5d8a936e11e2bb81e9c10140990dc7f\" class=\"link\"> Products Builder
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"175\" id=\"subtab-AdminLeoElementsCategory\">
                                <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminLeoElementsCategory&amp;token=d84cc11187d832ad27b75fa33ef739ed\" class=\"link\"> Categories Builder
                                </a>
                              </li>

                                                                                  
                  ";
        // line 1251
        echo "            
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"176\" id=\"subtab-AdminLeoElementsProductList\">
                                <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminLeoElementsProductList&amp;token=bd441df77a144eb53c2115d94d652fef\" class=\"link\"> Product Lists Builder
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"177\" id=\"subtab-AdminLeoElementsFont\">
                                <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminLeoElementsFont&amp;token=e755be646764c5556ca91e0a23beb5b9\" class=\"link\"> Font Configuration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"178\" id=\"subtab-AdminLeoElementsHook\">
                                <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminLeoElementsHook&amp;token=ab18090c6a02d64027d3e07ff6188500\" class=\"link\"> Hook Manage
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu";
        // line 1280
        echo "\" data-submenu=\"184\" id=\"subtab-AdminLeoblogManagement\">
                    <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminLeoblogDashboard&amp;token=94c4d1ebd51e1e215f50f9f35dc9e67b\" class=\"link\">
                      <i class=\"material-icons mi-create\">create</i>
                      <span>
                      Leo Blog Management
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-184\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"185\" id=\"subtab-AdminLeoblogDashboard\">
                                <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminLeoblogDashboard&amp;token=94c4d1ebd51e1e215f50f9f35dc9e67b\" class=\"link\"> Blog Dashboard
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"186\" id=\"subtab-AdminLeoblogCategories\">
                                <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminLeoblogCategories&amp;token=4c326754d77d38bef084d567654b2983\" class=\"link\"> Categories Management
                                </a>
                              </li>

                                                                           ";
        // line 1307
        echo "       
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"187\" id=\"subtab-AdminLeoblogBlogs\">
                                <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminLeoblogBlogs&amp;token=eb0e3a78222767b7929ebdf2a0c0ec7d\" class=\"link\"> Blogs Management
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"188\" id=\"subtab-AdminLeoblogComments\">
                                <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminLeoblogComments&amp;token=1d46572bf59f1769c83efe1a8cc7bcec\" class=\"link\"> Comment Management
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"189\" id=\"subtab-AdminLeoblogModule\">
                                <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminLeoblogModule&amp;token=054879232ab4e48954d6c84e320647a4\" class=\"link\"> Leo Blog Configuration
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"190\" id=\"subtab-AdminLeofeatur";
        // line 1337
        echo "eManagement\">
                    <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminLeofeatureModule&amp;token=2c97deb660d187f6c0b1e40cab48c94a\" class=\"link\">
                      <i class=\"material-icons mi-star\">star</i>
                      <span>
                      Leo Feature Management
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-190\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"191\" id=\"subtab-AdminLeofeatureModule\">
                                <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminLeofeatureModule&amp;token=2c97deb660d187f6c0b1e40cab48c94a\" class=\"link\"> Leo Feature Configuration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"192\" id=\"subtab-AdminLeofeatureReviews\">
                                <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminLeofeatureReviews&amp;token=f4086978750f4fd4cb6039a9a905f980\" class=\"link\"> Product Review Management
                                </a>
                              </li>

                                                                              </ul>
                    ";
        // line 1365
        echo "                    </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"198\" id=\"subtab-AdminLeoextratabManagement\">
                    <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminLeoextratabSetting&amp;token=3a2c439b796f0743eb863c3f7c03bfe1\" class=\"link\">
                      <i class=\"material-icons mi-tab\">tab</i>
                      <span>
                      Leo Extra Tab
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-198\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"199\" id=\"subtab-AdminLeoextratabSetting\">
                                <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminLeoextratabSetting&amp;token=3a2c439b796f0743eb863c3f7c03bfe1\" class=\"link\"> Tab Setting
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"200\" id=\"subtab-AdminLeoextratabTab\">
                                <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminLeoextratabTab&amp;token=8ca79b6052";
        // line 1393
        echo "2396786ac87998952eb5a5\" class=\"link\"> Tab List
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configure</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"162\" id=\"subtab-AdminPsEditionBasicSettingsController\">
                    <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/modules/pseditionbasic/settings?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Settings
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/configure/shop/preferences/preferences?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                  ";
        // line 1432
        echo "    Shop Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/configure/shop/preferences/preferences?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> General
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/configure/shop/order-preferences/?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> Order Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/configure/shop/product-preferences/?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" ";
        // line 1459
        echo "class=\"link\"> Product Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/configure/shop/customer-preferences/?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> Customer Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/configure/shop/contacts/?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/configure/shop/seo-urls/?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> Traffic &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo";
        // line 1490
        echo "\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminSearchConf&amp;token=be71a0d11f8d3ca6e4800eff59583dfd\" class=\"link\"> Search
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/configure/advanced/system-information/?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Advanced Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/configure/advanced/system-information/?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> Information
                                </a>
                         ";
        // line 1518
        echo "     </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/configure/advanced/performance/?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> Performance
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/configure/advanced/administration/?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/configure/advanced/emails/?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/prestashop/custom/vt_ax";
        // line 1548
        echo "etor/admincp/index.php/configure/advanced/import/?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> Import
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/configure/advanced/employees/?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> Team
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/configure/advanced/sql-requests/?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> Database
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/configure/advanced/logs/?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                         ";
        // line 1578
        echo "   
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/configure/advanced/webservice-keys/?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                                                                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/configure/advanced/feature-flags/?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> New &amp; Experimental Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/configure/advanced/security/?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> Security
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"168\"";
        // line 1606
        echo " id=\"subtab-AdminKlaviyoPsConfig\">
                    <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminKlaviyoPsConfig&amp;token=4245eff1cd1b28aa11f9bbce131d63e4\" class=\"link\">
                      <i class=\"material-icons mi-trending_up\">trending_up</i>
                      <span>
                      Klaviyo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Module Manager</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/improve/modules/manage?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" aria-current=\"page\">Modules</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Module manager          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add_module\"
                  href=\"#\"                  title=\"Upload a module\"                  data-toggle=\"pstooltip\"
                  data-placement=\"bottom\"                                  >
                  <i class=\"material-icons\">cloud_upload</i>                  Upload a module";
        // line 1655
        echo "
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Help\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/prestashop/custom/vt_axetor/admincp/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fen%252Fdoc%252FAdminModules%253Fversion%253D8.1.4%2526country%253Den/Help?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\"
                   id=\"product_form_open_help\"
                >
                  Help
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              <li class=\"nav-item\">
                    <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/improve/modules/manage?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" id=\"subtab-AdminModulesManage\" class=\"nav-link tab active current\" data-submenu=\"40\">
                      Modules
                      <span class=\"notification-container\">
                        <span class=\"notif";
        // line 1682
        echo "ication-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/improve/modules/alerts?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" id=\"subtab-AdminModulesNotifications\" class=\"nav-link tab \" data-submenu=\"41\">
                      Alerts
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/improve/modules/updates?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" id=\"subtab-AdminModulesUpdates\" class=\"nav-link tab \" data-submenu=\"42\">
                      Updates
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              ";
        // line 1702
        echo "                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    </ul>
    </div>
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-add_module\"
              href=\"#\"              title=\"Upload a module\"              data-toggle=\"pstooltip\"
              data-placement=\"bottom\"            >
              Upload a module
              <i class=\"material-icons\">cloud_upload</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Help\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/prestashop/custom/vt";
        // line 1723
        echo "_axetor/admincp/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fen%252Fdoc%252FAdminModules%253Fversion%253D8.1.4%2526country%253Den/Help?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\"
            >
              Help
            </a>
                        </div>
    </div>
  </div>
  <!-- begin D:\\xampp\\htdocs\\prestashop\\custom\\vt_axetor/modules/leoelements/views/templates/hook/page_content.tpl --><!-- end D:\\xampp\\htdocs\\prestashop\\custom\\vt_axetor/modules/leoelements/views/templates/hook/page_content.tpl -->
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  with-tabs\">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1744
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh no!</h1>
  <p class=\"mt-3\">
    The mobile version of this page is not available yet.
  </p>
  <p class=\"mt-2\">
    Please use a desktop computer to access this page, until is adapted to mobile.
  </p>
  <p class=\"mt-2\">
    Thank you.
  </p>
  <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/modules/pseditionbasic/homepage?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Back
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    <!-- begin D:\\xampp\\htdocs\\prestashop\\custom\\vt_axetor/modules/leoelements/views/templates/hook/page_content.tpl --><!-- end D:\\xampp\\htdocs\\prestashop\\custom\\vt_axetor/modules/leoelements/views/templates/hook/page_content.tpl -->
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1778
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 221
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1744
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_right"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_right"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1778
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__88bbe962f22cc9a41b6e471b60224e46";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2069 => 1778,  2000 => 1744,  1965 => 221,  1950 => 1778,  1910 => 1744,  1887 => 1723,  1864 => 1702,  1842 => 1682,  1813 => 1655,  1762 => 1606,  1732 => 1578,  1700 => 1548,  1668 => 1518,  1638 => 1490,  1605 => 1459,  1576 => 1432,  1535 => 1393,  1505 => 1365,  1475 => 1337,  1443 => 1307,  1414 => 1280,  1383 => 1251,  1352 => 1222,  1324 => 1196,  1292 => 1166,  1260 => 1136,  1229 => 1107,  1197 => 1077,  1166 => 1048,  1133 => 1017,  1101 => 987,  1072 => 960,  1038 => 928,  1011 => 903,  981 => 875,  945 => 841,  913 => 811,  880 => 780,  848 => 750,  817 => 721,  784 => 690,  753 => 661,  722 => 632,  682 => 594,  640 => 554,  612 => 528,  573 => 491,  523 => 443,  467 => 389,  425 => 349,  386 => 312,  367 => 295,  325 => 255,  286 => 221,  255 => 192,  212 => 151,  175 => 116,  143 => 86,  124 => 69,  93 => 40,  52 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ '<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/prestashop/custom/vt_axetor/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/prestashop/custom/vt_axetor/img/app_icon.png\" />

<title>Module manager • Prestashop 814</title>

  <script type=\"text/javascript\">
    var help_class_name = \\'AdminModulesManage\\';
    var iso_user = \\'en\\';
    var lang_is_rtl = \\'0\\';
    var full_language_code = \\'en-us\\';
    var full_cldr_language_code = \\'en-US\\';
    var country_iso_code = \\'US\\';
    var _PS_VERSION_ = \\'8.1.4\\';
    var roundMode = 2;
    var youEditFieldFor = \\'\\';
        var new_order_msg = \\'A new order has been placed on your store.\\';
    var order_number_msg = \\'Order number: \\';
    var total_msg = \\'Total: \\';
    var from_msg = \\'From: \\';
    var see_order_msg = \\'View this order\\';
    var new_customer_msg = \\'A new customer registered on your store.\\';
    var customer_name_msg = \\'Customer name: \\';
    var new_msg = \\'A new message was posted on your store.\\';
    var see_msg = \\'Read this message\\';
    var token = \\'d18a22b14ee0b4fb7df6e27ebcf930a0\\';
    var currentIndex = \\'index.php?controller=AdminModulesManage\\';
    var employee_token = \\'6276fe92a0ea39a9e0e10bcbdd8bbbf8\\';
    var choose_language_translate = \\'Choose language:\\';
    var default_language = \\'1\\';
    var admin_modules_link = \\'/prestashop/custom/vt_axetor/admincp/index.php/improve/modules/manage?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\\';
    var admin_notification_get_link = \\'/prestashop/custom/vt_axetor/admincp/index.php/common/notifications?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\\';
    var admin_notification_push_link = adminNotificationPushLink = \\'/prestashop/custom/vt_axetor/admincp/index.php/common/notifications/ack?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjz' | raw }}{{ 'GSotpTEhpNZA\\';
    var tab_modules_list = \\'\\';
    var update_success_msg = \\'Update successful\\';
    var search_product_msg = \\'Search for a product\\';
  </script>



<link
      rel=\"preload\"
      href=\"/prestashop/custom/vt_axetor/admincp/themes/new-theme/public/2d8017489da689caedc1.preload..woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/prestashop/custom/vt_axetor/admincp/themes/new-theme/public/create_product_default_theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/custom/vt_axetor/admincp/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"https://unpkg.com/@prestashopcorp/edition-reskin/dist/back.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/custom/vt_axetor/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/custom/vt_axetor/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/custom/vt_axetor/modules/leofeature/views/css/back.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/custom/vt_axetor/modules/leopopupsale/views/css/back.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/custom/vt_axetor/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/custom/vt_axetor/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/custom/vt_axetor/modules/leoelements/views/css/back.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/custom/vt_axetor/modules/leoextratab/views/css/back.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/custom/vt_axetor/modules/leoblog/views/css/admin/blogmenu.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\\\/prestashop\\\\/custom\\\\/vt_axetor\\\\/admincp\\\\/\";
var baseDir = \"\\\\/prestash' | raw }}{{ 'op\\\\/custom\\\\/vt_axetor\\\\/\";
var changeFormLanguageUrl = \"\\\\/prestashop\\\\/custom\\\\/vt_axetor\\\\/admincp\\\\/index.php\\\\/configure\\\\/advanced\\\\/employees\\\\/change-form-language?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\";
var currency = {\"iso_code\":\"USD\",\"sign\":\"\$\",\"name\":\"US Dollar\",\"format\":null};
var currency_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"currencyCode\":\"USD\",\"currencySymbol\":\"\$\",\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"positivePattern\":\"\\\\u00a4#,##0.00\",\"negativePattern\":\"-\\\\u00a4#,##0.00\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var leo_token = \"e0df1f58f806f570538336dde08b7598\";
var leofeature_module_dir = \"\\\\/prestashop\\\\/custom\\\\/vt_axetor\\\\/modules\\\\/leofeature\\\\/\";
var number_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":true};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
var url = \"http:\\\\/\\\\/localhost\\\\/prestashop\\\\/custom\\\\/vt_axetor\\\\/modules\\\\/leopopupsale\\\\/ajax.php\";
var url_ajax_blog = \"http:\\\\/\\\\/localhost\\\\/prestashop\\\\/custom\\\\/vt_axetor\\\\/modules\\\\/leoblog\\\\/adminajax.php\";
</script>
<script type=\"text/javascript\" src=\"/prestashop/custom/vt_axetor/modules/ps_edition_basic/views/js/favicon.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/custom/vt_axetor/modules/ps_edition_basic/views/js/hideMinifiedChecklist.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/custom/vt_axetor/admincp/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/custom/vt_axetor/js/jquery/plugins/jquery.chosen.js\"></' | raw }}{{ 'script>
<script type=\"text/javascript\" src=\"/prestashop/custom/vt_axetor/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/custom/vt_axetor/js/admin.js?v=8.1.4\"></script>
<script type=\"text/javascript\" src=\"/prestashop/custom/vt_axetor/admincp/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/custom/vt_axetor/js/tools.js?v=8.1.4\"></script>
<script type=\"text/javascript\" src=\"/prestashop/custom/vt_axetor/admincp/themes/new-theme/public/create_product.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/custom/vt_axetor/modules/leofeature/views/js/back.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/custom/vt_axetor/modules/leopopupsale/views/js/back.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/custom/vt_axetor/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/custom/vt_axetor/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/custom/vt_axetor/modules/leoextratab/views/js/back.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: \\'#DF0067\\',
      textColor: \\'#FFFFFF\\',
      notificationGetUrl: \\'/prestashop/custom/vt_axetor/admincp/index.php/common/notifications?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\\',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>
    <script>
        window.userLocale  = \\'en\\';
        window.userflow_id = \\'ct_55jfryadgneorc45cjqxpbf6o4\\';
    </script>
    <script type=\"module\" src=\"https://unpkg.com/@prestashopcorp/smb-edition-homepage/dist/assets/index.js\"></script><script>
            var admin_gamification_ajax_url = \"http:\\\\/\\\\/localhost\\\\/prestashop\\\\/custom\\\\/vt_axetor\\\\' | raw }}{{ '/admincp\\\\/index.php?controller=AdminGamification&token=ead6b84a83d7b840c08c67a93fdf878c\";
            var current_id_tab = 40;
        </script><script type=\"text/template\" id=\"btn-edit-page-builder-category\">
    <div>
\t\t\t\t\t<br />
\t\t\t<a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminLeoElementsCreator&token=edee72620fa6eb1e1a4254224a7a2b77\" target=\"_blank\" class=\"button button-primary button-hero edit_with_button_link\">
                            <img src=\"/prestashop/custom/vt_axetor/modules/leoelements/views/img/logo.png\" alt=\"Leo Elements Logo\">
                            Edit with Leo Elements Creator
\t\t\t</a>
\t\t    </div>
</script>

<script type=\"text/template\" id=\"btn-edit-page-builder-product\">
    <div>
\t\t                    <br />
                    <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminLeoElementsCreator&token=edee72620fa6eb1e1a4254224a7a2b77\" target=\"_blank\" class=\"button button-primary button-hero edit_with_button_link\">
                        <img src=\"/prestashop/custom/vt_axetor/modules/leoelements/views/img/logo.png\" alt=\"Leo Elements Logo\">
                        Edit with Leo Elements Creator
                    </a>
\t\t    </div>
</script>
\t
<script type=\"text/template\" id=\"btn-edit-page-builder-cms\">
    <div>
\t\t\t\t\t<br />
                        <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminLeoElementsCreator&token=edee72620fa6eb1e1a4254224a7a2b77\" target=\"_blank\" class=\"button button-primary button-hero edit_with_button_link\">
                            <img src=\"/prestashop/custom/vt_axetor/modules/leoelements/views/img/logo.png\" alt=\"Leo Elements Logo\">
                            Edit with Leo Elements Creator
                        </a>
\t\t    </div>
</script>

<script type=\"text/template\" id=\"btn-edit-page-builder-blog\">
    <div class=\"form-group\">
        <label class=\"control-label col-lg-3\"></label>
    ' | raw }}{{ '    <div class=\"col-lg-9\">
\t\t\t\t\t\t\t<a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminLeoElementsCreator&token=edee72620fa6eb1e1a4254224a7a2b77\" class=\"btn btn-info leo-btn-edit\"><i class=\"icon-external-link\"></i>
\t\t\t\t\tEdit content with - LeoElements
\t\t\t\t</a>
\t\t\t\t\t</div>
    </div>
</script>
\t 
<script type=\"text/template\" id=\"btn-edit-page-builder-manufacturer\">
    <div>
\t\t\t\t\t<br />
\t\t\t<a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminLeoElementsCreator&token=edee72620fa6eb1e1a4254224a7a2b77\" class=\"btn btn-info leo-btn-edit\"><i class=\"icon-external-link\"></i> 
\t\t\t\tEdit content with - LeoElements
\t\t\t</a>
\t\t    </div>
</script>
\t 
<script type=\"text/template\" id=\"btn-edit-page-builder-supplier\">
    <div>
\t\t\t\t\t<br />
\t\t\t<a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminLeoElementsCreator&token=edee72620fa6eb1e1a4254224a7a2b77\" class=\"btn btn-info leo-btn-edit\"><i class=\"icon-external-link\"></i> 
\t\t\t\tEdit content with - LeoElements
\t\t\t</a>
\t\t    </div>
</script>

<script type=\"text/template\" id=\"btn-edit-page-builder-leoguide\">
    <div>
\t\t\t\t\t<br />
                        <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminLeoElementsCreator&token=edee72620fa6eb1e1a4254224a7a2b77\" target=\"_blank\" class=\"button button-primary button-hero edit_with_button_link\">
                            <img src=\"/prestashop/custom/vt_axetor/modules/leoelements/views/img/logo.png\" alt=\"Leo Elements Logo\">
                            Edit with Leo Elements Creator
                        </a>
\t\t    </div>
</script>

<script type=\"text/javascript\">
\t\$(document).ready(function () {
\t\tvar \$wrapperCategory = \$(\\'div#category_description, div#root_category_description\\').closest(\\'.col-sm\\'),
\t\t\t\$wrapperProduct = \$(\\'#features\\'),
\t\t\t\$wrapperCms = \$(\\'#cms_page_content\\'),
\t\t\t\$wrapperBlog = \$(\\'#smart_blog_post_form\\').find(\"[name^=content_]\").first()' | raw }}{{ '.parents(\\'.form-group\\').last(),
\t\t\t\$wrapperManufacturer = \$(\\'div#manufacturer_description\\').closest(\\'.col-sm\\'),
\t\t\t\$wrapperSupplier = \$(\\'div#supplier_description\\').closest(\\'.col-sm\\'),
                        \$wrapperCms = \$(\\'#cms_page_content\\'),
                        \$wrapperLeoGuide = \$(\\'.js_guide_content\\').closest(\\'.col-lg-8\\'),

\t\t\t\$btnTemplateCategory = \$(\\'#btn-edit-page-builder-category\\'),
\t\t\t\$btnTemplateProduct = \$(\\'#btn-edit-page-builder-product\\'),
\t\t\t\$btnTemplateCms = \$(\\'#btn-edit-page-builder-cms\\'),
\t\t\t\$btnTemplateBlog = \$(\\'#btn-edit-page-builder-blog\\'),
\t\t\t\$btnTemplateManufacturer = \$(\\'#btn-edit-page-builder-manufacturer\\'),
\t\t\t\$btnTemplateSupplier = \$(\\'#btn-edit-page-builder-supplier\\'),
                        \$btnTemplateLeoGuide = \$(\\'#btn-edit-page-builder-leoguide\\');

\t\t\t\$wrapperCategory.append(\$btnTemplateCategory.html());
\t\t\t\$wrapperProduct.prepend(\$btnTemplateProduct.html());
\t\t\t\$wrapperCms.after(\$btnTemplateCms.html());
\t\t\t\$wrapperBlog.after(\$btnTemplateBlog.html());
\t\t\t\$wrapperManufacturer.append(\$btnTemplateManufacturer.html());
\t\t\t\$wrapperSupplier.append(\$btnTemplateSupplier.html());
                        \$wrapperLeoGuide.append(\$btnTemplateLeoGuide.html());
            if(!\$wrapperProduct.length){
            \t\$wrapperProduct = \$(\\'#product_description_description\\').parent();
            \t\$wrapperProduct.append(\$btnTemplateProduct.html());
            }
\t});
</script>


' | raw }}{% block stylesheets %}{% endblock %}{% block extra_stylesheets %}{% endblock %}</head>{{ '

<body
  class=\"lang-en adminmodulesmanage developer-mode\"
  data-base-url=\"/prestashop/custom/vt_axetor/admincp/index.php\"  data-token=\"qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"/prestashop/custom/vt_axetor/admincp/index.php/modules/pseditionbasic/homepage?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\"></a>
      <span id=\"shop_version\">8.1.4</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Quick Access
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=f7e23a21bedfeb318d73a20d0f3a8293\"
                 data-item=\"Catalog evaluation\"
      >Catalog evaluation</a>
          <a class=\"dropdown-item quick-row-link  active\"
         href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php/improve/modules/manage?token=e685920b3d5f52ff77a180f85330c2cd\"
                 data-item=\"Installed modules\"
      >Installed modules</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php/sell/catalog/categories/new?token=e685920b3d5f52ff77a180f85330c2cd\"
                 data-item=\"New category\"
      >New category</a>
          <a class=\"dropdown-item quick-row-link new-product-button\"
         href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php/sell/catalog/products-v2/create?to' | raw }}{{ 'ken=e685920b3d5f52ff77a180f85330c2cd\"
                 data-item=\"New product\"
      >New product</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=1081f3fbdc36c1dd236dc7e33d2f3ebf\"
                 data-item=\"New voucher\"
      >New voucher</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php/sell/orders?token=e685920b3d5f52ff77a180f85330c2cd\"
                 data-item=\"Orders\"
      >Orders</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-remove-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-method=\"remove\"
        data-quicklink-id=\"5\"
        data-rand=\"126\"
        data-icon=\"icon-AdminModulesSf\"
        data-url=\"index.php/improve/modules/manage\"
        data-post-link=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminQuickAccesses&token=9eed3250f22d48bc0f0663ff550a2683\"
        data-prompt-text=\"Please name this shortcut:\"
        data-link=\"Modules - List\"
      >
        <i class=\"material-icons\">remove_circle_outline</i>
        Remove from Quick Acess
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminQuickAccesses&token=9eed3250f22d48bc0f0663ff550a2683\">
      <i class=\"material-icons\">settings</i>
      Manage your quick accesses
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminSearch&amp;token=5ae33e3b411' | raw }}{{ 'cf2680f81dcb15c61c44c\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Search (e.g.: product reference, customer name…)\" aria-label=\"Searchbar\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Everywhere
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Everywhere\" href=\"#\" data-value=\"0\" data-placeholder=\"What are you looking for?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Everywhere</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Product name, reference, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalog</a>
        <a class=\"dropdown-item\" data-item=\"Customers by name\" href=\"#\" data-value=\"2\" data-placeholder=\"Name\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Customers by name</a>
        <a class=\"dropdown-item\" data-item=\"Customers by ip address\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Customers by IP address</a>
        <a class=\"dropdown-item\" data-item=\"Orders\" href=\"#\" data-value=\"3\" data-placeholder=\"Order ID\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Orders</a>
        <a class=\"dropdown-item\" data-item=\"Invoices\" href=\"#\" data-value=\"4\" data-placeholder=\"Invoice number\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Invoices</a>
        <a class=\"dropdown-item\" data-item=\"Carts\" href=\"#\" data-value=\"5\" data-placeholder=\"Cart ID\" data-icon=\"icon-shopp' | raw }}{{ 'ing-cart\"><i class=\"material-icons\">shopping_cart</i> Carts</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Module name\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">SEARCH</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$(\\'#bo_query\\').one(\\'click\\', function() {
    \$(this).closest(\\'form\\').removeClass(\\'collapsed\\');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">Cancel</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Quick Access</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=f7e23a21bedfeb318d73a20d0f3a8293\"
             data-item=\"Catalog evaluation\"
    >Catalog evaluation</a>
      <a class=\"dropdown-item quick-row-link active\"
       href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php/improve/modules/manage?token=e685920b3d5f52ff77a180f85330c2cd\"
             data-item=\"Installed modules\"
    >Installed modules</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php/sell/catalog/categories/new?token=e685920b3d5f52ff77a180f85330c2cd\"
             data-item=\"New category\"
    >New category</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php/sell/catalog/products-v2/create?token=e685920b3d5f52ff77a180f85330c2cd\"
             data-item=\"New product\"
    >New product</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=Adm' | raw }}{{ 'inCartRules&amp;addcart_rule&amp;token=1081f3fbdc36c1dd236dc7e33d2f3ebf\"
             data-item=\"New voucher\"
    >New voucher</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php/sell/orders?token=e685920b3d5f52ff77a180f85330c2cd\"
             data-item=\"Orders\"
    >Orders</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-remove-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-method=\"remove\"
      data-quicklink-id=\"5\"
      data-rand=\"8\"
      data-icon=\"icon-AdminModulesSf\"
      data-url=\"index.php/improve/modules/manage\"
      data-post-link=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminQuickAccesses&token=9eed3250f22d48bc0f0663ff550a2683\"
      data-prompt-text=\"Please name this shortcut:\"
      data-link=\"Modules - List\"
    >
      <i class=\"material-icons\">remove_circle_outline</i>
      Remove from Quick Acess
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminQuickAccesses&token=9eed3250f22d48bc0f0663ff550a2683\">
    <i class=\"material-icons\">settings</i>
    Manage your quick accesses
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

              <div class=\"component hide-mobile-sm\" id=\"header-debug-mode-container\">
          <a class=\"link shop-state\"
             id=\"debug-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"<p class=&quot;text-left&quot;><strong>Your store is in debug mode.</strong></p><p class=&quot;text-left&quot;>All the PHP errors and messages are displayed. When you no longer need it, &lt;strong&gt;turn off&lt;/strong&gt; this mode.</p>\"
             href=\"/prestashop/custom/vt_axetor/admincp/index.php/configure/advanced/performance/?_token=qWRrFTaQOudRjbH3p' | raw }}{{ 'DlyiSzmusTYqjzGSotpTEhpNZA\"
          >
            <i class=\"material-icons\">bug_report</i>
            <span>Debug mode</span>
          </a>
        </div>
      
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/prestashop/custom/vt_axetor/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>View my store</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Orders<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Customers<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
        ' | raw }}{{ '      data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new order for now :(<br>
              Have you checked your <strong><a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=00cea90626f11ddfa2874b795b71048c\">abandoned carts</a></strong>?<br>Your next order could be hiding there!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new customer for now :(<br>
              Are you active on social media these days?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new message for now.<br>
              Seems like all your customers are happy :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href=\\'order_url\\'>
      #_id_order_ -
      from <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href=\\'customer_url\\'>
   ' | raw }}{{ '   #_id_customer_ - <strong>_customer_name_</strong>_company_ - registered <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href=\\'message_url\\'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
          </div>
        
        <div class=\"component\" id=\"header-employee-container\">
          <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost/prestashop/custom/vt_axetor/img/pr/default.jpg\" alt=\"Demo\" /></span>
        <span class=\"employee_profile\">Welcome back Demo</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/prestashop/custom/vt_axetor/admincp/index.php/configure/advanced/employees/1/edit?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\">
      <i class=\"material-icons\">edit</i>
      <span>Your profile</span>
    </a>
    </div>

    <p class=\"divider\"></p>

                  <a class=\"dropdown-item \" href=\"https://accounts.distribution.prestashop.net?utm_source=localhost&utm_medium=back-office&utm_campaign=ps_accounts&utm_content=headeremployeedropdownlink\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">open_in_new</i> Manage your PrestaShop account
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=training-en&utm_mbo_source' | raw }}{{ '=menu-user-back-office\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">school</i> Training
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/en/experts?utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=expert-en&utm_mbo_source=menu-user-back-office\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">person_pin_circle</i> Find an expert
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"/prestashop/custom/vt_axetor/admincp/index.php/modules/mbo/modules/catalog/?utm_mbo_source=menu-user-back-office&_token=xApXeZAFauCI033H0iZtJsgpzyNHZJwKGcEf8xyMpTE&utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=addons-en&utm_mbo_source=menu-user-back-office\"  rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">extension</i> Prestashop Marketplace
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://help-center.prestashop.com/en?utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=help-center-en&utm_mbo_source=menu-user-back-office\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">help</i> Help Center
        </a>
                  <p class=\"divider\"></p>
            
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminLogin&amp;logout=1&amp;token=74a839f775c089b2a4d09bc53c2ec5ba\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Sign out</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/prestashop/custom/vt_axetor/admincp/index.php/configure/advanced/employees/toggle-navigation?' | raw }}{{ '_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"/prestashop/custom/vt_axetor/admincp/index.php/modules/pseditionbasic/homepage?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.1.4</span>
      </div>

      <ul class=\"main-menu\">
              
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"160\" id=\"tab-HOME\">
                <span class=\"title\">Welcome</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"161\" id=\"subtab-AdminPsEditionBasicHomepageController\">
                    <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/modules/pseditionbasic/homepage?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\">
                      <i class=\"material-icons mi-home\">home</i>
                      <span>
                      Home
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"1\" id=\"subtab-AdminDashboard\">
                    <a href=\"http://localhost/prestashop/custom/vt_axetor/adminc' | raw }}{{ 'p/index.php?controller=AdminDashboard&amp;token=1fc7c4bf9d16c77f2f53963ee1ab3000\" class=\"link\">
                      <i class=\"material-icons mi-trending_up\">trending_up</i>
                      <span>
                      Dashboard
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Sell</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/sell/orders/?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Orders
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
               ' | raw }}{{ '               <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/sell/orders/?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> Orders
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/sell/orders/invoices/?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> Invoices
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/sell/orders/credit-slips/?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> Credit Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/sell/orders/delivery-slips/?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> Delivery Slips
                                </a>
                              </li>

                                               ' | raw }}{{ '                                   
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminCarts&amp;token=00cea90626f11ddfa2874b795b71048c\" class=\"link\"> Shopping Carts
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/sell/catalog/products?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/sell/catalog/products?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"li' | raw }}{{ 'nk\"> Products
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/sell/catalog/categories?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> Categories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/sell/catalog/monitoring/?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> Monitoring
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminAttributesGroups&amp;token=6eda77581de818d88cbffe2e868e7607\" class=\"link\"> Attributes &amp; Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"1' | raw }}{{ '6\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/sell/catalog/brands/?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> Brands &amp; Suppliers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/sell/attachments/?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> Files
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminCartRules&amp;token=1081f3fbdc36c1dd236dc7e33d2f3ebf\" class=\"link\"> Discounts
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/sell/stocks/?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                       ' | raw }}{{ '       </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/sell/customers/?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Customers
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/sell/customers/?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> Customers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/sell/addresses/?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> Addresses
     ' | raw }}{{ '                           </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminCustomerThreads&amp;token=040004fca1c5d516492b5fe4fd6d1900\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Customer Service
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminCustomerThreads&amp;token=040004fca1c5d516492b5fe4fd6d1900\" class=\"link\"> Customer Service
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li clas' | raw }}{{ 's=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/sell/customer-service/order-messages/?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> Order Messages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminReturn&amp;token=c0537ed13ae7f62ebd6e16b346953d64\" class=\"link\"> Merchandise Returns
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/modules/metrics/legacy/stats?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Stats
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
 ' | raw }}{{ '                                                     
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"164\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/modules/metrics/legacy/stats?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> Stats
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"165\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/modules/metrics?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Improve</span>
            </li>

                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/modules/mbo/modules/catalog/?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\">
                      <i ' | raw }}{{ 'class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                                                                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"151\" id=\"subtab-AdminPsMboModuleParent\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/modules/mbo/modules/catalog/?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> Marketplace
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/improve/modules/manage?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> Module Manager
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"180\" id=\"subtab-AdminLeoBootstrap' | raw }}{{ 'MenuModule\">
                                <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminLeoBootstrapMenuModule&amp;token=56da2418c7c1b59ac0592b693d2d132e\" class=\"link\"> Leo Megamenu Configuration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"183\" id=\"subtab-AdminLeoSlideshowMenuModule\">
                                <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminLeoSlideshowMenuModule&amp;token=2bd05acde5da2b6fc9d470e6161b1689\" class=\"link\"> Leo Slideshow Configuration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"193\" id=\"subtab-AdminLeoQuickLoginModule\">
                                <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminLeoQuickLoginModule&amp;token=ffd070b40fbea04e5f37f83a3fa7ae9f\" class=\"link\"> Leo Quick Login Configuration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"196\" id=\"subtab-AdminLeoProductSearchModule\">
                                <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminLeoProductSearchModule&amp;token=4365a196a93d897bd37baf3d609663d8\" class=\"link\"> Leo Produ' | raw }}{{ 'ct Search Configuration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"197\" id=\"subtab-AdminLeoSizechart\">
                                <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminLeoSizechart&amp;token=4536cdad21b0380179394cb8144c68c5\" class=\"link\"> Leo Size Chart
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"204\" id=\"subtab-AdminLeogalleryManagement\">
                                <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminLeogalleryManagement&amp;token=c21de700ebc17e376ec3ff12e67541de\" class=\"link\"> Leo Gallery
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/improve/design/themes/?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Design
                      </span>
      ' | raw }}{{ '                                              <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"137\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/improve/design/themes/?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> Theme &amp; Logo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"155\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/modules/mbo/themes/catalog/?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> Themes Catalog
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/improve/design/mail_theme/?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> Email Theme
                                </a>
                           ' | raw }}{{ '   </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/improve/design/cms-pages/?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/improve/design/modules/positions/?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminImages&amp;token=c30d61fdd7526766a4803edfcaffb0be\" class=\"link\"> Image Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/prestashop/custom/vt_axetor' | raw }}{{ '/admincp/index.php/modules/link-widget/list?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> Link List
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminCarriers&amp;token=8900b5c24350e020c1842417733d686d\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Shipping
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminCarriers&amp;token=8900b5c24350e020c1842417733d686d\" class=\"link\"> Carriers
                                </a>
                              </li>

                                                                                  
                              
                                                    ' | raw }}{{ '        
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/improve/shipping/preferences/?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"140\" id=\"subtab-AdminMbeConfiguration\">
                                <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminMbeConfiguration&amp;token=0f8322d0bfac2adfa5177449f4a0346f\" class=\"link\"> MBE - Configuration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"143\" id=\"subtab-AdminMbeShipping\">
                                <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminMbeShipping&amp;token=9b58716d01d576c1ab5a7e203b3a4248\" class=\"link\"> MBE - Shipments
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/prestashop/custom/vt_axeto' | raw }}{{ 'r/admincp/index.php/improve/payment/payment_methods?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Payment
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/improve/payment/payment_methods?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> Payment Methods
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/improve/payment/preferences?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      ' | raw }}{{ '
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/improve/international/localization/?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/improve/international/localization/?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> Localization
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/improve/international/zones/?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> Locations
                                </a>
                              </li>

                                                ' | raw }}{{ '                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/improve/international/taxes/?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/improve/international/translations/settings?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> Translations
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"125\" id=\"subtab-Marketing\">
                    <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminPsfacebookModule&amp;token=df1d3d97defba314bb263eaca2866bd9\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                            ' | raw }}{{ '                </i>
                                            </a>
                                              <ul id=\"collapse-125\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"126\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminPsfacebookModule&amp;token=df1d3d97defba314bb263eaca2866bd9\" class=\"link\"> Facebook &amp; Instagram
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"158\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=0b328b843be9d91a44ef2230cff60c8d\" class=\"link\"> Google
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"169\" id=\"subtab-AdminLeoElements\">
                    <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminLeoElementsDashboard&amp;token=b987a054d2731c4dbf48536573ac9a95\" class=\"link\">
                      <i class=\"material-icons mi-brush\">brush</i>
                      <span>
                      Leo Elements Creator
   ' | raw }}{{ '                   </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-169\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"170\" id=\"subtab-AdminLeoElementsDashboard\">
                                <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminLeoElementsDashboard&amp;token=b987a054d2731c4dbf48536573ac9a95\" class=\"link\"> Leo Dashboard
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"171\" id=\"subtab-AdminLeoElementsProfiles\">
                                <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminLeoElementsProfiles&amp;token=f7de05c8f023ebb4d3d04b30936a299d\" class=\"link\"> Profiles: Home or LandingPage
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"172\" id=\"subtab-AdminLeoElementsPositions\">
                                <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminLeoElementsPositions&amp;token' | raw }}{{ '=8508356bc3b57939280b3e67bca9db91\" class=\"link\"> Positions: Header Content Footer
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"173\" id=\"subtab-AdminLeoElementsContents\">
                                <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminLeoElementsContents&amp;token=14f25f84d567fa802611435d017afb28\" class=\"link\"> Hook And Content Any Where
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"174\" id=\"subtab-AdminLeoElementsProducts\">
                                <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminLeoElementsProducts&amp;token=b5d8a936e11e2bb81e9c10140990dc7f\" class=\"link\"> Products Builder
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"175\" id=\"subtab-AdminLeoElementsCategory\">
                                <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminLeoElementsCategory&amp;token=d84cc11187d832ad27b75fa33ef739ed\" class=\"link\"> Categories Builder
                                </a>
                              </li>

                                                                                  
                  ' | raw }}{{ '            
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"176\" id=\"subtab-AdminLeoElementsProductList\">
                                <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminLeoElementsProductList&amp;token=bd441df77a144eb53c2115d94d652fef\" class=\"link\"> Product Lists Builder
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"177\" id=\"subtab-AdminLeoElementsFont\">
                                <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminLeoElementsFont&amp;token=e755be646764c5556ca91e0a23beb5b9\" class=\"link\"> Font Configuration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"178\" id=\"subtab-AdminLeoElementsHook\">
                                <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminLeoElementsHook&amp;token=ab18090c6a02d64027d3e07ff6188500\" class=\"link\"> Hook Manage
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu' | raw }}{{ '\" data-submenu=\"184\" id=\"subtab-AdminLeoblogManagement\">
                    <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminLeoblogDashboard&amp;token=94c4d1ebd51e1e215f50f9f35dc9e67b\" class=\"link\">
                      <i class=\"material-icons mi-create\">create</i>
                      <span>
                      Leo Blog Management
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-184\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"185\" id=\"subtab-AdminLeoblogDashboard\">
                                <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminLeoblogDashboard&amp;token=94c4d1ebd51e1e215f50f9f35dc9e67b\" class=\"link\"> Blog Dashboard
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"186\" id=\"subtab-AdminLeoblogCategories\">
                                <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminLeoblogCategories&amp;token=4c326754d77d38bef084d567654b2983\" class=\"link\"> Categories Management
                                </a>
                              </li>

                                                                           ' | raw }}{{ '       
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"187\" id=\"subtab-AdminLeoblogBlogs\">
                                <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminLeoblogBlogs&amp;token=eb0e3a78222767b7929ebdf2a0c0ec7d\" class=\"link\"> Blogs Management
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"188\" id=\"subtab-AdminLeoblogComments\">
                                <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminLeoblogComments&amp;token=1d46572bf59f1769c83efe1a8cc7bcec\" class=\"link\"> Comment Management
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"189\" id=\"subtab-AdminLeoblogModule\">
                                <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminLeoblogModule&amp;token=054879232ab4e48954d6c84e320647a4\" class=\"link\"> Leo Blog Configuration
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"190\" id=\"subtab-AdminLeofeatur' | raw }}{{ 'eManagement\">
                    <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminLeofeatureModule&amp;token=2c97deb660d187f6c0b1e40cab48c94a\" class=\"link\">
                      <i class=\"material-icons mi-star\">star</i>
                      <span>
                      Leo Feature Management
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-190\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"191\" id=\"subtab-AdminLeofeatureModule\">
                                <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminLeofeatureModule&amp;token=2c97deb660d187f6c0b1e40cab48c94a\" class=\"link\"> Leo Feature Configuration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"192\" id=\"subtab-AdminLeofeatureReviews\">
                                <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminLeofeatureReviews&amp;token=f4086978750f4fd4cb6039a9a905f980\" class=\"link\"> Product Review Management
                                </a>
                              </li>

                                                                              </ul>
                    ' | raw }}{{ '                    </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"198\" id=\"subtab-AdminLeoextratabManagement\">
                    <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminLeoextratabSetting&amp;token=3a2c439b796f0743eb863c3f7c03bfe1\" class=\"link\">
                      <i class=\"material-icons mi-tab\">tab</i>
                      <span>
                      Leo Extra Tab
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-198\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"199\" id=\"subtab-AdminLeoextratabSetting\">
                                <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminLeoextratabSetting&amp;token=3a2c439b796f0743eb863c3f7c03bfe1\" class=\"link\"> Tab Setting
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"200\" id=\"subtab-AdminLeoextratabTab\">
                                <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminLeoextratabTab&amp;token=8ca79b6052' | raw }}{{ '2396786ac87998952eb5a5\" class=\"link\"> Tab List
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configure</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"162\" id=\"subtab-AdminPsEditionBasicSettingsController\">
                    <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/modules/pseditionbasic/settings?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Settings
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/configure/shop/preferences/preferences?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                  ' | raw }}{{ '    Shop Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/configure/shop/preferences/preferences?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> General
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/configure/shop/order-preferences/?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> Order Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/configure/shop/product-preferences/?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" ' | raw }}{{ 'class=\"link\"> Product Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/configure/shop/customer-preferences/?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> Customer Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/configure/shop/contacts/?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/configure/shop/seo-urls/?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> Traffic &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo' | raw }}{{ '\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminSearchConf&amp;token=be71a0d11f8d3ca6e4800eff59583dfd\" class=\"link\"> Search
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/configure/advanced/system-information/?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Advanced Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/configure/advanced/system-information/?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> Information
                                </a>
                         ' | raw }}{{ '     </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/configure/advanced/performance/?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> Performance
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/configure/advanced/administration/?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/configure/advanced/emails/?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/prestashop/custom/vt_ax' | raw }}{{ 'etor/admincp/index.php/configure/advanced/import/?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> Import
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/configure/advanced/employees/?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> Team
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/configure/advanced/sql-requests/?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> Database
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/configure/advanced/logs/?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                         ' | raw }}{{ '   
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/configure/advanced/webservice-keys/?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                                                                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/configure/advanced/feature-flags/?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> New &amp; Experimental Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/configure/advanced/security/?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"link\"> Security
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"168\"' | raw }}{{ ' id=\"subtab-AdminKlaviyoPsConfig\">
                    <a href=\"http://localhost/prestashop/custom/vt_axetor/admincp/index.php?controller=AdminKlaviyoPsConfig&amp;token=4245eff1cd1b28aa11f9bbce131d63e4\" class=\"link\">
                      <i class=\"material-icons mi-trending_up\">trending_up</i>
                      <span>
                      Klaviyo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Module Manager</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/improve/modules/manage?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" aria-current=\"page\">Modules</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Module manager          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add_module\"
                  href=\"#\"                  title=\"Upload a module\"                  data-toggle=\"pstooltip\"
                  data-placement=\"bottom\"                                  >
                  <i class=\"material-icons\">cloud_upload</i>                  Upload a module' | raw }}{{ '
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Help\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/prestashop/custom/vt_axetor/admincp/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fen%252Fdoc%252FAdminModules%253Fversion%253D8.1.4%2526country%253Den/Help?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\"
                   id=\"product_form_open_help\"
                >
                  Help
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              <li class=\"nav-item\">
                    <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/improve/modules/manage?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" id=\"subtab-AdminModulesManage\" class=\"nav-link tab active current\" data-submenu=\"40\">
                      Modules
                      <span class=\"notification-container\">
                        <span class=\"notif' | raw }}{{ 'ication-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/improve/modules/alerts?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" id=\"subtab-AdminModulesNotifications\" class=\"nav-link tab \" data-submenu=\"41\">
                      Alerts
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/improve/modules/updates?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" id=\"subtab-AdminModulesUpdates\" class=\"nav-link tab \" data-submenu=\"42\">
                      Updates
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              ' | raw }}{{ '                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    </ul>
    </div>
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-add_module\"
              href=\"#\"              title=\"Upload a module\"              data-toggle=\"pstooltip\"
              data-placement=\"bottom\"            >
              Upload a module
              <i class=\"material-icons\">cloud_upload</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Help\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/prestashop/custom/vt' | raw }}{{ '_axetor/admincp/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fen%252Fdoc%252FAdminModules%253Fversion%253D8.1.4%2526country%253Den/Help?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\"
            >
              Help
            </a>
                        </div>
    </div>
  </div>
  <!-- begin D:\\\\xampp\\\\htdocs\\\\prestashop\\\\custom\\\\vt_axetor/modules/leoelements/views/templates/hook/page_content.tpl --><!-- end D:\\\\xampp\\\\htdocs\\\\prestashop\\\\custom\\\\vt_axetor/modules/leoelements/views/templates/hook/page_content.tpl -->
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  with-tabs\">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ' | raw }}{% block content_header %}{% endblock %}{% block content %}{% endblock %}{% block content_footer %}{% endblock %}{% block sidebar_right %}{% endblock %}{{ '

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh no!</h1>
  <p class=\"mt-3\">
    The mobile version of this page is not available yet.
  </p>
  <p class=\"mt-2\">
    Please use a desktop computer to access this page, until is adapted to mobile.
  </p>
  <p class=\"mt-2\">
    Thank you.
  </p>
  <a href=\"/prestashop/custom/vt_axetor/admincp/index.php/modules/pseditionbasic/homepage?_token=qWRrFTaQOudRjbH3pDlyiSzmusTYqjzGSotpTEhpNZA\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Back
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    <!-- begin D:\\\\xampp\\\\htdocs\\\\prestashop\\\\custom\\\\vt_axetor/modules/leoelements/views/templates/hook/page_content.tpl --><!-- end D:\\\\xampp\\\\htdocs\\\\prestashop\\\\custom\\\\vt_axetor/modules/leoelements/views/templates/hook/page_content.tpl -->
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
' | raw }}{% block javascripts %}{% endblock %}{% block extra_javascripts %}{% endblock %}{% block translate_javascripts %}{% endblock %}</body>{{ '
</html>' | raw }}", "__string_template__88bbe962f22cc9a41b6e471b60224e46", "");
    }
}
