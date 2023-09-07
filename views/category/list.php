

<div style="padding-top:20px;" class="container  ">
    <a href="/dars.loc/index.php/category/add" class="btn btn-dark mb-3">Add New</a>
    <a href="/dars.loc/index.php/category/list" class="btn btn-dark mb-3">Home</a>

    <table class="table table-hover text-center">
        <thead class="table-dark">
        <tr>
            <th class="boss " scope="col">ID</th>
            <th scope="col">image</th>
            <th scope="col"> Name</th>
<!--            <th scope="col">Description</th>-->
<!--            <th class="boss "  scope="col">Email</th>-->
<!--            <th class=" boss"  scope="col">Gender</th>-->
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach($list as $item){
            ?>
            <tr>
                <td class=" boss" ><?php echo $item->id ?></td>
                <td>
null
<!--                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal--><?php //echo $item['id']; ?><!--">-->
<!--                        <img src="--><?php //echo "../../uploads/" . $row['image'] ?><!--" width="50px" height="50px">-->
<!--                    </a>-->
                </td>
                <td><?php echo $item->name ?></td>
<!--                <td>--><?php //echo $row["last_name"] ?><!--</td>-->
<!--                <td class=" boss" >--><?php //echo $row["email"] ?><!--</td>-->
<!--                <td class=" boss" >--><?php //echo $row["gender"] ?><!--</td>-->
                <td>
                    <a href="/dars.loc/index.php/category/delete/<?php echo $item->id ?>" ><button type="button" class="btn btn-danger">Delete</button></a>
                    <a href="/dars.loc/index.php/category/update/<?php echo $item->id ?>" ><button type="button" class="btn btn-secondary">Edit</button></a>


                </td>
            </tr>
            <!-- Modal -->
            <div class="modal fade" id="imageModal<?php echo $item->id ?>" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title" id="imageModalLabel"> <i class="fas fa-user"></i>  <?php echo $item->name ?> </h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>img</p>
<!--                            <img src="--><?php //echo "../../uploads/" . $item['image'] ?><!--" class="img-fluid">-->
                            <div style=" margin-top:5px;display:flex; width:100%; align-items-center; justify-content:space-between;">

<!--                                <h1 ><i class="fa-solid fa-envelope"></i> --><?php //echo $item["email"] ?><!-- </h1><h1 >--><?php //echo $item["gender"] ?><!--</h1>-->
                                <h1>info</h1>
                                <!-- Add other data here -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php }?>
        </tbody>
    </table>
                <nav  aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <?php for($page=1; $page<=$pageCount; $page++) {?>
                        <li class="page-item"><a class="page-link" href="/dars.loc/index.php/category/list?page=<?=$page?>"><?=$page?></a></li>
                        <?php }?>

                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>



