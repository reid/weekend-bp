<?php
/**
 * OpenSocial WeekendApps
 * by Reid Burke
 */

header('Content-Type: application/x-blueprint+xml');
header('Cache-Control: no-cache');

function renderHeader() {
    return <<<EOXML
    <page-header>
        <masthead>
            <layout-items>
                <block class="title">Foodr!</block>
            </layout-items>
        </masthead>
    </page-header>
EOXML;
}

function renderFooter() {
    return <<<EOXML
    <page-footer>
        <block>Created by Yahoos for 
            <inline-trigger>
                <label>WeekendApps</label>
                <load event="activate" resource="http://opensocial.weekendapps.com/"/>
            </inline-trigger>
        </block>
        <block>
            <inline-trigger>
                <label>Source on github</label>
                <load event="activate" resource="http://github.com/nshah/weekend"/>
            </inline-trigger>
        </block>
    </page-footer>
EOXML;
}
