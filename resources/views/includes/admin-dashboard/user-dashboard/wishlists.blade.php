<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-primary" data-collapsed="0">
            <div class="panel-heading">
                <div class="panel-title">
                    Wishlists
                </div>
            </div>
            <div class="panel-body">
                <table class="table table-bordered datatable">
                    <thead>
                    <tr>
                        <th width="80"><div>#</div></th>
                        <th><div>Cover</div></th>
                        <th><div>Title</div></th>
                        <th><div>Categories</div></th>
                        <th><div>Uploaded by</div></th>
                        <th><div>Status</div></th>
                        <th><div>Date added</div></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $counter = 0;
                    $listings = $this->crud_model->get_user_wise_wishlist();
                    foreach ($listings as $listing): ?>
                    <tr>
                        <td><?php echo ++$counter; ?></td>
                        <td class="text-center"><img class = "rounded-circle img-thumbnail" src="<?php echo asset('uploads/listing_cover_photo/'.$listing['listing_cover']); ?>" alt="" style="height: 50px; width: 50px;"></td>
                        <td><a href="<?php echo get_listing_url($listing['id']) ?>"><?php echo $listing['name']; ?></a></td>
                        <td>
                            <?php
                            $categories = json_decode($listing['categories']);
                            foreach ($categories as $category):
                            $category_details = $this->crud_model->get_categories($category)->row_array();?>
                            <span class="badge badge-secondary"><?php echo $category_details['name']; ?></span><br>
                            <?php endforeach; ?>
                        </td>
                        <td>
                            <?php
                            $user_details = $this->user_model->get_all_users($listing['user_id'])->row_array();
                            echo $user_details['name'];
                            ?>
                        </td>
                        <td><?php echo $listing['status']; ?></td>
                        <td><?php echo date('D, d-M-Y', $listing['date_added']); ?></td>
                    </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div><!-- end col-->
</div>
