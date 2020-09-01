<div class="row ">
    <div class="col-lg-12">
        <a href="{{route('categories.create')}}" class="btn btn-primary alignToTitle"><i class="entypo-plus"></i>Add New Category</a>
    </div><!-- end col-->
</div>
<div class="gallery-env">
    <div class="row">
        <?php foreach ($categories as $category):
        if($category['parent'] > 0)
            continue;
//        $sub_categories = $this->Category->get_sub_categories($category['id'])->result_array(); ?>
        <div class="col-sm-4 on-hover-action" id = "<?php echo $category['id']; ?>">
            <article class="album">
                <header>
                    <a href="javascript:void(0)">
                        <img src="{{asset('uploads/category_thumbnails/'.$category['thumbnail'])}}" />
                    </a>
                </header>

                <section class="album-info">
                    <h3><a href="javascript::"><i class="<?php echo $category['icon_class']; ?>"></i> <?php echo $category['name']; ?></a></h3>
                    <p><?php echo count($sub_categories).' '; ?>Sub Categories</p>
                </section>

                <?php foreach ($sub_categories as $sub_category): ?>
                <footer class="on-hover-action" id = "<?php echo $sub_category['id']; ?>">
                    <div class="album-images-count">
                        <i class="<?php echo $sub_category['icon_class']; ?>"></i> <?php echo $sub_category['name']; ?>
                    </div>

                    <div class="album-options" id = "subcategory-action-btn-<?php echo $sub_category['id']; ?>" style="display: none;">
                        <a href="{{route('categories.edit',$sub_category['id'])}}">
                            <i class="entypo-cog"></i>
                        </a>

                        <a href="#" onclick="confirm_modal('{{route('categories.destroy',$sub_category['id'])}}');">
                            <i class="entypo-trash"></i>
                        </a>
                    </div>
                </footer>
                <?php endforeach; ?>
                <div class="category-actions">
                    <a href = "{{route('categories.edit',$category['id'])}}" class="btn btn-info" id = "category-edit-btn-<?php echo $category['id']; ?>" style="display: none; margin-right:5px;">
                        Edit
                    </a>

                    <a href = "javascript:void(0)" class="btn btn-red" id = "category-delete-btn-<?php echo $category['id']; ?>" onclick="confirm_modal('<?php echo route("categories.destroy",$category["id"]); ?>')" style="margin-right:5px; float: right; display: none;">                        Delete
                    </a>
                </div>
            </article>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
Scrolling long content
When modals become too long for the user’s viewport or device, they scroll independent of the page itself. Try the demo below to see what we mean.

Copy
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
    Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $('.on-hover-action').mouseenter(function() {
        var id = this.id;
        $('#category-delete-btn-'+id).show();
        $('#category-edit-btn-'+id).show();
        $('#subcategory-action-btn-'+id).show();
    });
    $('.on-hover-action').mouseleave(function() {
        var id = this.id;
        $('#category-delete-btn-'+id).hide();
        $('#category-edit-btn-'+id).hide();
        $('#subcategory-action-btn-'+id).hide();
    });
</script>
