{**
 * Copyright   PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright   PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 *}
{block name='category_miniature_item'}
  <section class="category-miniature">
    <a href="{$category.url}">
    <picture>
        {if !empty($category.image.medium.sources.avif)}<source srcset="{$category.image.medium.sources.avif}" type="image/avif">{/if}
        {if !empty($category.image.medium.sources.webp)}<source srcset="{$category.image.medium.sources.webp}" type="image/webp">{/if}
      <img class="img-fluid" 
        src="{$category.image.medium.url}"
        alt="{if !empty($category.image.legend)}{$category.image.legend}{else}{$category.name}{/if}"
        loading="lazy"
      >
    </picture>
    </a>

    <h1 class="h2">
      <a href="{$category.url}">{$category.name}</a>
    </h1>

    <div class="category-description">{$category.description nofilter}</div>
  </section>
{/block}
