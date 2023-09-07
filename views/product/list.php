
<div class="container mt-3">
    <div class="x_panel">
        <div class="x_title">
            <h2>Stripped table <small>Stripped table subtitle</small></h2>

            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Username</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach($list as $item){

                    echo  "<tr>";
                    echo   "<th scope='row''>".$item["id"]."</th>";
                    echo  "<td>".$item['name']."</td>";
                    echo  "<td>".$item['description']."</td>";

                    echo "</tr>";


                }
                ?>
                </tbody>

            </table>
        </div>
    </div>

</div>
