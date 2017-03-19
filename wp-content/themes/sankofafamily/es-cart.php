<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="/css/w3.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <script src="/js/jquery.min.js"></script>
    <script src="/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="/css/jquery.dataTables.min.css">
    <script>
        $(document).ready(function() {
            $('#carttable').dataTable({
                "paging": false,
                "info": false,
                "columnDefs": [{
                        "targets": 4,
                        "orderable": false
                    },
                    {
                        "targets": 2,
                        "searchable": false
                    }
                ]
            });
            $('#carttable_filter').remove();
        });

        function searchtable() {
            $('#carttable').dataTable().fnFilter($('#searchfilter').val());
        }
        
        function setItem3Total() {
            if($('#item3price').val() != "") {
                $('#item3total').html($('#item3price').val());
                $('#totalprice').html(parseInt($('#item1total').html()) + parseInt($('#item2total').html()) + parseInt($('#item3total').html()));
            } else {
                $('#item3total').html(0);
                $('#totalprice').html(parseInt($('#item1total').html()) + parseInt($('#item2total').html()));
            }
        }

    </script>
</head>

<body>
    <div class="w3-center">
        <?php
        session_start();
        require_once('DBConnect.php');
        
        $query = "select * from cs_cart where CustomerId=" . $_SESSION['esuserid'] . " and Sold=0 and Trash=0";
        $result = $mysqli->query($query);
        $CartItemName = "";
        $CartItemTotal = 0;
        $CartQuantity = "";
        $CartPrice = "";
        
        if(($result) && ($result->num_rows !== 0)){ 
            echo "<p><input class='w3-input estore-input-login w3-opacity' type='text' name='searchfilter' id='searchfilter' onkeyup='searchtable()' placeholder='search'></p><table id='carttable'><thead><tr><th>商品信息</th><th>单价</th><th>数量</th><th>金额</th><th>操作</th></tr></thead><tbody>";
            while($row = $result->fetch_assoc()) {
                if($row['CartItemId'] == 1) {
                    $CartItemName = "Trust Setup Service";
                    $CartItemTotal = "<td id='item1total'>" . ($row['Price'] * $row['CartQuantity']) . "</td>";
                    $CartPrice = $row['Price'];
                    $CartQuantity = "<select><option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option></select>";
                } elseif($row['CartItemId'] == 2) {
                    $CartItemName = "Business Study Service";
                    $CartItemTotal = "<td id='item2total'>" . ($row['Price'] * $row['CartQuantity']) . "</td>";
                    $CartPrice = $row['Price'];
                    $CartQuantity = "<select><option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option></select>";
                } else {
                    $CartItemName = "Expression of Interest";
                    $CartItemTotal = "<td id='item3total'>" . ($row['Price'] * $row['CartQuantity']) . "</td>";
                    $CartPrice = "<input type='text' name='item3price' id='item3price' value='" . $row['Price'] . "' style='width:50px' onkeyup='setItem3Total()'>";
                    $CartQuantity = "1";
                }
                echo "<tr><td>" . $CartItemName . "</td><td>" . $CartPrice . "</td><td>" . $CartQuantity . "</td>" . $CartItemTotal ."<td>操作</td></tr>";
            }
            $totalquery = "SELECT SUM(Price * CartQuantity) AS Total FROM cs_cart WHERE CustomerId=" . $_SESSION['esuserid'] . " AND Sold=0 AND Trash=0";
            $totalresult = $mysqli->query($totalquery);
            $totalrow = $totalresult->fetch_assoc();
            echo "</tbody><tfoot><tr><td>Total</td><td></td><td></td><td id='totalprice'>" . $totalrow['Total'] . "</td><td></td></tr></tfoot></table>";
        } else {
            echo "<p>请添加产品到购物车</p>";
        } ?>
    </div>
</body>

</html>
