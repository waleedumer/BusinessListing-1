
<div class="opening">
    <div class="ribbon">
        <span class="<?php echo strtolower(($listing_details)->time) == 'closed' ? 'closed' : 'open'; ?>"><?php echo ($listing_details)->time; ?></span>
    </div>
    <i class="icon_clock_alt"></i>
    <h4>Opening hours</h4>
    <?php $time_config = $listing_details->time; ?>
    <div class="row">
        <div class="col-md-6">
            <ul>
                <li>
                    Saturday
                    <span>
            <?php
                        $time_interval = explode('-', $time_config['saturday']);
                        if ($time_interval[0] == 'closed' || $time_interval[1] == 'closed') {
                            echo 'Closed';
                        }else {
                            echo date('h a', strtotime("$time_interval[0]:00:00")).' - '.date('h a', strtotime("$time_interval[1]:00:00"));
                        }
                        ?>
          </span>
                </li>
                <li>
                    Sunday
                    <span>
            <?php
                        $time_interval = explode('-', $time_config['sunday']);
                        if ($time_interval[0] == 'closed' || $time_interval[1] == 'closed') {
                           echo 'closed';
                        }else {
                            echo date('h a', strtotime("$time_interval[0]:00:00")).' - '.date('h a', strtotime("$time_interval[1]:00:00"));
                        }
                        ?>
          </span>
                </li>
                <li>
                    'monday'); ?>
                    <span>
            <?php
                        $time_interval = explode('-', $time_config['monday']);
                        if ($time_interval[0] == 'closed' || $time_interval[1] == 'closed') {
                            echo 'closed';
                        }else {
                            echo date('h a', strtotime("$time_interval[0]:00:00")).' - '.date('h a', strtotime("$time_interval[1]:00:00"));
                        }
                        ?>
          </span>
                </li>
                <li>
                    Tuesday
                    <span>
            <?php
                        $time_interval = explode('-', $time_config['tuesday']);
                        if ($time_interval[0] == 'closed' || $time_interval[1] == 'closed') {
                            echo 'Closed';
                        }else {
                            echo date('h a', strtotime("$time_interval[0]:00:00")).' - '.date('h a', strtotime("$time_interval[1]:00:00"));
                        }
                        ?>
          </span>
                </li>
            </ul>
        </div>
        <div class="col-md-6">
            <ul>
                <li>
                    Wednesday
                    <span>
            <?php
                        $time_interval = explode('-', $time_config['wednesday']);
                        if ($time_interval[0] == 'closed' || $time_interval[1] == 'closed') {
                            echo 'Closed';
                        }else {
                            echo date('h a', strtotime("$time_interval[0]:00:00")).' - '.date('h a', strtotime("$time_interval[1]:00:00"));
                        }
                        ?>
          </span>
                </li>
                <li>
                    Thursday
                    <span>
            <?php
                        $time_interval = explode('-', $time_config['thursday']);
                        if ($time_interval[0] == 'closed' || $time_interval[1] == 'closed') {
                            echo 'Closed';
                        }else {
                            echo date('h a', strtotime("$time_interval[0]:00:00")).' - '.date('h a', strtotime("$time_interval[1]:00:00"));
                        }
                        ?>
          </span>
                </li>
                <li>
                    Friday
                    <span>
            <?php
                        $time_interval = explode('-', $time_config['friday']);
                        if ($time_interval[0] == 'closed' || $time_interval[1] == 'closed') {
                            echo 'Closed';
                        }else {
                            echo date('h a', strtotime("$time_interval[0]:00:00")).' - '.date('h a', strtotime("$time_interval[1]:00:00"));
                        }
                        ?>
          </span>
                </li>
            </ul>
        </div>
    </div>
</div>
