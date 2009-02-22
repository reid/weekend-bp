<?php
/**
 * OpenSocial WeekendApps
 * by Reid Burke
 */

require 'inc/lib.php';

$loc = $_POST['loc'];

?>
<page style="list">
    <models>
        <model>
            <instance>
                <data>
                    <user-location>
                        <state>CA</state>
                        <country>USA</country>
                    </user-location>
                </data>
            </instance>
            <submission method="urlencoded-post" resource="location.php"/>
        </model>
    </models>
<?php
echo renderHeader();
?>
    <content>
        <module>
<?php
if ($loc):
?>
            <block>Got location: <?php echo $loc; ?></block>
<?php
else: // show form
?>
            <block>Enter a location to get started.</block>
            <location-chooser ref="user-location">
                <label>Near:</label>
            </location-chooser>
            <submit>
                <label>Find Places</label>
            </submit>
<?php
endif;
?>
            <navigation-bar>
                <back>
                    <label>Back to Home</label>
                    <load-page event="activate" page="index.php"/>
                </back>
            </navigation-bar>
        </module>
    </content>
<?php echo renderFooter(); ?>
</page>
