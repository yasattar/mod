<div class="grid-view">
    <div class="box box-primary">
        <div class="content-header with-border">
          <h1>User Privilege</h1>
        </div>
        <table class="table table-striped table-bordered" id="table">
            <tbody>
                <?php
                foreach ($permissionSet['data'] as $pp => $pSet) {
                    ?>
                    <tr class="even">
                        <th><?= $permissionSet['info'][$pp] ?></th>
                        <?php
                        foreach ($pSet as $label => $val) {
                            $checked = $val == 1 ? 'checked' : '';
                            $disabled = (isset($disabled) && $disabled)? "disabled" : "";

                            echo '<td>
                                        <input type="hidden" value="0" name="permission[' . $pp . '][' . $label . ']" />
                                        <input type="checkbox" name="permission[' . $pp . '][' . $label . ']" value="1" class="view_privilages"  data-off-color="danger" data-on-color="success" data-size="mini" ' . $checked .' '. $disabled.'>
                                        <strong>' . ucfirst($label) . '</strong>        
                                    </td>';
                        }
                        ?>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>