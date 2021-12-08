<?php
$filename = './playlist.txt';
$contents = file($filename);

foreach($contents as $line) {
    echo '<li
              class="list-group-item list-group-item-action border-0 d-flex align-items-center justify-content-between">
              <div class="list-left d-flex">
                <div class="list-icon mr-1">
                  <div class="avatar bg-rgba-info m-0">
                    <div class="avatar-content">
                      <i class="bx bxs-zap text-info font-size-base"></i>
                    </div>
                  </div>
                </div>
                <div class="list-content">
                  <span class="list-title">'.$content.'</span>
                  <small class="text-muted d-block"></small>
                </div>
              </div>
              <span>4:17</span>
            </li>';
}
?>