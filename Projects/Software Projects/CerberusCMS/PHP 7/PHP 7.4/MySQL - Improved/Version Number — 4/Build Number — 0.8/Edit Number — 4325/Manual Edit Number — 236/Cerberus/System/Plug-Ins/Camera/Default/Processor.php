<?php

var_dump($_FILES);

move_uploaded_file($_FILES['blobFile']['tmp_name'], './Member/$_GLOBAL_MEMBER_USERNAME/Files/Video/Live/streamed_video.mp4');
?>
