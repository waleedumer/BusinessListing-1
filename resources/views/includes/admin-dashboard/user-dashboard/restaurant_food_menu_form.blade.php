<div id="food_menu_parent_div" style="display: none; padding-top: 10px;">
    <div id = "food_menu_div">
        <div class="food_menu_div">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="panel panel-primary" data-collapsed="0">
                        <div class="panel-body">
                            <h5 class="card-title mb-0">Food menu</h5>
                            <div class="collapse show" style="padding-top: 10px;">
                                <div class="row no-margin">
                                    <div class="col-lg-8">
                                        <div class="form-group">
                                            <label for="menu_name">Menu name</label>
                                            <input type="text" name="menu_name[]" class="form-control" />
                                        </div>

                                        <div class="form-group">
                                            <label for="items">Items <small>(Press Enter after entering every variant)</small></label>
                                            <input type="text" class="form-control bootstrap-tag-input" name="items[]" data-role="tagsinput"/>
                                        </div>

                                        <div class="form-group">
                                            <label for="menu_price">Menu price ({{$settings['system_currency']->description}})</label>
                                            <input type="text" name="menu_price[]" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="wrapper-image-preview">
                                            <div class="box">
                                                <div class="js--image-preview"></div>
                                                <div class="upload-options">
                                                    <label for="menu-image-1" class="btn"> <i class="entypo-camera"></i> Upload menu image <small>(200 X 200) </small> </label>
                                                    <input id="menu-image-1" style="visibility:hidden;" type="file" class="image-upload" name="menu_image[]" accept="image/*">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row text-center">
        <button type="button" class="btn btn-primary" name="button" onclick="appendFoodMenu()"> <i class="mdi mdi-plus"></i> Add new food menu</button>
    </div>
</div>

<div id = "blank_food_menu_div">
    <div class="food_menu_div">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="panel panel-primary" data-collapsed="0">
                    <div class="panel-body">
                        <h5 class="card-title mb-0">Food menu
                            <button type="button" class="btn btn-danger btn-sm btn-rounded alignToTitleOnPreview" name="button" onclick="removeFoodMenu(this)">Remove this food menu</button>
                        </h5>
                        <div class="collapse show" style="padding-top: 10px;">
                            <div class="row no-margin">
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <label for="menu_name">Menu name</label>
                                        <input type="text" name="menu_name[]" class="form-control" />
                                    </div>

                                    <div class="form-group">
                                        <label for="items">Items <small>(Press Enter after entering every variant)</small></label>
                                        <input type="text" class="form-control bootstrap-tag-input" name="items[]" data-role="tagsinput"/>
                                    </div>

                                    <div class="form-group">
                                        <label for="menu_price">Menu price ({{$settings['system_currency']->description}})</label>
                                        <input type="text" name="menu_price[]" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="wrapper-image-preview">
                                        <div class="box">
                                            <div class="js--image-preview"></div>
                                            <div class="upload-options">
                                                <label for="" class="btn"> <i class="entypo-camera"></i>Upload menu image <small>(200 X 200) </small> </label>
                                                <input id="" style="visibility:hidden;" type="file" class="image-upload" name="menu_image[]" accept="image/*">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
