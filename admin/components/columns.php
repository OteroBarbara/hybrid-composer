<?php
// =============================================================================
// COLUMNS.PHP
// -----------------------------------------------------------------------------
// Hybric Composer columns admin component
// =============================================================================
?>
<div id="cnt_hc_column">
    <div data-hc-id="_ID" data-hc-component="hc_column" data-hc-setting="section_content" class="hc-column hc-tmp">
        <i class="button-move-complete button-move-up"></i>
        <i class="button-move-complete button-move-down"></i>
        <div class="column-menu">    
        <i title="Ancho" class="button-column icon-grid" data-hc-setting="column_width" data-hc-component="value" data-value="hc-tmp"></i>
            <i title="Aimación" class="button-anima button-anima-section icon-eye-view" data-hc-setting="animation" data-hc-component="value" data-value="">
                <input type="hidden" data-hc-setting="animation_time" class="animation-time" value="" />
                <input type="hidden" data-hc-setting="timeline_animation" class="timeline-animation" value="" />
                <input type="hidden" data-hc-setting="timeline_delay" class="timeline-delay" value="" />
                <input type="hidden" data-hc-setting="timeline_order" class="timeline-order" value="" />
            </i>
            <i title="Duplicar" class="button-copy icon-files"></i>
            <i title="Mover" class="button-move icon-arrow-move"></i>
            <i title="Ajustes" class="button-css icon-gear-setting-2" data-hc-setting="css_classes" data-hc-component="value" data-value="">
                <input type="hidden" data-hc-setting="custom_css_classes" class="custom-css-classes" value="" />
                <input type="hidden" data-hc-setting="custom_css_styles" class="custom-css-styles" value="" />
            </i>
            <i class="button-close icon-remove-delete"></i>
        </div>
        <div class="column-content">
            <div data-hc-setting="main_content" data-hc-id="main_content" data-hc-container="repeater" class="row">
                <div class="clear"></div>
                <div title="Agregar componente" class="hc-add-component column-add column-empty">
                    <i class="icon-plus-add-2"></i>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
