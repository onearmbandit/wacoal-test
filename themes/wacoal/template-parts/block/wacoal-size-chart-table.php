<?php
/**
 * HTML for size chart table
 *
 * @package Wacoal
 */
?>
<table style="width:100%" style="border:2px solid red">
<tr style="border:2px solid red">
    <?php echo esc_attr($table_heading);?>
</tr>
<tr style="border:2px solid red">
    <?php
    foreach ( $table_data_header as $header ) {
        ?>
    <th style="border:2px solid red"><?php echo esc_attr($header['c']);?></th>
        <?php
    }
    ?>
  </tr>
  <?php
    foreach ( $table_data as $key => $index ) { ?>
    <tr style="border:2px solid red">
        <?php  foreach ($index as $data) {
            ?>
    <td style="border:2px solid red"><?php echo esc_attr($data['c']); ?></td>
            <?php
        }
        ?>
    </tr>
        <?php
    }
    ?>
</table>
