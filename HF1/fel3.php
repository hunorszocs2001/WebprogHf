

<table>

        <tbody>
            <?php
                for( $i = 1; $i<=10; $i++){
                    echo "<tr>";
                    for( $j = 1; $j<=10; $j++){
                        echo "<td>" . number_format(($i / $j), 2) . "</td>";
                    }
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
