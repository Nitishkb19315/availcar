<?php require_once("./config.php"); ?>
<?php require_once("./functions.php"); ?>
<div class="dropdown bootstrap-select show-tick" style="width: 100%;">
    <select class="selectpicker" name="model_id" id="model" data-width="100%" title="Select Model" multiple="multiple" data-max-options="1" data-style="ui-select" tabindex="-98">
        <option value="as">first</option>
    </select>
    <button type="button" class="btn dropdown-toggle bs-placeholder ui-select" data-toggle="dropdown" role="button" data-id="model" title="Select Model" aria-expanded="false">
        <div class="filter-option">
            <div class="filter-option-inner">
                <div class="filter-option-inner-inner">Select Model</div>
            </div>
        </div>
    </button>
    <div class="dropdown-menu" role="combobox" x-placement="bottom-start" style="max-height: 382.75px; overflow: hidden; min-height: 0px; position: absolute; transform: translate3d(0px, 50px, 0px); top: 0px; left: 0px; will-change: transform;">
        <div class="inner show" role="listbox" aria-expanded="false" tabindex="-1" style="max-height: 364.75px; overflow-y: auto; min-height: 0px;">
            <ul class="dropdown-menu inner show">
                <li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text">first</span></a></li>
            </ul>
        </div>
    </div>
</div>