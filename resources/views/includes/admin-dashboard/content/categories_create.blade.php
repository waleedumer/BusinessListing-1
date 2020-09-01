<div class="row">
    <div class="col-lg-10">
        <div class="panel panel-primary" data-collapsed="0">
            <div class="panel-heading">
                <div class="panel-title">
                    Category Add From
                </div>
            </div>
            <div class="panel-body">

                <form action="{{route('categories.store')}}" method="post" enctype="multipart/form-data" role="form" class="form-horizontal form-groups-bordered">
                    @csrf
                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label">Category Title</label>

                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Provide Category Name">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="parent" class="col-sm-3 control-label">Parent Category</label>

                        <div class="col-sm-7">
                            <select name="parent" id = "parent" class="select2" data-allow-clear="true" data-placeholder="Select Parent Category ?>" onchange="checkCategoryType(this.value)">
                                <option value="0">None</option>
                                <?php foreach ($categories as $category): ?>
                                <?php if ($category['parent'] == 0): ?>
                                <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
                                <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group" id = "icon-picker-area">
                        <label for="font_awesome_class" class="col-sm-3 control-label">Icon Picker</label>

                        <div class="col-sm-7">
                            <input type="text" name="icon_class" class="form-control icon-picker" autocomplete="off" required>
                        </div>
                    </div>

                    <div class="form-group" id = "thumbnail-picker-area">
                        <label class="col-sm-3 control-label">Category Thumbnail<small>(400 X 255)</small> </label>

                        <div class="col-sm-7">

                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-new thumbnail" style="width: 200px; height: 200px;" data-trigger="fileinput">
                                    <img src="{{asset('uploads/category_thumbnails/thumbnail.png')}}" alt="...">
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px"></div>
                                <div>
									<span class="btn btn-white btn-file">
										<span class="fileinput-new">Select Image'</span>
										<span class="fileinput-exists">Change</span>
										<input type="file" name="category_thumbnail" accept="image/*">
									</span>
                                    <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-offset-3 col-sm-5" style="padding-top: 10px;">
                        <button type="submit" class="btn btn-info">Add Category</button>
                    </div>
                </form>
            </div>
        </div>
    </div><!-- end col-->
</div>

<script type="text/javascript">
    function checkCategoryType(category_type) {
        if (category_type > 0) {
            $('#thumbnail-picker-area').hide();
        }else {
            $('#thumbnail-picker-area').show();
        }
    }
</script>
