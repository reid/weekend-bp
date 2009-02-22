<?php
/**
 * Foodr / WeekendApps
 * by Reid Burke
 *
 */

header('Content-Type: application/x-blueprint+xml');
header('Cache-Control: no-cache');
?>

<page style="list">
    <models>
        <model>
            <instance>
                <data>
                    <search-location/>
                </data>
            </instance>
            <submission method="urlencoded-post" resource="index.php"/>
        </model>
    </models>
    <page-header>
        <masthead>
            <layout-items>
                <block class="title">Foodr!</block>
            </layout-items>
        </masthead>
    </page-header>
    <content>
        <module>
            <block>Find what's on the menu!</block>
            <search-box ref="search-location">
                <label>Find</label>
            </search-box>
            <placard layout="simple" class="link">
                <layout-items>
                    <block class="title">Nearby</block>
                </layout-items>
                <load event="activate" resource="nearby.php"/>
            </placard>
            <placard layout="simple" class="link">
                <layout-items>
                    <block class="title">Location</block>
                </layout-items>
                <load event="activate" resource="location.php"/>
            </placard>
        </module>
    </content>
</page>
