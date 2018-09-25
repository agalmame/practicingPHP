<?php
if(isset($entries) === false){
    trigger_error('views/list-entries-html.php need');
}
$entriesHtml = "<ul id='blog-entries'>";

while($entry = $entries->fetchObject()){
    $href = "index.php?page=blog&amp;id=$entry->entry_id";
    $entriesHtml .= "<li>
                        <h2>$entry->title</h2>
                        <div>$entry->intro
                            <p><a href='$href'>Read more</p>
                        </div>
                    </li>";
}
$entriesHtml .= "</ul>";
return $entriesHtml;