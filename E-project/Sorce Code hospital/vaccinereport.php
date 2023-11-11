<?php
        include('topbar.php');
        $userid = $_SESSION['userid'];
        ?>
         
          
        

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Vaccination report</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            
                                            <th></th>
                                            <th>Unit</th>
                                            <th>Expiry date</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $fetch = "SELECT *
                                        FROM `childs_appt` as ca 
                                        INNER JOIN `child` as cd ON ca.child_id = cd.id 
                                        INNER JOIN `userdata` as ud ON ca.user_id = ud.id 
                                        INNER JOIN `hdata` as hd ON ca.hid = hd.id 
                                        INNER JOIN `vaccine_stock` as vs ON ca.vac_id = vs.id 
                                        WHERE ca.status = 1 AND ca.user_id = '$userid'";
                                        $data = mysqli_query($connect,$fetch);


                                       
                                        while($row = mysqli_fetch_assoc($data)){
                                        ?>
                                        <tr>
                                            <td><?php echo $row['vac_name'] ?></td>
                                            <td><?php echo $row['Units'] ?></td>
                                            <td><?php echo $row['expiry_date'] ?></td>
                                            
                                        </tr>
                                    </tbody>
                                    <?php }?>
                                </table>
                            </div></div></div>










   

</div>
</div>
</div>




<?php include('footer.php');  ?>
</body>
    </html>