<?php 
//<input type="hidden" id="item_id" value="'.$row[8].'">
    while($row = mysqli_fetch_array($sql)){
        $total += $row[2]*$row[3];
        echo '<table id="ref" style="background-color: #071425;color:whitesmoke;font-size: 20px;border-radius: 10px">
            <tr>
                <td style="width: 1%"><img style="border-radius: 10px;min-width: 128px;" class="image is-128x128" src="../../Admin/php/parts/upload/'.$row[6].'" alt="Pictures"></td>
                <td style="
                        text-align: left;
                        width: 60%;
                        max-width: 50px;
                        overflow: hidden;
                        white-space: nowrap;
                        text-overflow: ellipsis;
                ">'.$row[1].'<br><span style="font-size: 17px">'.$row[7].'</span></td>
                <td id="price" style="width: 10%;">'.number_format($row[2]*$row[3],2,'.',',').'</td>
                <td style="float: right;">
                    <input readonly id="'.$row[5].'" name="qquantity" type="number" min="1" max='.($row[4]).' value="'.$row[3].'">
                    <button id="'.$row[5].'" class="button is-danger is-small"style="margin-top: 4px;"name="delete" id="delete" type="button"><i class="fal fa-trash"></i></button>
                </td>
            </tr>
        </table>
        <input type="hidden" name="item_id" value="'.$row[8].'">';
    }
?>