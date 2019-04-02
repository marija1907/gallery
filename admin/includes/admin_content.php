  <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Admin
                            <small>Subheading</small>
                        </h1>
                        
                        <?php
                        include("user.php");
                       // $user = new User();
                        
                            $found_users = User::find_users_id(2);
                           $user = new User();
                           $user->id = $found_users['id'];
                            $user->username = $found_users['username'];
                            $user->password = $found_users['password'];
                            $user->first_name = $found_users['first_name'];
                            $user->last_name = $found_users['last_name'];

                            echo $user->id;
                     /*  $result_set = User::find_all_users();
                        while($row = mysqli_fetch_array($result_set)){
                            echo $row['username'] . "<br>";
                        }*/
                        
                        
                       
                        
                        
                        
                        ?>
                        
                        
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Blank Page
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->