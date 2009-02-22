<?php
/**
 * OpenSocial WeekendApps
 * by Reid Burke
 */

require 'inc/lib.php';

?>
<page style="list">
    <models>
        <model>
            <instance>
                <data>
                    <search-location/>
                </data>
            </instance>
            <submission method="urlencoded-post" resource="search.php"/>
        </model>
    </models>
<?php echo renderHeader(); ?>
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
<?php echo renderFooter(); ?>
</page>
